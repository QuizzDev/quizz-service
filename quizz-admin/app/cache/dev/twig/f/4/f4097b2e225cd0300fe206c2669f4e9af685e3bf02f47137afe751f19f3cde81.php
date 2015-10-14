<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_48acd10862123935b3d55c24a79ae41c07ec6f1bf1558ac7d035a3e93c93aec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7aee35006c255d000ae05008a22755e61356150253fb27bc0e0951d934bb74b = $this->env->getExtension("native_profiler");
        $__internal_d7aee35006c255d000ae05008a22755e61356150253fb27bc0e0951d934bb74b->enter($__internal_d7aee35006c255d000ae05008a22755e61356150253fb27bc0e0951d934bb74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7aee35006c255d000ae05008a22755e61356150253fb27bc0e0951d934bb74b->leave($__internal_d7aee35006c255d000ae05008a22755e61356150253fb27bc0e0951d934bb74b_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_baa430224d641427974175fa3c63976259f6a95f2f8a3358299725a13968dff6 = $this->env->getExtension("native_profiler");
        $__internal_baa430224d641427974175fa3c63976259f6a95f2f8a3358299725a13968dff6->enter($__internal_baa430224d641427974175fa3c63976259f6a95f2f8a3358299725a13968dff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_baa430224d641427974175fa3c63976259f6a95f2f8a3358299725a13968dff6->leave($__internal_baa430224d641427974175fa3c63976259f6a95f2f8a3358299725a13968dff6_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_2b3892a9bfcdbac519a37d816b028262afea694e04e9b0c0e62cba7ff8fa862a = $this->env->getExtension("native_profiler");
        $__internal_2b3892a9bfcdbac519a37d816b028262afea694e04e9b0c0e62cba7ff8fa862a->enter($__internal_2b3892a9bfcdbac519a37d816b028262afea694e04e9b0c0e62cba7ff8fa862a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2b3892a9bfcdbac519a37d816b028262afea694e04e9b0c0e62cba7ff8fa862a->leave($__internal_2b3892a9bfcdbac519a37d816b028262afea694e04e9b0c0e62cba7ff8fa862a_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_f2fa11a7f4460a1b74f20636ee84350c10253c44189a437684db0acc337a759f = $this->env->getExtension("native_profiler");
        $__internal_f2fa11a7f4460a1b74f20636ee84350c10253c44189a437684db0acc337a759f->enter($__internal_f2fa11a7f4460a1b74f20636ee84350c10253c44189a437684db0acc337a759f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_f2fa11a7f4460a1b74f20636ee84350c10253c44189a437684db0acc337a759f->leave($__internal_f2fa11a7f4460a1b74f20636ee84350c10253c44189a437684db0acc337a759f_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2dd8e715502861bbcf5ef6c24de2f0c13c2cefba9d45fcecc70b8497da6fb6b6 = $this->env->getExtension("native_profiler");
        $__internal_2dd8e715502861bbcf5ef6c24de2f0c13c2cefba9d45fcecc70b8497da6fb6b6->enter($__internal_2dd8e715502861bbcf5ef6c24de2f0c13c2cefba9d45fcecc70b8497da6fb6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 41
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_2dd8e715502861bbcf5ef6c24de2f0c13c2cefba9d45fcecc70b8497da6fb6b6->leave($__internal_2dd8e715502861bbcf5ef6c24de2f0c13c2cefba9d45fcecc70b8497da6fb6b6_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_49e5372991358e71059e1a79fc81e413042eee3c0ee2d8f964c6a5b165a75b43 = $this->env->getExtension("native_profiler");
        $__internal_49e5372991358e71059e1a79fc81e413042eee3c0ee2d8f964c6a5b165a75b43->enter($__internal_49e5372991358e71059e1a79fc81e413042eee3c0ee2d8f964c6a5b165a75b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_49e5372991358e71059e1a79fc81e413042eee3c0ee2d8f964c6a5b165a75b43->leave($__internal_49e5372991358e71059e1a79fc81e413042eee3c0ee2d8f964c6a5b165a75b43_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_04f2a773c02129c765d31ffb3c9d71bc563b04d859e0547eef8bf8e015c9e284 = $this->env->getExtension("native_profiler");
        $__internal_04f2a773c02129c765d31ffb3c9d71bc563b04d859e0547eef8bf8e015c9e284->enter($__internal_04f2a773c02129c765d31ffb3c9d71bc563b04d859e0547eef8bf8e015c9e284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 53
        if (((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = trim(twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
(isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "    ";
        }
        
        $__internal_04f2a773c02129c765d31ffb3c9d71bc563b04d859e0547eef8bf8e015c9e284->leave($__internal_04f2a773c02129c765d31ffb3c9d71bc563b04d859e0547eef8bf8e015c9e284_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2149d51e06770d361e3c308ac71c95a9e63492b553ac902098cf74d538a880ee = $this->env->getExtension("native_profiler");
        $__internal_2149d51e06770d361e3c308ac71c95a9e63492b553ac902098cf74d538a880ee->enter($__internal_2149d51e06770d361e3c308ac71c95a9e63492b553ac902098cf74d538a880ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">
            ";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2149d51e06770d361e3c308ac71c95a9e63492b553ac902098cf74d538a880ee->leave($__internal_2149d51e06770d361e3c308ac71c95a9e63492b553ac902098cf74d538a880ee_prof);

    }

    // line 82
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b8114e00f3eac6d39c5b410240013e412f1c4b40b19522a75f0da72b1384a9ce = $this->env->getExtension("native_profiler");
        $__internal_b8114e00f3eac6d39c5b410240013e412f1c4b40b19522a75f0da72b1384a9ce->enter($__internal_b8114e00f3eac6d39c5b410240013e412f1c4b40b19522a75f0da72b1384a9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 83
        ob_start();
        // line 84
        echo "    ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 85
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 86
            echo "    ";
        }
        // line 87
        echo "
    ";
        // line 88
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter((isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")), "")) : ("")) . " control-label");
        // line 89
        echo "
    ";
        // line 91
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 92
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 93
            echo "
        ";
            // line 94
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 95
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 96
                echo "        ";
            }
            // line 97
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 98
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 99
                echo "        ";
            }
            // line 100
            echo "
        ";
            // line 101
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 102
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                    // line 103
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 104
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 105
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 108
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 111
            echo "
        ";
            // line 112
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : $this->getContext($context, "in_list_checkbox"))) && array_key_exists("widget", $context))) {
                // line 113
                echo "            <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
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
                // line 114
                echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                echo "
                <span>
                    ";
                // line 116
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 117
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 121
                echo "                </span>
            </label>
        ";
            } else {
                // line 124
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
                // line 125
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 126
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 128
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 130
                echo "            </label>
        ";
            }
            // line 132
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b8114e00f3eac6d39c5b410240013e412f1c4b40b19522a75f0da72b1384a9ce->leave($__internal_b8114e00f3eac6d39c5b410240013e412f1c4b40b19522a75f0da72b1384a9ce_prof);

    }

    // line 136
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9d3ee6dde676d480941b153f84c73b32e1d5afeae3ff1b39644c48de78cf14e7 = $this->env->getExtension("native_profiler");
        $__internal_9d3ee6dde676d480941b153f84c73b32e1d5afeae3ff1b39644c48de78cf14e7->enter($__internal_9d3ee6dde676d480941b153f84c73b32e1d5afeae3ff1b39644c48de78cf14e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 137
        ob_start();
        // line 138
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 139
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 141
            echo "        <li>
            ";
            // line 142
            ob_start();
            // line 143
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 144
            echo "            ";
            $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 145
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : $this->getContext($context, "form_widget_content"))) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array()), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9d3ee6dde676d480941b153f84c73b32e1d5afeae3ff1b39644c48de78cf14e7->leave($__internal_9d3ee6dde676d480941b153f84c73b32e1d5afeae3ff1b39644c48de78cf14e7_prof);

    }

    // line 152
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0aaf74b62705eaa3d592dea39327368bd9bbdd2f8abdf131ba38b8686bb7db26 = $this->env->getExtension("native_profiler");
        $__internal_0aaf74b62705eaa3d592dea39327368bd9bbdd2f8abdf131ba38b8686bb7db26->enter($__internal_0aaf74b62705eaa3d592dea39327368bd9bbdd2f8abdf131ba38b8686bb7db26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 153
        ob_start();
        // line 154
        echo "    ";
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 155
            echo "        ";
            $context["required"] = false;
            // line 156
            echo "    ";
        }
        // line 157
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 158
        echo "    ";
        if (((array_key_exists("sortable", $context) && (isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) && (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 159
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 161
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 162
            if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
                // line 163
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 164
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 165
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 167
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 169
                echo "                </option>
            ";
            }
            // line 171
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 172
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 173
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 174
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 175
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                ";
                }
                // line 177
                echo "            ";
            }
            // line 178
            echo "            ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 179
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0aaf74b62705eaa3d592dea39327368bd9bbdd2f8abdf131ba38b8686bb7db26->leave($__internal_0aaf74b62705eaa3d592dea39327368bd9bbdd2f8abdf131ba38b8686bb7db26_prof);

    }

    // line 185
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_63eb80e2216ba1397d733bb33aaabbdcab70fa9223f0e8eded83119a34ed2655 = $this->env->getExtension("native_profiler");
        $__internal_63eb80e2216ba1397d733bb33aaabbdcab70fa9223f0e8eded83119a34ed2655->enter($__internal_63eb80e2216ba1397d733bb33aaabbdcab70fa9223f0e8eded83119a34ed2655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 186
        ob_start();
        // line 187
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 188
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 190
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 191
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 192
                echo "        ";
            }
            // line 193
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-4")) : ("col-sm-4"));
            // line 194
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 195
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" .             // line 196
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 197
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 198
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 199
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_63eb80e2216ba1397d733bb33aaabbdcab70fa9223f0e8eded83119a34ed2655->leave($__internal_63eb80e2216ba1397d733bb33aaabbdcab70fa9223f0e8eded83119a34ed2655_prof);

    }

    // line 205
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a59a4b131e896d5399a77184f9f6ac7d7e6b0b0ac66743f77a39b28bd0405fb8 = $this->env->getExtension("native_profiler");
        $__internal_a59a4b131e896d5399a77184f9f6ac7d7e6b0b0ac66743f77a39b28bd0405fb8->enter($__internal_a59a4b131e896d5399a77184f9f6ac7d7e6b0b0ac66743f77a39b28bd0405fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 206
        ob_start();
        // line 207
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 208
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 210
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 211
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 212
                echo "        ";
            }
            // line 213
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-6")) : ("col-sm-6"));
            // line 214
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 215
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
            echo "\">
                ";
            // line 216
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 218
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                // line 219
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 220
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 223
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 224
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 225
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 228
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a59a4b131e896d5399a77184f9f6ac7d7e6b0b0ac66743f77a39b28bd0405fb8->leave($__internal_a59a4b131e896d5399a77184f9f6ac7d7e6b0b0ac66743f77a39b28bd0405fb8_prof);

    }

    // line 233
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1a1b493b54463c158f3cb967d2ed0b06cf6aa4bbb235b897130f59cce06a49e3 = $this->env->getExtension("native_profiler");
        $__internal_1a1b493b54463c158f3cb967d2ed0b06cf6aa4bbb235b897130f59cce06a49e3->enter($__internal_1a1b493b54463c158f3cb967d2ed0b06cf6aa4bbb235b897130f59cce06a49e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 234
        ob_start();
        // line 235
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 236
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 238
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
            // line 239
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 240
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 241
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "
            ";
            // line 242
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
            echo "
            ";
            // line 243
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1a1b493b54463c158f3cb967d2ed0b06cf6aa4bbb235b897130f59cce06a49e3->leave($__internal_1a1b493b54463c158f3cb967d2ed0b06cf6aa4bbb235b897130f59cce06a49e3_prof);

    }

    // line 249
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_269cc70d385d163d1b2e51c0aa483b4076820b732a28c027db935238e6517be0 = $this->env->getExtension("native_profiler");
        $__internal_269cc70d385d163d1b2e51c0aa483b4076820b732a28c027db935238e6517be0->enter($__internal_269cc70d385d163d1b2e51c0aa483b4076820b732a28c027db935238e6517be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 250
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 251
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 252
            echo "            ";
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) : ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
            // line 253
            echo "        ";
        }
        // line 254
        echo "
        ";
        // line 255
        $context["div_class"] = "sonata-ba-field";
        // line 256
        echo "
        ";
        // line 257
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 258
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-collection-row-without-label");
            // line 259
            echo "        ";
        }
        // line 260
        echo "
        ";
        // line 261
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 262
            echo "            ";
            if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 263
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 264
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-12");
                    // line 265
                    echo "                ";
                } else {
                    // line 266
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9 col-sm-offset-3");
                    // line 267
                    echo "                ";
                }
                // line 268
                echo "            ";
            } else {
                // line 269
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9");
                // line 270
                echo "            ";
            }
            // line 271
            echo "        ";
        }
        // line 272
        echo "
        ";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "

        ";
        // line 275
        if ((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) {
            // line 276
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array())) . "-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()));
            // line 277
            echo "        ";
        }
        // line 278
        echo "
        ";
        // line 279
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 280
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-error");
            // line 281
            echo "        ";
        }
        // line 282
        echo "
        <div class=\"";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo "\">
            ";
        // line 284
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 285
        echo "
            ";
        // line 286
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 287
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 288
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 291
        echo "
            ";
        // line 292
        if (((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) && (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 293
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method");
            echo "</span>
            ";
        }
        // line 295
        echo "        </div>
    </div>
";
        
        $__internal_269cc70d385d163d1b2e51c0aa483b4076820b732a28c027db935238e6517be0->leave($__internal_269cc70d385d163d1b2e51c0aa483b4076820b732a28c027db935238e6517be0_prof);

    }

    // line 299
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_04bc9835836555d5f40cbf74cf8664b8e9c0f4d931c28ed1e6ce4919785e02b8 = $this->env->getExtension("native_profiler");
        $__internal_04bc9835836555d5f40cbf74cf8664b8e9c0f4d931c28ed1e6ce4919785e02b8->enter($__internal_04bc9835836555d5f40cbf74cf8664b8e9c0f4d931c28ed1e6ce4919785e02b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 300
        ob_start();
        // line 301
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 302
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 303
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 311
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row', array("label" => false));
        echo "
        ";
        // line 312
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 313
            echo "                </div>
            </div>
        ";
        }
        // line 316
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_04bc9835836555d5f40cbf74cf8664b8e9c0f4d931c28ed1e6ce4919785e02b8->leave($__internal_04bc9835836555d5f40cbf74cf8664b8e9c0f4d931c28ed1e6ce4919785e02b8_prof);

    }

    // line 320
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_6abb10149f04842063b2feef83564cdf5df1f4357ed491761d84cd62412a3c14 = $this->env->getExtension("native_profiler");
        $__internal_6abb10149f04842063b2feef83564cdf5df1f4357ed491761d84cd62412a3c14->enter($__internal_6abb10149f04842063b2feef83564cdf5df1f4357ed491761d84cd62412a3c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 321
        ob_start();
        // line 322
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 323
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 324
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 325
            echo "    ";
        }
        // line 326
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 327
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 329
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 332
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 333
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 335
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6abb10149f04842063b2feef83564cdf5df1f4357ed491761d84cd62412a3c14->leave($__internal_6abb10149f04842063b2feef83564cdf5df1f4357ed491761d84cd62412a3c14_prof);

    }

    // line 339
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_4b6fb4e7a30a17c5433b95b189114aa9b5d6019a0da1045135ac915bc8f299f4 = $this->env->getExtension("native_profiler");
        $__internal_4b6fb4e7a30a17c5433b95b189114aa9b5d6019a0da1045135ac915bc8f299f4->enter($__internal_4b6fb4e7a30a17c5433b95b189114aa9b5d6019a0da1045135ac915bc8f299f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 340
        echo "    ";
        ob_start();
        // line 341
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 342
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 345
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 347
        echo "
            ";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4b6fb4e7a30a17c5433b95b189114aa9b5d6019a0da1045135ac915bc8f299f4->leave($__internal_4b6fb4e7a30a17c5433b95b189114aa9b5d6019a0da1045135ac915bc8f299f4_prof);

    }

    // line 353
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_305db3572aed4f32e90618792d63189a628b66e4461823264f6c711a1dbbe022 = $this->env->getExtension("native_profiler");
        $__internal_305db3572aed4f32e90618792d63189a628b66e4461823264f6c711a1dbbe022->enter($__internal_305db3572aed4f32e90618792d63189a628b66e4461823264f6c711a1dbbe022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 354
        echo "    ";
        ob_start();
        // line 355
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 357
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 359
        $context["div_class"] = "";
        // line 360
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 361
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 362
            echo "            ";
        }
        // line 363
        echo "
            <div class=\"";
        // line 364
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 365
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 366
        echo "            </div>

            ";
        // line 368
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            // line 369
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 370
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 373
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_305db3572aed4f32e90618792d63189a628b66e4461823264f6c711a1dbbe022->leave($__internal_305db3572aed4f32e90618792d63189a628b66e4461823264f6c711a1dbbe022_prof);

    }

    // line 377
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_49881a43cc9a749265c7decfe0a599fe79f5a4f262d1817385ad31115a291101 = $this->env->getExtension("native_profiler");
        $__internal_49881a43cc9a749265c7decfe0a599fe79f5a4f262d1817385ad31115a291101->enter($__internal_49881a43cc9a749265c7decfe0a599fe79f5a4f262d1817385ad31115a291101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 378
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "SonataAdminBundle:Form:form_admin_fields.html.twig", 378)->display($context);
        
        $__internal_49881a43cc9a749265c7decfe0a599fe79f5a4f262d1817385ad31115a291101->leave($__internal_49881a43cc9a749265c7decfe0a599fe79f5a4f262d1817385ad31115a291101_prof);

    }

    // line 381
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_4abbe2467a56c91f49fc32bca410f66140ffd6566a6da2e6882555612a1a197b = $this->env->getExtension("native_profiler");
        $__internal_4abbe2467a56c91f49fc32bca410f66140ffd6566a6da2e6882555612a1a197b->enter($__internal_4abbe2467a56c91f49fc32bca410f66140ffd6566a6da2e6882555612a1a197b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 382
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 383
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
        // line 384
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 386
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 387
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo ";

            showMaskChoiceEl = jQuery('#";
        // line 389
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 398
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
        
        $__internal_4abbe2467a56c91f49fc32bca410f66140ffd6566a6da2e6882555612a1a197b->leave($__internal_4abbe2467a56c91f49fc32bca410f66140ffd6566a6da2e6882555612a1a197b_prof);

    }

    // line 421
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_4ea1ad25485c8e2d67f9f884d69bb14f664ac91de4ec3e14a78571d09fcbbfdc = $this->env->getExtension("native_profiler");
        $__internal_4ea1ad25485c8e2d67f9f884d69bb14f664ac91de4ec3e14a78571d09fcbbfdc->enter($__internal_4ea1ad25485c8e2d67f9f884d69bb14f664ac91de4ec3e14a78571d09fcbbfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 422
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 426
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "'), ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
        
        $__internal_4ea1ad25485c8e2d67f9f884d69bb14f664ac91de4ec3e14a78571d09fcbbfdc->leave($__internal_4ea1ad25485c8e2d67f9f884d69bb14f664ac91de4ec3e14a78571d09fcbbfdc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1250 => 426,  1238 => 422,  1232 => 421,  1203 => 398,  1190 => 389,  1185 => 387,  1181 => 386,  1177 => 384,  1175 => 383,  1170 => 382,  1164 => 381,  1156 => 378,  1150 => 377,  1141 => 373,  1135 => 370,  1132 => 369,  1130 => 368,  1126 => 366,  1123 => 365,  1111 => 364,  1108 => 363,  1105 => 362,  1102 => 361,  1099 => 360,  1097 => 359,  1092 => 357,  1080 => 355,  1077 => 354,  1071 => 353,  1060 => 348,  1057 => 347,  1040 => 345,  1023 => 344,  1018 => 342,  1013 => 341,  1010 => 340,  1004 => 339,  995 => 335,  991 => 333,  989 => 332,  984 => 331,  967 => 329,  950 => 328,  946 => 327,  941 => 326,  938 => 325,  935 => 324,  932 => 323,  929 => 322,  927 => 321,  921 => 320,  912 => 316,  907 => 313,  905 => 312,  900 => 311,  890 => 303,  888 => 302,  885 => 301,  883 => 300,  877 => 299,  868 => 295,  862 => 293,  860 => 292,  857 => 291,  851 => 288,  848 => 287,  846 => 286,  843 => 285,  840 => 284,  836 => 283,  833 => 282,  830 => 281,  827 => 280,  825 => 279,  822 => 278,  819 => 277,  816 => 276,  814 => 275,  809 => 273,  806 => 272,  803 => 271,  800 => 270,  797 => 269,  794 => 268,  791 => 267,  788 => 266,  785 => 265,  782 => 264,  779 => 263,  776 => 262,  774 => 261,  771 => 260,  768 => 259,  765 => 258,  763 => 257,  760 => 256,  758 => 255,  755 => 254,  752 => 253,  749 => 252,  747 => 251,  738 => 250,  732 => 249,  720 => 243,  716 => 242,  712 => 241,  708 => 240,  703 => 239,  700 => 238,  694 => 236,  691 => 235,  689 => 234,  683 => 233,  673 => 228,  667 => 225,  662 => 224,  659 => 223,  653 => 220,  648 => 219,  646 => 218,  641 => 216,  637 => 215,  632 => 214,  629 => 213,  626 => 212,  623 => 211,  620 => 210,  614 => 208,  611 => 207,  609 => 206,  603 => 205,  592 => 199,  590 => 198,  589 => 197,  588 => 196,  587 => 195,  582 => 194,  579 => 193,  576 => 192,  573 => 191,  570 => 190,  564 => 188,  561 => 187,  559 => 186,  553 => 185,  540 => 179,  537 => 178,  534 => 177,  528 => 175,  526 => 174,  521 => 173,  518 => 172,  515 => 171,  511 => 169,  508 => 167,  505 => 165,  503 => 164,  496 => 163,  494 => 162,  486 => 161,  480 => 159,  477 => 158,  474 => 157,  471 => 156,  468 => 155,  465 => 154,  463 => 153,  457 => 152,  448 => 148,  438 => 145,  435 => 144,  431 => 143,  429 => 142,  426 => 141,  422 => 140,  417 => 139,  414 => 138,  412 => 137,  406 => 136,  397 => 132,  393 => 130,  387 => 128,  384 => 126,  382 => 125,  366 => 124,  361 => 121,  358 => 119,  355 => 117,  353 => 116,  348 => 114,  332 => 113,  330 => 112,  327 => 111,  323 => 108,  320 => 105,  319 => 104,  318 => 103,  316 => 102,  314 => 101,  311 => 100,  308 => 99,  305 => 98,  302 => 97,  299 => 96,  296 => 95,  294 => 94,  291 => 93,  288 => 92,  285 => 91,  282 => 89,  280 => 88,  277 => 87,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  260 => 82,  248 => 75,  245 => 74,  242 => 73,  239 => 72,  233 => 71,  225 => 68,  221 => 66,  219 => 65,  216 => 64,  213 => 63,  211 => 62,  205 => 60,  203 => 59,  201 => 58,  198 => 57,  195 => 56,  192 => 54,  190 => 53,  184 => 52,  174 => 49,  171 => 48,  165 => 47,  155 => 44,  152 => 43,  149 => 42,  146 => 41,  143 => 40,  137 => 39,  130 => 36,  126 => 35,  120 => 34,  108 => 29,  106 => 28,  104 => 27,  98 => 26,  90 => 23,  86 => 22,  83 => 21,  74 => 19,  70 => 18,  67 => 17,  62 => 16,  60 => 15,  54 => 14,  11 => 12,);
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
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 %}*/
/*         {% if not form.parent %}<div class="alert alert-danger">{% endif %}*/
/*             <ul class="list-unstyled">*/
/*                 {% for error in errors %}*/
/*                     <li><i class="fa fa-exclamation-circle"></i> {{ error.message }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% if not form.parent %}</div>{% endif %}*/
/*     {% endif %}*/
/* {%- endblock form_errors %}*/
/* */
/* {% block sonata_help %}*/
/* {% spaceless %}*/
/* {% if sonata_help is defined and sonata_help %}*/
/*     <span class="help-block sonata-ba-field-widget-help">{{ sonata_help|raw }}</span>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block form_widget -%}*/
/*     {{ parent() }}*/
/*     {{ block('sonata_help') }}*/
/* {%- endblock form_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'file' %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock textarea_widget %}*/
/* */
/* {% block money_widget -%}*/
/*     {% if money_pattern == '{{ widget }}' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else %}*/
/*         {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}*/
/*         {% if money_pattern matches '/^{{ widget }}/' %}*/
/*             <div class="input-group">*/
/*                 {{- block('form_widget_simple') -}}*/
/*                 <span class="input-group-addon">{{ currencySymbol }}</span>*/
/*             </div>*/
/*         {% elseif money_pattern matches '/{{ widget }}$/' %}*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon">{{ currencySymbol }}</span>*/
/*                 {{- block('form_widget_simple') -}}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('text') %}*/
/*         <div class="input-group">*/
/*             {{ block('form_widget_simple') }}*/
/*             <span class="input-group-addon">%</span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock percent_widget %}*/
/* */
/* {# Labels #}*/
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}*/
/*         {% set label_class = 'col-sm-3' %}*/
/*     {% endif %}*/
/* */
/*     {% set label_class = label_class|default('') ~ ' control-label' %}*/
/* */
/*     {#{{ sonata_admin.admin.getConfigurationPool().getOption('form_type') }}#}*/
/*     {% if label is not same as(false) %}*/
/*         {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ label_class }) %}*/
/* */
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/* */
/*         {% if label is empty %}*/
/*             {%- if label_format is defined and label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {% endif %}*/
/* */
/*         {% if in_list_checkbox is defined and in_list_checkbox and widget is defined %}*/
/*             <label{% for attrname,attrvalue in attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*                 {{ widget|raw }}*/
/*                 <span>*/
/*                     {% if not sonata_admin.admin %}*/
/*                         {{- label|trans({}, translation_domain) -}}*/
/*                     {% else %}*/
/*                         {{- label|trans({}, sonata_admin.field_description.translationDomain) -}}*/
/*                     {% endif%}*/
/*                 </span>*/
/*             </label>*/
/*         {% else %}*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*                 {% if not sonata_admin.admin%}*/
/*                     {{- label|trans({}, translation_domain) -}}*/
/*                 {% else %}*/
/*                     {{ sonata_admin.admin.trans(label, {}, sonata_admin.field_description.translationDomain) }}*/
/*                 {% endif %}*/
/*             </label>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block choice_widget_expanded %}*/
/* {% spaceless %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}*/
/*     <ul {{ block('widget_container_attributes') }}>*/
/*     {% for child in form %}*/
/*         <li>*/
/*             {% set form_widget_content %}*/
/*                 {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*             {% endset %}*/
/*             {{ form_label(child, child.vars.label|default(null), { 'in_list_checkbox' : true, 'widget' : form_widget_content } ) }}*/
/*         </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block choice_widget_collapsed %}*/
/* {% spaceless %}*/
/*     {% if required and empty_value is none and not empty_value_in_choices and not multiple %}*/
/*         {% set required = false %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {% if (sortable is defined) and sortable and multiple %}*/
/*         {{ block('sonata_type_choice_multiple_sortable') }}*/
/*     {% else %}*/
/*         <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %} >*/
/*             {% if empty_value is not none %}*/
/*                 <option value=""{% if required and value is empty %} selected="selected"{% endif %}>*/
/*                     {% if not sonata_admin.admin %}*/
/*                         {{- empty_value|trans({}, translation_domain) -}}*/
/*                     {% else %}*/
/*                         {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}*/
/*                     {% endif%}*/
/*                 </option>*/
/*             {% endif %}*/
/*             {% if preferred_choices|length > 0 %}*/
/*                 {% set options = preferred_choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*                 {% if choices|length > 0 %}*/
/*                     <option disabled="disabled">{{ separator }}</option>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             {% set options = choices %}*/
/*             {{ block('choice_widget_options') }}*/
/*         </select>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block date_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% if row is not defined or row == true %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}*/
/*         {% endif %}*/
/*         {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ date_pattern|replace({*/
/*                 '{{ year }}':  '<div class="'~ input_wrapper_class ~ '">' ~ form_widget(form.year) ~ '</div>',*/
/*                 '{{ month }}': '<div class="'~ input_wrapper_class ~ '">' ~ form_widget(form.month) ~ '</div>',*/
/*                 '{{ day }}':   '<div class="'~ input_wrapper_class ~ '">' ~ form_widget(form.day) ~ '</div>',*/
/*             })|raw }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* {% block time_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% if row is not defined or row == true %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}*/
/*         {% endif %}*/
/*         {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             <div class="{{ input_wrapper_class }}">*/
/*                 {{ form_widget(form.hour) }}*/
/*             </div>*/
/*             {% if with_minutes %}*/
/*                 <div class="{{ input_wrapper_class }}">*/
/*                     {{ form_widget(form.minute) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if with_seconds %}*/
/*                 <div class="{{ input_wrapper_class }}">*/
/*                     {{ form_widget(form.second) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock time_widget %}*/
/* */
/* {% block datetime_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_errors(form.date) }}*/
/*             {{ form_errors(form.time) }}*/
/*             {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}*/
/*             {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock datetime_widget %}*/
/* */
/* {% block form_row %}*/
/*     <div class="form-group{% if errors|length > 0 %} has-error{% endif %}" id="sonata-ba-field-container-{{ id }}">*/
/*         {% if sonata_admin.field_description.options is defined %}*/
/*             {% set label = sonata_admin.field_description.options.name|default(label)  %}*/
/*         {% endif %}*/
/* */
/*         {% set div_class = 'sonata-ba-field' %}*/
/* */
/*         {% if label is same as(false) %}*/
/*             {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}*/
/*         {% endif %}*/
/* */
/*         {% if sonata_admin.options['form_type'] == 'horizontal' %}*/
/*             {% if label is same as(false) %}*/
/*                 {% if 'collection' in form.parent.vars.block_prefixes %}*/
/*                     {% set div_class = div_class ~ ' col-sm-12' %}*/
/*                 {% else %}*/
/*                     {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 {% set div_class = div_class ~ ' col-sm-9' %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {{ form_label(form, label|default(null)) }}*/
/* */
/*         {% if sonata_admin is defined and sonata_admin_enabled %}*/
/*             {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}*/
/*         {% endif %}*/
/* */
/*         {% if errors|length > 0 %}*/
/*             {% set div_class = div_class ~ ' sonata-ba-field-error' %}*/
/*         {% endif %}*/
/* */
/*         <div class="{{ div_class }}">*/
/*             {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/* */
/*             {% if errors|length > 0 %}*/
/*                 <div class="help-block sonata-ba-field-error-messages">*/
/*                     {{ form_errors(form) }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if sonata_admin is defined and sonata_admin_enabled and sonata_admin.field_description.help|default(false) %}*/
/*                 <span class="help-block sonata-ba-field-help">{{ sonata_admin.admin.trans(sonata_admin.field_description.help, {}, sonata_admin.field_description.translationDomain)|raw }}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock form_row %}*/
/* */
/* {% block sonata_type_native_collection_widget_row %}*/
/* {% spaceless %}*/
/*     <div class="sonata-collection-row">*/
/*         {% if allow_delete %}*/
/*             <div class="row">*/
/*                 <div class="col-xs-1">*/
/*                     <a href="#" class="btn btn-link sonata-collection-delete">*/
/*                         <i class="fa fa-minus-circle"></i>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-xs-11">*/
/*         {% endif %}*/
/*             {{ form_row(child, { label: false }) }}*/
/*         {% if allow_delete %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock sonata_type_native_collection_widget_row %}*/
/* */
/* {% block sonata_type_native_collection_widget %}*/
/* {% spaceless %}*/
/*     {% if prototype is defined %}*/
/*         {% set child = prototype %}*/
/*         {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}*/
/*     {% endif %}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {{ form_errors(form) }}*/
/*         {% for child in form %}*/
/*             {{ block('sonata_type_native_collection_widget_row') }}*/
/*         {% endfor %}*/
/*         {{ form_rest(form) }}*/
/*         {% if allow_add %}*/
/*             <div><a href="#" class="btn btn-link sonata-collection-add"><i class="fa fa-plus-circle"></i></a></div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock sonata_type_native_collection_widget %}*/
/* */
/* {% block sonata_type_immutable_array_widget %}*/
/*     {% spaceless %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_errors(form) }}*/
/* */
/*             {% for key, child in form %}*/
/*                 {{ block('sonata_type_immutable_array_widget_row') }}*/
/*             {% endfor %}*/
/* */
/*             {{ form_rest(form) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_immutable_array_widget %}*/
/* */
/* {% block sonata_type_immutable_array_widget_row %}*/
/*     {% spaceless %}*/
/*         <div class="form-group{% if child.vars.errors|length > 0%} error{%endif%}" id="sonata-ba-field-container-{{ id }}-{{ key }}">*/
/* */
/*             {{ form_label(child) }}*/
/* */
/*             {% set div_class = "" %}*/
/*             {% if sonata_admin.options['form_type'] == 'horizontal' %}*/
/*                 {% set div_class = 'col-sm-9' %}*/
/*             {% endif%}*/
/* */
/*             <div class="{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if child.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*                 {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*             </div>*/
/* */
/*             {% if child.vars.errors|length > 0 %}*/
/*                 <div class="help-block sonata-ba-field-error-messages">*/
/*                     {{ form_errors(child) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_autocomplete_widget %}*/
/*     {% include template %}*/
/* {% endblock sonata_type_model_autocomplete_widget %}*/
/* */
/* {% block sonata_type_choice_field_mask_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% set main_form_name = id|slice(0, id|length - name|length) %}*/
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             var allFields = {{ all_fields|json_encode|raw }};*/
/*             var map = {{ map|json_encode|raw }};*/
/* */
/*             showMaskChoiceEl = jQuery('#{{ main_form_name }}{{ name }}');*/
/* */
/*             showMaskChoiceEl.on('change', function () {*/
/*                 choice_field_mask_show(jQuery(this).val());*/
/*             });*/
/* */
/*             function choice_field_mask_show(val)*/
/*             {*/
/*                 var controlGroupIdFunc = function (field) {*/
/*                     return '#sonata-ba-field-container-{{ main_form_name }}' + field;*/
/* */
/*                 };*/
/*                 if (map[val] == undefined) {*/
/*                     jQuery.each(allFields, function (i, field) {*/
/*                         jQuery(controlGroupIdFunc(field)).hide();*/
/*                     });*/
/*                     return;*/
/*                 }*/
/* */
/*                 jQuery.each(allFields, function (i, field) {*/
/*                     jQuery(controlGroupIdFunc(field)).hide();*/
/*                 });*/
/*                 jQuery.each(map[val], function (i, field) {*/
/*                     jQuery(controlGroupIdFunc(field)).show();*/
/*                 });*/
/*             }*/
/*             choice_field_mask_show(showMaskChoiceEl.val());*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
/* {%  block sonata_type_choice_multiple_sortable %}*/
/*     <input type="hidden" name="{{ full_name }}" id="{{ id }}" value="{{ value|join(',') }}" />*/
/* */
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }});*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
