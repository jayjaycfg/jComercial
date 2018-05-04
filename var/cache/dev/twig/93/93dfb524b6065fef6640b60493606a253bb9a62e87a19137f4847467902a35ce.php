<?php

/* :contrato:list.html.twig */
class __TwigTemplate_9459a072699385dbfbe6f8b6b6c0218d57390540ee6da806237476eacea69b4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrato:list.html.twig", 1);
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
        $__internal_128225c4fff8ea3eb0fc89076c078e03344356e09e485cd3fac03baa71b49719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128225c4fff8ea3eb0fc89076c078e03344356e09e485cd3fac03baa71b49719->enter($__internal_128225c4fff8ea3eb0fc89076c078e03344356e09e485cd3fac03baa71b49719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:list.html.twig"));

        $__internal_f42ac62b6fb6f39aa46a569f332d4f1255e8dbfdd633135b80e559d9d1468df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42ac62b6fb6f39aa46a569f332d4f1255e8dbfdd633135b80e559d9d1468df9->enter($__internal_f42ac62b6fb6f39aa46a569f332d4f1255e8dbfdd633135b80e559d9d1468df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_128225c4fff8ea3eb0fc89076c078e03344356e09e485cd3fac03baa71b49719->leave($__internal_128225c4fff8ea3eb0fc89076c078e03344356e09e485cd3fac03baa71b49719_prof);

        
        $__internal_f42ac62b6fb6f39aa46a569f332d4f1255e8dbfdd633135b80e559d9d1468df9->leave($__internal_f42ac62b6fb6f39aa46a569f332d4f1255e8dbfdd633135b80e559d9d1468df9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b02d90c55c92a6f9ac95e411e0634b2072fb9aa530a85014e84fdc1739821345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02d90c55c92a6f9ac95e411e0634b2072fb9aa530a85014e84fdc1739821345->enter($__internal_b02d90c55c92a6f9ac95e411e0634b2072fb9aa530a85014e84fdc1739821345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9abdceab4194dbebabe4bf347382586b7d1366ef487b17538d3c9d1cc56333c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abdceab4194dbebabe4bf347382586b7d1366ef487b17538d3c9d1cc56333c0->enter($__internal_9abdceab4194dbebabe4bf347382586b7d1366ef487b17538d3c9d1cc56333c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_contrato");
        echo "\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Contratos</h1>

\t\t\t\t<table class=\"table table-striped js-table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Numero de Orden</th>
\t\t\t\t\t\t";
        // line 19
        echo "\t\t\t\t\t\t";
        // line 20
        echo "\t\t\t\t\t\t";
        // line 21
        echo "\t\t\t\t\t\t";
        // line 22
        echo "\t\t\t\t\t\t";
        // line 23
        echo "\t\t\t\t\t\t<th>Fecha de Otorgamiento</th>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>Telefono</th>
\t\t\t\t\t\t<th>Correo</th>
\t\t\t\t\t\t";
        // line 28
        echo "\t\t\t\t\t\t";
        // line 29
        echo "\t\t\t\t\t\t";
        // line 30
        echo "\t\t\t\t\t\t";
        // line 31
        echo "\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contratos"] ?? $this->getContext($context, "contratos")));
        foreach ($context['_seq'] as $context["_key"] => $context["contrato"]) {
            // line 35
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_contrato", array("id" => $this->getAttribute(            // line 38
$context["contrato"], "id", array()))), "html", null, true);
            // line 39
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["contrato"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["contrato"], "noDeOrden", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 45
            echo "\t\t\t\t\t\t\t";
            // line 46
            echo "\t\t\t\t\t\t\t";
            // line 47
            echo "\t\t\t\t\t\t\t";
            // line 48
            echo "\t\t\t\t\t\t\t";
            // line 49
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contrato"], "fechaDeOtorgamiento", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contrato"], "fechaDeVencimiento", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["contrato"], "telefono", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["contrato"], "correo", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 54
            echo "\t\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t\t\t\t";
            // line 57
            echo "\t\t\t\t\t\t\t";
            // line 58
            echo "\t\t\t\t\t\t\t";
            // line 59
            echo "
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_contrato", array("id" => $this->getAttribute(            // line 62
$context["contrato"], "id", array()))), "html", null, true);
            // line 63
            echo "\" class=\"pull-right btn-xs btn-link\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"pull-right btn-xs btn-link\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-save\"></span>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_9abdceab4194dbebabe4bf347382586b7d1366ef487b17538d3c9d1cc56333c0->leave($__internal_9abdceab4194dbebabe4bf347382586b7d1366ef487b17538d3c9d1cc56333c0_prof);

        
        $__internal_b02d90c55c92a6f9ac95e411e0634b2072fb9aa530a85014e84fdc1739821345->leave($__internal_b02d90c55c92a6f9ac95e411e0634b2072fb9aa530a85014e84fdc1739821345_prof);

    }

    public function getTemplateName()
    {
        return ":contrato:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 75,  159 => 63,  157 => 62,  156 => 61,  152 => 59,  150 => 58,  148 => 57,  146 => 56,  144 => 55,  142 => 54,  138 => 52,  134 => 51,  130 => 50,  125 => 49,  123 => 48,  121 => 47,  119 => 46,  117 => 45,  113 => 43,  107 => 40,  104 => 39,  102 => 38,  101 => 37,  97 => 35,  93 => 34,  88 => 31,  86 => 30,  84 => 29,  82 => 28,  76 => 23,  74 => 22,  72 => 21,  70 => 20,  68 => 19,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t<a href=\"{{ path('crear_contrato') }}\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Contratos</h1>

\t\t\t\t<table class=\"table table-striped js-table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Numero de Orden</th>
\t\t\t\t\t\t{#<th>Tipo de Contrato</th>#}
\t\t\t\t\t\t{#<th>Valor inicial en MN</th>#}
\t\t\t\t\t\t{#<th>Valor inicial en CUC</th>#}
\t\t\t\t\t\t{#<th>Suplemento</th>#}
\t\t\t\t\t\t{#<th>Acta de Firmado</th>#}
\t\t\t\t\t\t<th>Fecha de Otorgamiento</th>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>Telefono</th>
\t\t\t\t\t\t<th>Correo</th>
\t\t\t\t\t\t{#<th>Cliente</th>#}
\t\t\t\t\t\t{#<th>Proveedor</th>#}
\t\t\t\t\t\t{#<th>Ministerio</th>#}
\t\t\t\t\t\t{#<th>Empresas</th>#}
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t{% for contrato in contratos %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('mostrar_contrato',{
\t\t\t\t\t\t\t\t\t'id' : contrato.id
\t\t\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t\t\t{{ contrato.id }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ contrato.noDeOrden}}</td>
\t\t\t\t\t\t\t{#<td>{{ contrato.tipoDeContrato |json_encode}}</td>#}
\t\t\t\t\t\t\t{#<td>{{ contrato.valorInicialMn |number_format}}</td>#}
\t\t\t\t\t\t\t{#<td>{{ contrato.valorInicialCuc |number_format}}</td>#}
\t\t\t\t\t\t\t{#<td>{{ contrato.isSuplemento}}</td>#}
\t\t\t\t\t\t\t{#<td>{{ contrato.actaDeFirmado}}</td>#}
\t\t\t\t\t\t\t<td>{{ contrato.fechaDeOtorgamiento |date('Y-m-d')}}</td>
\t\t\t\t\t\t\t<td>{{ contrato.fechaDeVencimiento |date('Y-m-d')}}</td>
\t\t\t\t\t\t\t<td>{{ contrato.telefono}}</td>
\t\t\t\t\t\t\t<td>{{ contrato.correo}}</td>
\t\t\t\t\t\t\t{#<td>{{ contrato.isCliente}}</td>#}
\t\t\t\t\t\t\t{#<td>{{ contrato.isProveedor}}</td>#}
\t\t\t\t\t\t\t{#<td>{{ contrato.ministerio |json_encode}}</td>#}
\t\t\t\t\t\t\t{#{% for empresa in contrato.empresas %}#}
\t\t\t\t\t\t\t{#<td>{{ empresa.nombre}}</td>#}
\t\t\t\t\t\t\t{#{% endfor %}#}

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('modificar_contrato',{
\t\t\t\t\t\t\t\t\t'id' : contrato.id
\t\t\t\t\t\t\t\t}) }}\" class=\"pull-right btn-xs btn-link\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"pull-right btn-xs btn-link\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-save\"></span>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}


{#{% block javascripts %}#}
\t{#{{ parent() }}#}
\t{#<script>#}
        {#\$(document).ready(function () {#}
            {#var \$table = \$('.js-table');#}
            {#\$table.find('.js-cancelar-factura').on('click',function (e) {#}
                {#e.preventDefault();#}
                {#var \$row = \$(this).closest('tr');#}

                {#\$.ajax({#}
                    {#url: \$(this).data('url')#}
                {#}).done(function () {#}
                    {#\$row.fadeOut();#}
                {#});#}
            {#});#}
        {#});#}
\t{#</script>#}
{#{% endblock %}#}", ":contrato:list.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/list.html.twig");
    }
}
