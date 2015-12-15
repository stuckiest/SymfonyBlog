<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_759a803063f130c1f72e85ef5e80d6b587c588d10a0984ab6e4e3b8531b1c4e4 extends Twig_Template
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
        $__internal_8243cb38e9d0f7e76a9911f64523370e6c249d31979c67a99067f7ae3c177a53 = $this->env->getExtension("native_profiler");
        $__internal_8243cb38e9d0f7e76a9911f64523370e6c249d31979c67a99067f7ae3c177a53->enter($__internal_8243cb38e9d0f7e76a9911f64523370e6c249d31979c67a99067f7ae3c177a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8243cb38e9d0f7e76a9911f64523370e6c249d31979c67a99067f7ae3c177a53->leave($__internal_8243cb38e9d0f7e76a9911f64523370e6c249d31979c67a99067f7ae3c177a53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
