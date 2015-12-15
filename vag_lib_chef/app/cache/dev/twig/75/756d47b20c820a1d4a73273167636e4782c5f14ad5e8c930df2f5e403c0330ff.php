<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_5b6a577617781fc610228e37119dde54443904983989a864fd10aae9a26c9052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_239391bbd766ea805e4822a87b938ddcb13d70946e96eeec2ad2fbedf90b858c = $this->env->getExtension("native_profiler");
        $__internal_239391bbd766ea805e4822a87b938ddcb13d70946e96eeec2ad2fbedf90b858c->enter($__internal_239391bbd766ea805e4822a87b938ddcb13d70946e96eeec2ad2fbedf90b858c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_239391bbd766ea805e4822a87b938ddcb13d70946e96eeec2ad2fbedf90b858c->leave($__internal_239391bbd766ea805e4822a87b938ddcb13d70946e96eeec2ad2fbedf90b858c_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_ac468d20aaa9dc283a92460dab8ffb6b378a2d427a5376e9a875022934d758c4 = $this->env->getExtension("native_profiler");
        $__internal_ac468d20aaa9dc283a92460dab8ffb6b378a2d427a5376e9a875022934d758c4->enter($__internal_ac468d20aaa9dc283a92460dab8ffb6b378a2d427a5376e9a875022934d758c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 48
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 54
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 60
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if ((isset($context["divider_append"]) ? $context["divider_append"] : $this->getContext($context, "divider_append"))) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_ac468d20aaa9dc283a92460dab8ffb6b378a2d427a5376e9a875022934d758c4->leave($__internal_ac468d20aaa9dc283a92460dab8ffb6b378a2d427a5376e9a875022934d758c4_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_361b32557039567109361bfbf789f7231b786d015efd779f623777e8396a1e64 = $this->env->getExtension("native_profiler");
        $__internal_361b32557039567109361bfbf789f7231b786d015efd779f623777e8396a1e64->enter($__internal_361b32557039567109361bfbf789f7231b786d015efd779f623777e8396a1e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_361b32557039567109361bfbf789f7231b786d015efd779f623777e8396a1e64->leave($__internal_361b32557039567109361bfbf789f7231b786d015efd779f623777e8396a1e64_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_a05679ad429e7dd72bb8c2b06cc6241b0dbfa0c14ae5e7b1015324e063455e43 = $this->env->getExtension("native_profiler");
        $__internal_a05679ad429e7dd72bb8c2b06cc6241b0dbfa0c14ae5e7b1015324e063455e43->enter($__internal_a05679ad429e7dd72bb8c2b06cc6241b0dbfa0c14ae5e7b1015324e063455e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), "method");
        echo ">
        ";
        // line 87
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 88
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 90
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_a05679ad429e7dd72bb8c2b06cc6241b0dbfa0c14ae5e7b1015324e063455e43->leave($__internal_a05679ad429e7dd72bb8c2b06cc6241b0dbfa0c14ae5e7b1015324e063455e43_prof);

    }

    // line 94
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_6d58b720ac4b2e229d839aa23dd6c8b8f64d29c4c81e8114ca0c4c1bc2715592 = $this->env->getExtension("native_profiler");
        $__internal_6d58b720ac4b2e229d839aa23dd6c8b8f64d29c4c81e8114ca0c4c1bc2715592->enter($__internal_6d58b720ac4b2e229d839aa23dd6c8b8f64d29c4c81e8114ca0c4c1bc2715592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 95
        echo "    <span ";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), "method");
        echo ">
        ";
        // line 96
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 97
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 99
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_6d58b720ac4b2e229d839aa23dd6c8b8f64d29c4c81e8114ca0c4c1bc2715592->leave($__internal_6d58b720ac4b2e229d839aa23dd6c8b8f64d29c4c81e8114ca0c4c1bc2715592_prof);

    }

    // line 103
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_b909bde94420d3a51333b7262afddf4e19485e2564a491d90024587172c7bcf2 = $this->env->getExtension("native_profiler");
        $__internal_b909bde94420d3a51333b7262afddf4e19485e2564a491d90024587172c7bcf2->enter($__internal_b909bde94420d3a51333b7262afddf4e19485e2564a491d90024587172c7bcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 104
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 105
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 106
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 107
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 108
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 109
        echo "    <a href=\"#\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 110
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 111
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 113
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_b909bde94420d3a51333b7262afddf4e19485e2564a491d90024587172c7bcf2->leave($__internal_b909bde94420d3a51333b7262afddf4e19485e2564a491d90024587172c7bcf2_prof);

    }

    // line 118
    public function block_label($context, array $blocks = array())
    {
        $__internal_38cbb2e079480c674c1e07a39391864f346a3ce2fe8224892b86d819358de132 = $this->env->getExtension("native_profiler");
        $__internal_38cbb2e079480c674c1e07a39391864f346a3ce2fe8224892b86d819358de132->enter($__internal_38cbb2e079480c674c1e07a39391864f346a3ce2fe8224892b86d819358de132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
        
        $__internal_38cbb2e079480c674c1e07a39391864f346a3ce2fe8224892b86d819358de132->leave($__internal_38cbb2e079480c674c1e07a39391864f346a3ce2fe8224892b86d819358de132_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 118,  286 => 113,  280 => 111,  278 => 110,  273 => 109,  271 => 108,  269 => 107,  267 => 106,  265 => 105,  263 => 104,  257 => 103,  246 => 99,  240 => 97,  238 => 96,  233 => 95,  227 => 94,  216 => 90,  210 => 88,  208 => 87,  201 => 86,  195 => 85,  186 => 81,  182 => 79,  180 => 78,  174 => 77,  164 => 72,  162 => 71,  157 => 68,  153 => 65,  149 => 63,  147 => 62,  144 => 61,  142 => 60,  138 => 59,  135 => 57,  133 => 56,  130 => 54,  128 => 53,  125 => 51,  122 => 49,  120 => 48,  118 => 47,  115 => 45,  113 => 44,  111 => 43,  108 => 41,  105 => 39,  103 => 38,  100 => 36,  98 => 35,  94 => 31,  92 => 30,  90 => 29,  88 => 28,  86 => 27,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  73 => 21,  71 => 19,  68 => 17,  64 => 15,  62 => 14,  60 => 12,  57 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block item %}*/
/* {% import "knp_menu.html.twig" as macros %}*/
/* {% if item.displayed %}*/
/*     {%- set attributes = item.attributes %}*/
/*     {%- set is_dropdown = attributes.dropdown|default(false) %}*/
/*     {%- set divider_prepend = attributes.divider_prepend|default(false) %}*/
/*     {%- set divider_append = attributes.divider_append|default(false) %}*/
/* */
/* {# unset bootstrap specific attributes #}*/
/*     {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}*/
/* */
/*     {%- if divider_prepend %}*/
/*         {{ block('dividerElement') }}*/
/*     {%- endif %}*/
/* */
/* {# building the class of the item #}*/
/*     {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/* */
/*     {%- if matcher is defined %} {# KnpMenu 2.0#}*/
/*         {%- if matcher.isCurrent(item) %}*/
/*             {%- set classes = classes|merge([options.currentClass]) %}*/
/*         {%- elseif matcher.isAncestor(item, options.depth) %}*/
/*             {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*         {%- endif %}*/
/*     {%- else %} {# KnpMenu 1.X #}*/
/*         {%- if item.current %}*/
/*         {%- set classes = classes|merge([options.currentClass]) %}*/
/*         {%- elseif item.currentAncestor %}*/
/*         {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*         {%- endif %}*/
/*     {%- endif %}*/
/* */
/*     {%- if item.actsLikeFirst %}*/
/*         {%- set classes = classes|merge([options.firstClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeLast %}*/
/*         {%- set classes = classes|merge([options.lastClass]) %}*/
/*     {%- endif %}*/
/* */
/* {# building the class of the children #}*/
/*     {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*     {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}*/
/* */
/* {# adding classes for dropdown #}*/
/*     {%- if is_dropdown %}*/
/*         {%- set classes = classes|merge(['dropdown']) %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}*/
/*     {%- endif %}*/
/* */
/* {# putting classes together #}*/
/*     {%- if classes is not empty %}*/
/*         {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- endif %}*/
/*     {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/* */
/* {# displaying the item #}*/
/*     <li{{ macros.attributes(attributes) }}>*/
/*         {%- if is_dropdown %}*/
/*             {{ block('dropdownElement') }}*/
/*         {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}*/
/*             {{ block('linkElement') }}*/
/*         {%- else %}*/
/*             {{ block('spanElement') }}*/
/*         {%- endif %}*/
/* {# render the list of children#}*/
/*         {{ block('list') }}*/
/*     </li>*/
/* */
/*     {%- if divider_append %}*/
/*         {{ block('dividerElement') }}*/
/*     {%- endif %}*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block dividerElement %}*/
/* {% if item.level == 1 %}*/
/*     <li class="divider-vertical"></li>*/
/* {% else %}*/
/*     <li class="divider"></li>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     <a href="{{ item.uri }}"{{ macros.attributes(item.linkAttributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block spanElement %}*/
/*     <span {{ macros.attributes(item.labelAttributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block dropdownElement %}*/
/*     {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}*/
/*     {%- set classes = classes|merge(['dropdown-toggle']) %}*/
/*     {%- set attributes = item.linkAttributes %}*/
/*     {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}*/
/*     <a href="#"{{ macros.attributes(attributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*         <b class="caret"></b>*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block label %}{{ item.label|trans }}{% endblock %}*/
