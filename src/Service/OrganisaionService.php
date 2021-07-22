<?php
namespace App\Service;
use App\Entity\Organisation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class OrganisationsService extends ServiceEntityRepository
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

 public function getOrganisation():Organisation
 {

 }

 public function addOrganisation($pOrganisation)
 {
     array_push($this->_listOrganisation,$pOrganisation);
 }
}
