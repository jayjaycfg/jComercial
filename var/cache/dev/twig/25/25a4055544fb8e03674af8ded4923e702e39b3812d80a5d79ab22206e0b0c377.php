<?php

/* cliente/show.html.twig */
class __TwigTemplate_acac0a119b058dcadbcb241054edcf9c1c29e73345cc13b7dc73ac148a3a87dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bae1fdda923d75b566421f6f1e4446263cee6b5f8c5f79e4e40e037f55e52a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae1fdda923d75b566421f6f1e4446263cee6b5f8c5f79e4e40e037f55e52a48->enter($__internal_bae1fdda923d75b566421f6f1e4446263cee6b5f8c5f79e4e40e037f55e52a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $__internal_68b3aaff2dc5bad063c076595024765b686710494b78e324a709ba18a7bfd671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b3aaff2dc5bad063c076595024765b686710494b78e324a709ba18a7bfd671->enter($__internal_68b3aaff2dc5bad063c076595024765b686710494b78e324a709ba18a7bfd671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bae1fdda923d75b566421f6f1e4446263cee6b5f8c5f79e4e40e037f55e52a48->leave($__internal_bae1fdda923d75b566421f6f1e4446263cee6b5f8c5f79e4e40e037f55e52a48_prof);

        
        $__internal_68b3aaff2dc5bad063c076595024765b686710494b78e324a709ba18a7bfd671->leave($__internal_68b3aaff2dc5bad063c076595024765b686710494b78e324a709ba18a7bfd671_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a8896272670c938002f5748c41c31f949e7d4cfa1b30c27b94b0cad673e93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a8896272670c938002f5748c41c31f949e7d4cfa1b30c27b94b0cad673e93a->enter($__internal_59a8896272670c938002f5748c41c31f949e7d4cfa1b30c27b94b0cad673e93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efb819fe2d42b7f1ea77e0f0b22462c57b622ef6170a629eb052bdda2d05e5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb819fe2d42b7f1ea77e0f0b22462c57b622ef6170a629eb052bdda2d05e5f9->enter($__internal_efb819fe2d42b7f1ea77e0f0b22462c57b622ef6170a629eb052bdda2d05e5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h1>Contrato con cliente:</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "clientNumber", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "startAt", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "endAt", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "description", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_efb819fe2d42b7f1ea77e0f0b22462c57b622ef6170a629eb052bdda2d05e5f9->leave($__internal_efb819fe2d42b7f1ea77e0f0b22462c57b622ef6170a629eb052bdda2d05e5f9_prof);

        
        $__internal_59a8896272670c938002f5748c41c31f949e7d4cfa1b30c27b94b0cad673e93a->leave($__internal_59a8896272670c938002f5748c41c31f949e7d4cfa1b30c27b94b0cad673e93a_prof);

    }

    public function getTemplateName()
    {
        return "cliente/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  74 => 21,  67 => 17,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h1>Contrato con cliente:</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<td>{{ cliente.clientNumber }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<td>{{ cliente.startAt|date('Y-m-d') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>{{ cliente.endAt|date('Y-m-d') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<td>{{ cliente.description }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "cliente/show.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/show.html.twig");
    }
}
