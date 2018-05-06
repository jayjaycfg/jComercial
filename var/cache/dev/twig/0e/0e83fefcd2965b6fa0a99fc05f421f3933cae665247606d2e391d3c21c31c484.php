<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_175b6ce867f5a90d57d065b2e25b22389265e3d6d895c4b5f249ac7ce76d5f66 extends Twig_Template
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
        $__internal_b63de7eff306a72cf306bd930ce287bfc27331aba6cc3b4d88827a2032196387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63de7eff306a72cf306bd930ce287bfc27331aba6cc3b4d88827a2032196387->enter($__internal_b63de7eff306a72cf306bd930ce287bfc27331aba6cc3b4d88827a2032196387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a9fd9580b140e221372c27ae341d6dac0f0a2899c3d50bf89af0594500b6a312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fd9580b140e221372c27ae341d6dac0f0a2899c3d50bf89af0594500b6a312->enter($__internal_a9fd9580b140e221372c27ae341d6dac0f0a2899c3d50bf89af0594500b6a312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b63de7eff306a72cf306bd930ce287bfc27331aba6cc3b4d88827a2032196387->leave($__internal_b63de7eff306a72cf306bd930ce287bfc27331aba6cc3b4d88827a2032196387_prof);

        
        $__internal_a9fd9580b140e221372c27ae341d6dac0f0a2899c3d50bf89af0594500b6a312->leave($__internal_a9fd9580b140e221372c27ae341d6dac0f0a2899c3d50bf89af0594500b6a312_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
