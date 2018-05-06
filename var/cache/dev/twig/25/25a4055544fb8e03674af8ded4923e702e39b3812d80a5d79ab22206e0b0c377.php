<?php

/* :cliente:show.html.twig */
class __TwigTemplate_acac0a119b058dcadbcb241054edcf9c1c29e73345cc13b7dc73ac148a3a87dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:show.html.twig", 1);
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
        $__internal_9d09bbf5a04be8a8425a5c878631f15cf6e914f3e4db39b342518c8592ebff3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d09bbf5a04be8a8425a5c878631f15cf6e914f3e4db39b342518c8592ebff3e->enter($__internal_9d09bbf5a04be8a8425a5c878631f15cf6e914f3e4db39b342518c8592ebff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $__internal_ce67e9db7fd3f913325eafe2aa6250c18ee36b5fc7568299d85927e55123fc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce67e9db7fd3f913325eafe2aa6250c18ee36b5fc7568299d85927e55123fc2c->enter($__internal_ce67e9db7fd3f913325eafe2aa6250c18ee36b5fc7568299d85927e55123fc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d09bbf5a04be8a8425a5c878631f15cf6e914f3e4db39b342518c8592ebff3e->leave($__internal_9d09bbf5a04be8a8425a5c878631f15cf6e914f3e4db39b342518c8592ebff3e_prof);

        
        $__internal_ce67e9db7fd3f913325eafe2aa6250c18ee36b5fc7568299d85927e55123fc2c->leave($__internal_ce67e9db7fd3f913325eafe2aa6250c18ee36b5fc7568299d85927e55123fc2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d65278a84cf2e09116b043f60d62969e0410e28b9216cd1b47af9b3c36836aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d65278a84cf2e09116b043f60d62969e0410e28b9216cd1b47af9b3c36836aa->enter($__internal_1d65278a84cf2e09116b043f60d62969e0410e28b9216cd1b47af9b3c36836aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a67333f0a3444b4a27e9bddcf5994aaa0e6584fe02724691d14d33fa751e77a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67333f0a3444b4a27e9bddcf5994aaa0e6584fe02724691d14d33fa751e77a8->enter($__internal_a67333f0a3444b4a27e9bddcf5994aaa0e6584fe02724691d14d33fa751e77a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a67333f0a3444b4a27e9bddcf5994aaa0e6584fe02724691d14d33fa751e77a8->leave($__internal_a67333f0a3444b4a27e9bddcf5994aaa0e6584fe02724691d14d33fa751e77a8_prof);

        
        $__internal_1d65278a84cf2e09116b043f60d62969e0410e28b9216cd1b47af9b3c36836aa->leave($__internal_1d65278a84cf2e09116b043f60d62969e0410e28b9216cd1b47af9b3c36836aa_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:show.html.twig";
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
", ":cliente:show.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/show.html.twig");
    }
}
