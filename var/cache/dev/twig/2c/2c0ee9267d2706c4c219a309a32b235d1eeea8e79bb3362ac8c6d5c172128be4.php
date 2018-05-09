<?php

/* main/homepage.html.twig */
class __TwigTemplate_033a7de068af2318b248c80deb758c4856cb45aef3933d3a59749087bee87f30 extends Twig_Template
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
        $__internal_a419785daea8577ff05c6a87230bb588fdc6802bd62c4d8d372359df2b1fd98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a419785daea8577ff05c6a87230bb588fdc6802bd62c4d8d372359df2b1fd98e->enter($__internal_a419785daea8577ff05c6a87230bb588fdc6802bd62c4d8d372359df2b1fd98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_be37ad3b43b70bc8d0e0ba72e3afd3c151e8adb9d60f660644ad313eece0e1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be37ad3b43b70bc8d0e0ba72e3afd3c151e8adb9d60f660644ad313eece0e1a8->enter($__internal_be37ad3b43b70bc8d0e0ba72e3afd3c151e8adb9d60f660644ad313eece0e1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a419785daea8577ff05c6a87230bb588fdc6802bd62c4d8d372359df2b1fd98e->leave($__internal_a419785daea8577ff05c6a87230bb588fdc6802bd62c4d8d372359df2b1fd98e_prof);

        
        $__internal_be37ad3b43b70bc8d0e0ba72e3afd3c151e8adb9d60f660644ad313eece0e1a8->leave($__internal_be37ad3b43b70bc8d0e0ba72e3afd3c151e8adb9d60f660644ad313eece0e1a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_753ad701d57ea287c04bade4c9c8b7450781f1581c9a21b3e6dba49e27b10060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753ad701d57ea287c04bade4c9c8b7450781f1581c9a21b3e6dba49e27b10060->enter($__internal_753ad701d57ea287c04bade4c9c8b7450781f1581c9a21b3e6dba49e27b10060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1a717370338aea880bd144805f526629b097dfbc9f994100da3eb6c2d431ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a717370338aea880bd144805f526629b097dfbc9f994100da3eb6c2d431ca5->enter($__internal_a1a717370338aea880bd144805f526629b097dfbc9f994100da3eb6c2d431ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1a717370338aea880bd144805f526629b097dfbc9f994100da3eb6c2d431ca5->leave($__internal_a1a717370338aea880bd144805f526629b097dfbc9f994100da3eb6c2d431ca5_prof);

        
        $__internal_753ad701d57ea287c04bade4c9c8b7450781f1581c9a21b3e6dba49e27b10060->leave($__internal_753ad701d57ea287c04bade4c9c8b7450781f1581c9a21b3e6dba49e27b10060_prof);

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
