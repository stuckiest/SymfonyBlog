<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_6874fad0197d6223ebce6608523e6c51b3dc192ebfcd18aa2d2abc034c222e77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_253a876afdd3345d56c2cf01232eb90059a35b4b01f693cdbc069c145a2ce112 = $this->env->getExtension("native_profiler");
        $__internal_253a876afdd3345d56c2cf01232eb90059a35b4b01f693cdbc069c145a2ce112->enter($__internal_253a876afdd3345d56c2cf01232eb90059a35b4b01f693cdbc069c145a2ce112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_253a876afdd3345d56c2cf01232eb90059a35b4b01f693cdbc069c145a2ce112->leave($__internal_253a876afdd3345d56c2cf01232eb90059a35b4b01f693cdbc069c145a2ce112_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_764bbcdac1d28547a10f5ee0d2ed3964c7dda3d7544fb07e787d58f601b8dee1 = $this->env->getExtension("native_profiler");
        $__internal_764bbcdac1d28547a10f5ee0d2ed3964c7dda3d7544fb07e787d58f601b8dee1->enter($__internal_764bbcdac1d28547a10f5ee0d2ed3964c7dda3d7544fb07e787d58f601b8dee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_764bbcdac1d28547a10f5ee0d2ed3964c7dda3d7544fb07e787d58f601b8dee1->leave($__internal_764bbcdac1d28547a10f5ee0d2ed3964c7dda3d7544fb07e787d58f601b8dee1_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
