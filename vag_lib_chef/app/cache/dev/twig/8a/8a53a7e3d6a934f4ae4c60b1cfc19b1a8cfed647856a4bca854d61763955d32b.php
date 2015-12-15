<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_235979e7401d9f7c82126dcea3b23454e8dae0988d7bc28640c7307f93004948 extends Twig_Template
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
        $__internal_3fce9971b80aa12383693700d82870f5412822a6e44dee1818cab3d19b3e49b2 = $this->env->getExtension("native_profiler");
        $__internal_3fce9971b80aa12383693700d82870f5412822a6e44dee1818cab3d19b3e49b2->enter($__internal_3fce9971b80aa12383693700d82870f5412822a6e44dee1818cab3d19b3e49b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3fce9971b80aa12383693700d82870f5412822a6e44dee1818cab3d19b3e49b2->leave($__internal_3fce9971b80aa12383693700d82870f5412822a6e44dee1818cab3d19b3e49b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
