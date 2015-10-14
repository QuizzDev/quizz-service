<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_101846915b50fe2f16700da5288e33358a181faffef592ecd0a1fca611714550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a71da09925182afb01d944617aab3e66ae8ae7a89d02d5efe205173b837cdda = $this->env->getExtension("native_profiler");
        $__internal_7a71da09925182afb01d944617aab3e66ae8ae7a89d02d5efe205173b837cdda->enter($__internal_7a71da09925182afb01d944617aab3e66ae8ae7a89d02d5efe205173b837cdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a71da09925182afb01d944617aab3e66ae8ae7a89d02d5efe205173b837cdda->leave($__internal_7a71da09925182afb01d944617aab3e66ae8ae7a89d02d5efe205173b837cdda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_888ebbd83fe5739d62fbaa850df1ab27e719d3f18a6b94ad764a1308f23e4ebe = $this->env->getExtension("native_profiler");
        $__internal_888ebbd83fe5739d62fbaa850df1ab27e719d3f18a6b94ad764a1308f23e4ebe->enter($__internal_888ebbd83fe5739d62fbaa850df1ab27e719d3f18a6b94ad764a1308f23e4ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_888ebbd83fe5739d62fbaa850df1ab27e719d3f18a6b94ad764a1308f23e4ebe->leave($__internal_888ebbd83fe5739d62fbaa850df1ab27e719d3f18a6b94ad764a1308f23e4ebe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0575a1d5c8acf0a483d7b4219457177aeb9ee549a17c348bfd667b97733214a1 = $this->env->getExtension("native_profiler");
        $__internal_0575a1d5c8acf0a483d7b4219457177aeb9ee549a17c348bfd667b97733214a1->enter($__internal_0575a1d5c8acf0a483d7b4219457177aeb9ee549a17c348bfd667b97733214a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0575a1d5c8acf0a483d7b4219457177aeb9ee549a17c348bfd667b97733214a1->leave($__internal_0575a1d5c8acf0a483d7b4219457177aeb9ee549a17c348bfd667b97733214a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccec5cad6fe49c680d663810737070a78e96c060abf2e498c19db5fe4879fb2c = $this->env->getExtension("native_profiler");
        $__internal_ccec5cad6fe49c680d663810737070a78e96c060abf2e498c19db5fe4879fb2c->enter($__internal_ccec5cad6fe49c680d663810737070a78e96c060abf2e498c19db5fe4879fb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ccec5cad6fe49c680d663810737070a78e96c060abf2e498c19db5fe4879fb2c->leave($__internal_ccec5cad6fe49c680d663810737070a78e96c060abf2e498c19db5fe4879fb2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
