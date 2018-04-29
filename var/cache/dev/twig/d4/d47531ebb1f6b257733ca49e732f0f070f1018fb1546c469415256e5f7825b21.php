<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c90bb60ee7e39ceadc9027a4f93417cf1e414564460c46b6079701f480f248d6 extends Twig_Template
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
        $__internal_4c7bb9b853959deaf9cae0cd804dd9b268ce80e9f9f34cc309802efe36e552e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7bb9b853959deaf9cae0cd804dd9b268ce80e9f9f34cc309802efe36e552e2->enter($__internal_4c7bb9b853959deaf9cae0cd804dd9b268ce80e9f9f34cc309802efe36e552e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c6f7aba6ca62bac39a7f72c66fbde94a2955d2102efa615066112495bf69ce6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f7aba6ca62bac39a7f72c66fbde94a2955d2102efa615066112495bf69ce6b->enter($__internal_c6f7aba6ca62bac39a7f72c66fbde94a2955d2102efa615066112495bf69ce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4c7bb9b853959deaf9cae0cd804dd9b268ce80e9f9f34cc309802efe36e552e2->leave($__internal_4c7bb9b853959deaf9cae0cd804dd9b268ce80e9f9f34cc309802efe36e552e2_prof);

        
        $__internal_c6f7aba6ca62bac39a7f72c66fbde94a2955d2102efa615066112495bf69ce6b->leave($__internal_c6f7aba6ca62bac39a7f72c66fbde94a2955d2102efa615066112495bf69ce6b_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
