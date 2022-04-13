<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="Fk_Clientcommentaireutilisateur", columns={"idClient"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Commentaire
     */
    public function setId(int $id): Commentaire
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Commentaire
     */
    public function setDescription(string $description): Commentaire
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Commentaire
     */
    public function setDate(\DateTime $date): Commentaire
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return \Utilisateur
     */
    public function getIdclient(): \Utilisateur
    {
        return $this->idclient;
    }

    /**
     * @param \Utilisateur $idclient
     * @return Commentaire
     */
    public function setIdclient(\Utilisateur $idclient): Commentaire
    {
        $this->idclient = $idclient;
        return $this;
    }
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
     * @ORM\Column(name="description", type="string", length=50, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;


}
