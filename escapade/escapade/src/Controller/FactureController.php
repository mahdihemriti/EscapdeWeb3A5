<?php

namespace App\Controller;

use App\Entity\Facture;
use App\Form\FactureType;
use App\Repository\PromotionRepository;
use App\Repository\FactureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/facture")
 */
class FactureController extends AbstractController
{
    /**
     * @Route("/", name="app_facture_index", methods={"GET"})
     */
    public function index(FactureRepository $factureRepository): Response
    {
        return $this->render('facture/index.html.twig', [
            'factures' => $factureRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_facture_new", methods={"GET", "POST"})
     */
    public function new(Request $request,FactureRepository $factureRepository,PromotionRepository $promotionRepository): Response
    {
        $facture = new Facture();
        $utilisateur=$this->getUser();
        $promotion=$promotionRepository->findPromoActive();
            $facture->setDate(new \DateTime('now'));
            $facture->setPrixfinal($request->get('prixF'));
        $facture->setPrixtotal($request->get('prixT'));
        $facture->setIdclient($utilisateur);
        if($promotion!=null)
        {
            $facture->setIdpromotion($promotion[0]);
        }
        else{
            $facture->setIdpromotion(null);
        }

            $em=$this->getDoctrine()->getManager();
            $em->persist($facture);
            $em->flush();

        $facture=$factureRepository->find($facture->getIdf());
        return $this->render('facture/panier.html.twig', [
            'facture' => $facture,
        ]);
    }

    /**
     * @Route("/{idf}", name="app_facture_show", methods={"GET"})
     */
    public function show($idf,FactureRepository $factureRepository): Response
    {
        $facture=$factureRepository->find($idf);
        return $this->render('facture/show.html.twig', [
            'facture' => $facture,
        ]);
    }

    /**

     * @Route("/{idf}", name="app_facture_show2", methods={"GET"})
     */
    public function show2($idf,FactureRepository $factureRepository): Response
    {
        $facture=$factureRepository->find($idf);
        return $this->render('facture/panier.html.twig', [
            'facture' => $facture,
        ]);
    }


    /**
     * @Route("/{idf}/edit", name="app_facture_edit", methods={"GET", "POST"})
     */
    public function edit($idf,Request $request, FactureRepository $factureRepository): Response
    {
        $facture=$factureRepository->find($idf);
        $form = $this->createForm(FactureType::class, $facture);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('facture/edit.html.twig', [
            'facture' => $facture,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/{idf}", name="app_facture_delete", methods={"POST"})
     */
    public function delete($idf, FactureRepository $factureRepository): Response
    {
        $facture=$factureRepository->find($idf);
        $em=$this->getDoctrine()->getManager();
        $em->remove($facture);
        $em->flush();
        return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/search", name="factureAjax", methods={"GET"})
     */

    public function search(Request $request ) :Response
    {
        $factureRepository = $this->getDoctrine()->getRepository(facture::class);
        $requestString=$request->get('searchValue');
        $facture = $factureRepository->findbyprix($requestString);
        return $this->render('facture/factureAjax.html.twig', [
            "factures"=>$facture
        ]);
    }

    public function getRealEntities($entities){

        foreach ($entities as $entity){
            $realEntities[$entity->getIdf()] = $entity->getPrixtotal();
        }
        return $realEntities;
    }


    /**
     * @Route("/listo1/back", name="liste", methods={"GET"})
     */
    public function listo1(factureRepository  $factureRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfoptions = new Options();
        $pdfoptions->set('defaultFont', 'Arial');
        $pdfoptions->set('tempDir','.\www\DaryGym\public\uploads\images');


        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfoptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('facture/liste.html.twig', [
            'factures' => $factureRepository->findAll(),
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
