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
        $__internal_d982d7bc0f77ab384861a9d83b4c6d1758412201d2129e784446284022011818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d982d7bc0f77ab384861a9d83b4c6d1758412201d2129e784446284022011818->enter($__internal_d982d7bc0f77ab384861a9d83b4c6d1758412201d2129e784446284022011818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2cfc06596984701ccef0a9bd92318b6bac7b0b44fc7ee9e87f8969ea50532b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfc06596984701ccef0a9bd92318b6bac7b0b44fc7ee9e87f8969ea50532b90->enter($__internal_2cfc06596984701ccef0a9bd92318b6bac7b0b44fc7ee9e87f8969ea50532b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d982d7bc0f77ab384861a9d83b4c6d1758412201d2129e784446284022011818->leave($__internal_d982d7bc0f77ab384861a9d83b4c6d1758412201d2129e784446284022011818_prof);

        
        $__internal_2cfc06596984701ccef0a9bd92318b6bac7b0b44fc7ee9e87f8969ea50532b90->leave($__internal_2cfc06596984701ccef0a9bd92318b6bac7b0b44fc7ee9e87f8969ea50532b90_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7ac626302030c7459a8d9946b9dfd24c1b0993f010eec43881b035d3ecdf6fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac626302030c7459a8d9946b9dfd24c1b0993f010eec43881b035d3ecdf6fad->enter($__internal_7ac626302030c7459a8d9946b9dfd24c1b0993f010eec43881b035d3ecdf6fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0394b021e4ef60d3a0ffbe34bc5faa8270a88a492f91c89f131555f630527641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0394b021e4ef60d3a0ffbe34bc5faa8270a88a492f91c89f131555f630527641->enter($__internal_0394b021e4ef60d3a0ffbe34bc5faa8270a88a492f91c89f131555f630527641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_0394b021e4ef60d3a0ffbe34bc5faa8270a88a492f91c89f131555f630527641->leave($__internal_0394b021e4ef60d3a0ffbe34bc5faa8270a88a492f91c89f131555f630527641_prof);

        
        $__internal_7ac626302030c7459a8d9946b9dfd24c1b0993f010eec43881b035d3ecdf6fad->leave($__internal_7ac626302030c7459a8d9946b9dfd24c1b0993f010eec43881b035d3ecdf6fad_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cec92490a09ff9403f92301b88e35494d7cd12c53bf1424656caf7ca21c6cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cec92490a09ff9403f92301b88e35494d7cd12c53bf1424656caf7ca21c6cc4->enter($__internal_1cec92490a09ff9403f92301b88e35494d7cd12c53bf1424656caf7ca21c6cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_546defa061546fc70d195c1174e7226765cc82ae0dddcdbcf50982cf9541f224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546defa061546fc70d195c1174e7226765cc82ae0dddcdbcf50982cf9541f224->enter($__internal_546defa061546fc70d195c1174e7226765cc82ae0dddcdbcf50982cf9541f224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_546defa061546fc70d195c1174e7226765cc82ae0dddcdbcf50982cf9541f224->leave($__internal_546defa061546fc70d195c1174e7226765cc82ae0dddcdbcf50982cf9541f224_prof);

        
        $__internal_1cec92490a09ff9403f92301b88e35494d7cd12c53bf1424656caf7ca21c6cc4->leave($__internal_1cec92490a09ff9403f92301b88e35494d7cd12c53bf1424656caf7ca21c6cc4_prof);

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
