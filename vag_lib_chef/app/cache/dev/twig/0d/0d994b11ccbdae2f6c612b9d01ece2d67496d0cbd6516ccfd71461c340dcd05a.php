<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_3ae4cb47098a312955ba1f53d3febf82d5c6cd459c44bdf6cf58054dcc0ed2aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee664e5d2ebb0a7d3b99187f928f23a1ba3368fd0ecd3e369995ead838c3d397 = $this->env->getExtension("native_profiler");
        $__internal_ee664e5d2ebb0a7d3b99187f928f23a1ba3368fd0ecd3e369995ead838c3d397->enter($__internal_ee664e5d2ebb0a7d3b99187f928f23a1ba3368fd0ecd3e369995ead838c3d397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee664e5d2ebb0a7d3b99187f928f23a1ba3368fd0ecd3e369995ead838c3d397->leave($__internal_ee664e5d2ebb0a7d3b99187f928f23a1ba3368fd0ecd3e369995ead838c3d397_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
