<?php

/* cliente/list.html.twig */
class __TwigTemplate_ec5f4779d1edc7023e436b96e454855a2987129304edfe2a68c2bc613f9a2e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/list.html.twig", 1);
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
        $__internal_a3c0a26cb0a32827e0806205859e8b516cf35d1801a8ee84882862f3ed22e2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c0a26cb0a32827e0806205859e8b516cf35d1801a8ee84882862f3ed22e2c9->enter($__internal_a3c0a26cb0a32827e0806205859e8b516cf35d1801a8ee84882862f3ed22e2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/list.html.twig"));

        $__internal_c129baa1b35a5c999aaa8411797bd95c495f91218868c643bee3fe4a0c57fc72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c129baa1b35a5c999aaa8411797bd95c495f91218868c643bee3fe4a0c57fc72->enter($__internal_c129baa1b35a5c999aaa8411797bd95c495f91218868c643bee3fe4a0c57fc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3c0a26cb0a32827e0806205859e8b516cf35d1801a8ee84882862f3ed22e2c9->leave($__internal_a3c0a26cb0a32827e0806205859e8b516cf35d1801a8ee84882862f3ed22e2c9_prof);

        
        $__internal_c129baa1b35a5c999aaa8411797bd95c495f91218868c643bee3fe4a0c57fc72->leave($__internal_c129baa1b35a5c999aaa8411797bd95c495f91218868c643bee3fe4a0c57fc72_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_860965baeba09918579ac1b183a9cc20970a94cb7586f0fb3a6379eefc7d7db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860965baeba09918579ac1b183a9cc20970a94cb7586f0fb3a6379eefc7d7db7->enter($__internal_860965baeba09918579ac1b183a9cc20970a94cb7586f0fb3a6379eefc7d7db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_142b6382665a2fe724b1ebd9e983df8f4a1edee12fda2153d800c8fd2f149f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142b6382665a2fe724b1ebd9e983df8f4a1edee12fda2153d800c8fd2f149f23->enter($__internal_142b6382665a2fe724b1ebd9e983df8f4a1edee12fda2153d800c8fd2f149f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client");
        echo "\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Contratos con clientes</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>Consecutivo</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<th>&nbsp;</th>
                    </tr>
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 98
            echo "                        <tr>
                            <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientNumber", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "startAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "endAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_client", array("id" => $this->getAttribute(            // line 105
$context["client"], "id", array()))), "html", null, true);
            // line 106
            echo "\" class=\"btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_142b6382665a2fe724b1ebd9e983df8f4a1edee12fda2153d800c8fd2f149f23->leave($__internal_142b6382665a2fe724b1ebd9e983df8f4a1edee12fda2153d800c8fd2f149f23_prof);

        
        $__internal_860965baeba09918579ac1b183a9cc20970a94cb7586f0fb3a6379eefc7d7db7->leave($__internal_860965baeba09918579ac1b183a9cc20970a94cb7586f0fb3a6379eefc7d7db7_prof);

    }

    public function getTemplateName()
    {
        return "cliente/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 112,  99 => 106,  97 => 105,  96 => 104,  91 => 102,  87 => 101,  83 => 100,  79 => 99,  76 => 98,  72 => 97,  56 => 84,  49 => 79,  40 => 78,  11 => 1,);
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

{#{% block body %}#}
\t{#<h2>Listado de Contratos</h2>#}
\t{#<a href=\"{{ path('new_client') }}\">#}
\t\t{#<span class=\"btn btn-link fa fa-plus-circle\"></span>#}
\t{#</a>#}

\t{#<table class=\"table table-striped js-user-table\">#}
\t\t{#<thead>#}
\t\t{#<tr>#}
\t\t\t{#<th>Consecutivo</th>#}
\t\t\t{#<th>Fecha de Inicio</th>#}
\t\t\t{#<th>Fecha de Vencimiento</th>#}
\t\t\t{##}
\t\t\t{#No necesito un campo de factura pues el contrato es el optional side de la relacion#}
\t\t\t{#En el owning side debo tener un campo cliente como llave foranea#}
\t\t\t{##}
\t\t\t{#<th>Factura(No la necesito, MY BAD)</th>#}
\t\t\t{#<th>Descripcion</th>#}
\t\t\t{#<th>Acciones</th>#}
\t\t{#</tr>#}
\t\t{#</thead>#}
\t\t{#<tbody>#}
\t\t{#{% for client in clients  %}#}
\t\t\t{#<tr>#}
\t\t\t\t{#<td>{{ client.clientNumber }}</td>#}
\t\t\t\t{#<td>{{ client.startAt |date('Y-m-d') }}</td>#}
\t\t\t\t{#<td>{{ client.endAt |date('Y-m-d') }}</td>#}
\t\t\t\t{#<td>MY BAD</td>#}
\t\t\t\t{#<td>{{ client.description }}</td>#}
\t\t\t\t{#<td>#}
\t\t\t\t\t{#<a href=\"{{ path('edit_client',{#}
\t\t\t\t\t\t{#'id' : client.id#}
\t\t\t\t\t{#}) }}\"#}
\t\t\t\t\t   {#class=\"pull-right btn btn-link\">#}
\t\t\t\t\t\t{#<span class=\"fa fa-pencil\"></span>#}
\t\t\t\t\t{#</a>#}
\t\t\t\t{#</td>#}
\t\t\t{#</tr>#}
\t\t{#{% endfor %}#}
\t\t{#</tbody>#}
\t{#</table>#}
{#{% endblock %}#}

{#{% block javascripts %}#}
\t{#{{ parent() }}#}
\t{#<script>#}
        {#\$(document).ready(function(){#}

            {#var \$table = \$('.js-user-table');#}

            {#\$table.find('.js-delete-user').on('click',function(e){#}
                {#e.preventDefault();#}

                {#\$(this).addClass('text-danger');#}
                {#\$(this).find('.fa')#}
                    {#.removeClass('fa-trash')#}
                    {#.addClass('fa-spinner')#}
                    {#.addClass('fa-spin');#}

                {#var \$row = \$(this).closest('tr');#}

                {#\$.ajax({#}
                    {#url: \$(this).data('url'),#}
                    {#method: 'DELETE'#}

                {#}).done(function () {#}
                    {#\$row.fadeOut();#}
                {#});#}
            {#});#}
        {#});#}
\t{#</script>#}
{#{% endblock %}#}



{% block body %}
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"{{ path('new_client') }}\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Contratos con clientes</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>Consecutivo</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<th>&nbsp;</th>
                    </tr>
                    {% for client in clients %}
                        <tr>
                            <td>{{ client.clientNumber }}</td>
                            <td>{{ client.startAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>{{ client.endAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>{{ client.description }}</td>
                            <td>
                                <a href=\"{{ path('edit_client',{
\t\t\t\t\t\t\t\t\t'id' : client.id
\t\t\t\t\t\t\t\t}) }}\" class=\"btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
{% endblock %}


", "cliente/list.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/list.html.twig");
    }
}
