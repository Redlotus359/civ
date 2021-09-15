<?php

namespace App\Entity;

use App\Repository\CalenderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CalenderRepository::class)
 */
class Calender
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="calenders")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $create_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date_begin_time;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date_end_time;

    /**
     * @ORM\ManyToOne(targetEntity=content::class, inversedBy="calenders")
     */
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

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

    public function getDateBeginTime(): ?string
    {
        return $this->date_begin_time;
    }

    public function setDateBeginTime(?string $date_begin_time): self
    {
        $this->date_begin_time = $date_begin_time;

        return $this;
    }

    public function getDateEndTime(): ?string
    {
        return $this->date_end_time;
    }

    public function setDateEndTime(?string $date_end_time): self
    {
        $this->date_end_time = $date_end_time;

        return $this;
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
}
