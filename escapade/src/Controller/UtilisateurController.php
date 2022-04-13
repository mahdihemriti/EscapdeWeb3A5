<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\LoginType;
use App\Form\RegistrationFormType;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/utilisateur")
 */
class UtilisateurController extends AbstractController
{
    /**
     * @Route("/", name="app_utilisateur_index", methods={"GET"})
     */
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_utilisateur_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->add($utilisateur);
            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/show/{id}", name="app_utilisateur_show", methods={"GET"})
     */
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_utilisateur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->add($utilisateur);
            return $this->redirectToRoute('app_utilisateur_show', ['id' => $utilisateur->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/del/{id}", name="app_utilisateur_delete", methods={"POST"})
     */
    public function delete(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $utilisateurRepository->remove($utilisateur);
        }

        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/signUp", name="signUp")
     */
    public function signUp(Request $request): Response
    {
        $utilisateur = new utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateur->setRole("CLIENT");
            $utilisateur->setBlocked("non");

            try {
                $image=$form->get('image')->getData();
                $fichier=md5(uniqid()).'.'.$image->guessExtension();
                $image->move(
                    $this->getParameter('image_directory'),
                    $fichier
                );
            }catch (FileException $e){

            }

            $utilisateur->setImage($fichier);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('utilisateur/signUp.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/signIn", name="signIn")
     */
    public function signIn(Request $request,UtilisateurRepository $repository): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(LoginType::class, $utilisateur);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $utilisateur2=$repository->findOneBy(['email'=>$utilisateur->getEmail()]);
            if ($utilisateur2 && $utilisateur->getMdp()==$utilisateur2->getMdp()) {
                if($utilisateur2->getRole()=="CLIENT")
                {
                    return $this->render('front/homeConnected.html.twig', [
                        'utilisateur' => $utilisateur2,
                    ]);
                }
                else
                {
                    return $this->render('back/index.html.twig', [
                        'utilisateur' => $utilisateur2,
                    ]);
                }


            }
        }
        return $this->render('utilisateur/signIn.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
