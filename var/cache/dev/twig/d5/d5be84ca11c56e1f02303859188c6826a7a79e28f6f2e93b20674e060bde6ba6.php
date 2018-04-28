<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_1cb3c3ae34e6fdb9be047bbd48a11b21bfa8444f707c29dc538bf79c34ad1577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb3c3ae34e6fdb9be047bbd48a11b21bfa8444f707c29dc538bf79c34ad1577->enter($__internal_1cb3c3ae34e6fdb9be047bbd48a11b21bfa8444f707c29dc538bf79c34ad1577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9d07b3dd250ec768fa21a5911ffc8d37f68220f46b5bceb5970c248e6ec6299d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d07b3dd250ec768fa21a5911ffc8d37f68220f46b5bceb5970c248e6ec6299d->enter($__internal_9d07b3dd250ec768fa21a5911ffc8d37f68220f46b5bceb5970c248e6ec6299d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cb3c3ae34e6fdb9be047bbd48a11b21bfa8444f707c29dc538bf79c34ad1577->leave($__internal_1cb3c3ae34e6fdb9be047bbd48a11b21bfa8444f707c29dc538bf79c34ad1577_prof);

        
        $__internal_9d07b3dd250ec768fa21a5911ffc8d37f68220f46b5bceb5970c248e6ec6299d->leave($__internal_9d07b3dd250ec768fa21a5911ffc8d37f68220f46b5bceb5970c248e6ec6299d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8627436151357c3fb893accb21b5e52ddfb71d53dc8a4004fc55c20ce993ffb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8627436151357c3fb893accb21b5e52ddfb71d53dc8a4004fc55c20ce993ffb8->enter($__internal_8627436151357c3fb893accb21b5e52ddfb71d53dc8a4004fc55c20ce993ffb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd3cd8705fac62e03d3da858a10a91d7b6c42a5f368bd7024a5a00e4cfca44b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3cd8705fac62e03d3da858a10a91d7b6c42a5f368bd7024a5a00e4cfca44b9->enter($__internal_cd3cd8705fac62e03d3da858a10a91d7b6c42a5f368bd7024a5a00e4cfca44b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cd3cd8705fac62e03d3da858a10a91d7b6c42a5f368bd7024a5a00e4cfca44b9->leave($__internal_cd3cd8705fac62e03d3da858a10a91d7b6c42a5f368bd7024a5a00e4cfca44b9_prof);

        
        $__internal_8627436151357c3fb893accb21b5e52ddfb71d53dc8a4004fc55c20ce993ffb8->leave($__internal_8627436151357c3fb893accb21b5e52ddfb71d53dc8a4004fc55c20ce993ffb8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2057c4fec6faa1be9ad04a7ae323eaefd4bcf2fcf8d1ac56bab9383faba585e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2057c4fec6faa1be9ad04a7ae323eaefd4bcf2fcf8d1ac56bab9383faba585e->enter($__internal_b2057c4fec6faa1be9ad04a7ae323eaefd4bcf2fcf8d1ac56bab9383faba585e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_340ec38ee48010a3646232aa4d6c8387103e731a31d22ef66b5944b891e6ed28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340ec38ee48010a3646232aa4d6c8387103e731a31d22ef66b5944b891e6ed28->enter($__internal_340ec38ee48010a3646232aa4d6c8387103e731a31d22ef66b5944b891e6ed28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_340ec38ee48010a3646232aa4d6c8387103e731a31d22ef66b5944b891e6ed28->leave($__internal_340ec38ee48010a3646232aa4d6c8387103e731a31d22ef66b5944b891e6ed28_prof);

        
        $__internal_b2057c4fec6faa1be9ad04a7ae323eaefd4bcf2fcf8d1ac56bab9383faba585e->leave($__internal_b2057c4fec6faa1be9ad04a7ae323eaefd4bcf2fcf8d1ac56bab9383faba585e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f64856df9cdd0fa5e340ac1bd2bf45af7212d775997cda89f619b0e4bf0f2669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64856df9cdd0fa5e340ac1bd2bf45af7212d775997cda89f619b0e4bf0f2669->enter($__internal_f64856df9cdd0fa5e340ac1bd2bf45af7212d775997cda89f619b0e4bf0f2669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac2df0b5bd3e863fec2d712a4e3ca52860b72f8b2afac48b94c5ae35cbf6b6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2df0b5bd3e863fec2d712a4e3ca52860b72f8b2afac48b94c5ae35cbf6b6c7->enter($__internal_ac2df0b5bd3e863fec2d712a4e3ca52860b72f8b2afac48b94c5ae35cbf6b6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ac2df0b5bd3e863fec2d712a4e3ca52860b72f8b2afac48b94c5ae35cbf6b6c7->leave($__internal_ac2df0b5bd3e863fec2d712a4e3ca52860b72f8b2afac48b94c5ae35cbf6b6c7_prof);

        
        $__internal_f64856df9cdd0fa5e340ac1bd2bf45af7212d775997cda89f619b0e4bf0f2669->leave($__internal_f64856df9cdd0fa5e340ac1bd2bf45af7212d775997cda89f619b0e4bf0f2669_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
