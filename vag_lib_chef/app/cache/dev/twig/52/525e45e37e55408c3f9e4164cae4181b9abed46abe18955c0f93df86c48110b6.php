<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_a8f57310bf088ca07c7fc11bd5d448f7322f96ac2b17be353f3320a45a394618 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77008ac6fa66898884257071310bcc87631ef304a3b08bee219965458ae2fe2c = $this->env->getExtension("native_profiler");
        $__internal_77008ac6fa66898884257071310bcc87631ef304a3b08bee219965458ae2fe2c->enter($__internal_77008ac6fa66898884257071310bcc87631ef304a3b08bee219965458ae2fe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77008ac6fa66898884257071310bcc87631ef304a3b08bee219965458ae2fe2c->leave($__internal_77008ac6fa66898884257071310bcc87631ef304a3b08bee219965458ae2fe2c_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_019b943b894b1132d035b1da6d9a738d0031bcc4507046805cc79043d25ff9ec = $this->env->getExtension("native_profiler");
        $__internal_019b943b894b1132d035b1da6d9a738d0031bcc4507046805cc79043d25ff9ec->enter($__internal_019b943b894b1132d035b1da6d9a738d0031bcc4507046805cc79043d25ff9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_019b943b894b1132d035b1da6d9a738d0031bcc4507046805cc79043d25ff9ec->leave($__internal_019b943b894b1132d035b1da6d9a738d0031bcc4507046805cc79043d25ff9ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
