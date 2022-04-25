<?php

namespace App\Controller;

use App\Entity\Destination;
use App\Form\DestinationType;
use App\Repository\ChambreRepository;
use App\Repository\DestinationRepository;
use App\Repository\HotelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\JsonResponse;

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
     * @Route("/dest",name="show_dest_front")
     */

    public function afficherFront(DestinationRepository $repo)
    {
        return $this->render('destination/indexFront.html.twig',[
            'destinations'=>$repo->findAll()]);
    }
    /**
     * @Route("/new", name="app_destination_new", methods={"GET", "POST"})
     */
    public function new(Request $request)
    {

        $destination=new Destination();
        $form=$this->createForm(DestinationType::class,$destination);
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
            return $this->redirectToRoute('app_destination_show',['id'=>$destination->getId()]);
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
            'dest' => $destination,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_destination_edit", methods={"GET", "POST"})
     */
    public function edit($id,Request $request,  DestinationRepository $repository)
    {
        $destination=$repository->find($id);
        $form=$this->createForm(DestinationType::class,$destination);

        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid()){
            $uploadedFile = $form['img']->getData();
            echo $uploadedFile->getClientOriginalName();
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
        if (!$form->isSubmitted()){
            /*
            if ($form->getData() == "France") {
                $form->getParent()->add('ville', ChoiceType::class,
                    array('choices' => ['Paris' => 'Paris', 'Nice' => 'Nice']));
            }
            if ($form->getData() == "Belgique") {
                $form->getParent()->add('ville', ChoiceType::class,
                    array('choices' => ['Bruxelles' => 'Bruxelles', 'Namur' => 'Namur', 'Bruges' => 'Bruges']));
            }
            if ($form->getData() == "Japon") {
                $form->getParent()->add('ville', ChoiceType::class,
                    array('choices' => ['Okazaki' => 'Okazaki', 'Toyokawa' => 'Toyokawa', 'Inazawa' => 'Inazawa']));
            }

            if ($form->getData() == "Chine") {
                $form->getParent()->add('ville', ChoiceType::class,
                    array('choices' => ['Shanghai' => 'Shanghai', 'Pékin' => 'Pékin', 'Jinan' => 'Jinan']));
            }
            if ($form->getData() == "Cuba") {
                $form->add('ville', ChoiceType::class,
                    array('choices' => ['Havane' => 'Havane', 'Bayamo' => 'Bayamo', 'Florida' => 'Florida']));
            }
            */
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

    /**
     * @Route("/ajax/getville/{id}/", name="app_destination_getville", methods={"GET"})
     * @return JsonResponse
     */
    public function getVilleajax(Request $request,DestinationRepository $repo,$id)
    {
        $destination = $repo->find($id);
        return new JsonResponse($destination->getVille());

    }
    /**
     * @Route("/search/back", name="destinationAjax", methods={"GET"})
     */

    public function search(Request $request ) :Response
    {
        $destinationRepository = $this->getDoctrine()->getRepository(Destination::class);
        $requestString=$request->get('searchValue');
        $destination = $destinationRepository->findbypays($requestString);
        return $this->render('destination/destinationAjax.html.twig', [
            "destinations"=>$destination
        ]);
    }

    public function getRealEntities($entities){

        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getPays();
        }
        return $realEntities;
    }
    /**
     * @Route("/listo1/back", name="listo1", methods={"GET"})
     */
    public function listo1(DestinationRepository  $destinationRepository): Response
    {

        $pdfoptions = new Options();
        $pdfoptions->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($pdfoptions);

        $html = $this->renderView('destination/listo1.html.twig', [
            'destinations' => $destinationRepository->findAll(),
        ]);

        $dompdf->loadHtml($html);


        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);

        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
                      ->loadView('reports.invoiceSell')
                      ->stream();

    }






}
