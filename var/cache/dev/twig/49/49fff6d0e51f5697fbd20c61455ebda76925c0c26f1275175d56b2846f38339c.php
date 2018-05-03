<?php

/* :cliente:list.html.twig */
class __TwigTemplate_ec5f4779d1edc7023e436b96e454855a2987129304edfe2a68c2bc613f9a2e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:list.html.twig", 1);
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
        $__internal_7c56842c636590266d58589ffb6f481cf7705ff5dc02afbd2da5be0dfb35fe8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c56842c636590266d58589ffb6f481cf7705ff5dc02afbd2da5be0dfb35fe8d->enter($__internal_7c56842c636590266d58589ffb6f481cf7705ff5dc02afbd2da5be0dfb35fe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:list.html.twig"));

        $__internal_f2dfdcb6c2250be6cc8518bdeb185be130587ef49b2e3c3507afcfca2c945fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dfdcb6c2250be6cc8518bdeb185be130587ef49b2e3c3507afcfca2c945fe8->enter($__internal_f2dfdcb6c2250be6cc8518bdeb185be130587ef49b2e3c3507afcfca2c945fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c56842c636590266d58589ffb6f481cf7705ff5dc02afbd2da5be0dfb35fe8d->leave($__internal_7c56842c636590266d58589ffb6f481cf7705ff5dc02afbd2da5be0dfb35fe8d_prof);

        
        $__internal_f2dfdcb6c2250be6cc8518bdeb185be130587ef49b2e3c3507afcfca2c945fe8->leave($__internal_f2dfdcb6c2250be6cc8518bdeb185be130587ef49b2e3c3507afcfca2c945fe8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be242cf65d9106ff64c627af1f4302830d9909db843deee4939983511a1f0474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be242cf65d9106ff64c627af1f4302830d9909db843deee4939983511a1f0474->enter($__internal_be242cf65d9106ff64c627af1f4302830d9909db843deee4939983511a1f0474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb2f29aacbe9692b09ec38c41b629a8f0dd7a7840243a6f2d6893318469eced3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2f29aacbe9692b09ec38c41b629a8f0dd7a7840243a6f2d6893318469eced3->enter($__internal_fb2f29aacbe9692b09ec38c41b629a8f0dd7a7840243a6f2d6893318469eced3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client");
        echo "\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Contratos con clientes</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>Consecutivo</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<th>&nbsp;</th>
                    </tr>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 23
            echo "                        <tr>
                            <td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_client", array("id" => $this->getAttribute(            // line 26
$context["client"], "id", array()))), "html", null, true);
            // line 27
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientNumber", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "startAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "endAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_client", array("id" => $this->getAttribute(            // line 36
$context["client"], "id", array()))), "html", null, true);
            // line 37
            echo "\" class=\"btn-xs btn-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_fb2f29aacbe9692b09ec38c41b629a8f0dd7a7840243a6f2d6893318469eced3->leave($__internal_fb2f29aacbe9692b09ec38c41b629a8f0dd7a7840243a6f2d6893318469eced3_prof);

        
        $__internal_be242cf65d9106ff64c627af1f4302830d9909db843deee4939983511a1f0474->leave($__internal_be242cf65d9106ff64c627af1f4302830d9909db843deee4939983511a1f0474_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:list.html.twig";
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
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"{{ path('new_client') }}\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Contratos con clientes</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>Consecutivo</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Vencimiento</th>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<th>&nbsp;</th>
                    </tr>
                    {% for client in clients %}
                        <tr>
                            <td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('show_client',{
\t\t\t\t\t\t\t\t\t'id' : client.id
\t\t\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t\t{{ client.clientNumber }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
                            <td>{{ client.startAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>{{ client.endAt|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>{{ client.description }}</td>
                            <td>
                                <a href=\"{{ path('edit_client',{
\t\t\t\t\t\t\t\t\t'id' : client.id
\t\t\t\t\t\t\t\t}) }}\" class=\"btn-xs btn-primary\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
{% endblock %}


", ":cliente:list.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/list.html.twig");
    }
}
