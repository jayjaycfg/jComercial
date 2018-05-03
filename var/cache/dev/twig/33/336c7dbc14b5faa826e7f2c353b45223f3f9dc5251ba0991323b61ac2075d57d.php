<?php

/* empresa/show.html.twig */
class __TwigTemplate_46ee46177d553d5cc52e77bab1414b685795f0d1ac713d817bbc036f3627ca9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "empresa/show.html.twig", 1);
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
        $__internal_53cbf3028ff0236731b59fdaa4839e96d239e6428ce010d76f086fc315fec0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cbf3028ff0236731b59fdaa4839e96d239e6428ce010d76f086fc315fec0c4->enter($__internal_53cbf3028ff0236731b59fdaa4839e96d239e6428ce010d76f086fc315fec0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/show.html.twig"));

        $__internal_99c5481ef2e510d333ab04deb6425e29e3a90e11e891321ef0bd115b0a5ab304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c5481ef2e510d333ab04deb6425e29e3a90e11e891321ef0bd115b0a5ab304->enter($__internal_99c5481ef2e510d333ab04deb6425e29e3a90e11e891321ef0bd115b0a5ab304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53cbf3028ff0236731b59fdaa4839e96d239e6428ce010d76f086fc315fec0c4->leave($__internal_53cbf3028ff0236731b59fdaa4839e96d239e6428ce010d76f086fc315fec0c4_prof);

        
        $__internal_99c5481ef2e510d333ab04deb6425e29e3a90e11e891321ef0bd115b0a5ab304->leave($__internal_99c5481ef2e510d333ab04deb6425e29e3a90e11e891321ef0bd115b0a5ab304_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d04461e00671ff13b095640809730bfd53a10aef446986cf0226e104cf718ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04461e00671ff13b095640809730bfd53a10aef446986cf0226e104cf718ed2->enter($__internal_d04461e00671ff13b095640809730bfd53a10aef446986cf0226e104cf718ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0dc86a5bd6a0471e858de77d0e47ddcadb69d79da341bee6ad08a9a85914ea8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc86a5bd6a0471e858de77d0e47ddcadb69d79da341bee6ad08a9a85914ea8c->enter($__internal_0dc86a5bd6a0471e858de77d0e47ddcadb69d79da341bee6ad08a9a85914ea8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\t\t\t\t</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "nombre", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Domicilio Legal</th>
\t\t\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "domicilioLegal", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t";
        // line 26
        echo "\t\t\t\t";
        // line 27
        echo "\t\t\t\t";
        // line 28
        echo "\t\t\t\t\t";
        // line 29
        echo "\t\t\t\t\t\t";
        // line 30
        echo "\t\t\t\t\t\t\t";
        // line 31
        echo "\t\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t";
        // line 33
        echo "\t\t\t\t";
        // line 34
        echo "\t\t\t";
        // line 35
        echo "\t\t</div>
\t</div>
";
        
        $__internal_0dc86a5bd6a0471e858de77d0e47ddcadb69d79da341bee6ad08a9a85914ea8c->leave($__internal_0dc86a5bd6a0471e858de77d0e47ddcadb69d79da341bee6ad08a9a85914ea8c_prof);

        
        $__internal_d04461e00671ff13b095640809730bfd53a10aef446986cf0226e104cf718ed2->leave($__internal_d04461e00671ff13b095640809730bfd53a10aef446986cf0226e104cf718ed2_prof);

    }

    public function getTemplateName()
    {
        return "empresa/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  101 => 34,  99 => 33,  97 => 32,  95 => 31,  93 => 30,  91 => 29,  89 => 28,  87 => 27,  85 => 26,  77 => 20,  70 => 16,  63 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
", "empresa/show.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/show.html.twig");
    }
}
