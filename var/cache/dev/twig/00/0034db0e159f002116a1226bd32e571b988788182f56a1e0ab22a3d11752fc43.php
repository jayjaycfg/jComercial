<?php

/* contrato/edit.html.twig */
class __TwigTemplate_e8f6670bca601f314bf1e9ed42b4f6334d14b00a6e857588008f4db01fa4d462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", "contrato/edit.html.twig", 1);
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
        $__internal_212fa5f7b0e5e2bd826eeec7640c949a80ac5ad1061a9ddc10cd40e7efa0235b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212fa5f7b0e5e2bd826eeec7640c949a80ac5ad1061a9ddc10cd40e7efa0235b->enter($__internal_212fa5f7b0e5e2bd826eeec7640c949a80ac5ad1061a9ddc10cd40e7efa0235b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contrato/edit.html.twig"));

        $__internal_a0daf6557ac1b08baa79b5ed2d1b0881cf7a6b568c64d3c594aeae5e200026de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0daf6557ac1b08baa79b5ed2d1b0881cf7a6b568c64d3c594aeae5e200026de->enter($__internal_a0daf6557ac1b08baa79b5ed2d1b0881cf7a6b568c64d3c594aeae5e200026de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contrato/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212fa5f7b0e5e2bd826eeec7640c949a80ac5ad1061a9ddc10cd40e7efa0235b->leave($__internal_212fa5f7b0e5e2bd826eeec7640c949a80ac5ad1061a9ddc10cd40e7efa0235b_prof);

        
        $__internal_a0daf6557ac1b08baa79b5ed2d1b0881cf7a6b568c64d3c594aeae5e200026de->leave($__internal_a0daf6557ac1b08baa79b5ed2d1b0881cf7a6b568c64d3c594aeae5e200026de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9954ec62f66bb0a6c8a85eb2225c86369b6e5f91f45edb4917e0f187ff18e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9954ec62f66bb0a6c8a85eb2225c86369b6e5f91f45edb4917e0f187ff18e40->enter($__internal_d9954ec62f66bb0a6c8a85eb2225c86369b6e5f91f45edb4917e0f187ff18e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac1406f2945cd605ef86ca63cc9c2f497e717ddb46cc976755879aaa95535fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1406f2945cd605ef86ca63cc9c2f497e717ddb46cc976755879aaa95535fff->enter($__internal_ac1406f2945cd605ef86ca63cc9c2f497e717ddb46cc976755879aaa95535fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ac1406f2945cd605ef86ca63cc9c2f497e717ddb46cc976755879aaa95535fff->leave($__internal_ac1406f2945cd605ef86ca63cc9c2f497e717ddb46cc976755879aaa95535fff_prof);

        
        $__internal_d9954ec62f66bb0a6c8a85eb2225c86369b6e5f91f45edb4917e0f187ff18e40->leave($__internal_d9954ec62f66bb0a6c8a85eb2225c86369b6e5f91f45edb4917e0f187ff18e40_prof);

    }

    public function getTemplateName()
    {
        return "contrato/edit.html.twig";
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

", "contrato/edit.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/edit.html.twig");
    }
}
