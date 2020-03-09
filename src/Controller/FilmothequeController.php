<?php

namespace App\Controller;

use App\Entity\Series;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SerieType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;



class FilmothequeController extends AbstractController
{
    /**
     * @Route("/", name="filmotheque")
     */
    public function index()
    {

        $serieRepository = $this->getDoctrine()
            ->getRepository(Series::class)
            ->findAll();

        return $this->render('filmotheque/index.html.twig', [
            'series' => $serieRepository,

        ]);
    }

    /**
     * @Route("/", name="accueil")
     */

    public function accueil(){

    }


    /**
     * @Route("/series", name="series")
     */
    public function series( Request $request, EntityManagerInterface $entityManager){

        $serie = new Series();

        $serieRepository = $this->getDoctrine()
            ->getRepository(Series::class)
            ->findAll();

        $form = $this->createForm(SerieType::class, $serie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $serie = $form->getData();


            /*$affiche = $serie->getAffiche();
            $afficheName = md5(uniqid()).'.'.$affiche->guessExtension();
            $affiche->move($this->getParameter('upload_files') );
            $serie ->setAffiche($afficheName);*/

            $entityManager->persist($serie);
            $entityManager->flush();

            $this->redirectToRoute('series');
        }
        return $this->render('filmotheque/series.html.twig', [
            'series' => $serieRepository,
            'formSerie' => $form->createView()

        ]);
    }
}
