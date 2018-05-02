<?php

/* cliente/list.html.twig */
class __TwigTemplate_8896d8e2a9a478acde286394a31fef8b379fc84cb414770106d523514e160b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/list.html.twig", 1);
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
        $__internal_4b5ef4e4e41d8414a0b315eff17f2afb9b6f9ebf8fc34efb8179852e3a225abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5ef4e4e41d8414a0b315eff17f2afb9b6f9ebf8fc34efb8179852e3a225abf->enter($__internal_4b5ef4e4e41d8414a0b315eff17f2afb9b6f9ebf8fc34efb8179852e3a225abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/list.html.twig"));

        $__internal_25ee754f02b131337ee403b861a4b9d8f9485d68dad90cd075bfad274ac7a520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ee754f02b131337ee403b861a4b9d8f9485d68dad90cd075bfad274ac7a520->enter($__internal_25ee754f02b131337ee403b861a4b9d8f9485d68dad90cd075bfad274ac7a520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b5ef4e4e41d8414a0b315eff17f2afb9b6f9ebf8fc34efb8179852e3a225abf->leave($__internal_4b5ef4e4e41d8414a0b315eff17f2afb9b6f9ebf8fc34efb8179852e3a225abf_prof);

        
        $__internal_25ee754f02b131337ee403b861a4b9d8f9485d68dad90cd075bfad274ac7a520->leave($__internal_25ee754f02b131337ee403b861a4b9d8f9485d68dad90cd075bfad274ac7a520_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7141005d741ebcd1a02668ad622f2f3635be7bc7981bdfac422f7df03bc66ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7141005d741ebcd1a02668ad622f2f3635be7bc7981bdfac422f7df03bc66ec->enter($__internal_a7141005d741ebcd1a02668ad622f2f3635be7bc7981bdfac422f7df03bc66ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_333a5bcc478ffa41177c19d74d78f4f2b9e0be2dab52d7f163a536a8aac207fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333a5bcc478ffa41177c19d74d78f4f2b9e0be2dab52d7f163a536a8aac207fc->enter($__internal_333a5bcc478ffa41177c19d74d78f4f2b9e0be2dab52d7f163a536a8aac207fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_333a5bcc478ffa41177c19d74d78f4f2b9e0be2dab52d7f163a536a8aac207fc->leave($__internal_333a5bcc478ffa41177c19d74d78f4f2b9e0be2dab52d7f163a536a8aac207fc_prof);

        
        $__internal_a7141005d741ebcd1a02668ad622f2f3635be7bc7981bdfac422f7df03bc66ec->leave($__internal_a7141005d741ebcd1a02668ad622f2f3635be7bc7981bdfac422f7df03bc66ec_prof);

    }

    public function getTemplateName()
    {
        return "cliente/list.html.twig";
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


", "cliente/list.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/list.html.twig");
    }
}
