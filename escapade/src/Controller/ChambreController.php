<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Form\ChambreType;
use App\Repository\ChambreRepository;
use App\Repository\DestinationRepository;
use App\Repository\HotelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/chambre")
 */
class ChambreController extends AbstractController
{
    /**
     * @Route("/", name="app_chambre_index", methods={"GET"})
     */
    public function index(ChambreRepository $chambreRepository): Response
    {
        return $this->render('chambre/index.html.twig', [
            'chambres' => $chambreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_chambre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, \Swift_Mailer $mailer): Response
    {
        $chambre = new Chambre();
        $form = $this->createForm(ChambreType::class, $chambre);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['img']->getData();
            if ($uploadedFile) {
                $image = $this->getParameter('kernel.project_dir') . '/public/images';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $image,
                    $newFilename
                );
                $chambre->setImg($newFilename);}
            $chambre->setStatus("disponible");
            $em=$this->getDoctrine()->getManager();
            $em->persist($chambre);
            $em->flush();
            $message = (new \Swift_Message('activation mail'))

                ->setFrom('celine.benbrahim@esprit.tn')
                ->setTo("meryem.daghrour@esprit.tn")
                ->setBody($this->renderView(
                // templates/emails/registration.html.twig
                    'chambre/message.html.twig'
                ),
                    'text/html'
                )


            ;

            $mailer->send($message);
            return $this->redirectToRoute('app_chambre_show',['id'=>$chambre->getId()]);
        }

        return $this->render('chambre/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_chambre_show", methods={"GET"})
     */
    public function show($id, ChambreRepository $chambreRepository): Response
    {
        $chambre=$chambreRepository->find($id);
        return $this->render('chambre/show.html.twig', [
            'chambre' => $chambre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_chambre_edit", methods={"GET", "POST"})
     */
    public function edit($id,Request $request,  ChambreRepository $chambreRepository)
    {
        $chambre = $chambreRepository->find($id);
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('app_chambre_show',['id'=>$chambre->getId()]);
        }

        return $this->render('chambre/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_chambre_delete", methods={"POST"})
     */
    public function delete($id, ChambreRepository $repo): Response
    {
        $chambre = $repo->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($chambre);
        $em->flush();
        return $this->redirectToRoute('app_chambre_index');
    }
}
