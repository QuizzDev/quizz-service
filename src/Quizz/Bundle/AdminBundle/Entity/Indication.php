<?php

namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Indication
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quizz\Bundle\AdminBundle\Entity\IndicationRepository")
 */
class Indication
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="wikipediaLink", type="string", length=255)
     */
    private $wikipediaLink;

    /**
     * @var array
     *
     * @ORM\Column(name="associatedDrugs", type="array")
     */
    private $associatedDrugs;

    /**
     *
     * @var datetime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
    /**
     *
     * @var datetime
     *
     * @ORM\Column(name="updated", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;
    
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
     * Set name
     *
     * @param string $name
     * @return Indication
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Indication
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
     * Set wikipediaLink
     *
     * @param string $wikipediaLink
     * @return Indication
     */
    public function setWikipediaLink($wikipediaLink)
    {
        $this->wikipediaLink = $wikipediaLink;

        return $this;
    }

    /**
     * Get wikipediaLink
     *
     * @return string 
     */
    public function getWikipediaLink()
    {
        return $this->wikipediaLink;
    }

    /**
     * Set associatedDrugs
     *
     * @param array $associatedDrugs
     * @return Indication
     */
    public function setAssociatedDrugs($associatedDrugs)
    {
        $this->associatedDrugs = $associatedDrugs;

        return $this;
    }

    /**
     * Get associatedDrugs
     *
     * @return array 
     */
    public function getAssociatedDrugs()
    {
        return $this->associatedDrugs;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Indication
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Indication
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
