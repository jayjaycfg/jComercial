<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_18ab25ecd7fd0fc53059dc9417dc79776d6e23ce13cc8d32441dfd0eac4df5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ab25ecd7fd0fc53059dc9417dc79776d6e23ce13cc8d32441dfd0eac4df5bb->enter($__internal_18ab25ecd7fd0fc53059dc9417dc79776d6e23ce13cc8d32441dfd0eac4df5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_fb4cc0e04e5273433cc9df9ca86ddd1e83d37ad2f591b1fe4738f24b6308de56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4cc0e04e5273433cc9df9ca86ddd1e83d37ad2f591b1fe4738f24b6308de56->enter($__internal_fb4cc0e04e5273433cc9df9ca86ddd1e83d37ad2f591b1fe4738f24b6308de56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_18ab25ecd7fd0fc53059dc9417dc79776d6e23ce13cc8d32441dfd0eac4df5bb->leave($__internal_18ab25ecd7fd0fc53059dc9417dc79776d6e23ce13cc8d32441dfd0eac4df5bb_prof);

        
        $__internal_fb4cc0e04e5273433cc9df9ca86ddd1e83d37ad2f591b1fe4738f24b6308de56->leave($__internal_fb4cc0e04e5273433cc9df9ca86ddd1e83d37ad2f591b1fe4738f24b6308de56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
