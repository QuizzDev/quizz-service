<?php

namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Answer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quizz\Bundle\AdminBundle\Entity\AnswerRepository")
 */
class Answer
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
     * @var \Quizz\Bundle\AdminBundle\Entity\Drug
     *
     */
    private $drug;
    
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
     * @var \Quizz\Bundle\AdminBundle\Entity\Target
     *
     * @ORM\Column(name="target", type="object")
     */
    private $target;
    
    /**
     * @var \Quizz\Bundle\AdminBundle\Entity\Indication
     *
     */
    private $indication;

    /**
     * @var \Quizz\Bundle\AdminBundle\Entity\ContraIndication
     *
     */
    private $contraIndication;

    /**
     * @var \Quizz\Bundle\AdminBundle\Entity\SideEffect
     *
     */
    private $sideEffect;

    /**
     * @var integer
     *
     * @ORM\Column(name="importance", type="integer")
     */
    private $importance;
    
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
     * Set answer
     *
     * @param string $answer
     * @return Answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set topics
     *
     * @param array $topics
     * @return Answer
     */
    public function setTopics($topics)
    {
        $this->topics = $topics;

        return $this;
    }

    /**
     * Get topics
     *
     * @return array 
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Set associatedQuestions
     *
     * @param array $associatedQuestions
     * @return Answer
     */
    public function setAssociatedQuestions($associatedQuestions)
    {
        $this->associatedQuestions = $associatedQuestions;

        return $this;
    }

    /**
     * Get associatedQuestions
     *
     * @return array 
     */
    public function getAssociatedQuestions()
    {
        return $this->associatedQuestions;
    }

    /**
     * Set drugAgentText
     *
     * @param string $drugAgentText
     * @return Answer
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
     * Set indication
     *
     * @param \stdClass $indication
     * @return Answer
     */
    public function setIndication($indication)
    {
        $this->indication = $indication;

        return $this;
    }

    /**
     * Get indication
     *
     * @return \stdClass 
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Set contraIndication
     *
     * @param \stdClass $contraIndication
     * @return Answer
     */
    public function setContraIndication($contraIndication)
    {
        $this->contraIndication = $contraIndication;

        return $this;
    }

    /**
     * Get contraIndication
     *
     * @return \stdClass 
     */
    public function getContraIndication()
    {
        return $this->contraIndication;
    }

    /**
     * Set sideEffect
     *
     * @param \stdClass $sideEffect
     * @return Answer
     */
    public function setSideEffect($sideEffect)
    {
        $this->sideEffect = $sideEffect;

        return $this;
    }

    /**
     * Get sideEffect
     *
     * @return \stdClass 
     */
    public function getSideEffect()
    {
        return $this->sideEffect;
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

    /**
     * Set target
     *
     * @param \stdClass $target
     * @return Answer
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return \stdClass 
     */
    public function getTarget()
    {
        return $this->target;
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
     * Set drug
     *
     * @param \stdClass $drug
     * @return Answer
     */
    public function setDrug($drug)
    {
        $this->drug = $drug;

        return $this;
    }

    /**
     * Get drug
     *
     * @return \stdClass 
     */
    public function getDrug()
    {
        return $this->drug;
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
     * Constructor
     */
    public function __construct()
    {
        $this->associatedQuestions = new \Doctrine\Common\Collections\ArrayCollection();
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
}
