<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Series;
use App\Form\CategorieType;
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
    public function index(Request $request, EntityManagerInterface $entityManager)
    {

        $serieRepository = $this->getDoctrine()
            ->getRepository(Series::class)
            ->findAll();



        $categorie = new Categories();

        $categorieRepository = $this->getDoctrine()
            ->getRepository(Categories::class)
            ->findAll();

        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $categorie = $form->getData();


            $entityManager->persist($categorie);
            $entityManager->flush();
        }

            return $this->render('filmotheque/index.html.twig', [
                'series' => $serieRepository,
                'categories' => $categorieRepository,
                'formCategories' => $form->createView()
            ]);

    }


    /**
     * @Route("/series", name="series")
     */
    public function series( Request $request, EntityManagerInterface $entityManager){

        $serie = new Series();

        $serieRepository = $this->getDoctrine()
            ->getRepository(Series::class)
            ->findAll();

        $categories = $this->getDoctrine()
            ->getRepository(Categories::class)
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
            'formSerie' => $form->createView(),
            'categories' => $categories

        ]);
    }


    /**
     * @Route("/singleSerie/{{id}}", name="singleSerie")
     */
    public function singleSerie( $id, Request $request, EntityManagerInterface $entityManager){


        $serie = $this->getDoctrine()
            ->getRepository(Series::class)
            ->find($id);


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

            $this->redirectToRoute('singleSerie');
        }
        return $this->render('filmotheque/singleSerie.html.twig', [
            'series' => $serie,
            'formUpdate' => $form->createView()

        ]);
    }

    /**
     * @Route("/serie/remove/{id}", name="remove")
     */
    public function removeSeries($id, EntityManagerInterface $entityManager){
        $serie = $this->getDoctrine()->getRepository(Series::class)->find($id);

        $entityManager->remove($serie);
        $entityManager->flush();

        return $this->redirectToRoute('series');
    }

    /**
     * @Route("/categories/{{id}}", name="categories")
     */
    public function categories ($id, Request $request, EntityManagerInterface $entityManager){

        $categorieRepository = $this->getDoctrine()
            ->getRepository(Categories::class)
            ->find($id);

        $form = $this->createForm(CategorieType::class, $categorieRepository);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $categorieRepository = $form->getData();


            $entityManager->persist($categorieRepository);
            $entityManager->flush();

            $this->redirectToRoute('categories');
        }



            $entityManager->persist($categorieRepository);
            $entityManager->flush();

        return $this->render('filmotheque/categories.html.twig', [
            'categories' => $categorieRepository,
            'formCategories' => $form->createView()
        ]);
    }

}
