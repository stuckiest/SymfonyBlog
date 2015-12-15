<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1045be1d18b9a06bd0862368fc8bc5ef66f97f8fcd1234f90941c9794e6bd2d1 extends Twig_Template
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
        $__internal_66b4bdf950976f18a585c0e4c49b87ec727922d9e9253518c8e17ce0afa27b50 = $this->env->getExtension("native_profiler");
        $__internal_66b4bdf950976f18a585c0e4c49b87ec727922d9e9253518c8e17ce0afa27b50->enter($__internal_66b4bdf950976f18a585c0e4c49b87ec727922d9e9253518c8e17ce0afa27b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_66b4bdf950976f18a585c0e4c49b87ec727922d9e9253518c8e17ce0afa27b50->leave($__internal_66b4bdf950976f18a585c0e4c49b87ec727922d9e9253518c8e17ce0afa27b50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
