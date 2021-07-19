<?php
namespace App\Service;

use App\Entity\Hero;

class HeroService
{
    private $_listHero= [];
    
    public function __construct()
    {
        $this->addHero(new hero());
        $this->addHero(new hero());
        $this->addHero(new hero());
        $this->addHero(new hero());
        $this->addHero(new hero());
        
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
}
}