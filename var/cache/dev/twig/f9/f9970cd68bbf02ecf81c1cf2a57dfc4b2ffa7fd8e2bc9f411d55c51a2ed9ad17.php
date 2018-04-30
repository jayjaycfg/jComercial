<?php

/* factura/new.html.twig */
class __TwigTemplate_bfad2b125762be9f1df5683a2f8e022a7ba502a784320db9a3e1fe3734d52056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "factura/new.html.twig", 1);
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
        $__internal_12b3d98bd4980c0532b54521fb7a9f86a7b6c1361abc95d64a99e0aad11d63ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b3d98bd4980c0532b54521fb7a9f86a7b6c1361abc95d64a99e0aad11d63ff->enter($__internal_12b3d98bd4980c0532b54521fb7a9f86a7b6c1361abc95d64a99e0aad11d63ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/new.html.twig"));

        $__internal_f52c109dfaea0fbf294a9555e8a7022d578a5bf926047b3c4d1b1a23c49e7cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52c109dfaea0fbf294a9555e8a7022d578a5bf926047b3c4d1b1a23c49e7cef->enter($__internal_f52c109dfaea0fbf294a9555e8a7022d578a5bf926047b3c4d1b1a23c49e7cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b3d98bd4980c0532b54521fb7a9f86a7b6c1361abc95d64a99e0aad11d63ff->leave($__internal_12b3d98bd4980c0532b54521fb7a9f86a7b6c1361abc95d64a99e0aad11d63ff_prof);

        
        $__internal_f52c109dfaea0fbf294a9555e8a7022d578a5bf926047b3c4d1b1a23c49e7cef->leave($__internal_f52c109dfaea0fbf294a9555e8a7022d578a5bf926047b3c4d1b1a23c49e7cef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_168cf92cf1624e02473b473df3c195acc7781a231fe0ba127315bf4d87fb724f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168cf92cf1624e02473b473df3c195acc7781a231fe0ba127315bf4d87fb724f->enter($__internal_168cf92cf1624e02473b473df3c195acc7781a231fe0ba127315bf4d87fb724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1930346d30718d1e4d25bc881a30c946ab61108909327d211b29e578a57ba3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1930346d30718d1e4d25bc881a30c946ab61108909327d211b29e578a57ba3f->enter($__internal_e1930346d30718d1e4d25bc881a30c946ab61108909327d211b29e578a57ba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1930346d30718d1e4d25bc881a30c946ab61108909327d211b29e578a57ba3f->leave($__internal_e1930346d30718d1e4d25bc881a30c946ab61108909327d211b29e578a57ba3f_prof);

        
        $__internal_168cf92cf1624e02473b473df3c195acc7781a231fe0ba127315bf4d87fb724f->leave($__internal_168cf92cf1624e02473b473df3c195acc7781a231fe0ba127315bf4d87fb724f_prof);

    }

    public function getTemplateName()
    {
        return "factura/new.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
", "factura/new.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/new.html.twig");
    }
}
