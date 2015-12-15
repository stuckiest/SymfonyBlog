<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_1659b22dcb63a6e99a9145ccd458eb7af0dbe8229ff80cd42ffe0f0b47ffd241 extends Twig_Template
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
        $__internal_6e57fce24a9d7f978561ecc9d24085336f49284e4eaf2fcb31ae093f02b0e82a = $this->env->getExtension("native_profiler");
        $__internal_6e57fce24a9d7f978561ecc9d24085336f49284e4eaf2fcb31ae093f02b0e82a->enter($__internal_6e57fce24a9d7f978561ecc9d24085336f49284e4eaf2fcb31ae093f02b0e82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_6e57fce24a9d7f978561ecc9d24085336f49284e4eaf2fcb31ae093f02b0e82a->leave($__internal_6e57fce24a9d7f978561ecc9d24085336f49284e4eaf2fcb31ae093f02b0e82a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {{ revision.timestamp | date }}*/
/* */
