<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_775d9db8afc98a86adcf98226ce6e6b6996eacc4b800f5c411bd915966d82200 extends Twig_Template
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
        $__internal_d20a58372f83eec33cdcf7ca414b0038e8503342c7cb39d2d549fd24b5f343a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20a58372f83eec33cdcf7ca414b0038e8503342c7cb39d2d549fd24b5f343a5->enter($__internal_d20a58372f83eec33cdcf7ca414b0038e8503342c7cb39d2d549fd24b5f343a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5ebd5cebf675edd25ae93bbf18ce795e9058c5a179a2333b795487e4d3664df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebd5cebf675edd25ae93bbf18ce795e9058c5a179a2333b795487e4d3664df8->enter($__internal_5ebd5cebf675edd25ae93bbf18ce795e9058c5a179a2333b795487e4d3664df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d20a58372f83eec33cdcf7ca414b0038e8503342c7cb39d2d549fd24b5f343a5->leave($__internal_d20a58372f83eec33cdcf7ca414b0038e8503342c7cb39d2d549fd24b5f343a5_prof);

        
        $__internal_5ebd5cebf675edd25ae93bbf18ce795e9058c5a179a2333b795487e4d3664df8->leave($__internal_5ebd5cebf675edd25ae93bbf18ce795e9058c5a179a2333b795487e4d3664df8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
