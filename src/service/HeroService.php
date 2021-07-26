<?php
namespace App\Service;

use App\Entity\Hero;
use Doctrine\ORM\EntityManagerInterface;

class HeroService
{
    private $_entityManager;
    private $_listHero= [];
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->_entityManager= $em;
        $this->addHero(new hero('steve','rogers',false,'captain america','le premier super hero americain et fondateur des avengers',''));
        $this->addHero(new hero('thor','Odinson',false,'thor','thor dieux du tonners et fils d odin',''));
        $this->addHero(new hero('tony','stark',false,'iron man','le milliardaire a l armure invincible',''));
        $this->addHero(new hero('bruce','banner',false,'hulk','hulk le monstre vert déchainer',''));
        $this->addHero(new hero('natasha','romanoff',false,'black widow','l espionne russe devenue agent du shield',''));
        $this->addHero(new hero('clinton','barton',false,'Hawkeye','vif et précis rien échapes a son regard',''));
        
    }


public function getlist()
{
    return $this->_listHero;
}

public function getHero($pId)
{
    $find = false;
    $i = 0;
    while(($i>= count($this->_listHero))||$find == false)
    {
        if($this->_listHero[$i]->getId()==$pId)
        {
            $find = true;
            $Hero = $this-> _listHero[$i];
        }
        $i++;
    }
    return  ['found'=>$find,'hero'=>$Hero];
    

}

public function addHero($pHero)
{   
    array_push($this->_listHero,$pHero);
    $this->_entityManager->persist($pHero);
    $this->_entityManager->flush($pHero);
    }

    public function deletehero($pId)
    {
        $hero = $this->gethero($pId);
        if ($hero['found']== true)
        {
            $this->_entityManager->remove($hero['hero']);
            $this->_entityManager->flush();
        }
    }
}