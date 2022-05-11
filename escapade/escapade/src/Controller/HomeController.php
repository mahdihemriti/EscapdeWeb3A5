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
        $user=$this->getUser();
        return $this->render('Front/index.html.twig', [
            'controller_name' => 'HomeController','u'=>$user,
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

}
