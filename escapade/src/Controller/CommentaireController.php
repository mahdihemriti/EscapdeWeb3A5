<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\BlogRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commentaire")
 */
class CommentaireController extends AbstractController
{
    /**
     * @Route("/", name="app_commentaire_index", methods={"GET"})
     */
    public function index(CommentaireRepository $commentaireRepository): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaireRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new/{$idblog}", name="app_commentaire_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {

        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setDate(new \DateTime('now'));
            $em=$this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('app_commentaire_index');
        }

        return $this->render('commentaire/_form.html.twig', [
            'commentaire' => $commentaire,
            'forms' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_commentaire_show", methods={"GET"})
     */
    public function show($id,CommentaireRepository $commentaireRepository): Response
    {
        $commentaire=$commentaireRepository->find($id);
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_commentaire_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, $id,CommentaireRepository $commentaireRepository): Response
    {
        $commentaire=$commentaireRepository->find($id);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_commentaire_delete", methods={"POST"})
     */
    public function delete(Request $request,$id,CommentaireRepository $commentaireRepository): Response
    {
        $Commentaire=$commentaireRepository->find($id);
        $idd=$Commentaire->getIdblog();
        $em=$this->getDoctrine()->getManager();
        $em->remove($Commentaire);
        $em->flush();
        return $this->redirectToRoute('frontblog',[$idd]);
    }

    /**
     * @Route("/search/back", name="comAjax", methods={"GET"})
     */
    public function search(Request $request ) :Response
    {
        $commentaireRepository = $this->getDoctrine()->getRepository(Commentaire::class);
        $requestString=$request->get('searchValue');
        $commentaire = $commentaireRepository->findbytaux($requestString);
        return $this->render('commentaire/comAjax.html.twig', [
            "commentaires"=>$commentaire
        ]);
    }

    public function getRealEntities($entities){

        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getTaux();
        }
        return $realEntities;
    }
/*
    /**
     * @Route("/search/{iddest}", name="app_dests_stajaxs", methods={"GET"})
     * @return JsonResponse
     *
    public function ajaxStat(Request $request,$idblog)
    {
        $data=$this->getDoctrine()->getManager()->getRepository(Commentaire::class)->findByblog($idblog);
        $nbrstars=[0,0,0,0,0];
        for ($i = 1; $i <5; $i++) {
            $nbrstars[$i]=$this->calculstars($data,$i);
        }

        return new JsonResponse($nbrstars);

    }
*/
/*
    /**
     * @Route("/stat",name="statistiques")
     *

    public function stat()
    {
        $data=$this->getDoctrine()->getManager()->getRepository(Blog::class)->findAll();
        return $this->render('commentaire/statistiques.html.twig',[
            'commentaires'=>$data
        ]);
    }
    public function calculstars($t,$star)
    {
        $count=0;
        $nbrparstar=[];
        foreach ($t as $f) {
            if ($f->gettaux()==$star){
                $count+=1;
            }
        }
        return $count;
    }
*/
}
