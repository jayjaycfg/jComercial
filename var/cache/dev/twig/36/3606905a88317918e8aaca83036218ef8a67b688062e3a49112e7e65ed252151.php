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
        $__internal_2f20c321776bd5856090acdd99a428c609aad2e06b9618fa35405723608a9be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f20c321776bd5856090acdd99a428c609aad2e06b9618fa35405723608a9be5->enter($__internal_2f20c321776bd5856090acdd99a428c609aad2e06b9618fa35405723608a9be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2e9ae2da6f11ec14216ada9b8083a7f836de446adff567efd15489a732aaca18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9ae2da6f11ec14216ada9b8083a7f836de446adff567efd15489a732aaca18->enter($__internal_2e9ae2da6f11ec14216ada9b8083a7f836de446adff567efd15489a732aaca18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f20c321776bd5856090acdd99a428c609aad2e06b9618fa35405723608a9be5->leave($__internal_2f20c321776bd5856090acdd99a428c609aad2e06b9618fa35405723608a9be5_prof);

        
        $__internal_2e9ae2da6f11ec14216ada9b8083a7f836de446adff567efd15489a732aaca18->leave($__internal_2e9ae2da6f11ec14216ada9b8083a7f836de446adff567efd15489a732aaca18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2388dc7a5e99a63624ffa511e1bb9dd9115c05dc22f6929b29f080506f326ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2388dc7a5e99a63624ffa511e1bb9dd9115c05dc22f6929b29f080506f326ba6->enter($__internal_2388dc7a5e99a63624ffa511e1bb9dd9115c05dc22f6929b29f080506f326ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6f589e90e04ba0dcb77ccd38c2bf4d35bbc142cd1a7edc8539dc322d093c318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f589e90e04ba0dcb77ccd38c2bf4d35bbc142cd1a7edc8539dc322d093c318->enter($__internal_d6f589e90e04ba0dcb77ccd38c2bf4d35bbc142cd1a7edc8539dc322d093c318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d6f589e90e04ba0dcb77ccd38c2bf4d35bbc142cd1a7edc8539dc322d093c318->leave($__internal_d6f589e90e04ba0dcb77ccd38c2bf4d35bbc142cd1a7edc8539dc322d093c318_prof);

        
        $__internal_2388dc7a5e99a63624ffa511e1bb9dd9115c05dc22f6929b29f080506f326ba6->leave($__internal_2388dc7a5e99a63624ffa511e1bb9dd9115c05dc22f6929b29f080506f326ba6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_341cf2802dcdd1448e2e57f9ecb7248c970c473db15970f455703282609bb470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341cf2802dcdd1448e2e57f9ecb7248c970c473db15970f455703282609bb470->enter($__internal_341cf2802dcdd1448e2e57f9ecb7248c970c473db15970f455703282609bb470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1289a46268d05c3fc091289cb376a6172e0dff6fa2fd9947125e9e7b7a764d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1289a46268d05c3fc091289cb376a6172e0dff6fa2fd9947125e9e7b7a764d40->enter($__internal_1289a46268d05c3fc091289cb376a6172e0dff6fa2fd9947125e9e7b7a764d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1289a46268d05c3fc091289cb376a6172e0dff6fa2fd9947125e9e7b7a764d40->leave($__internal_1289a46268d05c3fc091289cb376a6172e0dff6fa2fd9947125e9e7b7a764d40_prof);

        
        $__internal_341cf2802dcdd1448e2e57f9ecb7248c970c473db15970f455703282609bb470->leave($__internal_341cf2802dcdd1448e2e57f9ecb7248c970c473db15970f455703282609bb470_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd7a441338de87d129993003e55d4103cc5b0731a2c732d40d84cb6781ab6bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7a441338de87d129993003e55d4103cc5b0731a2c732d40d84cb6781ab6bd8->enter($__internal_bd7a441338de87d129993003e55d4103cc5b0731a2c732d40d84cb6781ab6bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5572ef807e0b74b88fc63df8dc70f46063c5e18575ca9d67ef4e8e0dea5ed52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5572ef807e0b74b88fc63df8dc70f46063c5e18575ca9d67ef4e8e0dea5ed52f->enter($__internal_5572ef807e0b74b88fc63df8dc70f46063c5e18575ca9d67ef4e8e0dea5ed52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5572ef807e0b74b88fc63df8dc70f46063c5e18575ca9d67ef4e8e0dea5ed52f->leave($__internal_5572ef807e0b74b88fc63df8dc70f46063c5e18575ca9d67ef4e8e0dea5ed52f_prof);

        
        $__internal_bd7a441338de87d129993003e55d4103cc5b0731a2c732d40d84cb6781ab6bd8->leave($__internal_bd7a441338de87d129993003e55d4103cc5b0731a2c732d40d84cb6781ab6bd8_prof);

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
