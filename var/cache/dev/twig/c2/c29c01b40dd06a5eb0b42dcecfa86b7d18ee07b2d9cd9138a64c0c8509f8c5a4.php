<?php

/* :cliente:edit.html.twig */
class __TwigTemplate_eeceea01a57c752620ce95509c7c03850d8c40470a661383f0024396e4609cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":cliente:edit.html.twig", 1);
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
        $__internal_89d1144492191bc7418777bf384a33f6fcbf2f582031d924b17faf7df1d0ebbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d1144492191bc7418777bf384a33f6fcbf2f582031d924b17faf7df1d0ebbc->enter($__internal_89d1144492191bc7418777bf384a33f6fcbf2f582031d924b17faf7df1d0ebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $__internal_413cb3291db1ca46e7bbd65b910251dae5386f4e9c0fe59bdba8d41b733cf545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413cb3291db1ca46e7bbd65b910251dae5386f4e9c0fe59bdba8d41b733cf545->enter($__internal_413cb3291db1ca46e7bbd65b910251dae5386f4e9c0fe59bdba8d41b733cf545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d1144492191bc7418777bf384a33f6fcbf2f582031d924b17faf7df1d0ebbc->leave($__internal_89d1144492191bc7418777bf384a33f6fcbf2f582031d924b17faf7df1d0ebbc_prof);

        
        $__internal_413cb3291db1ca46e7bbd65b910251dae5386f4e9c0fe59bdba8d41b733cf545->leave($__internal_413cb3291db1ca46e7bbd65b910251dae5386f4e9c0fe59bdba8d41b733cf545_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44a76c476d8a9e57ad745fc354071b457143b4ef944b77c7cc7ff47f3ecd4c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a76c476d8a9e57ad745fc354071b457143b4ef944b77c7cc7ff47f3ecd4c67->enter($__internal_44a76c476d8a9e57ad745fc354071b457143b4ef944b77c7cc7ff47f3ecd4c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41b673021bce3d7a9c35ede476a401b17b95f8644de99625caf3b2d6f8715176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b673021bce3d7a9c35ede476a401b17b95f8644de99625caf3b2d6f8715176->enter($__internal_41b673021bce3d7a9c35ede476a401b17b95f8644de99625caf3b2d6f8715176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41b673021bce3d7a9c35ede476a401b17b95f8644de99625caf3b2d6f8715176->leave($__internal_41b673021bce3d7a9c35ede476a401b17b95f8644de99625caf3b2d6f8715176_prof);

        
        $__internal_44a76c476d8a9e57ad745fc354071b457143b4ef944b77c7cc7ff47f3ecd4c67->leave($__internal_44a76c476d8a9e57ad745fc354071b457143b4ef944b77c7cc7ff47f3ecd4c67_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:edit.html.twig";
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

", ":cliente:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/edit.html.twig");
    }
}
