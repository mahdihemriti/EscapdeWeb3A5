<?php

namespace App\Controller;

use App\Entity\Destination;
use App\Entity\Hotel;
use App\Repository\ChambreRepository;
use App\Repository\DestinationRepository;
use App\Repository\HotelRepository;
use App\Form\HotelType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @Route("/search/{iddest}", name="app_dests_stajaxs", methods={"GET"})
     * @return JsonResponse
     */
    public function ajaxStat(Request $request,$iddest)
    {
        $data=$this->getDoctrine()->getManager()->getRepository(Hotel::class)->findBydes($iddest);
        $nbrstars=[0,0,0,0,0];
        for ($i = 1; $i <5; $i++) {
            $nbrstars[$i]=$this->calculstars($data,$i);
        }

        return new JsonResponse($nbrstars);

    }
    /**
     * @Route("/stat",name="statHotel")
     */

    public function stat()
    {
        $data=$this->getDoctrine()->getManager()->getRepository(Destination::class)->findAll();
        return $this->render('hotel/stat.html.twig',[
            'destinations'=>$data
        ]);
    }
    /**
     * @Route("/ReservationCh",name="ReservationCh")
     */

    public function reserv()
    {
        return $this->render('hotel/reserverChambre.html.twig');
    }
    /**
     * @Route("/front", name="app_hotel_indexfront", methods={"GET"})
     */
    public function affichage(HotelRepository $hotelRepository)
    {
        return $this->render('hotel/indexFront.html.twig', [
            'hotels' => $hotelRepository->findAll()
        ]);
    }

    /**
     * @Route("/{id}/hotel", name="app_hotel_id_dest")
     */
    public function liste($id, HotelRepository $hotelRepository)
    {
        return $this->render('hotel/listeHotelFront.html.twig', [
            'hotels' => $hotelRepository->findBydes($id),'id'=>$id
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
                $hotel->setImghotel($newFilename);
            }
            $em=$this->getDoctrine()->getManager();
            $em->persist($hotel);
            $em->flush();
           /* $sid = 'AC261bf63b493af9d47649c8ba01efc947';
            $token = '296eb5f7d332842af27a38b4126c5571';
            $sms = new \Twilio\Rest\Client($sid, $token);
            $sms->messages->create(
                '+21627986111',
                [
                    'from' => '+19379091230',
                    'body' => 'Un nouveau hotel a été ajouté avec succès' . ' - ' .
                        $hotel->getNom().' - ' .$hotel->getNbretoile() . ' étoiles'

                ]
            );*/
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


    /**
     * @Route("/{id}/hotel/Asc", name="affichRI")
     */
    public function afficheHotelFiltre(Request $request)
    {
        $hotels =$this->getDoctrine()->getRepository(Hotel::class)->findBy([], ['nbretoile' => 'ASC']);
        return $this->render('hotel/listeHotelFront.html.twig', [
            "hotels" => $hotels,'id'=>$request->get("id")
        ]);
    }

    /**
     * @Route("/{id}/hotel/Desc", name="affiche_TRI")
     */
    public function afficheHotelFiltreD(Request $request)
    {
        $hotels =$this->getDoctrine()->getRepository(Hotel::class)->findBy([], ['nbretoile' => 'DESC']);
        return $this->render('hotel/listeHotelFront.html.twig', [
            "hotels" => $hotels,'id'=>$request->get("id")
        ]);
    }

    public function calculstars($t,$star)
    {
        $count=0;
        $nbrparstar=[];
        foreach ($t as $f) {
            if ($f->getNbretoile()==$star){
                $count+=1;
            }
        }
        return $count;
    }



}
