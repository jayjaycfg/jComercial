<?php

/* :proveedor:new.html.twig */
class __TwigTemplate_25a3a0572fc6f2d72c4557f7de4722721a0aa2a4d6b23e8b3a957b207dc221a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":proveedor:new.html.twig", 1);
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
        $__internal_78d2917aef9719f1cb9403574d0d63a0fba5651b971f7c62a962277147b55096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d2917aef9719f1cb9403574d0d63a0fba5651b971f7c62a962277147b55096->enter($__internal_78d2917aef9719f1cb9403574d0d63a0fba5651b971f7c62a962277147b55096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:new.html.twig"));

        $__internal_e1aee62f43eed035e0c0faf47f2d732400b8e92f6af5481871cff3ce9d45df54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1aee62f43eed035e0c0faf47f2d732400b8e92f6af5481871cff3ce9d45df54->enter($__internal_e1aee62f43eed035e0c0faf47f2d732400b8e92f6af5481871cff3ce9d45df54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d2917aef9719f1cb9403574d0d63a0fba5651b971f7c62a962277147b55096->leave($__internal_78d2917aef9719f1cb9403574d0d63a0fba5651b971f7c62a962277147b55096_prof);

        
        $__internal_e1aee62f43eed035e0c0faf47f2d732400b8e92f6af5481871cff3ce9d45df54->leave($__internal_e1aee62f43eed035e0c0faf47f2d732400b8e92f6af5481871cff3ce9d45df54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_becea46ce73bc0c899a7cab249b29af658c399fc2dd686a82da5eb1efd19373d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becea46ce73bc0c899a7cab249b29af658c399fc2dd686a82da5eb1efd19373d->enter($__internal_becea46ce73bc0c899a7cab249b29af658c399fc2dd686a82da5eb1efd19373d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f960c71ad2543e74b5758c3600a4f619629501fa6cd350ca2aeffbd6bb8dfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f960c71ad2543e74b5758c3600a4f619629501fa6cd350ca2aeffbd6bb8dfe1->enter($__internal_7f960c71ad2543e74b5758c3600a4f619629501fa6cd350ca2aeffbd6bb8dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f960c71ad2543e74b5758c3600a4f619629501fa6cd350ca2aeffbd6bb8dfe1->leave($__internal_7f960c71ad2543e74b5758c3600a4f619629501fa6cd350ca2aeffbd6bb8dfe1_prof);

        
        $__internal_becea46ce73bc0c899a7cab249b29af658c399fc2dd686a82da5eb1efd19373d->leave($__internal_becea46ce73bc0c899a7cab249b29af658c399fc2dd686a82da5eb1efd19373d_prof);

    }

    public function getTemplateName()
    {
        return ":proveedor:new.html.twig";
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
{% endblock %}", ":proveedor:new.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/new.html.twig");
    }
}
