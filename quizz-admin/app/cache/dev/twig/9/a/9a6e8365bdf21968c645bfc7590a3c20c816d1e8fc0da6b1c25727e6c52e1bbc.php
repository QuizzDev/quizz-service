<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_a47238be5be6923583b67b038b2e608adcf9a3e96e94ff0c27b7d2737d8f4193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fb31d18b0e953d209bf41bb1872b4fc26d8187b77847ad2e034bdabcdf74e89 = $this->env->getExtension("native_profiler");
        $__internal_9fb31d18b0e953d209bf41bb1872b4fc26d8187b77847ad2e034bdabcdf74e89->enter($__internal_9fb31d18b0e953d209bf41bb1872b4fc26d8187b77847ad2e034bdabcdf74e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_9fb31d18b0e953d209bf41bb1872b4fc26d8187b77847ad2e034bdabcdf74e89->leave($__internal_9fb31d18b0e953d209bf41bb1872b4fc26d8187b77847ad2e034bdabcdf74e89_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_04a6529491b4dac6a7bd2c1aa1fc58f9db3a1b60bd548c4dc83c77f94f06c476 = $this->env->getExtension("native_profiler");
        $__internal_04a6529491b4dac6a7bd2c1aa1fc58f9db3a1b60bd548c4dc83c77f94f06c476->enter($__internal_04a6529491b4dac6a7bd2c1aa1fc58f9db3a1b60bd548c4dc83c77f94f06c476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_04a6529491b4dac6a7bd2c1aa1fc58f9db3a1b60bd548c4dc83c77f94f06c476->leave($__internal_04a6529491b4dac6a7bd2c1aa1fc58f9db3a1b60bd548c4dc83c77f94f06c476_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_5c577702db8fc368c3d302ac8c6431de4404985be168a009549e6154cab72abe = $this->env->getExtension("native_profiler");
        $__internal_5c577702db8fc368c3d302ac8c6431de4404985be168a009549e6154cab72abe->enter($__internal_5c577702db8fc368c3d302ac8c6431de4404985be168a009549e6154cab72abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_5c577702db8fc368c3d302ac8c6431de4404985be168a009549e6154cab72abe->leave($__internal_5c577702db8fc368c3d302ac8c6431de4404985be168a009549e6154cab72abe_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_b10b2d20f1bb8fee651a11cf46ca1f6958d64018d41f8860808aaf1d8aff8645 = $this->env->getExtension("native_profiler");
        $__internal_b10b2d20f1bb8fee651a11cf46ca1f6958d64018d41f8860808aaf1d8aff8645->enter($__internal_b10b2d20f1bb8fee651a11cf46ca1f6958d64018d41f8860808aaf1d8aff8645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_b10b2d20f1bb8fee651a11cf46ca1f6958d64018d41f8860808aaf1d8aff8645->leave($__internal_b10b2d20f1bb8fee651a11cf46ca1f6958d64018d41f8860808aaf1d8aff8645_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
