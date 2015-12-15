<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4c21ad017971b0bc59fb3ee8f70719f483cd0dd9f62d733a63c5f6a1ced06cbe extends Twig_Template
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
        $__internal_65edd5cbbd3aa37cbd27d16dcfa1e6550cf1adfb7ad99553f57f3b2461ad9153 = $this->env->getExtension("native_profiler");
        $__internal_65edd5cbbd3aa37cbd27d16dcfa1e6550cf1adfb7ad99553f57f3b2461ad9153->enter($__internal_65edd5cbbd3aa37cbd27d16dcfa1e6550cf1adfb7ad99553f57f3b2461ad9153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_65edd5cbbd3aa37cbd27d16dcfa1e6550cf1adfb7ad99553f57f3b2461ad9153->leave($__internal_65edd5cbbd3aa37cbd27d16dcfa1e6550cf1adfb7ad99553f57f3b2461ad9153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
