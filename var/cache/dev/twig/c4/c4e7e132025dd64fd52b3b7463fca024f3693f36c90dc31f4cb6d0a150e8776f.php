<?php

/* :cliente:new.html.twig */
class __TwigTemplate_06a7405efdc5a260b061b63f7f096d3a193a797cb5e62a3e34af3126fd042849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":cliente:new.html.twig", 1);
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
        $__internal_064ab8a8ae1c5a02a0576a6d7aa91568de7d9345502bb5719eced8347ee9a2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064ab8a8ae1c5a02a0576a6d7aa91568de7d9345502bb5719eced8347ee9a2fd->enter($__internal_064ab8a8ae1c5a02a0576a6d7aa91568de7d9345502bb5719eced8347ee9a2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $__internal_c625634ce5c5b166fc6cbedac0259d21815ca07f69485e0631a03c6fc02aa8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c625634ce5c5b166fc6cbedac0259d21815ca07f69485e0631a03c6fc02aa8e0->enter($__internal_c625634ce5c5b166fc6cbedac0259d21815ca07f69485e0631a03c6fc02aa8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_064ab8a8ae1c5a02a0576a6d7aa91568de7d9345502bb5719eced8347ee9a2fd->leave($__internal_064ab8a8ae1c5a02a0576a6d7aa91568de7d9345502bb5719eced8347ee9a2fd_prof);

        
        $__internal_c625634ce5c5b166fc6cbedac0259d21815ca07f69485e0631a03c6fc02aa8e0->leave($__internal_c625634ce5c5b166fc6cbedac0259d21815ca07f69485e0631a03c6fc02aa8e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8206defa88bab1b7874ee109cd15eddbd2365c6111113d9de7300bf174219d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8206defa88bab1b7874ee109cd15eddbd2365c6111113d9de7300bf174219d9->enter($__internal_b8206defa88bab1b7874ee109cd15eddbd2365c6111113d9de7300bf174219d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c063dead8a6e64b072e17ba3c9f72df05e1d9f575ae83da073be045917cd71a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c063dead8a6e64b072e17ba3c9f72df05e1d9f575ae83da073be045917cd71a1->enter($__internal_c063dead8a6e64b072e17ba3c9f72df05e1d9f575ae83da073be045917cd71a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c063dead8a6e64b072e17ba3c9f72df05e1d9f575ae83da073be045917cd71a1->leave($__internal_c063dead8a6e64b072e17ba3c9f72df05e1d9f575ae83da073be045917cd71a1_prof);

        
        $__internal_b8206defa88bab1b7874ee109cd15eddbd2365c6111113d9de7300bf174219d9->leave($__internal_b8206defa88bab1b7874ee109cd15eddbd2365c6111113d9de7300bf174219d9_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:new.html.twig";
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

", ":cliente:new.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/new.html.twig");
    }
}
