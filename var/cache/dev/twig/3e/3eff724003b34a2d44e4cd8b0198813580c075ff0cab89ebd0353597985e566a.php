<?php

/* :cliente:FormLayout.html.twig */
class __TwigTemplate_f877551f2c49a625e74cfcb57922cdec5bdc82b1642f9dc0f70aa4a52211f960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:FormLayout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b16e15b13bba497ded10ebb928218dc2c4d262bc841c7dd958cf41b530afe69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b16e15b13bba497ded10ebb928218dc2c4d262bc841c7dd958cf41b530afe69->enter($__internal_8b16e15b13bba497ded10ebb928218dc2c4d262bc841c7dd958cf41b530afe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $__internal_dad4658a2927ecd72736cecd233dc0bc935ef731e206b0381f6058e87411ac64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad4658a2927ecd72736cecd233dc0bc935ef731e206b0381f6058e87411ac64->enter($__internal_dad4658a2927ecd72736cecd233dc0bc935ef731e206b0381f6058e87411ac64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b16e15b13bba497ded10ebb928218dc2c4d262bc841c7dd958cf41b530afe69->leave($__internal_8b16e15b13bba497ded10ebb928218dc2c4d262bc841c7dd958cf41b530afe69_prof);

        
        $__internal_dad4658a2927ecd72736cecd233dc0bc935ef731e206b0381f6058e87411ac64->leave($__internal_dad4658a2927ecd72736cecd233dc0bc935ef731e206b0381f6058e87411ac64_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bfa8c45eea2f9f3b475ed82ed614747dfd22683fec7e9c39c11aaef787109c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfa8c45eea2f9f3b475ed82ed614747dfd22683fec7e9c39c11aaef787109c5->enter($__internal_3bfa8c45eea2f9f3b475ed82ed614747dfd22683fec7e9c39c11aaef787109c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_10d203b869d9683809c21671976b43e4a37a413f18463a2f653580178cf91f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d203b869d9683809c21671976b43e4a37a413f18463a2f653580178cf91f8f->enter($__internal_10d203b869d9683809c21671976b43e4a37a413f18463a2f653580178cf91f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
";
        
        $__internal_10d203b869d9683809c21671976b43e4a37a413f18463a2f653580178cf91f8f->leave($__internal_10d203b869d9683809c21671976b43e4a37a413f18463a2f653580178cf91f8f_prof);

        
        $__internal_3bfa8c45eea2f9f3b475ed82ed614747dfd22683fec7e9c39c11aaef787109c5->leave($__internal_3bfa8c45eea2f9f3b475ed82ed614747dfd22683fec7e9c39c11aaef787109c5_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9245b091e02cb4328775f0f6e197df05c567cbc3c026d9a1988cce1b8e9e654c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9245b091e02cb4328775f0f6e197df05c567cbc3c026d9a1988cce1b8e9e654c->enter($__internal_9245b091e02cb4328775f0f6e197df05c567cbc3c026d9a1988cce1b8e9e654c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_df9016ddc0c58aab6e99a03cdc9b50aea6cc290f7fdab651ab983e4f358837ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9016ddc0c58aab6e99a03cdc9b50aea6cc290f7fdab651ab983e4f358837ce->enter($__internal_df9016ddc0c58aab6e99a03cdc9b50aea6cc290f7fdab651ab983e4f358837ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
        \$(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        })
\t</script>
";
        
        $__internal_df9016ddc0c58aab6e99a03cdc9b50aea6cc290f7fdab651ab983e4f358837ce->leave($__internal_df9016ddc0c58aab6e99a03cdc9b50aea6cc290f7fdab651ab983e4f358837ce_prof);

        
        $__internal_9245b091e02cb4328775f0f6e197df05c567cbc3c026d9a1988cce1b8e9e654c->leave($__internal_9245b091e02cb4328775f0f6e197df05c567cbc3c026d9a1988cce1b8e9e654c_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:FormLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 10,  76 => 9,  67 => 8,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datepicker.css') }}\">
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t<script src=\"{{ asset('js/bootstrap-datepicker.min.js') }}\"></script>
\t<script>
        \$(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        })
\t</script>
{% endblock %}", ":cliente:FormLayout.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/FormLayout.html.twig");
    }
}
