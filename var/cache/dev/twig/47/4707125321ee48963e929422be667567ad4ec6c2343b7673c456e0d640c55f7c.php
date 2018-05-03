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
        $__internal_0a7d865674f2c80ce86f85815ec388457f19cfe70b1a520969e20608f8ef006a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7d865674f2c80ce86f85815ec388457f19cfe70b1a520969e20608f8ef006a->enter($__internal_0a7d865674f2c80ce86f85815ec388457f19cfe70b1a520969e20608f8ef006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:show.html.twig"));

        $__internal_e0df9b95670fb405ee20e4d1122815f7ee39ebf6935e21c751832e018668539a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0df9b95670fb405ee20e4d1122815f7ee39ebf6935e21c751832e018668539a->enter($__internal_e0df9b95670fb405ee20e4d1122815f7ee39ebf6935e21c751832e018668539a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a7d865674f2c80ce86f85815ec388457f19cfe70b1a520969e20608f8ef006a->leave($__internal_0a7d865674f2c80ce86f85815ec388457f19cfe70b1a520969e20608f8ef006a_prof);

        
        $__internal_e0df9b95670fb405ee20e4d1122815f7ee39ebf6935e21c751832e018668539a->leave($__internal_e0df9b95670fb405ee20e4d1122815f7ee39ebf6935e21c751832e018668539a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_167852ebd7661aad95c6f0a223e95e4ee74f84592d6525630ef1dd44785c416e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167852ebd7661aad95c6f0a223e95e4ee74f84592d6525630ef1dd44785c416e->enter($__internal_167852ebd7661aad95c6f0a223e95e4ee74f84592d6525630ef1dd44785c416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fdf2be8420fd278062614b0a48201c0e96db1c9c67aa901684f873ceb827361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdf2be8420fd278062614b0a48201c0e96db1c9c67aa901684f873ceb827361->enter($__internal_4fdf2be8420fd278062614b0a48201c0e96db1c9c67aa901684f873ceb827361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t";
        // line 67
        echo "\t\t\t\t\t\t";
        // line 68
        echo "\t\t\t\t\t\t";
        // line 69
        echo "\t\t\t\t\t\t";
        // line 70
        echo "\t\t\t\t\t\t";
        // line 71
        echo "\t\t\t\t\t";
        // line 72
        echo "
\t\t\t\t\t";
        // line 74
        echo "\t\t\t\t\t\t";
        // line 75
        echo "\t\t\t\t\t\t\t";
        // line 76
        echo "\t\t\t\t\t\t\t";
        // line 77
        echo "\t\t\t\t\t\t";
        // line 78
        echo "\t\t\t\t\t\t";
        // line 79
        echo "\t\t\t\t\t\t\t";
        // line 80
        echo "\t\t\t\t\t\t\t";
        // line 81
        echo "\t\t\t\t\t\t";
        // line 82
        echo "\t\t\t\t\t";
        // line 83
        echo "\t\t\t\t\t";
        // line 84
        echo "\t\t\t\t\t\t";
        // line 85
        echo "\t\t\t\t\t\t";
        // line 86
        echo "\t\t\t\t\t";
        // line 87
        echo "\t\t\t\t\t";
        // line 88
        echo "\t\t\t\t\t\t";
        // line 89
        echo "\t\t\t\t\t\t";
        // line 90
        echo "\t\t\t\t\t";
        // line 91
        echo "\t\t\t\t\t";
        // line 92
        echo "\t\t\t\t\t\t";
        // line 93
        echo "\t\t\t\t\t\t";
        // line 94
        echo "\t\t\t\t\t";
        // line 95
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<h3>Empresa:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["contrato"] ?? $this->getContext($context, "contrato")), "empresas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 102
            echo "\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_4fdf2be8420fd278062614b0a48201c0e96db1c9c67aa901684f873ceb827361->leave($__internal_4fdf2be8420fd278062614b0a48201c0e96db1c9c67aa901684f873ceb827361_prof);

        
        $__internal_167852ebd7661aad95c6f0a223e95e4ee74f84592d6525630ef1dd44785c416e->leave($__internal_167852ebd7661aad95c6f0a223e95e4ee74f84592d6525630ef1dd44785c416e_prof);

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
        return array (  238 => 106,  229 => 103,  226 => 102,  222 => 101,  214 => 95,  212 => 94,  210 => 93,  208 => 92,  206 => 91,  204 => 90,  202 => 89,  200 => 88,  198 => 87,  196 => 86,  194 => 85,  192 => 84,  190 => 83,  188 => 82,  186 => 81,  184 => 80,  182 => 79,  180 => 78,  178 => 77,  176 => 76,  174 => 75,  172 => 74,  169 => 72,  167 => 71,  165 => 70,  163 => 69,  161 => 68,  159 => 67,  154 => 64,  147 => 60,  140 => 56,  133 => 52,  126 => 48,  119 => 44,  112 => 40,  105 => 36,  98 => 32,  91 => 28,  84 => 24,  77 => 20,  70 => 16,  63 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t{#<tr>#}
\t\t\t\t\t\t{#<th>Empresa</th>#}
\t\t\t\t\t\t{#{% for empresa in contrato.empresas %}#}
\t\t\t\t\t\t{#<td>{{ empresa.nombre }}</td>#}
\t\t\t\t\t\t{#{% endfor %}#}
\t\t\t\t\t{#</tr>#}

\t\t\t\t\t{#{% if factura.isCancelada == 'true' %}#}
\t\t\t\t\t\t{#<tr>#}
\t\t\t\t\t\t\t{#<th>Cancelada</th>#}
\t\t\t\t\t\t\t{#<td>Factura cancelada</td>#}
\t\t\t\t\t\t{#</tr>#}
\t\t\t\t\t\t{#<tr>#}
\t\t\t\t\t\t\t{#<th>Explicacion</th>#}
\t\t\t\t\t\t\t{#<td>{{ factura.explicacionPorCancelada }}</td>#}
\t\t\t\t\t\t{#</tr>#}
\t\t\t\t\t{#{% endif %}#}
\t\t\t\t\t{#<tr>#}
\t\t\t\t\t\t{#<th>Usuario</th>#}
\t\t\t\t\t\t{#<td>{{ factura.usuario }}</td>#}
\t\t\t\t\t{#</tr>#}
\t\t\t\t\t{#<tr>#}
\t\t\t\t\t\t{#<th>Contrato</th>#}
\t\t\t\t\t\t{#<td>{{ factura.contrato }}</td>#}
\t\t\t\t\t{#</tr>#}
\t\t\t\t\t{#<tr>#}
\t\t\t\t\t\t{#<th>Empresa</th>#}
\t\t\t\t\t\t{#<td>{{ factura.empresa }}</td>#}
\t\t\t\t\t{#</tr>#}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<h3>Empresa:</h3>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t{% for empresa in contrato.empresas %}
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t{{ empresa.nombre }}
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":contrato:show.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/show.html.twig");
    }
}
