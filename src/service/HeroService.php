<?php

namespace App\Service;

use App\Entity\Hero;
use Doctrine\ORM\EntityManagerInterface;

class HeroService
{
    private $_entityManager;
    private $_listHero = [];

    public function __construct(EntityManagerInterface $em)
    {
        $this->_entityManager = $em;
        $this->_listHero = $this->_entityManager->getRepository(Hero::class)->findAll();
       
        }


    public function getlist()
    {
        return $this->_listHero;
    }

    public function getHero($pId)
    {
       /* $find = false;
        $i = 0;
        while (($i >= count($this->_listHero)) || $find == false) {
            if ($this->_listHero[$i]->getId() == $pId) {
                $find = true;
                $Hero = $this->_listHero[$i];
            }
            $i++;
        }
        return  ['found' => $find, 'hero' => $Hero];*/
        $hero = $this->_entityManager->getRepository(Hero::class)->find($pId);
        return  ['found' => isset($hero), 'hero' => $hero];
    }

    public function addHero($pHero)
    {
        array_push($this->_listHero, $pHero);
        $this->_entityManager->persist($pHero);
        $this->_entityManager->flush($pHero);
    }

    public function deleteHero($pId)
    {
        $Hero = $this->getHero($pId);
        if ($Hero['found'] == true) {
            $this->_entityManager->remove($Hero['hero']);
            $this->_entityManager->flush();
        }
    }
}
