<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_44a848e6efa7f54f4b995f7b8e9f259a7409ecef2421aedcf4289ebff4574b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ace04964eba5c4ab44eb4b38db4f588a2276a898bbd60ff0a052c90789fe79af = $this->env->getExtension("native_profiler");
        $__internal_ace04964eba5c4ab44eb4b38db4f588a2276a898bbd60ff0a052c90789fe79af->enter($__internal_ace04964eba5c4ab44eb4b38db4f588a2276a898bbd60ff0a052c90789fe79af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace04964eba5c4ab44eb4b38db4f588a2276a898bbd60ff0a052c90789fe79af->leave($__internal_ace04964eba5c4ab44eb4b38db4f588a2276a898bbd60ff0a052c90789fe79af_prof);

    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_108e56333b702db54d0dbf2ba1f2b661bdf320fb205b36130905cea0e70d2fa8 = $this->env->getExtension("native_profiler");
        $__internal_108e56333b702db54d0dbf2ba1f2b661bdf320fb205b36130905cea0e70d2fa8->enter($__internal_108e56333b702db54d0dbf2ba1f2b661bdf320fb205b36130905cea0e70d2fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_108e56333b702db54d0dbf2ba1f2b661bdf320fb205b36130905cea0e70d2fa8->leave($__internal_108e56333b702db54d0dbf2ba1f2b661bdf320fb205b36130905cea0e70d2fa8_prof);

    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cb14bffa265be91c3aae66c8f5fa68b710148716c9c6ecdf69f439293c85ec7b = $this->env->getExtension("native_profiler");
        $__internal_cb14bffa265be91c3aae66c8f5fa68b710148716c9c6ecdf69f439293c85ec7b->enter($__internal_cb14bffa265be91c3aae66c8f5fa68b710148716c9c6ecdf69f439293c85ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_cb14bffa265be91c3aae66c8f5fa68b710148716c9c6ecdf69f439293c85ec7b->leave($__internal_cb14bffa265be91c3aae66c8f5fa68b710148716c9c6ecdf69f439293c85ec7b_prof);

    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ccf19937fb2b4a42960b8dd3492bd163a6a5ea532e765e7ba9996e64eba1bf49 = $this->env->getExtension("native_profiler");
        $__internal_ccf19937fb2b4a42960b8dd3492bd163a6a5ea532e765e7ba9996e64eba1bf49->enter($__internal_ccf19937fb2b4a42960b8dd3492bd163a6a5ea532e765e7ba9996e64eba1bf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_ccf19937fb2b4a42960b8dd3492bd163a6a5ea532e765e7ba9996e64eba1bf49->leave($__internal_ccf19937fb2b4a42960b8dd3492bd163a6a5ea532e765e7ba9996e64eba1bf49_prof);

    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7eb82c8aef1512787754687fb4f67bfa2094d35a1db87a1568d43902a58d1745 = $this->env->getExtension("native_profiler");
        $__internal_7eb82c8aef1512787754687fb4f67bfa2094d35a1db87a1568d43902a58d1745->enter($__internal_7eb82c8aef1512787754687fb4f67bfa2094d35a1db87a1568d43902a58d1745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class", array()) . " ") . (((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != ""))) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline"))) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        $this->displayBlock("form_message", $context, $blocks);
        echo "
        ";
        // line 54
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7eb82c8aef1512787754687fb4f67bfa2094d35a1db87a1568d43902a58d1745->leave($__internal_7eb82c8aef1512787754687fb4f67bfa2094d35a1db87a1568d43902a58d1745_prof);

    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b62a0d3c2b08ced8305c5518cdad3563242a7bfd95f1ebc9b1255d850d2302dd = $this->env->getExtension("native_profiler");
        $__internal_b62a0d3c2b08ced8305c5518cdad3563242a7bfd95f1ebc9b1255d850d2302dd->enter($__internal_b62a0d3c2b08ced8305c5518cdad3563242a7bfd95f1ebc9b1255d850d2302dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 63
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && array_key_exists("label_render", $context))) {
            // line 70
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 72
        echo "
        <input type=\"checkbox\" ";
        // line 73
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 75
            echo "            ";
            if ((array_key_exists("label_render", $context) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 81
            echo "            </div>
            ";
            // line 82
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 84
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b62a0d3c2b08ced8305c5518cdad3563242a7bfd95f1ebc9b1255d850d2302dd->leave($__internal_b62a0d3c2b08ced8305c5518cdad3563242a7bfd95f1ebc9b1255d850d2302dd_prof);

    }

    // line 87
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_beb6bcc3dc636c739a0a442baecf945e75fe4d0b769014b8f76747ec8a9abb44 = $this->env->getExtension("native_profiler");
        $__internal_beb6bcc3dc636c739a0a442baecf945e75fe4d0b769014b8f76747ec8a9abb44->enter($__internal_beb6bcc3dc636c739a0a442baecf945e75fe4d0b769014b8f76747ec8a9abb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 88
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "SonataAdminBundle:Form:filter_admin_fields.html.twig", 88)->display($context);
        
        $__internal_beb6bcc3dc636c739a0a442baecf945e75fe4d0b769014b8f76747ec8a9abb44->leave($__internal_beb6bcc3dc636c739a0a442baecf945e75fe4d0b769014b8f76747ec8a9abb44_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 88,  280 => 87,  272 => 84,  267 => 82,  264 => 81,  261 => 80,  258 => 79,  251 => 76,  248 => 75,  246 => 74,  234 => 73,  231 => 72,  223 => 70,  221 => 69,  218 => 68,  214 => 66,  211 => 65,  208 => 64,  205 => 63,  202 => 62,  199 => 61,  193 => 60,  185 => 57,  181 => 55,  179 => 54,  174 => 53,  168 => 52,  164 => 50,  162 => 49,  157 => 47,  153 => 46,  137 => 45,  131 => 43,  128 => 42,  123 => 41,  117 => 39,  114 => 38,  111 => 37,  108 => 36,  105 => 35,  102 => 34,  96 => 33,  86 => 30,  83 => 29,  77 => 28,  67 => 25,  64 => 24,  58 => 23,  48 => 20,  45 => 19,  39 => 18,  11 => 12,);
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
/* {% extends 'form_div_layout.html.twig' %}*/
/* */
/* {#*/
/*     Inspired from MopaBootstrapBundle: https://github.com/phiamo/MopaBootstrapBundle*/
/* #}*/
/* */
/* {% block choice_widget_collapsed %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block textarea_widget %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock textarea_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block choice_widget_expanded %}*/
/*     {% spaceless %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type is defined and widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}*/
/*         {% if expanded %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('')}) %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*         {% endif %}*/
/*         {% for child in form %}*/
/*             {% if widget_type is defined and widget_type != 'inline' %}*/
/*                 <div class="{{ multiple ? 'checkbox' : 'radio' }}">*/
/*             {% endif %}*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{ form_widget(child, {'attr': {'class': attr.widget_class|default('')}}) }}*/
/*             {{ child.vars.label|trans({}, translation_domain) }}*/
/*             </label>*/
/*             {% if widget_type is defined and widget_type != 'inline' %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         {{ block('form_message') }}*/
/*         {% if expanded %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget %}*/
/*     {% spaceless %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             <div class="checkbox">*/
/*         {% endif %}*/
/* */
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render is defined %}*/
/*             <label class="{% if inline is defined and inline %}checkbox-inline{% endif %}">*/
/*         {% endif %}*/
/* */
/*         <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %}/>*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             {% if label_render is defined and widget_checkbox_label in ['both', 'widget'] %}*/
/*                 {{ label|trans({}, translation_domain) }}*/
/*                 </label>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             </div>*/
/*             {{ block('form_message') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
/* */
/* {% block sonata_type_model_autocomplete_widget %}*/
/*     {% include template %}*/
/* {% endblock sonata_type_model_autocomplete_widget %}*/
/* */
