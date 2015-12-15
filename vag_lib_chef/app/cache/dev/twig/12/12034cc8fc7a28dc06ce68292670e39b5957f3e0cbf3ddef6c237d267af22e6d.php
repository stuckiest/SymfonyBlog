<?php

/* default/blogIndex.html.twig */
class __TwigTemplate_6551811f140ecdb776510a6821cc23d6a76aa75eb3bfe678db1cf9266ec1c4a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/blogIndex.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49b6c86b88cc96d35054803cef8d225be2cffc3a6748f561bd50c42ac078b3cd = $this->env->getExtension("native_profiler");
        $__internal_49b6c86b88cc96d35054803cef8d225be2cffc3a6748f561bd50c42ac078b3cd->enter($__internal_49b6c86b88cc96d35054803cef8d225be2cffc3a6748f561bd50c42ac078b3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/blogIndex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49b6c86b88cc96d35054803cef8d225be2cffc3a6748f561bd50c42ac078b3cd->leave($__internal_49b6c86b88cc96d35054803cef8d225be2cffc3a6748f561bd50c42ac078b3cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b88243a19ebb805e0e65371fd97d4a65cda1f3d506e6c7a8298ec9bfd120247f = $this->env->getExtension("native_profiler");
        $__internal_b88243a19ebb805e0e65371fd97d4a65cda1f3d506e6c7a8298ec9bfd120247f->enter($__internal_b88243a19ebb805e0e65371fd97d4a65cda1f3d506e6c7a8298ec9bfd120247f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>This is the Blog Index Page.</h1>


";
        
        $__internal_b88243a19ebb805e0e65371fd97d4a65cda1f3d506e6c7a8298ec9bfd120247f->leave($__internal_b88243a19ebb805e0e65371fd97d4a65cda1f3d506e6c7a8298ec9bfd120247f_prof);

    }

    public function getTemplateName()
    {
        return "default/blogIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>This is the Blog Index Page.</h1>*/
/* */
/* */
/* {% endblock %}*/
