<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_85eb3c2a4c0f15f6e337e8efc77f28ebfef43dd4cc0fe0684b7e333c23a4502e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8b34f225a033a4035eae0090e0a497e4b6e9462b1de979d0e37d9e287e2329c = $this->env->getExtension("native_profiler");
        $__internal_b8b34f225a033a4035eae0090e0a497e4b6e9462b1de979d0e37d9e287e2329c->enter($__internal_b8b34f225a033a4035eae0090e0a497e4b6e9462b1de979d0e37d9e287e2329c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b34f225a033a4035eae0090e0a497e4b6e9462b1de979d0e37d9e287e2329c->leave($__internal_b8b34f225a033a4035eae0090e0a497e4b6e9462b1de979d0e37d9e287e2329c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
