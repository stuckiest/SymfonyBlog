<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b37a36d8d10654c2a78f2e56eb45a37b10e6cbc528c4e37812f209e00f6a39dd extends Twig_Template
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
        $__internal_9dea972384f97ebb17de2d3577b53ce544b9966be19a7a62d4d95a9fa4a3eaba = $this->env->getExtension("native_profiler");
        $__internal_9dea972384f97ebb17de2d3577b53ce544b9966be19a7a62d4d95a9fa4a3eaba->enter($__internal_9dea972384f97ebb17de2d3577b53ce544b9966be19a7a62d4d95a9fa4a3eaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9dea972384f97ebb17de2d3577b53ce544b9966be19a7a62d4d95a9fa4a3eaba->leave($__internal_9dea972384f97ebb17de2d3577b53ce544b9966be19a7a62d4d95a9fa4a3eaba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
