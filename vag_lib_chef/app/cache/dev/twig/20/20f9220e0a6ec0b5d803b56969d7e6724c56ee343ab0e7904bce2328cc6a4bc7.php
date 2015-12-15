<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_496f1a953ea481e2d7d63be86b682a945d7d3dc2878aeecbecb527c7cb5a8f5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_a5afe05342c3686dcbe5ddd07f509bd41f3f58cf5d6f73ad80b8ce3e1eca5c72 = $this->env->getExtension("native_profiler");
        $__internal_a5afe05342c3686dcbe5ddd07f509bd41f3f58cf5d6f73ad80b8ce3e1eca5c72->enter($__internal_a5afe05342c3686dcbe5ddd07f509bd41f3f58cf5d6f73ad80b8ce3e1eca5c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5afe05342c3686dcbe5ddd07f509bd41f3f58cf5d6f73ad80b8ce3e1eca5c72->leave($__internal_a5afe05342c3686dcbe5ddd07f509bd41f3f58cf5d6f73ad80b8ce3e1eca5c72_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d4e01cf3eb859bcd636d8f5b34bd0c7315f585afb77deb978991dabee46eb15e = $this->env->getExtension("native_profiler");
        $__internal_d4e01cf3eb859bcd636d8f5b34bd0c7315f585afb77deb978991dabee46eb15e->enter($__internal_d4e01cf3eb859bcd636d8f5b34bd0c7315f585afb77deb978991dabee46eb15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d4e01cf3eb859bcd636d8f5b34bd0c7315f585afb77deb978991dabee46eb15e->leave($__internal_d4e01cf3eb859bcd636d8f5b34bd0c7315f585afb77deb978991dabee46eb15e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
