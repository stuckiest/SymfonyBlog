<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_8da04702fc283d03e0b7430227c655385285780ee4816af7098526e55cdcd37c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79b08fafd4b50aedc7d7d6c05c1f9a7a22f31d892e55b6b8bbd5ff3d94949f1c = $this->env->getExtension("native_profiler");
        $__internal_79b08fafd4b50aedc7d7d6c05c1f9a7a22f31d892e55b6b8bbd5ff3d94949f1c->enter($__internal_79b08fafd4b50aedc7d7d6c05c1f9a7a22f31d892e55b6b8bbd5ff3d94949f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b08fafd4b50aedc7d7d6c05c1f9a7a22f31d892e55b6b8bbd5ff3d94949f1c->leave($__internal_79b08fafd4b50aedc7d7d6c05c1f9a7a22f31d892e55b6b8bbd5ff3d94949f1c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_037484d7ec42d7490e687caf12bb8841cfb556014452139be1c701438678456f = $this->env->getExtension("native_profiler");
        $__internal_037484d7ec42d7490e687caf12bb8841cfb556014452139be1c701438678456f->enter($__internal_037484d7ec42d7490e687caf12bb8841cfb556014452139be1c701438678456f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_037484d7ec42d7490e687caf12bb8841cfb556014452139be1c701438678456f->leave($__internal_037484d7ec42d7490e687caf12bb8841cfb556014452139be1c701438678456f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
