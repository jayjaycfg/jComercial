<?php

/* main/homepage.html.twig */
class __TwigTemplate_72e285f8b242a1582fa7b6f3a308bd7b59c4c886a7a423d4e9bc7d68636849c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
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
        $__internal_ee5a39922bb9d3d13ddf70ddae64d26bd186131928d8fa8899d6a1d94b92048f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5a39922bb9d3d13ddf70ddae64d26bd186131928d8fa8899d6a1d94b92048f->enter($__internal_ee5a39922bb9d3d13ddf70ddae64d26bd186131928d8fa8899d6a1d94b92048f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_7bf573959774b1f92ec5aadf45f95e7012636fe5312a196a4394b09d11c4f2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf573959774b1f92ec5aadf45f95e7012636fe5312a196a4394b09d11c4f2c5->enter($__internal_7bf573959774b1f92ec5aadf45f95e7012636fe5312a196a4394b09d11c4f2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee5a39922bb9d3d13ddf70ddae64d26bd186131928d8fa8899d6a1d94b92048f->leave($__internal_ee5a39922bb9d3d13ddf70ddae64d26bd186131928d8fa8899d6a1d94b92048f_prof);

        
        $__internal_7bf573959774b1f92ec5aadf45f95e7012636fe5312a196a4394b09d11c4f2c5->leave($__internal_7bf573959774b1f92ec5aadf45f95e7012636fe5312a196a4394b09d11c4f2c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d51b5292f2cad9f04b17aeefa08427b4270babc0ca949e51e31e13be8a9757d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51b5292f2cad9f04b17aeefa08427b4270babc0ca949e51e31e13be8a9757d4->enter($__internal_d51b5292f2cad9f04b17aeefa08427b4270babc0ca949e51e31e13be8a9757d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_485dd499c92a80e85c5a5773f24bae04d14541e7564d0e2882b80d756f89660e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485dd499c92a80e85c5a5773f24bae04d14541e7564d0e2882b80d756f89660e->enter($__internal_485dd499c92a80e85c5a5773f24bae04d14541e7564d0e2882b80d756f89660e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h1 class=\"page-header text-center\">
\t\tBienvenido
\t\t";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array())) : (" ")), "html", null, true);
        echo "
\t\ta jComercial</h1>
";
        
        $__internal_485dd499c92a80e85c5a5773f24bae04d14541e7564d0e2882b80d756f89660e->leave($__internal_485dd499c92a80e85c5a5773f24bae04d14541e7564d0e2882b80d756f89660e_prof);

        
        $__internal_d51b5292f2cad9f04b17aeefa08427b4270babc0ca949e51e31e13be8a9757d4->leave($__internal_d51b5292f2cad9f04b17aeefa08427b4270babc0ca949e51e31e13be8a9757d4_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

\t<h1 class=\"page-header text-center\">
\t\tBienvenido
\t\t{{ app.user ? app.user.name : ' ' }}
\t\ta jComercial</h1>
{% endblock %}", "main/homepage.html.twig", "/var/www/html/jComercial/app/Resources/views/main/homepage.html.twig");
    }
}
