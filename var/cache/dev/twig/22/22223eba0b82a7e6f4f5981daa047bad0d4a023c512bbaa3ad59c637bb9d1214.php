<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_775d9db8afc98a86adcf98226ce6e6b6996eacc4b800f5c411bd915966d82200 extends Twig_Template
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
        $__internal_fc26b7caa1637a62ddbcb4423fbb0eaa7dd3c60ea68d32f6c47d6eb266cd4a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc26b7caa1637a62ddbcb4423fbb0eaa7dd3c60ea68d32f6c47d6eb266cd4a78->enter($__internal_fc26b7caa1637a62ddbcb4423fbb0eaa7dd3c60ea68d32f6c47d6eb266cd4a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_db44637d0b25673da7b463d906f2be91d6831bc558d46f7929390621231e9270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db44637d0b25673da7b463d906f2be91d6831bc558d46f7929390621231e9270->enter($__internal_db44637d0b25673da7b463d906f2be91d6831bc558d46f7929390621231e9270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fc26b7caa1637a62ddbcb4423fbb0eaa7dd3c60ea68d32f6c47d6eb266cd4a78->leave($__internal_fc26b7caa1637a62ddbcb4423fbb0eaa7dd3c60ea68d32f6c47d6eb266cd4a78_prof);

        
        $__internal_db44637d0b25673da7b463d906f2be91d6831bc558d46f7929390621231e9270->leave($__internal_db44637d0b25673da7b463d906f2be91d6831bc558d46f7929390621231e9270_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
