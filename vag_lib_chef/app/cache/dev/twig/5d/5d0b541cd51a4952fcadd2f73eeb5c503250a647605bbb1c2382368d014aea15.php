<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_394bb0c3a184ae87d744acb15c8182f225ea9cb7ae6ae33af3fac4e6b08ba5ce extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f3d324acc05e2c79ecad9efd858a2c5061630f4c438fe2e41ebd71c6927e829 = $this->env->getExtension("native_profiler");
        $__internal_8f3d324acc05e2c79ecad9efd858a2c5061630f4c438fe2e41ebd71c6927e829->enter($__internal_8f3d324acc05e2c79ecad9efd858a2c5061630f4c438fe2e41ebd71c6927e829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3d324acc05e2c79ecad9efd858a2c5061630f4c438fe2e41ebd71c6927e829->leave($__internal_8f3d324acc05e2c79ecad9efd858a2c5061630f4c438fe2e41ebd71c6927e829_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_81b03c93b30e64b3d205d2b9731ddf3a0a75cb3733b75aca02942f1896df95f0 = $this->env->getExtension("native_profiler");
        $__internal_81b03c93b30e64b3d205d2b9731ddf3a0a75cb3733b75aca02942f1896df95f0->enter($__internal_81b03c93b30e64b3d205d2b9731ddf3a0a75cb3733b75aca02942f1896df95f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_81b03c93b30e64b3d205d2b9731ddf3a0a75cb3733b75aca02942f1896df95f0->leave($__internal_81b03c93b30e64b3d205d2b9731ddf3a0a75cb3733b75aca02942f1896df95f0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
