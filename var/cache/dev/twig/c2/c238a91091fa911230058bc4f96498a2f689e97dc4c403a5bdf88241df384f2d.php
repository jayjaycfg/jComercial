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
        $__internal_7d4d857c4c43a5bfabb2c6f9aaf3a212b2df22e10005a614693f33fe29ce709b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4d857c4c43a5bfabb2c6f9aaf3a212b2df22e10005a614693f33fe29ce709b->enter($__internal_7d4d857c4c43a5bfabb2c6f9aaf3a212b2df22e10005a614693f33fe29ce709b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:show.html.twig"));

        $__internal_109883e822feb2a37794f1158e5010136db9fadde3b6c64bece8f8a8cb256571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109883e822feb2a37794f1158e5010136db9fadde3b6c64bece8f8a8cb256571->enter($__internal_109883e822feb2a37794f1158e5010136db9fadde3b6c64bece8f8a8cb256571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d4d857c4c43a5bfabb2c6f9aaf3a212b2df22e10005a614693f33fe29ce709b->leave($__internal_7d4d857c4c43a5bfabb2c6f9aaf3a212b2df22e10005a614693f33fe29ce709b_prof);

        
        $__internal_109883e822feb2a37794f1158e5010136db9fadde3b6c64bece8f8a8cb256571->leave($__internal_109883e822feb2a37794f1158e5010136db9fadde3b6c64bece8f8a8cb256571_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_304896e559399d73a21091c2b1923c6f66c2ec06b710a3f4cd9d4b6cf4083576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304896e559399d73a21091c2b1923c6f66c2ec06b710a3f4cd9d4b6cf4083576->enter($__internal_304896e559399d73a21091c2b1923c6f66c2ec06b710a3f4cd9d4b6cf4083576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_340defeed2db28c45e3095b534a931a4bc9860bbffd61eca7fe8b4d19825d8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340defeed2db28c45e3095b534a931a4bc9860bbffd61eca7fe8b4d19825d8bb->enter($__internal_340defeed2db28c45e3095b534a931a4bc9860bbffd61eca7fe8b4d19825d8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_340defeed2db28c45e3095b534a931a4bc9860bbffd61eca7fe8b4d19825d8bb->leave($__internal_340defeed2db28c45e3095b534a931a4bc9860bbffd61eca7fe8b4d19825d8bb_prof);

        
        $__internal_304896e559399d73a21091c2b1923c6f66c2ec06b710a3f4cd9d4b6cf4083576->leave($__internal_304896e559399d73a21091c2b1923c6f66c2ec06b710a3f4cd9d4b6cf4083576_prof);

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
