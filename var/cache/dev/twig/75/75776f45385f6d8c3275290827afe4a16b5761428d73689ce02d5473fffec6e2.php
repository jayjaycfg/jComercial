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
        $__internal_84e243d87a7ea10ee4f082d9c6984dd2ff0ceaa311a7fe32cab125a98f00f6d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e243d87a7ea10ee4f082d9c6984dd2ff0ceaa311a7fe32cab125a98f00f6d8->enter($__internal_84e243d87a7ea10ee4f082d9c6984dd2ff0ceaa311a7fe32cab125a98f00f6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f2c7fd349ec2d9f7e5432f873b8bcf617c0ad706466abc66071f0da15569d360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c7fd349ec2d9f7e5432f873b8bcf617c0ad706466abc66071f0da15569d360->enter($__internal_f2c7fd349ec2d9f7e5432f873b8bcf617c0ad706466abc66071f0da15569d360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_84e243d87a7ea10ee4f082d9c6984dd2ff0ceaa311a7fe32cab125a98f00f6d8->leave($__internal_84e243d87a7ea10ee4f082d9c6984dd2ff0ceaa311a7fe32cab125a98f00f6d8_prof);

        
        $__internal_f2c7fd349ec2d9f7e5432f873b8bcf617c0ad706466abc66071f0da15569d360->leave($__internal_f2c7fd349ec2d9f7e5432f873b8bcf617c0ad706466abc66071f0da15569d360_prof);

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
