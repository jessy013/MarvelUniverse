<?php

namespace App\Controller;

use App\Service\HeroService;
use App\Entity\Hero;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
    public function newHero(Request $request):response
        {
            $hero = new Hero('','',false,'','','');
        $form = $this->createFormBuilder($hero)
        ->add('pseudo',TextType::class)
        ->add('firstname',TextType::class)
        ->add('name',TextType::class)
        ->add('save', SubmitType::class, ['label' => 'Créer Hero'])
            ->getForm();
            $request = Request::createFromGlobals();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $hero = $form->getData();
            $heroService->addHero($hero);
            return $this->render('hero/create_completed.html.twig',['hero'=>$hero]);
        }
        else
        return $this->render('hero/creer.html.twig',['formulaire'=>$form->createView()]);
        }

    
        /**
 * @Route("hero/{pId}","hero_show")
 */

    public function show($pId, HeroService $heroService):Response
    {
        $hero = $heroService->getHero($pId);
        return $this->render('hero/hero.html.twig',['hero'=>$hero['hero']]);
    }

    /**
     * @Route("hero/delete/{pId}","hero_delete")
     */
    public function delete($pId, HeroService $heroService):Response
    {
        $heroService->deleteHero($pId);
        return $this->render('hero/delete_completed.html.twig');
    }

}
