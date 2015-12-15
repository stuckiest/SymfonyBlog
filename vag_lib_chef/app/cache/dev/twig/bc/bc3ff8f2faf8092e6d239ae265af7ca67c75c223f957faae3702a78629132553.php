<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a13572f5f344bcf010eeb6cd7706cf26b702458dea0dae1045301ce01d3ef195 extends Twig_Template
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
        $__internal_e852c2936c1031e677dd80b67005d8d3d068fafd6c568d847a60aa7ebe5e24a5 = $this->env->getExtension("native_profiler");
        $__internal_e852c2936c1031e677dd80b67005d8d3d068fafd6c568d847a60aa7ebe5e24a5->enter($__internal_e852c2936c1031e677dd80b67005d8d3d068fafd6c568d847a60aa7ebe5e24a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e852c2936c1031e677dd80b67005d8d3d068fafd6c568d847a60aa7ebe5e24a5->leave($__internal_e852c2936c1031e677dd80b67005d8d3d068fafd6c568d847a60aa7ebe5e24a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
