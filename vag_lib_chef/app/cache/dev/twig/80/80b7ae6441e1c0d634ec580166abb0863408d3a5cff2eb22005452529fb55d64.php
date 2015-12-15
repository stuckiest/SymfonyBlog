<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c1d380f6021348cd74a0a36dd410f10ce0daee66bcf4e70e1e3d8035deb646e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5f46965720fa17c96a52979606c0321766e4ab310ba3fcf698172a366c26328 = $this->env->getExtension("native_profiler");
        $__internal_a5f46965720fa17c96a52979606c0321766e4ab310ba3fcf698172a366c26328->enter($__internal_a5f46965720fa17c96a52979606c0321766e4ab310ba3fcf698172a366c26328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f46965720fa17c96a52979606c0321766e4ab310ba3fcf698172a366c26328->leave($__internal_a5f46965720fa17c96a52979606c0321766e4ab310ba3fcf698172a366c26328_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_266c5e0284d6f62dc169355b49eaa78c1e0f03c232b2a1115af1f6e353476b38 = $this->env->getExtension("native_profiler");
        $__internal_266c5e0284d6f62dc169355b49eaa78c1e0f03c232b2a1115af1f6e353476b38->enter($__internal_266c5e0284d6f62dc169355b49eaa78c1e0f03c232b2a1115af1f6e353476b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_266c5e0284d6f62dc169355b49eaa78c1e0f03c232b2a1115af1f6e353476b38->leave($__internal_266c5e0284d6f62dc169355b49eaa78c1e0f03c232b2a1115af1f6e353476b38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c9967b6780a6a9aa57ea4fad57cd0cb7724af9fa912c474fe52cd4631df7671 = $this->env->getExtension("native_profiler");
        $__internal_7c9967b6780a6a9aa57ea4fad57cd0cb7724af9fa912c474fe52cd4631df7671->enter($__internal_7c9967b6780a6a9aa57ea4fad57cd0cb7724af9fa912c474fe52cd4631df7671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c9967b6780a6a9aa57ea4fad57cd0cb7724af9fa912c474fe52cd4631df7671->leave($__internal_7c9967b6780a6a9aa57ea4fad57cd0cb7724af9fa912c474fe52cd4631df7671_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9c22de80526ea41dfbf81804cb64bfc708aaae7059135d7fbaf2c59e3be6d07 = $this->env->getExtension("native_profiler");
        $__internal_c9c22de80526ea41dfbf81804cb64bfc708aaae7059135d7fbaf2c59e3be6d07->enter($__internal_c9c22de80526ea41dfbf81804cb64bfc708aaae7059135d7fbaf2c59e3be6d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9c22de80526ea41dfbf81804cb64bfc708aaae7059135d7fbaf2c59e3be6d07->leave($__internal_c9c22de80526ea41dfbf81804cb64bfc708aaae7059135d7fbaf2c59e3be6d07_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
