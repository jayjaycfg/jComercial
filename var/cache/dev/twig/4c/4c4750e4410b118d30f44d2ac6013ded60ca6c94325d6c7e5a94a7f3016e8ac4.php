<?php

/* :empresa:list.html.twig */
class __TwigTemplate_3a0921638b3261e60c15008516733aceaa09003f06946bf66b65899b449bd529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":empresa:list.html.twig", 1);
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
        $__internal_18339f969ae5ad4d7294a386eb9a3a9f5d240540f364df78405784c20f41fef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18339f969ae5ad4d7294a386eb9a3a9f5d240540f364df78405784c20f41fef9->enter($__internal_18339f969ae5ad4d7294a386eb9a3a9f5d240540f364df78405784c20f41fef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:list.html.twig"));

        $__internal_8a0d9a621f77e7524cdac02c6ff56ec088a823236591c459cf5119bbd8766c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0d9a621f77e7524cdac02c6ff56ec088a823236591c459cf5119bbd8766c00->enter($__internal_8a0d9a621f77e7524cdac02c6ff56ec088a823236591c459cf5119bbd8766c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18339f969ae5ad4d7294a386eb9a3a9f5d240540f364df78405784c20f41fef9->leave($__internal_18339f969ae5ad4d7294a386eb9a3a9f5d240540f364df78405784c20f41fef9_prof);

        
        $__internal_8a0d9a621f77e7524cdac02c6ff56ec088a823236591c459cf5119bbd8766c00->leave($__internal_8a0d9a621f77e7524cdac02c6ff56ec088a823236591c459cf5119bbd8766c00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3af2c812707fb40fbad4dabcc583e633b000b9ada159e7172c6943ec603354a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af2c812707fb40fbad4dabcc583e633b000b9ada159e7172c6943ec603354a5->enter($__internal_3af2c812707fb40fbad4dabcc583e633b000b9ada159e7172c6943ec603354a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_baad49fa7112ecc9a22dacab20169c5e842c4901677e34926e2a9fc6d02d669a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baad49fa7112ecc9a22dacab20169c5e842c4901677e34926e2a9fc6d02d669a->enter($__internal_baad49fa7112ecc9a22dacab20169c5e842c4901677e34926e2a9fc6d02d669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_empresa");
        echo "\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Empresas</h1>

\t\t\t\t<table class=\"table table-striped js-table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Domicilio Legal</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["empresas"] ?? $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_empresa", array("id" => $this->getAttribute(            // line 26
$context["empresa"], "id", array()))), "html", null, true);
            // line 27
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "domicilioLegal", array()), "html", null, true);
            echo "</td>


\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_empresa", array("id" => $this->getAttribute(            // line 37
$context["empresa"], "id", array()))), "html", null, true);
            // line 38
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_baad49fa7112ecc9a22dacab20169c5e842c4901677e34926e2a9fc6d02d669a->leave($__internal_baad49fa7112ecc9a22dacab20169c5e842c4901677e34926e2a9fc6d02d669a_prof);

        
        $__internal_3af2c812707fb40fbad4dabcc583e633b000b9ada159e7172c6943ec603354a5->leave($__internal_3af2c812707fb40fbad4dabcc583e633b000b9ada159e7172c6943ec603354a5_prof);

    }

    public function getTemplateName()
    {
        return ":empresa:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 50,  106 => 38,  104 => 37,  103 => 36,  96 => 32,  92 => 31,  86 => 28,  83 => 27,  81 => 26,  80 => 25,  76 => 23,  72 => 22,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t<a href=\"{{ path('crear_empresa') }}\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
\t\t\t\t</div>

\t\t\t\t<h1>Empresas</h1>

\t\t\t\t<table class=\"table table-striped js-table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Domicilio Legal</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t{% for empresa in empresas %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('mostrar_empresa',{
\t\t\t\t\t\t\t\t\t'id' : empresa.id
\t\t\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t\t\t{{ empresa.id }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ empresa.nombre}}</td>
\t\t\t\t\t\t\t<td>{{ empresa.domicilioLegal}}</td>


\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('modificar_empresa',{
\t\t\t\t\t\t\t\t\t'id' : empresa.id
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
{% endblock %}", ":empresa:list.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/list.html.twig");
    }
}
