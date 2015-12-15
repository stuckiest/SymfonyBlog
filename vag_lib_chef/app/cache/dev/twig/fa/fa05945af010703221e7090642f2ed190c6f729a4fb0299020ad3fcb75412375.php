<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_bfed5badf126200a0b2f23f05a112f2d6bae6041c8239e5b3056875275d8c182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_414a0d9dd0cde072e68607f0a9d26ff106bec0a6209b6d9a0c66113dd345b2b3 = $this->env->getExtension("native_profiler");
        $__internal_414a0d9dd0cde072e68607f0a9d26ff106bec0a6209b6d9a0c66113dd345b2b3->enter($__internal_414a0d9dd0cde072e68607f0a9d26ff106bec0a6209b6d9a0c66113dd345b2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_414a0d9dd0cde072e68607f0a9d26ff106bec0a6209b6d9a0c66113dd345b2b3->leave($__internal_414a0d9dd0cde072e68607f0a9d26ff106bec0a6209b6d9a0c66113dd345b2b3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
