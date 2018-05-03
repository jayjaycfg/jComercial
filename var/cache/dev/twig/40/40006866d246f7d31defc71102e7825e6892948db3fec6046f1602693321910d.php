<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_19dfb68d851ddd05e5bd3f446c5cecc8ca30befd0bb86cee9a5c57f648f371d7 extends Twig_Template
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
        $__internal_ff9c0f6fddba0b082302592f5caaa8a6ac330a630a7200b7c48503340f94e50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9c0f6fddba0b082302592f5caaa8a6ac330a630a7200b7c48503340f94e50e->enter($__internal_ff9c0f6fddba0b082302592f5caaa8a6ac330a630a7200b7c48503340f94e50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_cbdc25b1f9083c32388c4a28c4d4c5eac6816e0d3271371b471c885739cb7c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdc25b1f9083c32388c4a28c4d4c5eac6816e0d3271371b471c885739cb7c4d->enter($__internal_cbdc25b1f9083c32388c4a28c4d4c5eac6816e0d3271371b471c885739cb7c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff9c0f6fddba0b082302592f5caaa8a6ac330a630a7200b7c48503340f94e50e->leave($__internal_ff9c0f6fddba0b082302592f5caaa8a6ac330a630a7200b7c48503340f94e50e_prof);

        
        $__internal_cbdc25b1f9083c32388c4a28c4d4c5eac6816e0d3271371b471c885739cb7c4d->leave($__internal_cbdc25b1f9083c32388c4a28c4d4c5eac6816e0d3271371b471c885739cb7c4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a9f519dab9771bf95da506a3316d5d010ef5036e972148bcd98f048e98c2540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9f519dab9771bf95da506a3316d5d010ef5036e972148bcd98f048e98c2540->enter($__internal_6a9f519dab9771bf95da506a3316d5d010ef5036e972148bcd98f048e98c2540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfef9a81da232560b9c8cdcc75a7a7fb1fecb1d2a188d2d22a8519c2ae6529c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfef9a81da232560b9c8cdcc75a7a7fb1fecb1d2a188d2d22a8519c2ae6529c1->enter($__internal_cfef9a81da232560b9c8cdcc75a7a7fb1fecb1d2a188d2d22a8519c2ae6529c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cfef9a81da232560b9c8cdcc75a7a7fb1fecb1d2a188d2d22a8519c2ae6529c1->leave($__internal_cfef9a81da232560b9c8cdcc75a7a7fb1fecb1d2a188d2d22a8519c2ae6529c1_prof);

        
        $__internal_6a9f519dab9771bf95da506a3316d5d010ef5036e972148bcd98f048e98c2540->leave($__internal_6a9f519dab9771bf95da506a3316d5d010ef5036e972148bcd98f048e98c2540_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d2ffc7508576b43c1610c0101224811d0213ad02a0396837d1dc6d6f46df295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2ffc7508576b43c1610c0101224811d0213ad02a0396837d1dc6d6f46df295->enter($__internal_6d2ffc7508576b43c1610c0101224811d0213ad02a0396837d1dc6d6f46df295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f67208866133b10708f1a084c32ad5a7b2b731cdd00d03b65990d95af3c69a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67208866133b10708f1a084c32ad5a7b2b731cdd00d03b65990d95af3c69a8d->enter($__internal_f67208866133b10708f1a084c32ad5a7b2b731cdd00d03b65990d95af3c69a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f67208866133b10708f1a084c32ad5a7b2b731cdd00d03b65990d95af3c69a8d->leave($__internal_f67208866133b10708f1a084c32ad5a7b2b731cdd00d03b65990d95af3c69a8d_prof);

        
        $__internal_6d2ffc7508576b43c1610c0101224811d0213ad02a0396837d1dc6d6f46df295->leave($__internal_6d2ffc7508576b43c1610c0101224811d0213ad02a0396837d1dc6d6f46df295_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
