<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cd665b4961e8ff189fad7ba52230790b95be514d9def5f1d7c72958f14873073 extends Twig_Template
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
        $__internal_28884831ba8b9e7d3704f25128b98b860e5ffd9457a92ead777f6a5f559e6a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28884831ba8b9e7d3704f25128b98b860e5ffd9457a92ead777f6a5f559e6a76->enter($__internal_28884831ba8b9e7d3704f25128b98b860e5ffd9457a92ead777f6a5f559e6a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_22dc18284a0d7c8c01ba92d1d8e8361492e6d10c7f93b8fa10883b6ccd951604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dc18284a0d7c8c01ba92d1d8e8361492e6d10c7f93b8fa10883b6ccd951604->enter($__internal_22dc18284a0d7c8c01ba92d1d8e8361492e6d10c7f93b8fa10883b6ccd951604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_28884831ba8b9e7d3704f25128b98b860e5ffd9457a92ead777f6a5f559e6a76->leave($__internal_28884831ba8b9e7d3704f25128b98b860e5ffd9457a92ead777f6a5f559e6a76_prof);

        
        $__internal_22dc18284a0d7c8c01ba92d1d8e8361492e6d10c7f93b8fa10883b6ccd951604->leave($__internal_22dc18284a0d7c8c01ba92d1d8e8361492e6d10c7f93b8fa10883b6ccd951604_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
