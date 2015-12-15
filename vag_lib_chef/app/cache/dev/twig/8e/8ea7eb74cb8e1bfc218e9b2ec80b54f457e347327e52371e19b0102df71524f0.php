<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_17b5596e387068341fc153ea7c46e2ff08c95b6b3cf824dfcc660ad74fe22ac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 36);
        // line 36
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a82327ea832ddcf338e33e6809a77540ede4306fea2e844f13715aec40893a1 = $this->env->getExtension("native_profiler");
        $__internal_3a82327ea832ddcf338e33e6809a77540ede4306fea2e844f13715aec40893a1->enter($__internal_3a82327ea832ddcf338e33e6809a77540ede4306fea2e844f13715aec40893a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 37
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 37);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a82327ea832ddcf338e33e6809a77540ede4306fea2e844f13715aec40893a1->leave($__internal_3a82327ea832ddcf338e33e6809a77540ede4306fea2e844f13715aec40893a1_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b37588a44e5ab0b1fcc8e294a865a4d7bb31c08552be46ce1a1a5af2c00fb0a8 = $this->env->getExtension("native_profiler");
        $__internal_b37588a44e5ab0b1fcc8e294a865a4d7bb31c08552be46ce1a1a5af2c00fb0a8->enter($__internal_b37588a44e5ab0b1fcc8e294a865a4d7bb31c08552be46ce1a1a5af2c00fb0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b37588a44e5ab0b1fcc8e294a865a4d7bb31c08552be46ce1a1a5af2c00fb0a8->leave($__internal_b37588a44e5ab0b1fcc8e294a865a4d7bb31c08552be46ce1a1a5af2c00fb0a8_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_404c1c914622df46aae211208166c9270da1b0e361281e49e881f72a54807c76 = $this->env->getExtension("native_profiler");
        $__internal_404c1c914622df46aae211208166c9270da1b0e361281e49e881f72a54807c76->enter($__internal_404c1c914622df46aae211208166c9270da1b0e361281e49e881f72a54807c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_404c1c914622df46aae211208166c9270da1b0e361281e49e881f72a54807c76->leave($__internal_404c1c914622df46aae211208166c9270da1b0e361281e49e881f72a54807c76_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6ec498dfdfdfd951b395e7073e0b8ec4205df8d30f9e4acecd93d3ce7b4db43e = $this->env->getExtension("native_profiler");
        $__internal_6ec498dfdfdfd951b395e7073e0b8ec4205df8d30f9e4acecd93d3ce7b4db43e->enter($__internal_6ec498dfdfdfd951b395e7073e0b8ec4205df8d30f9e4acecd93d3ce7b4db43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:show_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        echo "</li>
    <li>";
        // line 28
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        echo "</li>
    <li>";
        // line 29
        $this->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 29)->display($context);
        echo "</li>
    <li>";
        // line 30
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 30)->display($context);
        echo "</li>
    <li>";
        // line 31
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 31)->display($context);
        echo "</li>
";
        
        $__internal_6ec498dfdfdfd951b395e7073e0b8ec4205df8d30f9e4acecd93d3ce7b4db43e->leave($__internal_6ec498dfdfdfd951b395e7073e0b8ec4205df8d30f9e4acecd93d3ce7b4db43e_prof);

    }

    // line 34
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_f20c25c41204f73908f1125d2a508726cd652888e23e3721c59aee31382c9434 = $this->env->getExtension("native_profiler");
        $__internal_f20c25c41204f73908f1125d2a508726cd652888e23e3721c59aee31382c9434->enter($__internal_f20c25c41204f73908f1125d2a508726cd652888e23e3721c59aee31382c9434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_f20c25c41204f73908f1125d2a508726cd652888e23e3721c59aee31382c9434->leave($__internal_f20c25c41204f73908f1125d2a508726cd652888e23e3721c59aee31382c9434_prof);

    }

    // line 39
    public function block_form($context, array $blocks = array())
    {
        $__internal_a126a9ed7cc81caeecd6869a417454f6588d273d68ef796aac51eb888d433559 = $this->env->getExtension("native_profiler");
        $__internal_a126a9ed7cc81caeecd6869a417454f6588d273d68ef796aac51eb888d433559->enter($__internal_a126a9ed7cc81caeecd6869a417454f6588d273d68ef796aac51eb888d433559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 40
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_a126a9ed7cc81caeecd6869a417454f6588d273d68ef796aac51eb888d433559->leave($__internal_a126a9ed7cc81caeecd6869a417454f6588d273d68ef796aac51eb888d433559_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 39,  132 => 34,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 37,  40 => 12,  12 => 36,);
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
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock%}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:show_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:history_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:acl_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
