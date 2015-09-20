<?php

namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Answer
 *
 * @ORM\Entity
 * @ORM\Table(name="answer")
 */
 
/**
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({
 *      "drug" = "Quizz\Bundle\AdminBundle\Entity\Drug", 
 *      "target" = "Quizz\Bundle\AdminBundle\Entity\Target",
 *      "indication" = "Quizz\Bundle\AdminBundle\Entity\Indication",
 *      "contraindication" = "Quizz\Bundle\AdminBundle\Entity\ContraIndication",
 *      "advereeffect" = "Quizz\Bundle\AdminBundle\Entity\AdvereEffect"
 * })
 */
class Answer
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
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
     * @ORM\Column(name="wikipedia_link", type="string", length=255)
     */
    private $wikipediaLink;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     */
    private $topics;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * Many-To-Many, Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\Question", inversedBy="possibleAnswers")
     * @ORM\JoinTable(name="map_questions_answers")
     */
    private $associatedQuestions;

    /**
     * @var integer
     *
     * @ORM\Column(name="importance", type="integer", nullable=true)
     */
    private $importance;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->associatedQuestions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }
    
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
     * Set importance
     *
     * @param integer $importance
     * @return Answer
     */
    public function setImportance($importance)
    {
        $this->importance = $importance;

        return $this;
    }

    /**
     * Get importance
     *
     * @return integer 
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Answer
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
     * @return Answer
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

    /**
     * Add associatedQuestions
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Question $associatedQuestions
     * @return Answer
     */
    public function addAssociatedQuestion(\Quizz\Bundle\AdminBundle\Entity\Question $associatedQuestions)
    {
        $this->associatedQuestions[] = $associatedQuestions;

        return $this;
    }

    /**
     * Remove associatedQuestions
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Question $associatedQuestions
     */
    public function removeAssociatedQuestion(\Quizz\Bundle\AdminBundle\Entity\Question $associatedQuestions)
    {
        $this->associatedQuestions->removeElement($associatedQuestions);
    }

    /**
     * Get associatedQuestions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssociatedQuestions()
    {
        return $this->associatedQuestions;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Answer
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
     * Set wikipediaLink
     *
     * @param string $wikipediaLink
     * @return Answer
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
}
