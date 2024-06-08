<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(mercure: true)]
#[ORM\Entity]
class OrderLine
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Order::class)]
    #[ORM\JoinColumn(nullable: false)]
    public Order $order;

    #[ORM\ManyToOne(targetEntity: Beverage::class)]
    #[ORM\JoinColumn(nullable: false)]
    public Beverage $beverage;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    public int $quantityOrdered = 0;

    public function getId(): ?int
    {
        return $this->id;
    }
}
