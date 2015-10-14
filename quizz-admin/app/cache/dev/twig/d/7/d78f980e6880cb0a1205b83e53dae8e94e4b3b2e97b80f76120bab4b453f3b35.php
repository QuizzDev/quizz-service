<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_b7fd7d3df77051005a61829521e123ce1880896460c36eb642a9718db2d45d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fe2c2165f89e69c829821f3b3502e50cbc81155204f73fdf96ef6010eddbd2f = $this->env->getExtension("native_profiler");
        $__internal_6fe2c2165f89e69c829821f3b3502e50cbc81155204f73fdf96ef6010eddbd2f->enter($__internal_6fe2c2165f89e69c829821f3b3502e50cbc81155204f73fdf96ef6010eddbd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_6fe2c2165f89e69c829821f3b3502e50cbc81155204f73fdf96ef6010eddbd2f->leave($__internal_6fe2c2165f89e69c829821f3b3502e50cbc81155204f73fdf96ef6010eddbd2f_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
