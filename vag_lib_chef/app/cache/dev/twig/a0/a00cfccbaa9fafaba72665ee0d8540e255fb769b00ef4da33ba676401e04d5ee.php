<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_74d1aec82b2bbbcd2f81e0cb2b76876d6d0b06268841da78b1b8fce2e95e6e95 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d03e1a67335dd8a642c9d956dc49a350cd972df978462543c057fa29185776a = $this->env->getExtension("native_profiler");
        $__internal_7d03e1a67335dd8a642c9d956dc49a350cd972df978462543c057fa29185776a->enter($__internal_7d03e1a67335dd8a642c9d956dc49a350cd972df978462543c057fa29185776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d03e1a67335dd8a642c9d956dc49a350cd972df978462543c057fa29185776a->leave($__internal_7d03e1a67335dd8a642c9d956dc49a350cd972df978462543c057fa29185776a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b543793cad1ab7e70bd0c5066743b4a663481ec6a8f315ec82cf38a526bdcea3 = $this->env->getExtension("native_profiler");
        $__internal_b543793cad1ab7e70bd0c5066743b4a663481ec6a8f315ec82cf38a526bdcea3->enter($__internal_b543793cad1ab7e70bd0c5066743b4a663481ec6a8f315ec82cf38a526bdcea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_b543793cad1ab7e70bd0c5066743b4a663481ec6a8f315ec82cf38a526bdcea3->leave($__internal_b543793cad1ab7e70bd0c5066743b4a663481ec6a8f315ec82cf38a526bdcea3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
