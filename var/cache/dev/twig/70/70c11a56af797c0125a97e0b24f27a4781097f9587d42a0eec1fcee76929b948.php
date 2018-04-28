<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_386cc72c687c4c373171fe66ee9af7f735eee19f02f6aee58b606f032e4f9d2a extends Twig_Template
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
        $__internal_b2e815f6c7d8c089736286818ef01fa971f3ebc4c827a85e0ba715849a5d71b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e815f6c7d8c089736286818ef01fa971f3ebc4c827a85e0ba715849a5d71b6->enter($__internal_b2e815f6c7d8c089736286818ef01fa971f3ebc4c827a85e0ba715849a5d71b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1546f09ac0208fc93b5c21c0da9ae32dc259a8c9adad58c9385a1a1a3c807258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1546f09ac0208fc93b5c21c0da9ae32dc259a8c9adad58c9385a1a1a3c807258->enter($__internal_1546f09ac0208fc93b5c21c0da9ae32dc259a8c9adad58c9385a1a1a3c807258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b2e815f6c7d8c089736286818ef01fa971f3ebc4c827a85e0ba715849a5d71b6->leave($__internal_b2e815f6c7d8c089736286818ef01fa971f3ebc4c827a85e0ba715849a5d71b6_prof);

        
        $__internal_1546f09ac0208fc93b5c21c0da9ae32dc259a8c9adad58c9385a1a1a3c807258->leave($__internal_1546f09ac0208fc93b5c21c0da9ae32dc259a8c9adad58c9385a1a1a3c807258_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
