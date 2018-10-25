<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 2:53 PM
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Slider
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="slider")
 */
class Slider
{

    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=4)
     */
    private $width;

    /**
     * @var string
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $captionPosition;

    /**
     * @var string
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $captionButtonColor;

    /**
     * @var string
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $captionTitleColor;

    /**
     * @var string
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $captionDescriptionColor;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="SliderImage", mappedBy="slider", cascade={"persist"}, fetch="EAGER")
     */
    private $sliderImages;


    public function __construct(){
        $this->sliderImages = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return string
     */
    public function getCaptionPosition()
    {
        return $this->captionPosition;
    }

    /**
     * @param string $captionPosition
     */
    public function setCaptionPosition($captionPosition)
    {
        $this->captionPosition = $captionPosition;
    }

    /**
     * @return string
     */
    public function getCaptionButtonColor()
    {
        return $this->captionButtonColor;
    }

    /**
     * @param string $captionButtonColor
     */
    public function setCaptionButtonColor($captionButtonColor)
    {
        $this->captionButtonColor = $captionButtonColor;
    }

    /**
     * @return string
     */
    public function getCaptionTitleColor()
    {
        return $this->captionTitleColor;
    }

    /**
     * @param string $captionTitleColor
     */
    public function setCaptionTitleColor($captionTitleColor)
    {
        $this->captionTitleColor = $captionTitleColor;
    }

    /**
     * @return string
     */
    public function getCaptionDescriptionColor()
    {
        return $this->captionDescriptionColor;
    }

    /**
     * @param string $captionDescriptionColor
     */
    public function setCaptionDescriptionColor($captionDescriptionColor)
    {
        $this->captionDescriptionColor = $captionDescriptionColor;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return mixed
     */
    public function getSliderImages()
    {
        return $this->sliderImages;
    }

    /**
     * @param mixed $sliderImages
     */
    public function setSliderImages($sliderImages)
    {
        $this->sliderImages = $sliderImages;
    }

    public function addSliderImages(SliderImage $sliderImage){
        if(!$this->sliderImages->contains($sliderImage)){
            $sliderImage->setSlider($this);
            $this->sliderImages->add($sliderImage);
        }
    }

}