<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6ae9df84ffd6368af72dffa28a67fda00ac66664c8e5745f38d2d8255007148d extends Twig_Template
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
        $__internal_c6c831a4de7c42ff74d13bc209ab6861dc1b3ae5fe02fee3272cd9fa4a70910b = $this->env->getExtension("native_profiler");
        $__internal_c6c831a4de7c42ff74d13bc209ab6861dc1b3ae5fe02fee3272cd9fa4a70910b->enter($__internal_c6c831a4de7c42ff74d13bc209ab6861dc1b3ae5fe02fee3272cd9fa4a70910b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c6c831a4de7c42ff74d13bc209ab6861dc1b3ae5fe02fee3272cd9fa4a70910b->leave($__internal_c6c831a4de7c42ff74d13bc209ab6861dc1b3ae5fe02fee3272cd9fa4a70910b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
