<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_2a84221e2a80addce19931177f1fce9748224791cbc73432b3bec12ed3393e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_254f3d3657aec68c5151337cb28fa402a18ed636d982cac74de7a88c047229a2 = $this->env->getExtension("native_profiler");
        $__internal_254f3d3657aec68c5151337cb28fa402a18ed636d982cac74de7a88c047229a2->enter($__internal_254f3d3657aec68c5151337cb28fa402a18ed636d982cac74de7a88c047229a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254f3d3657aec68c5151337cb28fa402a18ed636d982cac74de7a88c047229a2->leave($__internal_254f3d3657aec68c5151337cb28fa402a18ed636d982cac74de7a88c047229a2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d5a6e9fe3194f0c46704f2f6789e49f3ba22181a6fcbbadc1d103fec67719135 = $this->env->getExtension("native_profiler");
        $__internal_d5a6e9fe3194f0c46704f2f6789e49f3ba22181a6fcbbadc1d103fec67719135->enter($__internal_d5a6e9fe3194f0c46704f2f6789e49f3ba22181a6fcbbadc1d103fec67719135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_d5a6e9fe3194f0c46704f2f6789e49f3ba22181a6fcbbadc1d103fec67719135->leave($__internal_d5a6e9fe3194f0c46704f2f6789e49f3ba22181a6fcbbadc1d103fec67719135_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
