<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\AgencedelocationRepository;

/**
 * @ORM\Entity(repositoryClass=AgencedelocationRepository::class)
 * @ORM\Table(name="agencedelocation")
 */
class Agencedelocation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="Le libelle doit etre non vide")
     * @Assert\Length(
     *      max = 50,
     *      maxMessage=" Très long !"
     *
     *     )
     * @ORM\Column(name="libelle", type="string", length=20, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     * @Assert\NotBlank(message="L'adresse doit etre non vide")
     * @Assert\Length(
     *      max = 50,
     *      maxMessage=" Très long !"
     *
     *     )
     * @ORM\Column(name="adresse", type="string", length=30, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     * @Assert\NotBlank(message="Le numero doit etre non vide")

     * @ORM\Column(name="numTel", type="integer", nullable=false)
     * @Assert\Positive(message="Le numero de tel doit etre des entiers.")
     * @Assert\Type(type="numeric", message="Le nombre ne doit pas contenir des caractères .")

     */
    private $numtel;

    /**
     * @var string
     * @Assert\NotBlank(message="L'email doit etre non vide")
     * @ORM\Column(name="email", type="string", length=30, nullable=false)
     */
    private $email;
    /**
     * @var string

     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Moyendetransport::class, mappedBy="idagence")
     */
    private $moyendetransports;
    /**
     * @ORM\Column(name="likes", type="integer)
     */
    private $likes;

    public function __construct()
    {
        $this->moyendetransports = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(int $numtel): self
    {
        $this->numtel = $numtel;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
    public function __toString()
    {
        return $this->getLibelle() ;
    }

    /**
     * @return Collection<int, Moyendetransport>
     */
    public function getMoyendetransports(): Collection
    {
        return $this->moyendetransports;
    }

    public function addMoyendetransport(Moyendetransport $moyendetransport): self
    {
        if (!$this->moyendetransports->contains($moyendetransport)) {
            $this->moyendetransports[] = $moyendetransport;
            $moyendetransport->setIdagence($this);
        }

        return $this;
    }

    public function removeMoyendetransport(Moyendetransport $moyendetransport): self
    {
        if ($this->moyendetransports->removeElement($moyendetransport)) {
            // set the owning side to null (unless already changed)
            if ($moyendetransport->getIdagence() === $this) {
                $moyendetransport->setIdagence(null);
            }
        }

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): self
    {
        $this->likes = $likes;

        return $this;
    }

}