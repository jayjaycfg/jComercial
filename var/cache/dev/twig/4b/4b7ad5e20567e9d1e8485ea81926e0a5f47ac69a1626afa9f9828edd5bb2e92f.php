<?php

/* :contrato:new.html.twig */
class __TwigTemplate_60b9073a4a8dca89de2028c661eefeca585e4f2719d5874fa9e05e8805359d5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":contrato:new.html.twig", 1);
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
        $__internal_50dfc827b6f95691555c097cc0a32151bb2aff956796bfd32536c8bc64e18e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50dfc827b6f95691555c097cc0a32151bb2aff956796bfd32536c8bc64e18e84->enter($__internal_50dfc827b6f95691555c097cc0a32151bb2aff956796bfd32536c8bc64e18e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:new.html.twig"));

        $__internal_98b213d5daedad427be4f7524fe3a57ba5693cc94d40b62230e38972b2939bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b213d5daedad427be4f7524fe3a57ba5693cc94d40b62230e38972b2939bc6->enter($__internal_98b213d5daedad427be4f7524fe3a57ba5693cc94d40b62230e38972b2939bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrato:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50dfc827b6f95691555c097cc0a32151bb2aff956796bfd32536c8bc64e18e84->leave($__internal_50dfc827b6f95691555c097cc0a32151bb2aff956796bfd32536c8bc64e18e84_prof);

        
        $__internal_98b213d5daedad427be4f7524fe3a57ba5693cc94d40b62230e38972b2939bc6->leave($__internal_98b213d5daedad427be4f7524fe3a57ba5693cc94d40b62230e38972b2939bc6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dad3c951fb870b92a014254baf82e42ddf8daf0854299ba9724b7bc1fcf52bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dad3c951fb870b92a014254baf82e42ddf8daf0854299ba9724b7bc1fcf52bd->enter($__internal_6dad3c951fb870b92a014254baf82e42ddf8daf0854299ba9724b7bc1fcf52bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cc55dfd69c503bce69d772f0cfd33a2ca80ad317e0025c3ff993064feba0b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc55dfd69c503bce69d772f0cfd33a2ca80ad317e0025c3ff993064feba0b15->enter($__internal_1cc55dfd69c503bce69d772f0cfd33a2ca80ad317e0025c3ff993064feba0b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Insertar Contrato</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/contrato:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_1cc55dfd69c503bce69d772f0cfd33a2ca80ad317e0025c3ff993064feba0b15->leave($__internal_1cc55dfd69c503bce69d772f0cfd33a2ca80ad317e0025c3ff993064feba0b15_prof);

        
        $__internal_6dad3c951fb870b92a014254baf82e42ddf8daf0854299ba9724b7bc1fcf52bd->leave($__internal_6dad3c951fb870b92a014254baf82e42ddf8daf0854299ba9724b7bc1fcf52bd_prof);

    }

    public function getTemplateName()
    {
        return ":contrato:new.html.twig";
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
\t\t\t\t<h1>Insertar Contrato</h1>
\t\t\t\t{{ include(':/contrato:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", ":contrato:new.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/new.html.twig");
    }
}
