<?php

/* :factura:list.html.twig */
class __TwigTemplate_9efb8eca6a29fb7e789ad61aaba96f12c6c3e871f9ebfa80e3df6491d15b9e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":factura:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12b40cddba7016949b3262643c44ee1bd440d9fe10c7f5055cc5f37a811961ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b40cddba7016949b3262643c44ee1bd440d9fe10c7f5055cc5f37a811961ef->enter($__internal_12b40cddba7016949b3262643c44ee1bd440d9fe10c7f5055cc5f37a811961ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:list.html.twig"));

        $__internal_c58d7f1ead47dc4c2869eabee27a517fa0a3c3b93ff699749fd72aa61c38c231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58d7f1ead47dc4c2869eabee27a517fa0a3c3b93ff699749fd72aa61c38c231->enter($__internal_c58d7f1ead47dc4c2869eabee27a517fa0a3c3b93ff699749fd72aa61c38c231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b40cddba7016949b3262643c44ee1bd440d9fe10c7f5055cc5f37a811961ef->leave($__internal_12b40cddba7016949b3262643c44ee1bd440d9fe10c7f5055cc5f37a811961ef_prof);

        
        $__internal_c58d7f1ead47dc4c2869eabee27a517fa0a3c3b93ff699749fd72aa61c38c231->leave($__internal_c58d7f1ead47dc4c2869eabee27a517fa0a3c3b93ff699749fd72aa61c38c231_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b59cd5be843cb49f86961b41ee45e45892f73bd625a33edbed78752e05d889e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59cd5be843cb49f86961b41ee45e45892f73bd625a33edbed78752e05d889e6->enter($__internal_b59cd5be843cb49f86961b41ee45e45892f73bd625a33edbed78752e05d889e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5828d0b2044768b73d59974114a0d243de31530e6c38ad75b74c56c38fb1343c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5828d0b2044768b73d59974114a0d243de31530e6c38ad75b74c56c38fb1343c->enter($__internal_5828d0b2044768b73d59974114a0d243de31530e6c38ad75b74c56c38fb1343c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

\t\t\t\t<table class=\"table table-striped js-table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Usuario</th>
\t\t\t\t\t\t<th>Contrato</th>
\t\t\t\t\t\t<th>Empresa</th>
\t\t\t\t\t\t<th>Programa</th>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<th>Precio</th>
\t\t\t\t\t\t<th>Participante</th>
\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t<th>Cancelada</th>
\t\t\t\t\t\t<th>Explicacion</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["facturas"] ?? $this->getContext($context, "facturas")));
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 32
            echo "\t\t\t\t\t\t<tr class=\"js-cancelada-danger\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_factura", array("id" => $this->getAttribute(            // line 35
$context["factura"], "id", array()))), "html", null, true);
            // line 36
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "usuario", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["factura"], "contrato", array()), "noDeOrden", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "empresa", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["factura"], "programa", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "descripcionDelGasto", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "precio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "participante", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["factura"], "fechaAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "isCancelada", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "explicacionPorCancelada", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_factura", array("id" => $this->getAttribute(            // line 53
$context["factura"], "id", array()))), "html", null, true);
            // line 54
            echo "\" class=\"pull-right btn-xs btn-link\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"pull-right btn-xs btn-link js-cancelar-factura\"
\t\t\t\t\t\t\t\tdata-url = \"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cancelada", array("id" => $this->getAttribute(            // line 61
$context["factura"], "id", array()))), "html", null, true);
            // line 62
            echo "\"
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-close\"></span>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_5828d0b2044768b73d59974114a0d243de31530e6c38ad75b74c56c38fb1343c->leave($__internal_5828d0b2044768b73d59974114a0d243de31530e6c38ad75b74c56c38fb1343c_prof);

        
        $__internal_b59cd5be843cb49f86961b41ee45e45892f73bd625a33edbed78752e05d889e6->leave($__internal_b59cd5be843cb49f86961b41ee45e45892f73bd625a33edbed78752e05d889e6_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b7492a1469bc48f62f8a861fc28e9a56ab95ff7f145b90d59bd516e3c2835c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7492a1469bc48f62f8a861fc28e9a56ab95ff7f145b90d59bd516e3c2835c5->enter($__internal_3b7492a1469bc48f62f8a861fc28e9a56ab95ff7f145b90d59bd516e3c2835c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b737d5c1fc54f91f9e31a618306e8e6ca7d4480766e0972570f2c6dc6d4d7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b737d5c1fc54f91f9e31a618306e8e6ca7d4480766e0972570f2c6dc6d4d7d6->enter($__internal_7b737d5c1fc54f91f9e31a618306e8e6ca7d4480766e0972570f2c6dc6d4d7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\t\$(document).ready(function () {
\t\t\tvar \$table = \$('.js-table');
\t\t\t\$table.find('.js-cancelar-factura').on('click',function (e) {
\t\t\t\te.preventDefault();

\t\t\t\tvar \$row = \$(this).closest('tr');

\t\t\t\t\$.ajax({
\t\t\t\t\turl: \$(this).data('url')
\t\t\t\t}).done(function () {
\t\t\t\t\t\$row.fadeOut();
                });
            });
        });
\t</script>
";
        
        $__internal_7b737d5c1fc54f91f9e31a618306e8e6ca7d4480766e0972570f2c6dc6d4d7d6->leave($__internal_7b737d5c1fc54f91f9e31a618306e8e6ca7d4480766e0972570f2c6dc6d4d7d6_prof);

        
        $__internal_3b7492a1469bc48f62f8a861fc28e9a56ab95ff7f145b90d59bd516e3c2835c5->leave($__internal_3b7492a1469bc48f62f8a861fc28e9a56ab95ff7f145b90d59bd516e3c2835c5_prof);

    }

    public function getTemplateName()
    {
        return ":factura:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 78,  188 => 77,  174 => 70,  161 => 62,  159 => 61,  158 => 60,  150 => 54,  148 => 53,  147 => 52,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  122 => 45,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  102 => 40,  96 => 37,  93 => 36,  91 => 35,  90 => 34,  86 => 32,  82 => 31,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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

\t\t\t\t<table class=\"table table-striped js-table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Usuario</th>
\t\t\t\t\t\t<th>Contrato</th>
\t\t\t\t\t\t<th>Empresa</th>
\t\t\t\t\t\t<th>Programa</th>
\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t<th>Precio</th>
\t\t\t\t\t\t<th>Participante</th>
\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t<th>Cancelada</th>
\t\t\t\t\t\t<th>Explicacion</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t{% for factura in facturas %}
\t\t\t\t\t\t<tr class=\"js-cancelada-danger\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('show_factura',{
\t\t\t\t\t\t\t\t\t'id' : factura.id
\t\t\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t\t\t{{ factura.id }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ factura.usuario}}</td>
\t\t\t\t\t\t\t<td>{{ factura.contrato.noDeOrden}}</td>
\t\t\t\t\t\t\t<td>{{ factura.empresa }}</td>
\t\t\t\t\t\t\t<td>{{ factura.programa |json_encode}}</td>
\t\t\t\t\t\t\t<td>{{ factura.descripcionDelGasto}}</td>
\t\t\t\t\t\t\t<td>{{ factura.cantidad }}</td>
\t\t\t\t\t\t\t<td>{{ factura.precio}}</td>
\t\t\t\t\t\t\t<td>{{ factura.participante}}</td>
\t\t\t\t\t\t\t<td>{{ factura.fechaAt |date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>{{ factura.isCancelada}}</td>
\t\t\t\t\t\t\t<td>{{ factura.explicacionPorCancelada}}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_factura',{
\t\t\t\t\t\t\t\t\t'id' : factura.id
\t\t\t\t\t\t\t\t}) }}\" class=\"pull-right btn-xs btn-link\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"pull-right btn-xs btn-link js-cancelar-factura\"
\t\t\t\t\t\t\t\tdata-url = \"{{ path('cancelada',{
\t\t\t\t\t\t\t\t\t'id' : factura.id
\t\t\t\t\t\t\t\t}) }}\"
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-close\"></span>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}


{% block javascripts %}
\t{{ parent() }}
\t<script>
\t\t\$(document).ready(function () {
\t\t\tvar \$table = \$('.js-table');
\t\t\t\$table.find('.js-cancelar-factura').on('click',function (e) {
\t\t\t\te.preventDefault();

\t\t\t\tvar \$row = \$(this).closest('tr');

\t\t\t\t\$.ajax({
\t\t\t\t\turl: \$(this).data('url')
\t\t\t\t}).done(function () {
\t\t\t\t\t\$row.fadeOut();
                });
            });
        });
\t</script>
{% endblock %}", ":factura:list.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/list.html.twig");
    }
}
