<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_4975d28f1ec37f4fffc83515a50eb7d4d658d9eff9d4bfc976b35fd2b12848e2 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6aae2466dcd0ab9505746c2cf5386eadc5ad8635bac4440c108272e0a163dcb4 = $this->env->getExtension("native_profiler");
        $__internal_6aae2466dcd0ab9505746c2cf5386eadc5ad8635bac4440c108272e0a163dcb4->enter($__internal_6aae2466dcd0ab9505746c2cf5386eadc5ad8635bac4440c108272e0a163dcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aae2466dcd0ab9505746c2cf5386eadc5ad8635bac4440c108272e0a163dcb4->leave($__internal_6aae2466dcd0ab9505746c2cf5386eadc5ad8635bac4440c108272e0a163dcb4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2739542b9c611206469710f31aa3c1fa10de35ca979c1fd9dbcc1d427b83e17f = $this->env->getExtension("native_profiler");
        $__internal_2739542b9c611206469710f31aa3c1fa10de35ca979c1fd9dbcc1d427b83e17f->enter($__internal_2739542b9c611206469710f31aa3c1fa10de35ca979c1fd9dbcc1d427b83e17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_2739542b9c611206469710f31aa3c1fa10de35ca979c1fd9dbcc1d427b83e17f->leave($__internal_2739542b9c611206469710f31aa3c1fa10de35ca979c1fd9dbcc1d427b83e17f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
