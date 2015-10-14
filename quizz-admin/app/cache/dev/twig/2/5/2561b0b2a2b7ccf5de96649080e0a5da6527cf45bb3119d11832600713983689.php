<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_566ebccf5a1d428040acca39a65cce90823a31f199f14de351cffb4cd3be15a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_117388d7a35f56991fd20dfb5a1b4a0c4c3db27b932c80d87ad6804ed85e2f4f = $this->env->getExtension("native_profiler");
        $__internal_117388d7a35f56991fd20dfb5a1b4a0c4c3db27b932c80d87ad6804ed85e2f4f->enter($__internal_117388d7a35f56991fd20dfb5a1b4a0c4c3db27b932c80d87ad6804ed85e2f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117388d7a35f56991fd20dfb5a1b4a0c4c3db27b932c80d87ad6804ed85e2f4f->leave($__internal_117388d7a35f56991fd20dfb5a1b4a0c4c3db27b932c80d87ad6804ed85e2f4f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
