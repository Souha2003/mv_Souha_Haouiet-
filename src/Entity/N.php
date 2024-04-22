<?php

namespace App\Entity;

use App\Repository\NRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NRepository::class)]
class N
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
