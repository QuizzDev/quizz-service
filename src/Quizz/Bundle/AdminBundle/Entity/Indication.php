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
     */
    private $associatedDrugs;
}
