<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_bf518fac581e76b612ffce313f4b5bb0fcd9fcbd230e49397667ba44c8001d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a37e9f69a6ed201326880e5047aed9f2171809bd8e5d8c5c9a4c0575c203d389 = $this->env->getExtension("native_profiler");
        $__internal_a37e9f69a6ed201326880e5047aed9f2171809bd8e5d8c5c9a4c0575c203d389->enter($__internal_a37e9f69a6ed201326880e5047aed9f2171809bd8e5d8c5c9a4c0575c203d389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a37e9f69a6ed201326880e5047aed9f2171809bd8e5d8c5c9a4c0575c203d389->leave($__internal_a37e9f69a6ed201326880e5047aed9f2171809bd8e5d8c5c9a4c0575c203d389_prof);

    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        $__internal_33098536300d27a25c1afe5e8fdbeff91f668811cc8ccb05b66078132ee36c36 = $this->env->getExtension("native_profiler");
        $__internal_33098536300d27a25c1afe5e8fdbeff91f668811cc8ccb05b66078132ee36c36->enter($__internal_33098536300d27a25c1afe5e8fdbeff91f668811cc8ccb05b66078132ee36c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        // line 17
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 17)->display($context);
        
        $__internal_33098536300d27a25c1afe5e8fdbeff91f668811cc8ccb05b66078132ee36c36->leave($__internal_33098536300d27a25c1afe5e8fdbeff91f668811cc8ccb05b66078132ee36c36_prof);

    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        $__internal_c3c3d28d47cdecde2e664e6e809ac4aa17b7ffb79988b8f39f29320a6cfee697 = $this->env->getExtension("native_profiler");
        $__internal_c3c3d28d47cdecde2e664e6e809ac4aa17b7ffb79988b8f39f29320a6cfee697->enter($__internal_c3c3d28d47cdecde2e664e6e809ac4aa17b7ffb79988b8f39f29320a6cfee697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        // line 21
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 21)->display($context);
        
        $__internal_c3c3d28d47cdecde2e664e6e809ac4aa17b7ffb79988b8f39f29320a6cfee697->leave($__internal_c3c3d28d47cdecde2e664e6e809ac4aa17b7ffb79988b8f39f29320a6cfee697_prof);

    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        $__internal_b2ef2525c49b04864559c71181fce24b1a6564f6066df0b464d4367afafc7d20 = $this->env->getExtension("native_profiler");
        $__internal_b2ef2525c49b04864559c71181fce24b1a6564f6066df0b464d4367afafc7d20->enter($__internal_b2ef2525c49b04864559c71181fce24b1a6564f6066df0b464d4367afafc7d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        // line 25
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 25)->display($context);
        
        $__internal_b2ef2525c49b04864559c71181fce24b1a6564f6066df0b464d4367afafc7d20->leave($__internal_b2ef2525c49b04864559c71181fce24b1a6564f6066df0b464d4367afafc7d20_prof);

    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        $__internal_07f5efa8901804aeff792614273971aa4a5bd41a88cc6db925423fd6f29afdaf = $this->env->getExtension("native_profiler");
        $__internal_07f5efa8901804aeff792614273971aa4a5bd41a88cc6db925423fd6f29afdaf->enter($__internal_07f5efa8901804aeff792614273971aa4a5bd41a88cc6db925423fd6f29afdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        // line 29
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 29)->display($context);
        
        $__internal_07f5efa8901804aeff792614273971aa4a5bd41a88cc6db925423fd6f29afdaf->leave($__internal_07f5efa8901804aeff792614273971aa4a5bd41a88cc6db925423fd6f29afdaf_prof);

    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_5215f483a8e8653cafb246f981c4fdf3ff535e3dbffc43a3498dc8e11fde28ce = $this->env->getExtension("native_profiler");
        $__internal_5215f483a8e8653cafb246f981c4fdf3ff535e3dbffc43a3498dc8e11fde28ce->enter($__internal_5215f483a8e8653cafb246f981c4fdf3ff535e3dbffc43a3498dc8e11fde28ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 42
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 44
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 48
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5215f483a8e8653cafb246f981c4fdf3ff535e3dbffc43a3498dc8e11fde28ce->leave($__internal_5215f483a8e8653cafb246f981c4fdf3ff535e3dbffc43a3498dc8e11fde28ce_prof);

    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_45146e3823d6c14194d9d7ef8eb3b696c4f8ae5eca324685b6035adb447d83ff = $this->env->getExtension("native_profiler");
        $__internal_45146e3823d6c14194d9d7ef8eb3b696c4f8ae5eca324685b6035adb447d83ff->enter($__internal_45146e3823d6c14194d9d7ef8eb3b696c4f8ae5eca324685b6035adb447d83ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method")) {
            // line 60
            echo "                ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getPath("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 61
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 62
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "link_parameters", array()))), array());
            // line 66
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 67
            echo "                <span class=\"inner-field-short-description\">
                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </span>
            ";
        }
        // line 71
        echo "        </span>
        <span id=\"field_actions_";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
        // line 74
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 75
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 84
        echo "
                ";
        // line 85
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 86
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 95
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 98
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 99
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 108
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 113
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("required" => false));
        echo "
        </span>

        ";
        // line 116
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 132
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 132)->display($context);
        
        $__internal_45146e3823d6c14194d9d7ef8eb3b696c4f8ae5eca324685b6035adb447d83ff->leave($__internal_45146e3823d6c14194d9d7ef8eb3b696c4f8ae5eca324685b6035adb447d83ff_prof);

    }

    // line 135
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_5ab02551a8ab48cc110dbcd314072cbbc15e3846ca68751105a0beac66f0310d = $this->env->getExtension("native_profiler");
        $__internal_5ab02551a8ab48cc110dbcd314072cbbc15e3846ca68751105a0beac66f0310d->enter($__internal_5ab02551a8ab48cc110dbcd314072cbbc15e3846ca68751105a0beac66f0310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        // line 136
        echo "    ";
        // line 137
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 138
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 139
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 140
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 141
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 142
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 143
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 144
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 146
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_5ab02551a8ab48cc110dbcd314072cbbc15e3846ca68751105a0beac66f0310d->leave($__internal_5ab02551a8ab48cc110dbcd314072cbbc15e3846ca68751105a0beac66f0310d_prof);

    }

    // line 150
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_1b741ec0a6bb8b1d44f6180648a65aec8321649784cd7772a55db5be3f707813 = $this->env->getExtension("native_profiler");
        $__internal_1b741ec0a6bb8b1d44f6180648a65aec8321649784cd7772a55db5be3f707813->enter($__internal_1b741ec0a6bb8b1d44f6180648a65aec8321649784cd7772a55db5be3f707813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        // line 151
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 152
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 153
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 154
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 156
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_1b741ec0a6bb8b1d44f6180648a65aec8321649784cd7772a55db5be3f707813->leave($__internal_1b741ec0a6bb8b1d44f6180648a65aec8321649784cd7772a55db5be3f707813_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 156,  389 => 154,  387 => 153,  382 => 152,  379 => 151,  373 => 150,  362 => 146,  356 => 144,  354 => 143,  349 => 142,  347 => 141,  342 => 140,  340 => 139,  335 => 138,  332 => 137,  330 => 136,  324 => 135,  317 => 132,  300 => 118,  295 => 116,  288 => 113,  282 => 108,  276 => 105,  270 => 102,  265 => 100,  262 => 99,  260 => 98,  255 => 95,  249 => 92,  243 => 89,  238 => 87,  233 => 86,  231 => 85,  228 => 84,  222 => 81,  216 => 78,  211 => 76,  206 => 75,  204 => 74,  199 => 72,  196 => 71,  190 => 68,  187 => 67,  184 => 66,  182 => 64,  181 => 63,  180 => 62,  179 => 61,  177 => 60,  175 => 59,  171 => 58,  166 => 57,  160 => 56,  149 => 52,  147 => 51,  141 => 49,  139 => 48,  134 => 47,  132 => 46,  127 => 45,  125 => 44,  120 => 43,  118 => 42,  113 => 41,  111 => 40,  108 => 39,  105 => 37,  103 => 33,  97 => 32,  89 => 29,  83 => 28,  75 => 25,  69 => 24,  61 => 21,  55 => 20,  47 => 17,  41 => 16,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:Form:form_admin_fields.html.twig' %}*/
/* */
/* */
/* {# Custom Sonata Admin Extension #}*/
/* {% block sonata_admin_orm_one_to_one_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_orm_many_to_many_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_orm_many_to_one_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_orm_one_to_many_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_widget %}*/
/*     {#*/
/*         This is not the best way to do if*/
/*         TODO : improve this part*/
/*     #}*/
/* */
/*     {#model {{ sonata_admin.field_description.mappingtype }}#}*/
/* */
/*     {% if sonata_admin.field_description is empty %}*/
/*         {{ block('choice_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_one_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_many_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_many_to_many_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_one_to_many_widget') }}*/
/*     {% else %}*/
/*         {#INVALID MODE : {{ id }}#}*/
/*         {{ block('choice_widget') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_list_widget %}*/
/*     <div id="field_container_{{ id }}" class="field-container">*/
/*         <span id="field_widget_{{ id }}" class="field-short-description">*/
/*             {% if sonata_admin.field_description.associationadmin.id(sonata_admin.value) %}*/
/*                 {% render path('sonata_admin_short_object_information', {*/
/*                     'code':     sonata_admin.field_description.associationadmin.code,*/
/*                     'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),*/
/*                     'uniqid':   sonata_admin.field_description.associationadmin.uniqid,*/
/*                     'linkParameters': sonata_admin.field_description.options.link_parameters*/
/*                 }) %}*/
/*             {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}*/
/*                 <span class="inner-field-short-description">*/
/*                     {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}*/
/*                 </span>*/
/*             {% endif %}*/
/*         </span>*/
/*         <span id="field_actions_{{ id }}" class="field-actions">*/
/*             <span class="btn-group">*/
/*                 {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}*/
/*                     <a  href="{{ sonata_admin.field_description.associationadmin.generateUrl('list') }}"*/
/*                         onclick="return start_field_dialog_form_list_{{ id }}(this);"*/
/*                         class="btn btn-info btn-sm sonata-ba-action"*/
/*                         title="{{ btn_list|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                         <i class="fa fa-list"></i>*/
/*                         {{ btn_list|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 {% endif %}*/
/* */
/*                 {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}*/
/*                     <a  href="{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}"*/
/*                         onclick="return start_field_dialog_form_add_{{ id }}(this);"*/
/*                         class="btn btn-success btn-sm sonata-ba-action"*/
/*                         title="{{ btn_add|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                         <i class="fa fa-plus-circle"></i>*/
/*                         {{ btn_add|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </span>*/
/* */
/*             <span class="btn-group">*/
/*                 {% if sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}*/
/*                     <a  href=""*/
/*                         onclick="return remove_selected_element_{{ id }}(this);"*/
/*                         class="btn btn-danger btn-sm sonata-ba-action"*/
/*                         title="{{ btn_delete|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                         <i class="fa fa-minus-circle"></i>*/
/*                         {{ btn_delete|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </span>*/
/*         </span>*/
/* */
/*         <span style="display: none" >*/
/*             {# Hidden text input cannot be required, because browser will throw error "An invalid form control with name='' is not focusable"  #}*/
/*             {{ form_widget(form, {'required':false}) }}*/
/*         </span>*/
/* */
/*         {{ block('sonata_help') }}*/
/* */
/*         <div class="modal fade" id="field_dialog_{{ id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             <div class="modal-dialog modal-lg">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title"></h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_admin_widget %}*/
/*     {#admin {{ sonata_admin.field_description.mappingtype }}#}*/
/*     {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_one_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_many_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_many_to_many_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_one_to_many_widget') }}*/
/*     {% else %}*/
/*         INVALID MODE : {{ id }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_collection_widget %}*/
/*     {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_one_to_many_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_many_to_many_widget') }}*/
/*     {% else %}*/
/*         INVALID MODE : {{ id }} - type : sonata_type_collection - mapping : {{ sonata_admin.field_description.mappingtype }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
