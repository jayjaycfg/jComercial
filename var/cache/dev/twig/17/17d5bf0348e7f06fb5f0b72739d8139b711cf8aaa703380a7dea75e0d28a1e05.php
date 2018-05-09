<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_728662cbd805e8566541b05a11817b9a1f7f918a21396142861ac60b682f8d70 extends Twig_Template
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
        $__internal_f83b063d50ed294faa909389d7354cfb539f5151f5e67924183212d9db7f4579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83b063d50ed294faa909389d7354cfb539f5151f5e67924183212d9db7f4579->enter($__internal_f83b063d50ed294faa909389d7354cfb539f5151f5e67924183212d9db7f4579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d4e891335211d7232e789515a9cad22eec1dde719242c755f8d93a61986f6cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e891335211d7232e789515a9cad22eec1dde719242c755f8d93a61986f6cda->enter($__internal_d4e891335211d7232e789515a9cad22eec1dde719242c755f8d93a61986f6cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83b063d50ed294faa909389d7354cfb539f5151f5e67924183212d9db7f4579->leave($__internal_f83b063d50ed294faa909389d7354cfb539f5151f5e67924183212d9db7f4579_prof);

        
        $__internal_d4e891335211d7232e789515a9cad22eec1dde719242c755f8d93a61986f6cda->leave($__internal_d4e891335211d7232e789515a9cad22eec1dde719242c755f8d93a61986f6cda_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d17f53e4a519b921efa3a2be7f339efc419665c2f0d8c748589f942c1eb9bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d17f53e4a519b921efa3a2be7f339efc419665c2f0d8c748589f942c1eb9bae->enter($__internal_7d17f53e4a519b921efa3a2be7f339efc419665c2f0d8c748589f942c1eb9bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5381d07d89772b15546db742b8876dc7e1c82164c3180c0ea8601ac487a250b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5381d07d89772b15546db742b8876dc7e1c82164c3180c0ea8601ac487a250b5->enter($__internal_5381d07d89772b15546db742b8876dc7e1c82164c3180c0ea8601ac487a250b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5381d07d89772b15546db742b8876dc7e1c82164c3180c0ea8601ac487a250b5->leave($__internal_5381d07d89772b15546db742b8876dc7e1c82164c3180c0ea8601ac487a250b5_prof);

        
        $__internal_7d17f53e4a519b921efa3a2be7f339efc419665c2f0d8c748589f942c1eb9bae->leave($__internal_7d17f53e4a519b921efa3a2be7f339efc419665c2f0d8c748589f942c1eb9bae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3fa365395da7daefc503b97b38942c1a0984c5413c908e9b6e3efce77f816a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fa365395da7daefc503b97b38942c1a0984c5413c908e9b6e3efce77f816a2->enter($__internal_d3fa365395da7daefc503b97b38942c1a0984c5413c908e9b6e3efce77f816a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a85885ea0e9b697cd51b6f09481b9067889ec98db5302e7c9dd0fdc1e93a816d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85885ea0e9b697cd51b6f09481b9067889ec98db5302e7c9dd0fdc1e93a816d->enter($__internal_a85885ea0e9b697cd51b6f09481b9067889ec98db5302e7c9dd0fdc1e93a816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a85885ea0e9b697cd51b6f09481b9067889ec98db5302e7c9dd0fdc1e93a816d->leave($__internal_a85885ea0e9b697cd51b6f09481b9067889ec98db5302e7c9dd0fdc1e93a816d_prof);

        
        $__internal_d3fa365395da7daefc503b97b38942c1a0984c5413c908e9b6e3efce77f816a2->leave($__internal_d3fa365395da7daefc503b97b38942c1a0984c5413c908e9b6e3efce77f816a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ac8820f85d85437d2a47fab9a19ed5b6ad6deb0905200b1dc936ce46eb560f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac8820f85d85437d2a47fab9a19ed5b6ad6deb0905200b1dc936ce46eb560f4->enter($__internal_5ac8820f85d85437d2a47fab9a19ed5b6ad6deb0905200b1dc936ce46eb560f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e7c540dec04325533dd972e563fe517b32457ed9a560a0a5c305fd9ea0a86e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7c540dec04325533dd972e563fe517b32457ed9a560a0a5c305fd9ea0a86e0->enter($__internal_4e7c540dec04325533dd972e563fe517b32457ed9a560a0a5c305fd9ea0a86e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e7c540dec04325533dd972e563fe517b32457ed9a560a0a5c305fd9ea0a86e0->leave($__internal_4e7c540dec04325533dd972e563fe517b32457ed9a560a0a5c305fd9ea0a86e0_prof);

        
        $__internal_5ac8820f85d85437d2a47fab9a19ed5b6ad6deb0905200b1dc936ce46eb560f4->leave($__internal_5ac8820f85d85437d2a47fab9a19ed5b6ad6deb0905200b1dc936ce46eb560f4_prof);

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
