<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5fbbeab52f608f9db96c013d00dc83d863ad58e1c14bdd9e08827468e7f2257a extends Twig_Template
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
        $__internal_9345c163891f3522683474f4dc9313dab2d9ff16c00ca3db735ac6e3cadd1b1a = $this->env->getExtension("native_profiler");
        $__internal_9345c163891f3522683474f4dc9313dab2d9ff16c00ca3db735ac6e3cadd1b1a->enter($__internal_9345c163891f3522683474f4dc9313dab2d9ff16c00ca3db735ac6e3cadd1b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9345c163891f3522683474f4dc9313dab2d9ff16c00ca3db735ac6e3cadd1b1a->leave($__internal_9345c163891f3522683474f4dc9313dab2d9ff16c00ca3db735ac6e3cadd1b1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
