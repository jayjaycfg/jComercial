<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d29c1fe4cc9503bdd927e6b599a9e83d62534ec5269ffab66d1abd1ee93b42aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_4e5a0b4465fda3dc44c83319de958749c7c571d97ae139a6e098c7de67d8781b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5a0b4465fda3dc44c83319de958749c7c571d97ae139a6e098c7de67d8781b->enter($__internal_4e5a0b4465fda3dc44c83319de958749c7c571d97ae139a6e098c7de67d8781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_465cafc60b7ec5cc511ad91e7962eb0d9ee6dbd769fb624e37aad7bf3eed032d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465cafc60b7ec5cc511ad91e7962eb0d9ee6dbd769fb624e37aad7bf3eed032d->enter($__internal_465cafc60b7ec5cc511ad91e7962eb0d9ee6dbd769fb624e37aad7bf3eed032d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e5a0b4465fda3dc44c83319de958749c7c571d97ae139a6e098c7de67d8781b->leave($__internal_4e5a0b4465fda3dc44c83319de958749c7c571d97ae139a6e098c7de67d8781b_prof);

        
        $__internal_465cafc60b7ec5cc511ad91e7962eb0d9ee6dbd769fb624e37aad7bf3eed032d->leave($__internal_465cafc60b7ec5cc511ad91e7962eb0d9ee6dbd769fb624e37aad7bf3eed032d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf0fdd166885dc5ecce08418761b07734fb0cf375bf1c5f16b4c43fe8e146490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0fdd166885dc5ecce08418761b07734fb0cf375bf1c5f16b4c43fe8e146490->enter($__internal_bf0fdd166885dc5ecce08418761b07734fb0cf375bf1c5f16b4c43fe8e146490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0612331b85e095ef55e064a77976c720535f65b0900f4d544fe11622c52afe94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0612331b85e095ef55e064a77976c720535f65b0900f4d544fe11622c52afe94->enter($__internal_0612331b85e095ef55e064a77976c720535f65b0900f4d544fe11622c52afe94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0612331b85e095ef55e064a77976c720535f65b0900f4d544fe11622c52afe94->leave($__internal_0612331b85e095ef55e064a77976c720535f65b0900f4d544fe11622c52afe94_prof);

        
        $__internal_bf0fdd166885dc5ecce08418761b07734fb0cf375bf1c5f16b4c43fe8e146490->leave($__internal_bf0fdd166885dc5ecce08418761b07734fb0cf375bf1c5f16b4c43fe8e146490_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2479cd242c769a5c7f798bcc632c72850e7da7326e1116a755b73f23f8b88705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2479cd242c769a5c7f798bcc632c72850e7da7326e1116a755b73f23f8b88705->enter($__internal_2479cd242c769a5c7f798bcc632c72850e7da7326e1116a755b73f23f8b88705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b96849727211444aaecf458f1a2d3716c5072f2129e63f0d1ba93d3be5bf0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b96849727211444aaecf458f1a2d3716c5072f2129e63f0d1ba93d3be5bf0ad->enter($__internal_2b96849727211444aaecf458f1a2d3716c5072f2129e63f0d1ba93d3be5bf0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2b96849727211444aaecf458f1a2d3716c5072f2129e63f0d1ba93d3be5bf0ad->leave($__internal_2b96849727211444aaecf458f1a2d3716c5072f2129e63f0d1ba93d3be5bf0ad_prof);

        
        $__internal_2479cd242c769a5c7f798bcc632c72850e7da7326e1116a755b73f23f8b88705->leave($__internal_2479cd242c769a5c7f798bcc632c72850e7da7326e1116a755b73f23f8b88705_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c65cc4b9fc1beedd73f30dda4b83dd4839852a2d7cf7ad1d996f42541b5173c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65cc4b9fc1beedd73f30dda4b83dd4839852a2d7cf7ad1d996f42541b5173c4->enter($__internal_c65cc4b9fc1beedd73f30dda4b83dd4839852a2d7cf7ad1d996f42541b5173c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e9c2ce6b9fa32f14171754a383297204f2428494bb0086ac3eee0b37719829b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9c2ce6b9fa32f14171754a383297204f2428494bb0086ac3eee0b37719829b->enter($__internal_4e9c2ce6b9fa32f14171754a383297204f2428494bb0086ac3eee0b37719829b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4e9c2ce6b9fa32f14171754a383297204f2428494bb0086ac3eee0b37719829b->leave($__internal_4e9c2ce6b9fa32f14171754a383297204f2428494bb0086ac3eee0b37719829b_prof);

        
        $__internal_c65cc4b9fc1beedd73f30dda4b83dd4839852a2d7cf7ad1d996f42541b5173c4->leave($__internal_c65cc4b9fc1beedd73f30dda4b83dd4839852a2d7cf7ad1d996f42541b5173c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
