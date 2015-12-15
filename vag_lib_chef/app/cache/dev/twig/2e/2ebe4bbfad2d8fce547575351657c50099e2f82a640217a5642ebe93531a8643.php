<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_af2186b45d61b6e577ca62944483bb0515780bb7919be4f3d98373702ef67f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be47b176a201283758e62b527a62968aeef9850bd87452568657b7ac82a32bb5 = $this->env->getExtension("native_profiler");
        $__internal_be47b176a201283758e62b527a62968aeef9850bd87452568657b7ac82a32bb5->enter($__internal_be47b176a201283758e62b527a62968aeef9850bd87452568657b7ac82a32bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_be47b176a201283758e62b527a62968aeef9850bd87452568657b7ac82a32bb5->leave($__internal_be47b176a201283758e62b527a62968aeef9850bd87452568657b7ac82a32bb5_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_9080b74b733b1527dc2db37bcfe7fc2a4f28ea1c950dcc5ef5607b487cf165a8 = $this->env->getExtension("native_profiler");
        $__internal_9080b74b733b1527dc2db37bcfe7fc2a4f28ea1c950dcc5ef5607b487cf165a8->enter($__internal_9080b74b733b1527dc2db37bcfe7fc2a4f28ea1c950dcc5ef5607b487cf165a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) > 0))) {
            // line 22
            echo "        <div class=\"row\">
            <div class=\"sonata-ba-list ";
            // line 23
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
            </div>
            ";
            // line 26
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                // line 27
                echo "                <div class=\"sonata-ba-filter col-md-2\">
                    ";
                // line 28
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                </div>
            ";
            }
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "
";
        
        $__internal_9080b74b733b1527dc2db37bcfe7fc2a4f28ea1c950dcc5ef5607b487cf165a8->leave($__internal_9080b74b733b1527dc2db37bcfe7fc2a4f28ea1c950dcc5ef5607b487cf165a8_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_62e53764fc8072b9b0b580529256d48ab4385bc019edbdbb15c9368c6f9a8786 = $this->env->getExtension("native_profiler");
        $__internal_62e53764fc8072b9b0b580529256d48ab4385bc019edbdbb15c9368c6f9a8786->enter($__internal_62e53764fc8072b9b0b580529256d48ab4385bc019edbdbb15c9368c6f9a8786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_62e53764fc8072b9b0b580529256d48ab4385bc019edbdbb15c9368c6f9a8786->leave($__internal_62e53764fc8072b9b0b580529256d48ab4385bc019edbdbb15c9368c6f9a8786_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_b99f976ddf61ce4a38e9f14382943d345a200a655872b2e2d7994e786eacdf89 = $this->env->getExtension("native_profiler");
        $__internal_b99f976ddf61ce4a38e9f14382943d345a200a655872b2e2d7994e786eacdf89->enter($__internal_b99f976ddf61ce4a38e9f14382943d345a200a655872b2e2d7994e786eacdf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_b99f976ddf61ce4a38e9f14382943d345a200a655872b2e2d7994e786eacdf89->leave($__internal_b99f976ddf61ce4a38e9f14382943d345a200a655872b2e2d7994e786eacdf89_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_9562460b917a08952d6519ddaf4e79f3bfde45a4871ba6999698a3a3e996e255 = $this->env->getExtension("native_profiler");
        $__internal_9562460b917a08952d6519ddaf4e79f3bfde45a4871ba6999698a3a3e996e255->enter($__internal_9562460b917a08952d6519ddaf4e79f3bfde45a4871ba6999698a3a3e996e255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_9562460b917a08952d6519ddaf4e79f3bfde45a4871ba6999698a3a3e996e255->leave($__internal_9562460b917a08952d6519ddaf4e79f3bfde45a4871ba6999698a3a3e996e255_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_909d5af8d1d45999bcda59089e0283971780aabf08800f694c8fc99ecfb6fe07 = $this->env->getExtension("native_profiler");
        $__internal_909d5af8d1d45999bcda59089e0283971780aabf08800f694c8fc99ecfb6fe07->enter($__internal_909d5af8d1d45999bcda59089e0283971780aabf08800f694c8fc99ecfb6fe07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_909d5af8d1d45999bcda59089e0283971780aabf08800f694c8fc99ecfb6fe07->leave($__internal_909d5af8d1d45999bcda59089e0283971780aabf08800f694c8fc99ecfb6fe07_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  128 => 18,  117 => 17,  106 => 16,  98 => 33,  94 => 31,  88 => 28,  85 => 27,  83 => 26,  78 => 24,  70 => 23,  67 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
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
/* {% block content %}*/
/*     {% set _list_table   = block('list_table')|trim %}*/
/*     {% set _list_filters = block('list_filters')|trim %}*/
/* */
/*     {% block preview %}{% endblock %}*/
/*     {% block form %}{% endblock %}*/
/*     {% block list %}{% endblock %}*/
/*     {% block show %}{% endblock %}*/
/* */
/*     {% if _list_table|length > 0 or _list_filters|length > 0 %}*/
/*         <div class="row">*/
/*             <div class="sonata-ba-list {% if _list_filters %}col-md-10{% else %}col-md-12{% endif %}">*/
/*                 {{ _list_table|raw }}*/
/*             </div>*/
/*             {% if _list_filters %}*/
/*                 <div class="sonata-ba-filter col-md-2">*/
/*                     {{ _list_filters|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
