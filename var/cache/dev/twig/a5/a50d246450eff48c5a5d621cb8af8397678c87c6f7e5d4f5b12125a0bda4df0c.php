<?php

/* :proveedor:list.html.twig */
class __TwigTemplate_9e104870322f27bcab0df86ee1cdc6859177fa01c088683f0cd44063b2810e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proveedor:list.html.twig", 1);
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
        $__internal_d511224b4923f4993b2a499736ff6b66438f989c2e6a29276a4680f5a78d4f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d511224b4923f4993b2a499736ff6b66438f989c2e6a29276a4680f5a78d4f43->enter($__internal_d511224b4923f4993b2a499736ff6b66438f989c2e6a29276a4680f5a78d4f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:list.html.twig"));

        $__internal_4ac76560f3150698d74d929a41a988f33a73da70a79c6072df46b964c4c62415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac76560f3150698d74d929a41a988f33a73da70a79c6072df46b964c4c62415->enter($__internal_4ac76560f3150698d74d929a41a988f33a73da70a79c6072df46b964c4c62415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d511224b4923f4993b2a499736ff6b66438f989c2e6a29276a4680f5a78d4f43->leave($__internal_d511224b4923f4993b2a499736ff6b66438f989c2e6a29276a4680f5a78d4f43_prof);

        
        $__internal_4ac76560f3150698d74d929a41a988f33a73da70a79c6072df46b964c4c62415->leave($__internal_4ac76560f3150698d74d929a41a988f33a73da70a79c6072df46b964c4c62415_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2023a4f5d1d4381b9d9b61b4ba5fe7c94c1864c7ea61c755b2a77264ae38161b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2023a4f5d1d4381b9d9b61b4ba5fe7c94c1864c7ea61c755b2a77264ae38161b->enter($__internal_2023a4f5d1d4381b9d9b61b4ba5fe7c94c1864c7ea61c755b2a77264ae38161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c84fb36d4060d2ee583dfc266fdfde4760aa42992de55ad706fd9ef6511a5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c84fb36d4060d2ee583dfc266fdfde4760aa42992de55ad706fd9ef6511a5c3->enter($__internal_9c84fb36d4060d2ee583dfc266fdfde4760aa42992de55ad706fd9ef6511a5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_proveedor", array("id" => $this->getAttribute(            // line 26
$context["proveedor"], "id", array()))), "html", null, true);
            // line 27
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "contratNumber", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "numberAccount", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proveedor"], "startAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proveedor"], "endAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_proveedor", array("id" => $this->getAttribute(            // line 36
$context["proveedor"], "id", array()))), "html", null, true);
            // line 37
            echo "\" class=\"btn-xs btn-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_9c84fb36d4060d2ee583dfc266fdfde4760aa42992de55ad706fd9ef6511a5c3->leave($__internal_9c84fb36d4060d2ee583dfc266fdfde4760aa42992de55ad706fd9ef6511a5c3_prof);

        
        $__internal_2023a4f5d1d4381b9d9b61b4ba5fe7c94c1864c7ea61c755b2a77264ae38161b->leave($__internal_2023a4f5d1d4381b9d9b61b4ba5fe7c94c1864c7ea61c755b2a77264ae38161b_prof);

    }

    public function getTemplateName()
    {
        return ":proveedor:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  108 => 37,  106 => 36,  105 => 35,  100 => 33,  96 => 32,  92 => 31,  86 => 28,  83 => 27,  81 => 26,  80 => 25,  76 => 23,  72 => 22,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('show_proveedor',{
\t\t\t\t\t\t\t\t\t'id' : proveedor.id
\t\t\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t\t{{ proveedor.contratNumber}}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ proveedor.numberAccount }}</td>
\t\t\t\t\t\t\t<td>{{ proveedor.startAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>{{ proveedor.endAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('edit_proveedor',{
\t\t\t\t\t\t\t\t\t'id' : proveedor.id
\t\t\t\t\t\t\t\t}) }}\" class=\"btn-xs btn-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":proveedor:list.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/list.html.twig");
    }
}
