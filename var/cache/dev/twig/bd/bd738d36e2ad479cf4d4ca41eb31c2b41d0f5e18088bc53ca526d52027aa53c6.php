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
        $__internal_b156910d5cdd99625573b0ce6b67d6e6fe5fbe9a72d367f974ebdf5d39ef202d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b156910d5cdd99625573b0ce6b67d6e6fe5fbe9a72d367f974ebdf5d39ef202d->enter($__internal_b156910d5cdd99625573b0ce6b67d6e6fe5fbe9a72d367f974ebdf5d39ef202d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_38febfdf4e6eb1786b58aa364cabdc231f110922a0b781e60dbbb349e6c18e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38febfdf4e6eb1786b58aa364cabdc231f110922a0b781e60dbbb349e6c18e48->enter($__internal_38febfdf4e6eb1786b58aa364cabdc231f110922a0b781e60dbbb349e6c18e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b156910d5cdd99625573b0ce6b67d6e6fe5fbe9a72d367f974ebdf5d39ef202d->leave($__internal_b156910d5cdd99625573b0ce6b67d6e6fe5fbe9a72d367f974ebdf5d39ef202d_prof);

        
        $__internal_38febfdf4e6eb1786b58aa364cabdc231f110922a0b781e60dbbb349e6c18e48->leave($__internal_38febfdf4e6eb1786b58aa364cabdc231f110922a0b781e60dbbb349e6c18e48_prof);

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
