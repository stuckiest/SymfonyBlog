<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_6d5dba4323bc446fdf1a7d5d645dfc8fdb6c6a08cbc4cb6c7c38a2f61de7206b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_768cf5ccee8b9f4212cea6766efdb398ab4009a0683d220683eab84cf2591aa7 = $this->env->getExtension("native_profiler");
        $__internal_768cf5ccee8b9f4212cea6766efdb398ab4009a0683d220683eab84cf2591aa7->enter($__internal_768cf5ccee8b9f4212cea6766efdb398ab4009a0683d220683eab84cf2591aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_768cf5ccee8b9f4212cea6766efdb398ab4009a0683d220683eab84cf2591aa7->leave($__internal_768cf5ccee8b9f4212cea6766efdb398ab4009a0683d220683eab84cf2591aa7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e5bc315ae0fd5c8ab7146813d41f31d8af3201f13fd49822367d5bdea12e4b2c = $this->env->getExtension("native_profiler");
        $__internal_e5bc315ae0fd5c8ab7146813d41f31d8af3201f13fd49822367d5bdea12e4b2c->enter($__internal_e5bc315ae0fd5c8ab7146813d41f31d8af3201f13fd49822367d5bdea12e4b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e5bc315ae0fd5c8ab7146813d41f31d8af3201f13fd49822367d5bdea12e4b2c->leave($__internal_e5bc315ae0fd5c8ab7146813d41f31d8af3201f13fd49822367d5bdea12e4b2c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
