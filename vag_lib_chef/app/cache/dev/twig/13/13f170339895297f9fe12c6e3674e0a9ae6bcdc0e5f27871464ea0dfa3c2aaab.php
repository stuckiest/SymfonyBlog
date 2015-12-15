<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_df6287fbae144f7e406e151b60b562b9cfe4b1b9353b8d19b42275a732cb8bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46161b9e97b05b0df1af8f04ef86034c06f2ba594aa15d150a99de3e3caa8782 = $this->env->getExtension("native_profiler");
        $__internal_46161b9e97b05b0df1af8f04ef86034c06f2ba594aa15d150a99de3e3caa8782->enter($__internal_46161b9e97b05b0df1af8f04ef86034c06f2ba594aa15d150a99de3e3caa8782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46161b9e97b05b0df1af8f04ef86034c06f2ba594aa15d150a99de3e3caa8782->leave($__internal_46161b9e97b05b0df1af8f04ef86034c06f2ba594aa15d150a99de3e3caa8782_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
