<?php

/* factura/list.html.twig */
class __TwigTemplate_9efb8eca6a29fb7e789ad61aaba96f12c6c3e871f9ebfa80e3df6491d15b9e08 extends Twig_Template
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
        $__internal_2258d22096a6cc52ff6b5987a98e2696f6e092ab7697986ee805260e6dd3d19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2258d22096a6cc52ff6b5987a98e2696f6e092ab7697986ee805260e6dd3d19f->enter($__internal_2258d22096a6cc52ff6b5987a98e2696f6e092ab7697986ee805260e6dd3d19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/list.html.twig"));

        $__internal_d0f87104b96024055145f0a2214d73509efb61741156614bb059db50fbda0248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f87104b96024055145f0a2214d73509efb61741156614bb059db50fbda0248->enter($__internal_d0f87104b96024055145f0a2214d73509efb61741156614bb059db50fbda0248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2258d22096a6cc52ff6b5987a98e2696f6e092ab7697986ee805260e6dd3d19f->leave($__internal_2258d22096a6cc52ff6b5987a98e2696f6e092ab7697986ee805260e6dd3d19f_prof);

        
        $__internal_d0f87104b96024055145f0a2214d73509efb61741156614bb059db50fbda0248->leave($__internal_d0f87104b96024055145f0a2214d73509efb61741156614bb059db50fbda0248_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84ed56fcdd8cfb80cb864a0b9511cc03ef538e709ed5e75c50c84cad30cd8ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ed56fcdd8cfb80cb864a0b9511cc03ef538e709ed5e75c50c84cad30cd8ebf->enter($__internal_84ed56fcdd8cfb80cb864a0b9511cc03ef538e709ed5e75c50c84cad30cd8ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e81cf01d1035918972249d7a4849d8faca34183a60fc46b140c35885d7d6eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e81cf01d1035918972249d7a4849d8faca34183a60fc46b140c35885d7d6eda->enter($__internal_9e81cf01d1035918972249d7a4849d8faca34183a60fc46b140c35885d7d6eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\" class=\"btn btn-xs btn-success\">
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
        
        $__internal_9e81cf01d1035918972249d7a4849d8faca34183a60fc46b140c35885d7d6eda->leave($__internal_9e81cf01d1035918972249d7a4849d8faca34183a60fc46b140c35885d7d6eda_prof);

        
        $__internal_84ed56fcdd8cfb80cb864a0b9511cc03ef538e709ed5e75c50c84cad30cd8ebf->leave($__internal_84ed56fcdd8cfb80cb864a0b9511cc03ef538e709ed5e75c50c84cad30cd8ebf_prof);

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
\t\t\t\t\t\t\t\t}) }}\" class=\"btn btn-xs btn-success\">
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
