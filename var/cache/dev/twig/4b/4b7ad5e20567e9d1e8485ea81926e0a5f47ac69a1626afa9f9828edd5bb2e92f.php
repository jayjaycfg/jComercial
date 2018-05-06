<?php

/* :contrato:new.html.twig */
class __TwigTemplate_60b9073a4a8dca89de2028c661eefeca585e4f2719d5874fa9e05e8805359d5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":contrato:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":cliente:FormLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4429b74a7bc01b7897ba7722149779103f0418ed7cf0bbc22ca1daf9c799b231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4429b74a7bc01b7897ba7722149779103f0418ed7cf0bbc22ca1daf9c799b231->enter($__internal_4429b74a7bc01b7897ba7722149779103f0418ed7cf0bbc22ca1daf9c799b231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:new.html.twig"));

        $__internal_27ce69a6761e49a2aa607cbf73cdad159cd73573897ccca7db619b2109d575d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ce69a6761e49a2aa607cbf73cdad159cd73573897ccca7db619b2109d575d0->enter($__internal_27ce69a6761e49a2aa607cbf73cdad159cd73573897ccca7db619b2109d575d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4429b74a7bc01b7897ba7722149779103f0418ed7cf0bbc22ca1daf9c799b231->leave($__internal_4429b74a7bc01b7897ba7722149779103f0418ed7cf0bbc22ca1daf9c799b231_prof);

        
        $__internal_27ce69a6761e49a2aa607cbf73cdad159cd73573897ccca7db619b2109d575d0->leave($__internal_27ce69a6761e49a2aa607cbf73cdad159cd73573897ccca7db619b2109d575d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fd79c7b9b7db191f59a236dcbac72e7d1786b6927057c18aa746ccef1b62122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd79c7b9b7db191f59a236dcbac72e7d1786b6927057c18aa746ccef1b62122->enter($__internal_7fd79c7b9b7db191f59a236dcbac72e7d1786b6927057c18aa746ccef1b62122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c433ed76ab5df74f70d7d53863a158ea7cd1905ea907b8e40f428837c495edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c433ed76ab5df74f70d7d53863a158ea7cd1905ea907b8e40f428837c495edc->enter($__internal_1c433ed76ab5df74f70d7d53863a158ea7cd1905ea907b8e40f428837c495edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Insertar Contrato</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/contrato:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_1c433ed76ab5df74f70d7d53863a158ea7cd1905ea907b8e40f428837c495edc->leave($__internal_1c433ed76ab5df74f70d7d53863a158ea7cd1905ea907b8e40f428837c495edc_prof);

        
        $__internal_7fd79c7b9b7db191f59a236dcbac72e7d1786b6927057c18aa746ccef1b62122->leave($__internal_7fd79c7b9b7db191f59a236dcbac72e7d1786b6927057c18aa746ccef1b62122_prof);

    }

    public function getTemplateName()
    {
        return ":contrato:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ':cliente:FormLayout.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Insertar Contrato</h1>
\t\t\t\t{{ include(':/contrato:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", ":contrato:new.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/new.html.twig");
    }
}
