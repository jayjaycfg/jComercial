<?php

/* contrato/list.html.twig */
class __TwigTemplate_4bc71efad7ec5519499fdbec94937e6cf8b68f9ec1c479247ae12a23ff94db8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contrato/list.html.twig", 1);
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
        $__internal_62de5df239acc14f326074764287679ee548470cb9dcfa979de4c9ee752fca89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62de5df239acc14f326074764287679ee548470cb9dcfa979de4c9ee752fca89->enter($__internal_62de5df239acc14f326074764287679ee548470cb9dcfa979de4c9ee752fca89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contrato/list.html.twig"));

        $__internal_82407be31092b6f413bd6216ce2abf08f9949f474daacb9b57841962f53ba8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82407be31092b6f413bd6216ce2abf08f9949f474daacb9b57841962f53ba8d0->enter($__internal_82407be31092b6f413bd6216ce2abf08f9949f474daacb9b57841962f53ba8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contrato/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62de5df239acc14f326074764287679ee548470cb9dcfa979de4c9ee752fca89->leave($__internal_62de5df239acc14f326074764287679ee548470cb9dcfa979de4c9ee752fca89_prof);

        
        $__internal_82407be31092b6f413bd6216ce2abf08f9949f474daacb9b57841962f53ba8d0->leave($__internal_82407be31092b6f413bd6216ce2abf08f9949f474daacb9b57841962f53ba8d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cba732fec41a8838865178df4ef9320dbf43840ddfe5fb9c847749acec88d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cba732fec41a8838865178df4ef9320dbf43840ddfe5fb9c847749acec88d7b->enter($__internal_4cba732fec41a8838865178df4ef9320dbf43840ddfe5fb9c847749acec88d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_699ffc6fc275d22f3848aa38a599dcf058a567884bed288f35f63505efe4cb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699ffc6fc275d22f3848aa38a599dcf058a567884bed288f35f63505efe4cb18->enter($__internal_699ffc6fc275d22f3848aa38a599dcf058a567884bed288f35f63505efe4cb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["contrato"]) {
            // line 35
            echo "
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_contrato", array("id" => $this->getAttribute(            // line 39
$context["contrato"], "id", array()))), "html", null, true);
            // line 40
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["contrato"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["contrato"], "noDeOrden", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 46
            echo "\t\t\t\t\t\t\t";
            // line 47
            echo "\t\t\t\t\t\t\t";
            // line 48
            echo "\t\t\t\t\t\t\t";
            // line 49
            echo "\t\t\t\t\t\t\t";
            // line 50
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contrato"], "fechaDeOtorgamiento", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contrato"], "fechaDeVencimiento", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["contrato"], "telefono", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["contrato"], "correo", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t\t\t\t";
            // line 57
            echo "\t\t\t\t\t\t\t";
            // line 58
            echo "\t\t\t\t\t\t\t";
            // line 59
            echo "\t\t\t\t\t\t\t";
            // line 60
            echo "
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_contrato", array("id" => $this->getAttribute(            // line 63
$context["contrato"], "id", array()))), "html", null, true);
            // line 64
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
        // line 76
        echo "\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<div class=\"container text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        // line 81
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_699ffc6fc275d22f3848aa38a599dcf058a567884bed288f35f63505efe4cb18->leave($__internal_699ffc6fc275d22f3848aa38a599dcf058a567884bed288f35f63505efe4cb18_prof);

        
        $__internal_4cba732fec41a8838865178df4ef9320dbf43840ddfe5fb9c847749acec88d7b->leave($__internal_4cba732fec41a8838865178df4ef9320dbf43840ddfe5fb9c847749acec88d7b_prof);

    }

    public function getTemplateName()
    {
        return "contrato/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 81,  177 => 76,  160 => 64,  158 => 63,  157 => 62,  153 => 60,  151 => 59,  149 => 58,  147 => 57,  145 => 56,  143 => 55,  139 => 53,  135 => 52,  131 => 51,  126 => 50,  124 => 49,  122 => 48,  120 => 47,  118 => 46,  114 => 44,  108 => 41,  105 => 40,  103 => 39,  102 => 38,  97 => 35,  93 => 34,  88 => 31,  86 => 30,  84 => 29,  82 => 28,  76 => 23,  74 => 22,  72 => 21,  70 => 20,  68 => 19,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t{% for contrato in pagination %}

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
\t\t\t\t\t\t\t\t\t<div class=\"container text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   {{ knp_pagination_render(pagination) }}
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

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
{#{% endblock %}#}", "contrato/list.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/list.html.twig");
    }
}
