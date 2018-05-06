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
        $__internal_f1c7420cb93b9d77a3a8ac8d2d23dfd173f67c49f2994a359df0ed2474b87e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c7420cb93b9d77a3a8ac8d2d23dfd173f67c49f2994a359df0ed2474b87e24->enter($__internal_f1c7420cb93b9d77a3a8ac8d2d23dfd173f67c49f2994a359df0ed2474b87e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $__internal_16eda4b5eb441bfe5abadb9c2233d59a0cffa9da0bd54226387342d8928e9d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16eda4b5eb441bfe5abadb9c2233d59a0cffa9da0bd54226387342d8928e9d91->enter($__internal_16eda4b5eb441bfe5abadb9c2233d59a0cffa9da0bd54226387342d8928e9d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1c7420cb93b9d77a3a8ac8d2d23dfd173f67c49f2994a359df0ed2474b87e24->leave($__internal_f1c7420cb93b9d77a3a8ac8d2d23dfd173f67c49f2994a359df0ed2474b87e24_prof);

        
        $__internal_16eda4b5eb441bfe5abadb9c2233d59a0cffa9da0bd54226387342d8928e9d91->leave($__internal_16eda4b5eb441bfe5abadb9c2233d59a0cffa9da0bd54226387342d8928e9d91_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_036aca3b4d3afd35f961d203849e8e12f730acc2ef4e7bba75d7a2d7152df054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036aca3b4d3afd35f961d203849e8e12f730acc2ef4e7bba75d7a2d7152df054->enter($__internal_036aca3b4d3afd35f961d203849e8e12f730acc2ef4e7bba75d7a2d7152df054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fccc7f339501862a2013a6a93bee023af75fe1ef1b196dc050bf36f6e2b048f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccc7f339501862a2013a6a93bee023af75fe1ef1b196dc050bf36f6e2b048f6->enter($__internal_fccc7f339501862a2013a6a93bee023af75fe1ef1b196dc050bf36f6e2b048f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fccc7f339501862a2013a6a93bee023af75fe1ef1b196dc050bf36f6e2b048f6->leave($__internal_fccc7f339501862a2013a6a93bee023af75fe1ef1b196dc050bf36f6e2b048f6_prof);

        
        $__internal_036aca3b4d3afd35f961d203849e8e12f730acc2ef4e7bba75d7a2d7152df054->leave($__internal_036aca3b4d3afd35f961d203849e8e12f730acc2ef4e7bba75d7a2d7152df054_prof);

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
