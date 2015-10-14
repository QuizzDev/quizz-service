<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_c6a1b1210d7e245d0687320ea9e1bc05b8048c79853bb278a184e819fcdec9ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b594097caf9c84be315744cde11d8ac3c4c521e877abb6ee578f364b1fe0c71d = $this->env->getExtension("native_profiler");
        $__internal_b594097caf9c84be315744cde11d8ac3c4c521e877abb6ee578f364b1fe0c71d->enter($__internal_b594097caf9c84be315744cde11d8ac3c4c521e877abb6ee578f364b1fe0c71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b594097caf9c84be315744cde11d8ac3c4c521e877abb6ee578f364b1fe0c71d->leave($__internal_b594097caf9c84be315744cde11d8ac3c4c521e877abb6ee578f364b1fe0c71d_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_dc69d0e48fea466aaafedf2e3da3784b0c919ee62d4213748ef56897f63c43a3 = $this->env->getExtension("native_profiler");
        $__internal_dc69d0e48fea466aaafedf2e3da3784b0c919ee62d4213748ef56897f63c43a3->enter($__internal_dc69d0e48fea466aaafedf2e3da3784b0c919ee62d4213748ef56897f63c43a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 16)->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 17)->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 18)->display($context);
        echo "</li>
";
        
        $__internal_dc69d0e48fea466aaafedf2e3da3784b0c919ee62d4213748ef56897f63c43a3->leave($__internal_dc69d0e48fea466aaafedf2e3da3784b0c919ee62d4213748ef56897f63c43a3_prof);

    }

    // line 21
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0782d3c07bfbdb6a65623002afc01e557f5ca2495d40c9aff41f04d35eef4e9c = $this->env->getExtension("native_profiler");
        $__internal_0782d3c07bfbdb6a65623002afc01e557f5ca2495d40c9aff41f04d35eef4e9c->enter($__internal_0782d3c07bfbdb6a65623002afc01e557f5ca2495d40c9aff41f04d35eef4e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_0782d3c07bfbdb6a65623002afc01e557f5ca2495d40c9aff41f04d35eef4e9c->leave($__internal_0782d3c07bfbdb6a65623002afc01e557f5ca2495d40c9aff41f04d35eef4e9c_prof);

    }

    // line 23
    public function block_show($context, array $blocks = array())
    {
        $__internal_88221b8c77c8a7ff48a0f723045a162f641d27e11e396ff16d55a521f621ab05 = $this->env->getExtension("native_profiler");
        $__internal_88221b8c77c8a7ff48a0f723045a162f641d27e11e396ff16d55a521f621ab05->enter($__internal_88221b8c77c8a7ff48a0f723045a162f641d27e11e396ff16d55a521f621ab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 24
        echo "    <div class=\"sonata-ba-view row\">

        ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
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
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 29
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["view_group"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["view_group"], "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo "\">
                <div class=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["view_group"], "box_class", array()), "html", null, true);
            echo "\">
                    ";
            // line 31
            if ($context["name"]) {
                // line 32
                echo "                        <div class=\"box-header with-border\">
                            <h4 class=\"box-title\">
                                ";
                // line 34
                $this->displayBlock('show_title', $context, $blocks);
                // line 37
                echo "                            </h4>
                        </div>
                    ";
            }
            // line 40
            echo "                    <div class=\"box-body table-responsive no-padding\">
                        <table class=\"table\">
                            <tbody>
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                                ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 51
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
        ";
        // line 59
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    </div>
";
        
        $__internal_88221b8c77c8a7ff48a0f723045a162f641d27e11e396ff16d55a521f621ab05->leave($__internal_88221b8c77c8a7ff48a0f723045a162f641d27e11e396ff16d55a521f621ab05_prof);

    }

    // line 34
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_26987cd69e7855761273df0ae400bf89931dd086cc86ebf5d79b9c463519197b = $this->env->getExtension("native_profiler");
        $__internal_26987cd69e7855761273df0ae400bf89931dd086cc86ebf5d79b9c463519197b->enter($__internal_26987cd69e7855761273df0ae400bf89931dd086cc86ebf5d79b9c463519197b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 35
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
                                ";
        
        $__internal_26987cd69e7855761273df0ae400bf89931dd086cc86ebf5d79b9c463519197b->leave($__internal_26987cd69e7855761273df0ae400bf89931dd086cc86ebf5d79b9c463519197b_prof);

    }

    // line 44
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_459db022de3cede1a08054f72cb6e7c94596526441d9eac9c0f8d98094a79d94 = $this->env->getExtension("native_profiler");
        $__internal_459db022de3cede1a08054f72cb6e7c94596526441d9eac9c0f8d98094a79d94->enter($__internal_459db022de3cede1a08054f72cb6e7c94596526441d9eac9c0f8d98094a79d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 45
        echo "                                    <tr class=\"sonata-ba-view-container\">
                                        ";
        // line 46
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 47
            echo "                                            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                        ";
        }
        // line 49
        echo "                                    </tr>
                                ";
        
        $__internal_459db022de3cede1a08054f72cb6e7c94596526441d9eac9c0f8d98094a79d94->leave($__internal_459db022de3cede1a08054f72cb6e7c94596526441d9eac9c0f8d98094a79d94_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 49,  230 => 47,  228 => 46,  225 => 45,  219 => 44,  209 => 35,  203 => 34,  192 => 59,  189 => 58,  170 => 52,  156 => 51,  153 => 44,  136 => 43,  131 => 40,  126 => 37,  124 => 34,  120 => 32,  118 => 31,  114 => 30,  109 => 29,  92 => 28,  87 => 26,  83 => 24,  77 => 23,  65 => 21,  56 => 18,  52 => 17,  48 => 16,  43 => 15,  37 => 14,  22 => 12,);
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
/*     <li>{% include 'SonataAdminBundle:Button:edit_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:history_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% block show %}*/
/*     <div class="sonata-ba-view row">*/
/* */
/*         {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*         {% for name, view_group in admin.showgroups %}*/
/*             <div class="{{ view_group.class | default('col-md-12') }}">*/
/*                 <div class="{{ view_group.box_class }}">*/
/*                     {% if name %}*/
/*                         <div class="box-header with-border">*/
/*                             <h4 class="box-title">*/
/*                                 {% block show_title %}*/
/*                                     {{ admin.trans(name) }}*/
/*                                 {% endblock %}*/
/*                             </h4>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div class="box-body table-responsive no-padding">*/
/*                         <table class="table">*/
/*                             <tbody>*/
/*                             {% for field_name in view_group.fields %}*/
/*                                 {% block show_field %}*/
/*                                     <tr class="sonata-ba-view-container">*/
/*                                         {% if elements[field_name] is defined %}*/
/*                                             {{ elements[field_name]|render_view_element(object) }}*/
/*                                         {% endif %}*/
/*                                     </tr>*/
/*                                 {% endblock %}*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
