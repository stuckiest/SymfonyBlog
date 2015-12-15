<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7fa66b018f5e2c00c747e343e8b846d11ec704cd5434dcfd69887c14ded7e84c extends Twig_Template
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
        $__internal_b0bcc79722a9117b6002f33d56702f6413d906cf857138af90f1c0a814f37733 = $this->env->getExtension("native_profiler");
        $__internal_b0bcc79722a9117b6002f33d56702f6413d906cf857138af90f1c0a814f37733->enter($__internal_b0bcc79722a9117b6002f33d56702f6413d906cf857138af90f1c0a814f37733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b0bcc79722a9117b6002f33d56702f6413d906cf857138af90f1c0a814f37733->leave($__internal_b0bcc79722a9117b6002f33d56702f6413d906cf857138af90f1c0a814f37733_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
