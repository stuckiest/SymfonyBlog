<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_5fdccb3c9b37238b6fb82f8884bf5c8e617c2abe5cdf779e39bfcaba1993c5c1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68ed79ec7e2b69474d58545f0f686b3bc7167b0d9f680f660cff5f90d84e4b98 = $this->env->getExtension("native_profiler");
        $__internal_68ed79ec7e2b69474d58545f0f686b3bc7167b0d9f680f660cff5f90d84e4b98->enter($__internal_68ed79ec7e2b69474d58545f0f686b3bc7167b0d9f680f660cff5f90d84e4b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68ed79ec7e2b69474d58545f0f686b3bc7167b0d9f680f660cff5f90d84e4b98->leave($__internal_68ed79ec7e2b69474d58545f0f686b3bc7167b0d9f680f660cff5f90d84e4b98_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_404ea75b13faa904cb83ace827882f58c028acbcc27e3fd6e8122e90c5ddcf12 = $this->env->getExtension("native_profiler");
        $__internal_404ea75b13faa904cb83ace827882f58c028acbcc27e3fd6e8122e90c5ddcf12->enter($__internal_404ea75b13faa904cb83ace827882f58c028acbcc27e3fd6e8122e90c5ddcf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_404ea75b13faa904cb83ace827882f58c028acbcc27e3fd6e8122e90c5ddcf12->leave($__internal_404ea75b13faa904cb83ace827882f58c028acbcc27e3fd6e8122e90c5ddcf12_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
