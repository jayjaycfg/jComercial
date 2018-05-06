<?php

/* :cliente:edit.html.twig */
class __TwigTemplate_eeceea01a57c752620ce95509c7c03850d8c40470a661383f0024396e4609cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":cliente:edit.html.twig", 1);
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
        $__internal_f41b78b5cf3deedaaf839a205dd9d6c35faca962e302276e3e101d36513b56f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41b78b5cf3deedaaf839a205dd9d6c35faca962e302276e3e101d36513b56f0->enter($__internal_f41b78b5cf3deedaaf839a205dd9d6c35faca962e302276e3e101d36513b56f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $__internal_b8a269479efa34d797663603224c2b755172c1035447f7de07d25781ca34f17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a269479efa34d797663603224c2b755172c1035447f7de07d25781ca34f17b->enter($__internal_b8a269479efa34d797663603224c2b755172c1035447f7de07d25781ca34f17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f41b78b5cf3deedaaf839a205dd9d6c35faca962e302276e3e101d36513b56f0->leave($__internal_f41b78b5cf3deedaaf839a205dd9d6c35faca962e302276e3e101d36513b56f0_prof);

        
        $__internal_b8a269479efa34d797663603224c2b755172c1035447f7de07d25781ca34f17b->leave($__internal_b8a269479efa34d797663603224c2b755172c1035447f7de07d25781ca34f17b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8625428cdc3027b27ffa03183efbebd1763418d43875d01501ce852b936d7af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8625428cdc3027b27ffa03183efbebd1763418d43875d01501ce852b936d7af5->enter($__internal_8625428cdc3027b27ffa03183efbebd1763418d43875d01501ce852b936d7af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08348bca6b1cbf14d3575a813e71ba3a0e6bb883bba78d3b062ac62fca681e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08348bca6b1cbf14d3575a813e71ba3a0e6bb883bba78d3b062ac62fca681e7f->enter($__internal_08348bca6b1cbf14d3575a813e71ba3a0e6bb883bba78d3b062ac62fca681e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con cliente</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/cliente:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_08348bca6b1cbf14d3575a813e71ba3a0e6bb883bba78d3b062ac62fca681e7f->leave($__internal_08348bca6b1cbf14d3575a813e71ba3a0e6bb883bba78d3b062ac62fca681e7f_prof);

        
        $__internal_8625428cdc3027b27ffa03183efbebd1763418d43875d01501ce852b936d7af5->leave($__internal_8625428cdc3027b27ffa03183efbebd1763418d43875d01501ce852b936d7af5_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:edit.html.twig";
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
\t\t\t\t<h1>Nuevo Contrato con cliente</h1>
\t\t\t\t{{ include(':/cliente:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", ":cliente:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/edit.html.twig");
    }
}
