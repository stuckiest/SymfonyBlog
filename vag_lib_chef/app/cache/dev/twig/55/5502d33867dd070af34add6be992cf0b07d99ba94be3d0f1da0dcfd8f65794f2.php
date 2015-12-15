<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fecd66ed6047ca29e07a2ffbe0cde44f5bc26365b264475c21183e09cb6e78ee extends Twig_Template
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
        $__internal_92196eea43c754810410b3954edfa74ac131cbca59fd635d53be853c9469fa2e = $this->env->getExtension("native_profiler");
        $__internal_92196eea43c754810410b3954edfa74ac131cbca59fd635d53be853c9469fa2e->enter($__internal_92196eea43c754810410b3954edfa74ac131cbca59fd635d53be853c9469fa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_92196eea43c754810410b3954edfa74ac131cbca59fd635d53be853c9469fa2e->leave($__internal_92196eea43c754810410b3954edfa74ac131cbca59fd635d53be853c9469fa2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
