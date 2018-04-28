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
        $__internal_e2bcac7ecbb60b501681f8132f94fae389a773e986232461b3eb293336bd65be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2bcac7ecbb60b501681f8132f94fae389a773e986232461b3eb293336bd65be->enter($__internal_e2bcac7ecbb60b501681f8132f94fae389a773e986232461b3eb293336bd65be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_4b40c6046f957cbf0ed0dd443c146d3eac488f5d7cd20d4756b4e95656c94a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b40c6046f957cbf0ed0dd443c146d3eac488f5d7cd20d4756b4e95656c94a34->enter($__internal_4b40c6046f957cbf0ed0dd443c146d3eac488f5d7cd20d4756b4e95656c94a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2bcac7ecbb60b501681f8132f94fae389a773e986232461b3eb293336bd65be->leave($__internal_e2bcac7ecbb60b501681f8132f94fae389a773e986232461b3eb293336bd65be_prof);

        
        $__internal_4b40c6046f957cbf0ed0dd443c146d3eac488f5d7cd20d4756b4e95656c94a34->leave($__internal_4b40c6046f957cbf0ed0dd443c146d3eac488f5d7cd20d4756b4e95656c94a34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3d21f922cada954ca746b02852c9fac7d27488c4ab680eccb33b89768847cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d21f922cada954ca746b02852c9fac7d27488c4ab680eccb33b89768847cd6->enter($__internal_e3d21f922cada954ca746b02852c9fac7d27488c4ab680eccb33b89768847cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cfb9048b9d4da60036ca8dc4bed431081c0a5c2eabd8b04f8eac332401833dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb9048b9d4da60036ca8dc4bed431081c0a5c2eabd8b04f8eac332401833dc9->enter($__internal_cfb9048b9d4da60036ca8dc4bed431081c0a5c2eabd8b04f8eac332401833dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1 class=\"page-header text-center\">Bienvenido</h1>
";
        
        $__internal_cfb9048b9d4da60036ca8dc4bed431081c0a5c2eabd8b04f8eac332401833dc9->leave($__internal_cfb9048b9d4da60036ca8dc4bed431081c0a5c2eabd8b04f8eac332401833dc9_prof);

        
        $__internal_e3d21f922cada954ca746b02852c9fac7d27488c4ab680eccb33b89768847cd6->leave($__internal_e3d21f922cada954ca746b02852c9fac7d27488c4ab680eccb33b89768847cd6_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
\t<h1 class=\"page-header text-center\">Bienvenido</h1>
{% endblock %}", "main/homepage.html.twig", "/var/www/html/HeroQuest/app/Resources/views/main/homepage.html.twig");
    }
}
