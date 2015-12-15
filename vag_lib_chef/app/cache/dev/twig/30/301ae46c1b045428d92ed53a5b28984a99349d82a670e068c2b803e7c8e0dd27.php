<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_2a27621cd5669808d97eabdf1b827d639687640500d8b6e7921782fe320df0ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69e83b7fab49018f42658ccf66fe6bd5328f84ad5717fd09fa669dba6c13a3a2 = $this->env->getExtension("native_profiler");
        $__internal_69e83b7fab49018f42658ccf66fe6bd5328f84ad5717fd09fa669dba6c13a3a2->enter($__internal_69e83b7fab49018f42658ccf66fe6bd5328f84ad5717fd09fa669dba6c13a3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e83b7fab49018f42658ccf66fe6bd5328f84ad5717fd09fa669dba6c13a3a2->leave($__internal_69e83b7fab49018f42658ccf66fe6bd5328f84ad5717fd09fa669dba6c13a3a2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c03c15f006d19221784d86995cdb140149f46ae235a28720e13540f4c3f2377e = $this->env->getExtension("native_profiler");
        $__internal_c03c15f006d19221784d86995cdb140149f46ae235a28720e13540f4c3f2377e->enter($__internal_c03c15f006d19221784d86995cdb140149f46ae235a28720e13540f4c3f2377e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c03c15f006d19221784d86995cdb140149f46ae235a28720e13540f4c3f2377e->leave($__internal_c03c15f006d19221784d86995cdb140149f46ae235a28720e13540f4c3f2377e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
