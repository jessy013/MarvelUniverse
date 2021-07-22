<?php

namespace App\Controller;


use App\Service\HeroService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeroController extends AbstractController
{
    /**
     * @Route("/hero", name="hero")
     */
    public function index(): Response
    {
        return $this->render('hero/index.html.twig', [
            'controller_name' => 'HeroController',
        ]);
    }
/**
     * @Route("/hero/list", name="liste_hero")
     */
    public function list(HeroService $HeroService): response
    {
       $listeHeros =$HeroService->getList();
       return $this->render('hero/list.html.twig',[
           'controller_name' => 'Herocontroller',
            'heroList'=>$listeHeros
        ]);

    }
    public function newHero():Response
        {
          return $this->render('hero/créer.html.twig',[
                'controller_name' => 
                'Herocontroller',
                'HeroList'=>$listeHeros
         ]);
          
        }

}
