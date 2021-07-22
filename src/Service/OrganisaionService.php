<?php
namespace App\Service;

use App\Entity\Organisations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class OrganisationsService extends ServiceEntityRepository
{

    private $_listOrganisation= [];

    public function __construct()
    {
        $this->addOrganisation(new Organisations('shield',''));
        $this->addOrganisation(new Organisations('justiceLigue',''));
        $this->addOrganisation(new Organisations('x-men',''));
    }
 public function getlist()
 {
     return $this->_listOrganisation;
 }
/*
 public function getOrganisation():Organisations
 {
    return $this ->_listOrganisation;
 }
*/
 public function addOrganisation($pOrganisation)
 {
     array_push($this->_listOrganisation,$pOrganisation);
 }
}
