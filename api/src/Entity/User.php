<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Type\UserRole;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(mercure: true)]
#[ORM\Entity]
class User
{

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    public string $firstName = '';

    #[ORM\Column]
    #[Assert\NotBlank]
    public string $lastName = '';

    #[ORM\Column]
    #[Assert\Email]
    public string $email = '';

    #[ORM\Column]
    #[Assert\NotBlank]
    public string $password = '';

    #[ORM\Column]
    #[Assert\NotBlank]
    public UserRole $type = UserRole::Waiter;

    public function getId(): ?int
    {
        return $this->id;
    }
}
