<?php

/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 11:20 AM
 */

namespace  App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Admin
 * @ORM\Entity
 * @ORM\Table(name="words_meaning")
 */
class WordMeaning
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Word",  inversedBy="wordId")
     * @ORM\JoinColumn(name="word_id", referencedColumnName="id")
     */
    private $wordId;

    /**
     * @var string
     * @ORM\Column(type="string", length=200)
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $synonyms;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $meaning;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $example;

    /**
     * @var string
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @var datetime $updatedAt
     *
     * @ORM\Column(type="datetime", nullable = true)
     */
    protected $updatedAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getWordId()
    {
        return $this->wordId;
    }

    /**
     * @param mixed $wordId
     */
    public function setWordId($wordId): void
    {
        $this->wordId = $wordId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getSynonyms(): string
    {
        return $this->synonyms;
    }

    /**
     * @param string $synonyms
     */
    public function setSynonyms(string $synonyms): void
    {
        $this->synonyms = $synonyms;
    }

    /**
     * @return string
     */
    public function getMeaning(): string
    {
        return $this->meaning;
    }

    /**
     * @param string $meaning
     */
    public function setMeaning(string $meaning): void
    {
        $this->meaning = $meaning;
    }

    /**
     * @return string
     */
    public function getExample(): string
    {
        return $this->example;
    }

    /**
     * @param string $example
     */
    public function setExample(string $example): void
    {
        $this->example = $example;
    }

    /**
     * @return string
     */
    public function getisActive(): string
    {
        return $this->isActive;
    }

    /**
     * @param string $isActive
     */
    public function setIsActive(string $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * Gets triggered only on insert

     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTime("now");
    }

    /**
     * Gets triggered every time on update

     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTime("now");
    }
}