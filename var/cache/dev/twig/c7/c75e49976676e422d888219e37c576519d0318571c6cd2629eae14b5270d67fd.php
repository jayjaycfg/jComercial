<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4d66944aea51659b6b00039ae5048a9ac015d831b9ceab291319131e0ef243d extends Twig_Template
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
        $__internal_6d6cdd390d314ccd475f27341d44ae72a50785955f9cb0d703d96d33a9ff0b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6cdd390d314ccd475f27341d44ae72a50785955f9cb0d703d96d33a9ff0b9d->enter($__internal_6d6cdd390d314ccd475f27341d44ae72a50785955f9cb0d703d96d33a9ff0b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_81bfe62bde3a32f19b245ab47978b1e70509c4e198edd75421ce5855989a74ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bfe62bde3a32f19b245ab47978b1e70509c4e198edd75421ce5855989a74ba->enter($__internal_81bfe62bde3a32f19b245ab47978b1e70509c4e198edd75421ce5855989a74ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6d6cdd390d314ccd475f27341d44ae72a50785955f9cb0d703d96d33a9ff0b9d->leave($__internal_6d6cdd390d314ccd475f27341d44ae72a50785955f9cb0d703d96d33a9ff0b9d_prof);

        
        $__internal_81bfe62bde3a32f19b245ab47978b1e70509c4e198edd75421ce5855989a74ba->leave($__internal_81bfe62bde3a32f19b245ab47978b1e70509c4e198edd75421ce5855989a74ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
