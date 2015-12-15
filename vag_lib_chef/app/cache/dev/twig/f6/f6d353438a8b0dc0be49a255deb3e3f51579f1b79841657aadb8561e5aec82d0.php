<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_58b97a79312a37c36666cd9aa66ba72e40fb8c8cf99768c893421bf14cceb6a6 extends Twig_Template
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
        $__internal_797524732c15fd74852df382a8fd05a66e3d44d6c502d9072073aec0b69642bc = $this->env->getExtension("native_profiler");
        $__internal_797524732c15fd74852df382a8fd05a66e3d44d6c502d9072073aec0b69642bc->enter($__internal_797524732c15fd74852df382a8fd05a66e3d44d6c502d9072073aec0b69642bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_797524732c15fd74852df382a8fd05a66e3d44d6c502d9072073aec0b69642bc->leave($__internal_797524732c15fd74852df382a8fd05a66e3d44d6c502d9072073aec0b69642bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
