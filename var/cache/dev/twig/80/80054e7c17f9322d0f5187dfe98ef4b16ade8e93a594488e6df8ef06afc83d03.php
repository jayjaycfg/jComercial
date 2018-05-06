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
        $__internal_4fa66136d999029737abf5a0c31307198153806732411f00123a352e0a77dfa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa66136d999029737abf5a0c31307198153806732411f00123a352e0a77dfa0->enter($__internal_4fa66136d999029737abf5a0c31307198153806732411f00123a352e0a77dfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:edit.html.twig"));

        $__internal_3b4f15e9befa39391a3d6a61dcab33e78b20e7a042fe168a4badd5ba564fac23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4f15e9befa39391a3d6a61dcab33e78b20e7a042fe168a4badd5ba564fac23->enter($__internal_3b4f15e9befa39391a3d6a61dcab33e78b20e7a042fe168a4badd5ba564fac23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fa66136d999029737abf5a0c31307198153806732411f00123a352e0a77dfa0->leave($__internal_4fa66136d999029737abf5a0c31307198153806732411f00123a352e0a77dfa0_prof);

        
        $__internal_3b4f15e9befa39391a3d6a61dcab33e78b20e7a042fe168a4badd5ba564fac23->leave($__internal_3b4f15e9befa39391a3d6a61dcab33e78b20e7a042fe168a4badd5ba564fac23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e63039666754c02a6e23d7700b01f53f9340f81d9025ac10a3b91b0363d8840f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63039666754c02a6e23d7700b01f53f9340f81d9025ac10a3b91b0363d8840f->enter($__internal_e63039666754c02a6e23d7700b01f53f9340f81d9025ac10a3b91b0363d8840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0855864b5f9d7142c664ba07bd628d6bb5d626db367d0e0dc9bef9cc134e38a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0855864b5f9d7142c664ba07bd628d6bb5d626db367d0e0dc9bef9cc134e38a8->enter($__internal_0855864b5f9d7142c664ba07bd628d6bb5d626db367d0e0dc9bef9cc134e38a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>
\t\t\t\t\tEditar Empresa
\t\t\t\t</h1>

\t\t\t\t";
        // line 11
        echo twig_include($this->env, $context, ":/empresa:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_0855864b5f9d7142c664ba07bd628d6bb5d626db367d0e0dc9bef9cc134e38a8->leave($__internal_0855864b5f9d7142c664ba07bd628d6bb5d626db367d0e0dc9bef9cc134e38a8_prof);

        
        $__internal_e63039666754c02a6e23d7700b01f53f9340f81d9025ac10a3b91b0363d8840f->leave($__internal_e63039666754c02a6e23d7700b01f53f9340f81d9025ac10a3b91b0363d8840f_prof);

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
        return array (  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>
\t\t\t\t\tEditar Empresa
\t\t\t\t</h1>

\t\t\t\t{{ include(':/empresa:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":empresa:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/edit.html.twig");
    }
}
