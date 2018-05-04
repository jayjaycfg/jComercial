<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a3f6cf6086d484b923836b0a12f513cb56c7628150a5bb964f028a5858c76b5 extends Twig_Template
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
        $__internal_ec80535aa078e1d609ece7bd2a5bef1bed39bc058b9fca719caba23c1d30e8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec80535aa078e1d609ece7bd2a5bef1bed39bc058b9fca719caba23c1d30e8e7->enter($__internal_ec80535aa078e1d609ece7bd2a5bef1bed39bc058b9fca719caba23c1d30e8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9f4de859f05038c1f4a412642118314620bc5510a70d060034ddf961e8f8626e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4de859f05038c1f4a412642118314620bc5510a70d060034ddf961e8f8626e->enter($__internal_9f4de859f05038c1f4a412642118314620bc5510a70d060034ddf961e8f8626e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ec80535aa078e1d609ece7bd2a5bef1bed39bc058b9fca719caba23c1d30e8e7->leave($__internal_ec80535aa078e1d609ece7bd2a5bef1bed39bc058b9fca719caba23c1d30e8e7_prof);

        
        $__internal_9f4de859f05038c1f4a412642118314620bc5510a70d060034ddf961e8f8626e->leave($__internal_9f4de859f05038c1f4a412642118314620bc5510a70d060034ddf961e8f8626e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
