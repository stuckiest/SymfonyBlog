<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c3028c21c58c917514132d6bc6c01032f22b8e7d446454073b1dfc8562937cfb extends Twig_Template
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
        $__internal_30ebe6f9e5a728b2d5c5df34789ade07d83b2c8596cdf7c26add6e1ef47d0078 = $this->env->getExtension("native_profiler");
        $__internal_30ebe6f9e5a728b2d5c5df34789ade07d83b2c8596cdf7c26add6e1ef47d0078->enter($__internal_30ebe6f9e5a728b2d5c5df34789ade07d83b2c8596cdf7c26add6e1ef47d0078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_30ebe6f9e5a728b2d5c5df34789ade07d83b2c8596cdf7c26add6e1ef47d0078->leave($__internal_30ebe6f9e5a728b2d5c5df34789ade07d83b2c8596cdf7c26add6e1ef47d0078_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
