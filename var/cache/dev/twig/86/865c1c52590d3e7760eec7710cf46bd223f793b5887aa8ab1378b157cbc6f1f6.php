<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_c24eaec74c1c1ac158170c138c2ad157d57dc0a5ce852531b6be7a57afc5a004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24eaec74c1c1ac158170c138c2ad157d57dc0a5ce852531b6be7a57afc5a004->enter($__internal_c24eaec74c1c1ac158170c138c2ad157d57dc0a5ce852531b6be7a57afc5a004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_98a2f90eeb74bda8179e6848c80c09befaba5e637511b7751576c2d1373f43e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a2f90eeb74bda8179e6848c80c09befaba5e637511b7751576c2d1373f43e5->enter($__internal_98a2f90eeb74bda8179e6848c80c09befaba5e637511b7751576c2d1373f43e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24eaec74c1c1ac158170c138c2ad157d57dc0a5ce852531b6be7a57afc5a004->leave($__internal_c24eaec74c1c1ac158170c138c2ad157d57dc0a5ce852531b6be7a57afc5a004_prof);

        
        $__internal_98a2f90eeb74bda8179e6848c80c09befaba5e637511b7751576c2d1373f43e5->leave($__internal_98a2f90eeb74bda8179e6848c80c09befaba5e637511b7751576c2d1373f43e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_27a4e2754e8502b76051b5d74b0325046ca3e8fbcedb26c65666686fafca32bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a4e2754e8502b76051b5d74b0325046ca3e8fbcedb26c65666686fafca32bb->enter($__internal_27a4e2754e8502b76051b5d74b0325046ca3e8fbcedb26c65666686fafca32bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c37afbac7099707285a30d5050480eb7d2c5d1a9a098efa11493667e1a16a860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37afbac7099707285a30d5050480eb7d2c5d1a9a098efa11493667e1a16a860->enter($__internal_c37afbac7099707285a30d5050480eb7d2c5d1a9a098efa11493667e1a16a860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c37afbac7099707285a30d5050480eb7d2c5d1a9a098efa11493667e1a16a860->leave($__internal_c37afbac7099707285a30d5050480eb7d2c5d1a9a098efa11493667e1a16a860_prof);

        
        $__internal_27a4e2754e8502b76051b5d74b0325046ca3e8fbcedb26c65666686fafca32bb->leave($__internal_27a4e2754e8502b76051b5d74b0325046ca3e8fbcedb26c65666686fafca32bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97cc7bac573ffb603b02c91e5e597bc66b6a5e24dce75d758105ebc3da43adbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cc7bac573ffb603b02c91e5e597bc66b6a5e24dce75d758105ebc3da43adbb->enter($__internal_97cc7bac573ffb603b02c91e5e597bc66b6a5e24dce75d758105ebc3da43adbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3be420fd9743a7bf5f52ddedcc563a5bdeea2d6791b059e09290e9e225e12bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be420fd9743a7bf5f52ddedcc563a5bdeea2d6791b059e09290e9e225e12bc6->enter($__internal_3be420fd9743a7bf5f52ddedcc563a5bdeea2d6791b059e09290e9e225e12bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3be420fd9743a7bf5f52ddedcc563a5bdeea2d6791b059e09290e9e225e12bc6->leave($__internal_3be420fd9743a7bf5f52ddedcc563a5bdeea2d6791b059e09290e9e225e12bc6_prof);

        
        $__internal_97cc7bac573ffb603b02c91e5e597bc66b6a5e24dce75d758105ebc3da43adbb->leave($__internal_97cc7bac573ffb603b02c91e5e597bc66b6a5e24dce75d758105ebc3da43adbb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7279a1240651e48ed8c71349f2e040d9ba819eb2f61cacf79f4aa8d66be51b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7279a1240651e48ed8c71349f2e040d9ba819eb2f61cacf79f4aa8d66be51b23->enter($__internal_7279a1240651e48ed8c71349f2e040d9ba819eb2f61cacf79f4aa8d66be51b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06cd6cac4340f59b4b754b4cdb79f32d044164ffbe0795dc9e8778391eb5dfd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cd6cac4340f59b4b754b4cdb79f32d044164ffbe0795dc9e8778391eb5dfd1->enter($__internal_06cd6cac4340f59b4b754b4cdb79f32d044164ffbe0795dc9e8778391eb5dfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06cd6cac4340f59b4b754b4cdb79f32d044164ffbe0795dc9e8778391eb5dfd1->leave($__internal_06cd6cac4340f59b4b754b4cdb79f32d044164ffbe0795dc9e8778391eb5dfd1_prof);

        
        $__internal_7279a1240651e48ed8c71349f2e040d9ba819eb2f61cacf79f4aa8d66be51b23->leave($__internal_7279a1240651e48ed8c71349f2e040d9ba819eb2f61cacf79f4aa8d66be51b23_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
