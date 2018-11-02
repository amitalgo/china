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
     * @ORM\Column(type="text")
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
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

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
    public function setId($id): void
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
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * @param string $synonyms
     */
    public function setSynonyms($synonyms): void
    {
        $this->synonyms = $synonyms;
    }

    /**
     * @return mixed
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * @param string $meaning
     */
    public function setMeaning($meaning): void
    {
        $this->meaning = $meaning;
    }

    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param string $example
     */
    public function setExample($example): void
    {
        $this->example = $example;
    }

    /**
     * @return mixed
     */
    public function getisActive()
    {
        return $this->isActive;
    }

    /**
     * @param string $isActive
     */
    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}