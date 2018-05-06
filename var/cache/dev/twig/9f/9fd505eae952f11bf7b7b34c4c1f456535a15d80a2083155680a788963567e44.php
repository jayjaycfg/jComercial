<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a3f6cf6086d484b923836b0a12f513cb56c7628150a5bb964f028a5858c76b5 extends Twig_Template
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
        $__internal_b75e39241ea2f7a5306a779ddfb12905c402fed0d0a1507f3a388fd597db6b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75e39241ea2f7a5306a779ddfb12905c402fed0d0a1507f3a388fd597db6b99->enter($__internal_b75e39241ea2f7a5306a779ddfb12905c402fed0d0a1507f3a388fd597db6b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b194c9067a3fb7be31d2cc5b41fe25bfd5b8571ee426c8ccbf6461faed88569d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b194c9067a3fb7be31d2cc5b41fe25bfd5b8571ee426c8ccbf6461faed88569d->enter($__internal_b194c9067a3fb7be31d2cc5b41fe25bfd5b8571ee426c8ccbf6461faed88569d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b75e39241ea2f7a5306a779ddfb12905c402fed0d0a1507f3a388fd597db6b99->leave($__internal_b75e39241ea2f7a5306a779ddfb12905c402fed0d0a1507f3a388fd597db6b99_prof);

        
        $__internal_b194c9067a3fb7be31d2cc5b41fe25bfd5b8571ee426c8ccbf6461faed88569d->leave($__internal_b194c9067a3fb7be31d2cc5b41fe25bfd5b8571ee426c8ccbf6461faed88569d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
