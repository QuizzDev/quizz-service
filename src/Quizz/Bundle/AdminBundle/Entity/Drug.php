<?php

namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Drug
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quizz\Bundle\AdminBundle\Entity\DrugRepository")
 */
class Drug
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
     * @ORM\Column(name="drugAgentText", type="string", length=255)
     */
    private $drugAgentText;

    /**
     * @var string
     *
     * @ORM\Column(name="wikipediaLink", type="string", length=255)
     */
    private $wikipediaLink;

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
     * @return Drug
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
     * Set drugAgentText
     *
     * @param string $drugAgentText
     * @return Drug
     */
    public function setDrugAgentText($drugAgentText)
    {
        $this->drugAgentText = $drugAgentText;

        return $this;
    }

    /**
     * Get drugAgentText
     *
     * @return string 
     */
    public function getDrugAgentText()
    {
        return $this->drugAgentText;
    }

    /**
     * Set wikipediaLink
     *
     * @param string $wikipediaLink
     * @return Drug
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
     * Set created
     *
     * @param \DateTime $created
     * @return Drug
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
     * @return Drug
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
