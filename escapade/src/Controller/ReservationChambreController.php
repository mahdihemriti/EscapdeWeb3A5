<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\ReservationChambre;
use App\Form\RechercheType;
use App\Repository\ChambreRepository;
use App\Repository\DestinationRepository;
use App\Repository\HotelRepository;
use App\Repository\ReservationChambreRepository;
use App\Form\ReservationChambreType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservationchambre")
 */
class ReservationChambreController extends AbstractController
{
    /**
     * @Route("/", name="app_reservation_chambre_index", methods={"GET"})
     */
    public function index(ReservationChambreRepository $reservationChambreRepository): Response
    {
        return $this->render('reservation_chambre/index.html.twig', [
            'reservation_chambres' => $reservationChambreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_reservation_chambre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ReservationChambreRepository $reservationChambreRepository)
    {
        $reservationChambre = new ReservationChambre();
        $form = $this->createForm(ReservationChambreType::class, $reservationChambre);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $reservationChambre->setIdchambre();

            $reservationChambre->setIdclient();
            $em->persist($reservationChambre);
            $em->flush();
            return $this->redirectToRoute('app_reservation_chambre_index');
        }

        return $this->render('reservation_chambre/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="app_reservation_chambre_show", methods={"GET"})
     */
    public function show(ReservationChambre $reservationChambre): Response
    {
        return $this->render('reservation_chambre/show.html.twig', [
            'reservation_chambre' => $reservationChambre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_reservation_chambre_edit", methods={"GET", "POST"})
     */
    public function edit($id,Request $request, ReservationChambreRepository $reservationChambreRepository): Response
    {
        $reservation=$reservationChambreRepository->find($id);
        $form=$this->createForm(ReservationChambreType::class,$reservation);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('app_reservation_chambre_index');
        }
        return $this->render('reservation_chambre/new.html.twig',
            ['form'=>$form->createView()]);
    }

    /**
     * @Route("/{id}", name="app_reservation_chambre_delete", methods={"POST"})
     */
    public function delete($id, Request $request,  ReservationChambreRepository $reservationChambre): Response
    {
        $reservation = $reservationChambre->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute('app_reservation_chambre_index');
    }

    //$_POST['date_end']
    /**
     * @Route("/find/{id}",name="find")
     */
    public function findFreeRoom(Request $request,$id)
    {
        $dateAller=$request->get('date-start');
        $dateRetour=$request->get('date-end');
        $type=$request->get('type');
        $vsm=$request->get('vsm');
        $chambres = $this->getDoctrine()
            ->getRepository(ReservationChambre::class)
            ->findFreeRoom($id,$type,$vsm,$dateAller,$dateRetour);
        return $this->render('chambre/chambreDispo.html.twig', [
            'chambres' => $chambres, 'checkIn'=>$dateAller, 'checkOut'=>$dateRetour
        ]);


    }

}
