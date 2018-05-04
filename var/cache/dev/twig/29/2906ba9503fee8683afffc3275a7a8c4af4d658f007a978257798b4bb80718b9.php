<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98d7dda513a28e40954cf0fe4f994038abd57bf1c7e44dd11bb7e023e5e1e0 extends Twig_Template
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
        $__internal_7e6c2c3e771b24e0257df9016ce291230aac7364c9700ba6fe670a3645f8e2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6c2c3e771b24e0257df9016ce291230aac7364c9700ba6fe670a3645f8e2c0->enter($__internal_7e6c2c3e771b24e0257df9016ce291230aac7364c9700ba6fe670a3645f8e2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_706f52098a5ff6eba63fff0c22a7a522b9460312533099d2d4b8f11355c70c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706f52098a5ff6eba63fff0c22a7a522b9460312533099d2d4b8f11355c70c18->enter($__internal_706f52098a5ff6eba63fff0c22a7a522b9460312533099d2d4b8f11355c70c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7e6c2c3e771b24e0257df9016ce291230aac7364c9700ba6fe670a3645f8e2c0->leave($__internal_7e6c2c3e771b24e0257df9016ce291230aac7364c9700ba6fe670a3645f8e2c0_prof);

        
        $__internal_706f52098a5ff6eba63fff0c22a7a522b9460312533099d2d4b8f11355c70c18->leave($__internal_706f52098a5ff6eba63fff0c22a7a522b9460312533099d2d4b8f11355c70c18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
