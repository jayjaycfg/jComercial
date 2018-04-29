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
        $__internal_48cac88fc8b2b41af814304200cfa1882919f9d054b22fdc36e9afecb457875b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cac88fc8b2b41af814304200cfa1882919f9d054b22fdc36e9afecb457875b->enter($__internal_48cac88fc8b2b41af814304200cfa1882919f9d054b22fdc36e9afecb457875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1c5e71fce81f083d4dbddcba6d5972f7d6f83c67fa1238a6807f7ccc16cd0dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5e71fce81f083d4dbddcba6d5972f7d6f83c67fa1238a6807f7ccc16cd0dd6->enter($__internal_1c5e71fce81f083d4dbddcba6d5972f7d6f83c67fa1238a6807f7ccc16cd0dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_48cac88fc8b2b41af814304200cfa1882919f9d054b22fdc36e9afecb457875b->leave($__internal_48cac88fc8b2b41af814304200cfa1882919f9d054b22fdc36e9afecb457875b_prof);

        
        $__internal_1c5e71fce81f083d4dbddcba6d5972f7d6f83c67fa1238a6807f7ccc16cd0dd6->leave($__internal_1c5e71fce81f083d4dbddcba6d5972f7d6f83c67fa1238a6807f7ccc16cd0dd6_prof);

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
