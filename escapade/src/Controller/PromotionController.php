<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use App\Repository\FactureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;


/**
 * @Route("/promotion")
 */
class PromotionController extends AbstractController
{
    /**
     * @Route("/", name="app_promotion_index", methods={"GET"})
     */
    public function index(PromotionRepository $promotionRepository): Response
    {
        return $this->render('promotion/index.html.twig', [
            'promotions' => $promotionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/front", name="app_promotion_indexfront", methods={"GET"})
     */
    public function indexfront(PromotionRepository $promotionRepository): Response
    {
        return $this->render('promotion/promotionFront.html.twig', [
            'promotions' => $promotionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_promotion_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em=$this->getDoctrine()->getManager();
            $em->persist($promotion);
            $em->flush();

            return $this->redirectToRoute('app_promotion_index');
        }

        return $this->render('promotion/new.html.twig', [
            'promotion' => $promotion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_promotion_show", methods={"GET"})
     */
    public function show($id,PromotionRepository $promotionRepository): Response
    {
        $promotion=$promotionRepository->find($id);
        return $this->render('promotion/show.html.twig', [
            'promotion' => $promotion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_promotion_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, $id, PromotionRepository $promotionRepository): Response
    {
        $promotion = $promotionRepository->find($id);
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('app_promotion_index');
        }

        return $this->render('promotion/edit.html.twig', [
            'promotion' => $promotion,
            'form' => $form->createView(),
        ]);


    }

    /**
     * @Route("/{id}", name="app_promotion_delete", methods={"POST"})
     */
    public function delete($id, PromotionRepository $promotionRepository): Response
    {
        $promotion=$promotionRepository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($promotion);
        $em->flush();
        return $this->redirectToRoute('app_promotion_index');
    }


    /**
     * @Route("/search/back", name="promoAjax", methods={"GET"})
     */

    public function search(Request $request ) :Response
    {
        $promotionRepository = $this->getDoctrine()->getRepository(Promotion::class);
        $requestString=$request->get('searchValue');
        $promotion = $promotionRepository->findbytaux($requestString);
        return $this->render('promotion/promoAjax.html.twig', [
            "promotions"=>$promotion
        ]);
    }

    public function getRealEntities($entities){

        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getTaux();
        }
        return $realEntities;
    }


    /**
     * @Route("/listo1/back", name="listo1", methods={"GET"})
     */
    public function listo1(PromotionRepository  $promotionRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfoptions = new Options();
        $pdfoptions->set('defaultFont', 'Arial');
        $pdfoptions->set('tempDir','.\www\DaryGym\public\uploads\images');


        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfoptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('promotion/listo1.html.twig', [
            'promotions' => $promotionRepository->findAll(),
        ]);
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }


}
