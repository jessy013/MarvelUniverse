<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use app\service\OrganisationsService;

class OrganisationController extends AbstractController
{
    /**
     * @Route("/organisation", name="organisation")
     */
    public function index(OrganisationsService $organisationsService): Response
    {
        $listOrganisation = $OrganisationsService->getlist()
         ->render('organisation/index.html.twig', [
            'controller_name' => 'OrganisationController',
        ]);
    }
}
