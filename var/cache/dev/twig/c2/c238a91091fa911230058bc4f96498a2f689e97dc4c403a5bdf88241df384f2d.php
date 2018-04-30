<?php

/* proveedor/show.html.twig */
class __TwigTemplate_96b824216990f85e8bbf72a94cfe08383922c25b5920431ffb16d3f160571bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "proveedor/show.html.twig", 1);
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
        $__internal_d88f9574e7127b26ef13148ee39811d56a2e9bf0eb2fb0abc7f7c4581325497d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88f9574e7127b26ef13148ee39811d56a2e9bf0eb2fb0abc7f7c4581325497d->enter($__internal_d88f9574e7127b26ef13148ee39811d56a2e9bf0eb2fb0abc7f7c4581325497d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/show.html.twig"));

        $__internal_7030ce0581bec33944cb1a91b7a56ee87b91fc9d25f8b69c67d2204a626c9baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7030ce0581bec33944cb1a91b7a56ee87b91fc9d25f8b69c67d2204a626c9baf->enter($__internal_7030ce0581bec33944cb1a91b7a56ee87b91fc9d25f8b69c67d2204a626c9baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d88f9574e7127b26ef13148ee39811d56a2e9bf0eb2fb0abc7f7c4581325497d->leave($__internal_d88f9574e7127b26ef13148ee39811d56a2e9bf0eb2fb0abc7f7c4581325497d_prof);

        
        $__internal_7030ce0581bec33944cb1a91b7a56ee87b91fc9d25f8b69c67d2204a626c9baf->leave($__internal_7030ce0581bec33944cb1a91b7a56ee87b91fc9d25f8b69c67d2204a626c9baf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc6538c70d2a11d7dd5b1bc8034702a9a9fca0abca98fb59fb4b90666d96651b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6538c70d2a11d7dd5b1bc8034702a9a9fca0abca98fb59fb4b90666d96651b->enter($__internal_cc6538c70d2a11d7dd5b1bc8034702a9a9fca0abca98fb59fb4b90666d96651b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_472834d01c54a698ab99fdb29abaa4ee196428d7171c042143b92313f9d4b703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472834d01c54a698ab99fdb29abaa4ee196428d7171c042143b92313f9d4b703->enter($__internal_472834d01c54a698ab99fdb29abaa4ee196428d7171c042143b92313f9d4b703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h1>
\t\t\t\t\tContrato con Proveedor:
\t\t\t\t</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proveedor"] ?? $this->getContext($context, "proveedor")), "contratNumber", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cuenta Bancaria</th>
\t\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proveedor"] ?? $this->getContext($context, "proveedor")), "numberAccount", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["proveedor"] ?? $this->getContext($context, "proveedor")), "startAt", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["proveedor"] ?? $this->getContext($context, "proveedor")), "endAt", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_472834d01c54a698ab99fdb29abaa4ee196428d7171c042143b92313f9d4b703->leave($__internal_472834d01c54a698ab99fdb29abaa4ee196428d7171c042143b92313f9d4b703_prof);

        
        $__internal_cc6538c70d2a11d7dd5b1bc8034702a9a9fca0abca98fb59fb4b90666d96651b->leave($__internal_cc6538c70d2a11d7dd5b1bc8034702a9a9fca0abca98fb59fb4b90666d96651b_prof);

    }

    public function getTemplateName()
    {
        return "proveedor/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  76 => 23,  69 => 19,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>
\t\t\t\t\tContrato con Proveedor:
\t\t\t\t</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<td>{{ proveedor.contratNumber }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cuenta Bancaria</th>
\t\t\t\t\t\t<td>{{ proveedor.numberAccount }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<td>{{ proveedor.startAt|date('Y-m-d') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>{{ proveedor.endAt|date('Y-m-d') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "proveedor/show.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/show.html.twig");
    }
}
