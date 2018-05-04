<?php

/* :contrato:edit.html.twig */
class __TwigTemplate_37fe693b026a7bcfcf712216952a19023824ef6ec92f833de701edeb21dbe6a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":contrato:edit.html.twig", 1);
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
        $__internal_f6b5acbbc31e7e2f42084e0703b613279fa5cefb06fc597a63eb6326eb28e268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b5acbbc31e7e2f42084e0703b613279fa5cefb06fc597a63eb6326eb28e268->enter($__internal_f6b5acbbc31e7e2f42084e0703b613279fa5cefb06fc597a63eb6326eb28e268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:edit.html.twig"));

        $__internal_2a238b14cca45a1e2b33a2fc34d14ff95f4fded53cf1b864f5781cc6b1abda44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a238b14cca45a1e2b33a2fc34d14ff95f4fded53cf1b864f5781cc6b1abda44->enter($__internal_2a238b14cca45a1e2b33a2fc34d14ff95f4fded53cf1b864f5781cc6b1abda44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b5acbbc31e7e2f42084e0703b613279fa5cefb06fc597a63eb6326eb28e268->leave($__internal_f6b5acbbc31e7e2f42084e0703b613279fa5cefb06fc597a63eb6326eb28e268_prof);

        
        $__internal_2a238b14cca45a1e2b33a2fc34d14ff95f4fded53cf1b864f5781cc6b1abda44->leave($__internal_2a238b14cca45a1e2b33a2fc34d14ff95f4fded53cf1b864f5781cc6b1abda44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5dd49638ac27d67ba3f80e92061da99c7d00853439f50754ce9db8f714f8938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5dd49638ac27d67ba3f80e92061da99c7d00853439f50754ce9db8f714f8938->enter($__internal_c5dd49638ac27d67ba3f80e92061da99c7d00853439f50754ce9db8f714f8938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a99872827e13c16edcceca0acf8278b80d483f42c5f26abae27889ad0ce7ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a99872827e13c16edcceca0acf8278b80d483f42c5f26abae27889ad0ce7ffe->enter($__internal_5a99872827e13c16edcceca0acf8278b80d483f42c5f26abae27889ad0ce7ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Contrato</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/contrato:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_5a99872827e13c16edcceca0acf8278b80d483f42c5f26abae27889ad0ce7ffe->leave($__internal_5a99872827e13c16edcceca0acf8278b80d483f42c5f26abae27889ad0ce7ffe_prof);

        
        $__internal_c5dd49638ac27d67ba3f80e92061da99c7d00853439f50754ce9db8f714f8938->leave($__internal_c5dd49638ac27d67ba3f80e92061da99c7d00853439f50754ce9db8f714f8938_prof);

    }

    public function getTemplateName()
    {
        return ":contrato:edit.html.twig";
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
\t\t\t\t<h1>Editar Contrato</h1>
\t\t\t\t{{ include(':/contrato:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", ":contrato:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/edit.html.twig");
    }
}
