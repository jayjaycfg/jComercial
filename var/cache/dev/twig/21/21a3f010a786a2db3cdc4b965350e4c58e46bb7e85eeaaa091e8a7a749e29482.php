<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2991b40acde02c9f697d42e2bbfe53307b8b3502e6d53358e8c82ddf59f19c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2991b40acde02c9f697d42e2bbfe53307b8b3502e6d53358e8c82ddf59f19c8->enter($__internal_f2991b40acde02c9f697d42e2bbfe53307b8b3502e6d53358e8c82ddf59f19c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_484713777ca9cf0bc6826536eb2d3a97d8e048a63f7a579e72f4d68bc9b7dd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484713777ca9cf0bc6826536eb2d3a97d8e048a63f7a579e72f4d68bc9b7dd11->enter($__internal_484713777ca9cf0bc6826536eb2d3a97d8e048a63f7a579e72f4d68bc9b7dd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2991b40acde02c9f697d42e2bbfe53307b8b3502e6d53358e8c82ddf59f19c8->leave($__internal_f2991b40acde02c9f697d42e2bbfe53307b8b3502e6d53358e8c82ddf59f19c8_prof);

        
        $__internal_484713777ca9cf0bc6826536eb2d3a97d8e048a63f7a579e72f4d68bc9b7dd11->leave($__internal_484713777ca9cf0bc6826536eb2d3a97d8e048a63f7a579e72f4d68bc9b7dd11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fe705dbd85c345c3976b796e8e6c72698d266990e74d514b9456745bebf485c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe705dbd85c345c3976b796e8e6c72698d266990e74d514b9456745bebf485c->enter($__internal_1fe705dbd85c345c3976b796e8e6c72698d266990e74d514b9456745bebf485c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36e9624599ce5b68b93602001921b05374de51b36d324cff023a58a5e58a7219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e9624599ce5b68b93602001921b05374de51b36d324cff023a58a5e58a7219->enter($__internal_36e9624599ce5b68b93602001921b05374de51b36d324cff023a58a5e58a7219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_36e9624599ce5b68b93602001921b05374de51b36d324cff023a58a5e58a7219->leave($__internal_36e9624599ce5b68b93602001921b05374de51b36d324cff023a58a5e58a7219_prof);

        
        $__internal_1fe705dbd85c345c3976b796e8e6c72698d266990e74d514b9456745bebf485c->leave($__internal_1fe705dbd85c345c3976b796e8e6c72698d266990e74d514b9456745bebf485c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc2d0a632c67946c89578c44cb21271685dd948a3d9a2a44ecc56ad4d1219b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2d0a632c67946c89578c44cb21271685dd948a3d9a2a44ecc56ad4d1219b7f->enter($__internal_fc2d0a632c67946c89578c44cb21271685dd948a3d9a2a44ecc56ad4d1219b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdba096cb9646f75c4e9de275d2213dc4a2192e10c9c0145b620a53bb21a172e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdba096cb9646f75c4e9de275d2213dc4a2192e10c9c0145b620a53bb21a172e->enter($__internal_cdba096cb9646f75c4e9de275d2213dc4a2192e10c9c0145b620a53bb21a172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_cdba096cb9646f75c4e9de275d2213dc4a2192e10c9c0145b620a53bb21a172e->leave($__internal_cdba096cb9646f75c4e9de275d2213dc4a2192e10c9c0145b620a53bb21a172e_prof);

        
        $__internal_fc2d0a632c67946c89578c44cb21271685dd948a3d9a2a44ecc56ad4d1219b7f->leave($__internal_fc2d0a632c67946c89578c44cb21271685dd948a3d9a2a44ecc56ad4d1219b7f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
