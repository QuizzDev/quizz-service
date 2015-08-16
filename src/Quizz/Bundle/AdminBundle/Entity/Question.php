<?php
namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quizz\Bundle\AdminBundle\Entity\QuestionRepository")
 */
class Question
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="integer")
     * 
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
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
     **/
    private $topics;

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
     * Set topics
     *
     * @param array $topics            
     * @return Question
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
}
