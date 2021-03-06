<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_04af391fa7bc0251fbdd8add4717f91e923d564fde144769edc92e46fb67e605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7be454a800cb67fc6cc92aec81d790376553231d963b100725ff26faa96d79b = $this->env->getExtension("native_profiler");
        $__internal_c7be454a800cb67fc6cc92aec81d790376553231d963b100725ff26faa96d79b->enter($__internal_c7be454a800cb67fc6cc92aec81d790376553231d963b100725ff26faa96d79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7be454a800cb67fc6cc92aec81d790376553231d963b100725ff26faa96d79b->leave($__internal_c7be454a800cb67fc6cc92aec81d790376553231d963b100725ff26faa96d79b_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_39b6d95471073e5b9e276eb2692fbc3e4fb45239b359fbebe6a35614ea421256 = $this->env->getExtension("native_profiler");
        $__internal_39b6d95471073e5b9e276eb2692fbc3e4fb45239b359fbebe6a35614ea421256->enter($__internal_39b6d95471073e5b9e276eb2692fbc3e4fb45239b359fbebe6a35614ea421256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-title\">
        <th colspan=\"3\">
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
        </th>
    </tr>
";
        
        $__internal_39b6d95471073e5b9e276eb2692fbc3e4fb45239b359fbebe6a35614ea421256->leave($__internal_39b6d95471073e5b9e276eb2692fbc3e4fb45239b359fbebe6a35614ea421256_prof);

    }

    // line 22
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_231ec9a33e77e0bf2bc4223dde39abf8900b1b19610fefecc0f97e222547a898 = $this->env->getExtension("native_profiler");
        $__internal_231ec9a33e77e0bf2bc4223dde39abf8900b1b19610fefecc0f97e222547a898->enter($__internal_231ec9a33e77e0bf2bc4223dde39abf8900b1b19610fefecc0f97e222547a898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 23
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 24
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 25
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 27
        echo "    </tr>
";
        
        $__internal_231ec9a33e77e0bf2bc4223dde39abf8900b1b19610fefecc0f97e222547a898->leave($__internal_231ec9a33e77e0bf2bc4223dde39abf8900b1b19610fefecc0f97e222547a898_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  65 => 24,  62 => 23,  56 => 22,  45 => 17,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% block show_title %}*/
/*     <tr class="sonata-ba-view-title">*/
/*         <th colspan="3">*/
/*             {{ admin.trans(name) }}*/
/*         </th>*/
/*     </tr>*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
