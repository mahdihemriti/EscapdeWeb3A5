<?php

namespace App\Controller;

use App\Entity\Agencedelocation;
use App\Form\AgenceType;
use App\Repository\AgencedelocationRepository;
use Doctrine\ORM\EntityManagerInterface;
use necrox87\NudityDetector\NudityDetector;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AgenceController extends AbstractController
{
    /**
     * @Route("/agencedelocation", name="app_agence")
     */
    public function index(AgencedelocationRepository $a,Request $request): Response
    {
        $agence = $this->getDoctrine()->getRepository(Agencedelocation::class)->findAll();

        if ($request->isMethod("POST") ) {

            $type= $request->get('sort') ;
            if ($type == "libelle" ) {
                $agence = $this->getDoctrine()->getRepository(Agencedelocation::class)->findBy(array(),array('libelle' => 'ASC'));
            }
            elseif ($type == "adresse") {
                $agence = $this->getDoctrine()->getRepository(Agencedelocation::class)->findBy(array(),array('adresse' => 'ASC'));
            }
            else {
                $agence = $this->getDoctrine()->getRepository(Agencedelocation::class)->findAll();
            }

        }
        return $this->render('agence/afficher.html.twig',array("agence"=>$agence));


    } /**
     * @Route("/agencedelocationfront", name="agencedelocationfront")
     */
    public function indexfront(AgencedelocationRepository $a): Response
    {
        return $this->render('agence/afficherfront.html.twig', [
            'agence' => $a->findAll(),
        ]);
    }
    /**
     * @Route("/new", name="agence_new")
     */
    public function new(Request $request, \Swift_Mailer $mailer, EntityManagerInterface $entityManager): Response
    {
        $agence = new Agencedelocation();
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $agenceFile = $form['image']->getData();
            $NudityChecker = new NudityDetector($agenceFile);
            if($NudityChecker->isPorn()) {
                $this->addFlash('error' , 'elle comprend un contenu sensible');
            }
            else if ($agenceFile) {
                $filename = md5(uniqid()) . '.' . $agenceFile->guessExtension();

                $agenceFile->move($this->getParameter('kernel.project_dir') . '/public/uploads/agence', $filename);
                $agence->setImage($filename);
            }
            $message = (new \Swift_Message('Ajout d une agence '))
                //ili bech yeb3ath
                ->setFrom('eescapade6@gmail.com')
                //ili bech ijih l message
                ->setTo('eescapade6@gmail.com') ;
// to uncomment and change the value to change image
           // $img9 = $message->embed(\Swift_Image::fromPath('email/image-9.png'));
          //  $img8 = $message->embed(\Swift_Image::fromPath('email/image-8.jpeg'));
            $img9 ="";
            $img8 ="";

            $message->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'emails/Ajout.html.twig',
                    [
                        'img9'=>$img9,
                        'img8'=>$img8,
                    ]
                ),
                'text/html'
            )
            ;
            //on envoi l email
            $mailer->send($message) ;
            $entityManager->persist($agence);
            $entityManager->flush();
            $this->addFlash('success' , 'vous avez ajouté avec succes votre agence');

            return $this->redirectToRoute('app_agence', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agence/ajouter.html.twig', [
            'agence' => $agence,
            'form_agence' => $form->createView(),
        ]);
    }
    /**
     * @Route("/modifyagence/{id}", name="modifyagence")
     */
    public function modifyagence(Request $request,Agencedelocation $a,EntityManagerInterface $entityManager): Response
    {
        $id = $a->getId();
        $entityManager = $this->getDoctrine()->getManager();

        $agence = $entityManager->getRepository(Agencedelocation::class)->find($id);
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agenceFile = $form['image']->getData();
            $NudityChecker = new NudityDetector($agenceFile);
            if($NudityChecker->isPorn()) {
                $this->addFlash('error' , 'elle comprend un contenu sensible');
            }
            else if ($agenceFile) {
                $filename = md5(uniqid()) . '.' . $agenceFile->guessExtension();

                $agenceFile->move($this->getParameter('kernel.project_dir') . '/public/uploads/agence', $filename);
                $agence->setImage($filename);
            }
            $entityManager->persist($agence);
            $entityManager->flush();

            return $this->redirectToRoute('app_agence', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agence/modifier.html.twig', [
            'agence' => $agence,
            'form_agence' => $form->createView(),
        ]);
    }

    /**
     * @Route("/agence_delete/{id}", name="agence_delete")
     */
    public function agence_delete(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $Agencedelocation = $entityManager->getRepository(Agencedelocation::class)->find($id);
        $entityManager->remove($Agencedelocation);
        $entityManager->flush();
        $this->addFlash('success' , 'L"action a été effectué');
        return $this->redirectToRoute("app_agence");
    }
    /**
     * @Route("/ajax_search/", name="ajax_search")
     */
    public function chercherProduit(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $agencess =  $em->getRepository(Agencedelocation::class)->rechercheAvance($requestString);
        if(!$agencess) {
            $result['libelle']['error'] = "Product non trouvé 🙁 ";
        } else {
            $result['libelle'] = $this->getRealEntities($agencess);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($agencess){

        foreach ($agencess as $agencess){
            $realEntities[$agencess->getId()] = [$agencess->getImage(),$agencess->getLibelle()];

        }
        return $realEntities;
    }

    /**
     * @route ("/AgencedelocationFront/{id}/like",name="agence_like")
     */
    public function like(Agencedelocation $Agencedelocation,int $id,AgencedelocationRepository $repo): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $agence = $entityManager->getRepository(Agencedelocation::class)->find($id);
        $agence->setLikes($agence->getLikes()+1)  ;
        $entityManager->persist($agence);
        $entityManager->flush();
        return $this->redirectToRoute("agencedelocationfront");
    }
}
