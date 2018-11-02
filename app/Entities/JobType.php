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
 * @ORM\Table(name="job_type")
 */
class JobType
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $jobType;

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
     * @ORM\OneToMany(targetEntity="JobPosted", fetch="EAGER",mappedBy="jobTypeId",cascade={"persist"})
     */
    private $JobPosted;

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
     * @return string
     */
    public function getJobType(): string
    {
        return $this->jobType;
    }

    /**
     * @param string $jobType
     */
    public function setJobType(string $jobType): void
    {
        $this->jobType = $jobType;
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