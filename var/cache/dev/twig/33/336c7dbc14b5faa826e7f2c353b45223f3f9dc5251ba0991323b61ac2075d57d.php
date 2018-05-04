<?php

/* :empresa:show.html.twig */
class __TwigTemplate_46ee46177d553d5cc52e77bab1414b685795f0d1ac713d817bbc036f3627ca9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":empresa:show.html.twig", 1);
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
        $__internal_0c85a479e401134a2b69fccbd4ccdf3bbcdfd99ff3baf9d835313cf19d607d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c85a479e401134a2b69fccbd4ccdf3bbcdfd99ff3baf9d835313cf19d607d85->enter($__internal_0c85a479e401134a2b69fccbd4ccdf3bbcdfd99ff3baf9d835313cf19d607d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:show.html.twig"));

        $__internal_d60fa85a2bfdeffec37e03c7ffe925d9168e49ffca67e357d6f5455b64c099c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60fa85a2bfdeffec37e03c7ffe925d9168e49ffca67e357d6f5455b64c099c8->enter($__internal_d60fa85a2bfdeffec37e03c7ffe925d9168e49ffca67e357d6f5455b64c099c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c85a479e401134a2b69fccbd4ccdf3bbcdfd99ff3baf9d835313cf19d607d85->leave($__internal_0c85a479e401134a2b69fccbd4ccdf3bbcdfd99ff3baf9d835313cf19d607d85_prof);

        
        $__internal_d60fa85a2bfdeffec37e03c7ffe925d9168e49ffca67e357d6f5455b64c099c8->leave($__internal_d60fa85a2bfdeffec37e03c7ffe925d9168e49ffca67e357d6f5455b64c099c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e000b8a8a4863741e6a9d9eb31d1407f63855edd2efe76af71f44b9b5444de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e000b8a8a4863741e6a9d9eb31d1407f63855edd2efe76af71f44b9b5444de3->enter($__internal_6e000b8a8a4863741e6a9d9eb31d1407f63855edd2efe76af71f44b9b5444de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53f6fdbff1e54e30fed09e3eb03213ad6e2675d757b969d0dfe530cb9243bd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f6fdbff1e54e30fed09e3eb03213ad6e2675d757b969d0dfe530cb9243bd94->enter($__internal_53f6fdbff1e54e30fed09e3eb03213ad6e2675d757b969d0dfe530cb9243bd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h1>Empresa:
\t\t\t\t\t";
        // line 8
        if (($context["empresa"] ?? $this->getContext($context, "empresa"))) {
            // line 9
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "id", array()), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 11
        echo "

\t\t\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_empresa", array("id" => $this->getAttribute(        // line 14
($context["empresa"] ?? $this->getContext($context, "empresa")), "id", array()))), "html", null, true);
        // line 15
        echo "\" class=\"pull-right btn btn-link\">
\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t</a>
\t\t\t\t</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "nombre", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Domicilio Legal</th>
\t\t\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "domicilioLegal", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Contratos</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "contratos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contrato"]) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_contrato", array("id" => $this->getAttribute(            // line 36
$context["contrato"], "id", array()))), "html", null, true);
            // line 37
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["contrato"], "noDeOrden", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t";
        // line 49
        echo "\t\t\t\t";
        // line 50
        echo "\t\t\t\t";
        // line 51
        echo "\t\t\t\t\t";
        // line 52
        echo "\t\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t\t\t";
        // line 54
        echo "\t\t\t\t\t\t";
        // line 55
        echo "\t\t\t\t\t";
        // line 56
        echo "\t\t\t\t";
        // line 57
        echo "\t\t\t";
        // line 58
        echo "\t\t</div>
\t</div>
";
        
        $__internal_53f6fdbff1e54e30fed09e3eb03213ad6e2675d757b969d0dfe530cb9243bd94->leave($__internal_53f6fdbff1e54e30fed09e3eb03213ad6e2675d757b969d0dfe530cb9243bd94_prof);

        
        $__internal_6e000b8a8a4863741e6a9d9eb31d1407f63855edd2efe76af71f44b9b5444de3->leave($__internal_6e000b8a8a4863741e6a9d9eb31d1407f63855edd2efe76af71f44b9b5444de3_prof);

    }

    public function getTemplateName()
    {
        return ":empresa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 58,  143 => 57,  141 => 56,  139 => 55,  137 => 54,  135 => 53,  133 => 52,  131 => 51,  129 => 50,  127 => 49,  119 => 42,  109 => 38,  106 => 37,  104 => 36,  103 => 35,  100 => 34,  96 => 33,  87 => 27,  80 => 23,  70 => 15,  68 => 14,  67 => 13,  63 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>Empresa:
\t\t\t\t\t{% if empresa %}
\t\t\t\t\t\t{{ empresa.id }}
\t\t\t\t\t{% endif %}


\t\t\t\t\t<a href=\"{{ path('modificar_empresa', {
\t\t\t\t\t\tid: empresa.id
\t\t\t\t\t}) }}\" class=\"pull-right btn btn-link\">
\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t</a>
\t\t\t\t</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<td>{{ empresa.nombre }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Domicilio Legal</th>
\t\t\t\t\t\t<td>{{ empresa.domicilioLegal }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Contratos</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t{% for contrato in empresa.contratos %}
\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('mostrar_contrato',{
\t\t\t\t\t\t\t\t\t\t'id' : contrato.id
\t\t\t\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t\t\t{{ contrato.noDeOrden }}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t{#<div class=\"col-xs-4\">#}
\t\t\t\t{#<h3>Empresa:</h3>#}
\t\t\t\t{#<ul class=\"list-group\">#}
\t\t\t\t\t{#{% for empresa in contrato.empresas %}#}
\t\t\t\t\t\t{#<li class=\"list-group-item\">#}
\t\t\t\t\t\t\t{#{{ empresa.nombre }}#}
\t\t\t\t\t\t{#</li>#}
\t\t\t\t\t{#{% endfor %}#}
\t\t\t\t{#</ul>#}
\t\t\t{#</div>#}
\t\t</div>
\t</div>
{% endblock %}
", ":empresa:show.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/show.html.twig");
    }
}
