<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_aad17ca77f9f1ce5f08cf28b0232e346e327cb932c689bd07e5d9c409b99fafc extends Twig_Template
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
        $__internal_eab86c4ab66a40a9a7f97f18af525b4f4f4bae190ab8a7a3a941abd726b766e6 = $this->env->getExtension("native_profiler");
        $__internal_eab86c4ab66a40a9a7f97f18af525b4f4f4bae190ab8a7a3a941abd726b766e6->enter($__internal_eab86c4ab66a40a9a7f97f18af525b4f4f4bae190ab8a7a3a941abd726b766e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_eab86c4ab66a40a9a7f97f18af525b4f4f4bae190ab8a7a3a941abd726b766e6->leave($__internal_eab86c4ab66a40a9a7f97f18af525b4f4f4bae190ab8a7a3a941abd726b766e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
