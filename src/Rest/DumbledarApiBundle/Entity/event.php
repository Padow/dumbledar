<?php

namespace Rest\DumbledarApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rest\DumbledarApiBundle\Entity\eventRepository")
 */
class event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtstart", type="datetime")
     */
    private $dtstart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtend", type="datetime")
     */
    private $dtend;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=255)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="calid", type="integer")
     */
    private $calid;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dtstart
     *
     * @param \DateTime $dtstart
     *
     * @return event
     */
    public function setDtstart($dtstart)
    {
        $this->dtstart = $dtstart;

        return $this;
    }

    /**
     * Get dtstart
     *
     * @return \DateTime
     */
    public function getDtstart()
    {
        return $this->dtstart;
    }

    /**
     * Set dtend
     *
     * @param \DateTime $dtend
     *
     * @return event
     */
    public function setDtend($dtend)
    {
        $this->dtend = $dtend;

        return $this;
    }

    /**
     * Get dtend
     *
     * @return \DateTime
     */
    public function getDtend()
    {
        return $this->dtend;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return event
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return event
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set calid
     *
     * @param integer $calid
     *
     * @return event
     */
    public function setCalid($calid)
    {
        $this->calid = $calid;

        return $this;
    }

    /**
     * Get calid
     *
     * @return integer
     */
    public function getCalid()
    {
        return $this->calid;
    }
}

