<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0929d9868791768b169ac10cf6bcad6711ad2a7787eed82784dad53d8fd45697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0929d9868791768b169ac10cf6bcad6711ad2a7787eed82784dad53d8fd45697->enter($__internal_0929d9868791768b169ac10cf6bcad6711ad2a7787eed82784dad53d8fd45697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2119a90652ece4ba1b87f029d370cd3a1796da9366fe69dc4bf294e19c386f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2119a90652ece4ba1b87f029d370cd3a1796da9366fe69dc4bf294e19c386f2c->enter($__internal_2119a90652ece4ba1b87f029d370cd3a1796da9366fe69dc4bf294e19c386f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0929d9868791768b169ac10cf6bcad6711ad2a7787eed82784dad53d8fd45697->leave($__internal_0929d9868791768b169ac10cf6bcad6711ad2a7787eed82784dad53d8fd45697_prof);

        
        $__internal_2119a90652ece4ba1b87f029d370cd3a1796da9366fe69dc4bf294e19c386f2c->leave($__internal_2119a90652ece4ba1b87f029d370cd3a1796da9366fe69dc4bf294e19c386f2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efa15e94343ff4810623825c1aa6b18a86f4102d3436b66c56971a05e24e3fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa15e94343ff4810623825c1aa6b18a86f4102d3436b66c56971a05e24e3fd2->enter($__internal_efa15e94343ff4810623825c1aa6b18a86f4102d3436b66c56971a05e24e3fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_683a2b2290d3f586ecf0624513037708a53564b0358dc04cbcf9de27152b647e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683a2b2290d3f586ecf0624513037708a53564b0358dc04cbcf9de27152b647e->enter($__internal_683a2b2290d3f586ecf0624513037708a53564b0358dc04cbcf9de27152b647e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_683a2b2290d3f586ecf0624513037708a53564b0358dc04cbcf9de27152b647e->leave($__internal_683a2b2290d3f586ecf0624513037708a53564b0358dc04cbcf9de27152b647e_prof);

        
        $__internal_efa15e94343ff4810623825c1aa6b18a86f4102d3436b66c56971a05e24e3fd2->leave($__internal_efa15e94343ff4810623825c1aa6b18a86f4102d3436b66c56971a05e24e3fd2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_146595998dae8963a60d1406d61c512d2f792151f48b11b9a7843fa027a796b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146595998dae8963a60d1406d61c512d2f792151f48b11b9a7843fa027a796b7->enter($__internal_146595998dae8963a60d1406d61c512d2f792151f48b11b9a7843fa027a796b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_978f2cac2843a2350648ca4f17a0129a7cdc3cdb05f68a196cce89313718e52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978f2cac2843a2350648ca4f17a0129a7cdc3cdb05f68a196cce89313718e52c->enter($__internal_978f2cac2843a2350648ca4f17a0129a7cdc3cdb05f68a196cce89313718e52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_978f2cac2843a2350648ca4f17a0129a7cdc3cdb05f68a196cce89313718e52c->leave($__internal_978f2cac2843a2350648ca4f17a0129a7cdc3cdb05f68a196cce89313718e52c_prof);

        
        $__internal_146595998dae8963a60d1406d61c512d2f792151f48b11b9a7843fa027a796b7->leave($__internal_146595998dae8963a60d1406d61c512d2f792151f48b11b9a7843fa027a796b7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_511bb33bb33834a9d6ac9c86e1364f51b6cef9881ee69b180f9c31eb8ac83e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511bb33bb33834a9d6ac9c86e1364f51b6cef9881ee69b180f9c31eb8ac83e19->enter($__internal_511bb33bb33834a9d6ac9c86e1364f51b6cef9881ee69b180f9c31eb8ac83e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_497d2e02d0c5316e558944b22fbb2b3a9a3ed8dfba715fcf03cb4e8f5c8862b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497d2e02d0c5316e558944b22fbb2b3a9a3ed8dfba715fcf03cb4e8f5c8862b6->enter($__internal_497d2e02d0c5316e558944b22fbb2b3a9a3ed8dfba715fcf03cb4e8f5c8862b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_497d2e02d0c5316e558944b22fbb2b3a9a3ed8dfba715fcf03cb4e8f5c8862b6->leave($__internal_497d2e02d0c5316e558944b22fbb2b3a9a3ed8dfba715fcf03cb4e8f5c8862b6_prof);

        
        $__internal_511bb33bb33834a9d6ac9c86e1364f51b6cef9881ee69b180f9c31eb8ac83e19->leave($__internal_511bb33bb33834a9d6ac9c86e1364f51b6cef9881ee69b180f9c31eb8ac83e19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
