<?php

namespace App\Controller;

use App\Entity\Destination;
use App\Form\DestinationType;
use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/destination")
 */
class DestinationController extends AbstractController
{
    /**
     * @Route("/", name="app_destination_index", methods={"GET"})
     */
    public function index(DestinationRepository $destinationRepository): Response
    {
        return $this->render('destination/index.html.twig', [
            'destinations' => $destinationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_destination_new", methods={"GET", "POST"})
     */
    public function new(Request $request)
    {

        $destination=new Destination();
        $form=$this->createForm(DestinationType::class,$destination);

        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid()){
            $uploadedFile = $form['img']->getData();
            if ($uploadedFile) {
                $image = $this->getParameter('kernel.project_dir') . '/public/images';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $image,
                    $newFilename
                );
                $destination->setImg($newFilename);}
            $em=$this->getDoctrine()->getManager();
            $em->persist($destination);
            $em->flush();
            return $this->redirectToRoute('app_destination_index');
        }
        return $this->render("destination/new.html.twig",
            ['form'=>$form->createView()]);


    }

    /**
     * @Route("/{id}", name="app_destination_show", methods={"GET"})
     */
    public function show($id, DestinationRepository $repository)
    {
        $destination=$repository->find($id);
        return $this->render('destination/show.html.twig', [
            'destination' => $destination,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_destination_edit", methods={"GET", "POST"})
     */
    public function edit($id,Request $request,  DestinationRepository $repository)
    {
        $destination=$repository->find($id);
        $form=$this->createForm(DestinationType::class,$destination);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid()){
            $uploadedFile = $form['img']->getData();
            if ($uploadedFile) {
                $image = $this->getParameter('kernel.project_dir') . '/public/images';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $image,
                    $newFilename
                );
                $destination->setImg($newFilename);}
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('app_destination_index');
        }
        return $this->render("destination/new.html.twig",
            ['form'=>$form->createView()]);

    }



    /**
     * @Route("/{id}", name="app_destination_delete")
     */
    public function delete($id, DestinationRepository $repo)

    {

        $destination = $repo->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($destination);
        $em->flush();
        return $this->redirectToRoute('app_destination_index');
    }

    }
