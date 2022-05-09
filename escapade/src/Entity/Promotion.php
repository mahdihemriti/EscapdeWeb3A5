<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\PromotionRepository;
use App\Repository\FactureRepository;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass=PromotionRepository::class)
 */
class Promotion
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
     * @var float
     * @Assert\NotBlank
     * @Assert\Positive
     * @ORM\Column(name="taux", type="float", precision=10, scale=0, nullable=false)

     *
     * @Assert\Range(
     *      min = 0,
     *      max = 60,
     *      notInRangeMessage = "Taux doit être entre 0 et 60",
     * )
     */
    private $taux;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime

     * @ORM\Column(name="dateFin", type="date", nullable=false)
     * @Assert\Expression("this.getDatefin() > this.getDatedebut()",message="Date fin doit être superieure à la date de début")
     */
    private $datefin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaux(): ?float
    {
        return $this->taux;
    }

    public function setTaux(float $taux): self
    {
        $this->taux = $taux;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }


}
