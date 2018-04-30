<?php

/* factura/show.html.twig */
class __TwigTemplate_fc89f660833e115198ad368b407d83856c3cc54fd15a9048fe5fb321b5be5113 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "factura/show.html.twig", 1);
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
        $__internal_5415f55734e118affaaf3debf9f321393a1754e1a042852332c2178c78765185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5415f55734e118affaaf3debf9f321393a1754e1a042852332c2178c78765185->enter($__internal_5415f55734e118affaaf3debf9f321393a1754e1a042852332c2178c78765185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/show.html.twig"));

        $__internal_bd1940e7b9fb5e344ae6217c8e319d7e8ed904755892676447f03a73cc748a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1940e7b9fb5e344ae6217c8e319d7e8ed904755892676447f03a73cc748a42->enter($__internal_bd1940e7b9fb5e344ae6217c8e319d7e8ed904755892676447f03a73cc748a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5415f55734e118affaaf3debf9f321393a1754e1a042852332c2178c78765185->leave($__internal_5415f55734e118affaaf3debf9f321393a1754e1a042852332c2178c78765185_prof);

        
        $__internal_bd1940e7b9fb5e344ae6217c8e319d7e8ed904755892676447f03a73cc748a42->leave($__internal_bd1940e7b9fb5e344ae6217c8e319d7e8ed904755892676447f03a73cc748a42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ed3c160e45714872956383a4428238b9581ea300bd48a61b01ef91b0249acea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed3c160e45714872956383a4428238b9581ea300bd48a61b01ef91b0249acea->enter($__internal_0ed3c160e45714872956383a4428238b9581ea300bd48a61b01ef91b0249acea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca720801f11b2f460e99e7028a88bca73fb05226bc7bdb8335b15b7b889b720e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca720801f11b2f460e99e7028a88bca73fb05226bc7bdb8335b15b7b889b720e->enter($__internal_ca720801f11b2f460e99e7028a88bca73fb05226bc7bdb8335b15b7b889b720e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h1>Factura:</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Importe en CUC</th>
\t\t\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "importeCuc", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Importe en CUP</th>
\t\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "importeCup", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Contato</th>
\t\t\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["factura"] ?? $this->getContext($context, "factura")), "contratos", array())), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_ca720801f11b2f460e99e7028a88bca73fb05226bc7bdb8335b15b7b889b720e->leave($__internal_ca720801f11b2f460e99e7028a88bca73fb05226bc7bdb8335b15b7b889b720e_prof);

        
        $__internal_0ed3c160e45714872956383a4428238b9581ea300bd48a61b01ef91b0249acea->leave($__internal_0ed3c160e45714872956383a4428238b9581ea300bd48a61b01ef91b0249acea_prof);

    }

    public function getTemplateName()
    {
        return "factura/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  67 => 17,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>Factura:</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Importe en CUC</th>
\t\t\t\t\t\t<td>{{ factura.importeCuc }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Importe en CUP</th>
\t\t\t\t\t\t<td>{{ factura.importeCup }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Contato</th>
\t\t\t\t\t\t<td>{{ factura.contratos|json_encode }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "factura/show.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/show.html.twig");
    }
}
