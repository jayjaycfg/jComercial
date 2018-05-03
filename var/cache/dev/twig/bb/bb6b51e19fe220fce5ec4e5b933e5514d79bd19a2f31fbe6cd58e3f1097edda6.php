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
        $__internal_783b24f1c3a4e711820ad02d41afeb3ca1261657fd472ef1ee4b285ee8a9e90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783b24f1c3a4e711820ad02d41afeb3ca1261657fd472ef1ee4b285ee8a9e90f->enter($__internal_783b24f1c3a4e711820ad02d41afeb3ca1261657fd472ef1ee4b285ee8a9e90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_38aa42b548491a8ffe1c3017268460f4156e67b50805bdcf86dcbb5192757498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38aa42b548491a8ffe1c3017268460f4156e67b50805bdcf86dcbb5192757498->enter($__internal_38aa42b548491a8ffe1c3017268460f4156e67b50805bdcf86dcbb5192757498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_783b24f1c3a4e711820ad02d41afeb3ca1261657fd472ef1ee4b285ee8a9e90f->leave($__internal_783b24f1c3a4e711820ad02d41afeb3ca1261657fd472ef1ee4b285ee8a9e90f_prof);

        
        $__internal_38aa42b548491a8ffe1c3017268460f4156e67b50805bdcf86dcbb5192757498->leave($__internal_38aa42b548491a8ffe1c3017268460f4156e67b50805bdcf86dcbb5192757498_prof);

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
