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
        $__internal_d24fa66167e019c512f6660ae2059a99400bc935bfec77a9e2398030b37df4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24fa66167e019c512f6660ae2059a99400bc935bfec77a9e2398030b37df4bf->enter($__internal_d24fa66167e019c512f6660ae2059a99400bc935bfec77a9e2398030b37df4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9d3d9cd422f76aecc46f68d6bea7ee65baba34c61c7abdfbe34f9ff1d8cdf84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3d9cd422f76aecc46f68d6bea7ee65baba34c61c7abdfbe34f9ff1d8cdf84c->enter($__internal_9d3d9cd422f76aecc46f68d6bea7ee65baba34c61c7abdfbe34f9ff1d8cdf84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d24fa66167e019c512f6660ae2059a99400bc935bfec77a9e2398030b37df4bf->leave($__internal_d24fa66167e019c512f6660ae2059a99400bc935bfec77a9e2398030b37df4bf_prof);

        
        $__internal_9d3d9cd422f76aecc46f68d6bea7ee65baba34c61c7abdfbe34f9ff1d8cdf84c->leave($__internal_9d3d9cd422f76aecc46f68d6bea7ee65baba34c61c7abdfbe34f9ff1d8cdf84c_prof);

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
