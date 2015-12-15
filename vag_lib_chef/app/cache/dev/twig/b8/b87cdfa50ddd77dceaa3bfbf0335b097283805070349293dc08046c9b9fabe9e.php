<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f4653ad75828d61e8f2a321976422f0a46e80e34d5732494a013a6f3fb67fd94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2246bc9079704dead0bc93c5a02099daa48e88be2450999633d8135f69b00ec = $this->env->getExtension("native_profiler");
        $__internal_a2246bc9079704dead0bc93c5a02099daa48e88be2450999633d8135f69b00ec->enter($__internal_a2246bc9079704dead0bc93c5a02099daa48e88be2450999633d8135f69b00ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2246bc9079704dead0bc93c5a02099daa48e88be2450999633d8135f69b00ec->leave($__internal_a2246bc9079704dead0bc93c5a02099daa48e88be2450999633d8135f69b00ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1628a107c57c69882ecd0039156738eb6420b4e058c824a110cec345c2d92d73 = $this->env->getExtension("native_profiler");
        $__internal_1628a107c57c69882ecd0039156738eb6420b4e058c824a110cec345c2d92d73->enter($__internal_1628a107c57c69882ecd0039156738eb6420b4e058c824a110cec345c2d92d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1628a107c57c69882ecd0039156738eb6420b4e058c824a110cec345c2d92d73->leave($__internal_1628a107c57c69882ecd0039156738eb6420b4e058c824a110cec345c2d92d73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_330f254ed3097d8b18328cf6ece385abcc42aa0d4cad1a607c4679c70ccc6ad9 = $this->env->getExtension("native_profiler");
        $__internal_330f254ed3097d8b18328cf6ece385abcc42aa0d4cad1a607c4679c70ccc6ad9->enter($__internal_330f254ed3097d8b18328cf6ece385abcc42aa0d4cad1a607c4679c70ccc6ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_330f254ed3097d8b18328cf6ece385abcc42aa0d4cad1a607c4679c70ccc6ad9->leave($__internal_330f254ed3097d8b18328cf6ece385abcc42aa0d4cad1a607c4679c70ccc6ad9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c333c1a9cb83cc1ed60c2f15dbb893556cb49ad3acd99ea7da3fcb1bf61a981 = $this->env->getExtension("native_profiler");
        $__internal_4c333c1a9cb83cc1ed60c2f15dbb893556cb49ad3acd99ea7da3fcb1bf61a981->enter($__internal_4c333c1a9cb83cc1ed60c2f15dbb893556cb49ad3acd99ea7da3fcb1bf61a981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4c333c1a9cb83cc1ed60c2f15dbb893556cb49ad3acd99ea7da3fcb1bf61a981->leave($__internal_4c333c1a9cb83cc1ed60c2f15dbb893556cb49ad3acd99ea7da3fcb1bf61a981_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
