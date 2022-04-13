<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guide
 *
 * @ORM\Table(name="guide", indexes={@ORM\Index(name="FK_SiteTouristiqueGuide", columns={"idSiteTouristique"})})
 * @ORM\Entity
 */
class Guide
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
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="pernom", type="string", length=20, nullable=false)
     */
    private $pernom;

    /**
     * @var string
     *
     * @ORM\Column(name="nationnalite", type="string", length=20, nullable=false)
     */
    private $nationnalite;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=10, nullable=false)
     */
    private $langue;

    /**
     * @var \Sitetourstique
     *
     * @ORM\ManyToOne(targetEntity="Sitetourstique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSiteTouristique", referencedColumnName="id")
     * })
     */
    private $idsitetouristique;

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
        $this->langue = $langue;

        return $this;
    }

    public function getIdsitetouristique(): ?Sitetourstique
    {
        return $this->idsitetouristique;
    }

    public function setIdsitetouristique(?Sitetourstique $idsitetouristique): self
    {
        $this->idsitetouristique = $idsitetouristique;

        return $this;
    }


}
