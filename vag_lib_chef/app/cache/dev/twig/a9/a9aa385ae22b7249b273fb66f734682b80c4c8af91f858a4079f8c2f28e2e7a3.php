<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_ca04a597c9b3729ebf69456012ebefae9f7751c01563e5659cdb06bfc383b810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2870a08104aefce736d5522b7199cd35f6de3c70e9417ff7e901795eb0ad2f92 = $this->env->getExtension("native_profiler");
        $__internal_2870a08104aefce736d5522b7199cd35f6de3c70e9417ff7e901795eb0ad2f92->enter($__internal_2870a08104aefce736d5522b7199cd35f6de3c70e9417ff7e901795eb0ad2f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_2870a08104aefce736d5522b7199cd35f6de3c70e9417ff7e901795eb0ad2f92->leave($__internal_2870a08104aefce736d5522b7199cd35f6de3c70e9417ff7e901795eb0ad2f92_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_515a10b229705447ff229a409fb1b4bb9f1ae5c875508e0511118ecc543112e0 = $this->env->getExtension("native_profiler");
        $__internal_515a10b229705447ff229a409fb1b4bb9f1ae5c875508e0511118ecc543112e0->enter($__internal_515a10b229705447ff229a409fb1b4bb9f1ae5c875508e0511118ecc543112e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_515a10b229705447ff229a409fb1b4bb9f1ae5c875508e0511118ecc543112e0->leave($__internal_515a10b229705447ff229a409fb1b4bb9f1ae5c875508e0511118ecc543112e0_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_f2fea8d9e589b0aabfa87d0d94dcae4037f1d01e183bffdb3429f0be428c95c1 = $this->env->getExtension("native_profiler");
        $__internal_f2fea8d9e589b0aabfa87d0d94dcae4037f1d01e183bffdb3429f0be428c95c1->enter($__internal_f2fea8d9e589b0aabfa87d0d94dcae4037f1d01e183bffdb3429f0be428c95c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_f2fea8d9e589b0aabfa87d0d94dcae4037f1d01e183bffdb3429f0be428c95c1->leave($__internal_f2fea8d9e589b0aabfa87d0d94dcae4037f1d01e183bffdb3429f0be428c95c1_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_6873d980445e323e30d6ba9e8e91b95356704a7c2b0f32e072d6ab2cc130c75e = $this->env->getExtension("native_profiler");
        $__internal_6873d980445e323e30d6ba9e8e91b95356704a7c2b0f32e072d6ab2cc130c75e->enter($__internal_6873d980445e323e30d6ba9e8e91b95356704a7c2b0f32e072d6ab2cc130c75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_6873d980445e323e30d6ba9e8e91b95356704a7c2b0f32e072d6ab2cc130c75e->leave($__internal_6873d980445e323e30d6ba9e8e91b95356704a7c2b0f32e072d6ab2cc130c75e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
