<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_ddb40cfab99ec6367992b076566ec317e2e15dff2fae3dcc340ca1942e0e5cea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dc9d6164a97ce5ce9fcce181408459f3251d935ab590fdf2abb7701fe422cbd = $this->env->getExtension("native_profiler");
        $__internal_8dc9d6164a97ce5ce9fcce181408459f3251d935ab590fdf2abb7701fe422cbd->enter($__internal_8dc9d6164a97ce5ce9fcce181408459f3251d935ab590fdf2abb7701fe422cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
        <title>
        ";
        // line 85
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 105
        echo "        </title>
    </head>
    <body ";
        // line 107
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 111
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 196
        echo "
        ";
        // line 197
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 335
        echo "    </div>

    ";
        // line 337
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_bootlint"), "method"))) {
            // line 338
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 344
            echo "    ";
        }
        // line 345
        echo "
    </body>
</html>
";
        
        $__internal_8dc9d6164a97ce5ce9fcce181408459f3251d935ab590fdf2abb7701fe422cbd->leave($__internal_8dc9d6164a97ce5ce9fcce181408459f3251d935ab590fdf2abb7701fe422cbd_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_9455d9fab9c5bc674375c875aed950d6cd75c7efa15f076ef5591e6b01cd3718 = $this->env->getExtension("native_profiler");
        $__internal_9455d9fab9c5bc674375c875aed950d6cd75c7efa15f076ef5591e6b01cd3718->enter($__internal_9455d9fab9c5bc674375c875aed950d6cd75c7efa15f076ef5591e6b01cd3718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_9455d9fab9c5bc674375c875aed950d6cd75c7efa15f076ef5591e6b01cd3718->leave($__internal_9455d9fab9c5bc674375c875aed950d6cd75c7efa15f076ef5591e6b01cd3718_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_08b9ef4506ba78994b3e59df4fa2d6d7faf2b41efa9b262cab20f86a1fe27b74 = $this->env->getExtension("native_profiler");
        $__internal_08b9ef4506ba78994b3e59df4fa2d6d7faf2b41efa9b262cab20f86a1fe27b74->enter($__internal_08b9ef4506ba78994b3e59df4fa2d6d7faf2b41efa9b262cab20f86a1fe27b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_08b9ef4506ba78994b3e59df4fa2d6d7faf2b41efa9b262cab20f86a1fe27b74->leave($__internal_08b9ef4506ba78994b3e59df4fa2d6d7faf2b41efa9b262cab20f86a1fe27b74_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8d09b62d7eb7d88ff5cf5557a9cabee506778d9a681ca59d22bb979bb6baff7 = $this->env->getExtension("native_profiler");
        $__internal_f8d09b62d7eb7d88ff5cf5557a9cabee506778d9a681ca59d22bb979bb6baff7->enter($__internal_f8d09b62d7eb7d88ff5cf5557a9cabee506778d9a681ca59d22bb979bb6baff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        if (array_key_exists("admin_pool", $context)) {
            // line 35
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
                // line 36
                echo "                        <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            ";
        }
        // line 39
        echo "        ";
        
        $__internal_f8d09b62d7eb7d88ff5cf5557a9cabee506778d9a681ca59d22bb979bb6baff7->leave($__internal_f8d09b62d7eb7d88ff5cf5557a9cabee506778d9a681ca59d22bb979bb6baff7_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47eb57b94b03e1e967fad34c91d86a8eb1270deea4f43954bbb13e59dda7d062 = $this->env->getExtension("native_profiler");
        $__internal_47eb57b94b03e1e967fad34c91d86a8eb1270deea4f43954bbb13e59dda7d062->enter($__internal_47eb57b94b03e1e967fad34c91d86a8eb1270deea4f43954bbb13e59dda7d062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 44
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 45
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 46
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_STICKYFORMS: ";
        // line 47
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_stickyforms"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                };

                // http://getbootstrap.com/getting-started/#support-ie10-width
                if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                    var msViewportStyle = document.createElement('style');
                    msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                    document.querySelector('head').appendChild(msViewportStyle);
                }
            </script>

            ";
        // line 61
        if (array_key_exists("admin_pool", $context)) {
            // line 62
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
                // line 63
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
                echo "\"></script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            ";
        }
        // line 66
        echo "
            ";
        // line 67
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 70
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 72
        echo "
            ";
        // line 74
        echo "            ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 75
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "        ";
        
        $__internal_47eb57b94b03e1e967fad34c91d86a8eb1270deea4f43954bbb13e59dda7d062->leave($__internal_47eb57b94b03e1e967fad34c91d86a8eb1270deea4f43954bbb13e59dda7d062_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_1caacf708d66672f4e9af8882cd4553d7e22cef654ccac113ef09784a54e00f2 = $this->env->getExtension("native_profiler");
        $__internal_1caacf708d66672f4e9af8882cd4553d7e22cef654ccac113ef09784a54e00f2->enter($__internal_1caacf708d66672f4e9af8882cd4553d7e22cef654ccac113ef09784a54e00f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 89
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 91
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 92
                echo "                    -
                    ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 94
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 95
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 96
                            echo "                                &gt;
                            ";
                        }
                        // line 98
                        echo "
                            ";
                        // line 99
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 101
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                ";
            }
            // line 103
            echo "            ";
        }
        // line 104
        echo "        ";
        
        $__internal_1caacf708d66672f4e9af8882cd4553d7e22cef654ccac113ef09784a54e00f2->leave($__internal_1caacf708d66672f4e9af8882cd4553d7e22cef654ccac113ef09784a54e00f2_prof);

    }

    // line 107
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_a5ec686688043a85f0a9577b74c2a0fb0e8828150c0f8a6d82d1529802628e8f = $this->env->getExtension("native_profiler");
        $__internal_a5ec686688043a85f0a9577b74c2a0fb0e8828150c0f8a6d82d1529802628e8f->enter($__internal_a5ec686688043a85f0a9577b74c2a0fb0e8828150c0f8a6d82d1529802628e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_a5ec686688043a85f0a9577b74c2a0fb0e8828150c0f8a6d82d1529802628e8f->leave($__internal_a5ec686688043a85f0a9577b74c2a0fb0e8828150c0f8a6d82d1529802628e8f_prof);

    }

    // line 111
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_7b1b62896d07619e600616e81ea2e3d84a61698e962ea19db29a6add41a3bada = $this->env->getExtension("native_profiler");
        $__internal_7b1b62896d07619e600616e81ea2e3d84a61698e962ea19db29a6add41a3bada->enter($__internal_7b1b62896d07619e600616e81ea2e3d84a61698e962ea19db29a6add41a3bada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 112
        echo "            <header class=\"main-header\">
                ";
        // line 113
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 120
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 134
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 194
        echo "            </header>
        ";
        
        $__internal_7b1b62896d07619e600616e81ea2e3d84a61698e962ea19db29a6add41a3bada->leave($__internal_7b1b62896d07619e600616e81ea2e3d84a61698e962ea19db29a6add41a3bada_prof);

    }

    // line 113
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_2cbdbd7f4aa94b8a03fef27a755b5c4fff33725b3addd9def40ee278c0701aec = $this->env->getExtension("native_profiler");
        $__internal_2cbdbd7f4aa94b8a03fef27a755b5c4fff33725b3addd9def40ee278c0701aec->enter($__internal_2cbdbd7f4aa94b8a03fef27a755b5c4fff33725b3addd9def40ee278c0701aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 114
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_2cbdbd7f4aa94b8a03fef27a755b5c4fff33725b3addd9def40ee278c0701aec->leave($__internal_2cbdbd7f4aa94b8a03fef27a755b5c4fff33725b3addd9def40ee278c0701aec_prof);

    }

    // line 120
    public function block_logo($context, array $blocks = array())
    {
        $__internal_1964e15eebd14c5c3119197e9d3153d1d0e0ca67b5a3f5414db143d6b69cf166 = $this->env->getExtension("native_profiler");
        $__internal_1964e15eebd14c5c3119197e9d3153d1d0e0ca67b5a3f5414db143d6b69cf166->enter($__internal_1964e15eebd14c5c3119197e9d3153d1d0e0ca67b5a3f5414db143d6b69cf166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 121
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 122
            echo "                        ";
            ob_start();
            // line 123
            echo "                            <a class=\"logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
            echo "\">
                                ";
            // line 124
            if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
                // line 125
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
                echo "\">
                                ";
            }
            // line 127
            echo "                                ";
            if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
                // line 128
                echo "                                    <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
                echo "</span>
                                ";
            }
            // line 130
            echo "                            </a>
                        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 132
            echo "                    ";
        }
        // line 133
        echo "                ";
        
        $__internal_1964e15eebd14c5c3119197e9d3153d1d0e0ca67b5a3f5414db143d6b69cf166->leave($__internal_1964e15eebd14c5c3119197e9d3153d1d0e0ca67b5a3f5414db143d6b69cf166_prof);

    }

    // line 134
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_2f475c0a87fed52327b25c6840ab91683e40fe2d86dc73952248531780ad12e0 = $this->env->getExtension("native_profiler");
        $__internal_2f475c0a87fed52327b25c6840ab91683e40fe2d86dc73952248531780ad12e0->enter($__internal_2f475c0a87fed52327b25c6840ab91683e40fe2d86dc73952248531780ad12e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 135
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 136
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 142
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 169
            echo "                            </div>

                            ";
            // line 171
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 191
            echo "                        </nav>
                    ";
        }
        // line 193
        echo "                ";
        
        $__internal_2f475c0a87fed52327b25c6840ab91683e40fe2d86dc73952248531780ad12e0->leave($__internal_2f475c0a87fed52327b25c6840ab91683e40fe2d86dc73952248531780ad12e0_prof);

    }

    // line 142
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_d56d8495e7988f4914e3e0ff815738d1f45b809f5dba953d2a43d51da80b7cfb = $this->env->getExtension("native_profiler");
        $__internal_d56d8495e7988f4914e3e0ff815738d1f45b809f5dba953d2a43d51da80b7cfb->enter($__internal_d56d8495e7988f4914e3e0ff815738d1f45b809f5dba953d2a43d51da80b7cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 143
        echo "                                    <div class=\"hidden-xs\">
                                        ";
        // line 144
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 145
            echo "                                            <ol class=\"nav navbar-top-links breadcrumb\">
                                                ";
            // line 146
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 147
                echo "                                                    ";
                if (array_key_exists("action", $context)) {
                    // line 148
                    echo "                                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 149
                        echo "                                                            ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 150
                            echo "                                                                <li>
                                                                    ";
                            // line 151
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 152
                                echo "                                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                    ";
                            } else {
                                // line 154
                                echo "                                                                        ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                    ";
                            }
                            // line 156
                            echo "                                                                </li>
                                                            ";
                        } else {
                            // line 158
                            echo "                                                                <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                            ";
                        }
                        // line 160
                        echo "                                                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "                                                    ";
                }
                // line 162
                echo "                                                ";
            } else {
                // line 163
                echo "                                                    ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                                ";
            }
            // line 165
            echo "                                            </ol>
                                        ";
        }
        // line 167
        echo "                                    </div>
                                ";
        
        $__internal_d56d8495e7988f4914e3e0ff815738d1f45b809f5dba953d2a43d51da80b7cfb->leave($__internal_d56d8495e7988f4914e3e0ff815738d1f45b809f5dba953d2a43d51da80b7cfb_prof);

    }

    // line 171
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_a1ce5d8f7a040d668421b5fec36111269439ea0d58f7d8fdfbc3d47983b873c2 = $this->env->getExtension("native_profiler");
        $__internal_a1ce5d8f7a040d668421b5fec36111269439ea0d58f7d8fdfbc3d47983b873c2->enter($__internal_a1ce5d8f7a040d668421b5fec36111269439ea0d58f7d8fdfbc3d47983b873c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 172
        echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 178
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 178)->display($context);
        // line 179
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 185
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 185)->display($context);
        // line 186
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
        
        $__internal_a1ce5d8f7a040d668421b5fec36111269439ea0d58f7d8fdfbc3d47983b873c2->leave($__internal_a1ce5d8f7a040d668421b5fec36111269439ea0d58f7d8fdfbc3d47983b873c2_prof);

    }

    // line 197
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_258ef520f325a47469ac5b2a5d9b5adab699c13d7415c05ac7e8c64437bf0b60 = $this->env->getExtension("native_profiler");
        $__internal_258ef520f325a47469ac5b2a5d9b5adab699c13d7415c05ac7e8c64437bf0b60->enter($__internal_258ef520f325a47469ac5b2a5d9b5adab699c13d7415c05ac7e8c64437bf0b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 198
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 234
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 236
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 333
        echo "            </div>
        ";
        
        $__internal_258ef520f325a47469ac5b2a5d9b5adab699c13d7415c05ac7e8c64437bf0b60->leave($__internal_258ef520f325a47469ac5b2a5d9b5adab699c13d7415c05ac7e8c64437bf0b60_prof);

    }

    // line 198
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_adb00eb6abe224e442fc9362ba1e2705a18d80d3e18b71cfd476368407e000a1 = $this->env->getExtension("native_profiler");
        $__internal_adb00eb6abe224e442fc9362ba1e2705a18d80d3e18b71cfd476368407e000a1->enter($__internal_adb00eb6abe224e442fc9362ba1e2705a18d80d3e18b71cfd476368407e000a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 199
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 201
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 231
        echo "                    </section>
                </aside>
            ";
        
        $__internal_adb00eb6abe224e442fc9362ba1e2705a18d80d3e18b71cfd476368407e000a1->leave($__internal_adb00eb6abe224e442fc9362ba1e2705a18d80d3e18b71cfd476368407e000a1_prof);

    }

    // line 201
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_5d0301eb12b20c71cf8cb107351764af4d767b849bf6128bd3c60ba451c06e1a = $this->env->getExtension("native_profiler");
        $__internal_5d0301eb12b20c71cf8cb107351764af4d767b849bf6128bd3c60ba451c06e1a->enter($__internal_5d0301eb12b20c71cf8cb107351764af4d767b849bf6128bd3c60ba451c06e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 202
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 216
        echo "
                            ";
        // line 217
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 218
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 223
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 230
        echo "                        ";
        
        $__internal_5d0301eb12b20c71cf8cb107351764af4d767b849bf6128bd3c60ba451c06e1a->leave($__internal_5d0301eb12b20c71cf8cb107351764af4d767b849bf6128bd3c60ba451c06e1a_prof);

    }

    // line 202
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_f8b6a89364da72a43a94206ffb90bbaa8d1014ebda9ca1462efa0bd241f9ce4f = $this->env->getExtension("native_profiler");
        $__internal_f8b6a89364da72a43a94206ffb90bbaa8d1014ebda9ca1462efa0bd241f9ce4f->enter($__internal_f8b6a89364da72a43a94206ffb90bbaa8d1014ebda9ca1462efa0bd241f9ce4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 203
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 204
            echo "                                    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-flat\" type=\"submit\">
                                                        <i class=\"fa fa-search\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 215
        echo "                            ";
        
        $__internal_f8b6a89364da72a43a94206ffb90bbaa8d1014ebda9ca1462efa0bd241f9ce4f->leave($__internal_f8b6a89364da72a43a94206ffb90bbaa8d1014ebda9ca1462efa0bd241f9ce4f_prof);

    }

    // line 217
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_4dedb1259c51c6473643f60b5567bbf2356257c3ad6b4642de1991edb4fbb10b = $this->env->getExtension("native_profiler");
        $__internal_4dedb1259c51c6473643f60b5567bbf2356257c3ad6b4642de1991edb4fbb10b->enter($__internal_4dedb1259c51c6473643f60b5567bbf2356257c3ad6b4642de1991edb4fbb10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_4dedb1259c51c6473643f60b5567bbf2356257c3ad6b4642de1991edb4fbb10b->leave($__internal_4dedb1259c51c6473643f60b5567bbf2356257c3ad6b4642de1991edb4fbb10b_prof);

    }

    // line 218
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_2bbd6dc7085fefaec45d5c35fb90c306af361b13c8b2a30016c15a7b9665b90f = $this->env->getExtension("native_profiler");
        $__internal_2bbd6dc7085fefaec45d5c35fb90c306af361b13c8b2a30016c15a7b9665b90f->enter($__internal_2bbd6dc7085fefaec45d5c35fb90c306af361b13c8b2a30016c15a7b9665b90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 219
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 220
            echo "                                    ";
            echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "knp_menu_template"), "method")));
            echo "
                                ";
        }
        // line 222
        echo "                            ";
        
        $__internal_2bbd6dc7085fefaec45d5c35fb90c306af361b13c8b2a30016c15a7b9665b90f->leave($__internal_2bbd6dc7085fefaec45d5c35fb90c306af361b13c8b2a30016c15a7b9665b90f_prof);

    }

    // line 223
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_57c5ca3758b3065a0cbf42347fefb09eb8e547bf9bfef09a12891a5f8428a387 = $this->env->getExtension("native_profiler");
        $__internal_57c5ca3758b3065a0cbf42347fefb09eb8e547bf9bfef09a12891a5f8428a387->enter($__internal_57c5ca3758b3065a0cbf42347fefb09eb8e547bf9bfef09a12891a5f8428a387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 224
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 225
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 228
        echo "                                </p>
                            ";
        
        $__internal_57c5ca3758b3065a0cbf42347fefb09eb8e547bf9bfef09a12891a5f8428a387->leave($__internal_57c5ca3758b3065a0cbf42347fefb09eb8e547bf9bfef09a12891a5f8428a387_prof);

    }

    // line 225
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_179144fcea108a4fb26fcaac169fa6d920a5db184c1e1ed20f1e0bbde8b84837 = $this->env->getExtension("native_profiler");
        $__internal_179144fcea108a4fb26fcaac169fa6d920a5db184c1e1ed20f1e0bbde8b84837->enter($__internal_179144fcea108a4fb26fcaac169fa6d920a5db184c1e1ed20f1e0bbde8b84837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 226
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_179144fcea108a4fb26fcaac169fa6d920a5db184c1e1ed20f1e0bbde8b84837->leave($__internal_179144fcea108a4fb26fcaac169fa6d920a5db184c1e1ed20f1e0bbde8b84837_prof);

    }

    // line 236
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_38ba3058a12448561d369b297da5177c6e7ea12905d72693ea92303568c14dcd = $this->env->getExtension("native_profiler");
        $__internal_38ba3058a12448561d369b297da5177c6e7ea12905d72693ea92303568c14dcd->enter($__internal_38ba3058a12448561d369b297da5177c6e7ea12905d72693ea92303568c14dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 237
        echo "                    <section class=\"content-header\">

                        ";
        // line 239
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 293
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 296
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 331
        echo "                    </section>
                ";
        
        $__internal_38ba3058a12448561d369b297da5177c6e7ea12905d72693ea92303568c14dcd->leave($__internal_38ba3058a12448561d369b297da5177c6e7ea12905d72693ea92303568c14dcd_prof);

    }

    // line 239
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_13dc3798c99a72319fd89ea6e3f7a0dd0ff5a02b34682aecd191902d33197322 = $this->env->getExtension("native_profiler");
        $__internal_13dc3798c99a72319fd89ea6e3f7a0dd0ff5a02b34682aecd191902d33197322->enter($__internal_13dc3798c99a72319fd89ea6e3f7a0dd0ff5a02b34682aecd191902d33197322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 240
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 292
        echo "                        ";
        
        $__internal_13dc3798c99a72319fd89ea6e3f7a0dd0ff5a02b34682aecd191902d33197322->leave($__internal_13dc3798c99a72319fd89ea6e3f7a0dd0ff5a02b34682aecd191902d33197322_prof);

    }

    // line 240
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_265e5fd056c97f1408dae2046242040dbacc014d1fb52fac5f5172a9915d0e68 = $this->env->getExtension("native_profiler");
        $__internal_265e5fd056c97f1408dae2046242040dbacc014d1fb52fac5f5172a9915d0e68->enter($__internal_265e5fd056c97f1408dae2046242040dbacc014d1fb52fac5f5172a9915d0e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 241
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 242
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 244
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 251
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 254
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 255
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 257
            echo "                                                </div>

                                                ";
            // line 259
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 260
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 261
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 262
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 264
                echo "                                                    </div>
                                                ";
            }
            // line 266
            echo "                                                
                                                ";
            // line 267
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 283
            echo "
                                                ";
            // line 284
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 285
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 287
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 291
        echo "                            ";
        
        $__internal_265e5fd056c97f1408dae2046242040dbacc014d1fb52fac5f5172a9915d0e68->leave($__internal_265e5fd056c97f1408dae2046242040dbacc014d1fb52fac5f5172a9915d0e68_prof);

    }

    // line 244
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_f068c4137eb4a513978963855da8950d8deb9b5e4491d4e99f639ae8d54e405b = $this->env->getExtension("native_profiler");
        $__internal_f068c4137eb4a513978963855da8950d8deb9b5e4491d4e99f639ae8d54e405b->enter($__internal_f068c4137eb4a513978963855da8950d8deb9b5e4491d4e99f639ae8d54e405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 245
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 246
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 247
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 250
        echo "                                            ";
        
        $__internal_f068c4137eb4a513978963855da8950d8deb9b5e4491d4e99f639ae8d54e405b->leave($__internal_f068c4137eb4a513978963855da8950d8deb9b5e4491d4e99f639ae8d54e405b_prof);

    }

    // line 267
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_1649012d59f36098405b1bc4aaf62d256ea35e3a4d475caeeae700fbf152d8c5 = $this->env->getExtension("native_profiler");
        $__internal_1649012d59f36098405b1bc4aaf62d256ea35e3a4d475caeeae700fbf152d8c5->enter($__internal_1649012d59f36098405b1bc4aaf62d256ea35e3a4d475caeeae700fbf152d8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 268
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 269
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 270
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 271
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 272
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 274
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 278
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 280
            echo "                                                        </ul>
                                                    ";
        }
        // line 282
        echo "                                                ";
        
        $__internal_1649012d59f36098405b1bc4aaf62d256ea35e3a4d475caeeae700fbf152d8c5->leave($__internal_1649012d59f36098405b1bc4aaf62d256ea35e3a4d475caeeae700fbf152d8c5_prof);

    }

    // line 296
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_37b6cf32252b7617798c9ffd23d53d01b2c56d5c972deddce40f1e3ae246c54c = $this->env->getExtension("native_profiler");
        $__internal_37b6cf32252b7617798c9ffd23d53d01b2c56d5c972deddce40f1e3ae246c54c->enter($__internal_37b6cf32252b7617798c9ffd23d53d01b2c56d5c972deddce40f1e3ae246c54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 297
        echo "
                            ";
        // line 298
        $this->displayBlock('notice', $context, $blocks);
        // line 301
        echo "
                            ";
        // line 302
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 303
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 305
        echo "
                            ";
        // line 306
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 307
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 309
        echo "
                            ";
        // line 310
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 311
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 313
        echo "
                            ";
        // line 314
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 315
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 317
        echo "
                            ";
        // line 318
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 319
            echo "                                ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 320
                echo "                                    <div class=\"row\">
                                        ";
                // line 321
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 324
            echo "
                                <div class=\"row\">
                                    ";
            // line 326
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 330
        echo "                        ";
        
        $__internal_37b6cf32252b7617798c9ffd23d53d01b2c56d5c972deddce40f1e3ae246c54c->leave($__internal_37b6cf32252b7617798c9ffd23d53d01b2c56d5c972deddce40f1e3ae246c54c_prof);

    }

    // line 298
    public function block_notice($context, array $blocks = array())
    {
        $__internal_3336682ddb8643634d27f6bb2b58fe2280895dc0d396d6caa9625545800740cf = $this->env->getExtension("native_profiler");
        $__internal_3336682ddb8643634d27f6bb2b58fe2280895dc0d396d6caa9625545800740cf->enter($__internal_3336682ddb8643634d27f6bb2b58fe2280895dc0d396d6caa9625545800740cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 299
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 299)->display($context);
        // line 300
        echo "                            ";
        
        $__internal_3336682ddb8643634d27f6bb2b58fe2280895dc0d396d6caa9625545800740cf->leave($__internal_3336682ddb8643634d27f6bb2b58fe2280895dc0d396d6caa9625545800740cf_prof);

    }

    // line 338
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_b688b1adb1fadae968549d25703e7633df54e48a551c44f2d6b7b0a2fc35d8b1 = $this->env->getExtension("native_profiler");
        $__internal_b688b1adb1fadae968549d25703e7633df54e48a551c44f2d6b7b0a2fc35d8b1->enter($__internal_b688b1adb1fadae968549d25703e7633df54e48a551c44f2d6b7b0a2fc35d8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 339
        echo "            ";
        // line 340
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_b688b1adb1fadae968549d25703e7633df54e48a551c44f2d6b7b0a2fc35d8b1->leave($__internal_b688b1adb1fadae968549d25703e7633df54e48a551c44f2d6b7b0a2fc35d8b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1195 => 340,  1193 => 339,  1187 => 338,  1180 => 300,  1177 => 299,  1171 => 298,  1164 => 330,  1157 => 326,  1153 => 324,  1147 => 321,  1144 => 320,  1141 => 319,  1139 => 318,  1136 => 317,  1130 => 315,  1128 => 314,  1125 => 313,  1119 => 311,  1117 => 310,  1114 => 309,  1108 => 307,  1106 => 306,  1103 => 305,  1097 => 303,  1095 => 302,  1092 => 301,  1090 => 298,  1087 => 297,  1081 => 296,  1074 => 282,  1070 => 280,  1064 => 278,  1057 => 274,  1052 => 272,  1049 => 271,  1047 => 270,  1044 => 269,  1041 => 268,  1035 => 267,  1028 => 250,  1022 => 247,  1019 => 246,  1016 => 245,  1010 => 244,  1003 => 291,  997 => 287,  991 => 285,  989 => 284,  986 => 283,  984 => 267,  981 => 266,  977 => 264,  962 => 262,  958 => 261,  955 => 260,  953 => 259,  949 => 257,  943 => 255,  941 => 254,  936 => 251,  934 => 244,  930 => 242,  927 => 241,  921 => 240,  914 => 292,  911 => 240,  905 => 239,  897 => 331,  895 => 296,  890 => 293,  888 => 239,  884 => 237,  878 => 236,  870 => 226,  864 => 225,  856 => 228,  854 => 225,  851 => 224,  845 => 223,  838 => 222,  832 => 220,  829 => 219,  823 => 218,  811 => 217,  804 => 215,  790 => 206,  784 => 204,  781 => 203,  775 => 202,  768 => 230,  765 => 223,  762 => 218,  760 => 217,  757 => 216,  754 => 202,  748 => 201,  739 => 231,  737 => 201,  733 => 199,  727 => 198,  719 => 333,  717 => 236,  713 => 234,  710 => 198,  704 => 197,  693 => 186,  691 => 185,  683 => 179,  681 => 178,  673 => 172,  667 => 171,  659 => 167,  655 => 165,  649 => 163,  646 => 162,  643 => 161,  629 => 160,  623 => 158,  619 => 156,  613 => 154,  605 => 152,  603 => 151,  600 => 150,  597 => 149,  579 => 148,  576 => 147,  574 => 146,  571 => 145,  569 => 144,  566 => 143,  560 => 142,  553 => 193,  549 => 191,  547 => 171,  543 => 169,  541 => 142,  533 => 136,  530 => 135,  524 => 134,  517 => 133,  514 => 132,  510 => 130,  504 => 128,  501 => 127,  493 => 125,  491 => 124,  486 => 123,  483 => 122,  480 => 121,  474 => 120,  463 => 116,  459 => 114,  453 => 113,  445 => 194,  442 => 134,  439 => 120,  437 => 113,  434 => 112,  428 => 111,  416 => 107,  409 => 104,  406 => 103,  403 => 102,  389 => 101,  384 => 99,  381 => 98,  377 => 96,  374 => 95,  371 => 94,  354 => 93,  351 => 92,  348 => 91,  342 => 89,  340 => 88,  334 => 86,  328 => 85,  321 => 82,  318 => 81,  312 => 79,  309 => 78,  306 => 76,  301 => 75,  298 => 74,  295 => 72,  289 => 70,  286 => 69,  284 => 68,  282 => 67,  279 => 66,  276 => 65,  267 => 63,  262 => 62,  260 => 61,  246 => 50,  242 => 48,  236 => 47,  228 => 46,  220 => 45,  212 => 44,  208 => 42,  202 => 41,  195 => 39,  192 => 38,  183 => 36,  178 => 35,  175 => 34,  169 => 33,  159 => 28,  153 => 27,  141 => 25,  131 => 345,  128 => 344,  125 => 338,  123 => 337,  119 => 335,  117 => 197,  114 => 196,  112 => 111,  105 => 107,  101 => 105,  99 => 85,  95 => 83,  93 => 41,  90 => 40,  88 => 33,  85 => 32,  83 => 27,  78 => 25,  74 => 23,  72 => 22,  70 => 21,  68 => 20,  66 => 19,  64 => 18,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,);
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
/* {% set _preview              = block('preview') %}*/
/* {% set _form                 = block('form') %}*/
/* {% set _show                 = block('show') %}*/
/* {% set _list_table           = block('list_table') %}*/
/* {% set _list_filters         = block('list_filters') %}*/
/* {% set _tab_menu             = block('tab_menu') %}*/
/* {% set _content              = block('content') %}*/
/* {% set _title                = block('title') %}*/
/* {% set _breadcrumb           = block('breadcrumb') %}*/
/* {% set _actions              = block('actions') %}*/
/* {% set _navbar_title         = block('navbar_title') %}*/
/* {% set _list_filters_actions = block('list_filters_actions') %}*/
/* */
/* <!DOCTYPE html>*/
/* <html {% block html_attributes %}class="no-js"{% endblock %}>*/
/*     <head>*/
/*         {% block meta_tags %}*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <meta charset="UTF-8">*/
/*             <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         {% endblock %}*/
/* */
/*         {% block stylesheets %}*/
/*             {% if admin_pool is defined %}*/
/*                 {% for stylesheet in admin_pool.getOption('stylesheets', []) %}*/
/*                         <link rel="stylesheet" href="{{ asset(stylesheet) }}">*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script>*/
/*                 window.SONATA_CONFIG = {*/
/*                     CONFIRM_EXIT: {% if admin_pool is defined and admin_pool.getOption('confirm_exit') %}true{% else %}false{% endif %},*/
/*                     USE_SELECT2: {% if admin_pool is defined and admin_pool.getOption('use_select2') %}true{% else %}false{% endif %},*/
/*                     USE_ICHECK: {% if admin_pool is defined and admin_pool.getOption('use_icheck') %}true{% else %}false{% endif %},*/
/*                     USE_STICKYFORMS: {% if admin_pool is defined and admin_pool.getOption('use_stickyforms') %}true{% else %}false{% endif %}*/
/*                 };*/
/*                 window.SONATA_TRANSLATIONS = {*/
/*                     CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'*/
/*                 };*/
/* */
/*                 // http://getbootstrap.com/getting-started/#support-ie10-width*/
/*                 if (navigator.userAgent.match(/IEMobile\/10\.0/)) {*/
/*                     var msViewportStyle = document.createElement('style');*/
/*                     msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));*/
/*                     document.querySelector('head').appendChild(msViewportStyle);*/
/*                 }*/
/*             </script>*/
/* */
/*             {% if admin_pool is defined %}*/
/*                 {% for javascript in admin_pool.getOption('javascripts', []) %}*/
/*                     <script src="{{ asset(javascript) }}"></script>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/* */
/*             {% set locale = app.request.locale %}*/
/*             {# localize moment #}*/
/*             {% if locale[:2] != 'en' %}*/
/*                 <script src="{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*             {% endif %}*/
/* */
/*             {# localize select2 #}*/
/*             {% if admin_pool is defined and admin_pool.getOption('use_select2') %}*/
/*                 {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}*/
/* */
/*                 {# omit default EN locale #}*/
/*                 {% if locale[:2] != 'en' %}*/
/*                     <script src="{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/*         <title>*/
/*         {% block sonata_head_title %}*/
/*             {{ 'Admin'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*             {% if _title is not empty %}*/
/*                 {{ _title|raw }}*/
/*             {% else %}*/
/*                 {% if action is defined %}*/
/*                     -*/
/*                     {% for menu in admin.breadcrumbs(action) %}*/
/*                         {% if not loop.first %}*/
/*                             {%  if loop.index != 2 %}*/
/*                                 &gt;*/
/*                             {% endif %}*/
/* */
/*                             {{ menu.label }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endif%}*/
/*         {% endblock %}*/
/*         </title>*/
/*     </head>*/
/*     <body {% block body_attributes %}class="sonata-bc skin-black fixed"{% endblock %}>*/
/* */
/*     <div class="wrapper">*/
/* */
/*         {% block sonata_header %}*/
/*             <header class="main-header">*/
/*                 {% block sonata_header_noscript_warning %}*/
/*                     <noscript>*/
/*                         <div class="noscript-warning">*/
/*                             {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}*/
/*                         </div>*/
/*                     </noscript>*/
/*                 {% endblock %}*/
/*                 {% block logo %}*/
/*                     {% if admin_pool is defined %}*/
/*                         {% spaceless %}*/
/*                             <a class="logo" href="{{ path('sonata_admin_dashboard') }}">*/
/*                                 {% if 'single_image' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                                     <img src="{{ asset(admin_pool.titlelogo) }}" alt="{{ admin_pool.title }}">*/
/*                                 {% endif %}*/
/*                                 {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                                     <span>{{ admin_pool.title }}</span>*/
/*                                 {% endif %}*/
/*                             </a>*/
/*                         {% endspaceless %}*/
/*                     {% endif %}*/
/*                 {% endblock %}*/
/*                 {% block sonata_nav %}*/
/*                     {% if admin_pool is defined %}*/
/*                         <nav class="navbar navbar-static-top" role="navigation">*/
/*                             <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                             </a>*/
/* */
/*                             <div class="navbar-left">*/
/*                                 {% block sonata_breadcrumb %}*/
/*                                     <div class="hidden-xs">*/
/*                                         {% if _breadcrumb is not empty or action is defined %}*/
/*                                             <ol class="nav navbar-top-links breadcrumb">*/
/*                                                 {% if _breadcrumb is empty %}*/
/*                                                     {% if action is defined %}*/
/*                                                         {% for menu in admin.breadcrumbs(action) %}*/
/*                                                             {% if not loop.last  %}*/
/*                                                                 <li>*/
/*                                                                     {% if menu.uri is not empty %}*/
/*                                                                         <a href="{{ menu.uri }}">{{ menu.label|raw }}</a>*/
/*                                                                     {% else %}*/
/*                                                                         {{ menu.label }}*/
/*                                                                     {% endif %}*/
/*                                                                 </li>*/
/*                                                             {% else %}*/
/*                                                                 <li class="active"><span>{{ menu.label }}</span></li>*/
/*                                                             {% endif %}*/
/*                                                         {% endfor %}*/
/*                                                     {% endif %}*/
/*                                                 {% else %}*/
/*                                                     {{ _breadcrumb|raw }}*/
/*                                                 {% endif %}*/
/*                                             </ol>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 {% endblock sonata_breadcrumb %}*/
/*                             </div>*/
/* */
/*                             {% block sonata_top_nav_menu %}*/
/*                                 <div class="navbar-custom-menu">*/
/*                                     <ul class="nav navbar-nav">*/
/*                                         <li class="dropdown">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                                 <i class="fa fa-plus-square fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                             </a>*/
/*                                             {% include admin_pool.getTemplate('add_block') %}*/
/*                                         </li>*/
/*                                         <li class="dropdown user-menu">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                                 <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                             </a>*/
/*                                             <ul class="dropdown-menu dropdown-user">*/
/*                                                 {% include admin_pool.getTemplate('user_block') %}*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             {% endblock %}*/
/*                         </nav>*/
/*                     {% endif %}*/
/*                 {% endblock sonata_nav %}*/
/*             </header>*/
/*         {% endblock sonata_header %}*/
/* */
/*         {% block sonata_wrapper %}*/
/*             {% block sonata_left_side %}*/
/*                 <aside class="main-sidebar">*/
/*                     <section class="sidebar">*/
/*                         {% block sonata_side_nav %}*/
/*                             {% block sonata_sidebar_search %}*/
/*                                 {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                     <form action="{{ path('sonata_admin_search') }}" method="GET" class="sidebar-form" role="search">*/
/*                                         <div class="input-group custom-search-form">*/
/*                                             <input type="text" name="q" value="{{ app.request.get('q') }}" class="form-control" placeholder="{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}">*/
/*                                                 <span class="input-group-btn">*/
/*                                                     <button class="btn btn-flat" type="submit">*/
/*                                                         <i class="fa fa-search"></i>*/
/*                                                     </button>*/
/*                                                 </span>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_sidebar_search %}*/
/* */
/*                             {% block side_bar_before_nav %} {% endblock %}*/
/*                             {% block side_bar_nav %}*/
/*                                 {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                     {{ knp_menu_render('sonata_admin_sidebar', {template: admin_pool.getTemplate('knp_menu_template')}) }}*/
/*                                 {% endif %}*/
/*                             {% endblock side_bar_nav %}*/
/*                             {% block side_bar_after_nav %}*/
/*                                 <p class="text-center small" style="border-top: 1px solid #444444; padding-top: 10px">*/
/*                                     {% block side_bar_after_nav_content %}*/
/*                                         <a href="https://sonata-project.org" rel="noreferrer" target="_blank">sonata project</a>*/
/*                                     {% endblock %}*/
/*                                 </p>*/
/*                             {% endblock %}*/
/*                         {% endblock sonata_side_nav %}*/
/*                     </section>*/
/*                 </aside>*/
/*             {% endblock sonata_left_side %}*/
/* */
/*             <div class="content-wrapper">*/
/*                 {% block sonata_page_content %}*/
/*                     <section class="content-header">*/
/* */
/*                         {% block sonata_page_content_header %}*/
/*                             {% block sonata_page_content_nav %}*/
/*                                 {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}*/
/*                                     <nav class="navbar navbar-default" role="navigation">*/
/*                                         <div class="container-fluid">*/
/*                                             {% block tab_menu_navbar_header %}*/
/*                                                 {% if _navbar_title is not empty %}*/
/*                                                     <div class="navbar-header">*/
/*                                                         <a class="navbar-brand" href="#">{{ _navbar_title|raw }}</a>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             {% endblock %}*/
/* */
/*                                             <div class="navbar-collapse">*/
/*                                                 <div class="navbar-left">*/
/*                                                     {% if _tab_menu is not empty %}*/
/*                                                         {{ _tab_menu|raw }}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/* */
/*                                                 {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}*/
/*                                                     <div class="nav navbar-right btn-group">*/
/*                                                         {% for mode, settings in admin.listModes %}*/
/*                                                             <a href="{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}" class="btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}"><i class="{{ settings.class }}"></i></a>*/
/*                                                         {% endfor %}*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 */
/*                                                 {% block sonata_admin_content_actions_wrappers %}*/
/*                                                     {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}*/
/*                                                         <ul class="nav navbar-nav navbar-right">*/
/*                                                         {% if _actions|split('</a>')|length > 2 %}*/
/*                                                             <li class="dropdown sonata-actions">*/
/*                                                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b></a>*/
/*                                                                 <ul class="dropdown-menu" role="menu">*/
/*                                                                     {{ _actions|raw }}*/
/*                                                                 </ul>*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             {{ _actions|raw }}*/
/*                                                         {% endif %}*/
/*                                                         </ul>*/
/*                                                     {% endif %}*/
/*                                                 {% endblock sonata_admin_content_actions_wrappers %}*/
/* */
/*                                                 {% if _list_filters_actions is not empty %}*/
/*                                                     {{ _list_filters_actions|raw }}*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </nav>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_page_content_nav %}*/
/*                         {% endblock sonata_page_content_header %}*/
/*                     </section>*/
/* */
/*                     <section class="content">*/
/*                         {% block sonata_admin_content %}*/
/* */
/*                             {% block notice %}*/
/*                                 {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/*                             {% endblock notice %}*/
/* */
/*                             {% if _preview is not empty %}*/
/*                                 <div class="sonata-ba-preview">{{ _preview|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _content is not empty %}*/
/*                                 <div class="sonata-ba-content">{{ _content|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _show is not empty %}*/
/*                                 <div class="sonata-ba-show">{{ _show|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _form is not empty %}*/
/*                                 <div class="sonata-ba-form">{{ _form|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _list_table is not empty or _list_filters is not empty %}*/
/*                                 {% if _list_filters|trim %}*/
/*                                     <div class="row">*/
/*                                         {{ _list_filters|raw }}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/* */
/*                                 <div class="row">*/
/*                                     {{ _list_table|raw }}*/
/*                                 </div>*/
/* */
/*                             {% endif %}*/
/*                         {% endblock sonata_admin_content %}*/
/*                     </section>*/
/*                 {% endblock sonata_page_content %}*/
/*             </div>*/
/*         {% endblock sonata_wrapper %}*/
/*     </div>*/
/* */
/*     {% if admin_pool is defined and admin_pool.getOption('use_bootlint') %}*/
/*         {% block bootlint %}*/
/*             {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}*/
/*             <script type="text/javascript">*/
/*                 javascript:(function(){var s=document.createElement("script");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src="https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js";document.body.appendChild(s)})();*/
/*             </script>*/
/*         {% endblock %}*/
/*     {% endif %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
