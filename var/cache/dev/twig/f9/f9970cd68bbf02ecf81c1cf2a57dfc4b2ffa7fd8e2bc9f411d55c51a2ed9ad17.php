<?php

/* :factura:new.html.twig */
class __TwigTemplate_bfad2b125762be9f1df5683a2f8e022a7ba502a784320db9a3e1fe3734d52056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":factura:new.html.twig", 1);
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
        $__internal_afdbcc37d4a6bbdce1b3ca6ca0b6cf3802bf14b005f2ae14df35992854663714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afdbcc37d4a6bbdce1b3ca6ca0b6cf3802bf14b005f2ae14df35992854663714->enter($__internal_afdbcc37d4a6bbdce1b3ca6ca0b6cf3802bf14b005f2ae14df35992854663714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:new.html.twig"));

        $__internal_f93d0b74730e148fcfafc3c2d79039b48ed43696c096c3aa50b3ac8d9c18b3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93d0b74730e148fcfafc3c2d79039b48ed43696c096c3aa50b3ac8d9c18b3e9->enter($__internal_f93d0b74730e148fcfafc3c2d79039b48ed43696c096c3aa50b3ac8d9c18b3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdbcc37d4a6bbdce1b3ca6ca0b6cf3802bf14b005f2ae14df35992854663714->leave($__internal_afdbcc37d4a6bbdce1b3ca6ca0b6cf3802bf14b005f2ae14df35992854663714_prof);

        
        $__internal_f93d0b74730e148fcfafc3c2d79039b48ed43696c096c3aa50b3ac8d9c18b3e9->leave($__internal_f93d0b74730e148fcfafc3c2d79039b48ed43696c096c3aa50b3ac8d9c18b3e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_730e5ae08eb1409df767917daba60d011d9b0bff570e766284eeb42dab1e630f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730e5ae08eb1409df767917daba60d011d9b0bff570e766284eeb42dab1e630f->enter($__internal_730e5ae08eb1409df767917daba60d011d9b0bff570e766284eeb42dab1e630f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2252e1140c867a1c9bdcf4e03977f9b2098d1b0ffd36ac9d95659939f5df2547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2252e1140c867a1c9bdcf4e03977f9b2098d1b0ffd36ac9d95659939f5df2547->enter($__internal_2252e1140c867a1c9bdcf4e03977f9b2098d1b0ffd36ac9d95659939f5df2547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nueva Factura</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/factura:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_2252e1140c867a1c9bdcf4e03977f9b2098d1b0ffd36ac9d95659939f5df2547->leave($__internal_2252e1140c867a1c9bdcf4e03977f9b2098d1b0ffd36ac9d95659939f5df2547_prof);

        
        $__internal_730e5ae08eb1409df767917daba60d011d9b0bff570e766284eeb42dab1e630f->leave($__internal_730e5ae08eb1409df767917daba60d011d9b0bff570e766284eeb42dab1e630f_prof);

    }

    public function getTemplateName()
    {
        return ":factura:new.html.twig";
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
\t\t\t\t<h1>Nueva Factura</h1>
\t\t\t\t{{ include(':/factura:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":factura:new.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/new.html.twig");
    }
}
