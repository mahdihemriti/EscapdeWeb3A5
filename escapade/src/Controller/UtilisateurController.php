<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\LoginType;
use App\Form\RegistrationFormType;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
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
    public function signUp(Request $request,UserPasswordEncoderInterface $encoder): Response
    {
        $utilisateur = new utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateur->setRole("CLIENT");
            $utilisateur->setBlocked("non");
            $encoded = $encoder->encodePassword($utilisateur, $form->get('mdp')->getData());

            $utilisateur->setMdp($encoded);

            try {
                $image=$form->get('image')->getData();
                $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $fichier=$name.'.'.$image->guessExtension();
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

        return $this->render('utilisateur/inscrit.html.twig', [
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

    /**
     * @Route("/searchEmail/{email}", name="searchEmail")
     */
    public function searchByEmail($email,UtilisateurRepository $repository){
        $user =$repository->findOneBy(['email'=>$email]);
        if($user){
            return $this->render('utilisateur/recuperation.html.twig', [
                'user' =>$user,
            ]);
        }
        else{

        }
    }

    /**
     * @Route("/sms/{numTel}", name="sms")
     */
    public function envoyerSms($numTel){
        $rand=mt_rand(10000, 99999);
        echo $rand;
        $sid = "AC5ef9a2b12f93e3126946e2fc5ed68809"; // Your Account SID from www.twilio.com/console
        $token = "3893e0bd4a4968e799efe2e61d1119ce"; // Your Auth Token from www.twilio.com/console

        $twilio_number = "+19896324806";

        $client = new Client($sid, $token);
        $client->messages->create(
        // Where to send a text message (your cell phone?)
            '+216'.$numTel,
            array(
                'from' => $twilio_number,
                'body' => 'I sent this message in under 10 minutes!'.$rand
            ));

    }
}
