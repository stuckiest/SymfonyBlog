<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_203ffe68c641dafee0838cbc8ae8f453e144c0bb641783a1a8eed619b537db5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81a668b8d8d33f39c5b61b6dcc6f55f56ac880c51b079f74fed6d4bf5b8b9cbe = $this->env->getExtension("native_profiler");
        $__internal_81a668b8d8d33f39c5b61b6dcc6f55f56ac880c51b079f74fed6d4bf5b8b9cbe->enter($__internal_81a668b8d8d33f39c5b61b6dcc6f55f56ac880c51b079f74fed6d4bf5b8b9cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_81a668b8d8d33f39c5b61b6dcc6f55f56ac880c51b079f74fed6d4bf5b8b9cbe->leave($__internal_81a668b8d8d33f39c5b61b6dcc6f55f56ac880c51b079f74fed6d4bf5b8b9cbe_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_094e14c4956ed787ffdea3381461d3b724a05b20422ca5ef6b6981d0d4642586 = $this->env->getExtension("native_profiler");
        $__internal_094e14c4956ed787ffdea3381461d3b724a05b20422ca5ef6b6981d0d4642586->enter($__internal_094e14c4956ed787ffdea3381461d3b724a05b20422ca5ef6b6981d0d4642586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_094e14c4956ed787ffdea3381461d3b724a05b20422ca5ef6b6981d0d4642586->leave($__internal_094e14c4956ed787ffdea3381461d3b724a05b20422ca5ef6b6981d0d4642586_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_cccde1adf48d4a27615a54ed38ba61ae2c8f40e57829b17f4e65284d1c81cb12 = $this->env->getExtension("native_profiler");
        $__internal_cccde1adf48d4a27615a54ed38ba61ae2c8f40e57829b17f4e65284d1c81cb12->enter($__internal_cccde1adf48d4a27615a54ed38ba61ae2c8f40e57829b17f4e65284d1c81cb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_cccde1adf48d4a27615a54ed38ba61ae2c8f40e57829b17f4e65284d1c81cb12->leave($__internal_cccde1adf48d4a27615a54ed38ba61ae2c8f40e57829b17f4e65284d1c81cb12_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_8358e38fc5e1a08a8dbf580a3d9d1ee8b25a405eef6496a73f1a6a5d5bfa923f = $this->env->getExtension("native_profiler");
        $__internal_8358e38fc5e1a08a8dbf580a3d9d1ee8b25a405eef6496a73f1a6a5d5bfa923f->enter($__internal_8358e38fc5e1a08a8dbf580a3d9d1ee8b25a405eef6496a73f1a6a5d5bfa923f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_8358e38fc5e1a08a8dbf580a3d9d1ee8b25a405eef6496a73f1a6a5d5bfa923f->leave($__internal_8358e38fc5e1a08a8dbf580a3d9d1ee8b25a405eef6496a73f1a6a5d5bfa923f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
