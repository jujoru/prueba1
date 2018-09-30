<?php

namespace BlogBundle\Entity;

/**
 * EntryTag
 */
class EntryTag
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \BlogBundle\Entity\Entries
     */
    private $entry;

    /**
     * @var \BlogBundle\Entity\Tags
     */
    private $tag;


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
     * Set entry.
     *
     * @param \BlogBundle\Entity\Entries|null $entry
     *
     * @return EntryTag
     */
    public function setEntry(\BlogBundle\Entity\Entry $entry = null)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry.
     *
     * @return \BlogBundle\Entity\Entries|null
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Set tag.
     *
     * @param \BlogBundle\Entity\Tags|null $tag
     *
     * @return EntryTag
     */
    public function setTag(\BlogBundle\Entity\Tag $tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag.
     *
     * @return \BlogBundle\Entity\Tags|null
     */
    public function getTag()
    {
        return $this->tag;
    }
}
