<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_92d09a900be8462e5dc42f917e0534283c8e46401f961a7f9ef3b44326e9cbb1 extends Twig_Template
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
        $__internal_bff08c87402d149146d5b9bbd2b0f07af28d77fc3fee9b6343ff6191fc0f1a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff08c87402d149146d5b9bbd2b0f07af28d77fc3fee9b6343ff6191fc0f1a5b->enter($__internal_bff08c87402d149146d5b9bbd2b0f07af28d77fc3fee9b6343ff6191fc0f1a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6f299bf9ea3dc9e6305a597c93c1845161c31cdc9a7e47d6497969d3041ba5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f299bf9ea3dc9e6305a597c93c1845161c31cdc9a7e47d6497969d3041ba5c6->enter($__internal_6f299bf9ea3dc9e6305a597c93c1845161c31cdc9a7e47d6497969d3041ba5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bff08c87402d149146d5b9bbd2b0f07af28d77fc3fee9b6343ff6191fc0f1a5b->leave($__internal_bff08c87402d149146d5b9bbd2b0f07af28d77fc3fee9b6343ff6191fc0f1a5b_prof);

        
        $__internal_6f299bf9ea3dc9e6305a597c93c1845161c31cdc9a7e47d6497969d3041ba5c6->leave($__internal_6f299bf9ea3dc9e6305a597c93c1845161c31cdc9a7e47d6497969d3041ba5c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
