<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Type\BeverageType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(mercure: true)]
#[ORM\Entity]
class Beverage
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    public string $name = '';

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    public int $stockThreshold = 0;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    public int $currentStock = 0;

    #[ORM\Column(type: 'float')]
    #[Assert\NotBlank]
    public float $alcoholContent = 0.0;

    #[ORM\Column]
    #[Assert\NotBlank]
    public BeverageType $beverageType = BeverageType::Beer;

    public function getId(): ?int
    {
        return $this->id;
    }
}
