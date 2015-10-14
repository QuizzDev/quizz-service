<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_f4712c7c0b5bc9348218612f66b8e45a3db09ae8207c4fd13b25775b39419fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_522c3fd027d712a902878abe9ef1b0b854a2b8a6b04bcb029d5847931ddcab7c = $this->env->getExtension("native_profiler");
        $__internal_522c3fd027d712a902878abe9ef1b0b854a2b8a6b04bcb029d5847931ddcab7c->enter($__internal_522c3fd027d712a902878abe9ef1b0b854a2b8a6b04bcb029d5847931ddcab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_522c3fd027d712a902878abe9ef1b0b854a2b8a6b04bcb029d5847931ddcab7c->leave($__internal_522c3fd027d712a902878abe9ef1b0b854a2b8a6b04bcb029d5847931ddcab7c_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_9a19250fee0838efe24bbfa37080ff1adb01eb87b4a66399410f4f31f0666ee4 = $this->env->getExtension("native_profiler");
        $__internal_9a19250fee0838efe24bbfa37080ff1adb01eb87b4a66399410f4f31f0666ee4->enter($__internal_9a19250fee0838efe24bbfa37080ff1adb01eb87b4a66399410f4f31f0666ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_9a19250fee0838efe24bbfa37080ff1adb01eb87b4a66399410f4f31f0666ee4->leave($__internal_9a19250fee0838efe24bbfa37080ff1adb01eb87b4a66399410f4f31f0666ee4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
