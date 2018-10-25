<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 3:15 PM
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class CustomUi
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="custom_ui")
 */
class CustomUi
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
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $slug;

    /**
     * @var string
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $icon;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $is_active;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="CustomUiContent", mappedBy="customUi", cascade={"persist"}, fetch="EAGER")
     */
    private $customUiContents;

    public function __construct(){
        $this->customUiContents = new ArrayCollection();
    }

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
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->is_active;
    }

    /**
     * @param bool $is_active
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
    }

    /**
     * @return mixed
     */
    public function getCustomUiContents()
    {
        return $this->customUiContents;
    }

    /**
     * @param mixed $customUiContents
     */
    public function setCustomUiContents($customUiContents)
    {
        $this->customUiContents = $customUiContents;
    }
}