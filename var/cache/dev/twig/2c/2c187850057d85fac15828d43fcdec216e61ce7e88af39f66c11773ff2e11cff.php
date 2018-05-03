<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8948eab21f13e8d1a5944c9aa6a68b35a475a21ebdbde87d9199569f7b41d48 extends Twig_Template
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
        $__internal_c3f189c43c23e326453ffe09dd5d52f5db33913f635fd77e3c5efa2c2b7d05da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f189c43c23e326453ffe09dd5d52f5db33913f635fd77e3c5efa2c2b7d05da->enter($__internal_c3f189c43c23e326453ffe09dd5d52f5db33913f635fd77e3c5efa2c2b7d05da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_49fed57d02bd30bb9a06a06e2c1ac585a4facf4aab178adf53dfc699dadf3f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fed57d02bd30bb9a06a06e2c1ac585a4facf4aab178adf53dfc699dadf3f49->enter($__internal_49fed57d02bd30bb9a06a06e2c1ac585a4facf4aab178adf53dfc699dadf3f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c3f189c43c23e326453ffe09dd5d52f5db33913f635fd77e3c5efa2c2b7d05da->leave($__internal_c3f189c43c23e326453ffe09dd5d52f5db33913f635fd77e3c5efa2c2b7d05da_prof);

        
        $__internal_49fed57d02bd30bb9a06a06e2c1ac585a4facf4aab178adf53dfc699dadf3f49->leave($__internal_49fed57d02bd30bb9a06a06e2c1ac585a4facf4aab178adf53dfc699dadf3f49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
