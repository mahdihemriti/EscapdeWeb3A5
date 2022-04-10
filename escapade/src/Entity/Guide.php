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


}
