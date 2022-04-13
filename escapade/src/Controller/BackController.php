<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    /**
     * @Route("/back", name="back")
     */
    public function index(): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }


    /**
     * @Route("/hotelBack", name="hotelBack")
     */
    public function afficheHB(): Response
    {
        return $this->render('back/hotelBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/chambreBack", name="chambreBack")
     */
    public function afficheCB(): Response
    {
        return $this->render('back/chambreBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/guideBack", name="guideBack")
     */
    public function afficheGB(): Response
    {
        return $this->render('back/guideBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/siteTBack", name="siteTBack")
     */
    public function afficheSTB(): Response
    {
        return $this->render('back/siteTBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/MoyenTBack", name="MoyenTBack")
     */
    public function afficheMTB(): Response
    {
        return $this->render('back/MoyenTBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/AgenceLBack", name="AgenceLBack")
     */
    public function afficheALB(): Response
    {
        return $this->render('back/AgenceLBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/userBack", name="userBack")
     */
    public function afficheUB(): Response
    {
        return $this->render('back/userBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/PromoBack", name="PromoBack")
     */
    public function affichePromoB(): Response
    {
        return $this->render('back/PromoBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/reclamationBack", name="reclamationBack")
     */
    public function afficheRB(): Response
    {
        return $this->render('back/reclamationBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/panierBack", name="panierBack")
     */
    public function affichePB(): Response
    {
        return $this->render('back/panierBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/comBack", name="comBack")
     */
    public function afficheComB(): Response
    {
        return $this->render('back/comBack.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/login", name="login")
     */
    public function affichelogin(): Response
    {
        return $this->render('back/login.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }

    /**
     * @Route("/inscrit", name="inscrit")
     */
    public function afficheInscrit(): Response
    {
        return $this->render('back/inscrit.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }

}
