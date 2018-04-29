<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4c54f61988717b350e8df03ba01d18691275efdddf84462d85981f91b3ee8baa extends Twig_Template
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
        $__internal_0827341b9839d17b9721bd4d0ce63940484be503a4e07c6118dc28db1d0af1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0827341b9839d17b9721bd4d0ce63940484be503a4e07c6118dc28db1d0af1d3->enter($__internal_0827341b9839d17b9721bd4d0ce63940484be503a4e07c6118dc28db1d0af1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_87cb0e852dc01bc3ffcf7dbaba5be021d8ee2effebbcb813f6215b8206bf04c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87cb0e852dc01bc3ffcf7dbaba5be021d8ee2effebbcb813f6215b8206bf04c6->enter($__internal_87cb0e852dc01bc3ffcf7dbaba5be021d8ee2effebbcb813f6215b8206bf04c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0827341b9839d17b9721bd4d0ce63940484be503a4e07c6118dc28db1d0af1d3->leave($__internal_0827341b9839d17b9721bd4d0ce63940484be503a4e07c6118dc28db1d0af1d3_prof);

        
        $__internal_87cb0e852dc01bc3ffcf7dbaba5be021d8ee2effebbcb813f6215b8206bf04c6->leave($__internal_87cb0e852dc01bc3ffcf7dbaba5be021d8ee2effebbcb813f6215b8206bf04c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
