<?php

/* factura/new.html.twig */
class __TwigTemplate_58bcd59ac81f752e79172c5ee094bdd215f71d9a4699cfedbe651da30e9bec29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "factura/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cd78fad7a4e88d5cb55c9250545f149894f672968fbea35aeb458895f296524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd78fad7a4e88d5cb55c9250545f149894f672968fbea35aeb458895f296524->enter($__internal_8cd78fad7a4e88d5cb55c9250545f149894f672968fbea35aeb458895f296524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/new.html.twig"));

        $__internal_ea9837133f66a50ca30fe20609bbdd49904d2a834e24e006d5f2b2e3ccb9a6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9837133f66a50ca30fe20609bbdd49904d2a834e24e006d5f2b2e3ccb9a6f3->enter($__internal_ea9837133f66a50ca30fe20609bbdd49904d2a834e24e006d5f2b2e3ccb9a6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd78fad7a4e88d5cb55c9250545f149894f672968fbea35aeb458895f296524->leave($__internal_8cd78fad7a4e88d5cb55c9250545f149894f672968fbea35aeb458895f296524_prof);

        
        $__internal_ea9837133f66a50ca30fe20609bbdd49904d2a834e24e006d5f2b2e3ccb9a6f3->leave($__internal_ea9837133f66a50ca30fe20609bbdd49904d2a834e24e006d5f2b2e3ccb9a6f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd72e95b6ce204c96143df1ec117728619187e050ee419f5a25f965db452ea28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd72e95b6ce204c96143df1ec117728619187e050ee419f5a25f965db452ea28->enter($__internal_cd72e95b6ce204c96143df1ec117728619187e050ee419f5a25f965db452ea28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37889efa6209fe4bcc036ce4037b01f322a24cefbbfd71851d661fd6004d4913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37889efa6209fe4bcc036ce4037b01f322a24cefbbfd71851d661fd6004d4913->enter($__internal_37889efa6209fe4bcc036ce4037b01f322a24cefbbfd71851d661fd6004d4913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_37889efa6209fe4bcc036ce4037b01f322a24cefbbfd71851d661fd6004d4913->leave($__internal_37889efa6209fe4bcc036ce4037b01f322a24cefbbfd71851d661fd6004d4913_prof);

        
        $__internal_cd72e95b6ce204c96143df1ec117728619187e050ee419f5a25f965db452ea28->leave($__internal_cd72e95b6ce204c96143df1ec117728619187e050ee419f5a25f965db452ea28_prof);

    }

    public function getTemplateName()
    {
        return "factura/new.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
", "factura/new.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/new.html.twig");
    }
}
