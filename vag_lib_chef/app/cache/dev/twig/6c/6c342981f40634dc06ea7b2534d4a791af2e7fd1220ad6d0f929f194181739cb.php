<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_18c733af9f96766db0cc65174bdb879c6cc40d33567890a4c23596d0611d2fc2 extends Twig_Template
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
        $__internal_0bbe311b0f12332eb4c56fe8f2379594352e66f87f7d740ec6290da28af6d6f3 = $this->env->getExtension("native_profiler");
        $__internal_0bbe311b0f12332eb4c56fe8f2379594352e66f87f7d740ec6290da28af6d6f3->enter($__internal_0bbe311b0f12332eb4c56fe8f2379594352e66f87f7d740ec6290da28af6d6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0bbe311b0f12332eb4c56fe8f2379594352e66f87f7d740ec6290da28af6d6f3->leave($__internal_0bbe311b0f12332eb4c56fe8f2379594352e66f87f7d740ec6290da28af6d6f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
