<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3dc0e652f5b7e714f7a814950f4ae50e2e34e33d364500be3fd307bdaa3da3b7 extends Twig_Template
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
        $__internal_e2dac0f2e5914c79c5733882b6215562c5cc5c572b8228378a5bc5799aee9344 = $this->env->getExtension("native_profiler");
        $__internal_e2dac0f2e5914c79c5733882b6215562c5cc5c572b8228378a5bc5799aee9344->enter($__internal_e2dac0f2e5914c79c5733882b6215562c5cc5c572b8228378a5bc5799aee9344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e2dac0f2e5914c79c5733882b6215562c5cc5c572b8228378a5bc5799aee9344->leave($__internal_e2dac0f2e5914c79c5733882b6215562c5cc5c572b8228378a5bc5799aee9344_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
