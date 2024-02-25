<?php

namespace App\Entity;

use App\Repository\AccountTransactionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccountTransactionRepository::class)]
class AccountTransaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datetime = null;

    #[ORM\Column]
    private ?float $amount = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'currency', referencedColumnName: 'currency', nullable: false)]
    private ?Currency $currency = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'debtor', nullable: false)]
    private ?Account $debtor = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'creditor', nullable: false)]
    private ?Account $creditor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatetime(): ?\DateTimeInterface
    {
        return $this->datetime;
    }

    public function setDatetime(\DateTimeInterface $datetime): static
    {
        $this->datetime = $datetime;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    public function setCurrency(?Currency $currency): static
    {
        $this->currency = $currency;

        return $this;
    }

    public function getDebtor(): ?Account
    {
        return $this->debtor;
    }

    public function setDebtor(?Account $debtor): static
    {
        $this->debtor = $debtor;

        return $this;
    }

    public function getCreditor(): ?Account
    {
        return $this->creditor;
    }

    public function setCreditor(?Account $creditor): static
    {
        $this->creditor = $creditor;

        return $this;
    }
}
