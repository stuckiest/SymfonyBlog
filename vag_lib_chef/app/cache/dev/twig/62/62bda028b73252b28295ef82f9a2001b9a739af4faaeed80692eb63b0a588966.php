<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3eaca6f083cead27a8b9744f8e28febd3a8dfa9d38f477e1c510c7e4ece99abf extends Twig_Template
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
        $__internal_ab1ad07e4adcdc94398faa67931c4ab9dc2c83cf46be28cd5f0fe8d33875a162 = $this->env->getExtension("native_profiler");
        $__internal_ab1ad07e4adcdc94398faa67931c4ab9dc2c83cf46be28cd5f0fe8d33875a162->enter($__internal_ab1ad07e4adcdc94398faa67931c4ab9dc2c83cf46be28cd5f0fe8d33875a162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ab1ad07e4adcdc94398faa67931c4ab9dc2c83cf46be28cd5f0fe8d33875a162->leave($__internal_ab1ad07e4adcdc94398faa67931c4ab9dc2c83cf46be28cd5f0fe8d33875a162_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
