<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_4758b376ee33d70ba4087a1b5dc9e3fd058787edd684a5c95ee14d4259176275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62996bbaa1fc19d22043aaf4bef40459dd31f0feb1e9442f421f2213c4853dda = $this->env->getExtension("native_profiler");
        $__internal_62996bbaa1fc19d22043aaf4bef40459dd31f0feb1e9442f421f2213c4853dda->enter($__internal_62996bbaa1fc19d22043aaf4bef40459dd31f0feb1e9442f421f2213c4853dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62996bbaa1fc19d22043aaf4bef40459dd31f0feb1e9442f421f2213c4853dda->leave($__internal_62996bbaa1fc19d22043aaf4bef40459dd31f0feb1e9442f421f2213c4853dda_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
