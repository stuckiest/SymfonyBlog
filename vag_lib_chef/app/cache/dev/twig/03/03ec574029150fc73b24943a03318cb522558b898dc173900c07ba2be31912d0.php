<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_779d61ade178636513da1e5aa9764e50b49d860c2ed0434c36ab19df81bb85b3 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c2aba0519805ff7bdb48f54bce4219605ba6bb7efdf09554ae2c5065d7ff01f = $this->env->getExtension("native_profiler");
        $__internal_8c2aba0519805ff7bdb48f54bce4219605ba6bb7efdf09554ae2c5065d7ff01f->enter($__internal_8c2aba0519805ff7bdb48f54bce4219605ba6bb7efdf09554ae2c5065d7ff01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c2aba0519805ff7bdb48f54bce4219605ba6bb7efdf09554ae2c5065d7ff01f->leave($__internal_8c2aba0519805ff7bdb48f54bce4219605ba6bb7efdf09554ae2c5065d7ff01f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
