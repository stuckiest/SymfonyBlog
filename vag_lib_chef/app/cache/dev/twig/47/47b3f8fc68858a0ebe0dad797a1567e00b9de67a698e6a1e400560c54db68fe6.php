<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_ad1f83490f4624acd4d8b35118d51c3f4273db5ff3e597c2f1ccafc0fdd4ebf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f23af6ecc516d05a7963c3e49c189c997d16a17eb0fb661c86e0750b2979edd1 = $this->env->getExtension("native_profiler");
        $__internal_f23af6ecc516d05a7963c3e49c189c997d16a17eb0fb661c86e0750b2979edd1->enter($__internal_f23af6ecc516d05a7963c3e49c189c997d16a17eb0fb661c86e0750b2979edd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_f23af6ecc516d05a7963c3e49c189c997d16a17eb0fb661c86e0750b2979edd1->leave($__internal_f23af6ecc516d05a7963c3e49c189c997d16a17eb0fb661c86e0750b2979edd1_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_2f312e96957154a4ebe00ef6db134c08437558d57ae4368072398d6917f3d89d = $this->env->getExtension("native_profiler");
        $__internal_2f312e96957154a4ebe00ef6db134c08437558d57ae4368072398d6917f3d89d->enter($__internal_2f312e96957154a4ebe00ef6db134c08437558d57ae4368072398d6917f3d89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_2f312e96957154a4ebe00ef6db134c08437558d57ae4368072398d6917f3d89d->leave($__internal_2f312e96957154a4ebe00ef6db134c08437558d57ae4368072398d6917f3d89d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
