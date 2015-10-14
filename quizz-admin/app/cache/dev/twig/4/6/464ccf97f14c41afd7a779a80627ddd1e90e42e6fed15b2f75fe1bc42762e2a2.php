<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_807b6017209f0cb41e7aae812afcc4e457693d77194db31c052a00067793bdee extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_132fa1f5948522116142aec129c3df1371fb46898473398626661858443dba41 = $this->env->getExtension("native_profiler");
        $__internal_132fa1f5948522116142aec129c3df1371fb46898473398626661858443dba41->enter($__internal_132fa1f5948522116142aec129c3df1371fb46898473398626661858443dba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132fa1f5948522116142aec129c3df1371fb46898473398626661858443dba41->leave($__internal_132fa1f5948522116142aec129c3df1371fb46898473398626661858443dba41_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
