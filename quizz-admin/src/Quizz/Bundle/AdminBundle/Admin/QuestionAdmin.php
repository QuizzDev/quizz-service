<?php

namespace Quizz\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class QuestionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('question')
            ->add('topics')
            ->add('difficulty')
            ->add('possibleAnswers')
            ->add('correctAnswer')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('question')
            ->add('topics')
            ->add('difficulty')
            ->add('possibleAnswers')
            ->add('correctAnswer')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('question')
            ->add('topics', 'sonata_type_model', array(
                'required'     => false,
                'label'        => 'Topics',
                'expanded'     => false,
                'by_reference' => false,
                'multiple'     => true
            ))
            ->add('difficulty', 'choice', array(
                'label'         => 'Difficulty',
                'choices'       => array(
                    1 => 'high',
                    2 => 'middle',
                    3 => 'low'
                ),
                'required'      => false,
                'placeholder'   => 'please choose',
                'empty_data'    => null
            ))
            ->add('possibleAnswers', 'sonata_type_model', array(
                'required'     => false,
                'label'        => 'Possible Answers',
                'expanded'     => false,
                'by_reference' => false,
                'multiple'     => true
            ))
            ->add('correctAnswer')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('question')
            ->add('topics')
            ->add('difficulty')
            ->add('possibleAnswers')
            ->add('correctAnswer')
        ;
    }
}
