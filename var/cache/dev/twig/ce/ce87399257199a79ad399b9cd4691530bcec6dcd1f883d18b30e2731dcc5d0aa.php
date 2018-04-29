<?php

/* :admin/user:list.html.twig */
class __TwigTemplate_5d36f86b3083e0e9b1ecbc8094365e0234f5fc4247f6bc8e491b4a739deb08ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/user:list.html.twig", 1);
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
        $__internal_efaddc868efa7477148c9518f75ef634977fc0be037daa677997ea2d6266e636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efaddc868efa7477148c9518f75ef634977fc0be037daa677997ea2d6266e636->enter($__internal_efaddc868efa7477148c9518f75ef634977fc0be037daa677997ea2d6266e636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:list.html.twig"));

        $__internal_54d27e52eb664f9f01b6f4b8a7c60dbe5d28db917f8f9c8c4d6aca6f49ff9cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d27e52eb664f9f01b6f4b8a7c60dbe5d28db917f8f9c8c4d6aca6f49ff9cbf->enter($__internal_54d27e52eb664f9f01b6f4b8a7c60dbe5d28db917f8f9c8c4d6aca6f49ff9cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efaddc868efa7477148c9518f75ef634977fc0be037daa677997ea2d6266e636->leave($__internal_efaddc868efa7477148c9518f75ef634977fc0be037daa677997ea2d6266e636_prof);

        
        $__internal_54d27e52eb664f9f01b6f4b8a7c60dbe5d28db917f8f9c8c4d6aca6f49ff9cbf->leave($__internal_54d27e52eb664f9f01b6f4b8a7c60dbe5d28db917f8f9c8c4d6aca6f49ff9cbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c27d9e76282947914eea92c88b58cb6b583ad24ceacec91d1817cf393c2229d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c27d9e76282947914eea92c88b58cb6b583ad24ceacec91d1817cf393c2229d->enter($__internal_2c27d9e76282947914eea92c88b58cb6b583ad24ceacec91d1817cf393c2229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_571945dbbfa11ba7ecb5b650cde02e2c522d3f23c598e85758d61c12ea1b63ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571945dbbfa11ba7ecb5b650cde02e2c522d3f23c598e85758d61c12ea1b63ba->enter($__internal_571945dbbfa11ba7ecb5b650cde02e2c522d3f23c598e85758d61c12ea1b63ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2>Listado de Usuarios</h2>
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Ocupacion</th>
\t\t\t\t<th>Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_user", array("id" => $this->getAttribute(            // line 18
$context["user"], "id", array()))), "html", null, true);
            // line 19
            echo "\">
\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["user"], "roles", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"pull-left btn btn-link\">
\t\t\t\t\t\t\t<span class=\"fa fa-trash js-delete-row\">Eliminar</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_571945dbbfa11ba7ecb5b650cde02e2c522d3f23c598e85758d61c12ea1b63ba->leave($__internal_571945dbbfa11ba7ecb5b650cde02e2c522d3f23c598e85758d61c12ea1b63ba_prof);

        
        $__internal_2c27d9e76282947914eea92c88b58cb6b583ad24ceacec91d1817cf393c2229d->leave($__internal_2c27d9e76282947914eea92c88b58cb6b583ad24ceacec91d1817cf393c2229d_prof);

    }

    public function getTemplateName()
    {
        return ":admin/user:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  81 => 23,  75 => 20,  72 => 19,  70 => 18,  69 => 17,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
\t<h2>Listado de Usuarios</h2>
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Ocupacion</th>
\t\t\t\t<th>Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for user in users  %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('show_user',{
\t\t\t\t\t\t\t'id' : user.id
\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t{{ user.name }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ user.roles|json_encode }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"pull-left btn btn-link\">
\t\t\t\t\t\t\t<span class=\"fa fa-trash js-delete-row\">Eliminar</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% endblock %}


", ":admin/user:list.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/list.html.twig");
    }
}
