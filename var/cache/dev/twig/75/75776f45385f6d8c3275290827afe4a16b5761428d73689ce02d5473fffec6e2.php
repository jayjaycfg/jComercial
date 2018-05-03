<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c23ca9f22ed00e48e7dc54bb4272e9abad87680fc001638199a83a6562b06463 extends Twig_Template
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
        $__internal_a5209b2853ea2d28e32af5e8e9e5695f84afd9b7117620d6d016f2eebeb2eaf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5209b2853ea2d28e32af5e8e9e5695f84afd9b7117620d6d016f2eebeb2eaf9->enter($__internal_a5209b2853ea2d28e32af5e8e9e5695f84afd9b7117620d6d016f2eebeb2eaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_57de29f46c11b39ec24d6c37661ff6d506414909ecd748aea7cc4aea70851f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57de29f46c11b39ec24d6c37661ff6d506414909ecd748aea7cc4aea70851f23->enter($__internal_57de29f46c11b39ec24d6c37661ff6d506414909ecd748aea7cc4aea70851f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a5209b2853ea2d28e32af5e8e9e5695f84afd9b7117620d6d016f2eebeb2eaf9->leave($__internal_a5209b2853ea2d28e32af5e8e9e5695f84afd9b7117620d6d016f2eebeb2eaf9_prof);

        
        $__internal_57de29f46c11b39ec24d6c37661ff6d506414909ecd748aea7cc4aea70851f23->leave($__internal_57de29f46c11b39ec24d6c37661ff6d506414909ecd748aea7cc4aea70851f23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
