<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_ba9b57da0ae78814fd6df3c9a57c2c63441271e95d465bc2bb04572c4c0a91d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5470a7a6527b591e99fb124ca04395cd1cdf570a0690c9c3e7bd3f65511a9e9 = $this->env->getExtension("native_profiler");
        $__internal_a5470a7a6527b591e99fb124ca04395cd1cdf570a0690c9c3e7bd3f65511a9e9->enter($__internal_a5470a7a6527b591e99fb124ca04395cd1cdf570a0690c9c3e7bd3f65511a9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5470a7a6527b591e99fb124ca04395cd1cdf570a0690c9c3e7bd3f65511a9e9->leave($__internal_a5470a7a6527b591e99fb124ca04395cd1cdf570a0690c9c3e7bd3f65511a9e9_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_102223e9b02b50565aa37468c4710417fa2e7165d571b156b819e2921710b609 = $this->env->getExtension("native_profiler");
        $__internal_102223e9b02b50565aa37468c4710417fa2e7165d571b156b819e2921710b609->enter($__internal_102223e9b02b50565aa37468c4710417fa2e7165d571b156b819e2921710b609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 17
            echo "        <li>";
            $this->loadTemplate("SonataAdminBundle:Core:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 17)->display($context);
            echo "</li>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_102223e9b02b50565aa37468c4710417fa2e7165d571b156b819e2921710b609->leave($__internal_102223e9b02b50565aa37468c4710417fa2e7165d571b156b819e2921710b609_prof);

    }

    // line 22
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_6763034d402721d944d308c473bd573f92030bd21ffa4d1d10f319e850b9cfe2 = $this->env->getExtension("native_profiler");
        $__internal_6763034d402721d944d308c473bd573f92030bd21ffa4d1d10f319e850b9cfe2->enter($__internal_6763034d402721d944d308c473bd573f92030bd21ffa4d1d10f319e850b9cfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_6763034d402721d944d308c473bd573f92030bd21ffa4d1d10f319e850b9cfe2->leave($__internal_6763034d402721d944d308c473bd573f92030bd21ffa4d1d10f319e850b9cfe2_prof);

    }

    // line 24
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_da5a82d5255f8385eec37bf430f56f86d24d7b85dd47229bc6653f2bb49dd154 = $this->env->getExtension("native_profiler");
        $__internal_da5a82d5255f8385eec37bf430f56f86d24d7b85dd47229bc6653f2bb49dd154->enter($__internal_da5a82d5255f8385eec37bf430f56f86d24d7b85dd47229bc6653f2bb49dd154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 25
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 26
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 27
        echo "        ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 28
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 31
        echo "
        ";
        // line 33
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

                ";
        // line 37
        $this->displayBlock('list_header', $context, $blocks);
        // line 38
        echo "
                ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 40
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 41
            $this->displayBlock('table_header', $context, $blocks);
            // line 77
            echo "
                        ";
            // line 78
            $this->displayBlock('table_body', $context, $blocks);
            // line 83
            echo "
                        ";
            // line 84
            $this->displayBlock('table_footer', $context, $blocks);
            // line 86
            echo "                    </table>
                ";
        } else {
            // line 88
            echo "                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" style=\"width: 0%\"></div>
                            </div>
                            <span class=\"progress-description\">
                                ";
            // line 96
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
                // line 97
                echo "                                    ";
                $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 97)->display($context);
                // line 98
                echo "                                ";
            }
            // line 99
            echo "                            </span>
                        </div><!-- /.info-box-content -->
                    </div>
                ";
        }
        // line 103
        echo "
                ";
        // line 104
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 106
        $this->displayBlock('list_footer', $context, $blocks);
        // line 197
        echo "        </div>
        ";
        // line 198
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 199
            echo "            </form>
        ";
        }
        // line 201
        echo "    </div>
";
        
        $__internal_da5a82d5255f8385eec37bf430f56f86d24d7b85dd47229bc6653f2bb49dd154->leave($__internal_da5a82d5255f8385eec37bf430f56f86d24d7b85dd47229bc6653f2bb49dd154_prof);

    }

    // line 37
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_d78d3496a11b02cd56fdf1559be3aa115680d0a8dd46cc5138dcc5f74cb2eff8 = $this->env->getExtension("native_profiler");
        $__internal_d78d3496a11b02cd56fdf1559be3aa115680d0a8dd46cc5138dcc5f74cb2eff8->enter($__internal_d78d3496a11b02cd56fdf1559be3aa115680d0a8dd46cc5138dcc5f74cb2eff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_d78d3496a11b02cd56fdf1559be3aa115680d0a8dd46cc5138dcc5f74cb2eff8->leave($__internal_d78d3496a11b02cd56fdf1559be3aa115680d0a8dd46cc5138dcc5f74cb2eff8_prof);

    }

    // line 41
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_627de85f43300bf79f5f9d8a749245d85880f92b833ba9cdf4942bfe05c2dfe9 = $this->env->getExtension("native_profiler");
        $__internal_627de85f43300bf79f5f9d8a749245d85880f92b833ba9cdf4942bfe05c2dfe9->enter($__internal_627de85f43300bf79f5f9d8a749245d85880f92b833ba9cdf4942bfe05c2dfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 42
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 45
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 46
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 49
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 50
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 51
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 52
                echo "                                            ";
                // line 53
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 54
                echo "                                            ";
                // line 55
                echo "                                        ";
            } else {
                // line 56
                echo "                                            ";
                $context["sortable"] = false;
                // line 57
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 58
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 59
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 60
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 61
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 62
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 63
                    echo "                                            ";
                }
                // line 64
                echo "
                                            ";
                // line 65
                ob_start();
                // line 66
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 67
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 68
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                                                    ";
                // line 69
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 70
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 72
                echo "                                        ";
            }
            // line 73
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_627de85f43300bf79f5f9d8a749245d85880f92b833ba9cdf4942bfe05c2dfe9->leave($__internal_627de85f43300bf79f5f9d8a749245d85880f92b833ba9cdf4942bfe05c2dfe9_prof);

    }

    // line 78
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_c6f0ce428c7d51df4ff7a5570421bb63bee5f94d1c15ec3a540e21afd598bb42 = $this->env->getExtension("native_profiler");
        $__internal_c6f0ce428c7d51df4ff7a5570421bb63bee5f94d1c15ec3a540e21afd598bb42->enter($__internal_c6f0ce428c7d51df4ff7a5570421bb63bee5f94d1c15ec3a540e21afd598bb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 79
        echo "                            <tbody>
                                ";
        // line 80
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 80)->display($context);
        // line 81
        echo "                            </tbody>
                        ";
        
        $__internal_c6f0ce428c7d51df4ff7a5570421bb63bee5f94d1c15ec3a540e21afd598bb42->leave($__internal_c6f0ce428c7d51df4ff7a5570421bb63bee5f94d1c15ec3a540e21afd598bb42_prof);

    }

    // line 84
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_2f9c3a2919d1f628fa3c4ef93b0a584ced799ae5dce307822355ed9d58457a8d = $this->env->getExtension("native_profiler");
        $__internal_2f9c3a2919d1f628fa3c4ef93b0a584ced799ae5dce307822355ed9d58457a8d->enter($__internal_2f9c3a2919d1f628fa3c4ef93b0a584ced799ae5dce307822355ed9d58457a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 85
        echo "                        ";
        
        $__internal_2f9c3a2919d1f628fa3c4ef93b0a584ced799ae5dce307822355ed9d58457a8d->leave($__internal_2f9c3a2919d1f628fa3c4ef93b0a584ced799ae5dce307822355ed9d58457a8d_prof);

    }

    // line 106
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_36506471a9a1dbdb1f137d255acc6bed6efb4f222b45be5acc14d9c605ca95ff = $this->env->getExtension("native_profiler");
        $__internal_36506471a9a1dbdb1f137d255acc6bed6efb4f222b45be5acc14d9c605ca95ff->enter($__internal_36506471a9a1dbdb1f137d255acc6bed6efb4f222b45be5acc14d9c605ca95ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 107
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 108
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 110
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 111
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 112
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                    // line 113
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 154
                    echo "                                    ";
                }
                // line 155
                echo "                                </div>


                                <div class=\"pull-right\">
                                    ";
                // line 159
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                    // line 160
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\"></i>
                                                ";
                    // line 163
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 168
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 169
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\"></i>
                                                        ";
                        // line 171
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 180
                echo "
                                    ";
                // line 181
                $this->displayBlock('pager_results', $context, $blocks);
                // line 184
                echo "                                </div>
                            ";
            }
            // line 186
            echo "                        </div>

                        ";
            // line 188
            $this->displayBlock('pager_links', $context, $blocks);
            // line 194
            echo "                    </div>
                ";
        }
        // line 196
        echo "            ";
        
        $__internal_36506471a9a1dbdb1f137d255acc6bed6efb4f222b45be5acc14d9c605ca95ff->leave($__internal_36506471a9a1dbdb1f137d255acc6bed6efb4f222b45be5acc14d9c605ca95ff_prof);

    }

    // line 113
    public function block_batch($context, array $blocks = array())
    {
        $__internal_3bd2127e187bb4eb4ab030c717ee0c9ece1698fca7679bc2e74e1d23fc133755 = $this->env->getExtension("native_profiler");
        $__internal_3bd2127e187bb4eb4ab030c717ee0c9ece1698fca7679bc2e74e1d23fc133755->enter($__internal_3bd2127e187bb4eb4ab030c717ee0c9ece1698fca7679bc2e74e1d23fc133755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 114
        echo "                                            <script>
                                                ";
        // line 115
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 136
        echo "                                            </script>

                                        ";
        // line 138
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 151
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_3bd2127e187bb4eb4ab030c717ee0c9ece1698fca7679bc2e74e1d23fc133755->leave($__internal_3bd2127e187bb4eb4ab030c717ee0c9ece1698fca7679bc2e74e1d23fc133755_prof);

    }

    // line 115
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_60a4f9ed65fad0e869885a6ac789ca9f8f2420533eaddac4f6ae245040db74ca = $this->env->getExtension("native_profiler");
        $__internal_60a4f9ed65fad0e869885a6ac789ca9f8f2420533eaddac4f6ae245040db74ca->enter($__internal_60a4f9ed65fad0e869885a6ac789ca9f8f2420533eaddac4f6ae245040db74ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 116
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').on('ifChanged', function () {
                                                            \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                            ;
                                                        });

                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_60a4f9ed65fad0e869885a6ac789ca9f8f2420533eaddac4f6ae245040db74ca->leave($__internal_60a4f9ed65fad0e869885a6ac789ca9f8f2420533eaddac4f6ae245040db74ca_prof);

    }

    // line 138
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_ae7ea002aba6673f7a2866430e54949578c97a5ce46de6835b2095c5d866abfb = $this->env->getExtension("native_profiler");
        $__internal_ae7ea002aba6673f7a2866430e54949578c97a5ce46de6835b2095c5d866abfb->enter($__internal_ae7ea002aba6673f7a2866430e54949578c97a5ce46de6835b2095c5d866abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 139
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 147
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["options"], "label", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                                            </select>
                                        ";
        
        $__internal_ae7ea002aba6673f7a2866430e54949578c97a5ce46de6835b2095c5d866abfb->leave($__internal_ae7ea002aba6673f7a2866430e54949578c97a5ce46de6835b2095c5d866abfb_prof);

    }

    // line 181
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_ada668679da385f23b23f1047d8701aabe2531e7e2752eb48b0dae8054e71eed = $this->env->getExtension("native_profiler");
        $__internal_ada668679da385f23b23f1047d8701aabe2531e7e2752eb48b0dae8054e71eed->enter($__internal_ada668679da385f23b23f1047d8701aabe2531e7e2752eb48b0dae8054e71eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 182
        echo "                                        ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 182)->display($context);
        // line 183
        echo "                                    ";
        
        $__internal_ada668679da385f23b23f1047d8701aabe2531e7e2752eb48b0dae8054e71eed->leave($__internal_ada668679da385f23b23f1047d8701aabe2531e7e2752eb48b0dae8054e71eed_prof);

    }

    // line 188
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_fd3f2c21625ef6bd6862ce9ef50a70643d033c886b6804a6ba05c815a56c969f = $this->env->getExtension("native_profiler");
        $__internal_fd3f2c21625ef6bd6862ce9ef50a70643d033c886b6804a6ba05c815a56c969f->enter($__internal_fd3f2c21625ef6bd6862ce9ef50a70643d033c886b6804a6ba05c815a56c969f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 189
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 190
            echo "                                <hr/>
                                ";
            // line 191
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 191)->display($context);
            // line 192
            echo "                            ";
        }
        // line 193
        echo "                        ";
        
        $__internal_fd3f2c21625ef6bd6862ce9ef50a70643d033c886b6804a6ba05c815a56c969f->leave($__internal_fd3f2c21625ef6bd6862ce9ef50a70643d033c886b6804a6ba05c815a56c969f_prof);

    }

    // line 204
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_bb032b52b924d844640a950e625a9cc0e9eccc5a1d3e04e552d1cf8a4da95403 = $this->env->getExtension("native_profiler");
        $__internal_bb032b52b924d844640a950e625a9cc0e9eccc5a1d3e04e552d1cf8a4da95403->enter($__internal_bb032b52b924d844640a950e625a9cc0e9eccc5a1d3e04e552d1cf8a4da95403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 205
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 206
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\"></i>
                    ";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 216
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 217
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 218
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_bb032b52b924d844640a950e625a9cc0e9eccc5a1d3e04e552d1cf8a4da95403->leave($__internal_bb032b52b924d844640a950e625a9cc0e9eccc5a1d3e04e552d1cf8a4da95403_prof);

    }

    // line 228
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_1593fc01472f27b4c82f4f1a81e764c5d9970bd4e4dcb2489161666f7c7d1897 = $this->env->getExtension("native_profiler");
        $__internal_1593fc01472f27b4c82f4f1a81e764c5d9970bd4e4dcb2489161666f7c7d1897->enter($__internal_1593fc01472f27b4c82f4f1a81e764c5d9970bd4e4dcb2489161666f7c7d1897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 229
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 230
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 231
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 232
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 235
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 236
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 240
            $context["withAdvancedFilter"] = false;
            // line 241
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 242
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 243
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 244
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 246
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 247
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 249
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 253
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 265
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 266
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 267
                    echo "                                    ";
                }
                // line 268
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 273
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 274
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\"></i> ";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 282
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 286
            if ((isset($context["withAdvancedFilter"]) ? $context["withAdvancedFilter"] : $this->getContext($context, "withAdvancedFilter"))) {
                // line 287
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\"></i>
                                            ";
                // line 290
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 294
            echo "                            </div>
                        </div>

                        ";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 298
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_1593fc01472f27b4c82f4f1a81e764c5d9970bd4e4dcb2489161666f7c7d1897->leave($__internal_1593fc01472f27b4c82f4f1a81e764c5d9970bd4e4dcb2489161666f7c7d1897_prof);

    }

    // line 242
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_148c030cc34380d4e3615dccb92ebc615ca43d6f84b6f88870f8185243c87197 = $this->env->getExtension("native_profiler");
        $__internal_148c030cc34380d4e3615dccb92ebc615ca43d6f84b6f88870f8185243c87197->enter($__internal_148c030cc34380d4e3615dccb92ebc615ca43d6f84b6f88870f8185243c87197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_148c030cc34380d4e3615dccb92ebc615ca43d6f84b6f88870f8185243c87197->leave($__internal_148c030cc34380d4e3615dccb92ebc615ca43d6f84b6f88870f8185243c87197_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  911 => 242,  899 => 300,  888 => 298,  884 => 297,  879 => 294,  872 => 290,  867 => 287,  865 => 286,  858 => 282,  854 => 281,  848 => 278,  840 => 274,  838 => 273,  832 => 269,  818 => 268,  815 => 267,  812 => 266,  810 => 265,  796 => 258,  788 => 253,  781 => 249,  777 => 247,  774 => 246,  766 => 244,  764 => 243,  747 => 242,  729 => 241,  727 => 240,  720 => 236,  714 => 235,  706 => 232,  703 => 231,  700 => 230,  697 => 229,  691 => 228,  680 => 222,  667 => 218,  659 => 217,  656 => 216,  651 => 215,  644 => 211,  637 => 206,  635 => 205,  629 => 204,  622 => 193,  619 => 192,  617 => 191,  614 => 190,  611 => 189,  605 => 188,  598 => 183,  595 => 182,  589 => 181,  581 => 149,  570 => 147,  566 => 146,  559 => 142,  555 => 141,  551 => 140,  546 => 139,  540 => 138,  514 => 116,  508 => 115,  499 => 152,  496 => 151,  494 => 138,  490 => 136,  488 => 115,  485 => 114,  479 => 113,  472 => 196,  468 => 194,  466 => 188,  462 => 186,  458 => 184,  456 => 181,  453 => 180,  446 => 175,  436 => 171,  431 => 169,  428 => 168,  424 => 167,  417 => 163,  412 => 160,  410 => 159,  404 => 155,  401 => 154,  398 => 113,  396 => 112,  393 => 111,  391 => 110,  387 => 108,  384 => 107,  378 => 106,  371 => 85,  365 => 84,  357 => 81,  355 => 80,  352 => 79,  346 => 78,  337 => 74,  331 => 73,  328 => 72,  324 => 70,  320 => 69,  315 => 68,  309 => 67,  287 => 66,  285 => 65,  282 => 64,  279 => 63,  276 => 62,  273 => 61,  270 => 60,  267 => 59,  264 => 58,  261 => 57,  258 => 56,  255 => 55,  253 => 54,  250 => 53,  248 => 52,  246 => 51,  243 => 50,  241 => 49,  236 => 46,  233 => 45,  229 => 44,  225 => 42,  219 => 41,  208 => 37,  200 => 201,  196 => 199,  194 => 198,  191 => 197,  189 => 106,  184 => 104,  181 => 103,  175 => 99,  172 => 98,  169 => 97,  167 => 96,  159 => 91,  154 => 88,  150 => 86,  148 => 84,  145 => 83,  143 => 78,  140 => 77,  138 => 41,  135 => 40,  133 => 39,  130 => 38,  128 => 37,  123 => 35,  117 => 34,  110 => 33,  107 => 31,  102 => 29,  97 => 28,  94 => 27,  92 => 26,  89 => 25,  83 => 24,  71 => 22,  59 => 17,  56 => 16,  54 => 15,  48 => 14,  33 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/* {% spaceless %}*/
/*     {% if admin.hasRoute('create') and admin.isGranted('CREATE')%}*/
/*         <li>{% include 'SonataAdminBundle:Core:create_button.html.twig' %}</li>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% block list_table %}*/
/*     <div class="col-xs-12 col-md-12">*/
/*         {% set batchactions = admin.batchactions %}*/
/*         {% if admin.hasRoute('batch') and batchactions|length %}*/
/*             <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST" >*/
/*             <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/*         {% endif %}*/
/* */
/*         {# Add a margin if no pager to prevent dropdown cropping on window #}*/
/*         <div class="box box-primary" {% if admin.datagrid.pager.lastPage == 1 %}style="margin-bottom: 100px;"{% endif %}>*/
/*             <div class="box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}">*/
/*                 {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}*/
/* */
/*                 {% block list_header %}{% endblock %}*/
/* */
/*                 {% if admin.datagrid.results|length > 0 %}*/
/*                     <table class="table table-bordered table-striped sonata-ba-list">*/
/*                         {% block table_header %}*/
/*                             <thead>*/
/*                                 <tr class="sonata-ba-list-field-header">*/
/*                                     {% for field_description in admin.list.elements %}*/
/*                                         {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-batch">*/
/*                                               <input type="checkbox" id="list_batch_checkbox">*/
/*                                             </th>*/
/*                                         {% elseif field_description.getOption('code') == '_select' %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>*/
/*                                         {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}*/
/*                                             {# Action buttons disabled in ajax view! #}*/
/*                                         {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}*/
/*                                             {# Disable fields with 'ajax_hidden' option set to true #}*/
/*                                         {% else %}*/
/*                                             {% set sortable = false %}*/
/*                                             {% if field_description.options.sortable is defined and field_description.options.sortable %}*/
/*                                                 {% set sortable             = true %}*/
/*                                                 {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}*/
/*                                                 {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}*/
/*                                                 {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                                 {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% spaceless %}*/
/*                                                 <th class="sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}"{% if field_description.options.header_style is defined %} style="{{ field_description.options.header_style }}"{% endif %}>*/
/*                                                     {% if sortable %}<a href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}*/
/*                                                     {{ admin.trans(field_description.label, {}, field_description.translationDomain) }}*/
/*                                                     {% if sortable %}</a>{% endif %}*/
/*                                                 </th>*/
/*                                             {% endspaceless %}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             </thead>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_body %}*/
/*                             <tbody>*/
/*                                 {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}*/
/*                             </tbody>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_footer %}*/
/*                         {% endblock %}*/
/*                     </table>*/
/*                 {% else %}*/
/*                     <div class="info-box">*/
/*                         <span class="info-box-icon bg-aqua"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                         <div class="info-box-content">*/
/*                             <span class="info-box-text">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>*/
/*                             <div class="progress">*/
/*                                 <div class="progress-bar" style="width: 0%"></div>*/
/*                             </div>*/
/*                             <span class="progress-description">*/
/*                                 {% if not app.request.xmlHttpRequest %}*/
/*                                     {% include 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/*                                 {% endif %}*/
/*                             </span>*/
/*                         </div><!-- /.info-box-content -->*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}*/
/*             </div>*/
/*             {% block list_footer %}*/
/*                 {% if admin.datagrid.results|length > 0 %}*/
/*                     <div class="box-footer">*/
/*                         <div class="form-inline clearfix">*/
/*                             {% if not app.request.isXmlHttpRequest %}*/
/*                                 <div class="pull-left">*/
/*                                     {% if admin.hasRoute('batch') and batchactions|length > 0  %}*/
/*                                         {% block batch %}*/
/*                                             <script>*/
/*                                                 {% block batch_javascript %}*/
/*                                                     jQuery(document).ready(function ($) {*/
/*                                                         $('#list_batch_checkbox').on('ifChanged', function () {*/
/*                                                             $(this)*/
/*                                                                 .closest('table')*/
/*                                                                 .find('td.sonata-ba-list-field-batch input[type="checkbox"], div.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                                 .iCheck($(this).is(':checked') ? 'check' : 'uncheck')*/
/*                                                             ;*/
/*                                                         });*/
/* */
/*                                                         $('td.sonata-ba-list-field-batch input[type="checkbox"], div.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                             .on('ifChanged', function () {*/
/*                                                                 $(this)*/
/*                                                                     .closest('tr, div.sonata-ba-list-field-batch')*/
/*                                                                     .toggleClass('sonata-ba-list-row-selected', $(this).is(':checked'))*/
/*                                                                 ;*/
/*                                                             })*/
/*                                                             .trigger('ifChanged')*/
/*                                                         ;*/
/*                                                     });*/
/*                                                 {% endblock %}*/
/*                                             </script>*/
/* */
/*                                         {% block batch_actions %}*/
/*                                             <label class="checkbox" for="{{ admin.uniqid }}_all_elements">*/
/*                                                 <input type="checkbox" name="all_elements" id="{{ admin.uniqid }}_all_elements">*/
/*                                                 {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}*/
/*                                                 ({{ admin.datagrid.pager.nbresults }})*/
/*                                             </label>*/
/* */
/*                                             <select name="action" style="width: auto; height: auto" class="form-control">*/
/*                                                 {% for action, options in batchactions %}*/
/*                                                     <option value="{{ action }}">{{ options.label }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         {% endblock %}*/
/* */
/*                                             <input type="submit" class="btn btn-small btn-primary" value="{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}">*/
/*                                         {% endblock %}*/
/*                                     {% endif %}*/
/*                                 </div>*/
/* */
/* */
/*                                 <div class="pull-right">*/
/*                                     {% if admin.hasRoute('export') and admin.isGranted('EXPORT') and admin.getExportFormats()|length %}*/
/*                                         <div class="btn-group">*/
/*                                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                                 <i class="fa fa-share-square-o"></i>*/
/*                                                 {{ "label_export_download"|trans({}, "SonataAdminBundle") }}*/
/*                                                 <span class="caret"></span>*/
/*                                             </button>*/
/*                                             <ul class="dropdown-menu">*/
/*                                                 {% for format in admin.getExportFormats() %}*/
/*                                                 <li>*/
/*                                                     <a href="{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}">*/
/*                                                         <i class="fa fa-arrow-circle-o-down"></i>*/
/*                                                         {{ ("export_format_" ~ format)|trans({}, 'SonataAdminBundle') }}*/
/*                                                     </a>*/
/*                                                 <li>*/
/*                                                 {% endfor %}*/
/*                                             </ul>*/
/*                                         </div>*/
/* */
/*                                         &nbsp;-&nbsp;*/
/*                                     {% endif %}*/
/* */
/*                                     {% block pager_results %}*/
/*                                         {% include admin.getTemplate('pager_results') %}*/
/*                                     {% endblock %}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/* */
/*                         {% block pager_links %}*/
/*                             {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                                 <hr/>*/
/*                                 {% include admin.getTemplate('pager_links') %}*/
/*                             {% endif %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         {% if admin.hasRoute('batch') and batchactions|length %}*/
/*             </form>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block list_filters_actions %}*/
/*     {%- if admin.datagrid.filters|length %}*/
/*         <ul class="nav navbar-nav navbar-right">*/
/* */
/*             <li class="dropdown sonata-actions">*/
/*                 <a href="#" class="dropdown-toggle sonata-ba-action" data-toggle="dropdown">*/
/*                     <i class="fa fa-filter"></i>*/
/*                     {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b>*/
/*                 </a>*/
/* */
/*                 <ul class="dropdown-menu" role="menu">*/
/*                     {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}*/
/*                         <li>*/
/*                             <a href="#" class="sonata-toggle-filter sonata-ba-action" filter-target="filter-{{ admin.uniqid }}-{{ filter.name }}" filter-container="filter-container-{{ admin.uniqid() }}">*/
/*                                 <i class="fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}"></i>{{ admin.trans(filter.label, {}, filter.translationDomain) }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     {% endif -%}*/
/* {% endblock %}*/
/* */
/* {% block list_filters %}*/
/*     {% if admin.datagrid.filters %}*/
/*         {% form_theme form admin.getTemplate('filter') %}*/
/* */
/*         <div class="col-xs-12 col-md-12 sonata-filters-box" style="display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}" id="filter-container-{{ admin.uniqid() }}">*/
/*             <div class="box box-primary" >*/
/*                 <div class="box-body">*/
/*                     <form class="sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}" action="{{ admin.generateUrl('list') }}" method="GET" role="form">*/
/*                         {{ form_errors(form) }}*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-sm-9">*/
/*                                 {% set withAdvancedFilter = false %}*/
/*                                 {% for filter in admin.datagrid.filters %}*/
/*                                     <div class="form-group {% block sonata_list_filter_group_class %}{% endblock %}" id="filter-{{ admin.uniqid }}-{{ filter.name }}" sonata-filter="{{ (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) ? 'true' : 'false' }}" style="display: {% if (filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true)) %}block{% else %}none{% endif %}">*/
/*                                         {% if filter.label is not same as(false) %}*/
/*                                             <label for="{{ form.children[filter.formName].children['value'].vars.id }}" class="col-sm-3 control-label">{{ admin.trans(filter.label, {}, filter.translationDomain) }}</label>*/
/*                                         {% endif %}*/
/*                                         {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}*/
/* */
/*                                         <div class="col-sm-4 advanced-filter">*/
/*                                             {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-4">*/
/*                                             {{ form_widget(form.children[filter.formName].children['value']) }}*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-1">*/
/*                                             <label class="control-label">*/
/*                                                 <a href="#" class="sonata-toggle-filter sonata-ba-action" filter-target="filter-{{ admin.uniqid }}-{{ filter.name }}" filter-container="filter-container-{{ admin.uniqid() }}">*/
/*                                                     <i class="fa fa-minus-circle"></i>*/
/*                                                 </a>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     {% if filter.options['advanced_filter'] %}*/
/*                                         {% set withAdvancedFilter = true %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                             <div class="col-sm-3 text-center">*/
/*                                 <input type="hidden" name="filter[_page]" id="filter__page" value="1">*/
/* */
/*                                 {% set foo = form.children['_page'].setRendered() %}*/
/*                                 {{ form_rest(form) }}*/
/* */
/*                                 <div class="form-group">*/
/*                                     <button type="submit" class="btn btn-primary">*/
/*                                         <i class="fa fa-filter"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}*/
/*                                     </button>*/
/* */
/*                                     <a class="btn btn-default" href="{{ admin.generateUrl('list', {filters: 'reset'}) }}">*/
/*                                         {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}*/
/*                                     </a>*/
/*                                 </div>*/
/* */
/*                                 {% if withAdvancedFilter %}*/
/*                                     <div class="form-group">*/
/*                                         <a href="#" data-toggle="advanced-filter">*/
/*                                             <i class="fa fa-cogs"></i>*/
/*                                             {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {% for paramKey, paramValue in admin.persistentParameters %}*/
/*                             <input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}">*/
/*                         {% endfor %}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
