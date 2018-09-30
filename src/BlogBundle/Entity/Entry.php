<?php

namespace BlogBundle\Entity;
use Doctrine\Common\Collections;
/**
 * Entry
 */
class Entry
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $content;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $image;

    /**
     * @var \BlogBundle\Entity\Categories
     */
    private $category;

    /**
     * @var \BlogBundle\Entity\Users
     */
    private $user;


    protected $entryTag;



    public function __construct()
    {
        $this->entryTag = new ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string|null $title
     *
     * @return Entry
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content.
     *
     * @param string|null $content
     *
     * @return Entry
     */
    public function setContent($content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * Set status.
     *
     * @param string|null $status
     *
     * @return Entry
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set image.
     *
     * @param string|null $image
     *
     * @return Entry
     */
    public function setImage($image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set category.
     *
     * @param \BlogBundle\Entity\Categories|null $category
     *
     * @return Entry
     */
    public function setCategory(\BlogBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \BlogBundle\Entity\Categories|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set user.
     *
     * @param \BlogBundle\Entity\Users|null $user
     *
     * @return Entry
     */
    public function setUser(\BlogBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \BlogBundle\Entity\Users|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return ArrayCollection
     */
    public function getEntryTag()
    {
        return $this->entryTag;
    }


    public function addEntryTag(\BlogBundle\Entity\Tag $entryTag)
    {
        $this->entryTag[] = $entryTag;

        return $this;
    }
}
