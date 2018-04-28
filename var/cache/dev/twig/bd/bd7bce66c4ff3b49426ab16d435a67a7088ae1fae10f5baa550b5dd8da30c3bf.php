<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
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
        $__internal_925404bc3174e943b9d78bd8d28af1afdbbb80c020a69d5367ecac24af37b9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925404bc3174e943b9d78bd8d28af1afdbbb80c020a69d5367ecac24af37b9f1->enter($__internal_925404bc3174e943b9d78bd8d28af1afdbbb80c020a69d5367ecac24af37b9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ea36917ac7fa34b3fcd00315337a2e697f813ebd7aef0f25ef86626b06f337c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea36917ac7fa34b3fcd00315337a2e697f813ebd7aef0f25ef86626b06f337c8->enter($__internal_ea36917ac7fa34b3fcd00315337a2e697f813ebd7aef0f25ef86626b06f337c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925404bc3174e943b9d78bd8d28af1afdbbb80c020a69d5367ecac24af37b9f1->leave($__internal_925404bc3174e943b9d78bd8d28af1afdbbb80c020a69d5367ecac24af37b9f1_prof);

        
        $__internal_ea36917ac7fa34b3fcd00315337a2e697f813ebd7aef0f25ef86626b06f337c8->leave($__internal_ea36917ac7fa34b3fcd00315337a2e697f813ebd7aef0f25ef86626b06f337c8_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9498c0bb071fb76208f22400b3bd5d1b384ad8c88da8cb38217a6d62415ba37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9498c0bb071fb76208f22400b3bd5d1b384ad8c88da8cb38217a6d62415ba37a->enter($__internal_9498c0bb071fb76208f22400b3bd5d1b384ad8c88da8cb38217a6d62415ba37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6eb1734bc636733779f3319db13dadb2669ec42cfd35bcf8dc691f75b0e6d5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb1734bc636733779f3319db13dadb2669ec42cfd35bcf8dc691f75b0e6d5a0->enter($__internal_6eb1734bc636733779f3319db13dadb2669ec42cfd35bcf8dc691f75b0e6d5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6eb1734bc636733779f3319db13dadb2669ec42cfd35bcf8dc691f75b0e6d5a0->leave($__internal_6eb1734bc636733779f3319db13dadb2669ec42cfd35bcf8dc691f75b0e6d5a0_prof);

        
        $__internal_9498c0bb071fb76208f22400b3bd5d1b384ad8c88da8cb38217a6d62415ba37a->leave($__internal_9498c0bb071fb76208f22400b3bd5d1b384ad8c88da8cb38217a6d62415ba37a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c391b9c835c77562d0a6242ad9e71506cffe279de61fe2d9273f42dbdf3a0536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c391b9c835c77562d0a6242ad9e71506cffe279de61fe2d9273f42dbdf3a0536->enter($__internal_c391b9c835c77562d0a6242ad9e71506cffe279de61fe2d9273f42dbdf3a0536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b051f59ad2fd8243b49f35b769da5a0aaddc9e091c2b842f7b09a03866448cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b051f59ad2fd8243b49f35b769da5a0aaddc9e091c2b842f7b09a03866448cb5->enter($__internal_b051f59ad2fd8243b49f35b769da5a0aaddc9e091c2b842f7b09a03866448cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b051f59ad2fd8243b49f35b769da5a0aaddc9e091c2b842f7b09a03866448cb5->leave($__internal_b051f59ad2fd8243b49f35b769da5a0aaddc9e091c2b842f7b09a03866448cb5_prof);

        
        $__internal_c391b9c835c77562d0a6242ad9e71506cffe279de61fe2d9273f42dbdf3a0536->leave($__internal_c391b9c835c77562d0a6242ad9e71506cffe279de61fe2d9273f42dbdf3a0536_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
