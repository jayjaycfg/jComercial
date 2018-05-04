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
        $__internal_df38f98fe2a3260d2f234141a78095f6f9e51dbed071c3b1c9874b3b4299fd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df38f98fe2a3260d2f234141a78095f6f9e51dbed071c3b1c9874b3b4299fd8b->enter($__internal_df38f98fe2a3260d2f234141a78095f6f9e51dbed071c3b1c9874b3b4299fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_665893f6f1262e07e49c750528da527fb3f0a1d0ad8d8d2b3946a4d9cbbba85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665893f6f1262e07e49c750528da527fb3f0a1d0ad8d8d2b3946a4d9cbbba85a->enter($__internal_665893f6f1262e07e49c750528da527fb3f0a1d0ad8d8d2b3946a4d9cbbba85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df38f98fe2a3260d2f234141a78095f6f9e51dbed071c3b1c9874b3b4299fd8b->leave($__internal_df38f98fe2a3260d2f234141a78095f6f9e51dbed071c3b1c9874b3b4299fd8b_prof);

        
        $__internal_665893f6f1262e07e49c750528da527fb3f0a1d0ad8d8d2b3946a4d9cbbba85a->leave($__internal_665893f6f1262e07e49c750528da527fb3f0a1d0ad8d8d2b3946a4d9cbbba85a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc0a114c61168bdfc65da570dc953825ee165a74f9b3440d9fd061daa805a736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0a114c61168bdfc65da570dc953825ee165a74f9b3440d9fd061daa805a736->enter($__internal_fc0a114c61168bdfc65da570dc953825ee165a74f9b3440d9fd061daa805a736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b10843825f57b9fd7fac3cf936e3b262dd5f014c19804015e41e35c854bfbd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10843825f57b9fd7fac3cf936e3b262dd5f014c19804015e41e35c854bfbd03->enter($__internal_b10843825f57b9fd7fac3cf936e3b262dd5f014c19804015e41e35c854bfbd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b10843825f57b9fd7fac3cf936e3b262dd5f014c19804015e41e35c854bfbd03->leave($__internal_b10843825f57b9fd7fac3cf936e3b262dd5f014c19804015e41e35c854bfbd03_prof);

        
        $__internal_fc0a114c61168bdfc65da570dc953825ee165a74f9b3440d9fd061daa805a736->leave($__internal_fc0a114c61168bdfc65da570dc953825ee165a74f9b3440d9fd061daa805a736_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a55c479ab0ff5442bc216ad05c9612eaf61ddb4c5298591011dd8055983dc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a55c479ab0ff5442bc216ad05c9612eaf61ddb4c5298591011dd8055983dc67->enter($__internal_4a55c479ab0ff5442bc216ad05c9612eaf61ddb4c5298591011dd8055983dc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90f0211e850629c0c42a7420a886c3750b3a18cbb6c875547cbc46d4131e3364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f0211e850629c0c42a7420a886c3750b3a18cbb6c875547cbc46d4131e3364->enter($__internal_90f0211e850629c0c42a7420a886c3750b3a18cbb6c875547cbc46d4131e3364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_90f0211e850629c0c42a7420a886c3750b3a18cbb6c875547cbc46d4131e3364->leave($__internal_90f0211e850629c0c42a7420a886c3750b3a18cbb6c875547cbc46d4131e3364_prof);

        
        $__internal_4a55c479ab0ff5442bc216ad05c9612eaf61ddb4c5298591011dd8055983dc67->leave($__internal_4a55c479ab0ff5442bc216ad05c9612eaf61ddb4c5298591011dd8055983dc67_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_005f9f3633da2a5424101d51205acec0ac9b1cbaa00d571ea887486837a14e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005f9f3633da2a5424101d51205acec0ac9b1cbaa00d571ea887486837a14e69->enter($__internal_005f9f3633da2a5424101d51205acec0ac9b1cbaa00d571ea887486837a14e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2c3ca2b8a0bea71109923a2278cc333ecc1d404478df844ec8e9a57f97c1691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c3ca2b8a0bea71109923a2278cc333ecc1d404478df844ec8e9a57f97c1691->enter($__internal_f2c3ca2b8a0bea71109923a2278cc333ecc1d404478df844ec8e9a57f97c1691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f2c3ca2b8a0bea71109923a2278cc333ecc1d404478df844ec8e9a57f97c1691->leave($__internal_f2c3ca2b8a0bea71109923a2278cc333ecc1d404478df844ec8e9a57f97c1691_prof);

        
        $__internal_005f9f3633da2a5424101d51205acec0ac9b1cbaa00d571ea887486837a14e69->leave($__internal_005f9f3633da2a5424101d51205acec0ac9b1cbaa00d571ea887486837a14e69_prof);

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
