<?php

/* proveedor/edit.html.twig */
class __TwigTemplate_4e209be9e26b7e399ff03aaed69212b4621278b9bbe15f310bce83a858daf947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", "proveedor/edit.html.twig", 1);
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
        $__internal_588bc0cb26891418e113add69dbcc13edbfb13b09a9c7aa23b19638d3b27361e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588bc0cb26891418e113add69dbcc13edbfb13b09a9c7aa23b19638d3b27361e->enter($__internal_588bc0cb26891418e113add69dbcc13edbfb13b09a9c7aa23b19638d3b27361e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/edit.html.twig"));

        $__internal_69e476b30a9bce6443ca7f8dabe101f232b0730a414e55a91a5edec3e4762dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e476b30a9bce6443ca7f8dabe101f232b0730a414e55a91a5edec3e4762dbc->enter($__internal_69e476b30a9bce6443ca7f8dabe101f232b0730a414e55a91a5edec3e4762dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_588bc0cb26891418e113add69dbcc13edbfb13b09a9c7aa23b19638d3b27361e->leave($__internal_588bc0cb26891418e113add69dbcc13edbfb13b09a9c7aa23b19638d3b27361e_prof);

        
        $__internal_69e476b30a9bce6443ca7f8dabe101f232b0730a414e55a91a5edec3e4762dbc->leave($__internal_69e476b30a9bce6443ca7f8dabe101f232b0730a414e55a91a5edec3e4762dbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90e652b7cb0f82764c9d8b32008ea2b30ec41cc5aef93432774bfc8abd252002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e652b7cb0f82764c9d8b32008ea2b30ec41cc5aef93432774bfc8abd252002->enter($__internal_90e652b7cb0f82764c9d8b32008ea2b30ec41cc5aef93432774bfc8abd252002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa3a58f6fada2166e1060f5f4d5f3b545880f53a156f358ec99da7a08e1f9a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3a58f6fada2166e1060f5f4d5f3b545880f53a156f358ec99da7a08e1f9a37->enter($__internal_aa3a58f6fada2166e1060f5f4d5f3b545880f53a156f358ec99da7a08e1f9a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con proveedor</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/proveedor:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_aa3a58f6fada2166e1060f5f4d5f3b545880f53a156f358ec99da7a08e1f9a37->leave($__internal_aa3a58f6fada2166e1060f5f4d5f3b545880f53a156f358ec99da7a08e1f9a37_prof);

        
        $__internal_90e652b7cb0f82764c9d8b32008ea2b30ec41cc5aef93432774bfc8abd252002->leave($__internal_90e652b7cb0f82764c9d8b32008ea2b30ec41cc5aef93432774bfc8abd252002_prof);

    }

    public function getTemplateName()
    {
        return "proveedor/edit.html.twig";
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
\t\t\t\t<h1>Nuevo Contrato con proveedor</h1>
\t\t\t\t{{ include(':/proveedor:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "proveedor/edit.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/edit.html.twig");
    }
}
