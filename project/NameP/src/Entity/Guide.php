<?php

namespace App\Entity;

use App\Repository\GuideRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=GuideRepository::class)
 */
class Guide
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *  @Assert\NotBlank(message=" nom doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un nom au moin de 5 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @Assert\NotBlank(message="prenom  doit etre non vide")
     * @Assert\Length(
     *      min = 3,
     *      max = 100,
     *      minMessage = "doit etre >=1 ",
     *      maxMessage = "doit etre <=24" )
     * @ORM\Column(type="string", length=24)
     */
    private $pernom;

    /**
     * @Assert\NotBlank(message="nat  :doit etre non vide")
     * @ORM\Column(type="string", length=1000)
     */
    private $nationnalite;

    /**
     * @Assert\NotBlank(message="email  :doit etre non vide")
     * @ORM\Column(type="string", length=1000)
     */
    private $email;

    /**
     * @Assert\NotBlank(message="langue  :doit etre non vide")
     * @ORM\Column(type="string", length=1000)
     */
    private $langue;


   // private $idSiteTouristique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPernom(): ?string
    {
        return $this->pernom;
    }

    public function setPernom(string $pernom): self
    {
        $this->pernom = $pernom;

        return $this;
    }

    public function getNationnalite(): ?string
    {
        return $this->nationnalite;
    }

    public function setNationnalite(string $nationnalite): self
    {
        $this->nationnalite = $nationnalite;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(string $langue): self
    {
        $this->langue= $langue;

        return $this;
    }

    //public function getIdSiteTouristique(): ?int
   // {
      //  return $this->idSiteTouristique;
    //}

    //public function setIdSiteTouristique(?int $idSiteTouristique): self
    //{
      //  $this->idSiteTouristique = $idSiteTouristique;

        //return $this;
    //}
}
