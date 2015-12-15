<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9235c01ce0a9876343fd111177952ae8dd9a7e30073bba8735a80246d9aeb696 extends Twig_Template
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
        $__internal_b4b1ca7614853b2fc37c6158e3b6c6e7ca7158650039e8e06d9b5c3163ef4442 = $this->env->getExtension("native_profiler");
        $__internal_b4b1ca7614853b2fc37c6158e3b6c6e7ca7158650039e8e06d9b5c3163ef4442->enter($__internal_b4b1ca7614853b2fc37c6158e3b6c6e7ca7158650039e8e06d9b5c3163ef4442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b4b1ca7614853b2fc37c6158e3b6c6e7ca7158650039e8e06d9b5c3163ef4442->leave($__internal_b4b1ca7614853b2fc37c6158e3b6c6e7ca7158650039e8e06d9b5c3163ef4442_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
