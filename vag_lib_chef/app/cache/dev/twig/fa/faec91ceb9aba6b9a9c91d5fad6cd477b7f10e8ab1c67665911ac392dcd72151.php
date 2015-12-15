<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_abb58d2cbff872b0afd43774829260ab344775b57f17a1b84dc436dcf4555422 extends Twig_Template
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
        $__internal_e585cae15e9c7444a71707e49055aefa5ee936f90f8991425300bfed1b5babf8 = $this->env->getExtension("native_profiler");
        $__internal_e585cae15e9c7444a71707e49055aefa5ee936f90f8991425300bfed1b5babf8->enter($__internal_e585cae15e9c7444a71707e49055aefa5ee936f90f8991425300bfed1b5babf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e585cae15e9c7444a71707e49055aefa5ee936f90f8991425300bfed1b5babf8->leave($__internal_e585cae15e9c7444a71707e49055aefa5ee936f90f8991425300bfed1b5babf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
