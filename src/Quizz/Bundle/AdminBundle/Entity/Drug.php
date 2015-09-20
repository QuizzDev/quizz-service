<?php

namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Drug
 *
 * @ORM\Entity
 * @ORM\Table(name="drug")
 */
class Drug extends Answer
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
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\Target", mappedBy="associatedDrugs", cascade={"persist"})
     * @ORM\JoinTable(name="map_drugs_targets")
     */
    private $associatedTargets;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * Many-To-Many, Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\Indication", mappedBy="associatedDrugs", cascade={"persist"})
     * @ORM\JoinTable(name="map_drugs_indications")
     */
    private $associatedIndications;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * Many-To-Many, Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\ContraIndication", mappedBy="associatedDrugs", cascade={"persist"})
     * @ORM\JoinTable(name="map_drugs_contraindications")
     */
    private $associatedContraIndications;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * Many-To-Many, Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\AdvereEffect", mappedBy="associatedDrugs", cascade={"persist"})
     * @ORM\JoinTable(name="map_drugs_advereeffects")
     */
    private $associatedAdvereEffects;

    /**
     * Set description
     *
     * @param string $description
     * @return Drug
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
     * Add associatedTargets
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Target $associatedTargets
     * @return Drug
     */
    public function addAssociatedTarget(\Quizz\Bundle\AdminBundle\Entity\Target $associatedTargets)
    {
        $this->associatedTargets[] = $associatedTargets;

        return $this;
    }

    /**
     * Remove associatedTargets
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Target $associatedTargets
     */
    public function removeAssociatedTarget(\Quizz\Bundle\AdminBundle\Entity\Target $associatedTargets)
    {
        $this->associatedTargets->removeElement($associatedTargets);
    }

    /**
     * Get associatedTargets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssociatedTargets()
    {
        return $this->associatedTargets;
    }

    /**
     * Add associatedIndications
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Indication $associatedIndications
     * @return Drug
     */
    public function addAssociatedIndication(\Quizz\Bundle\AdminBundle\Entity\Indication $associatedIndications)
    {
        $this->associatedIndications[] = $associatedIndications;

        return $this;
    }

    /**
     * Remove associatedIndications
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Indication $associatedIndications
     */
    public function removeAssociatedIndication(\Quizz\Bundle\AdminBundle\Entity\Indication $associatedIndications)
    {
        $this->associatedIndications->removeElement($associatedIndications);
    }

    /**
     * Get associatedIndications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssociatedIndications()
    {
        return $this->associatedIndications;
    }

    /**
     * Add associatedContraIndications
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\ContraIndication $associatedContraIndications
     * @return Drug
     */
    public function addAssociatedContraIndication(\Quizz\Bundle\AdminBundle\Entity\ContraIndication $associatedContraIndications)
    {
        $this->associatedContraIndications[] = $associatedContraIndications;

        return $this;
    }

    /**
     * Remove associatedContraIndications
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\ContraIndication $associatedContraIndications
     */
    public function removeAssociatedContraIndication(\Quizz\Bundle\AdminBundle\Entity\ContraIndication $associatedContraIndications)
    {
        $this->associatedContraIndications->removeElement($associatedContraIndications);
    }

    /**
     * Get associatedContraIndications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssociatedContraIndications()
    {
        return $this->associatedContraIndications;
    }

    /**
     * Add associatedAdvereEffects
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\AdvereEffect $associatedAdvereEffects
     * @return Drug
     */
    public function addAssociatedAdvereEffect(\Quizz\Bundle\AdminBundle\Entity\AdvereEffect $associatedAdvereEffects)
    {
        $this->associatedAdvereEffects[] = $associatedAdvereEffects;

        return $this;
    }

    /**
     * Remove associatedAdvereEffects
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\AdvereEffect $associatedAdvereEffects
     */
    public function removeAssociatedAdvereEffect(\Quizz\Bundle\AdminBundle\Entity\AdvereEffect $associatedAdvereEffects)
    {
        $this->associatedAdvereEffects->removeElement($associatedAdvereEffects);
    }

    /**
     * Get associatedAdvereEffects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssociatedAdvereEffects()
    {
        return $this->associatedAdvereEffects;
    }
}
