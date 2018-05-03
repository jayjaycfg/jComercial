<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a862fb6d30ff5910b1b3bef696c4f28b770c900dd3f91037dd793d5bcc44567 extends Twig_Template
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
        $__internal_5b1e57a9011903749a8a857c07349779f426cd843d6a64475835686afb145b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1e57a9011903749a8a857c07349779f426cd843d6a64475835686afb145b9a->enter($__internal_5b1e57a9011903749a8a857c07349779f426cd843d6a64475835686afb145b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_22a01a1111a8a3eead8cc6e4792ccdd9a90119bb57bf90499192de7d40036b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a01a1111a8a3eead8cc6e4792ccdd9a90119bb57bf90499192de7d40036b3a->enter($__internal_22a01a1111a8a3eead8cc6e4792ccdd9a90119bb57bf90499192de7d40036b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5b1e57a9011903749a8a857c07349779f426cd843d6a64475835686afb145b9a->leave($__internal_5b1e57a9011903749a8a857c07349779f426cd843d6a64475835686afb145b9a_prof);

        
        $__internal_22a01a1111a8a3eead8cc6e4792ccdd9a90119bb57bf90499192de7d40036b3a->leave($__internal_22a01a1111a8a3eead8cc6e4792ccdd9a90119bb57bf90499192de7d40036b3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
