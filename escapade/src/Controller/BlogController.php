<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Form\BlogType;
use App\Repository\BlogRepository;
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
    public function index(EntityManagerInterface $entityManager): Response
    {
        $blogs = $entityManager
            ->getRepository(Blog::class)
            ->findAll();

        return $this->render('blog/index.html.twig', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * @Route("showf/{id}", name="frontblog", methods={"GET"})
     */
    public function detail($id,BlogRepository $blogRepository): Response
    {
        $blog=$blogRepository->find($id);
        return $this->render('Front/detailBlog.html.twig', [
            'blog' => $blog,
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
    public function new(Request $request): Response
    {
        $blog = new blog();
        $form = $this->createForm(BlogType::class, $blog);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

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

            $em=$this->getDoctrine()->getManager();
            $em->persist($blog);
            $em->flush();

            return $this->redirectToRoute('app_blog_index');
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
            return $this->redirectToRoute('app_blog_index');
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

        return $this->redirectToRoute('app_blog_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/search/back", name="blogAjax", methods={"GET"})
     */

    public function search(Request $request ) :Response
    {
        $blogRepository = $this->getDoctrine()->getRepository(Blog::class);
        $requestString=$request->get('searchValue');
        $blog = $blogRepository->findbynom($requestString);
        return $this->render('blog/blogAjax.html.twig', [
            "blogs"=>$blog
        ]);
    }

    public function getRealEntities($entities){

        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getNom();
        }
        return $realEntities;
    }
}
