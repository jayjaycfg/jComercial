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
        $__internal_4fddd895aa4ad363222639c7a353619b50ca843f2ce8f35717a275e3443c2c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fddd895aa4ad363222639c7a353619b50ca843f2ce8f35717a275e3443c2c5e->enter($__internal_4fddd895aa4ad363222639c7a353619b50ca843f2ce8f35717a275e3443c2c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5dea7ed63e5cec3a1da97e22fc51a74014af7a888079a216e044c8b368823408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dea7ed63e5cec3a1da97e22fc51a74014af7a888079a216e044c8b368823408->enter($__internal_5dea7ed63e5cec3a1da97e22fc51a74014af7a888079a216e044c8b368823408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4fddd895aa4ad363222639c7a353619b50ca843f2ce8f35717a275e3443c2c5e->leave($__internal_4fddd895aa4ad363222639c7a353619b50ca843f2ce8f35717a275e3443c2c5e_prof);

        
        $__internal_5dea7ed63e5cec3a1da97e22fc51a74014af7a888079a216e044c8b368823408->leave($__internal_5dea7ed63e5cec3a1da97e22fc51a74014af7a888079a216e044c8b368823408_prof);

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
