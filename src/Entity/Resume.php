<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ResumeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

#[ORM\Entity(repositoryClass: ResumeRepository::class)]
class Resume
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id;

    #[ORM\Column(length: 255)]
    private ?string $resumeFilename = null;

    #[ManyToOne(targetEntity: User::class, inversedBy: 'resume')]
    #[JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private ?User $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResumeFilename(): ?string
    {
        return $this->resumeFilename;
    }

    public function setResumeFilename(string $resumeFilename): static
    {
        $this->resumeFilename = $resumeFilename;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): void
    {
        $this->user = $user;
    }
}
