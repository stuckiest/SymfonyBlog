<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b673832595e5f97fe7a1bc7831c9a3bdf7d3e084e123ad760be172545e8f47a3 extends Twig_Template
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
        $__internal_dde3318f1bbb2b4af3c0162a182bd743b7a9cce0ab1f2f586099831d8b6f6818 = $this->env->getExtension("native_profiler");
        $__internal_dde3318f1bbb2b4af3c0162a182bd743b7a9cce0ab1f2f586099831d8b6f6818->enter($__internal_dde3318f1bbb2b4af3c0162a182bd743b7a9cce0ab1f2f586099831d8b6f6818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_dde3318f1bbb2b4af3c0162a182bd743b7a9cce0ab1f2f586099831d8b6f6818->leave($__internal_dde3318f1bbb2b4af3c0162a182bd743b7a9cce0ab1f2f586099831d8b6f6818_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
