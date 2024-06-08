<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Type\AvailabilityStatus;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(mercure: true)]
#[ORM\Entity]
class Catalog
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Beverage::class)]
    #[ORM\JoinColumn(nullable: false)]
    public Beverage $beverage;

    #[ORM\Column(type: 'boolean')]
    #[Assert\NotNull]
    public AvailabilityStatus $availability = AvailabilityStatus::Available;

    public function getId(): ?int
    {
        return $this->id;
    }
}
