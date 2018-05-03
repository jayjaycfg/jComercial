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
        $__internal_2aeeb7f6725792c575697a22c268cade9f2f5af8177420c9e0e4bac4c41063a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aeeb7f6725792c575697a22c268cade9f2f5af8177420c9e0e4bac4c41063a4->enter($__internal_2aeeb7f6725792c575697a22c268cade9f2f5af8177420c9e0e4bac4c41063a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:show.html.twig"));

        $__internal_d9fb858305d67f660b20a715641f8092f9a0b5bc147905f9143f9e593a0cdb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fb858305d67f660b20a715641f8092f9a0b5bc147905f9143f9e593a0cdb11->enter($__internal_d9fb858305d67f660b20a715641f8092f9a0b5bc147905f9143f9e593a0cdb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aeeb7f6725792c575697a22c268cade9f2f5af8177420c9e0e4bac4c41063a4->leave($__internal_2aeeb7f6725792c575697a22c268cade9f2f5af8177420c9e0e4bac4c41063a4_prof);

        
        $__internal_d9fb858305d67f660b20a715641f8092f9a0b5bc147905f9143f9e593a0cdb11->leave($__internal_d9fb858305d67f660b20a715641f8092f9a0b5bc147905f9143f9e593a0cdb11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b7d18f4bd18cb230d08128e7630bfbd254c28ef116cb8ac1fb850e9ec4f9c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7d18f4bd18cb230d08128e7630bfbd254c28ef116cb8ac1fb850e9ec4f9c49->enter($__internal_2b7d18f4bd18cb230d08128e7630bfbd254c28ef116cb8ac1fb850e9ec4f9c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d83c0eeee5aeea04b35a70e452d21dd650dd4e0e7e0d4bb03d7c9a9fbf90fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d83c0eeee5aeea04b35a70e452d21dd650dd4e0e7e0d4bb03d7c9a9fbf90fd3->enter($__internal_8d83c0eeee5aeea04b35a70e452d21dd650dd4e0e7e0d4bb03d7c9a9fbf90fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "contrato", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Empresa</th>
\t\t\t\t\t\t<td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "empresa", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<h3>Empresa:</h3>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_8d83c0eeee5aeea04b35a70e452d21dd650dd4e0e7e0d4bb03d7c9a9fbf90fd3->leave($__internal_8d83c0eeee5aeea04b35a70e452d21dd650dd4e0e7e0d4bb03d7c9a9fbf90fd3_prof);

        
        $__internal_2b7d18f4bd18cb230d08128e7630bfbd254c28ef116cb8ac1fb850e9ec4f9c49->leave($__internal_2b7d18f4bd18cb230d08128e7630bfbd254c28ef116cb8ac1fb850e9ec4f9c49_prof);

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
        return array (  144 => 58,  137 => 54,  130 => 50,  126 => 48,  120 => 45,  112 => 39,  110 => 38,  105 => 36,  98 => 32,  91 => 28,  84 => 24,  77 => 20,  70 => 16,  63 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t\t<td>{{ factura.contrato }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Empresa</th>
\t\t\t\t\t\t<td>{{ factura.empresa }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<h3>Empresa:</h3>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":factura:show.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/show.html.twig");
    }
}
