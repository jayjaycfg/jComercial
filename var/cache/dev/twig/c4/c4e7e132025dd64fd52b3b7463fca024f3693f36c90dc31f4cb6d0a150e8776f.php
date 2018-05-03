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
        $__internal_560b7d806fae02f709f587763e0fefbcd9a0e0ef20933d63e2f4c8986e266f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560b7d806fae02f709f587763e0fefbcd9a0e0ef20933d63e2f4c8986e266f4b->enter($__internal_560b7d806fae02f709f587763e0fefbcd9a0e0ef20933d63e2f4c8986e266f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $__internal_52acf3b4a1b4ee1b8a942c88185d71d031ec0561f45013eb12f17d8090661ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52acf3b4a1b4ee1b8a942c88185d71d031ec0561f45013eb12f17d8090661ec2->enter($__internal_52acf3b4a1b4ee1b8a942c88185d71d031ec0561f45013eb12f17d8090661ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_560b7d806fae02f709f587763e0fefbcd9a0e0ef20933d63e2f4c8986e266f4b->leave($__internal_560b7d806fae02f709f587763e0fefbcd9a0e0ef20933d63e2f4c8986e266f4b_prof);

        
        $__internal_52acf3b4a1b4ee1b8a942c88185d71d031ec0561f45013eb12f17d8090661ec2->leave($__internal_52acf3b4a1b4ee1b8a942c88185d71d031ec0561f45013eb12f17d8090661ec2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_776ff37566373dff56ec91ed0e716856472dc6d5882f30d70ea788f5f2503a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776ff37566373dff56ec91ed0e716856472dc6d5882f30d70ea788f5f2503a5d->enter($__internal_776ff37566373dff56ec91ed0e716856472dc6d5882f30d70ea788f5f2503a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bec427a1bd55c21e22d31b0d9c5b84459cdbb0ec7d9ff230ae01829e2570e3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec427a1bd55c21e22d31b0d9c5b84459cdbb0ec7d9ff230ae01829e2570e3e1->enter($__internal_bec427a1bd55c21e22d31b0d9c5b84459cdbb0ec7d9ff230ae01829e2570e3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bec427a1bd55c21e22d31b0d9c5b84459cdbb0ec7d9ff230ae01829e2570e3e1->leave($__internal_bec427a1bd55c21e22d31b0d9c5b84459cdbb0ec7d9ff230ae01829e2570e3e1_prof);

        
        $__internal_776ff37566373dff56ec91ed0e716856472dc6d5882f30d70ea788f5f2503a5d->leave($__internal_776ff37566373dff56ec91ed0e716856472dc6d5882f30d70ea788f5f2503a5d_prof);

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
