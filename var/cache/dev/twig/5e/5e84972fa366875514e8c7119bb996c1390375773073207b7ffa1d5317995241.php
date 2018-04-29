<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a862fb6d30ff5910b1b3bef696c4f28b770c900dd3f91037dd793d5bcc44567 extends Twig_Template
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
        $__internal_750961498e5a1e9dbfe468605f139abdd9a556bcae0dc28dee0dfec586632c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750961498e5a1e9dbfe468605f139abdd9a556bcae0dc28dee0dfec586632c1d->enter($__internal_750961498e5a1e9dbfe468605f139abdd9a556bcae0dc28dee0dfec586632c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_903777418c36eac723de2b6a74519d52dda367c888c7082e7d8a87b0f5f62421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903777418c36eac723de2b6a74519d52dda367c888c7082e7d8a87b0f5f62421->enter($__internal_903777418c36eac723de2b6a74519d52dda367c888c7082e7d8a87b0f5f62421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_750961498e5a1e9dbfe468605f139abdd9a556bcae0dc28dee0dfec586632c1d->leave($__internal_750961498e5a1e9dbfe468605f139abdd9a556bcae0dc28dee0dfec586632c1d_prof);

        
        $__internal_903777418c36eac723de2b6a74519d52dda367c888c7082e7d8a87b0f5f62421->leave($__internal_903777418c36eac723de2b6a74519d52dda367c888c7082e7d8a87b0f5f62421_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
