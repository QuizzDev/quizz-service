<?php

namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Drug
 *
 * @ORM\Entity
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
     * @var \Quizz\Bundle\AdminBundle\Entity\Target
     *
     */
    private $target;
    
    /**
     * @var \Quizz\Bundle\AdminBundle\Entity\Indication
     *
     */
    private $indications;
    
    /**
     * @var \Quizz\Bundle\AdminBundle\Entity\ContraIndication
     *
     */
    private $contraIndications;
    
    /**
     * @var \Quizz\Bundle\AdminBundle\Entity\AdvereEffect
     *
     */
    private $advereEffects;
}
