<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 3:18 PM
 */

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CustomUiContent
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="custom_ui_content")
 */
class CustomUiContent
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
     * @ORM\ManyToOne(targetEntity="CustomUi", inversedBy="customUiContents")
     * @ORM\JoinColumn(name="custom_ui_id", referencedColumnName="id")
     */
    private $customUi;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @var text
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @var string
     * @ORM\Column(name="featured_image", type="string", length=200)
     */
    private $mediaUrl;

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
    public function getCustomUi()
    {
        return $this->customUi;
    }

    /**
     * @param mixed $customUi
     */
    public function setCustomUi($customUi)
    {
        $this->customUi = $customUi;
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
     * @return text
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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


}