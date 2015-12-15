<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7bc409f17325160223acac2738645934c6584d4e10df990df9a0e7fe072a5477 extends Twig_Template
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
        $__internal_b7565e94208d34ed0e82eeb0707428e33c9170f2cf887dd96fbe3b08e4055989 = $this->env->getExtension("native_profiler");
        $__internal_b7565e94208d34ed0e82eeb0707428e33c9170f2cf887dd96fbe3b08e4055989->enter($__internal_b7565e94208d34ed0e82eeb0707428e33c9170f2cf887dd96fbe3b08e4055989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b7565e94208d34ed0e82eeb0707428e33c9170f2cf887dd96fbe3b08e4055989->leave($__internal_b7565e94208d34ed0e82eeb0707428e33c9170f2cf887dd96fbe3b08e4055989_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
