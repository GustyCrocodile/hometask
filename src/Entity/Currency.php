<?php

namespace App\Entity;

use App\Repository\CurrencyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CurrencyRepository::class)]
class Currency
{
//    #[ORM\Id]
//    #[ORM\GeneratedValue]
//    #[ORM\Column]
//    private ?int $id = null;

//    public function getId(): ?string
//    {
//        return $this->code;
//    }

    #[ORM\Column(length: 3)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    private ?string $currency = null;

    public function getCode(): ?string
    {
        return $this->currency;
    }

    public function setCode(string $currency): static
    {
        $this->currency = $currency;

        return $this;
    }
}
