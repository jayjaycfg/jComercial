<?php

/* :empresa:new.html.twig */
class __TwigTemplate_3cd1d1f6923efbf85300d280842dda7d867c480da08adb4b6b59fd2a3472a106 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":empresa:new.html.twig", 1);
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
        $__internal_782b300403aeb77b42716d28b5cdd54e2c67f0853252f0b0e511e0fc14906888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782b300403aeb77b42716d28b5cdd54e2c67f0853252f0b0e511e0fc14906888->enter($__internal_782b300403aeb77b42716d28b5cdd54e2c67f0853252f0b0e511e0fc14906888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:new.html.twig"));

        $__internal_ba9e35e9d948daef1043d8b29cb8af5bfd407f2ff0588981df5241fe026c0dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9e35e9d948daef1043d8b29cb8af5bfd407f2ff0588981df5241fe026c0dce->enter($__internal_ba9e35e9d948daef1043d8b29cb8af5bfd407f2ff0588981df5241fe026c0dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_782b300403aeb77b42716d28b5cdd54e2c67f0853252f0b0e511e0fc14906888->leave($__internal_782b300403aeb77b42716d28b5cdd54e2c67f0853252f0b0e511e0fc14906888_prof);

        
        $__internal_ba9e35e9d948daef1043d8b29cb8af5bfd407f2ff0588981df5241fe026c0dce->leave($__internal_ba9e35e9d948daef1043d8b29cb8af5bfd407f2ff0588981df5241fe026c0dce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cb93aa252d0faa5a44c01a20c1eb92c4eab9dab599eb6811e7f34b8ed2017d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb93aa252d0faa5a44c01a20c1eb92c4eab9dab599eb6811e7f34b8ed2017d4->enter($__internal_1cb93aa252d0faa5a44c01a20c1eb92c4eab9dab599eb6811e7f34b8ed2017d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f95e834ac073a587768e3a4b505bea1008e0b1d4a309de67d7cc56a0099902a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f95e834ac073a587768e3a4b505bea1008e0b1d4a309de67d7cc56a0099902a->enter($__internal_1f95e834ac073a587768e3a4b505bea1008e0b1d4a309de67d7cc56a0099902a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Crear empresa</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/empresa:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_1f95e834ac073a587768e3a4b505bea1008e0b1d4a309de67d7cc56a0099902a->leave($__internal_1f95e834ac073a587768e3a4b505bea1008e0b1d4a309de67d7cc56a0099902a_prof);

        
        $__internal_1cb93aa252d0faa5a44c01a20c1eb92c4eab9dab599eb6811e7f34b8ed2017d4->leave($__internal_1cb93aa252d0faa5a44c01a20c1eb92c4eab9dab599eb6811e7f34b8ed2017d4_prof);

    }

    public function getTemplateName()
    {
        return ":empresa:new.html.twig";
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
\t\t\t\t<h1>Crear empresa</h1>
\t\t\t\t{{ include(':/empresa:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":empresa:new.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/new.html.twig");
    }
}
