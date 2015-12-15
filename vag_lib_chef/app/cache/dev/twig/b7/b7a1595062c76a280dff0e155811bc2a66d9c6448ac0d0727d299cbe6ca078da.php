<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_591f09ebdb2737bb2f8319b8ab41be9ad9eeeaa9c2a3d7f25e7ec9e0ffaba8db extends Twig_Template
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
        $__internal_faf046b786ba158dc7e0e17d8cc6e2011f2fce72b420eec5609675db1818bcb2 = $this->env->getExtension("native_profiler");
        $__internal_faf046b786ba158dc7e0e17d8cc6e2011f2fce72b420eec5609675db1818bcb2->enter($__internal_faf046b786ba158dc7e0e17d8cc6e2011f2fce72b420eec5609675db1818bcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_faf046b786ba158dc7e0e17d8cc6e2011f2fce72b420eec5609675db1818bcb2->leave($__internal_faf046b786ba158dc7e0e17d8cc6e2011f2fce72b420eec5609675db1818bcb2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
