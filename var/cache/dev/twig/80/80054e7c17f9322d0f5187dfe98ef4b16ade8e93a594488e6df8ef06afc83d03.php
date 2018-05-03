<?php

/* :empresa:edit.html.twig */
class __TwigTemplate_77d19c999d9d665b261bc56d859c5b4c360a73f1b48185036ac6fdb85d50850f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":empresa:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":cliente:FormLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_789cef766af03ad68647ed53bd52851564860adfb2a4952fc6ac21a6358d06cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789cef766af03ad68647ed53bd52851564860adfb2a4952fc6ac21a6358d06cf->enter($__internal_789cef766af03ad68647ed53bd52851564860adfb2a4952fc6ac21a6358d06cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:edit.html.twig"));

        $__internal_c5fafa487c95e76e5b601153a8277ffb9012aee48f8ab4525140ea17be49c98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fafa487c95e76e5b601153a8277ffb9012aee48f8ab4525140ea17be49c98d->enter($__internal_c5fafa487c95e76e5b601153a8277ffb9012aee48f8ab4525140ea17be49c98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789cef766af03ad68647ed53bd52851564860adfb2a4952fc6ac21a6358d06cf->leave($__internal_789cef766af03ad68647ed53bd52851564860adfb2a4952fc6ac21a6358d06cf_prof);

        
        $__internal_c5fafa487c95e76e5b601153a8277ffb9012aee48f8ab4525140ea17be49c98d->leave($__internal_c5fafa487c95e76e5b601153a8277ffb9012aee48f8ab4525140ea17be49c98d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84845bec854f1390913427a1eff2df1c31514d3e2bcb875172189020a8b8bbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84845bec854f1390913427a1eff2df1c31514d3e2bcb875172189020a8b8bbc5->enter($__internal_84845bec854f1390913427a1eff2df1c31514d3e2bcb875172189020a8b8bbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81ebffa8ad1c6bfe19d4a131db722fb28fb290a378f7a678c52216138292d42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ebffa8ad1c6bfe19d4a131db722fb28fb290a378f7a678c52216138292d42c->enter($__internal_81ebffa8ad1c6bfe19d4a131db722fb28fb290a378f7a678c52216138292d42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Empresa</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/empresa:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_81ebffa8ad1c6bfe19d4a131db722fb28fb290a378f7a678c52216138292d42c->leave($__internal_81ebffa8ad1c6bfe19d4a131db722fb28fb290a378f7a678c52216138292d42c_prof);

        
        $__internal_84845bec854f1390913427a1eff2df1c31514d3e2bcb875172189020a8b8bbc5->leave($__internal_84845bec854f1390913427a1eff2df1c31514d3e2bcb875172189020a8b8bbc5_prof);

    }

    public function getTemplateName()
    {
        return ":empresa:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ':cliente:FormLayout.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Empresa</h1>
\t\t\t\t{{ include(':/empresa:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":empresa:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/edit.html.twig");
    }
}
