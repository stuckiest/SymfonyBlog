<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_17a38edbcd1c2e4c07498673037e90f023699491e5105088ecf1bb24675a8a65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f14b268ca6a824ff8e5ac50824f8df8c87615fa4c0837ebe50e2ec4d223a5cd1 = $this->env->getExtension("native_profiler");
        $__internal_f14b268ca6a824ff8e5ac50824f8df8c87615fa4c0837ebe50e2ec4d223a5cd1->enter($__internal_f14b268ca6a824ff8e5ac50824f8df8c87615fa4c0837ebe50e2ec4d223a5cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f14b268ca6a824ff8e5ac50824f8df8c87615fa4c0837ebe50e2ec4d223a5cd1->leave($__internal_f14b268ca6a824ff8e5ac50824f8df8c87615fa4c0837ebe50e2ec4d223a5cd1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_970f2bb1d590e7f68ec1c9663c8ad811d135186302f2a1b8a94119fba43d43f7 = $this->env->getExtension("native_profiler");
        $__internal_970f2bb1d590e7f68ec1c9663c8ad811d135186302f2a1b8a94119fba43d43f7->enter($__internal_970f2bb1d590e7f68ec1c9663c8ad811d135186302f2a1b8a94119fba43d43f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_970f2bb1d590e7f68ec1c9663c8ad811d135186302f2a1b8a94119fba43d43f7->leave($__internal_970f2bb1d590e7f68ec1c9663c8ad811d135186302f2a1b8a94119fba43d43f7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
