<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_39a069bebcecc0a6ed2b5cb91c3e9aef606b7d614e7524d761c50f739907d411 extends Twig_Template
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
        $__internal_7aac6cc044bcfad7551b9a57693458af9cc2d5a639cff422ee0fe959a7310e99 = $this->env->getExtension("native_profiler");
        $__internal_7aac6cc044bcfad7551b9a57693458af9cc2d5a639cff422ee0fe959a7310e99->enter($__internal_7aac6cc044bcfad7551b9a57693458af9cc2d5a639cff422ee0fe959a7310e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7aac6cc044bcfad7551b9a57693458af9cc2d5a639cff422ee0fe959a7310e99->leave($__internal_7aac6cc044bcfad7551b9a57693458af9cc2d5a639cff422ee0fe959a7310e99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
