<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_590fbf8ed9473aecb37b909f45775838d5955ba6982550d53afd0c9d209ead5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e843154165c5d5f45e3742d475e135b8fc11efe49f12ed2802a84efae0b13f61 = $this->env->getExtension("native_profiler");
        $__internal_e843154165c5d5f45e3742d475e135b8fc11efe49f12ed2802a84efae0b13f61->enter($__internal_e843154165c5d5f45e3742d475e135b8fc11efe49f12ed2802a84efae0b13f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e843154165c5d5f45e3742d475e135b8fc11efe49f12ed2802a84efae0b13f61->leave($__internal_e843154165c5d5f45e3742d475e135b8fc11efe49f12ed2802a84efae0b13f61_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7abaed0ea21177e98464adb7965912dea66921638f655e51b027087f23b0d64c = $this->env->getExtension("native_profiler");
        $__internal_7abaed0ea21177e98464adb7965912dea66921638f655e51b027087f23b0d64c->enter($__internal_7abaed0ea21177e98464adb7965912dea66921638f655e51b027087f23b0d64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_7abaed0ea21177e98464adb7965912dea66921638f655e51b027087f23b0d64c->leave($__internal_7abaed0ea21177e98464adb7965912dea66921638f655e51b027087f23b0d64c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
