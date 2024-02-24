<?php

namespace App\Entity;

use App\Repository\TransactionTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionTypeRepository::class)]
class TransactionType
{
    #[ORM\Column(name: "code", type: "string", length: "1", nullable: "false")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]

    private ?string $code = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
