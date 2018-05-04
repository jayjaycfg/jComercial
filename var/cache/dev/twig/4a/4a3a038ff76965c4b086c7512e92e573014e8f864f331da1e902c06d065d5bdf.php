<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b02dfd81140eb2a24a8fb18cd6332cff44805b1d92cb2302754604add0b319f9 extends Twig_Template
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
        $__internal_3d07d1d4b169fe8cf90151b7c6b98b92f395b3cc306425134b981cfbdb1d9ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d07d1d4b169fe8cf90151b7c6b98b92f395b3cc306425134b981cfbdb1d9ddf->enter($__internal_3d07d1d4b169fe8cf90151b7c6b98b92f395b3cc306425134b981cfbdb1d9ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_58aed7dac264d208164e0aa1c138cd8529819fac87aab3b688f74089120e1e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58aed7dac264d208164e0aa1c138cd8529819fac87aab3b688f74089120e1e59->enter($__internal_58aed7dac264d208164e0aa1c138cd8529819fac87aab3b688f74089120e1e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3d07d1d4b169fe8cf90151b7c6b98b92f395b3cc306425134b981cfbdb1d9ddf->leave($__internal_3d07d1d4b169fe8cf90151b7c6b98b92f395b3cc306425134b981cfbdb1d9ddf_prof);

        
        $__internal_58aed7dac264d208164e0aa1c138cd8529819fac87aab3b688f74089120e1e59->leave($__internal_58aed7dac264d208164e0aa1c138cd8529819fac87aab3b688f74089120e1e59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
