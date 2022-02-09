<?php

namespace App\Entity;

use App\Repository\HistoryRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;



#[ORM\Entity(repositoryClass: HistoryRepository::class)]
class History
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['histories'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255, unique: true)]
    #[Groups(['histories'])]
    private $commit;

    #[ORM\Column(type: 'string', length: 255)]
    private $date;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Author', inversedBy: 'history')]
    #[Groups(['histories'])]
    private $author;


    public function __construct()
    {
        $this->author = new \Doctrine\Common\Collections\ArrayCollection();

    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;
    }
    public function getCommit(): ?string
    {
        return $this->commit;
    }

    public function setCommit(string $commit): self
    {
        $this->commit = $commit;

        return $this;
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

    public function setAuthor(object $author= null): self
    {
        $this->author = $author;

        return $this;
    }
}
