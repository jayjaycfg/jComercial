<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_993917c48ca918f86b830c3ddef5bb97c92f399305799a1bae14d5ef9da2bdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_6bd4a68b2a553a26c61c2851ce05d3f5e99a07d85e0815a23121d35faf5c9950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd4a68b2a553a26c61c2851ce05d3f5e99a07d85e0815a23121d35faf5c9950->enter($__internal_6bd4a68b2a553a26c61c2851ce05d3f5e99a07d85e0815a23121d35faf5c9950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c94270663aaa4ef17e55e914277c88758cda27dd3d316a17e23d341beecfebfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94270663aaa4ef17e55e914277c88758cda27dd3d316a17e23d341beecfebfc->enter($__internal_c94270663aaa4ef17e55e914277c88758cda27dd3d316a17e23d341beecfebfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd4a68b2a553a26c61c2851ce05d3f5e99a07d85e0815a23121d35faf5c9950->leave($__internal_6bd4a68b2a553a26c61c2851ce05d3f5e99a07d85e0815a23121d35faf5c9950_prof);

        
        $__internal_c94270663aaa4ef17e55e914277c88758cda27dd3d316a17e23d341beecfebfc->leave($__internal_c94270663aaa4ef17e55e914277c88758cda27dd3d316a17e23d341beecfebfc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16ddd4b4913cb881c17c1e0e9fa82be2139ae66989691335f2fd32de01b936c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ddd4b4913cb881c17c1e0e9fa82be2139ae66989691335f2fd32de01b936c7->enter($__internal_16ddd4b4913cb881c17c1e0e9fa82be2139ae66989691335f2fd32de01b936c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d69cb98ad5d8fc96c3248d430fe51fedade57015cd19bf01af5fa7e10dd2588f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69cb98ad5d8fc96c3248d430fe51fedade57015cd19bf01af5fa7e10dd2588f->enter($__internal_d69cb98ad5d8fc96c3248d430fe51fedade57015cd19bf01af5fa7e10dd2588f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d69cb98ad5d8fc96c3248d430fe51fedade57015cd19bf01af5fa7e10dd2588f->leave($__internal_d69cb98ad5d8fc96c3248d430fe51fedade57015cd19bf01af5fa7e10dd2588f_prof);

        
        $__internal_16ddd4b4913cb881c17c1e0e9fa82be2139ae66989691335f2fd32de01b936c7->leave($__internal_16ddd4b4913cb881c17c1e0e9fa82be2139ae66989691335f2fd32de01b936c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1be9132f6880e1386581827256cbd649bb6f4e3ca54cadcac2786a5cc5f5f17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be9132f6880e1386581827256cbd649bb6f4e3ca54cadcac2786a5cc5f5f17e->enter($__internal_1be9132f6880e1386581827256cbd649bb6f4e3ca54cadcac2786a5cc5f5f17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f284b0e0c4f27d29ca89e80c1c6e1a685836316af54d50a6b3b6f1a4c8c7eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f284b0e0c4f27d29ca89e80c1c6e1a685836316af54d50a6b3b6f1a4c8c7eb6->enter($__internal_0f284b0e0c4f27d29ca89e80c1c6e1a685836316af54d50a6b3b6f1a4c8c7eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f284b0e0c4f27d29ca89e80c1c6e1a685836316af54d50a6b3b6f1a4c8c7eb6->leave($__internal_0f284b0e0c4f27d29ca89e80c1c6e1a685836316af54d50a6b3b6f1a4c8c7eb6_prof);

        
        $__internal_1be9132f6880e1386581827256cbd649bb6f4e3ca54cadcac2786a5cc5f5f17e->leave($__internal_1be9132f6880e1386581827256cbd649bb6f4e3ca54cadcac2786a5cc5f5f17e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a987017851603748427d4fb6dd257adc8b68f079a65ca48d2d9343cdefe6f3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a987017851603748427d4fb6dd257adc8b68f079a65ca48d2d9343cdefe6f3c7->enter($__internal_a987017851603748427d4fb6dd257adc8b68f079a65ca48d2d9343cdefe6f3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fec78ba73fdd2fa8afc9ecd6ec3847e28b4e933a416f7f694564b01c8755c081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec78ba73fdd2fa8afc9ecd6ec3847e28b4e933a416f7f694564b01c8755c081->enter($__internal_fec78ba73fdd2fa8afc9ecd6ec3847e28b4e933a416f7f694564b01c8755c081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fec78ba73fdd2fa8afc9ecd6ec3847e28b4e933a416f7f694564b01c8755c081->leave($__internal_fec78ba73fdd2fa8afc9ecd6ec3847e28b4e933a416f7f694564b01c8755c081_prof);

        
        $__internal_a987017851603748427d4fb6dd257adc8b68f079a65ca48d2d9343cdefe6f3c7->leave($__internal_a987017851603748427d4fb6dd257adc8b68f079a65ca48d2d9343cdefe6f3c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
