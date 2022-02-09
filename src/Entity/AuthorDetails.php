<?php

namespace App\Entity;

use App\Repository\AuthorDetailsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AuthorDetailsRepository::class)]
class AuthorDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['histories'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $date;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Author',inversedBy: 'authorDetail')]
    private $author;

    public function __construct()
    {
        //$this->author = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }


    public function getAuthor(): ?object
    {

        return $this->author;
    }

    public function setAuthor( $author): self
    {
        $this->author = $author;

        return $this;
    }
}
