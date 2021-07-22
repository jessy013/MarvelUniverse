<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use app\service\OrganisationsService;

class OrganisationsController extends AbstractController
{
    /**
     * @Route("/organisation", name="organisation")
     */
     public function getlist(OrganisationsService $OrganisationsService): Response 
     {
        $listOrganisations = $OrganisationsService->getlist();
        return $this->render('Organisations/index.html.twig');
     }
    
        
         
        
         
        
    
}
