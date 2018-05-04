<?php

/* :main:homepage.html.twig */
class __TwigTemplate_72e285f8b242a1582fa7b6f3a308bd7b59c4c886a7a423d4e9bc7d68636849c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":main:homepage.html.twig", 1);
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
        $__internal_78cdc0a67487a772ca49e7ec5aa5909ad1daabe9908e26d7a6d004768245ee9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cdc0a67487a772ca49e7ec5aa5909ad1daabe9908e26d7a6d004768245ee9c->enter($__internal_78cdc0a67487a772ca49e7ec5aa5909ad1daabe9908e26d7a6d004768245ee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $__internal_c1f2db1b1ff1676616e364cc88cf511dc968a7a2af7894cfae23a66da9444068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f2db1b1ff1676616e364cc88cf511dc968a7a2af7894cfae23a66da9444068->enter($__internal_c1f2db1b1ff1676616e364cc88cf511dc968a7a2af7894cfae23a66da9444068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78cdc0a67487a772ca49e7ec5aa5909ad1daabe9908e26d7a6d004768245ee9c->leave($__internal_78cdc0a67487a772ca49e7ec5aa5909ad1daabe9908e26d7a6d004768245ee9c_prof);

        
        $__internal_c1f2db1b1ff1676616e364cc88cf511dc968a7a2af7894cfae23a66da9444068->leave($__internal_c1f2db1b1ff1676616e364cc88cf511dc968a7a2af7894cfae23a66da9444068_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72ad3842d3ffaf654b1d6f43cbb510f5d0105bb162279e455791246982d5c87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ad3842d3ffaf654b1d6f43cbb510f5d0105bb162279e455791246982d5c87b->enter($__internal_72ad3842d3ffaf654b1d6f43cbb510f5d0105bb162279e455791246982d5c87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9128feaa1ac72c26dfd80e4b18416459bbfe47ec4ba088f24f4c87c48796586a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9128feaa1ac72c26dfd80e4b18416459bbfe47ec4ba088f24f4c87c48796586a->enter($__internal_9128feaa1ac72c26dfd80e4b18416459bbfe47ec4ba088f24f4c87c48796586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9128feaa1ac72c26dfd80e4b18416459bbfe47ec4ba088f24f4c87c48796586a->leave($__internal_9128feaa1ac72c26dfd80e4b18416459bbfe47ec4ba088f24f4c87c48796586a_prof);

        
        $__internal_72ad3842d3ffaf654b1d6f43cbb510f5d0105bb162279e455791246982d5c87b->leave($__internal_72ad3842d3ffaf654b1d6f43cbb510f5d0105bb162279e455791246982d5c87b_prof);

    }

    public function getTemplateName()
    {
        return ":main:homepage.html.twig";
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
{% endblock %}", ":main:homepage.html.twig", "/var/www/html/jComercial/app/Resources/views/main/homepage.html.twig");
    }
}
