<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_26cbae3642fd389ed75ddc80cbd5bed7dbb72ccf95fbb6e04ae3f3d8140bcc61 extends Twig_Template
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
        $__internal_98e8234c7ab8a411edb97fdf133bbb043f3ff44d75283d91921368cd0dfd920a = $this->env->getExtension("native_profiler");
        $__internal_98e8234c7ab8a411edb97fdf133bbb043f3ff44d75283d91921368cd0dfd920a->enter($__internal_98e8234c7ab8a411edb97fdf133bbb043f3ff44d75283d91921368cd0dfd920a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_98e8234c7ab8a411edb97fdf133bbb043f3ff44d75283d91921368cd0dfd920a->leave($__internal_98e8234c7ab8a411edb97fdf133bbb043f3ff44d75283d91921368cd0dfd920a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
