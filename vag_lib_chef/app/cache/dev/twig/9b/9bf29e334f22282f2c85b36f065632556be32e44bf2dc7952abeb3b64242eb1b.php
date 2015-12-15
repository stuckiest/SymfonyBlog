<?php

/* base.html.twig */
class __TwigTemplate_f499680d91ed8712279c20bfeedd4a18c4e18d0a4b889ac108e75d463c7f52c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b35cd21cc6770420eb5fe77b61359598fa0910e5356394beee65c91b61a80d9 = $this->env->getExtension("native_profiler");
        $__internal_8b35cd21cc6770420eb5fe77b61359598fa0910e5356394beee65c91b61a80d9->enter($__internal_8b35cd21cc6770420eb5fe77b61359598fa0910e5356394beee65c91b61a80d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8b35cd21cc6770420eb5fe77b61359598fa0910e5356394beee65c91b61a80d9->leave($__internal_8b35cd21cc6770420eb5fe77b61359598fa0910e5356394beee65c91b61a80d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_73d94097c3a6371218266bee9c1dbeee7fe0f5bdd737bb30228cbc035cd0d3a3 = $this->env->getExtension("native_profiler");
        $__internal_73d94097c3a6371218266bee9c1dbeee7fe0f5bdd737bb30228cbc035cd0d3a3->enter($__internal_73d94097c3a6371218266bee9c1dbeee7fe0f5bdd737bb30228cbc035cd0d3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_73d94097c3a6371218266bee9c1dbeee7fe0f5bdd737bb30228cbc035cd0d3a3->leave($__internal_73d94097c3a6371218266bee9c1dbeee7fe0f5bdd737bb30228cbc035cd0d3a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2abee54bfad88aeaf36499d1cfdcb524dd9d04563127d7395ac7684c82ad301 = $this->env->getExtension("native_profiler");
        $__internal_a2abee54bfad88aeaf36499d1cfdcb524dd9d04563127d7395ac7684c82ad301->enter($__internal_a2abee54bfad88aeaf36499d1cfdcb524dd9d04563127d7395ac7684c82ad301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a2abee54bfad88aeaf36499d1cfdcb524dd9d04563127d7395ac7684c82ad301->leave($__internal_a2abee54bfad88aeaf36499d1cfdcb524dd9d04563127d7395ac7684c82ad301_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae79f3d019d83ddf997813fabbd51eeb1d231f071dbdd2950bb3696396bd2ebe = $this->env->getExtension("native_profiler");
        $__internal_ae79f3d019d83ddf997813fabbd51eeb1d231f071dbdd2950bb3696396bd2ebe->enter($__internal_ae79f3d019d83ddf997813fabbd51eeb1d231f071dbdd2950bb3696396bd2ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae79f3d019d83ddf997813fabbd51eeb1d231f071dbdd2950bb3696396bd2ebe->leave($__internal_ae79f3d019d83ddf997813fabbd51eeb1d231f071dbdd2950bb3696396bd2ebe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d52ed83d9adc6eab712f7747bb2babad1802c5435fe0703cd51bf4aca7017ec8 = $this->env->getExtension("native_profiler");
        $__internal_d52ed83d9adc6eab712f7747bb2babad1802c5435fe0703cd51bf4aca7017ec8->enter($__internal_d52ed83d9adc6eab712f7747bb2babad1802c5435fe0703cd51bf4aca7017ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d52ed83d9adc6eab712f7747bb2babad1802c5435fe0703cd51bf4aca7017ec8->leave($__internal_d52ed83d9adc6eab712f7747bb2babad1802c5435fe0703cd51bf4aca7017ec8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
