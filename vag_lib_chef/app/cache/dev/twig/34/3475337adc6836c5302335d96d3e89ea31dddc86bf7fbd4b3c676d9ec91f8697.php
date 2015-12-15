<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_141ecc1d22620c36389947db1c8b91a2d1025a9a82c9037e9d0eb5adf1cd1e5e extends Twig_Template
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
        $__internal_588f3d4b76f73f0c79a7b14e4f05a34b6134d99b9a5dbbba5f4d226c9b2f920f = $this->env->getExtension("native_profiler");
        $__internal_588f3d4b76f73f0c79a7b14e4f05a34b6134d99b9a5dbbba5f4d226c9b2f920f->enter($__internal_588f3d4b76f73f0c79a7b14e4f05a34b6134d99b9a5dbbba5f4d226c9b2f920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_588f3d4b76f73f0c79a7b14e4f05a34b6134d99b9a5dbbba5f4d226c9b2f920f->leave($__internal_588f3d4b76f73f0c79a7b14e4f05a34b6134d99b9a5dbbba5f4d226c9b2f920f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
