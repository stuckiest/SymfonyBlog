<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5165bcfac3eac8cc1971bcfb030b840f3750628cca2834d87c3f58571cbe47ab extends Twig_Template
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
        $__internal_48d88d1f6f0c9cb2bdd3e223df0e0cbc184c576bba0ca2b4eb6ee2a15b8f6dff = $this->env->getExtension("native_profiler");
        $__internal_48d88d1f6f0c9cb2bdd3e223df0e0cbc184c576bba0ca2b4eb6ee2a15b8f6dff->enter($__internal_48d88d1f6f0c9cb2bdd3e223df0e0cbc184c576bba0ca2b4eb6ee2a15b8f6dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_48d88d1f6f0c9cb2bdd3e223df0e0cbc184c576bba0ca2b4eb6ee2a15b8f6dff->leave($__internal_48d88d1f6f0c9cb2bdd3e223df0e0cbc184c576bba0ca2b4eb6ee2a15b8f6dff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
