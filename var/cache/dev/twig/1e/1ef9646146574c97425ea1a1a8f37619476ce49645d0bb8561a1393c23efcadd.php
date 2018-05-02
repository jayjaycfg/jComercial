<?php

/* factura/list.html.twig */
class __TwigTemplate_0a7e124e25162eecc1528815870e106b3b523263844311fd17474c94468350f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "factura/list.html.twig", 1);
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
        $__internal_e37daf37b06e376b1dcb0ed2d691a1a8514135aef76689b9ef5eb341500bd653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37daf37b06e376b1dcb0ed2d691a1a8514135aef76689b9ef5eb341500bd653->enter($__internal_e37daf37b06e376b1dcb0ed2d691a1a8514135aef76689b9ef5eb341500bd653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/list.html.twig"));

        $__internal_670f31af10dd035e174d54df8fe187955e93cf0426f334edb69bf57f75210e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670f31af10dd035e174d54df8fe187955e93cf0426f334edb69bf57f75210e52->enter($__internal_670f31af10dd035e174d54df8fe187955e93cf0426f334edb69bf57f75210e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37daf37b06e376b1dcb0ed2d691a1a8514135aef76689b9ef5eb341500bd653->leave($__internal_e37daf37b06e376b1dcb0ed2d691a1a8514135aef76689b9ef5eb341500bd653_prof);

        
        $__internal_670f31af10dd035e174d54df8fe187955e93cf0426f334edb69bf57f75210e52->leave($__internal_670f31af10dd035e174d54df8fe187955e93cf0426f334edb69bf57f75210e52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3426fb464fe76dc4dba4d09c8d31a3c17f07a0d31b21446ccdc9e16f091b03cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3426fb464fe76dc4dba4d09c8d31a3c17f07a0d31b21446ccdc9e16f091b03cb->enter($__internal_3426fb464fe76dc4dba4d09c8d31a3c17f07a0d31b21446ccdc9e16f091b03cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b51947ace94b2af3a08f1ab948e3ef10abd40bb0b4dd0a7b9fc9149ab329ec5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51947ace94b2af3a08f1ab948e3ef10abd40bb0b4dd0a7b9fc9149ab329ec5a->enter($__internal_b51947ace94b2af3a08f1ab948e3ef10abd40bb0b4dd0a7b9fc9149ab329ec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_factura");
        echo "\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Facturas</h1>

\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Importe en CUC</th>
\t\t\t\t\t\t<th>Importe en CUP</th>
\t\t\t\t\t\t<th>Contratos</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["facturas"] ?? $this->getContext($context, "facturas")));
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_factura", array("id" => $this->getAttribute(            // line 26
$context["factura"], "id", array()))), "html", null, true);
            // line 27
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["factura"], "importeCuc", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["factura"], "importeCup", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["factura"], "contratos", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_factura", array("id" => $this->getAttribute(            // line 36
$context["factura"], "id", array()))), "html", null, true);
            // line 37
            echo "\" class=\"btn-xs btn-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_b51947ace94b2af3a08f1ab948e3ef10abd40bb0b4dd0a7b9fc9149ab329ec5a->leave($__internal_b51947ace94b2af3a08f1ab948e3ef10abd40bb0b4dd0a7b9fc9149ab329ec5a_prof);

        
        $__internal_3426fb464fe76dc4dba4d09c8d31a3c17f07a0d31b21446ccdc9e16f091b03cb->leave($__internal_3426fb464fe76dc4dba4d09c8d31a3c17f07a0d31b21446ccdc9e16f091b03cb_prof);

    }

    public function getTemplateName()
    {
        return "factura/list.html.twig";
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
\t\t\t\t\t<a href=\"{{ path('new_factura') }}\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Facturas</h1>

\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Importe en CUC</th>
\t\t\t\t\t\t<th>Importe en CUP</th>
\t\t\t\t\t\t<th>Contratos</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t{% for factura in facturas %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('show_factura',{
\t\t\t\t\t\t\t\t\t'id' : factura.id
\t\t\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t\t\t{{ factura.id }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ factura.importeCuc |number_format}}</td>
\t\t\t\t\t\t\t<td>{{ factura.importeCup |number_format}}</td>
\t\t\t\t\t\t\t<td>{{ factura.contratos|json_encode }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_factura',{
\t\t\t\t\t\t\t\t\t'id' : factura.id
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
{% endblock %}


", "factura/list.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/list.html.twig");
    }
}
