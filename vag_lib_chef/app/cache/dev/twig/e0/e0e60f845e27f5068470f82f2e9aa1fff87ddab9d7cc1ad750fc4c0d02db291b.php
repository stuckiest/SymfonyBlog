<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_d8cc36af39200188b6be9050e928c48bf4fa6088e819f20f9ca03c459c8e460c extends Twig_Template
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
        $__internal_19d56ba996a4cab3e5a2e5455a86c6cbc6df548fe5343c56d892041b7ee5b420 = $this->env->getExtension("native_profiler");
        $__internal_19d56ba996a4cab3e5a2e5455a86c6cbc6df548fe5343c56d892041b7ee5b420->enter($__internal_19d56ba996a4cab3e5a2e5455a86c6cbc6df548fe5343c56d892041b7ee5b420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_19d56ba996a4cab3e5a2e5455a86c6cbc6df548fe5343c56d892041b7ee5b420->leave($__internal_19d56ba996a4cab3e5a2e5455a86c6cbc6df548fe5343c56d892041b7ee5b420_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
