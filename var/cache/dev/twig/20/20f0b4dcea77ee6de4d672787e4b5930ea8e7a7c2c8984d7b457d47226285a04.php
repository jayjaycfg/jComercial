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
        $__internal_1c3fc8b51fddc8d6f6d7b6e800c94d416c41ff7fe3b0eaa5374d7d8d21c86ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3fc8b51fddc8d6f6d7b6e800c94d416c41ff7fe3b0eaa5374d7d8d21c86ad5->enter($__internal_1c3fc8b51fddc8d6f6d7b6e800c94d416c41ff7fe3b0eaa5374d7d8d21c86ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:edit.html.twig"));

        $__internal_a564806499b500286416fa4e045c4f2ed3d4ed4da2efa18cd71284ed646838bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a564806499b500286416fa4e045c4f2ed3d4ed4da2efa18cd71284ed646838bc->enter($__internal_a564806499b500286416fa4e045c4f2ed3d4ed4da2efa18cd71284ed646838bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3fc8b51fddc8d6f6d7b6e800c94d416c41ff7fe3b0eaa5374d7d8d21c86ad5->leave($__internal_1c3fc8b51fddc8d6f6d7b6e800c94d416c41ff7fe3b0eaa5374d7d8d21c86ad5_prof);

        
        $__internal_a564806499b500286416fa4e045c4f2ed3d4ed4da2efa18cd71284ed646838bc->leave($__internal_a564806499b500286416fa4e045c4f2ed3d4ed4da2efa18cd71284ed646838bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d164f26cbfcc2c2f739481dc7a0db0ec44c227bc49153893216906d963cdf5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d164f26cbfcc2c2f739481dc7a0db0ec44c227bc49153893216906d963cdf5e0->enter($__internal_d164f26cbfcc2c2f739481dc7a0db0ec44c227bc49153893216906d963cdf5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d07c36855630ac7f348757c569fb06c04ac2454f6272c46a7bc71dcd7327045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d07c36855630ac7f348757c569fb06c04ac2454f6272c46a7bc71dcd7327045->enter($__internal_4d07c36855630ac7f348757c569fb06c04ac2454f6272c46a7bc71dcd7327045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d07c36855630ac7f348757c569fb06c04ac2454f6272c46a7bc71dcd7327045->leave($__internal_4d07c36855630ac7f348757c569fb06c04ac2454f6272c46a7bc71dcd7327045_prof);

        
        $__internal_d164f26cbfcc2c2f739481dc7a0db0ec44c227bc49153893216906d963cdf5e0->leave($__internal_d164f26cbfcc2c2f739481dc7a0db0ec44c227bc49153893216906d963cdf5e0_prof);

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
