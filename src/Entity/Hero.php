<?php

namespace App\Entity;

use App\Repository\HeroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HeroRepository::class)
 */
class Hero
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $IsVilain;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $pictures;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getIsVilain(): ?bool
    {
        return $this->IsVilain;
    }

    public function setIsVilain(bool $IsVilain): self
    {
        $this->IsVilain = $IsVilain;

        return $this;
    }
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPictures(): ?string
    {
        return $this->pictures;
    }

    public function setPictures(string $pictures): self
    {
        $this->pictures = $pictures;

        return $this;
    }

    function __construct($pfirstName,$pName,$pIsvilain,$pPseudo,$pDescriptions,$pPictures)
    {
        $this-> firstName = $pfirstName;
        $this-> Name = $pName;
        $this-> IsVilain = $pIsvilain;
        $this-> pseudo = $pPseudo;
        $this->description = $pDescriptions;
        $this-> pictures = $pPictures;

    }
}

    
