<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_b009940a433f24b959cf1c1148a7ca8a0e65e9cee9c28f5d750d73ebc758074e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b009940a433f24b959cf1c1148a7ca8a0e65e9cee9c28f5d750d73ebc758074e->enter($__internal_b009940a433f24b959cf1c1148a7ca8a0e65e9cee9c28f5d750d73ebc758074e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1a630360d469f0d1499a9c256c162c2bc2a70d4093a1447966590d32cd9bec02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a630360d469f0d1499a9c256c162c2bc2a70d4093a1447966590d32cd9bec02->enter($__internal_1a630360d469f0d1499a9c256c162c2bc2a70d4093a1447966590d32cd9bec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b009940a433f24b959cf1c1148a7ca8a0e65e9cee9c28f5d750d73ebc758074e->leave($__internal_b009940a433f24b959cf1c1148a7ca8a0e65e9cee9c28f5d750d73ebc758074e_prof);

        
        $__internal_1a630360d469f0d1499a9c256c162c2bc2a70d4093a1447966590d32cd9bec02->leave($__internal_1a630360d469f0d1499a9c256c162c2bc2a70d4093a1447966590d32cd9bec02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
