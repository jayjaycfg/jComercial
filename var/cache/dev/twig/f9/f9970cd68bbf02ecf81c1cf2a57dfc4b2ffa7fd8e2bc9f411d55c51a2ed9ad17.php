<?php

/* :factura:new.html.twig */
class __TwigTemplate_bfad2b125762be9f1df5683a2f8e022a7ba502a784320db9a3e1fe3734d52056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":factura:new.html.twig", 1);
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
        $__internal_f25ec2f3ce46a2100a3c6adbfaa7b48cd8cd4cbf962fa336c5cc24de63c14cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25ec2f3ce46a2100a3c6adbfaa7b48cd8cd4cbf962fa336c5cc24de63c14cd7->enter($__internal_f25ec2f3ce46a2100a3c6adbfaa7b48cd8cd4cbf962fa336c5cc24de63c14cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:new.html.twig"));

        $__internal_98ddedc54378c1996dea26f8c81898f6836e8811f4209ab15743b390aec847ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ddedc54378c1996dea26f8c81898f6836e8811f4209ab15743b390aec847ca->enter($__internal_98ddedc54378c1996dea26f8c81898f6836e8811f4209ab15743b390aec847ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25ec2f3ce46a2100a3c6adbfaa7b48cd8cd4cbf962fa336c5cc24de63c14cd7->leave($__internal_f25ec2f3ce46a2100a3c6adbfaa7b48cd8cd4cbf962fa336c5cc24de63c14cd7_prof);

        
        $__internal_98ddedc54378c1996dea26f8c81898f6836e8811f4209ab15743b390aec847ca->leave($__internal_98ddedc54378c1996dea26f8c81898f6836e8811f4209ab15743b390aec847ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d16a65931e677e12fbd12ff18293302507e7964dd54584b47968d4ae21576a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16a65931e677e12fbd12ff18293302507e7964dd54584b47968d4ae21576a45->enter($__internal_d16a65931e677e12fbd12ff18293302507e7964dd54584b47968d4ae21576a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04c2ed98abc2ee4fe7dedaf676aceb70b7f4767aecf7a6581b85a6f0986e3b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c2ed98abc2ee4fe7dedaf676aceb70b7f4767aecf7a6581b85a6f0986e3b64->enter($__internal_04c2ed98abc2ee4fe7dedaf676aceb70b7f4767aecf7a6581b85a6f0986e3b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nueva Factura</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/factura:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_04c2ed98abc2ee4fe7dedaf676aceb70b7f4767aecf7a6581b85a6f0986e3b64->leave($__internal_04c2ed98abc2ee4fe7dedaf676aceb70b7f4767aecf7a6581b85a6f0986e3b64_prof);

        
        $__internal_d16a65931e677e12fbd12ff18293302507e7964dd54584b47968d4ae21576a45->leave($__internal_d16a65931e677e12fbd12ff18293302507e7964dd54584b47968d4ae21576a45_prof);

    }

    public function getTemplateName()
    {
        return ":factura:new.html.twig";
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
\t\t\t\t<h1>Nueva Factura</h1>
\t\t\t\t{{ include(':/factura:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":factura:new.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/new.html.twig");
    }
}
