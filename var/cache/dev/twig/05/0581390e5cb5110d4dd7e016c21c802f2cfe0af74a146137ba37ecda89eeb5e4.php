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
        $__internal_61805c783fa4f1872a5be4927c995aa764d199aa29bc6d03938be2ba35a55632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61805c783fa4f1872a5be4927c995aa764d199aa29bc6d03938be2ba35a55632->enter($__internal_61805c783fa4f1872a5be4927c995aa764d199aa29bc6d03938be2ba35a55632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:new.html.twig"));

        $__internal_d29a882edc6af553e3386075e96c998e1fd4b9f7759b187ac00f4a59ee25b537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29a882edc6af553e3386075e96c998e1fd4b9f7759b187ac00f4a59ee25b537->enter($__internal_d29a882edc6af553e3386075e96c998e1fd4b9f7759b187ac00f4a59ee25b537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61805c783fa4f1872a5be4927c995aa764d199aa29bc6d03938be2ba35a55632->leave($__internal_61805c783fa4f1872a5be4927c995aa764d199aa29bc6d03938be2ba35a55632_prof);

        
        $__internal_d29a882edc6af553e3386075e96c998e1fd4b9f7759b187ac00f4a59ee25b537->leave($__internal_d29a882edc6af553e3386075e96c998e1fd4b9f7759b187ac00f4a59ee25b537_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_235a746713aca70d5215f16c78ad8a04e7b9468cf19b2ced444caad0f4c295ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235a746713aca70d5215f16c78ad8a04e7b9468cf19b2ced444caad0f4c295ac->enter($__internal_235a746713aca70d5215f16c78ad8a04e7b9468cf19b2ced444caad0f4c295ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_deb82428ab1cd033e3cab960545f325608812cf35f7d5fe253fc0f8714fec09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb82428ab1cd033e3cab960545f325608812cf35f7d5fe253fc0f8714fec09e->enter($__internal_deb82428ab1cd033e3cab960545f325608812cf35f7d5fe253fc0f8714fec09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Factura</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/empresa:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_deb82428ab1cd033e3cab960545f325608812cf35f7d5fe253fc0f8714fec09e->leave($__internal_deb82428ab1cd033e3cab960545f325608812cf35f7d5fe253fc0f8714fec09e_prof);

        
        $__internal_235a746713aca70d5215f16c78ad8a04e7b9468cf19b2ced444caad0f4c295ac->leave($__internal_235a746713aca70d5215f16c78ad8a04e7b9468cf19b2ced444caad0f4c295ac_prof);

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
\t\t\t\t<h1>Editar Factura</h1>
\t\t\t\t{{ include(':/empresa:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":empresa:new.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/new.html.twig");
    }
}
