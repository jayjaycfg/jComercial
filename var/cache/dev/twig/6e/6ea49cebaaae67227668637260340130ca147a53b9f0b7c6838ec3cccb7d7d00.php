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
        $__internal_4c7fc3e9cce2f4275618244c5d5224d685c4b74024645545d08294d17c1eaecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7fc3e9cce2f4275618244c5d5224d685c4b74024645545d08294d17c1eaecf->enter($__internal_4c7fc3e9cce2f4275618244c5d5224d685c4b74024645545d08294d17c1eaecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_683efdadaeb208dc95308f04906dd87663bb755ea45a6d92955eca9292453389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683efdadaeb208dc95308f04906dd87663bb755ea45a6d92955eca9292453389->enter($__internal_683efdadaeb208dc95308f04906dd87663bb755ea45a6d92955eca9292453389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4c7fc3e9cce2f4275618244c5d5224d685c4b74024645545d08294d17c1eaecf->leave($__internal_4c7fc3e9cce2f4275618244c5d5224d685c4b74024645545d08294d17c1eaecf_prof);

        
        $__internal_683efdadaeb208dc95308f04906dd87663bb755ea45a6d92955eca9292453389->leave($__internal_683efdadaeb208dc95308f04906dd87663bb755ea45a6d92955eca9292453389_prof);

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
