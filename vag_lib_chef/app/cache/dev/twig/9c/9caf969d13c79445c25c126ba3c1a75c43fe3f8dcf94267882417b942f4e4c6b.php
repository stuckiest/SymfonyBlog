<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_0f079bf095b197d473586d7f0f9199a53ca585f6c52a58ec05beddb28a33018b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27013ec2ce3f849368448d8bbad3ba288960a163e8f975e42f3cf509ac201a37 = $this->env->getExtension("native_profiler");
        $__internal_27013ec2ce3f849368448d8bbad3ba288960a163e8f975e42f3cf509ac201a37->enter($__internal_27013ec2ce3f849368448d8bbad3ba288960a163e8f975e42f3cf509ac201a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27013ec2ce3f849368448d8bbad3ba288960a163e8f975e42f3cf509ac201a37->leave($__internal_27013ec2ce3f849368448d8bbad3ba288960a163e8f975e42f3cf509ac201a37_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_156768096c21e84fe1811b27522b898a05758435520c2e77c0a7de18535c5df1 = $this->env->getExtension("native_profiler");
        $__internal_156768096c21e84fe1811b27522b898a05758435520c2e77c0a7de18535c5df1->enter($__internal_156768096c21e84fe1811b27522b898a05758435520c2e77c0a7de18535c5df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"#\">
        <i class=\"glyphicon glyphicon-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_156768096c21e84fe1811b27522b898a05758435520c2e77c0a7de18535c5df1->leave($__internal_156768096c21e84fe1811b27522b898a05758435520c2e77c0a7de18535c5df1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <a class="btn btn-default" href="#">*/
/*         <i class="glyphicon glyphicon-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
