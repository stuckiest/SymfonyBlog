<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_1c0837c7dc0a1d20ba227df6c7bd7ea0f91bae3189fc59ccc27c9aa8c080e7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08898c76c6e31f926a56339523ff0849b81e2a31f8ee1ee1d05cbd43ee5d92e4 = $this->env->getExtension("native_profiler");
        $__internal_08898c76c6e31f926a56339523ff0849b81e2a31f8ee1ee1d05cbd43ee5d92e4->enter($__internal_08898c76c6e31f926a56339523ff0849b81e2a31f8ee1ee1d05cbd43ee5d92e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08898c76c6e31f926a56339523ff0849b81e2a31f8ee1ee1d05cbd43ee5d92e4->leave($__internal_08898c76c6e31f926a56339523ff0849b81e2a31f8ee1ee1d05cbd43ee5d92e4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
