<?php

/* :proveedor:show.html.twig */
class __TwigTemplate_96b824216990f85e8bbf72a94cfe08383922c25b5920431ffb16d3f160571bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proveedor:show.html.twig", 1);
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
        $__internal_8a649e1395dcfff4204849e8c66529eb04280cc845cfaa34d42fa18a0d2061ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a649e1395dcfff4204849e8c66529eb04280cc845cfaa34d42fa18a0d2061ab->enter($__internal_8a649e1395dcfff4204849e8c66529eb04280cc845cfaa34d42fa18a0d2061ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:show.html.twig"));

        $__internal_677212f6e36e11ba8f7b17724f9cd184bcdb32411b451177ac3fd7ce9d78fdb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677212f6e36e11ba8f7b17724f9cd184bcdb32411b451177ac3fd7ce9d78fdb8->enter($__internal_677212f6e36e11ba8f7b17724f9cd184bcdb32411b451177ac3fd7ce9d78fdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a649e1395dcfff4204849e8c66529eb04280cc845cfaa34d42fa18a0d2061ab->leave($__internal_8a649e1395dcfff4204849e8c66529eb04280cc845cfaa34d42fa18a0d2061ab_prof);

        
        $__internal_677212f6e36e11ba8f7b17724f9cd184bcdb32411b451177ac3fd7ce9d78fdb8->leave($__internal_677212f6e36e11ba8f7b17724f9cd184bcdb32411b451177ac3fd7ce9d78fdb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_058d97dea8c0d8170cff84bb095983b04baa7e340907f015b6639cee83ad3bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058d97dea8c0d8170cff84bb095983b04baa7e340907f015b6639cee83ad3bbe->enter($__internal_058d97dea8c0d8170cff84bb095983b04baa7e340907f015b6639cee83ad3bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51c0937184d84de01190e4c6fb0f9e505847956f70e410ba01d2a3cefa7b7687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c0937184d84de01190e4c6fb0f9e505847956f70e410ba01d2a3cefa7b7687->enter($__internal_51c0937184d84de01190e4c6fb0f9e505847956f70e410ba01d2a3cefa7b7687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h1>
\t\t\t\t\tContrato con Proveedor:
\t\t\t\t</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proveedor"] ?? $this->getContext($context, "proveedor")), "contratNumber", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cuenta Bancaria</th>
\t\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proveedor"] ?? $this->getContext($context, "proveedor")), "numberAccount", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["proveedor"] ?? $this->getContext($context, "proveedor")), "startAt", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["proveedor"] ?? $this->getContext($context, "proveedor")), "endAt", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_51c0937184d84de01190e4c6fb0f9e505847956f70e410ba01d2a3cefa7b7687->leave($__internal_51c0937184d84de01190e4c6fb0f9e505847956f70e410ba01d2a3cefa7b7687_prof);

        
        $__internal_058d97dea8c0d8170cff84bb095983b04baa7e340907f015b6639cee83ad3bbe->leave($__internal_058d97dea8c0d8170cff84bb095983b04baa7e340907f015b6639cee83ad3bbe_prof);

    }

    public function getTemplateName()
    {
        return ":proveedor:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  76 => 23,  69 => 19,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>
\t\t\t\t\tContrato con Proveedor:
\t\t\t\t</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<td>{{ proveedor.contratNumber }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cuenta Bancaria</th>
\t\t\t\t\t\t<td>{{ proveedor.numberAccount }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<td>{{ proveedor.startAt|date('Y-m-d') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>{{ proveedor.endAt|date('Y-m-d') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":proveedor:show.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/show.html.twig");
    }
}
