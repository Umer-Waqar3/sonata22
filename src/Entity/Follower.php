<?php

namespace App\Entity;

use App\Repository\FollowerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FollowerRepository::class)]
class Follower
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: user::class, inversedBy: 'followers')]
    private $followers;

    #[ORM\ManyToOne(targetEntity: user::class, inversedBy: 'following')]
    private $following;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFollowers(): ?user
    {
        return $this->followers;
    }

    public function setFollowers(?user $followers): self
    {
        $this->followers = $followers;

        return $this;
    }

    public function getFollowing(): ?user
    {
        return $this->following;
    }

    public function setFollowing(?user $following): self
    {
        $this->following = $following;

        return $this;
    }
}
