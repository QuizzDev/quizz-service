<?php

namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Indication
 *
 * @ORM\Entity
 */
class Indication extends Answer
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * Many-To-Many, Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\Drug", inversedBy="associatedIndications", cascade={"persist"})
     * @ORM\JoinTable(name="map_drugs_indications")
     */
    private $associatedDrugs;

    /**
     * Add associatedDrugs
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Drug $associatedDrugs
     * @return Indication
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
