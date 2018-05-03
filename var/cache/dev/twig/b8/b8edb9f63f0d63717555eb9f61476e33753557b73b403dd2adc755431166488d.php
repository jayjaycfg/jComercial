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
        $__internal_0bc34152e136ba1363c1e5bbbb184778e40979961a7df4d8e4835fbe1d484617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc34152e136ba1363c1e5bbbb184778e40979961a7df4d8e4835fbe1d484617->enter($__internal_0bc34152e136ba1363c1e5bbbb184778e40979961a7df4d8e4835fbe1d484617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_72f2c006007f4ecdbe83ebe2971b65deb727bcf637cec6c7018b999b20c3876a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f2c006007f4ecdbe83ebe2971b65deb727bcf637cec6c7018b999b20c3876a->enter($__internal_72f2c006007f4ecdbe83ebe2971b65deb727bcf637cec6c7018b999b20c3876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc34152e136ba1363c1e5bbbb184778e40979961a7df4d8e4835fbe1d484617->leave($__internal_0bc34152e136ba1363c1e5bbbb184778e40979961a7df4d8e4835fbe1d484617_prof);

        
        $__internal_72f2c006007f4ecdbe83ebe2971b65deb727bcf637cec6c7018b999b20c3876a->leave($__internal_72f2c006007f4ecdbe83ebe2971b65deb727bcf637cec6c7018b999b20c3876a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3fdf4c1043e1c38af779f702c792051c94ad2da8eb34a1f0663011c462d0e3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdf4c1043e1c38af779f702c792051c94ad2da8eb34a1f0663011c462d0e3fa->enter($__internal_3fdf4c1043e1c38af779f702c792051c94ad2da8eb34a1f0663011c462d0e3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e11f2473a34da9cbb3326f5000152c14c20d452629bfcc3319b3be0e170767f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11f2473a34da9cbb3326f5000152c14c20d452629bfcc3319b3be0e170767f6->enter($__internal_e11f2473a34da9cbb3326f5000152c14c20d452629bfcc3319b3be0e170767f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e11f2473a34da9cbb3326f5000152c14c20d452629bfcc3319b3be0e170767f6->leave($__internal_e11f2473a34da9cbb3326f5000152c14c20d452629bfcc3319b3be0e170767f6_prof);

        
        $__internal_3fdf4c1043e1c38af779f702c792051c94ad2da8eb34a1f0663011c462d0e3fa->leave($__internal_3fdf4c1043e1c38af779f702c792051c94ad2da8eb34a1f0663011c462d0e3fa_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9228e14d31ca0e5039fe92c804b622b348cf1766a0664137e17a8f00c460a635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9228e14d31ca0e5039fe92c804b622b348cf1766a0664137e17a8f00c460a635->enter($__internal_9228e14d31ca0e5039fe92c804b622b348cf1766a0664137e17a8f00c460a635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d96d610bc56530501cb5059861e13b1f9d836bda8d50685d2c1d7cf2f750c499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96d610bc56530501cb5059861e13b1f9d836bda8d50685d2c1d7cf2f750c499->enter($__internal_d96d610bc56530501cb5059861e13b1f9d836bda8d50685d2c1d7cf2f750c499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d96d610bc56530501cb5059861e13b1f9d836bda8d50685d2c1d7cf2f750c499->leave($__internal_d96d610bc56530501cb5059861e13b1f9d836bda8d50685d2c1d7cf2f750c499_prof);

        
        $__internal_9228e14d31ca0e5039fe92c804b622b348cf1766a0664137e17a8f00c460a635->leave($__internal_9228e14d31ca0e5039fe92c804b622b348cf1766a0664137e17a8f00c460a635_prof);

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
