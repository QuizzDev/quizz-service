<?php

namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Target
 *
 * @ORM\Entity
 * @ORM\Table(name="target")
 */
class Target extends Answer
{    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * Many-To-Many, Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\Drug", inversedBy="associatedTargets", cascade={"persist"})
     * @ORM\JoinTable(name="map_drugs_targets")
     */
    private $associatedDrugs;
    
    /**
     * Set description
     *
     * @param string $description
     * @return Target
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
     * Add associatedDrugs
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Drug $associatedDrugs
     * @return Target
     */
    public function addAssociatedDrug(\Quizz\Bundle\AdminBundle\Entity\Drug $associatedDrugs)
    {
        $this->associatedDrugs[] = $associatedDrugs;

        return $this;
    }

    /**
     * Remove associatedDrugs
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Drug $associatedDrugs
     */
    public function removeAssociatedDrug(\Quizz\Bundle\AdminBundle\Entity\Drug $associatedDrugs)
    {
        $this->associatedDrugs->removeElement($associatedDrugs);
    }

    /**
     * Get associatedDrugs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssociatedDrugs()
    {
        return $this->associatedDrugs;
    }
}
