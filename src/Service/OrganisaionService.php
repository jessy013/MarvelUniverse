<?php
namespace App\Service;

use App\Entity\Organisations;
use App\Service\OrganisationsService;
class OrganisationsService
{
    private $_listOrganisation= [];

    public function __construct()
    {
        $this->addOrganisation(new Organisation());
        $this->addOrganisation(new Organisation());
        $this->addOrganisation(new Organisation());
    }
 public function getlist()
 {

 }

 public function addOrganisation()
 {

 }

 public function getOrganisation()
 {

 }
}