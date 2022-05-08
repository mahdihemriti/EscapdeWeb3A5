<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\Commentaire;
use App\Entity\Utilisateur;
use App\Form\BlogType;
use App\Form\CommentaireType;
use App\Repository\BlogRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/", name="app_blog_index", methods={"GET"})
     */
    public function index(BlogRepository $blogRepository): Response
    {
        return $this->render('blog/index.html.twig', [
            'blogs' => $blogRepository->findAll(),
        ]);
    }

    /**
     * @Route("showf/{id}", name="frontblog", methods={"GET", "POST"})
     */
    public function detail($id,BlogRepository $blogRepository,Request $request,CommentaireRepository $com): Response
    {
        $blog=$blogRepository->find($id);
        $commentaire = new Commentaire();
        $utilisateur=$this->getUser();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        $commentaire->setIdclient($utilisateur);
        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setDate(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $commentaire->setIdblog($blog);
            $em->persist($commentaire);
            $em->flush();
        }
        return $this->render('Front/detailBlog.html.twig', [
            'blog' => $blog,
            'commentaires' => $com->findBy(['idblog'=> $blog]),
            'forms' => $form->createView()

        ]);
    }

    /**
     * @Route("/front", name="app_blog_indexfront", methods={"GET"})
     */
    public function indexfront(BlogRepository $blogRepository): Response
    {
        return $this->render('Front/blogFront.html.twig', [
            'blogs' => $blogRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_blog_new", methods={"GET", "POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer): Response
    {

        $blog = new blog();
        $utilisateur=$this->getUser();
        $form = $this->createForm(BlogType::class, $blog);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        $blog->setIdclient($utilisateur);
        if ($form->isSubmitted() && $form->isValid()) {

            $blog->setDate(new \DateTime('now'));
            $uploadedFile = $form['image']->getData();
            if ($uploadedFile) {
                $image = $this->getParameter('kernel.project_dir') . '/public/images';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $image,
                    $newFilename
                );
                $blog->setImage($newFilename);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($blog);
            $em->flush();
            //MSG
            $sid = 'AC025364ca8637a9f62bc9aa52443b9819';
            $token = 'fe377b1bcbf67998514d97d68371e022';
            $sms = new \Twilio\Rest\Client($sid, $token);
            $sms->messages->create(
                '+216'.$utilisateur->getNumTel(),
                [
                    'from' => '+12513335897',
                    'body' => 'BONNE NOUVELLE ! votre blog a été publié'

                ]
            );
            //MAIL
            /*  $message = (new \Swift_Message('Blog'))

                  ->setFrom('celine.benbrahim@esprit.tn')
                  ->setTo($utilisateur->getEmail())
                  ->setBody($this->renderView(
                  // templates/emails/registration.html.twig
                      'blog/msg.html.twig'
                  ),
                      'text/html'
                  )
              ;

              $mailer->send($message);*/
            return $this->redirectToRoute('app_blog_indexfront');
        }

        return $this->render('blog/new.html.twig', [
            'blog' => $blog,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/{id}", name="app_blog_show", methods={"GET"})
     */
    public function show($id,BlogRepository $blogRepository): Response
    {
        $blog=$blogRepository->find($id);
        return $this->render('blog/show.html.twig', [
            'blog' => $blog,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="app_blog_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, $id, BlogRepository $blogRepository): Response
    {
        $blog = $blogRepository->find($id);
        $form = $this->createForm(BlogType::class, $blog);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['image']->getData();
            if ($uploadedFile) {
                $image = $this->getParameter('kernel.project_dir') . '/public/images';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $image,
                    $newFilename
                );
                $blog->setImage($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('app_blog_indexfront');
        }

        return $this->render('blog/edit.html.twig', [
            'blog' => $blog,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_blog_delete", methods={"POST"})
     */
    public function delete($id,BlogRepository $blogRepository): Response
    {
        $Blog=$blogRepository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Blog);
        $em->flush();

        return $this->redirectToRoute('app_blog_indexfront', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/search/back", name="blogAjax", methods={"GET"})
     */

    public function search(Request $request ) :Response
    {
        $BlogRepository = $this->getDoctrine()->getRepository(Blog::class);
        $requestString=$request->get('searchValue');
        $blog = $BlogRepository->findbyNom($requestString);
        return $this->render('blog/blogAjax.html.twig', [
            "blogs"=>$blog,
        ]);
    }

    public function getRealEntities($entities){

        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getNom();
        }
        return $realEntities;
    }

    /**
     * @Route("/TrierDESC/back", name="trie1",methods={"GET"})
     */
    public function Trierdate(Request $request,BlogRepository $blogRepository): Response
    {
        $blogRepository = $this->getDoctrine()->getRepository(Blog::class);
        $blog = $blogRepository->findBydate();

        return $this->render('blog/index.html.twig', [
            'blogs' => $blog,
        ]);
    }


    /**
     * @Route("/TrierASC/back", name="trie2",methods={"GET"})
     */
    public function Trierdate2(Request $request,BlogRepository $blogRepository): Response
    {
        $blogRepository = $this->getDoctrine()->getRepository(Blog::class);
        $blog = $blogRepository->findBydate2();

        return $this->render('blog/index.html.twig', [
            'blogs' => $blog,
        ]);
    }
}