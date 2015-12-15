<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_61bab4ebb64dda5e3376de441f497d1a7cd9ba4a0b6ec1c3b1eaef115bb1c961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0168a5f0ac27066935dbcef422d464268e5c9f0af2d50375395ddad47668066 = $this->env->getExtension("native_profiler");
        $__internal_d0168a5f0ac27066935dbcef422d464268e5c9f0af2d50375395ddad47668066->enter($__internal_d0168a5f0ac27066935dbcef422d464268e5c9f0af2d50375395ddad47668066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0168a5f0ac27066935dbcef422d464268e5c9f0af2d50375395ddad47668066->leave($__internal_d0168a5f0ac27066935dbcef422d464268e5c9f0af2d50375395ddad47668066_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
