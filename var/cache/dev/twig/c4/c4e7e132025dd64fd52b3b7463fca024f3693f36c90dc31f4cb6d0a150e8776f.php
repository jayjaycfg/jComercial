<?php

/* cliente/new.html.twig */
class __TwigTemplate_06a7405efdc5a260b061b63f7f096d3a193a797cb5e62a3e34af3126fd042849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", "cliente/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":cliente:FormLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d923aa86b2d8b0103d46ad95acabd9a08b34d2a81fd9c594e732e9a0282ed787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d923aa86b2d8b0103d46ad95acabd9a08b34d2a81fd9c594e732e9a0282ed787->enter($__internal_d923aa86b2d8b0103d46ad95acabd9a08b34d2a81fd9c594e732e9a0282ed787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $__internal_bd07aa36767125ef6ff74b9a1e661a04a5843b163a377db87e2ab486d5c5150c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd07aa36767125ef6ff74b9a1e661a04a5843b163a377db87e2ab486d5c5150c->enter($__internal_bd07aa36767125ef6ff74b9a1e661a04a5843b163a377db87e2ab486d5c5150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d923aa86b2d8b0103d46ad95acabd9a08b34d2a81fd9c594e732e9a0282ed787->leave($__internal_d923aa86b2d8b0103d46ad95acabd9a08b34d2a81fd9c594e732e9a0282ed787_prof);

        
        $__internal_bd07aa36767125ef6ff74b9a1e661a04a5843b163a377db87e2ab486d5c5150c->leave($__internal_bd07aa36767125ef6ff74b9a1e661a04a5843b163a377db87e2ab486d5c5150c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2453d2ff3bc8faf0faaaab26fdf082f6e042eb019bc3efc7e5e7f0a48176c1ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2453d2ff3bc8faf0faaaab26fdf082f6e042eb019bc3efc7e5e7f0a48176c1ca->enter($__internal_2453d2ff3bc8faf0faaaab26fdf082f6e042eb019bc3efc7e5e7f0a48176c1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c908d695dd30bc429aa01bd6db9df1218d1c6786bc0395c305913b5c39bd022b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c908d695dd30bc429aa01bd6db9df1218d1c6786bc0395c305913b5c39bd022b->enter($__internal_c908d695dd30bc429aa01bd6db9df1218d1c6786bc0395c305913b5c39bd022b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con cliente</h1>
\t\t\t\t";
        // line 9
        echo twig_include($this->env, $context, ":/cliente:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_c908d695dd30bc429aa01bd6db9df1218d1c6786bc0395c305913b5c39bd022b->leave($__internal_c908d695dd30bc429aa01bd6db9df1218d1c6786bc0395c305913b5c39bd022b_prof);

        
        $__internal_2453d2ff3bc8faf0faaaab26fdf082f6e042eb019bc3efc7e5e7f0a48176c1ca->leave($__internal_2453d2ff3bc8faf0faaaab26fdf082f6e042eb019bc3efc7e5e7f0a48176c1ca_prof);

    }

    public function getTemplateName()
    {
        return "cliente/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ':cliente:FormLayout.html.twig' %}

{% block body %}

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con cliente</h1>
\t\t\t\t{{ include(':/cliente:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}

", "cliente/new.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/new.html.twig");
    }
}
