<?php

/* :contrato:show.html.twig */
class __TwigTemplate_09eb621a7409fc411e14faf8631c6f5c5a426f182b86cb5be771357c8a8e5a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrato:show.html.twig", 1);
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
        $__internal_f8ba7d45f5dea64747b45359a38a99bfec274c644fc8fb866223ef82b7e0a03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ba7d45f5dea64747b45359a38a99bfec274c644fc8fb866223ef82b7e0a03d->enter($__internal_f8ba7d45f5dea64747b45359a38a99bfec274c644fc8fb866223ef82b7e0a03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:show.html.twig"));

        $__internal_2fe50fd3064eb3d8990395a2c2b373629233bfcc8ae3945c996429c1048d5dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe50fd3064eb3d8990395a2c2b373629233bfcc8ae3945c996429c1048d5dd2->enter($__internal_2fe50fd3064eb3d8990395a2c2b373629233bfcc8ae3945c996429c1048d5dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ba7d45f5dea64747b45359a38a99bfec274c644fc8fb866223ef82b7e0a03d->leave($__internal_f8ba7d45f5dea64747b45359a38a99bfec274c644fc8fb866223ef82b7e0a03d_prof);

        
        $__internal_2fe50fd3064eb3d8990395a2c2b373629233bfcc8ae3945c996429c1048d5dd2->leave($__internal_2fe50fd3064eb3d8990395a2c2b373629233bfcc8ae3945c996429c1048d5dd2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3606ae128708b128853d17eaef072a225be68f3c427fc79523ac383d63c104b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3606ae128708b128853d17eaef072a225be68f3c427fc79523ac383d63c104b->enter($__internal_e3606ae128708b128853d17eaef072a225be68f3c427fc79523ac383d63c104b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a839be4acca2adcc3d3ec545ed35c8432987c2e7cd83cd00d0a4ba53bc6e5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a839be4acca2adcc3d3ec545ed35c8432987c2e7cd83cd00d0a4ba53bc6e5f5->enter($__internal_0a839be4acca2adcc3d3ec545ed35c8432987c2e7cd83cd00d0a4ba53bc6e5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h1>Contrato:
\t\t\t\t\t";
        // line 8
        if (($context["contrato"] ?? $this->getContext($context, "contrato"))) {
            // line 9
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "id", array()), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Numero de Orden</th>
\t\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "noDeOrden", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Tipo de Contrato</th>
\t\t\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "tipoDeContrato", array())), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Valor inicial en MN</th>
\t\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "valorInicialMn", array())), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Valor inicial en CUC</th>
\t\t\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "valorInicialCuc", array())), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Suplemento</th>
\t\t\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "isSuplemento", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Acta de Firmado</th>
\t\t\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "actaDeFirmado", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Otorgamiento</th>
\t\t\t\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "fechaDeOtorgamiento", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "fechaDeVencimiento", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Telefono</th>
\t\t\t\t\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "telefono", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Correo</th>
\t\t\t\t\t\t<td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "correo", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t<td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "isCliente", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Proveedor</th>
\t\t\t\t\t\t<td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "isProveedor", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Ministerio</th>
\t\t\t\t\t\t<td>";
        // line 64
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "ministerio", array())), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<h3>Empresa:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_empresa", array("id" => $this->getAttribute($this->getAttribute(        // line 74
($context["contrato"] ?? $this->getContext($context, "contrato")), "empresa", array()), "id", array()))), "html", null, true);
        // line 75
        echo "\">
\t\t\t\t\t\t";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "empresa", array()), "nombre", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<h3>Facturas Asociadas:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "facturas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 85
            echo "\t\t\t\t\t<li class=\"list-group-item\">

\t\t\t\t\t\t\t<a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_factura", array("id" => $this->getAttribute(            // line 88
$context["factura"], "id", array()))), "html", null, true);
            // line 89
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>

\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_0a839be4acca2adcc3d3ec545ed35c8432987c2e7cd83cd00d0a4ba53bc6e5f5->leave($__internal_0a839be4acca2adcc3d3ec545ed35c8432987c2e7cd83cd00d0a4ba53bc6e5f5_prof);

        
        $__internal_e3606ae128708b128853d17eaef072a225be68f3c427fc79523ac383d63c104b->leave($__internal_e3606ae128708b128853d17eaef072a225be68f3c427fc79523ac383d63c104b_prof);

    }

    public function getTemplateName()
    {
        return ":contrato:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 95,  197 => 90,  194 => 89,  192 => 88,  191 => 87,  187 => 85,  183 => 84,  172 => 76,  169 => 75,  167 => 74,  166 => 73,  154 => 64,  147 => 60,  140 => 56,  133 => 52,  126 => 48,  119 => 44,  112 => 40,  105 => 36,  98 => 32,  91 => 28,  84 => 24,  77 => 20,  70 => 16,  63 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>Contrato:
\t\t\t\t\t{% if contrato %}
\t\t\t\t\t\t{{ contrato.id }}
\t\t\t\t\t{% endif %}
\t\t\t\t</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Numero de Orden</th>
\t\t\t\t\t\t<td>{{ contrato.noDeOrden }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Tipo de Contrato</th>
\t\t\t\t\t\t<td>{{ contrato.tipoDeContrato |json_encode}}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Valor inicial en MN</th>
\t\t\t\t\t\t<td>{{ contrato.valorInicialMn |number_format}}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Valor inicial en CUC</th>
\t\t\t\t\t\t<td>{{ contrato.valorInicialCuc |number_format}}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Suplemento</th>
\t\t\t\t\t\t<td>{{ contrato.isSuplemento }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Acta de Firmado</th>
\t\t\t\t\t\t<td>{{ contrato.actaDeFirmado }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Otorgamiento</th>
\t\t\t\t\t\t<td>{{ contrato.fechaDeOtorgamiento |date('Y-m-d')}}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>{{ contrato.fechaDeVencimiento |date('Y-m-d')}}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Telefono</th>
\t\t\t\t\t\t<td>{{ contrato.telefono }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Correo</th>
\t\t\t\t\t\t<td>{{ contrato.correo }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t<td>{{ contrato.isCliente }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Proveedor</th>
\t\t\t\t\t\t<td>{{ contrato.isProveedor }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Ministerio</th>
\t\t\t\t\t\t<td>{{ contrato.ministerio |json_encode}}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<h3>Empresa:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"{{ path('mostrar_empresa',{
\t\t\t\t\t\t\t'id' : contrato.empresa.id
\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t{{ contrato.empresa.nombre }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<h3>Facturas Asociadas:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t{% for factura in contrato.facturas %}
\t\t\t\t\t<li class=\"list-group-item\">

\t\t\t\t\t\t\t<a href=\"{{ path('show_factura',{
\t\t\t\t\t\t\t\t'id' : factura.id
\t\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t\t{{ factura.id }}
\t\t\t\t\t\t\t</a>

\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":contrato:show.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/show.html.twig");
    }
}
