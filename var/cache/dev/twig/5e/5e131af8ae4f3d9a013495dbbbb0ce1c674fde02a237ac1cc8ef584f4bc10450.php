<?php

/* proveedor/new.html.twig */
class __TwigTemplate_25a3a0572fc6f2d72c4557f7de4722721a0aa2a4d6b23e8b3a957b207dc221a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", "proveedor/new.html.twig", 1);
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
        $__internal_52c173794c617f2da0338b4fd084047218c973459599c4e380b012de209ec2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c173794c617f2da0338b4fd084047218c973459599c4e380b012de209ec2a4->enter($__internal_52c173794c617f2da0338b4fd084047218c973459599c4e380b012de209ec2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/new.html.twig"));

        $__internal_79fa140a987dd2a21522dc21c7999f20282547f9b80479d8bb41e5b5501b3aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fa140a987dd2a21522dc21c7999f20282547f9b80479d8bb41e5b5501b3aa7->enter($__internal_79fa140a987dd2a21522dc21c7999f20282547f9b80479d8bb41e5b5501b3aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52c173794c617f2da0338b4fd084047218c973459599c4e380b012de209ec2a4->leave($__internal_52c173794c617f2da0338b4fd084047218c973459599c4e380b012de209ec2a4_prof);

        
        $__internal_79fa140a987dd2a21522dc21c7999f20282547f9b80479d8bb41e5b5501b3aa7->leave($__internal_79fa140a987dd2a21522dc21c7999f20282547f9b80479d8bb41e5b5501b3aa7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7380cc79e98146209174cc477d3f6c3a496ca7ea619b5091c5f827b0f4de5c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7380cc79e98146209174cc477d3f6c3a496ca7ea619b5091c5f827b0f4de5c2f->enter($__internal_7380cc79e98146209174cc477d3f6c3a496ca7ea619b5091c5f827b0f4de5c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e5ea9c3246d62f6ff36356be1958bb5afba6db544a9df2d4557cce2c471ee2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5ea9c3246d62f6ff36356be1958bb5afba6db544a9df2d4557cce2c471ee2b->enter($__internal_5e5ea9c3246d62f6ff36356be1958bb5afba6db544a9df2d4557cce2c471ee2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con proveedor</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/proveedor:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_5e5ea9c3246d62f6ff36356be1958bb5afba6db544a9df2d4557cce2c471ee2b->leave($__internal_5e5ea9c3246d62f6ff36356be1958bb5afba6db544a9df2d4557cce2c471ee2b_prof);

        
        $__internal_7380cc79e98146209174cc477d3f6c3a496ca7ea619b5091c5f827b0f4de5c2f->leave($__internal_7380cc79e98146209174cc477d3f6c3a496ca7ea619b5091c5f827b0f4de5c2f_prof);

    }

    public function getTemplateName()
    {
        return "proveedor/new.html.twig";
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
\t\t\t\t<h1>Nuevo Contrato con proveedor</h1>
\t\t\t\t{{ include(':/proveedor:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "proveedor/new.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/new.html.twig");
    }
}
