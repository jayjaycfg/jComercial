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
        $__internal_69642764cf2285838376f8c973140646a1f831dad5b2a2c5a56d5de60eb87bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69642764cf2285838376f8c973140646a1f831dad5b2a2c5a56d5de60eb87bc3->enter($__internal_69642764cf2285838376f8c973140646a1f831dad5b2a2c5a56d5de60eb87bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $__internal_546827960bee4b6cba6746f5ebe4236666193e78c304ef9c581e924be3a1d577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546827960bee4b6cba6746f5ebe4236666193e78c304ef9c581e924be3a1d577->enter($__internal_546827960bee4b6cba6746f5ebe4236666193e78c304ef9c581e924be3a1d577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69642764cf2285838376f8c973140646a1f831dad5b2a2c5a56d5de60eb87bc3->leave($__internal_69642764cf2285838376f8c973140646a1f831dad5b2a2c5a56d5de60eb87bc3_prof);

        
        $__internal_546827960bee4b6cba6746f5ebe4236666193e78c304ef9c581e924be3a1d577->leave($__internal_546827960bee4b6cba6746f5ebe4236666193e78c304ef9c581e924be3a1d577_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94607ffd00b7a0e893c3129c8c05207fc0953ee51cbdb518f8fb8739dc436374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94607ffd00b7a0e893c3129c8c05207fc0953ee51cbdb518f8fb8739dc436374->enter($__internal_94607ffd00b7a0e893c3129c8c05207fc0953ee51cbdb518f8fb8739dc436374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6850f1fa0ff807a6438e177ab2b885a1fca409342fa8398d8c5f24230cb12d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6850f1fa0ff807a6438e177ab2b885a1fca409342fa8398d8c5f24230cb12d9->enter($__internal_b6850f1fa0ff807a6438e177ab2b885a1fca409342fa8398d8c5f24230cb12d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6850f1fa0ff807a6438e177ab2b885a1fca409342fa8398d8c5f24230cb12d9->leave($__internal_b6850f1fa0ff807a6438e177ab2b885a1fca409342fa8398d8c5f24230cb12d9_prof);

        
        $__internal_94607ffd00b7a0e893c3129c8c05207fc0953ee51cbdb518f8fb8739dc436374->leave($__internal_94607ffd00b7a0e893c3129c8c05207fc0953ee51cbdb518f8fb8739dc436374_prof);

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
