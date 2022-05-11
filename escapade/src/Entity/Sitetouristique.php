<?php

namespace App\Entity;

use App\Repository\SitetouristiqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SitetouristiqueRepository::class)
 */
class Sitetouristique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;


    //private $idDestination;


    //private $idGuide;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

   // public function getIdDestination(): ?int
    //{
      //  return $this->idDestination;
    //}

    //public function setIdDestination(?int $idDestination): self
    //{
      //  $this->idDestination = $idDestination;

        //return $this;
    //}

    //public function getIdGuide(): ?int
    //{
        //return $this->idGuide;
    //}

    //public function setIdGuide(?int $idGuide): self
    //{
        //$this->idGuide = $idGuide;

        //return $this;
    //}
}
