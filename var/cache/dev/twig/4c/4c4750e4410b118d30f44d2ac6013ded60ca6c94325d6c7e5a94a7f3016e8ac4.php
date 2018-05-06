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
        $__internal_4af599fde985bccdd7ecb52fd562e771f875b7449116fbeea87d9ab7012c7645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af599fde985bccdd7ecb52fd562e771f875b7449116fbeea87d9ab7012c7645->enter($__internal_4af599fde985bccdd7ecb52fd562e771f875b7449116fbeea87d9ab7012c7645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:list.html.twig"));

        $__internal_1b74eeb38a8545846377289b5b84a712715c6eaccf2ccbb45ae089f5665f3f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b74eeb38a8545846377289b5b84a712715c6eaccf2ccbb45ae089f5665f3f72->enter($__internal_1b74eeb38a8545846377289b5b84a712715c6eaccf2ccbb45ae089f5665f3f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4af599fde985bccdd7ecb52fd562e771f875b7449116fbeea87d9ab7012c7645->leave($__internal_4af599fde985bccdd7ecb52fd562e771f875b7449116fbeea87d9ab7012c7645_prof);

        
        $__internal_1b74eeb38a8545846377289b5b84a712715c6eaccf2ccbb45ae089f5665f3f72->leave($__internal_1b74eeb38a8545846377289b5b84a712715c6eaccf2ccbb45ae089f5665f3f72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a70c44f3bfe1049b5d486a9e794341fc61788c3a5a6dabb79bd0f42707a8f47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70c44f3bfe1049b5d486a9e794341fc61788c3a5a6dabb79bd0f42707a8f47f->enter($__internal_a70c44f3bfe1049b5d486a9e794341fc61788c3a5a6dabb79bd0f42707a8f47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d86c7a77fa0c3f84e4b7c713d6d392eaa26ae2c7d16bdade4959202c961a97b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86c7a77fa0c3f84e4b7c713d6d392eaa26ae2c7d16bdade4959202c961a97b1->enter($__internal_d86c7a77fa0c3f84e4b7c713d6d392eaa26ae2c7d16bdade4959202c961a97b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t<th>Contratos</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["empresas"] ?? $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 24
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_empresa", array("id" => $this->getAttribute(            // line 27
$context["empresa"], "id", array()))), "html", null, true);
            // line 28
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "domicilioLegal", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["empresa"], "contratos", array())), "html", null, true);
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
        
        $__internal_d86c7a77fa0c3f84e4b7c713d6d392eaa26ae2c7d16bdade4959202c961a97b1->leave($__internal_d86c7a77fa0c3f84e4b7c713d6d392eaa26ae2c7d16bdade4959202c961a97b1_prof);

        
        $__internal_a70c44f3bfe1049b5d486a9e794341fc61788c3a5a6dabb79bd0f42707a8f47f->leave($__internal_a70c44f3bfe1049b5d486a9e794341fc61788c3a5a6dabb79bd0f42707a8f47f_prof);

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
        return array (  126 => 50,  109 => 38,  107 => 37,  106 => 36,  101 => 34,  97 => 33,  93 => 32,  87 => 29,  84 => 28,  82 => 27,  81 => 26,  77 => 24,  73 => 23,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t\t<th>Contratos</th>
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
\t\t\t\t\t\t\t<td>{{ empresa.contratos |length }}</td>
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
