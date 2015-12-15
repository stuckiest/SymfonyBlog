<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_0b0841e626b1615215963f60a1a169a6759e3360ee0020d50aa1c539a4017ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::empty_layout.html.twig", 12);
        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7345a4897fc9688aa5b4728c09f5972e6e1899a4d78d04369e21886064656f59 = $this->env->getExtension("native_profiler");
        $__internal_7345a4897fc9688aa5b4728c09f5972e6e1899a4d78d04369e21886064656f59->enter($__internal_7345a4897fc9688aa5b4728c09f5972e6e1899a4d78d04369e21886064656f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7345a4897fc9688aa5b4728c09f5972e6e1899a4d78d04369e21886064656f59->leave($__internal_7345a4897fc9688aa5b4728c09f5972e6e1899a4d78d04369e21886064656f59_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_36f116df197778a10bf26c95c3b186f7d94d7ea87def209857e188045091ec91 = $this->env->getExtension("native_profiler");
        $__internal_36f116df197778a10bf26c95c3b186f7d94d7ea87def209857e188045091ec91->enter($__internal_36f116df197778a10bf26c95c3b186f7d94d7ea87def209857e188045091ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_36f116df197778a10bf26c95c3b186f7d94d7ea87def209857e188045091ec91->leave($__internal_36f116df197778a10bf26c95c3b186f7d94d7ea87def209857e188045091ec91_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_6206a347f0335de81d8c9859e846467cd876b432c92718c0a6480b4d970315e2 = $this->env->getExtension("native_profiler");
        $__internal_6206a347f0335de81d8c9859e846467cd876b432c92718c0a6480b4d970315e2->enter($__internal_6206a347f0335de81d8c9859e846467cd876b432c92718c0a6480b4d970315e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_6206a347f0335de81d8c9859e846467cd876b432c92718c0a6480b4d970315e2->leave($__internal_6206a347f0335de81d8c9859e846467cd876b432c92718c0a6480b4d970315e2_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c5d8683a887fff848b610966528d912d19c14608021e969597753efd3a7a5bf4 = $this->env->getExtension("native_profiler");
        $__internal_c5d8683a887fff848b610966528d912d19c14608021e969597753efd3a7a5bf4->enter($__internal_c5d8683a887fff848b610966528d912d19c14608021e969597753efd3a7a5bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c5d8683a887fff848b610966528d912d19c14608021e969597753efd3a7a5bf4->leave($__internal_c5d8683a887fff848b610966528d912d19c14608021e969597753efd3a7a5bf4_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_0bc76e8b42bc95d105ec63e745b8110bf13aeae0ab07eaf86401de56be5d1bc4 = $this->env->getExtension("native_profiler");
        $__internal_0bc76e8b42bc95d105ec63e745b8110bf13aeae0ab07eaf86401de56be5d1bc4->enter($__internal_0bc76e8b42bc95d105ec63e745b8110bf13aeae0ab07eaf86401de56be5d1bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_0bc76e8b42bc95d105ec63e745b8110bf13aeae0ab07eaf86401de56be5d1bc4->leave($__internal_0bc76e8b42bc95d105ec63e745b8110bf13aeae0ab07eaf86401de56be5d1bc4_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_adc889396147849cd1a558f1586ae9961c5d32eef552a6776b989764bbd9e0da = $this->env->getExtension("native_profiler");
        $__internal_adc889396147849cd1a558f1586ae9961c5d32eef552a6776b989764bbd9e0da->enter($__internal_adc889396147849cd1a558f1586ae9961c5d32eef552a6776b989764bbd9e0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_adc889396147849cd1a558f1586ae9961c5d32eef552a6776b989764bbd9e0da->leave($__internal_adc889396147849cd1a558f1586ae9961c5d32eef552a6776b989764bbd9e0da_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_8e0481899f152484da805952fa63d66b97dca6e0e2d0d1f535ed643ef9f52a83 = $this->env->getExtension("native_profiler");
        $__internal_8e0481899f152484da805952fa63d66b97dca6e0e2d0d1f535ed643ef9f52a83->enter($__internal_8e0481899f152484da805952fa63d66b97dca6e0e2d0d1f535ed643ef9f52a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_8e0481899f152484da805952fa63d66b97dca6e0e2d0d1f535ed643ef9f52a83->leave($__internal_8e0481899f152484da805952fa63d66b97dca6e0e2d0d1f535ed643ef9f52a83_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_b91c38dceacc1a9d1c74eed61fb8af7d802730e388d90409177e24c6160272b0 = $this->env->getExtension("native_profiler");
        $__internal_b91c38dceacc1a9d1c74eed61fb8af7d802730e388d90409177e24c6160272b0->enter($__internal_b91c38dceacc1a9d1c74eed61fb8af7d802730e388d90409177e24c6160272b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_b91c38dceacc1a9d1c74eed61fb8af7d802730e388d90409177e24c6160272b0->leave($__internal_b91c38dceacc1a9d1c74eed61fb8af7d802730e388d90409177e24c6160272b0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  114 => 32,  108 => 31,  90 => 20,  84 => 19,  73 => 17,  62 => 16,  51 => 15,  40 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
