<?php

/* :proveedor:list.html.twig */
class __TwigTemplate_9e104870322f27bcab0df86ee1cdc6859177fa01c088683f0cd44063b2810e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proveedor:list.html.twig", 1);
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
        $__internal_1b83ae7004c1af87db6b8d9ebadcdb31fcedbb6202db227eb99395b58922c372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b83ae7004c1af87db6b8d9ebadcdb31fcedbb6202db227eb99395b58922c372->enter($__internal_1b83ae7004c1af87db6b8d9ebadcdb31fcedbb6202db227eb99395b58922c372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:list.html.twig"));

        $__internal_d9e2c33c07b24fefbdeb890a18b5af784c448cf81c91d4b2547f0702308ac4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e2c33c07b24fefbdeb890a18b5af784c448cf81c91d4b2547f0702308ac4fc->enter($__internal_d9e2c33c07b24fefbdeb890a18b5af784c448cf81c91d4b2547f0702308ac4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b83ae7004c1af87db6b8d9ebadcdb31fcedbb6202db227eb99395b58922c372->leave($__internal_1b83ae7004c1af87db6b8d9ebadcdb31fcedbb6202db227eb99395b58922c372_prof);

        
        $__internal_d9e2c33c07b24fefbdeb890a18b5af784c448cf81c91d4b2547f0702308ac4fc->leave($__internal_d9e2c33c07b24fefbdeb890a18b5af784c448cf81c91d4b2547f0702308ac4fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f38270b378a29376d16ef68477b0833cdbb263ad2f4fa1dd4cd22c654fae2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f38270b378a29376d16ef68477b0833cdbb263ad2f4fa1dd4cd22c654fae2f2->enter($__internal_2f38270b378a29376d16ef68477b0833cdbb263ad2f4fa1dd4cd22c654fae2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7bf41da87dfa3b91c0ceff6d396d23ae233feae8ce84f2fc7a837d4617475869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf41da87dfa3b91c0ceff6d396d23ae233feae8ce84f2fc7a837d4617475869->enter($__internal_7bf41da87dfa3b91c0ceff6d396d23ae233feae8ce84f2fc7a837d4617475869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_proveedor");
        echo "\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Contratos con proveedores</h1>

\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<th>Cuenta Bancaria</th>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["proveedores"] ?? $this->getContext($context, "proveedores")));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_proveedor", array("id" => $this->getAttribute(            // line 26
$context["proveedor"], "id", array()))), "html", null, true);
            // line 27
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "contratNumber", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "numberAccount", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proveedor"], "startAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proveedor"], "endAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_proveedor", array("id" => $this->getAttribute(            // line 36
$context["proveedor"], "id", array()))), "html", null, true);
            // line 37
            echo "\" class=\"btn-xs btn-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_7bf41da87dfa3b91c0ceff6d396d23ae233feae8ce84f2fc7a837d4617475869->leave($__internal_7bf41da87dfa3b91c0ceff6d396d23ae233feae8ce84f2fc7a837d4617475869_prof);

        
        $__internal_2f38270b378a29376d16ef68477b0833cdbb263ad2f4fa1dd4cd22c654fae2f2->leave($__internal_2f38270b378a29376d16ef68477b0833cdbb263ad2f4fa1dd4cd22c654fae2f2_prof);

    }

    public function getTemplateName()
    {
        return ":proveedor:list.html.twig";
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
\t\t\t\t\t<a href=\"{{ path('new_proveedor') }}\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Contratos con proveedores</h1>

\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<th>Cuenta Bancaria</th>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t{% for proveedor in proveedores %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('show_proveedor',{
\t\t\t\t\t\t\t\t\t'id' : proveedor.id
\t\t\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t\t{{ proveedor.contratNumber}}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ proveedor.numberAccount }}</td>
\t\t\t\t\t\t\t<td>{{ proveedor.startAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>{{ proveedor.endAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('edit_proveedor',{
\t\t\t\t\t\t\t\t\t'id' : proveedor.id
\t\t\t\t\t\t\t\t}) }}\" class=\"btn-xs btn-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":proveedor:list.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/list.html.twig");
    }
}
