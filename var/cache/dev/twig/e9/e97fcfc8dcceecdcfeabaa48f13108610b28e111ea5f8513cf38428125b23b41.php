<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e6342a1f73361c9ac04ec31f753d13a30e7133a91be4fe72e146dc47514a08b5 extends Twig_Template
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
        $__internal_bc5507d3b0aa7f8978642deecee24ad0cdee83cb2b8a8aa7ce93e38edbdf71d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5507d3b0aa7f8978642deecee24ad0cdee83cb2b8a8aa7ce93e38edbdf71d0->enter($__internal_bc5507d3b0aa7f8978642deecee24ad0cdee83cb2b8a8aa7ce93e38edbdf71d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_cc0fbe87d266f325026620d136fb09c78014841381fe61cf21f271bd9184b264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0fbe87d266f325026620d136fb09c78014841381fe61cf21f271bd9184b264->enter($__internal_cc0fbe87d266f325026620d136fb09c78014841381fe61cf21f271bd9184b264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bc5507d3b0aa7f8978642deecee24ad0cdee83cb2b8a8aa7ce93e38edbdf71d0->leave($__internal_bc5507d3b0aa7f8978642deecee24ad0cdee83cb2b8a8aa7ce93e38edbdf71d0_prof);

        
        $__internal_cc0fbe87d266f325026620d136fb09c78014841381fe61cf21f271bd9184b264->leave($__internal_cc0fbe87d266f325026620d136fb09c78014841381fe61cf21f271bd9184b264_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
