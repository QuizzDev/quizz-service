<?php

namespace Quizz\Bundle\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ContraIndication
 *
 * @ORM\Entity
 */
class ContraIndication extends Answer
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * Many-To-Many, Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Quizz\Bundle\AdminBundle\Entity\Drug", inversedBy="associatedContraIndications", cascade={"persist"})
     * @ORM\JoinTable(name="map_drugs_contraindications")
     */
    private $associatedDrugs;
}
