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
        $__internal_1ab37704776d6757928391b628b8f614fc4adf59dd2a354b745b457cb58069f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab37704776d6757928391b628b8f614fc4adf59dd2a354b745b457cb58069f5->enter($__internal_1ab37704776d6757928391b628b8f614fc4adf59dd2a354b745b457cb58069f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:new.html.twig"));

        $__internal_20f9e8ab727860c80ae618219eba8f04fb2337aa4f827fe60dbef94eceb84479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f9e8ab727860c80ae618219eba8f04fb2337aa4f827fe60dbef94eceb84479->enter($__internal_20f9e8ab727860c80ae618219eba8f04fb2337aa4f827fe60dbef94eceb84479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab37704776d6757928391b628b8f614fc4adf59dd2a354b745b457cb58069f5->leave($__internal_1ab37704776d6757928391b628b8f614fc4adf59dd2a354b745b457cb58069f5_prof);

        
        $__internal_20f9e8ab727860c80ae618219eba8f04fb2337aa4f827fe60dbef94eceb84479->leave($__internal_20f9e8ab727860c80ae618219eba8f04fb2337aa4f827fe60dbef94eceb84479_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c489b48b7063bf3e6fb7d1177ef81731c35ac7f1c5cc89b262fa80e6f025c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c489b48b7063bf3e6fb7d1177ef81731c35ac7f1c5cc89b262fa80e6f025c6d->enter($__internal_4c489b48b7063bf3e6fb7d1177ef81731c35ac7f1c5cc89b262fa80e6f025c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5d844e7fcaabcfbded8da041cad283f9977d9f719619d664588f238dcbee228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d844e7fcaabcfbded8da041cad283f9977d9f719619d664588f238dcbee228->enter($__internal_e5d844e7fcaabcfbded8da041cad283f9977d9f719619d664588f238dcbee228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5d844e7fcaabcfbded8da041cad283f9977d9f719619d664588f238dcbee228->leave($__internal_e5d844e7fcaabcfbded8da041cad283f9977d9f719619d664588f238dcbee228_prof);

        
        $__internal_4c489b48b7063bf3e6fb7d1177ef81731c35ac7f1c5cc89b262fa80e6f025c6d->leave($__internal_4c489b48b7063bf3e6fb7d1177ef81731c35ac7f1c5cc89b262fa80e6f025c6d_prof);

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
