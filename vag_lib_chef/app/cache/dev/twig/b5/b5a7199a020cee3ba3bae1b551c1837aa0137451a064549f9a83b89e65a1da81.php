<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_8cbb62fb7ababe179768a7d4c57dd64057d6a6becd0758140c46ac9926472ef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4da48b36cf03acad5d9b3c2bf57f2bf9101feac2c11973b3dd5419ac4f90b4e6 = $this->env->getExtension("native_profiler");
        $__internal_4da48b36cf03acad5d9b3c2bf57f2bf9101feac2c11973b3dd5419ac4f90b4e6->enter($__internal_4da48b36cf03acad5d9b3c2bf57f2bf9101feac2c11973b3dd5419ac4f90b4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4da48b36cf03acad5d9b3c2bf57f2bf9101feac2c11973b3dd5419ac4f90b4e6->leave($__internal_4da48b36cf03acad5d9b3c2bf57f2bf9101feac2c11973b3dd5419ac4f90b4e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
