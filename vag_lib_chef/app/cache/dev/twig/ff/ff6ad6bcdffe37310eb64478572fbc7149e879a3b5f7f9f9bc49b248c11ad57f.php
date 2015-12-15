<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_d8d02f4b6f748d8f5c3e28a0c8bfb2e62cc3b01323fe1ca0075d1a5f488a9961 extends Twig_Template
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
        $__internal_f856869f676c8c7c5770d6c5fcc6da63ad04e1e01989a905c8b1306c799f431e = $this->env->getExtension("native_profiler");
        $__internal_f856869f676c8c7c5770d6c5fcc6da63ad04e1e01989a905c8b1306c799f431e->enter($__internal_f856869f676c8c7c5770d6c5fcc6da63ad04e1e01989a905c8b1306c799f431e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_f856869f676c8c7c5770d6c5fcc6da63ad04e1e01989a905c8b1306c799f431e->leave($__internal_f856869f676c8c7c5770d6c5fcc6da63ad04e1e01989a905c8b1306c799f431e_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_44bdc7694f576abb6be83d14066da6a0d217c8ffe78d7200d780b14cf3bf152a = $this->env->getExtension("native_profiler");
        $__internal_44bdc7694f576abb6be83d14066da6a0d217c8ffe78d7200d780b14cf3bf152a->enter($__internal_44bdc7694f576abb6be83d14066da6a0d217c8ffe78d7200d780b14cf3bf152a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_44bdc7694f576abb6be83d14066da6a0d217c8ffe78d7200d780b14cf3bf152a->leave($__internal_44bdc7694f576abb6be83d14066da6a0d217c8ffe78d7200d780b14cf3bf152a_prof);

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
