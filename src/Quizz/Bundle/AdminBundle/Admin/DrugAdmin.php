<?php

namespace Quizz\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class DrugAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('description')
            ->add('wikipediaLink')
            ->add('importance')
            ->add('associatedTargets')
            ->add('associatedIndications')
            ->add('associatedContraIndications')
            ->add('associatedAdvereEffects')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('description')
            ->add('wikipediaLink')
            ->add('importance')
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
            ->add('name')
            ->add('description')
            ->add('wikipediaLink')
            ->add('importance', 'choice', array(
                'label'         => 'Importance',
                'choices'       => array(
                    1 => 'high',
                    2 => 'middle',
                    3 => 'low'
                ),
                'required'      => false,
                'placeholder'   => 'please choose',
                'empty_data'    => null
            ))
            ->add('associatedTargets')
            ->add('associatedIndications')
            ->add('associatedContraIndications')
            ->add('associatedAdvereEffects')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('description')
            ->add('wikipediaLink')
            ->add('importance')
            ->add('associatedTargets')
            ->add('associatedIndications')
            ->add('associatedContraIndications')
            ->add('associatedAdvereEffects')
        ;
    }
}
