<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="post")
     */
    private $category;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content5;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content1description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content2description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content3description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content4description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content5description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $subtitle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getContent1(): ?string
    {
        return $this->content1;
    }

    public function setContent1(?string $content1): self
    {
        $this->content1 = $content1;

        return $this;
    }

    public function getContent2(): ?string
    {
        return $this->content2;
    }

    public function setContent2(?string $content2): self
    {
        $this->content2 = $content2;

        return $this;
    }

    public function getContent3(): ?string
    {
        return $this->content3;
    }

    public function setContent3(?string $content3): self
    {
        $this->content3 = $content3;

        return $this;
    }

    public function getContent4(): ?string
    {
        return $this->content4;
    }

    public function setContent4(?string $content4): self
    {
        $this->content4 = $content4;

        return $this;
    }

    public function getContent5(): ?string
    {
        return $this->content5;
    }

    public function setContent5(?string $content5): self
    {
        $this->content5 = $content5;

        return $this;
    }

    public function getContent1description(): ?string
    {
        return $this->content1description;
    }

    public function setContent1description(?string $content1description): self
    {
        $this->content1description = $content1description;

        return $this;
    }

    public function getContent2description(): ?string
    {
        return $this->content2description;
    }

    public function setContent2description(?string $content2description): self
    {
        $this->content2description = $content2description;

        return $this;
    }

    public function getContent3description(): ?string
    {
        return $this->content3description;
    }

    public function setContent3description(?string $content3description): self
    {
        $this->content3description = $content3description;

        return $this;
    }

    public function getContent4description(): ?string
    {
        return $this->content4description;
    }

    public function setContent4description(?string $content4description): self
    {
        $this->content4description = $content4description;

        return $this;
    }

    public function getContent5description(): ?string
    {
        return $this->content5description;
    }

    public function setContent5description(?string $content5description): self
    {
        $this->content5description = $content5description;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }
}
