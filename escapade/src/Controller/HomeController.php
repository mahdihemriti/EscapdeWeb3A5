<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/homeC", name="homeC")
     */
    public function homeC(): Response
    {
        return $this->render('front/homeConnected.html.twig');
    }
    /**
     * @Route("/hotel", name="hotel")
     */
    public function afficheH(): Response
    {
        return $this->render('front/hotel.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/moyenT", name="moyenT")
     */
    public function afficheMT(): Response
    {
        return $this->render('front/moyenT.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/siteT", name="siteT")
     */
    public function afficheST(): Response
    {
        return $this->render('front/siteT.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/recla", name="recla")
     */
    public function afficheR(): Response
    {
        return $this->render('front/reclamation.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @Route("/profil", name="profil")
     */
    public function afficheP(): Response
    {
        return $this->render('front/profil.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/apropos", name="apropos")
     */
    public function afficheApropos(): Response
    {
        return $this->render('front/apropos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/panier", name="panier")
     */
    public function affichepanier(): Response
    {
        return $this->render('front/panier.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/forgetPassword", name="forgetPassword")
     */
    public function afficheForgetPassword(): Response
    {
        return $this->render('utilisateur/forgetPassword.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
