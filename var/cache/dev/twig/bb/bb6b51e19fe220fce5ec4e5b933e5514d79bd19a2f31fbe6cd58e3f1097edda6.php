<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_90c515f661ba0957029f62e7816d6064d95afb900007341e45d52ce01e9b60ac extends Twig_Template
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
        $__internal_7ef5402789df947c4435504ee144a8532c94aea0ae880b4d5a98fda6db3c7f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef5402789df947c4435504ee144a8532c94aea0ae880b4d5a98fda6db3c7f06->enter($__internal_7ef5402789df947c4435504ee144a8532c94aea0ae880b4d5a98fda6db3c7f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_23d6427890fbccd994d42745db1c355bf01d8c50d5cb0ec813a90aec59bd1ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d6427890fbccd994d42745db1c355bf01d8c50d5cb0ec813a90aec59bd1ea9->enter($__internal_23d6427890fbccd994d42745db1c355bf01d8c50d5cb0ec813a90aec59bd1ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7ef5402789df947c4435504ee144a8532c94aea0ae880b4d5a98fda6db3c7f06->leave($__internal_7ef5402789df947c4435504ee144a8532c94aea0ae880b4d5a98fda6db3c7f06_prof);

        
        $__internal_23d6427890fbccd994d42745db1c355bf01d8c50d5cb0ec813a90aec59bd1ea9->leave($__internal_23d6427890fbccd994d42745db1c355bf01d8c50d5cb0ec813a90aec59bd1ea9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
