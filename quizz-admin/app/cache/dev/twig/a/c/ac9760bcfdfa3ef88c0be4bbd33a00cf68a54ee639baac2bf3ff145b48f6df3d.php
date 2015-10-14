<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_f112038a6c6e6da3bf1adbecff7d710a002c78c68a5a5b429ef6858547e8fcc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ae165896815bce2500adf43196790d78a8ec7593ad53704fdd397dbe297c43e = $this->env->getExtension("native_profiler");
        $__internal_2ae165896815bce2500adf43196790d78a8ec7593ad53704fdd397dbe297c43e->enter($__internal_2ae165896815bce2500adf43196790d78a8ec7593ad53704fdd397dbe297c43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae165896815bce2500adf43196790d78a8ec7593ad53704fdd397dbe297c43e->leave($__internal_2ae165896815bce2500adf43196790d78a8ec7593ad53704fdd397dbe297c43e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
