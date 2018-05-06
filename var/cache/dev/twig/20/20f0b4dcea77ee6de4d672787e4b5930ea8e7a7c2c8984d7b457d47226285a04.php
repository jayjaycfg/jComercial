<?php

/* :contrato:edit.html.twig */
class __TwigTemplate_37fe693b026a7bcfcf712216952a19023824ef6ec92f833de701edeb21dbe6a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":contrato:edit.html.twig", 1);
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
        $__internal_b2797d13820611fbfb398253f24d2df9060dd19196ca75bf0ad06728eb084a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2797d13820611fbfb398253f24d2df9060dd19196ca75bf0ad06728eb084a4b->enter($__internal_b2797d13820611fbfb398253f24d2df9060dd19196ca75bf0ad06728eb084a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:edit.html.twig"));

        $__internal_fa339623ea036535b04fe6ceb735bb392141489d96c33c844c501ca17084f1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa339623ea036535b04fe6ceb735bb392141489d96c33c844c501ca17084f1f5->enter($__internal_fa339623ea036535b04fe6ceb735bb392141489d96c33c844c501ca17084f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2797d13820611fbfb398253f24d2df9060dd19196ca75bf0ad06728eb084a4b->leave($__internal_b2797d13820611fbfb398253f24d2df9060dd19196ca75bf0ad06728eb084a4b_prof);

        
        $__internal_fa339623ea036535b04fe6ceb735bb392141489d96c33c844c501ca17084f1f5->leave($__internal_fa339623ea036535b04fe6ceb735bb392141489d96c33c844c501ca17084f1f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34053d1f22791a24dbf006a4b66e0a5e64843e236b05cee533d5dbd87e193f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34053d1f22791a24dbf006a4b66e0a5e64843e236b05cee533d5dbd87e193f42->enter($__internal_34053d1f22791a24dbf006a4b66e0a5e64843e236b05cee533d5dbd87e193f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ce28695a7fff7a6bdde394ed1f2d38ebf20480bd7ffa034aecaa41d00b802c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce28695a7fff7a6bdde394ed1f2d38ebf20480bd7ffa034aecaa41d00b802c6->enter($__internal_1ce28695a7fff7a6bdde394ed1f2d38ebf20480bd7ffa034aecaa41d00b802c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Contrato</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/contrato:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_1ce28695a7fff7a6bdde394ed1f2d38ebf20480bd7ffa034aecaa41d00b802c6->leave($__internal_1ce28695a7fff7a6bdde394ed1f2d38ebf20480bd7ffa034aecaa41d00b802c6_prof);

        
        $__internal_34053d1f22791a24dbf006a4b66e0a5e64843e236b05cee533d5dbd87e193f42->leave($__internal_34053d1f22791a24dbf006a4b66e0a5e64843e236b05cee533d5dbd87e193f42_prof);

    }

    public function getTemplateName()
    {
        return ":contrato:edit.html.twig";
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
\t\t\t\t<h1>Editar Contrato</h1>
\t\t\t\t{{ include(':/contrato:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", ":contrato:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/edit.html.twig");
    }
}
