<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_5455501d367fa90282957d40c0e79de7a6b9b4cea317a6527e697ed4948329b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7f73f972434290590b11ef5788b4410bc84aea6709f30b2054e7813b749b705 = $this->env->getExtension("native_profiler");
        $__internal_f7f73f972434290590b11ef5788b4410bc84aea6709f30b2054e7813b749b705->enter($__internal_f7f73f972434290590b11ef5788b4410bc84aea6709f30b2054e7813b749b705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f73f972434290590b11ef5788b4410bc84aea6709f30b2054e7813b749b705->leave($__internal_f7f73f972434290590b11ef5788b4410bc84aea6709f30b2054e7813b749b705_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
