<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e64f839730cfe6823d146b0a7c176efb9996a1ade7405ed9ed5cf3c0ffa3ae59 extends Twig_Template
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
        $__internal_a266f259db6dcae9a223a5f569e04389580eec063b703a2574257b6d1aaca545 = $this->env->getExtension("native_profiler");
        $__internal_a266f259db6dcae9a223a5f569e04389580eec063b703a2574257b6d1aaca545->enter($__internal_a266f259db6dcae9a223a5f569e04389580eec063b703a2574257b6d1aaca545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a266f259db6dcae9a223a5f569e04389580eec063b703a2574257b6d1aaca545->leave($__internal_a266f259db6dcae9a223a5f569e04389580eec063b703a2574257b6d1aaca545_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
