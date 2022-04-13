<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Repository\HotelRepository;
use App\Form\HotelType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/hotel")
 */
class HotelController extends AbstractController
{
    /**
     * @Route("/", name="app_hotel_index", methods={"GET"})
     */
    public function index(HotelRepository $hotelRepository): Response
    {
        return $this->render('hotel/index.html.twig', [
            'hotels' => $hotelRepository->findAll(),
        ]);
    }
    /**
     * @Route("/front", name="app_hotel_indexfront", methods={"GET"})
     */
    public function affichage(HotelRepository $hotelRepository)
    {
        return $this->render('hotel/indexFront.html.twig', [
            'hotels' => $hotelRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_hotel_new", methods={"GET", "POST"})
     */
    public function new(Request $request)
    {
        $hotel = new Hotel();
        $form=$this->createForm(HotelType::class,$hotel);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid()){

            $uploadedFile = $form['imghotel']->getData();
            if ($uploadedFile) {
                $image = $this->getParameter('kernel.project_dir') . '/public/images';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $image,
                    $newFilename
                );
                $hotel->setImghotel($newFilename);}
            $em=$this->getDoctrine()->getManager();
            $em->persist($hotel);
            $em->flush();
            return $this->redirectToRoute('app_hotel_index');
        }
        return $this->render("hotel/new.html.twig",
            ['form'=>$form->createView()]);
    }

    /**
     * @Route("/{idhotel}", name="app_hotel_show", methods={"GET"})
     */
    public function show($idhotel,HotelRepository $repository): Response
    {
        $hotel=$repository->find($idhotel);
        return $this->render('hotel/show.html.twig', [
            'hotel' => $hotel,
        ]);
    }

    /**
     * @Route("/{idhotel}/edit", name="app_hotel_edit", methods={"GET", "POST"})
     */
    public function edit($idhotel,Request $request, HotelRepository $repository): Response
    {
        $hotel=$repository->find($idhotel);
        $form=$this->createForm(HotelType::class,$hotel);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid()){
            $uploadedFile = $form['imghotel']->getData();
            if ($uploadedFile) {
                $image = $this->getParameter('kernel.project_dir') . '/public/images';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $image,
                    $newFilename
                );
                $hotel->setImghotel($newFilename);}
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('app_hotel_index');
        }
        return $this->render("hotel/new.html.twig",
            ['form'=>$form->createView()]);
    }

    /**
     * @Route("/{idhotel}", name="app_hotel_delete", methods={"POST"})
     */
    public function delete($idhotel,Request $request, HotelRepository $repo): Response
    {
        $hotel = $repo->find($idhotel);
        $em = $this->getDoctrine()->getManager();
        $em->remove($hotel);
        $em->flush();
        return $this->redirectToRoute('app_hotel_index');
    }
}
