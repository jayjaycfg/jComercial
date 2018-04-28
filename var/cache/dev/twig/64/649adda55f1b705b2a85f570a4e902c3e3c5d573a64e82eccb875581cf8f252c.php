<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2293e0c2e5c5c20159552978a4a5ab00bf5b653aa0a152989e32fa030619a173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2293e0c2e5c5c20159552978a4a5ab00bf5b653aa0a152989e32fa030619a173->enter($__internal_2293e0c2e5c5c20159552978a4a5ab00bf5b653aa0a152989e32fa030619a173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ecf577f843f566f33d56d21b6454f04f4e49d9294f0465b63a4946fe5eb9af99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf577f843f566f33d56d21b6454f04f4e49d9294f0465b63a4946fe5eb9af99->enter($__internal_ecf577f843f566f33d56d21b6454f04f4e49d9294f0465b63a4946fe5eb9af99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2293e0c2e5c5c20159552978a4a5ab00bf5b653aa0a152989e32fa030619a173->leave($__internal_2293e0c2e5c5c20159552978a4a5ab00bf5b653aa0a152989e32fa030619a173_prof);

        
        $__internal_ecf577f843f566f33d56d21b6454f04f4e49d9294f0465b63a4946fe5eb9af99->leave($__internal_ecf577f843f566f33d56d21b6454f04f4e49d9294f0465b63a4946fe5eb9af99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c79f0cc0ec7e479d5677abe40aec2de39ae149d3669bb5bd218476cb3b4be83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c79f0cc0ec7e479d5677abe40aec2de39ae149d3669bb5bd218476cb3b4be83->enter($__internal_5c79f0cc0ec7e479d5677abe40aec2de39ae149d3669bb5bd218476cb3b4be83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7ea772694d285672cf623f7c6121756da0ca004d4830e6ae1348298a44218ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea772694d285672cf623f7c6121756da0ca004d4830e6ae1348298a44218ef5->enter($__internal_7ea772694d285672cf623f7c6121756da0ca004d4830e6ae1348298a44218ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ea772694d285672cf623f7c6121756da0ca004d4830e6ae1348298a44218ef5->leave($__internal_7ea772694d285672cf623f7c6121756da0ca004d4830e6ae1348298a44218ef5_prof);

        
        $__internal_5c79f0cc0ec7e479d5677abe40aec2de39ae149d3669bb5bd218476cb3b4be83->leave($__internal_5c79f0cc0ec7e479d5677abe40aec2de39ae149d3669bb5bd218476cb3b4be83_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c3b92b92971e4e4f7004070004d97a940b78359b93be461a5a2209f44a6e91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3b92b92971e4e4f7004070004d97a940b78359b93be461a5a2209f44a6e91b->enter($__internal_5c3b92b92971e4e4f7004070004d97a940b78359b93be461a5a2209f44a6e91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91ceffdcaee96f1a3a71bbd574899018521d798888557dbd97b4efad620d5062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ceffdcaee96f1a3a71bbd574899018521d798888557dbd97b4efad620d5062->enter($__internal_91ceffdcaee96f1a3a71bbd574899018521d798888557dbd97b4efad620d5062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91ceffdcaee96f1a3a71bbd574899018521d798888557dbd97b4efad620d5062->leave($__internal_91ceffdcaee96f1a3a71bbd574899018521d798888557dbd97b4efad620d5062_prof);

        
        $__internal_5c3b92b92971e4e4f7004070004d97a940b78359b93be461a5a2209f44a6e91b->leave($__internal_5c3b92b92971e4e4f7004070004d97a940b78359b93be461a5a2209f44a6e91b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0adacc1be8f7c35f4d40982e713f8ffceadd89daf644ba3599e9772769935247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adacc1be8f7c35f4d40982e713f8ffceadd89daf644ba3599e9772769935247->enter($__internal_0adacc1be8f7c35f4d40982e713f8ffceadd89daf644ba3599e9772769935247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3832b11561534d1623802c6b037cb44bf7633df20ea284b8b519db696d64fe22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3832b11561534d1623802c6b037cb44bf7633df20ea284b8b519db696d64fe22->enter($__internal_3832b11561534d1623802c6b037cb44bf7633df20ea284b8b519db696d64fe22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3832b11561534d1623802c6b037cb44bf7633df20ea284b8b519db696d64fe22->leave($__internal_3832b11561534d1623802c6b037cb44bf7633df20ea284b8b519db696d64fe22_prof);

        
        $__internal_0adacc1be8f7c35f4d40982e713f8ffceadd89daf644ba3599e9772769935247->leave($__internal_0adacc1be8f7c35f4d40982e713f8ffceadd89daf644ba3599e9772769935247_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
