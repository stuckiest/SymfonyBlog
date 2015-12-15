<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_44186aa381a662cd9b38104b03feb83d444d0175728fa631a52da33e656babdd extends Twig_Template
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
        $__internal_ceaf4104f762e16c1ce00acfc8b8168f5977c9e1157c5729d6c8ff610eb5be0e = $this->env->getExtension("native_profiler");
        $__internal_ceaf4104f762e16c1ce00acfc8b8168f5977c9e1157c5729d6c8ff610eb5be0e->enter($__internal_ceaf4104f762e16c1ce00acfc8b8168f5977c9e1157c5729d6c8ff610eb5be0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ceaf4104f762e16c1ce00acfc8b8168f5977c9e1157c5729d6c8ff610eb5be0e->leave($__internal_ceaf4104f762e16c1ce00acfc8b8168f5977c9e1157c5729d6c8ff610eb5be0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
