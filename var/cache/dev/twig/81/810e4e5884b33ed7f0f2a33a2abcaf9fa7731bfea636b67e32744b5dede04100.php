<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_23d2a24170420de7d4c3e5aed4a2f763687bcaa704969614733b72bfc477a56d extends Twig_Template
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
        $__internal_32c3532d52d6fe747fa65a899cc4dcd2b728b03551623a6bc56587ee7dc9b113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c3532d52d6fe747fa65a899cc4dcd2b728b03551623a6bc56587ee7dc9b113->enter($__internal_32c3532d52d6fe747fa65a899cc4dcd2b728b03551623a6bc56587ee7dc9b113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7cbcd47d6679970011f9747c8e0e821a300f348e22252e5db14e4d4a798eaf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbcd47d6679970011f9747c8e0e821a300f348e22252e5db14e4d4a798eaf3c->enter($__internal_7cbcd47d6679970011f9747c8e0e821a300f348e22252e5db14e4d4a798eaf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_32c3532d52d6fe747fa65a899cc4dcd2b728b03551623a6bc56587ee7dc9b113->leave($__internal_32c3532d52d6fe747fa65a899cc4dcd2b728b03551623a6bc56587ee7dc9b113_prof);

        
        $__internal_7cbcd47d6679970011f9747c8e0e821a300f348e22252e5db14e4d4a798eaf3c->leave($__internal_7cbcd47d6679970011f9747c8e0e821a300f348e22252e5db14e4d4a798eaf3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
