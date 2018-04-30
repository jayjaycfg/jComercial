<?php

/* proveedor/list.html.twig */
class __TwigTemplate_9e104870322f27bcab0df86ee1cdc6859177fa01c088683f0cd44063b2810e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "proveedor/list.html.twig", 1);
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
        $__internal_9210653ca37c0a7cc5d09f82b090a748da1c299fb09e3ec0ed458f22d810adfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9210653ca37c0a7cc5d09f82b090a748da1c299fb09e3ec0ed458f22d810adfd->enter($__internal_9210653ca37c0a7cc5d09f82b090a748da1c299fb09e3ec0ed458f22d810adfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/list.html.twig"));

        $__internal_c9fc8cc0c3f52c4490980b1fe558fa5343d32ff0296ad441c427a1d7b4a17198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fc8cc0c3f52c4490980b1fe558fa5343d32ff0296ad441c427a1d7b4a17198->enter($__internal_c9fc8cc0c3f52c4490980b1fe558fa5343d32ff0296ad441c427a1d7b4a17198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9210653ca37c0a7cc5d09f82b090a748da1c299fb09e3ec0ed458f22d810adfd->leave($__internal_9210653ca37c0a7cc5d09f82b090a748da1c299fb09e3ec0ed458f22d810adfd_prof);

        
        $__internal_c9fc8cc0c3f52c4490980b1fe558fa5343d32ff0296ad441c427a1d7b4a17198->leave($__internal_c9fc8cc0c3f52c4490980b1fe558fa5343d32ff0296ad441c427a1d7b4a17198_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b012f14aeeab57e24442249b87665f71850ce336e8b758163401ba620be7a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b012f14aeeab57e24442249b87665f71850ce336e8b758163401ba620be7a74->enter($__internal_3b012f14aeeab57e24442249b87665f71850ce336e8b758163401ba620be7a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf5e6c5055e0d00d7fd9a83efae5bfef3a19e94b6999d0b80f5a82d20dd8a157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5e6c5055e0d00d7fd9a83efae5bfef3a19e94b6999d0b80f5a82d20dd8a157->enter($__internal_bf5e6c5055e0d00d7fd9a83efae5bfef3a19e94b6999d0b80f5a82d20dd8a157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_proveedor");
        echo "\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Contratos con proveedores</h1>

\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<th>Cuenta Bancaria</th>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["proveedores"] ?? $this->getContext($context, "proveedores")));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "contratNumber", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "numberAccount", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proveedor"], "startAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proveedor"], "endAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_proveedor", array("id" => $this->getAttribute(            // line 30
$context["proveedor"], "id", array()))), "html", null, true);
            // line 31
            echo "\" class=\"btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_bf5e6c5055e0d00d7fd9a83efae5bfef3a19e94b6999d0b80f5a82d20dd8a157->leave($__internal_bf5e6c5055e0d00d7fd9a83efae5bfef3a19e94b6999d0b80f5a82d20dd8a157_prof);

        
        $__internal_3b012f14aeeab57e24442249b87665f71850ce336e8b758163401ba620be7a74->leave($__internal_3b012f14aeeab57e24442249b87665f71850ce336e8b758163401ba620be7a74_prof);

    }

    public function getTemplateName()
    {
        return "proveedor/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  99 => 31,  97 => 30,  96 => 29,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  76 => 23,  72 => 22,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
\t\t\t\t\t<a href=\"{{ path('new_proveedor') }}\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Contratos con proveedores</h1>

\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<th>Cuenta Bancaria</th>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t{% for proveedor in proveedores %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ proveedor.contratNumber}}</td>
\t\t\t\t\t\t\t<td>{{ proveedor.numberAccount }}</td>
\t\t\t\t\t\t\t<td>{{ proveedor.startAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>{{ proveedor.endAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('edit_proveedor',{
\t\t\t\t\t\t\t\t\t'id' : proveedor.id
\t\t\t\t\t\t\t\t}) }}\" class=\"btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "proveedor/list.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/list.html.twig");
    }
}
