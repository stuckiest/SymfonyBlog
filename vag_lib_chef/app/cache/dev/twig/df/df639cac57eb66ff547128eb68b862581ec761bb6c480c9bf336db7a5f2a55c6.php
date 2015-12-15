<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_52dee6188c3e79e99ccb20872dd9d7e7377f0a9f78b33ec426c901322f7d24c0 extends Twig_Template
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
        $__internal_b1327365b431f877612d8c1c1c28ded0fa105fd7ae903b908e8d76287ec012e5 = $this->env->getExtension("native_profiler");
        $__internal_b1327365b431f877612d8c1c1c28ded0fa105fd7ae903b908e8d76287ec012e5->enter($__internal_b1327365b431f877612d8c1c1c28ded0fa105fd7ae903b908e8d76287ec012e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b1327365b431f877612d8c1c1c28ded0fa105fd7ae903b908e8d76287ec012e5->leave($__internal_b1327365b431f877612d8c1c1c28ded0fa105fd7ae903b908e8d76287ec012e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
