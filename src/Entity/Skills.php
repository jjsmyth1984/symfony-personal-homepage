<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

#[ORM\Entity(repositoryClass: SkillsRepository::class)]
class Skills
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id;

    #[ORM\Column(length: 55)]
    private ?string $title = null;

    #[ORM\Column]
    private ?int $percentage = null;

    #[ORM\Column]
    private ?int $foreignObjectX = null;

    #[ORM\Column]
    private ?int $foreignObjectY = null;

    #[ORM\Column]
    private ?int $foreignObjectWidth = null;

    #[ORM\Column]
    private ?int $foreignObjectHeight = null;

    #[ManyToOne(targetEntity: User::class, inversedBy: 'education')]
    #[JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private ?User $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getPercentage(): ?int
    {
        return $this->percentage;
    }

    public function setPercentage(int $percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getForeignObjectX(): ?int
    {
        return $this->foreignObjectX;
    }

    public function setForeignObjectX(?int $foreignObjectX): void
    {
        $this->foreignObjectX = $foreignObjectX;
    }

    public function getForeignObjectY(): ?int
    {
        return $this->foreignObjectY;
    }

    public function setForeignObjectY(?int $foreignObjectY): void
    {
        $this->foreignObjectY = $foreignObjectY;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    public function getForeignObjectWidth(): ?int
    {
        return $this->foreignObjectWidth;
    }

    public function setForeignObjectWidth(?int $foreignObjectWidth): void
    {
        $this->foreignObjectWidth = $foreignObjectWidth;
    }

    public function getForeignObjectHeight(): ?int
    {
        return $this->foreignObjectHeight;
    }

    public function setForeignObjectHeight(?int $foreignObjectHeight): void
    {
        $this->foreignObjectHeight = $foreignObjectHeight;
    }
}
