<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Repository\UtilisateurRepository;
use Exception;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints as Assert;
use Rollerworks\Component\PasswordStrength\Validator\Constraints as RollerworksPassword;
use Symfony\Component\Security\Core\User\UserInterface;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints as Recaptcha;
/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur implements UserInterface, \Serializable
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
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @Assert\Type("string")
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @Assert\Type("string")
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @Assert\Type("string")
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime|null
     * @Assert\NotBlank(message="Ce champ ne doit pas être vide")
     *
     * @ORM\Column(name="dateDeNaissance", type="date", nullable=true)
     */
    private $datedenaissance;

    /**
     * @var int|null
     *@Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @ORM\Column(name="numTel", type="integer", nullable=true)
     * @Assert\Length(8)
     */
    private $numtel;

    /**
     * @var string|null
     * @Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @Assert\Type("string")
     * @ORM\Column(name="ville", type="string", length=20, nullable=true)
     */
    private $ville;

    /**
     * @var string
     * @RollerworksPassword\PasswordStrength(minLength=7, minStrength=3)
     * @Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @Assert\Type("string")
     * @ORM\Column(name="mdp", type="string", length=255, nullable=false)
     */
    private $mdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blocked", type="string", length=0, nullable=true)
     */
    private $blocked;

    /**
     * @var string
     * @ORM\Column(name="role", type="string", length=0, nullable=false)
     */
    private $role;
    /**
     * @Recaptcha\IsTrue
     */
    public $recaptcha;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function getDatedenaissance(): ?\DateTimeInterface
    {
        return $this->datedenaissance;
    }

    public function setDatedenaissance(?\DateTimeInterface $datedenaissance): self
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(?int $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getBlocked(): ?string
    {
        return $this->blocked;
    }

    public function setBlocked(?string $blocked): self
    {
        $this->blocked = $blocked;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }


    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->mdp,
            // see section on salt below
            // $this->salt,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->mdp,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, array('allowed_classes' => false));
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function getPassword()
    {
        return $this->mdp;
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
