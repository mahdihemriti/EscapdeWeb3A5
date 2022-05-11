<?php

namespace App\Controller;

use App\Entity\Guide;
use App\Form\GuideType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twilio\Rest\Client;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Swift_Mailer;

use Dompdf\Options;
//use App\Service\MailerService;
//use App\Service\UploaderService;
//use MercurySeries\FlashyBundle\FlashyNotifier;


/**
 * @Route("/guide")
 */

class GuideController extends AbstractController
{

    /**
     * @Route("/", name="display_guide")
     */
    public function index(): Response
    {
        $guide = $this->getDoctrine()->getManager()->getRepository(Guide::class)->findAll();
        return $this->render('guide/index.html.twig', [
                'b'=>$guide

        ]);
    }

    /**
     * @Route("/listguides", name="list_guide")
     */
    public function listguides(): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $guide = $this->getDoctrine()->getManager()->getRepository(Guide::class)->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('guide/listguides.html.twig', [
            'b'=>$guide
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


    public function sendMail($guide, \Swift_Mailer $mailer){
        $message = (new \Swift_Message('Welcome to Escapade '.$guide->getNom()))
            ->setFrom('escapadecorporation@gmail.com')
            ->setTo($guide->getEmail())
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'guide/mail.html.twig',
                    ['guide' => $guide]
                ),
                'text/html'
            );


        $mailer->send($message);
    }


    /**
     * @Route("/addguide", name="addGuide")
     */
    public function addGuide(Request $request,\Swift_Mailer $mailer): Response
    {
        $guide = new Guide();

        $form = $this->createForm(GuideType::class,$guide);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($guide);//Add
            $em->flush();
            $this->sendMail($guide,$mailer);
            //$mailMessage =$guide->getnom().''.$guide->getPernom().''."est ajoute avec success";


            return $this->redirectToRoute('display_guide');

        }
        return $this->render('guide/createGuide.html.twig',['f'=>$form->createView()]);

    }


        /**
         * @Route("/removeGuide/{id}", name="supp_guide")
         */
        public function suppressionGuide(Guide $guide): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($guide);
        $em->flush();
    $sid    = "ACf4bd67e1836b4b3b4edc707ca6cefbaf";
                            $token  = "2be4b5a593fcbb0f184146914c474bea";
                            $twilio = new Client($sid, $token);

                            $message = $twilio->messages
                                ->create("+21625330296", // to
                                    array(
                                        //"from" => "+19124914916",
                                        "messagingServiceSid" => "MGc433e5afaccf64670714cfd8ba80a242",
                                        "body" => "Nous vous informe que Monsieur/Madame" .$guide->getNom()." ".$guide->getPernom()." est supprimé de la liste des guides actives."));

                            print($message->sid);

        return $this->redirectToRoute('display_guide');


    }

    /**
     * @Route("/modifguide/{id}", name="modifguide")
     */
    public function modifguide(Request $request,$id): Response
    {
        $guide = $this->getDoctrine()->getManager()->getRepository(Guide::class)->find($id);

        $form = $this->createForm(GuideType::class,$guide);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('display_guide');
        }
        return $this->render('guide/updateguide.html.twig',['f'=>$form->createView()]);

    }

}
