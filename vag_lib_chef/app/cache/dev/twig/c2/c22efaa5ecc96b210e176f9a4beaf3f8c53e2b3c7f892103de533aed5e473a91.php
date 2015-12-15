<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0a2df6a127db7fe20a7bc77fc983fbe6c1e26af03aef92459997d189a8fb4952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a5e9a9eb57bc53058fd8300c1d0f2acb9c21dad9164faa303ccce64feabc2a80 = $this->env->getExtension("native_profiler");
        $__internal_a5e9a9eb57bc53058fd8300c1d0f2acb9c21dad9164faa303ccce64feabc2a80->enter($__internal_a5e9a9eb57bc53058fd8300c1d0f2acb9c21dad9164faa303ccce64feabc2a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e9a9eb57bc53058fd8300c1d0f2acb9c21dad9164faa303ccce64feabc2a80->leave($__internal_a5e9a9eb57bc53058fd8300c1d0f2acb9c21dad9164faa303ccce64feabc2a80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f224ffddc25d6f2194c5f801e4c2a04b7dc394cee9b7f1dc0ac2feea3a1f273 = $this->env->getExtension("native_profiler");
        $__internal_7f224ffddc25d6f2194c5f801e4c2a04b7dc394cee9b7f1dc0ac2feea3a1f273->enter($__internal_7f224ffddc25d6f2194c5f801e4c2a04b7dc394cee9b7f1dc0ac2feea3a1f273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7f224ffddc25d6f2194c5f801e4c2a04b7dc394cee9b7f1dc0ac2feea3a1f273->leave($__internal_7f224ffddc25d6f2194c5f801e4c2a04b7dc394cee9b7f1dc0ac2feea3a1f273_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a535d73b5f76f30c06a29699237a2ed0f3586d14e15f2df0cb5b8bfe09169238 = $this->env->getExtension("native_profiler");
        $__internal_a535d73b5f76f30c06a29699237a2ed0f3586d14e15f2df0cb5b8bfe09169238->enter($__internal_a535d73b5f76f30c06a29699237a2ed0f3586d14e15f2df0cb5b8bfe09169238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a535d73b5f76f30c06a29699237a2ed0f3586d14e15f2df0cb5b8bfe09169238->leave($__internal_a535d73b5f76f30c06a29699237a2ed0f3586d14e15f2df0cb5b8bfe09169238_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
