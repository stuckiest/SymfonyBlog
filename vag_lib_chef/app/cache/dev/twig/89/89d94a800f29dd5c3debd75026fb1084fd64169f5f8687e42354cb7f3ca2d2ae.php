<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_937e079817ccead4a91ebad91a86e5d732312e3dd653b9dbc0a478a203a37cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ebb85c59d1745d9f28ec433b7a400007680c00d4ae10bb85160133133de5081 = $this->env->getExtension("native_profiler");
        $__internal_5ebb85c59d1745d9f28ec433b7a400007680c00d4ae10bb85160133133de5081->enter($__internal_5ebb85c59d1745d9f28ec433b7a400007680c00d4ae10bb85160133133de5081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "history"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_5ebb85c59d1745d9f28ec433b7a400007680c00d4ae10bb85160133133de5081->leave($__internal_5ebb85c59d1745d9f28ec433b7a400007680c00d4ae10bb85160133133de5081_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.hasroute('history') and admin.id(object) and admin.isGranted('EDIT', object) %}*/
/*     <a class="sonata-action-element" href="{{ admin.generateObjectUrl('history', object) }}">*/
/*         <i class="fa fa-archive"></i>*/
/*         {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
