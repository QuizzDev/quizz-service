<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_da449268f424b0ce11557f0a2bd2776c817ce5c85b8ae94089799e0cc837ee85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e176c28d8ff663d5773fde0abad212a7e92b0c6aa5b29522060080e76f15ea1 = $this->env->getExtension("native_profiler");
        $__internal_2e176c28d8ff663d5773fde0abad212a7e92b0c6aa5b29522060080e76f15ea1->enter($__internal_2e176c28d8ff663d5773fde0abad212a7e92b0c6aa5b29522060080e76f15ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_2e176c28d8ff663d5773fde0abad212a7e92b0c6aa5b29522060080e76f15ea1->leave($__internal_2e176c28d8ff663d5773fde0abad212a7e92b0c6aa5b29522060080e76f15ea1_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_5572bc05be127f83a982316680042daf32d0faefbdd8dab7d10160191b7f118f = $this->env->getExtension("native_profiler");
        $__internal_5572bc05be127f83a982316680042daf32d0faefbdd8dab7d10160191b7f118f->enter($__internal_5572bc05be127f83a982316680042daf32d0faefbdd8dab7d10160191b7f118f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_5572bc05be127f83a982316680042daf32d0faefbdd8dab7d10160191b7f118f->leave($__internal_5572bc05be127f83a982316680042daf32d0faefbdd8dab7d10160191b7f118f_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
