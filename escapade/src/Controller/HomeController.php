<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('Front/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/hotel", name="hotel")
     */
    public function afficheH(): Response
    {
        return $this->render('Front/hotel.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/moyenT", name="moyenT")
     */
    public function afficheMT(): Response
    {
        return $this->render('Front/moyenT.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/siteT", name="siteT")
     */
    public function afficheST(): Response
    {
        return $this->render('Front/siteT.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function afficheR(): Response
    {
        return $this->render('Front/reclamation.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/profil", name="profil")
     */
    public function afficheP(): Response
    {
        return $this->render('Front/profil.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/apropos", name="apropos")
     */
    public function afficheApropos(): Response
    {
        return $this->render('Front/apropos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/panier", name="panier")
     */
    public function affichepanier(): Response
    {
        return $this->render('Front/panier.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
