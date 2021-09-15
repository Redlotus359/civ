<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=content::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $create_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?content
    {
        return $this->content;
    }

    public function setContent(?content $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreateDate(): ?string
    {
        return $this->create_date;
    }

    public function setCreateDate(string $create_date): self
    {
        $this->create_date = $create_date;

        return $this;
    }
}
