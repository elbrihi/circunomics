<?php

namespace App\Entity;

use App\Repository\AuthorRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AuthorRepository::class)]
class Author
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['histories'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['histories'])]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['histories'])]
    private $email;

    #[ORM\OneToMany(targetEntity: 'App\Entity\History', mappedBy: 'author')]
    private $history;

    #[ORM\OneToMany(targetEntity: 'App\Entity\Author', mappedBy: 'author')]

    private $authorDetail ;


    public function __construct()
    {
        //$this->history = new \Doctrine\Common\Collections\ArrayCollection();
        //$this->authorDetail = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getHistory(): ?object
    {
        return $this->history;
    }

    public function setHistory( $history): self
    {
        $this->history = $history;

        return $this;
    }

    public function getAuthorDetail(): ?object
    {
        return $this->authorDetail;
    }

    public function setAuthorDetail(object $authorDetail): self
    {
        $this->authorDetail = $authorDetail;

        return $this;
    }






}
