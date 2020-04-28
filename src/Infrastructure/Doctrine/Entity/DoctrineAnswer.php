<?php

namespace App\Infrastructure\Doctrine\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use TBoileau\CodeChallenge\Domain\Security\Entity\Participant;

/**
 * Class DoctrineAnswer
 * @package App\Infrastructure\Doctrine\Entity
 * @ORM\Entity()
 */
class DoctrineAnswer
{
    /**
     * @var UuidInterface
     * @ORM\Id
     * @ORM\Column(type="uuid")
     */
    private UuidInterface $id;

    /**
     * @var string
     * @ORM\Column
     */
    private string $title;

    /**
     * @var DoctrineQuestion
     * @ORM\ManyToOne(targetEntity="DoctrineQuestion", inversedBy="answers")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private DoctrineQuestion $question;

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @param UuidInterface $id
     */
    public function setId(UuidInterface $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return DoctrineQuestion
     */
    public function getQuestion(): DoctrineQuestion
    {
        return $this->question;
    }

    /**
     * @param DoctrineQuestion $question
     */
    public function setQuestion(DoctrineQuestion $question): void
    {
        $this->question = $question;
    }
}
