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
        $__internal_939455756c936f740bc1ef7ad4366fed3e487079d00c306546f6b7bfbf7a6cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939455756c936f740bc1ef7ad4366fed3e487079d00c306546f6b7bfbf7a6cdd->enter($__internal_939455756c936f740bc1ef7ad4366fed3e487079d00c306546f6b7bfbf7a6cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6e3784cb0b98715d5e8417719c2d7fb1fdeeac967e997941ed9d12cae58a982e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3784cb0b98715d5e8417719c2d7fb1fdeeac967e997941ed9d12cae58a982e->enter($__internal_6e3784cb0b98715d5e8417719c2d7fb1fdeeac967e997941ed9d12cae58a982e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_939455756c936f740bc1ef7ad4366fed3e487079d00c306546f6b7bfbf7a6cdd->leave($__internal_939455756c936f740bc1ef7ad4366fed3e487079d00c306546f6b7bfbf7a6cdd_prof);

        
        $__internal_6e3784cb0b98715d5e8417719c2d7fb1fdeeac967e997941ed9d12cae58a982e->leave($__internal_6e3784cb0b98715d5e8417719c2d7fb1fdeeac967e997941ed9d12cae58a982e_prof);

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
