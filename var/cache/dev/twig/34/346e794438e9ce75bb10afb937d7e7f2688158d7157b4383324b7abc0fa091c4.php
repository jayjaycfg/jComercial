<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_454ccf03503c55d47dbeae62cb108dff358a85c913080b18a6f7ec4e853910bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454ccf03503c55d47dbeae62cb108dff358a85c913080b18a6f7ec4e853910bf->enter($__internal_454ccf03503c55d47dbeae62cb108dff358a85c913080b18a6f7ec4e853910bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_adf3c1431c7632ddd4b9c271e4c06c05f943d322249d97128ca502cc062db406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf3c1431c7632ddd4b9c271e4c06c05f943d322249d97128ca502cc062db406->enter($__internal_adf3c1431c7632ddd4b9c271e4c06c05f943d322249d97128ca502cc062db406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_454ccf03503c55d47dbeae62cb108dff358a85c913080b18a6f7ec4e853910bf->leave($__internal_454ccf03503c55d47dbeae62cb108dff358a85c913080b18a6f7ec4e853910bf_prof);

        
        $__internal_adf3c1431c7632ddd4b9c271e4c06c05f943d322249d97128ca502cc062db406->leave($__internal_adf3c1431c7632ddd4b9c271e4c06c05f943d322249d97128ca502cc062db406_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
