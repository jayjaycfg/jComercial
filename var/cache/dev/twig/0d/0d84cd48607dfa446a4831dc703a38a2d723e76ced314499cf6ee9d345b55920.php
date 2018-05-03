<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2dfd8aa918acdb0aa52d5b841fa5ef084d9174251fd0f26610a58ce9eca8d635 extends Twig_Template
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
        $__internal_b7910f16e4dd3424990926837c402c10431d90d28f5e7fb126ccdfc5e9834f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7910f16e4dd3424990926837c402c10431d90d28f5e7fb126ccdfc5e9834f00->enter($__internal_b7910f16e4dd3424990926837c402c10431d90d28f5e7fb126ccdfc5e9834f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f2f3a87c110e7ebc00adf1ba433aef2b691dcaf1797b7def68b87ceaa976c78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f3a87c110e7ebc00adf1ba433aef2b691dcaf1797b7def68b87ceaa976c78b->enter($__internal_f2f3a87c110e7ebc00adf1ba433aef2b691dcaf1797b7def68b87ceaa976c78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b7910f16e4dd3424990926837c402c10431d90d28f5e7fb126ccdfc5e9834f00->leave($__internal_b7910f16e4dd3424990926837c402c10431d90d28f5e7fb126ccdfc5e9834f00_prof);

        
        $__internal_f2f3a87c110e7ebc00adf1ba433aef2b691dcaf1797b7def68b87ceaa976c78b->leave($__internal_f2f3a87c110e7ebc00adf1ba433aef2b691dcaf1797b7def68b87ceaa976c78b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
