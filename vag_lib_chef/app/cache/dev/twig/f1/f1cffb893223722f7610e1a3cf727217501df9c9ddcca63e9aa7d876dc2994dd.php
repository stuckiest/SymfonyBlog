<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_c2e2d7cc7be9a5ea2aab56242c9d37cd28fbbe117dfd616af4a1efa9d96f02b0 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_172379706903423665872128902b01ea30483409c3a5bf9b303aa5229417c00e = $this->env->getExtension("native_profiler");
        $__internal_172379706903423665872128902b01ea30483409c3a5bf9b303aa5229417c00e->enter($__internal_172379706903423665872128902b01ea30483409c3a5bf9b303aa5229417c00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_172379706903423665872128902b01ea30483409c3a5bf9b303aa5229417c00e->leave($__internal_172379706903423665872128902b01ea30483409c3a5bf9b303aa5229417c00e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9db5cfce9971203238f9cf54954c653e0cb85c21a5af4d6f2ab49ed64939de93 = $this->env->getExtension("native_profiler");
        $__internal_9db5cfce9971203238f9cf54954c653e0cb85c21a5af4d6f2ab49ed64939de93->enter($__internal_9db5cfce9971203238f9cf54954c653e0cb85c21a5af4d6f2ab49ed64939de93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_9db5cfce9971203238f9cf54954c653e0cb85c21a5af4d6f2ab49ed64939de93->leave($__internal_9db5cfce9971203238f9cf54954c653e0cb85c21a5af4d6f2ab49ed64939de93_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
