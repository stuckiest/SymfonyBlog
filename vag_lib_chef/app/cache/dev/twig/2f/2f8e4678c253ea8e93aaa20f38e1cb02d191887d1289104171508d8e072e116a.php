<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_5c593fc4edb850426a4db5d47a43066e7e68a7767ae36e096ac50c31c079b2bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1a288d9c3818ed9d4f13392a87ca63a0f0899897ff51f97d260e75b39092243 = $this->env->getExtension("native_profiler");
        $__internal_b1a288d9c3818ed9d4f13392a87ca63a0f0899897ff51f97d260e75b39092243->enter($__internal_b1a288d9c3818ed9d4f13392a87ca63a0f0899897ff51f97d260e75b39092243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a288d9c3818ed9d4f13392a87ca63a0f0899897ff51f97d260e75b39092243->leave($__internal_b1a288d9c3818ed9d4f13392a87ca63a0f0899897ff51f97d260e75b39092243_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
