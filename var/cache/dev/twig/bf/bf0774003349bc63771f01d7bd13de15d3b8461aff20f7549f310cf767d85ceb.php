<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_089705842bef430bd78866f9c9d55200b6d16756820b221839ab1276a7516cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089705842bef430bd78866f9c9d55200b6d16756820b221839ab1276a7516cbb->enter($__internal_089705842bef430bd78866f9c9d55200b6d16756820b221839ab1276a7516cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_7b6a898909de67ff37a151cfeb97ebabab23c8410008a1361faedf6812cb279b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6a898909de67ff37a151cfeb97ebabab23c8410008a1361faedf6812cb279b->enter($__internal_7b6a898909de67ff37a151cfeb97ebabab23c8410008a1361faedf6812cb279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_089705842bef430bd78866f9c9d55200b6d16756820b221839ab1276a7516cbb->leave($__internal_089705842bef430bd78866f9c9d55200b6d16756820b221839ab1276a7516cbb_prof);

        
        $__internal_7b6a898909de67ff37a151cfeb97ebabab23c8410008a1361faedf6812cb279b->leave($__internal_7b6a898909de67ff37a151cfeb97ebabab23c8410008a1361faedf6812cb279b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
