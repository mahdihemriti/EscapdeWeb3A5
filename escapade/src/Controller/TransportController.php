<?php

namespace App\Controller;

use App\Entity\Agencedelocation;
use App\Entity\Moyendetransport;
use App\Form\TransportType;
use App\Repository\MoyendetransportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportController extends AbstractController
{

    /**
     * @Route("/transport", name="app_transport")
     */
    public function index(MoyendetransportRepository $a): Response
    {
        return $this->render('transport/afficher.html.twig', [
            'transport' => $a->findAll(),
        ]);
    }
    /**
     * @Route("/transportfront", name="transportfront")
     */
    public function indexfront(MoyendetransportRepository $a): Response
    {
        return $this->render('transport/afficherfront.html.twig', [
            'transport' => $a->findAll(),
        ]);
    }

    /**
     * @Route("/detailFront/{id}", name="detailFront")
     */
    public function detailFront(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $agence = $em->getRepository(Agencedelocation::class)->find($id);

        //     var_dump($categorie);die();



        $transport = $em->getRepository(Moyendetransport::class)->findBy(['idagence'=>$agence]);//list des prod ta3 categorie ly clikit alih


        return $this->render('transport/afficherfront.html.twig', [
            "transport" => $transport,
        ]);
    }

    /**
     * @Route("/newtransport", name="transport_new")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $transport = new Moyendetransport();
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $transportFile = $form['image']->getData();

            if ($transportFile) {
                $filename = md5(uniqid()) . '.' . $transportFile->guessExtension();
                $transportFile->move($this->getParameter('kernel.project_dir') . '/public/uploads/transport', $filename);
                $transport->setImage($filename);
            }
            $entityManager->persist($transport);
            $entityManager->flush();

            return $this->redirectToRoute('app_transport', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('transport/ajouter.html.twig', [
            'transport' => $transport,
            'form_transport' => $form->createView(),
        ]);
    }
    /**
     * @Route("/modifytransport/{id}", name="modifytransport")
     */
    public function modifytransport(Request $request,Moyendetransport $a,EntityManagerInterface $entityManager): Response
    {
        $id = $a->getId();
        $entityManager = $this->getDoctrine()->getManager();

        $transport = $entityManager->getRepository(Moyendetransport::class)->find($id);
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transportFile = $form['image']->getData();

            if ($transportFile) {
                $filename = md5(uniqid()) . '.' . $transportFile->guessExtension();
                $transportFile->move($this->getParameter('kernel.project_dir') . '/public/uploads/transport', $filename);
                $transport->setImage($filename);
            }
            $entityManager->persist($transport);
            $entityManager->flush();

            return $this->redirectToRoute('app_transport', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('transport/modifier.html.twig', [
            'transport' => $transport,
            'form_transport' => $form->createView(),
        ]);
    }

    /**
     * @Route("/transport_delete/{id}", name="transport_delete")
     */
    public function transport_delete(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $salle = $entityManager->getRepository(Moyendetransport::class)->find($id);
        $entityManager->remove($salle);
        $entityManager->flush();
        $this->addFlash('success' , 'L"action a été effectué');
        return $this->redirectToRoute("app_transport");
    }

}
