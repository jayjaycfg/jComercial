<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5fc722d62ca28f285b606fe786535b6a2c11de849e5659f523da67b1533eb6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70e6687e3bb02bf70561936e292c3f1fd4d30c4a46d56f4ae3cff00e0dfcb207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e6687e3bb02bf70561936e292c3f1fd4d30c4a46d56f4ae3cff00e0dfcb207->enter($__internal_70e6687e3bb02bf70561936e292c3f1fd4d30c4a46d56f4ae3cff00e0dfcb207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e19f538092af596bff537d7c15c9217934a1d468db7d4ee857048babec5c019e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19f538092af596bff537d7c15c9217934a1d468db7d4ee857048babec5c019e->enter($__internal_e19f538092af596bff537d7c15c9217934a1d468db7d4ee857048babec5c019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70e6687e3bb02bf70561936e292c3f1fd4d30c4a46d56f4ae3cff00e0dfcb207->leave($__internal_70e6687e3bb02bf70561936e292c3f1fd4d30c4a46d56f4ae3cff00e0dfcb207_prof);

        
        $__internal_e19f538092af596bff537d7c15c9217934a1d468db7d4ee857048babec5c019e->leave($__internal_e19f538092af596bff537d7c15c9217934a1d468db7d4ee857048babec5c019e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_10946a1a4f8b692655b1656c9349cc54c11010ed8dbcb7fea5f287d629e8ae24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10946a1a4f8b692655b1656c9349cc54c11010ed8dbcb7fea5f287d629e8ae24->enter($__internal_10946a1a4f8b692655b1656c9349cc54c11010ed8dbcb7fea5f287d629e8ae24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_338049b62286d2981c68a087fba63736203f369496fdd542361b1fe08b3b7b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338049b62286d2981c68a087fba63736203f369496fdd542361b1fe08b3b7b97->enter($__internal_338049b62286d2981c68a087fba63736203f369496fdd542361b1fe08b3b7b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_338049b62286d2981c68a087fba63736203f369496fdd542361b1fe08b3b7b97->leave($__internal_338049b62286d2981c68a087fba63736203f369496fdd542361b1fe08b3b7b97_prof);

        
        $__internal_10946a1a4f8b692655b1656c9349cc54c11010ed8dbcb7fea5f287d629e8ae24->leave($__internal_10946a1a4f8b692655b1656c9349cc54c11010ed8dbcb7fea5f287d629e8ae24_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae1773ad6adf0818890a4c4986f3b6a6e5b36eb2b7c554189d7ec08961e3ec29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1773ad6adf0818890a4c4986f3b6a6e5b36eb2b7c554189d7ec08961e3ec29->enter($__internal_ae1773ad6adf0818890a4c4986f3b6a6e5b36eb2b7c554189d7ec08961e3ec29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a17ff4dae3eb3abc3685007cc89528692d54522fb8657c34b05a2017b9eeedf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17ff4dae3eb3abc3685007cc89528692d54522fb8657c34b05a2017b9eeedf5->enter($__internal_a17ff4dae3eb3abc3685007cc89528692d54522fb8657c34b05a2017b9eeedf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a17ff4dae3eb3abc3685007cc89528692d54522fb8657c34b05a2017b9eeedf5->leave($__internal_a17ff4dae3eb3abc3685007cc89528692d54522fb8657c34b05a2017b9eeedf5_prof);

        
        $__internal_ae1773ad6adf0818890a4c4986f3b6a6e5b36eb2b7c554189d7ec08961e3ec29->leave($__internal_ae1773ad6adf0818890a4c4986f3b6a6e5b36eb2b7c554189d7ec08961e3ec29_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
