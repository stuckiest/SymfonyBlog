<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_a120835013b99063770fdab9e5f1344471b3aee669fb938e3787f80e14218e08 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd6916e4bdef74be242e182b49e004c5bfea6d17e67d2b1d818afbe1632048bc = $this->env->getExtension("native_profiler");
        $__internal_dd6916e4bdef74be242e182b49e004c5bfea6d17e67d2b1d818afbe1632048bc->enter($__internal_dd6916e4bdef74be242e182b49e004c5bfea6d17e67d2b1d818afbe1632048bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd6916e4bdef74be242e182b49e004c5bfea6d17e67d2b1d818afbe1632048bc->leave($__internal_dd6916e4bdef74be242e182b49e004c5bfea6d17e67d2b1d818afbe1632048bc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_61b6a0d25adaf3b6aacaf3473c527807ddaa710d8c99cedca95c7d351a66217a = $this->env->getExtension("native_profiler");
        $__internal_61b6a0d25adaf3b6aacaf3473c527807ddaa710d8c99cedca95c7d351a66217a->enter($__internal_61b6a0d25adaf3b6aacaf3473c527807ddaa710d8c99cedca95c7d351a66217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_61b6a0d25adaf3b6aacaf3473c527807ddaa710d8c99cedca95c7d351a66217a->leave($__internal_61b6a0d25adaf3b6aacaf3473c527807ddaa710d8c99cedca95c7d351a66217a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
