<?php

/* default/blogShow.html.twig */
class __TwigTemplate_baa5f4fba64085e497ae1afb183f70ad50ecb169adc1827167eb0c5c86b8f61b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/blogShow.html.twig", 1);
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
        $__internal_cb7e4f26be6d9ed1de3bbb7d51d5724d3e6b10e49a73e8d112e99b337338e1d9 = $this->env->getExtension("native_profiler");
        $__internal_cb7e4f26be6d9ed1de3bbb7d51d5724d3e6b10e49a73e8d112e99b337338e1d9->enter($__internal_cb7e4f26be6d9ed1de3bbb7d51d5724d3e6b10e49a73e8d112e99b337338e1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/blogShow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7e4f26be6d9ed1de3bbb7d51d5724d3e6b10e49a73e8d112e99b337338e1d9->leave($__internal_cb7e4f26be6d9ed1de3bbb7d51d5724d3e6b10e49a73e8d112e99b337338e1d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8116bf1d5b9dea67646b949a801adbf82119e08cfd27b31ae5fd17d7b84fabac = $this->env->getExtension("native_profiler");
        $__internal_8116bf1d5b9dea67646b949a801adbf82119e08cfd27b31ae5fd17d7b84fabac->enter($__internal_8116bf1d5b9dea67646b949a801adbf82119e08cfd27b31ae5fd17d7b84fabac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>This is the blogShow Page!</h1>

    <p>Go back to the <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("app_lucky_number");
        echo "\">
  Lucky Number
</a> page.</p>
";
        
        $__internal_8116bf1d5b9dea67646b949a801adbf82119e08cfd27b31ae5fd17d7b84fabac->leave($__internal_8116bf1d5b9dea67646b949a801adbf82119e08cfd27b31ae5fd17d7b84fabac_prof);

    }

    public function getTemplateName()
    {
        return "default/blogShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>This is the blogShow Page!</h1>*/
/* */
/*     <p>Go back to the <a href="{{ path('app_lucky_number') }}">*/
/*   Lucky Number*/
/* </a> page.</p>*/
/* {% endblock %}*/
/* */
