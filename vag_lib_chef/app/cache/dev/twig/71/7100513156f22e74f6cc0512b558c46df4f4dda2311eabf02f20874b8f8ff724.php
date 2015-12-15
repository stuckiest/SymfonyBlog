<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_4336935630ffe69fc597181eab4ab359588d4199a9c01b39329e324acd2d7a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_c1a0e380f39d8917b16173afc81e3ad241b35bb384e92e94cf3d197e75f7058c = $this->env->getExtension("native_profiler");
        $__internal_c1a0e380f39d8917b16173afc81e3ad241b35bb384e92e94cf3d197e75f7058c->enter($__internal_c1a0e380f39d8917b16173afc81e3ad241b35bb384e92e94cf3d197e75f7058c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a0e380f39d8917b16173afc81e3ad241b35bb384e92e94cf3d197e75f7058c->leave($__internal_c1a0e380f39d8917b16173afc81e3ad241b35bb384e92e94cf3d197e75f7058c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b70d3f893976d84bc16385565856cbc03a5c59cff1f2b738fa9b43ce9731d403 = $this->env->getExtension("native_profiler");
        $__internal_b70d3f893976d84bc16385565856cbc03a5c59cff1f2b738fa9b43ce9731d403->enter($__internal_b70d3f893976d84bc16385565856cbc03a5c59cff1f2b738fa9b43ce9731d403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_b70d3f893976d84bc16385565856cbc03a5c59cff1f2b738fa9b43ce9731d403->leave($__internal_b70d3f893976d84bc16385565856cbc03a5c59cff1f2b738fa9b43ce9731d403_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
