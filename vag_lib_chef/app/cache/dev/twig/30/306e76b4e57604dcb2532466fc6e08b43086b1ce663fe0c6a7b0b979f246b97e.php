<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_5c649eaed7da400b32c4ec4aca8b2047e3a8466043133228b9e89444f56ec8ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_72f92376c602121e8737df99d2f3275c5fdcd72f5c9f53e39fc1154402413657 = $this->env->getExtension("native_profiler");
        $__internal_72f92376c602121e8737df99d2f3275c5fdcd72f5c9f53e39fc1154402413657->enter($__internal_72f92376c602121e8737df99d2f3275c5fdcd72f5c9f53e39fc1154402413657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72f92376c602121e8737df99d2f3275c5fdcd72f5c9f53e39fc1154402413657->leave($__internal_72f92376c602121e8737df99d2f3275c5fdcd72f5c9f53e39fc1154402413657_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fb045b642641999571c6531e20fd711b69db6d5076416e6e77036ea9c60eb777 = $this->env->getExtension("native_profiler");
        $__internal_fb045b642641999571c6531e20fd711b69db6d5076416e6e77036ea9c60eb777->enter($__internal_fb045b642641999571c6531e20fd711b69db6d5076416e6e77036ea9c60eb777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <i class=\"icon-ok-circle\"></i>";
            // line 18
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        } else {
            // line 20
            echo "        <i class=\"icon-ban-circle\"></i>";
            // line 21
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fb045b642641999571c6531e20fd711b69db6d5076416e6e77036ea9c60eb777->leave($__internal_fb045b642641999571c6531e20fd711b69db6d5076416e6e77036ea9c60eb777_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  50 => 20,  47 => 18,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <i class="icon-ok-circle"></i>*/
/*         {%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}*/
/*     {% else %}*/
/*         <i class="icon-ban-circle"></i>*/
/*         {%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
