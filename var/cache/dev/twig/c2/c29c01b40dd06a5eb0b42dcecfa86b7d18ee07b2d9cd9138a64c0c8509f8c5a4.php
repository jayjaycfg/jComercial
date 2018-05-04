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
        $__internal_8b9e2bb69d4cf900bf13dc96b988c95bf0e06fcd2d7959b048edfe04b50dced3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9e2bb69d4cf900bf13dc96b988c95bf0e06fcd2d7959b048edfe04b50dced3->enter($__internal_8b9e2bb69d4cf900bf13dc96b988c95bf0e06fcd2d7959b048edfe04b50dced3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $__internal_69d6177430d852a4060ccaa01b469e44ea3f48973ae8aaca2701c76857b81a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d6177430d852a4060ccaa01b469e44ea3f48973ae8aaca2701c76857b81a47->enter($__internal_69d6177430d852a4060ccaa01b469e44ea3f48973ae8aaca2701c76857b81a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b9e2bb69d4cf900bf13dc96b988c95bf0e06fcd2d7959b048edfe04b50dced3->leave($__internal_8b9e2bb69d4cf900bf13dc96b988c95bf0e06fcd2d7959b048edfe04b50dced3_prof);

        
        $__internal_69d6177430d852a4060ccaa01b469e44ea3f48973ae8aaca2701c76857b81a47->leave($__internal_69d6177430d852a4060ccaa01b469e44ea3f48973ae8aaca2701c76857b81a47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9489597372416cb2ce1439fbcd94c1e24f27fc49c594aeff16f382bc83a77f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9489597372416cb2ce1439fbcd94c1e24f27fc49c594aeff16f382bc83a77f2d->enter($__internal_9489597372416cb2ce1439fbcd94c1e24f27fc49c594aeff16f382bc83a77f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3919a7c092e18011bb6191b48395995ea048f37327ebf0ea6806f0e18a375c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3919a7c092e18011bb6191b48395995ea048f37327ebf0ea6806f0e18a375c9->enter($__internal_c3919a7c092e18011bb6191b48395995ea048f37327ebf0ea6806f0e18a375c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c3919a7c092e18011bb6191b48395995ea048f37327ebf0ea6806f0e18a375c9->leave($__internal_c3919a7c092e18011bb6191b48395995ea048f37327ebf0ea6806f0e18a375c9_prof);

        
        $__internal_9489597372416cb2ce1439fbcd94c1e24f27fc49c594aeff16f382bc83a77f2d->leave($__internal_9489597372416cb2ce1439fbcd94c1e24f27fc49c594aeff16f382bc83a77f2d_prof);

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
