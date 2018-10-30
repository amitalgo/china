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
 * @ORM\Table(name="job_posted")
 */
class JobPosted
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
     * @ORM\Column(type="string", length=450)
     */
    private $jobTitle;

    /**
     * @var string
     * @ORM\Column(type="integer")
     */
    private $noOfPosition;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $experience;

    /**
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    private $jobLocation;

    /**
     * @ORM\ManyToOne(targetEntity="JobType",  inversedBy="JobPosted")
     * @ORM\JoinColumn(name="job_type_id", referencedColumnName="id")
     */
    private $jobTypeId;

    /**
     * @var string
     * @ORM\Column(type="string", length=300)
     */
    private $jobSkill;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $jobDescription;

    /**
     * @var string
     * @ORM\Column(type="boolean")
     */
    private $isClosed;

    /**
     * @ORM\ManyToOne(targetEntity="User",  inversedBy="userJobPost")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    /**
     * @var string
     * @ORM\Column(type="boolean")
     */
    private $isActive=1;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity="JobApplied", fetch="EAGER",mappedBy="jobPostedId",cascade={"persist"})
     */
    private $jobApplied;

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
    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     */
    public function setJobTitle(string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * @return string
     */
    public function getNoOfPosition(): string
    {
        return $this->noOfPosition;
    }

    /**
     * @param string $noOfPosition
     */
    public function setNoOfPosition(string $noOfPosition): void
    {
        $this->noOfPosition = $noOfPosition;
    }

    /**
     * @return string
     */
    public function getExperience(): string
    {
        return $this->experience;
    }

    /**
     * @param string $experience
     */
    public function setExperience(string $experience): void
    {
        $this->experience = $experience;
    }

    /**
     * @return string
     */
    public function getJobLocation(): string
    {
        return $this->jobLocation;
    }

    /**
     * @param string $jobLocation
     */
    public function setJobLocation(string $jobLocation): void
    {
        $this->jobLocation = $jobLocation;
    }

    /**
     * @return mixed
     */
    public function getJobTypeId()
    {
        return $this->jobTypeId;
    }

    /**
     * @param mixed $jobTypeId
     */
    public function setJobTypeId($jobTypeId): void
    {
        $this->jobTypeId = $jobTypeId;
    }

    /**
     * @return string
     */
    public function getJobSkill(): string
    {
        return $this->jobSkill;
    }

    /**
     * @param string $jobSkill
     */
    public function setJobSkill(string $jobSkill): void
    {
        $this->jobSkill = $jobSkill;
    }

    /**
     * @return string
     */
    public function getJobDescription(): string
    {
        return $this->jobDescription;
    }

    /**
     * @param string $jobDescription
     */
    public function setJobDescription(string $jobDescription): void
    {
        $this->jobDescription = $jobDescription;
    }

    /**
     * @return string
     */
    public function getisClosed(): string
    {
        return $this->isClosed;
    }

    /**
     * @param string $isClosed
     */
    public function setIsClosed(string $isClosed): void
    {
        $this->isClosed = $isClosed;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
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
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * @param mixed $userRole
     */
    public function setUserRole($userRole): void
    {
        $this->userRole = $userRole;
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