<?php

/* cliente/edit.html.twig */
class __TwigTemplate_eeceea01a57c752620ce95509c7c03850d8c40470a661383f0024396e4609cb3 extends Twig_Template
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
        $__internal_785017b83acd15da94b552751bcf2e6a6b5d0ee4ddfa9b4afd66e4191d21491c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785017b83acd15da94b552751bcf2e6a6b5d0ee4ddfa9b4afd66e4191d21491c->enter($__internal_785017b83acd15da94b552751bcf2e6a6b5d0ee4ddfa9b4afd66e4191d21491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/edit.html.twig"));

        $__internal_65f4461cb906ee80a627cb9ad479f71eef5b39e32941b96e1fadb9a2314a67e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f4461cb906ee80a627cb9ad479f71eef5b39e32941b96e1fadb9a2314a67e5->enter($__internal_65f4461cb906ee80a627cb9ad479f71eef5b39e32941b96e1fadb9a2314a67e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_785017b83acd15da94b552751bcf2e6a6b5d0ee4ddfa9b4afd66e4191d21491c->leave($__internal_785017b83acd15da94b552751bcf2e6a6b5d0ee4ddfa9b4afd66e4191d21491c_prof);

        
        $__internal_65f4461cb906ee80a627cb9ad479f71eef5b39e32941b96e1fadb9a2314a67e5->leave($__internal_65f4461cb906ee80a627cb9ad479f71eef5b39e32941b96e1fadb9a2314a67e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_395f21edd85d85d382eade0118c4fbd7a73aeb39c3ab4b537c38284d3ae1b9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395f21edd85d85d382eade0118c4fbd7a73aeb39c3ab4b537c38284d3ae1b9ff->enter($__internal_395f21edd85d85d382eade0118c4fbd7a73aeb39c3ab4b537c38284d3ae1b9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff62eebdbd44d6a66d8f49b970363cbb45d26137702e6cbfe41a62bd06931824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff62eebdbd44d6a66d8f49b970363cbb45d26137702e6cbfe41a62bd06931824->enter($__internal_ff62eebdbd44d6a66d8f49b970363cbb45d26137702e6cbfe41a62bd06931824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff62eebdbd44d6a66d8f49b970363cbb45d26137702e6cbfe41a62bd06931824->leave($__internal_ff62eebdbd44d6a66d8f49b970363cbb45d26137702e6cbfe41a62bd06931824_prof);

        
        $__internal_395f21edd85d85d382eade0118c4fbd7a73aeb39c3ab4b537c38284d3ae1b9ff->leave($__internal_395f21edd85d85d382eade0118c4fbd7a73aeb39c3ab4b537c38284d3ae1b9ff_prof);

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
