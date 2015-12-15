<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_544b098788eb2b352eeeafe46464c171455dca97283097b968a11881fb335e2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3efb674c6a70ad472266271bc6a5794b8322e899bcad361a935b2992477a5ba4 = $this->env->getExtension("native_profiler");
        $__internal_3efb674c6a70ad472266271bc6a5794b8322e899bcad361a935b2992477a5ba4->enter($__internal_3efb674c6a70ad472266271bc6a5794b8322e899bcad361a935b2992477a5ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3efb674c6a70ad472266271bc6a5794b8322e899bcad361a935b2992477a5ba4->leave($__internal_3efb674c6a70ad472266271bc6a5794b8322e899bcad361a935b2992477a5ba4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4038aa2d59753f9de7f6b3102f4758deffcaa02aba7da0ce4291ff8122ff33ca = $this->env->getExtension("native_profiler");
        $__internal_4038aa2d59753f9de7f6b3102f4758deffcaa02aba7da0ce4291ff8122ff33ca->enter($__internal_4038aa2d59753f9de7f6b3102f4758deffcaa02aba7da0ce4291ff8122ff33ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_4038aa2d59753f9de7f6b3102f4758deffcaa02aba7da0ce4291ff8122ff33ca->leave($__internal_4038aa2d59753f9de7f6b3102f4758deffcaa02aba7da0ce4291ff8122ff33ca_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_86dfb407c3b28f48bfb106c119571478ad4ab3b5179fa349c57b79eca7df5341 = $this->env->getExtension("native_profiler");
        $__internal_86dfb407c3b28f48bfb106c119571478ad4ab3b5179fa349c57b79eca7df5341->enter($__internal_86dfb407c3b28f48bfb106c119571478ad4ab3b5179fa349c57b79eca7df5341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_86dfb407c3b28f48bfb106c119571478ad4ab3b5179fa349c57b79eca7df5341->leave($__internal_86dfb407c3b28f48bfb106c119571478ad4ab3b5179fa349c57b79eca7df5341_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_688ce828d2219fcb1f7a66814513500e347e5c41cdadb2aaf1f58143f5d5b649 = $this->env->getExtension("native_profiler");
        $__internal_688ce828d2219fcb1f7a66814513500e347e5c41cdadb2aaf1f58143f5d5b649->enter($__internal_688ce828d2219fcb1f7a66814513500e347e5c41cdadb2aaf1f58143f5d5b649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    Redefine the content block in your action template

";
        
        $__internal_688ce828d2219fcb1f7a66814513500e347e5c41cdadb2aaf1f58143f5d5b649->leave($__internal_688ce828d2219fcb1f7a66814513500e347e5c41cdadb2aaf1f58143f5d5b649_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  75 => 25,  64 => 21,  61 => 20,  55 => 19,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
