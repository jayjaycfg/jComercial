<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5c060836cae49a47269375db264f99d66a38d16e07ebf891f345d4cc2de7bff2 extends Twig_Template
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
        $__internal_7012bda2e885f9c68b4b5906266b4589c455cf71efa2deaa74fb8cd82eeb0633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7012bda2e885f9c68b4b5906266b4589c455cf71efa2deaa74fb8cd82eeb0633->enter($__internal_7012bda2e885f9c68b4b5906266b4589c455cf71efa2deaa74fb8cd82eeb0633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b3bf807dc0f709d3700b87481c2cc1a646a112ee22d12f2adb8d601c6aa84537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bf807dc0f709d3700b87481c2cc1a646a112ee22d12f2adb8d601c6aa84537->enter($__internal_b3bf807dc0f709d3700b87481c2cc1a646a112ee22d12f2adb8d601c6aa84537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7012bda2e885f9c68b4b5906266b4589c455cf71efa2deaa74fb8cd82eeb0633->leave($__internal_7012bda2e885f9c68b4b5906266b4589c455cf71efa2deaa74fb8cd82eeb0633_prof);

        
        $__internal_b3bf807dc0f709d3700b87481c2cc1a646a112ee22d12f2adb8d601c6aa84537->leave($__internal_b3bf807dc0f709d3700b87481c2cc1a646a112ee22d12f2adb8d601c6aa84537_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
