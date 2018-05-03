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
        $__internal_a0c3b52c23adf38ffda41718d8deb869b768eff3a8349992d593abf10e189020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c3b52c23adf38ffda41718d8deb869b768eff3a8349992d593abf10e189020->enter($__internal_a0c3b52c23adf38ffda41718d8deb869b768eff3a8349992d593abf10e189020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_abd6988c86338a9c441cf9c94745437700adf401d6deae6928308c0c8a2e566b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd6988c86338a9c441cf9c94745437700adf401d6deae6928308c0c8a2e566b->enter($__internal_abd6988c86338a9c441cf9c94745437700adf401d6deae6928308c0c8a2e566b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a0c3b52c23adf38ffda41718d8deb869b768eff3a8349992d593abf10e189020->leave($__internal_a0c3b52c23adf38ffda41718d8deb869b768eff3a8349992d593abf10e189020_prof);

        
        $__internal_abd6988c86338a9c441cf9c94745437700adf401d6deae6928308c0c8a2e566b->leave($__internal_abd6988c86338a9c441cf9c94745437700adf401d6deae6928308c0c8a2e566b_prof);

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
