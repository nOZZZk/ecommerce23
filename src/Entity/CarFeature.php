<?php

namespace App\Entity;

use App\Repository\CarFeatureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarFeatureRepository::class)]
class CarFeature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Feature_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFeatureName(): ?string
    {
        return $this->Feature_name;
    }

    public function setFeatureName(string $Feature_name): static
    {
        $this->Feature_name = $Feature_name;

        return $this;
    }
}
