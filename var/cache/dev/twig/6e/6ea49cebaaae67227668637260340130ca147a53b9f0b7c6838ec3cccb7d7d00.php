<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f52bdca62a5473a7fd94aa25b31fb4737d0bb6c811af47339e502ba9f8d44684 extends Twig_Template
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
        $__internal_570204b7cf844b6ebbe95d35e534aecff08826691df0f6c04db9d1da17de5596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570204b7cf844b6ebbe95d35e534aecff08826691df0f6c04db9d1da17de5596->enter($__internal_570204b7cf844b6ebbe95d35e534aecff08826691df0f6c04db9d1da17de5596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4bdd5ce3157010e573b1664c7dac0e51d68b54c36140ec5021d3e167ccca56a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdd5ce3157010e573b1664c7dac0e51d68b54c36140ec5021d3e167ccca56a2->enter($__internal_4bdd5ce3157010e573b1664c7dac0e51d68b54c36140ec5021d3e167ccca56a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_570204b7cf844b6ebbe95d35e534aecff08826691df0f6c04db9d1da17de5596->leave($__internal_570204b7cf844b6ebbe95d35e534aecff08826691df0f6c04db9d1da17de5596_prof);

        
        $__internal_4bdd5ce3157010e573b1664c7dac0e51d68b54c36140ec5021d3e167ccca56a2->leave($__internal_4bdd5ce3157010e573b1664c7dac0e51d68b54c36140ec5021d3e167ccca56a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
