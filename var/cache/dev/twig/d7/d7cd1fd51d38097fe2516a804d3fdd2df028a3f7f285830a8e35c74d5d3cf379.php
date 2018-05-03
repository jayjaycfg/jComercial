<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3caf6e65f122c85d80570a97d8460867e5eab2af60bd6b4a0da35d6c33fadfda extends Twig_Template
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
        $__internal_2feaa83fd8044b95a3f3ce46d1d19c17609762fccd418e275107b35a770c5493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2feaa83fd8044b95a3f3ce46d1d19c17609762fccd418e275107b35a770c5493->enter($__internal_2feaa83fd8044b95a3f3ce46d1d19c17609762fccd418e275107b35a770c5493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f25c7f2d407cc9756cc22513e5dfa503a09c6515f1e8c2d2f5ef58dc997ae147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25c7f2d407cc9756cc22513e5dfa503a09c6515f1e8c2d2f5ef58dc997ae147->enter($__internal_f25c7f2d407cc9756cc22513e5dfa503a09c6515f1e8c2d2f5ef58dc997ae147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2feaa83fd8044b95a3f3ce46d1d19c17609762fccd418e275107b35a770c5493->leave($__internal_2feaa83fd8044b95a3f3ce46d1d19c17609762fccd418e275107b35a770c5493_prof);

        
        $__internal_f25c7f2d407cc9756cc22513e5dfa503a09c6515f1e8c2d2f5ef58dc997ae147->leave($__internal_f25c7f2d407cc9756cc22513e5dfa503a09c6515f1e8c2d2f5ef58dc997ae147_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
