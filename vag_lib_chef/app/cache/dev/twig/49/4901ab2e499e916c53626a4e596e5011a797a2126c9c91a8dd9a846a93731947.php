<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_459be404866c88a56c849c5d7eab8a0bf2ba27bc45bdc59eaaf9c7cd63502c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8aeefd1c697c573d68cf6dd853ca59622ca4baa02c8345c855ef3f3187da5f66 = $this->env->getExtension("native_profiler");
        $__internal_8aeefd1c697c573d68cf6dd853ca59622ca4baa02c8345c855ef3f3187da5f66->enter($__internal_8aeefd1c697c573d68cf6dd853ca59622ca4baa02c8345c855ef3f3187da5f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aeefd1c697c573d68cf6dd853ca59622ca4baa02c8345c855ef3f3187da5f66->leave($__internal_8aeefd1c697c573d68cf6dd853ca59622ca4baa02c8345c855ef3f3187da5f66_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
