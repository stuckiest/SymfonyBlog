<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_b63eaabbf3a28360fad6aea0d5e8ffad34c4e55f3aeb6e655e2dae8fe3f8c4ab extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8e48053d2a47e060d532f7a11addf17cc5573448a44c974b27e44ea54ebb192 = $this->env->getExtension("native_profiler");
        $__internal_c8e48053d2a47e060d532f7a11addf17cc5573448a44c974b27e44ea54ebb192->enter($__internal_c8e48053d2a47e060d532f7a11addf17cc5573448a44c974b27e44ea54ebb192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8e48053d2a47e060d532f7a11addf17cc5573448a44c974b27e44ea54ebb192->leave($__internal_c8e48053d2a47e060d532f7a11addf17cc5573448a44c974b27e44ea54ebb192_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4be22f5b5aec339fe74fe1a459219c8351fe69a0a0df01cca837373fe4bf5d1c = $this->env->getExtension("native_profiler");
        $__internal_4be22f5b5aec339fe74fe1a459219c8351fe69a0a0df01cca837373fe4bf5d1c->enter($__internal_4be22f5b5aec339fe74fe1a459219c8351fe69a0a0df01cca837373fe4bf5d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_4be22f5b5aec339fe74fe1a459219c8351fe69a0a0df01cca837373fe4bf5d1c->leave($__internal_4be22f5b5aec339fe74fe1a459219c8351fe69a0a0df01cca837373fe4bf5d1c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
