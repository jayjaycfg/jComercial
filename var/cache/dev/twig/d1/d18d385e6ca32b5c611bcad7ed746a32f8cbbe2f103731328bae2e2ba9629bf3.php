<?php

/* :factura:show.html.twig */
class __TwigTemplate_fc89f660833e115198ad368b407d83856c3cc54fd15a9048fe5fb321b5be5113 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":factura:show.html.twig", 1);
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
        $__internal_8c2d0802a15773874b7ae0724b02b8176b3269abcb7157fa74f7869b0b8aa867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2d0802a15773874b7ae0724b02b8176b3269abcb7157fa74f7869b0b8aa867->enter($__internal_8c2d0802a15773874b7ae0724b02b8176b3269abcb7157fa74f7869b0b8aa867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:show.html.twig"));

        $__internal_8326ec36bc746607ad9351ea22c752ac45994753bc3b9e4d4303b15b9ebf3c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8326ec36bc746607ad9351ea22c752ac45994753bc3b9e4d4303b15b9ebf3c26->enter($__internal_8326ec36bc746607ad9351ea22c752ac45994753bc3b9e4d4303b15b9ebf3c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c2d0802a15773874b7ae0724b02b8176b3269abcb7157fa74f7869b0b8aa867->leave($__internal_8c2d0802a15773874b7ae0724b02b8176b3269abcb7157fa74f7869b0b8aa867_prof);

        
        $__internal_8326ec36bc746607ad9351ea22c752ac45994753bc3b9e4d4303b15b9ebf3c26->leave($__internal_8326ec36bc746607ad9351ea22c752ac45994753bc3b9e4d4303b15b9ebf3c26_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9404ca9297b38ef509999cdaf4efecafeed67b7f9af4984b1591c602a838d9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9404ca9297b38ef509999cdaf4efecafeed67b7f9af4984b1591c602a838d9c2->enter($__internal_9404ca9297b38ef509999cdaf4efecafeed67b7f9af4984b1591c602a838d9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49c2ecac979ad95f9580b3595804d602351f5a316ff8a54744007de56b6678cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c2ecac979ad95f9580b3595804d602351f5a316ff8a54744007de56b6678cd->enter($__internal_49c2ecac979ad95f9580b3595804d602351f5a316ff8a54744007de56b6678cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h1>Factura:
\t\t\t\t";
        // line 8
        if (($context["factura"] ?? $this->getContext($context, "factura"))) {
            // line 9
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "id", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Programa</th>
\t\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "programa", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Descripcion del gasto</th>
\t\t\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "descripcionDelGasto", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "cantidad", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Precio</th>
\t\t\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "precio", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Participante</th>
\t\t\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "participante", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "fechaAt", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 38
        if (($this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "isCancelada", array()) == "true")) {
            // line 39
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cancelada</th>
\t\t\t\t\t\t<td>Factura cancelada</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Explicacion</th>
\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "explicacionPorCancelada", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Usuario</th>
\t\t\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "usuario", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Contrato</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "contrato", array()), "noDeOrden", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Empresa</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "empresa", array()), "nombre", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<h3>Empresa:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_empresa", array("id" => $this->getAttribute($this->getAttribute(        // line 76
($context["factura"] ?? $this->getContext($context, "factura")), "empresa", array()), "id", array()))), "html", null, true);
        // line 77
        echo "\">
\t\t\t\t\t\t\t";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "empresa", array()), "nombre", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<h3>Contrato:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t<li class=\"list-group-item\">Contrato</li>
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_contrato", array("id" => $this->getAttribute($this->getAttribute(        // line 89
($context["factura"] ?? $this->getContext($context, "factura")), "contrato", array()), "id", array()))), "html", null, true);
        // line 90
        echo "\">
\t\t\t\t\t\t\t";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "contrato", array()), "noDeOrden", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_49c2ecac979ad95f9580b3595804d602351f5a316ff8a54744007de56b6678cd->leave($__internal_49c2ecac979ad95f9580b3595804d602351f5a316ff8a54744007de56b6678cd_prof);

        
        $__internal_9404ca9297b38ef509999cdaf4efecafeed67b7f9af4984b1591c602a838d9c2->leave($__internal_9404ca9297b38ef509999cdaf4efecafeed67b7f9af4984b1591c602a838d9c2_prof);

    }

    public function getTemplateName()
    {
        return ":factura:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 91,  186 => 90,  184 => 89,  183 => 88,  170 => 78,  167 => 77,  165 => 76,  164 => 75,  150 => 64,  139 => 56,  130 => 50,  126 => 48,  120 => 45,  112 => 39,  110 => 38,  105 => 36,  98 => 32,  91 => 28,  84 => 24,  77 => 20,  70 => 16,  63 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>Factura:
\t\t\t\t{% if factura %}
\t\t\t\t\t{{ factura.id }}
\t\t\t\t{% endif %}
\t\t\t\t</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Programa</th>
\t\t\t\t\t\t<td>{{ factura.programa }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Descripcion del gasto</th>
\t\t\t\t\t\t<td>{{ factura.descripcionDelGasto }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<td>{{ factura.cantidad }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Precio</th>
\t\t\t\t\t\t<td>{{ factura.precio }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Participante</th>
\t\t\t\t\t\t<td>{{ factura.participante }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t<td>{{ factura.fechaAt |date('Y-m-d') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% if factura.isCancelada == 'true' %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cancelada</th>
\t\t\t\t\t\t<td>Factura cancelada</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Explicacion</th>
\t\t\t\t\t\t<td>{{ factura.explicacionPorCancelada }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Usuario</th>
\t\t\t\t\t\t<td>{{ factura.usuario }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Contrato</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t{{ factura.contrato.noDeOrden}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Empresa</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t{{ factura.empresa.nombre }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<h3>Empresa:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"{{ path('mostrar_empresa',{
\t\t\t\t\t\t\t'id' : factura.empresa.id
\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t{{ factura.empresa.nombre }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<h3>Contrato:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t<li class=\"list-group-item\">Contrato</li>
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"{{ path('mostrar_contrato',{
\t\t\t\t\t\t\t'id' : factura.contrato.id
\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t{{ factura.contrato.noDeOrden }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":factura:show.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/show.html.twig");
    }
}
