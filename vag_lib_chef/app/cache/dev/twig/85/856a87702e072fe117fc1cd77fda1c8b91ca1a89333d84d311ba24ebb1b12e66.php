<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_88f1c927d8656c60a89672cba9888ff07de017d59eeb0c36bf08d6673c82d850 extends Twig_Template
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
        $__internal_b9e04cc42acb8b64d49070d926abce33355166019f44897932f23492bc2996ea = $this->env->getExtension("native_profiler");
        $__internal_b9e04cc42acb8b64d49070d926abce33355166019f44897932f23492bc2996ea->enter($__internal_b9e04cc42acb8b64d49070d926abce33355166019f44897932f23492bc2996ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b9e04cc42acb8b64d49070d926abce33355166019f44897932f23492bc2996ea->leave($__internal_b9e04cc42acb8b64d49070d926abce33355166019f44897932f23492bc2996ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
