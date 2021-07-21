<?php
namespace App\Service;
use App\Entity\Organisation;


class OrganisationsService
{
    private $_listOrganisation= [];

    public function __construct()
    {
        $this->addOrganisation(new Organisation('shield',''));
        $this->addOrganisation(new Organisation('justiceLigue',''));
        $this->addOrganisation(new Organisation('x-men',''));
    }
 public function getlist()
 {
     return $this->_listOrganisation;
 }

 public function getOrganisation()
 {

 }

 public function addOrganisation()
 {
     array_push($this->_listOrganisation,$pOrganisation);
 }
}
