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
        $__internal_0d5d20c527e64fc8a8644250accd22b08ab519ea1d8421a94cd5591addf78667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5d20c527e64fc8a8644250accd22b08ab519ea1d8421a94cd5591addf78667->enter($__internal_0d5d20c527e64fc8a8644250accd22b08ab519ea1d8421a94cd5591addf78667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_61e73f83f25dfc6bc7c3f298be4209c20aca5c1c741b67911ceb6b1eae60350a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e73f83f25dfc6bc7c3f298be4209c20aca5c1c741b67911ceb6b1eae60350a->enter($__internal_61e73f83f25dfc6bc7c3f298be4209c20aca5c1c741b67911ceb6b1eae60350a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d5d20c527e64fc8a8644250accd22b08ab519ea1d8421a94cd5591addf78667->leave($__internal_0d5d20c527e64fc8a8644250accd22b08ab519ea1d8421a94cd5591addf78667_prof);

        
        $__internal_61e73f83f25dfc6bc7c3f298be4209c20aca5c1c741b67911ceb6b1eae60350a->leave($__internal_61e73f83f25dfc6bc7c3f298be4209c20aca5c1c741b67911ceb6b1eae60350a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be9ab9f1277ecb2b17e565fab1bca5decf3e6a2051439f878820ac3db1451a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9ab9f1277ecb2b17e565fab1bca5decf3e6a2051439f878820ac3db1451a74->enter($__internal_be9ab9f1277ecb2b17e565fab1bca5decf3e6a2051439f878820ac3db1451a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfd1043b2d41792df81cab73541c1627635aa51dfaa2e882464f5ec6ca2cb02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd1043b2d41792df81cab73541c1627635aa51dfaa2e882464f5ec6ca2cb02d->enter($__internal_cfd1043b2d41792df81cab73541c1627635aa51dfaa2e882464f5ec6ca2cb02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cfd1043b2d41792df81cab73541c1627635aa51dfaa2e882464f5ec6ca2cb02d->leave($__internal_cfd1043b2d41792df81cab73541c1627635aa51dfaa2e882464f5ec6ca2cb02d_prof);

        
        $__internal_be9ab9f1277ecb2b17e565fab1bca5decf3e6a2051439f878820ac3db1451a74->leave($__internal_be9ab9f1277ecb2b17e565fab1bca5decf3e6a2051439f878820ac3db1451a74_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_10f911e66b03b86f7f2276b550d851d32b607d662f87ed8f9a43003a6ddb351e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f911e66b03b86f7f2276b550d851d32b607d662f87ed8f9a43003a6ddb351e->enter($__internal_10f911e66b03b86f7f2276b550d851d32b607d662f87ed8f9a43003a6ddb351e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73b88f45a6b4a57d128331caf130ac8e7d3f2a8eec048ab79cbea2b15cb94568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b88f45a6b4a57d128331caf130ac8e7d3f2a8eec048ab79cbea2b15cb94568->enter($__internal_73b88f45a6b4a57d128331caf130ac8e7d3f2a8eec048ab79cbea2b15cb94568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_73b88f45a6b4a57d128331caf130ac8e7d3f2a8eec048ab79cbea2b15cb94568->leave($__internal_73b88f45a6b4a57d128331caf130ac8e7d3f2a8eec048ab79cbea2b15cb94568_prof);

        
        $__internal_10f911e66b03b86f7f2276b550d851d32b607d662f87ed8f9a43003a6ddb351e->leave($__internal_10f911e66b03b86f7f2276b550d851d32b607d662f87ed8f9a43003a6ddb351e_prof);

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
