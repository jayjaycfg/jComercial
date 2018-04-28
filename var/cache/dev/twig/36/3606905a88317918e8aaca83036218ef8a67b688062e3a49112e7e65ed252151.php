<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_93de8c0bcd7c4035935d81232d8a3342a830c2927c97851c953957388dccd36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93de8c0bcd7c4035935d81232d8a3342a830c2927c97851c953957388dccd36c->enter($__internal_93de8c0bcd7c4035935d81232d8a3342a830c2927c97851c953957388dccd36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_99f7420524d2504baac22e3f76de91845fa7e99169959b346d4f92bcc5228aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f7420524d2504baac22e3f76de91845fa7e99169959b346d4f92bcc5228aa5->enter($__internal_99f7420524d2504baac22e3f76de91845fa7e99169959b346d4f92bcc5228aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93de8c0bcd7c4035935d81232d8a3342a830c2927c97851c953957388dccd36c->leave($__internal_93de8c0bcd7c4035935d81232d8a3342a830c2927c97851c953957388dccd36c_prof);

        
        $__internal_99f7420524d2504baac22e3f76de91845fa7e99169959b346d4f92bcc5228aa5->leave($__internal_99f7420524d2504baac22e3f76de91845fa7e99169959b346d4f92bcc5228aa5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3283911e119fd2544a7e928cf48c5ce7c4ef47f468b16fe705677dbbfd72237c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3283911e119fd2544a7e928cf48c5ce7c4ef47f468b16fe705677dbbfd72237c->enter($__internal_3283911e119fd2544a7e928cf48c5ce7c4ef47f468b16fe705677dbbfd72237c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4cf34466046380f6bb86b688733d5657c2aceb01963c6a2dc3eac5268f5228f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf34466046380f6bb86b688733d5657c2aceb01963c6a2dc3eac5268f5228f7->enter($__internal_4cf34466046380f6bb86b688733d5657c2aceb01963c6a2dc3eac5268f5228f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4cf34466046380f6bb86b688733d5657c2aceb01963c6a2dc3eac5268f5228f7->leave($__internal_4cf34466046380f6bb86b688733d5657c2aceb01963c6a2dc3eac5268f5228f7_prof);

        
        $__internal_3283911e119fd2544a7e928cf48c5ce7c4ef47f468b16fe705677dbbfd72237c->leave($__internal_3283911e119fd2544a7e928cf48c5ce7c4ef47f468b16fe705677dbbfd72237c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81762c3a1a9ab126a8523917150359af94e472c229cd31d61b99acc22a21443b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81762c3a1a9ab126a8523917150359af94e472c229cd31d61b99acc22a21443b->enter($__internal_81762c3a1a9ab126a8523917150359af94e472c229cd31d61b99acc22a21443b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b2505a77ef9867e33136aabb8227e1049e753a4ba639b0208a6a0f90f3646ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2505a77ef9867e33136aabb8227e1049e753a4ba639b0208a6a0f90f3646ba6->enter($__internal_b2505a77ef9867e33136aabb8227e1049e753a4ba639b0208a6a0f90f3646ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b2505a77ef9867e33136aabb8227e1049e753a4ba639b0208a6a0f90f3646ba6->leave($__internal_b2505a77ef9867e33136aabb8227e1049e753a4ba639b0208a6a0f90f3646ba6_prof);

        
        $__internal_81762c3a1a9ab126a8523917150359af94e472c229cd31d61b99acc22a21443b->leave($__internal_81762c3a1a9ab126a8523917150359af94e472c229cd31d61b99acc22a21443b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a908393fe9caa436921f2eea303d6aeb8d3e4bd2af24ea025fe94587e28adffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a908393fe9caa436921f2eea303d6aeb8d3e4bd2af24ea025fe94587e28adffa->enter($__internal_a908393fe9caa436921f2eea303d6aeb8d3e4bd2af24ea025fe94587e28adffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63750b2f0cdba342da0ee5ba6f2ff2179f751e9221e498fe81d9b28c098d0693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63750b2f0cdba342da0ee5ba6f2ff2179f751e9221e498fe81d9b28c098d0693->enter($__internal_63750b2f0cdba342da0ee5ba6f2ff2179f751e9221e498fe81d9b28c098d0693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_63750b2f0cdba342da0ee5ba6f2ff2179f751e9221e498fe81d9b28c098d0693->leave($__internal_63750b2f0cdba342da0ee5ba6f2ff2179f751e9221e498fe81d9b28c098d0693_prof);

        
        $__internal_a908393fe9caa436921f2eea303d6aeb8d3e4bd2af24ea025fe94587e28adffa->leave($__internal_a908393fe9caa436921f2eea303d6aeb8d3e4bd2af24ea025fe94587e28adffa_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
