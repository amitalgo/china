<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 2:59 PM
 */

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class SliderImage
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="slider_image")
 */
class SliderImage
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Slider", inversedBy="sliderImages")
     * @ORM\JoinColumn(name="slider_id", referencedColumnName="id")
     */
    private $slider;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(type="string", length=200)
     */
    private $mediaUrl;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $showButton;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    private $buttonText;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $buttonUrl;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSlider()
    {
        return $this->slider;
    }

    /**
     * @param mixed $slider
     */
    public function setSlider($slider)
    {
        $this->slider = $slider;
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getMediaUrl()
    {
        return $this->mediaUrl;
    }

    /**
     * @param string $mediaUrl
     */
    public function setMediaUrl($mediaUrl)
    {
        $this->mediaUrl = $mediaUrl;
    }

    /**
     * @return bool
     */
    public function isShowButton()
    {
        return $this->showButton;
    }

    /**
     * @param bool $showButton
     */
    public function setShowButton($showButton)
    {
        $this->showButton = $showButton;
    }

    /**
     * @return string
     */
    public function getButtonText()
    {
        return $this->buttonText;
    }

    /**
     * @param string $buttonText
     */
    public function setButtonText($buttonText)
    {
        $this->buttonText = $buttonText;
    }

    /**
     * @return string
     */
    public function getButtonUrl()
    {
        return $this->buttonUrl;
    }

    /**
     * @param string $buttonUrl
     */
    public function setButtonUrl($buttonUrl)
    {
        $this->buttonUrl = $buttonUrl;
    }


}