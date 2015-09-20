<?php
namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Question
 *
 * @ORM\Entity
 * @ORM\Table(name="question")
 */
class Question
{
    /**
     *
     * @var integer 
     * 
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     *
     * @var string 
     * 
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * Many-To-Many, Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\Topic", mappedBy="questions", cascade={"persist"})
     * @ORM\JoinTable(name="map_questions_topics")
     **/
    private $topics;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * Many-To-Many, Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\Answer", mappedBy="associatedQuestions", cascade={"persist"})
     * @ORM\JoinTable(name="map_questions_anwers")
     */
    private $possibleAnswers;
    
    /**
     * @var \Quizz\Bundle\AdminBundle\Entity\Answer
     * 
     * Many-To-One, Unidirectional
     *
     * @ORM\ManyToOne(targetEntity="Quizz\Bundle\AdminBundle\Entity\Answer", cascade={"persist"})
     */
    private $correctAnswer;
    
    /**
     *
     * @var integer
     *
     * @ORM\Column(name="difficulty", type="integer")
     */
    private $difficulty;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->topics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->possibleAnswers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->question;
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
     * Set question
     *
     * @param string $question
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set difficulty
     *
     * @param integer $difficulty
     * @return Question
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return integer 
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Question
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
     * @return Question
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
     * Add topics
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Topic $topics
     * @return Question
     */
    public function addTopic(\Quizz\Bundle\AdminBundle\Entity\Topic $topics)
    {
        $this->topics[] = $topics;

        return $this;
    }

    /**
     * Remove topics
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Topic $topics
     */
    public function removeTopic(\Quizz\Bundle\AdminBundle\Entity\Topic $topics)
    {
        $this->topics->removeElement($topics);
    }

    /**
     * Get topics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Add possibleAnswers
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Answer $possibleAnswers
     * @return Question
     */
    public function addPossibleAnswer(\Quizz\Bundle\AdminBundle\Entity\Answer $possibleAnswers)
    {
        $this->possibleAnswers[] = $possibleAnswers;

        return $this;
    }

    /**
     * Remove possibleAnswers
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Answer $possibleAnswers
     */
    public function removePossibleAnswer(\Quizz\Bundle\AdminBundle\Entity\Answer $possibleAnswers)
    {
        $this->possibleAnswers->removeElement($possibleAnswers);
    }

    /**
     * Get possibleAnswers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPossibleAnswers()
    {
        return $this->possibleAnswers;
    }

    /**
     * Set correctAnswer
     *
     * @param \Quizz\Bundle\AdminBundle\Entity\Answer $correctAnswer
     * @return Question
     */
    public function setCorrectAnswer(\Quizz\Bundle\AdminBundle\Entity\Answer $correctAnswer = null)
    {
        $this->correctAnswer = $correctAnswer;

        return $this;
    }

    /**
     * Get correctAnswer
     *
     * @return \Quizz\Bundle\AdminBundle\Entity\Answer 
     */
    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }
}
