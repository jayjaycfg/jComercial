<?php

/* :empresa:edit.html.twig */
class __TwigTemplate_77d19c999d9d665b261bc56d859c5b4c360a73f1b48185036ac6fdb85d50850f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":empresa:edit.html.twig", 1);
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
        $__internal_f9a8ce58f946ba85f0d76643d45f39384ebbdfda37f9af22c1cadd760b7700ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a8ce58f946ba85f0d76643d45f39384ebbdfda37f9af22c1cadd760b7700ff->enter($__internal_f9a8ce58f946ba85f0d76643d45f39384ebbdfda37f9af22c1cadd760b7700ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:edit.html.twig"));

        $__internal_f37b0afcd366a4e7ea6c073bc3bdf461cc5566239609b7dbc7e9edbd7b7a5f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37b0afcd366a4e7ea6c073bc3bdf461cc5566239609b7dbc7e9edbd7b7a5f7c->enter($__internal_f37b0afcd366a4e7ea6c073bc3bdf461cc5566239609b7dbc7e9edbd7b7a5f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a8ce58f946ba85f0d76643d45f39384ebbdfda37f9af22c1cadd760b7700ff->leave($__internal_f9a8ce58f946ba85f0d76643d45f39384ebbdfda37f9af22c1cadd760b7700ff_prof);

        
        $__internal_f37b0afcd366a4e7ea6c073bc3bdf461cc5566239609b7dbc7e9edbd7b7a5f7c->leave($__internal_f37b0afcd366a4e7ea6c073bc3bdf461cc5566239609b7dbc7e9edbd7b7a5f7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3f6cae74dd73c4faadfa42295fc5209209e1cdc1e85896d76b70ceb353d1db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f6cae74dd73c4faadfa42295fc5209209e1cdc1e85896d76b70ceb353d1db8->enter($__internal_c3f6cae74dd73c4faadfa42295fc5209209e1cdc1e85896d76b70ceb353d1db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16d22f93c98e31a05a8b36ff8eda1dd9daa4c13f633460f2d4d27ed3b2deac87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d22f93c98e31a05a8b36ff8eda1dd9daa4c13f633460f2d4d27ed3b2deac87->enter($__internal_16d22f93c98e31a05a8b36ff8eda1dd9daa4c13f633460f2d4d27ed3b2deac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>
\t\t\t\t\tEditar Empresa
\t\t\t\t</h1>

\t\t\t\t";
        // line 11
        echo twig_include($this->env, $context, ":/empresa:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_16d22f93c98e31a05a8b36ff8eda1dd9daa4c13f633460f2d4d27ed3b2deac87->leave($__internal_16d22f93c98e31a05a8b36ff8eda1dd9daa4c13f633460f2d4d27ed3b2deac87_prof);

        
        $__internal_c3f6cae74dd73c4faadfa42295fc5209209e1cdc1e85896d76b70ceb353d1db8->leave($__internal_c3f6cae74dd73c4faadfa42295fc5209209e1cdc1e85896d76b70ceb353d1db8_prof);

    }

    public function getTemplateName()
    {
        return ":empresa:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>
\t\t\t\t\tEditar Empresa
\t\t\t\t</h1>

\t\t\t\t{{ include(':/empresa:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":empresa:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/edit.html.twig");
    }
}
