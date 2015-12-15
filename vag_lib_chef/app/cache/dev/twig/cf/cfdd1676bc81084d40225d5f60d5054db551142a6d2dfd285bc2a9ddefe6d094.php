<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8ff961b577728a6f7dfd27016fc489f04277f011bb5f3ff56e9b5be131342f6d extends Twig_Template
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
        $__internal_d0a0c4215be02260709cee11fe46d65ca4b6bbc5bf4810d580e752b1ff2552e6 = $this->env->getExtension("native_profiler");
        $__internal_d0a0c4215be02260709cee11fe46d65ca4b6bbc5bf4810d580e752b1ff2552e6->enter($__internal_d0a0c4215be02260709cee11fe46d65ca4b6bbc5bf4810d580e752b1ff2552e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d0a0c4215be02260709cee11fe46d65ca4b6bbc5bf4810d580e752b1ff2552e6->leave($__internal_d0a0c4215be02260709cee11fe46d65ca4b6bbc5bf4810d580e752b1ff2552e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
