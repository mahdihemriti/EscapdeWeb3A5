<?php

namespace App\Controller;

use App\Entity\Sitetouristique;
use App\Form\SiteType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SitetouristiqueController extends AbstractController
{
    /**
     * @Route("/l", name="display_site")
     */
    public function index(): Response
    {
        $site = $this->getDoctrine()->getRepository(Sitetouristique::class)->findAll();
        return $this->render('sitetouristique/index.html.twig', [
            'b'=>$site

        ]);
    }

    /**
     * @Route("/listsite", name="list_site")
     */
    public function listsite(): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $site = $this->getDoctrine()->getManager()->getRepository(Sitetouristique::class)->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('sitetouristique/listsite.html.twig', [
            'b'=>$site
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
        // Send some text response
        return new Response("The PDF file has been succesfully generated !");
    }



    /**
     * @Route("/addsite", name="addsite")
     */
    public function addsite(Request $request,\Swift_Mailer $mailer): Response
    {
        $site = new Sitetouristique();

        $form = $this->createForm(SiteType::class,$site);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($site);//Add
            $em->flush();

            //$mailMessage =$guide->getnom().''.$guide->getPernom().''."est ajoute avec success";


            return $this->redirectToRoute('display_site');

        }
        return $this->render('sitetouristique/createSite.html.twig',['f'=>$form->createView()]);

    }

    /**
     * @Route("/removeSite/{id}", name="supp_site")
     */
    public function suppressionSite(Sitetouristique $site): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($site);
        $em->flush();

        return $this->redirectToRoute('display_site');


    }
    /**
     * @Route("/modifsite/{id}", name="modifsite")
     */
    public function modifsite(Request $request,$id): Response
    {
        $site = $this->getDoctrine()->getManager()->getRepository(Sitetouristique::class)->find($id);

        $form = $this->createForm(SiteType::class,$site);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('display_site');
        }
        return $this->render('sitetouristique/updatesite.html.twig',['f'=>$form->createView()]);

    }


}
