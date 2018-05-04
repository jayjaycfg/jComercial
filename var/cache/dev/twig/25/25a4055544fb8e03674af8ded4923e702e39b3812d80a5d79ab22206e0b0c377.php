<?php

/* :cliente:show.html.twig */
class __TwigTemplate_acac0a119b058dcadbcb241054edcf9c1c29e73345cc13b7dc73ac148a3a87dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:show.html.twig", 1);
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
        $__internal_0731f9bc54bd70f2f7b2924e9af937466f265c9a029cf0d6d72cb3df49e5643d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0731f9bc54bd70f2f7b2924e9af937466f265c9a029cf0d6d72cb3df49e5643d->enter($__internal_0731f9bc54bd70f2f7b2924e9af937466f265c9a029cf0d6d72cb3df49e5643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $__internal_e69ef7f772add7cf73c27693634465bb02acd89efba5e86eddf6b6b088dbb363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69ef7f772add7cf73c27693634465bb02acd89efba5e86eddf6b6b088dbb363->enter($__internal_e69ef7f772add7cf73c27693634465bb02acd89efba5e86eddf6b6b088dbb363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0731f9bc54bd70f2f7b2924e9af937466f265c9a029cf0d6d72cb3df49e5643d->leave($__internal_0731f9bc54bd70f2f7b2924e9af937466f265c9a029cf0d6d72cb3df49e5643d_prof);

        
        $__internal_e69ef7f772add7cf73c27693634465bb02acd89efba5e86eddf6b6b088dbb363->leave($__internal_e69ef7f772add7cf73c27693634465bb02acd89efba5e86eddf6b6b088dbb363_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa5f7d4bd59de1fe7743fcb8248d4d54e4b0c0c3fc0b830170139a29f8ca6c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5f7d4bd59de1fe7743fcb8248d4d54e4b0c0c3fc0b830170139a29f8ca6c75->enter($__internal_fa5f7d4bd59de1fe7743fcb8248d4d54e4b0c0c3fc0b830170139a29f8ca6c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c2c3a714298f22db33409d0a3832366220ad370693437bd5f28421634005a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2c3a714298f22db33409d0a3832366220ad370693437bd5f28421634005a5a->enter($__internal_8c2c3a714298f22db33409d0a3832366220ad370693437bd5f28421634005a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<h1>Contrato con cliente:</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "clientNumber", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "startAt", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "endAt", array()), "Y-m-d"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "description", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_8c2c3a714298f22db33409d0a3832366220ad370693437bd5f28421634005a5a->leave($__internal_8c2c3a714298f22db33409d0a3832366220ad370693437bd5f28421634005a5a_prof);

        
        $__internal_fa5f7d4bd59de1fe7743fcb8248d4d54e4b0c0c3fc0b830170139a29f8ca6c75->leave($__internal_fa5f7d4bd59de1fe7743fcb8248d4d54e4b0c0c3fc0b830170139a29f8ca6c75_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  74 => 21,  67 => 17,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>Contrato con cliente:</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Consecutivo</th>
\t\t\t\t\t\t<td>{{ cliente.clientNumber }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Inicio</th>
\t\t\t\t\t\t<td>{{ cliente.startAt|date('Y-m-d') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<td>{{ cliente.endAt|date('Y-m-d') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<td>{{ cliente.description }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":cliente:show.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/show.html.twig");
    }
}
