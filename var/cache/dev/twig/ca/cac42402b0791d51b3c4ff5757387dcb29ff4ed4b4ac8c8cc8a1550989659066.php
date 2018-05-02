<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7a56631aec9ecc9a55b7dfb35d6581121066a4fb4cae0634e626cb86147c0ba2 extends Twig_Template
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
        $__internal_07fa6a93e068ccc472b72b9dc6b34725dc33fa395a6c3f15652716485751c6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fa6a93e068ccc472b72b9dc6b34725dc33fa395a6c3f15652716485751c6ba->enter($__internal_07fa6a93e068ccc472b72b9dc6b34725dc33fa395a6c3f15652716485751c6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_42afbb52e8f656bf5d1ea0b1a6919593a9fdea31c8c4cc32bd2dab644ccf3fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42afbb52e8f656bf5d1ea0b1a6919593a9fdea31c8c4cc32bd2dab644ccf3fb7->enter($__internal_42afbb52e8f656bf5d1ea0b1a6919593a9fdea31c8c4cc32bd2dab644ccf3fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07fa6a93e068ccc472b72b9dc6b34725dc33fa395a6c3f15652716485751c6ba->leave($__internal_07fa6a93e068ccc472b72b9dc6b34725dc33fa395a6c3f15652716485751c6ba_prof);

        
        $__internal_42afbb52e8f656bf5d1ea0b1a6919593a9fdea31c8c4cc32bd2dab644ccf3fb7->leave($__internal_42afbb52e8f656bf5d1ea0b1a6919593a9fdea31c8c4cc32bd2dab644ccf3fb7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_640f737f5a97f0b142865538e6d5c852d86f373bb9547f73501071222bc7b251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640f737f5a97f0b142865538e6d5c852d86f373bb9547f73501071222bc7b251->enter($__internal_640f737f5a97f0b142865538e6d5c852d86f373bb9547f73501071222bc7b251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9714d00e395b6f94a56b59f904845a9e95b5a34c9ab41577a31b3a5247b38d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9714d00e395b6f94a56b59f904845a9e95b5a34c9ab41577a31b3a5247b38d4->enter($__internal_a9714d00e395b6f94a56b59f904845a9e95b5a34c9ab41577a31b3a5247b38d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a9714d00e395b6f94a56b59f904845a9e95b5a34c9ab41577a31b3a5247b38d4->leave($__internal_a9714d00e395b6f94a56b59f904845a9e95b5a34c9ab41577a31b3a5247b38d4_prof);

        
        $__internal_640f737f5a97f0b142865538e6d5c852d86f373bb9547f73501071222bc7b251->leave($__internal_640f737f5a97f0b142865538e6d5c852d86f373bb9547f73501071222bc7b251_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ef5d5585b53fea9685689b14ef5076fd4565e861bfad3a55ea22e1784a2e8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef5d5585b53fea9685689b14ef5076fd4565e861bfad3a55ea22e1784a2e8e7->enter($__internal_7ef5d5585b53fea9685689b14ef5076fd4565e861bfad3a55ea22e1784a2e8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d83ea6a03c4baeacc27bc9b516b045e6191d2c83ed81147eee9c9e67bb21fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d83ea6a03c4baeacc27bc9b516b045e6191d2c83ed81147eee9c9e67bb21fa2->enter($__internal_2d83ea6a03c4baeacc27bc9b516b045e6191d2c83ed81147eee9c9e67bb21fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2d83ea6a03c4baeacc27bc9b516b045e6191d2c83ed81147eee9c9e67bb21fa2->leave($__internal_2d83ea6a03c4baeacc27bc9b516b045e6191d2c83ed81147eee9c9e67bb21fa2_prof);

        
        $__internal_7ef5d5585b53fea9685689b14ef5076fd4565e861bfad3a55ea22e1784a2e8e7->leave($__internal_7ef5d5585b53fea9685689b14ef5076fd4565e861bfad3a55ea22e1784a2e8e7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdf101c951dde91e2d0177a22458d3e5bc2a5deabc50f6271b7788b0b2ca9f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf101c951dde91e2d0177a22458d3e5bc2a5deabc50f6271b7788b0b2ca9f2a->enter($__internal_fdf101c951dde91e2d0177a22458d3e5bc2a5deabc50f6271b7788b0b2ca9f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2d23a4c71978128f2c8b54eced5e7e00428942e86117d8be82a8676449cc4e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d23a4c71978128f2c8b54eced5e7e00428942e86117d8be82a8676449cc4e91->enter($__internal_2d23a4c71978128f2c8b54eced5e7e00428942e86117d8be82a8676449cc4e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2d23a4c71978128f2c8b54eced5e7e00428942e86117d8be82a8676449cc4e91->leave($__internal_2d23a4c71978128f2c8b54eced5e7e00428942e86117d8be82a8676449cc4e91_prof);

        
        $__internal_fdf101c951dde91e2d0177a22458d3e5bc2a5deabc50f6271b7788b0b2ca9f2a->leave($__internal_fdf101c951dde91e2d0177a22458d3e5bc2a5deabc50f6271b7788b0b2ca9f2a_prof);

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
