<?php

/* cliente/edit.html.twig */
class __TwigTemplate_8916fcd8d7e735e41802728819460528243a5561bac3b3bc35c105208b41adcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", "cliente/edit.html.twig", 1);
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
        $__internal_9ce8417bf97bbaebc91b9c67b553cb256c6d3a1e5a8cb806a33fc02868009203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce8417bf97bbaebc91b9c67b553cb256c6d3a1e5a8cb806a33fc02868009203->enter($__internal_9ce8417bf97bbaebc91b9c67b553cb256c6d3a1e5a8cb806a33fc02868009203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/edit.html.twig"));

        $__internal_896564e3c51605bc028c806768538976bb9ad8ece659a0b061adb83403d1174f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896564e3c51605bc028c806768538976bb9ad8ece659a0b061adb83403d1174f->enter($__internal_896564e3c51605bc028c806768538976bb9ad8ece659a0b061adb83403d1174f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ce8417bf97bbaebc91b9c67b553cb256c6d3a1e5a8cb806a33fc02868009203->leave($__internal_9ce8417bf97bbaebc91b9c67b553cb256c6d3a1e5a8cb806a33fc02868009203_prof);

        
        $__internal_896564e3c51605bc028c806768538976bb9ad8ece659a0b061adb83403d1174f->leave($__internal_896564e3c51605bc028c806768538976bb9ad8ece659a0b061adb83403d1174f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eea3c48830e18198392fc79615841c0bf8c89d476096d6ed5bec4c84e87bc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eea3c48830e18198392fc79615841c0bf8c89d476096d6ed5bec4c84e87bc57->enter($__internal_6eea3c48830e18198392fc79615841c0bf8c89d476096d6ed5bec4c84e87bc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e67e1a7130eff2fc5ab3f15bf85f6a5c7a136e51916461b6cfa988cd170af55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e67e1a7130eff2fc5ab3f15bf85f6a5c7a136e51916461b6cfa988cd170af55->enter($__internal_0e67e1a7130eff2fc5ab3f15bf85f6a5c7a136e51916461b6cfa988cd170af55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con cliente</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/cliente:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_0e67e1a7130eff2fc5ab3f15bf85f6a5c7a136e51916461b6cfa988cd170af55->leave($__internal_0e67e1a7130eff2fc5ab3f15bf85f6a5c7a136e51916461b6cfa988cd170af55_prof);

        
        $__internal_6eea3c48830e18198392fc79615841c0bf8c89d476096d6ed5bec4c84e87bc57->leave($__internal_6eea3c48830e18198392fc79615841c0bf8c89d476096d6ed5bec4c84e87bc57_prof);

    }

    public function getTemplateName()
    {
        return "cliente/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

", "cliente/edit.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/edit.html.twig");
    }
}
