<?php

namespace App\Entity;

use App\Repository\FriendRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FriendRepository::class)]
class Friend
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: user::class, inversedBy: 'friends')]
    #[ORM\JoinColumn(nullable: false)]
    private $sender;

    #[ORM\ManyToOne(targetEntity: user::class, inversedBy: 'friends2')]
    #[ORM\JoinColumn(nullable: false)]
    private $reciver;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?user
    {
        return $this->sender;
    }

    public function setSender(?user $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getReciver(): ?user
    {
        return $this->reciver;
    }

    public function setReciver(?user $reciver): self
    {
        $this->reciver = $reciver;

        return $this;
    }

}
