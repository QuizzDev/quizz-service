<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_92f4d9eb4082c24bfdae983a0406be7b289a9bc7f23d766cf484c9b0f369d177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e23656229e6a3cc63891c0bbd8edb7fddec3fdc909a883364f331cb3d4cab835 = $this->env->getExtension("native_profiler");
        $__internal_e23656229e6a3cc63891c0bbd8edb7fddec3fdc909a883364f331cb3d4cab835->enter($__internal_e23656229e6a3cc63891c0bbd8edb7fddec3fdc909a883364f331cb3d4cab835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e23656229e6a3cc63891c0bbd8edb7fddec3fdc909a883364f331cb3d4cab835->leave($__internal_e23656229e6a3cc63891c0bbd8edb7fddec3fdc909a883364f331cb3d4cab835_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8bd07cbff937ae4bb0ef552ad80b932bc205352ce8577aa94539c7dc8d505451 = $this->env->getExtension("native_profiler");
        $__internal_8bd07cbff937ae4bb0ef552ad80b932bc205352ce8577aa94539c7dc8d505451->enter($__internal_8bd07cbff937ae4bb0ef552ad80b932bc205352ce8577aa94539c7dc8d505451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_8bd07cbff937ae4bb0ef552ad80b932bc205352ce8577aa94539c7dc8d505451->leave($__internal_8bd07cbff937ae4bb0ef552ad80b932bc205352ce8577aa94539c7dc8d505451_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
