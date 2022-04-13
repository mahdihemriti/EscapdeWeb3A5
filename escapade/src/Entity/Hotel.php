<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel", indexes={@ORM\Index(name="FK_HotelDestination", columns={"idDestination"})})
 * @ORM\Entity(repositoryClass=HotelRepository::class)
 */
class Hotel
{
    /**
     * @var int

     * @ORM\Column(name="idHotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhotel;

    /**
     * @var string
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @ORM\Column(name="matriculeFiscale", type="string", length=20, nullable=false)
     */
    private $matriculefiscale;

    /**
     * @var string
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
   * @Assert\Type("string")
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var int
     * @Assert\Positive(message="Le nombre des * doit être positif")
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @Assert\Range(
     *      min = 1,
     *      max = 5,
     *      notInRangeMessage = "Le nombre des étoiles=  {{ min }} min et {{ max }}max ",
     * )
     * @ORM\Column(name="nbrEtoile", type="integer", nullable=false)
     */
    private $nbretoile;

    /**
     * @var string
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @ORM\Column(name="description", type="string", length=80, nullable=false)
     * * @Assert\Length(min=15)
     */
    private $description;


    /**
     * @var int
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @Assert\Positive(message="Le nombre des chambres total doit être positif")
     * @ORM\Column(name="nbChambreTotal", type="integer", nullable=false)
     * @Assert\Expression("this.getNbchambretotal() < this.getMaxchambre()",message="le nombre total dse chambres doit être infireure à max chambre ")
     */
    private $nbchambretotal;

    /**
     * @var int
     * @Assert\Positive(message="Le nombre des chambres total doit être positif")
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @ORM\Column(name="maxChambre", type="integer", nullable=false)
     */
    private $maxchambre;

    /**
     * @var string|null

     * @Assert\Image(
     *     allowLandscape = true,
     *     allowPortrait = true
     * )
     * @ORM\Column(name="imgHotel", type="string", length=255, nullable=true)
     */
    private $imghotel;

    /**
     * @var \Destination
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @ORM\ManyToOne(targetEntity="Destination")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDestination", referencedColumnName="id")
     * })
     */
    private $iddestination;




    public function getIdhotel(): ?int
    {
        return $this->idhotel;
    }

    public function getMatriculefiscale(): ?string
    {
        return $this->matriculefiscale;
    }

    public function setMatriculefiscale(string $matriculefiscale): self
    {
        $this->matriculefiscale = $matriculefiscale;

        return $this;
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

    public function getNbretoile(): ?int
    {
        return $this->nbretoile;
    }

    public function setNbretoile(int $nbretoile): self
    {
        $this->nbretoile = $nbretoile;

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

    public function getNbchambretotal(): ?int
    {
        return $this->nbchambretotal;
    }

    public function setNbchambretotal(int $nbchambretotal): self
    {
        $this->nbchambretotal = $nbchambretotal;

        return $this;
    }

    public function getMaxchambre(): ?int
    {
        return $this->maxchambre;
    }

    public function setMaxchambre(int $maxchambre): self
    {
        $this->maxchambre = $maxchambre;

        return $this;
    }

    public function getImghotel(): ?string
    {
        return $this->imghotel;
    }

    public function setImghotel(?string $imghotel): self
    {
        $this->imghotel = $imghotel;

        return $this;
    }

    public function getIddestination(): ?Destination
    {
        return $this->iddestination;
    }

    public function setIddestination(?Destination $iddestination): self
    {
        $this->iddestination = $iddestination;

        return $this;
    }














}
