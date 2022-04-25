<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ChambreRepository;
use App\Repository\DestinationRepository;
use App\Repository\HotelRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Destination
 *
 * @ORM\Table(name="destination")
 * @ORM\Entity(repositoryClass=DestinationRepository::class)
 */
class Destination
{
    /**
     * @var int

     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string
     *  @Assert\Type("string")
     *  *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     *  * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Le nom du pays doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le nom du pays article doit comporter au plus {{ limit }} caractères"
     * )
     * @ORM\Column(name="pays", type="string", length=50, nullable=false)
     */
    private $pays;

    /**
     * @var string
     *  @Assert\Type("string")
     *  *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     *  * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "Le nom d'une ville doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le nom d'une ville doit comporter au plus {{ limit }} caractères"
     * )
     * @ORM\Column(name="ville", type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @var string|null
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function __toString(){
    return "$this->pays";
    }


}
