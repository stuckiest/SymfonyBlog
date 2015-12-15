<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_28c8df59c17c477c772bd7b08161bf7fc808ade6d27e1b21a16c7f190a241255 extends Twig_Template
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
        $__internal_a3ef54b41d9902cfcaf743cf725cb13a43cbfb5d270b43c7741313ba5ca80908 = $this->env->getExtension("native_profiler");
        $__internal_a3ef54b41d9902cfcaf743cf725cb13a43cbfb5d270b43c7741313ba5ca80908->enter($__internal_a3ef54b41d9902cfcaf743cf725cb13a43cbfb5d270b43c7741313ba5ca80908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a3ef54b41d9902cfcaf743cf725cb13a43cbfb5d270b43c7741313ba5ca80908->leave($__internal_a3ef54b41d9902cfcaf743cf725cb13a43cbfb5d270b43c7741313ba5ca80908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
