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
        $__internal_e34176da621fcb86f3e5b3aa3713fcaff2da5a7a19ccb957a2f199649f5f764c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34176da621fcb86f3e5b3aa3713fcaff2da5a7a19ccb957a2f199649f5f764c->enter($__internal_e34176da621fcb86f3e5b3aa3713fcaff2da5a7a19ccb957a2f199649f5f764c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_79012817bf6b719bf75923c285d34e2eded5a57cd0fa2132a92ac9bdda7671fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79012817bf6b719bf75923c285d34e2eded5a57cd0fa2132a92ac9bdda7671fd->enter($__internal_79012817bf6b719bf75923c285d34e2eded5a57cd0fa2132a92ac9bdda7671fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34176da621fcb86f3e5b3aa3713fcaff2da5a7a19ccb957a2f199649f5f764c->leave($__internal_e34176da621fcb86f3e5b3aa3713fcaff2da5a7a19ccb957a2f199649f5f764c_prof);

        
        $__internal_79012817bf6b719bf75923c285d34e2eded5a57cd0fa2132a92ac9bdda7671fd->leave($__internal_79012817bf6b719bf75923c285d34e2eded5a57cd0fa2132a92ac9bdda7671fd_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_50fc02e62ca24cc6117a2d33c0ac2456e7b5f976c60275c95d7236072121107f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fc02e62ca24cc6117a2d33c0ac2456e7b5f976c60275c95d7236072121107f->enter($__internal_50fc02e62ca24cc6117a2d33c0ac2456e7b5f976c60275c95d7236072121107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5205a2fc26e7bb7cba2b1f94174efbff1129310b44b8b657a10c4304e0fc0e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5205a2fc26e7bb7cba2b1f94174efbff1129310b44b8b657a10c4304e0fc0e6a->enter($__internal_5205a2fc26e7bb7cba2b1f94174efbff1129310b44b8b657a10c4304e0fc0e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5205a2fc26e7bb7cba2b1f94174efbff1129310b44b8b657a10c4304e0fc0e6a->leave($__internal_5205a2fc26e7bb7cba2b1f94174efbff1129310b44b8b657a10c4304e0fc0e6a_prof);

        
        $__internal_50fc02e62ca24cc6117a2d33c0ac2456e7b5f976c60275c95d7236072121107f->leave($__internal_50fc02e62ca24cc6117a2d33c0ac2456e7b5f976c60275c95d7236072121107f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c0ce911704a903aaa6b9db9c7b415cf66e1b51896c9ccb91a8cb7aa5744d5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0ce911704a903aaa6b9db9c7b415cf66e1b51896c9ccb91a8cb7aa5744d5d3->enter($__internal_0c0ce911704a903aaa6b9db9c7b415cf66e1b51896c9ccb91a8cb7aa5744d5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_be70f3b46100e93cabe33f658ff1511e3379025d605dd7a0f87897beb98e300d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be70f3b46100e93cabe33f658ff1511e3379025d605dd7a0f87897beb98e300d->enter($__internal_be70f3b46100e93cabe33f658ff1511e3379025d605dd7a0f87897beb98e300d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_be70f3b46100e93cabe33f658ff1511e3379025d605dd7a0f87897beb98e300d->leave($__internal_be70f3b46100e93cabe33f658ff1511e3379025d605dd7a0f87897beb98e300d_prof);

        
        $__internal_0c0ce911704a903aaa6b9db9c7b415cf66e1b51896c9ccb91a8cb7aa5744d5d3->leave($__internal_0c0ce911704a903aaa6b9db9c7b415cf66e1b51896c9ccb91a8cb7aa5744d5d3_prof);

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
