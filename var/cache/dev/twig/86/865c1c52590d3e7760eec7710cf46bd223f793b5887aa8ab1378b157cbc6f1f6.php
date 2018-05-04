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
        $__internal_eeeb6710d68215cbbd9035bed7728ad7dca6b2fafc25a95385a95f5400347882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeeb6710d68215cbbd9035bed7728ad7dca6b2fafc25a95385a95f5400347882->enter($__internal_eeeb6710d68215cbbd9035bed7728ad7dca6b2fafc25a95385a95f5400347882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_6278e686072dafa46e19a0b7a626b64b09120298cc029f0c78d41c81923e5119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6278e686072dafa46e19a0b7a626b64b09120298cc029f0c78d41c81923e5119->enter($__internal_6278e686072dafa46e19a0b7a626b64b09120298cc029f0c78d41c81923e5119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeeb6710d68215cbbd9035bed7728ad7dca6b2fafc25a95385a95f5400347882->leave($__internal_eeeb6710d68215cbbd9035bed7728ad7dca6b2fafc25a95385a95f5400347882_prof);

        
        $__internal_6278e686072dafa46e19a0b7a626b64b09120298cc029f0c78d41c81923e5119->leave($__internal_6278e686072dafa46e19a0b7a626b64b09120298cc029f0c78d41c81923e5119_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a73f451cfda830264d0d803fbdddff709077d2bc354797f461f91736385b2221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73f451cfda830264d0d803fbdddff709077d2bc354797f461f91736385b2221->enter($__internal_a73f451cfda830264d0d803fbdddff709077d2bc354797f461f91736385b2221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d70dabfbb17b6a8814789c1474b07526900a2bb18b8b1b7ca834e1d04d6d0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d70dabfbb17b6a8814789c1474b07526900a2bb18b8b1b7ca834e1d04d6d0a0->enter($__internal_6d70dabfbb17b6a8814789c1474b07526900a2bb18b8b1b7ca834e1d04d6d0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d70dabfbb17b6a8814789c1474b07526900a2bb18b8b1b7ca834e1d04d6d0a0->leave($__internal_6d70dabfbb17b6a8814789c1474b07526900a2bb18b8b1b7ca834e1d04d6d0a0_prof);

        
        $__internal_a73f451cfda830264d0d803fbdddff709077d2bc354797f461f91736385b2221->leave($__internal_a73f451cfda830264d0d803fbdddff709077d2bc354797f461f91736385b2221_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4322b4bf0de2dd5a951b58357fe62a3052b8e0402eabfb366e99c74f246ffa7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4322b4bf0de2dd5a951b58357fe62a3052b8e0402eabfb366e99c74f246ffa7b->enter($__internal_4322b4bf0de2dd5a951b58357fe62a3052b8e0402eabfb366e99c74f246ffa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5fa04220637a2cc1040bf4c2fc57c951379b023a170f0dfaf103d9b6b332a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fa04220637a2cc1040bf4c2fc57c951379b023a170f0dfaf103d9b6b332a9d->enter($__internal_f5fa04220637a2cc1040bf4c2fc57c951379b023a170f0dfaf103d9b6b332a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5fa04220637a2cc1040bf4c2fc57c951379b023a170f0dfaf103d9b6b332a9d->leave($__internal_f5fa04220637a2cc1040bf4c2fc57c951379b023a170f0dfaf103d9b6b332a9d_prof);

        
        $__internal_4322b4bf0de2dd5a951b58357fe62a3052b8e0402eabfb366e99c74f246ffa7b->leave($__internal_4322b4bf0de2dd5a951b58357fe62a3052b8e0402eabfb366e99c74f246ffa7b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ebeb4abc5d439a2600ec3fa07d197dc3dea9e971a24c19f5b18dea932c9e43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebeb4abc5d439a2600ec3fa07d197dc3dea9e971a24c19f5b18dea932c9e43d->enter($__internal_8ebeb4abc5d439a2600ec3fa07d197dc3dea9e971a24c19f5b18dea932c9e43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9c76f4b3e571cdc2b5899b5f22a4fa20dbf2e62cb4a01350e070dce53c20c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c76f4b3e571cdc2b5899b5f22a4fa20dbf2e62cb4a01350e070dce53c20c52->enter($__internal_a9c76f4b3e571cdc2b5899b5f22a4fa20dbf2e62cb4a01350e070dce53c20c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9c76f4b3e571cdc2b5899b5f22a4fa20dbf2e62cb4a01350e070dce53c20c52->leave($__internal_a9c76f4b3e571cdc2b5899b5f22a4fa20dbf2e62cb4a01350e070dce53c20c52_prof);

        
        $__internal_8ebeb4abc5d439a2600ec3fa07d197dc3dea9e971a24c19f5b18dea932c9e43d->leave($__internal_8ebeb4abc5d439a2600ec3fa07d197dc3dea9e971a24c19f5b18dea932c9e43d_prof);

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
