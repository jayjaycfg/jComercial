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
        $__internal_ae8944c87b302f23c80f0fc06d14b8b7d4351f8e77727705bbbd250a4526988a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8944c87b302f23c80f0fc06d14b8b7d4351f8e77727705bbbd250a4526988a->enter($__internal_ae8944c87b302f23c80f0fc06d14b8b7d4351f8e77727705bbbd250a4526988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a7e538fc8124280d577528f92071c8b5e703cc34f54af0f9f33320aaa4581c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e538fc8124280d577528f92071c8b5e703cc34f54af0f9f33320aaa4581c80->enter($__internal_a7e538fc8124280d577528f92071c8b5e703cc34f54af0f9f33320aaa4581c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae8944c87b302f23c80f0fc06d14b8b7d4351f8e77727705bbbd250a4526988a->leave($__internal_ae8944c87b302f23c80f0fc06d14b8b7d4351f8e77727705bbbd250a4526988a_prof);

        
        $__internal_a7e538fc8124280d577528f92071c8b5e703cc34f54af0f9f33320aaa4581c80->leave($__internal_a7e538fc8124280d577528f92071c8b5e703cc34f54af0f9f33320aaa4581c80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4207cdeeaed60c8c118b5e410b76c4bee4d7ac485648dada000b35efa1d29a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4207cdeeaed60c8c118b5e410b76c4bee4d7ac485648dada000b35efa1d29a57->enter($__internal_4207cdeeaed60c8c118b5e410b76c4bee4d7ac485648dada000b35efa1d29a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e417312daa97d9fadb45e5e127fd0210108b6d40cafc246c8f4f0d30b24aaeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e417312daa97d9fadb45e5e127fd0210108b6d40cafc246c8f4f0d30b24aaeb3->enter($__internal_e417312daa97d9fadb45e5e127fd0210108b6d40cafc246c8f4f0d30b24aaeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e417312daa97d9fadb45e5e127fd0210108b6d40cafc246c8f4f0d30b24aaeb3->leave($__internal_e417312daa97d9fadb45e5e127fd0210108b6d40cafc246c8f4f0d30b24aaeb3_prof);

        
        $__internal_4207cdeeaed60c8c118b5e410b76c4bee4d7ac485648dada000b35efa1d29a57->leave($__internal_4207cdeeaed60c8c118b5e410b76c4bee4d7ac485648dada000b35efa1d29a57_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a73c6dc0ec1806ab816a84262f82d7730eb8e98c0b9c5dc18e79e6d06e9ef74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73c6dc0ec1806ab816a84262f82d7730eb8e98c0b9c5dc18e79e6d06e9ef74c->enter($__internal_a73c6dc0ec1806ab816a84262f82d7730eb8e98c0b9c5dc18e79e6d06e9ef74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce6b82c9003e6834ef8aa6abb91bbe442cc558e618d86a76a50c0f9e5e8b81c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6b82c9003e6834ef8aa6abb91bbe442cc558e618d86a76a50c0f9e5e8b81c0->enter($__internal_ce6b82c9003e6834ef8aa6abb91bbe442cc558e618d86a76a50c0f9e5e8b81c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ce6b82c9003e6834ef8aa6abb91bbe442cc558e618d86a76a50c0f9e5e8b81c0->leave($__internal_ce6b82c9003e6834ef8aa6abb91bbe442cc558e618d86a76a50c0f9e5e8b81c0_prof);

        
        $__internal_a73c6dc0ec1806ab816a84262f82d7730eb8e98c0b9c5dc18e79e6d06e9ef74c->leave($__internal_a73c6dc0ec1806ab816a84262f82d7730eb8e98c0b9c5dc18e79e6d06e9ef74c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7fc106f6ff0873eb2f140018ad90c1d235687a9cee30d218cdfe646d6112019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fc106f6ff0873eb2f140018ad90c1d235687a9cee30d218cdfe646d6112019->enter($__internal_c7fc106f6ff0873eb2f140018ad90c1d235687a9cee30d218cdfe646d6112019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c17d1394d5eda4af5de0536af7246692812d6ac9b6ff845db70fc8f35de6195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c17d1394d5eda4af5de0536af7246692812d6ac9b6ff845db70fc8f35de6195->enter($__internal_7c17d1394d5eda4af5de0536af7246692812d6ac9b6ff845db70fc8f35de6195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7c17d1394d5eda4af5de0536af7246692812d6ac9b6ff845db70fc8f35de6195->leave($__internal_7c17d1394d5eda4af5de0536af7246692812d6ac9b6ff845db70fc8f35de6195_prof);

        
        $__internal_c7fc106f6ff0873eb2f140018ad90c1d235687a9cee30d218cdfe646d6112019->leave($__internal_c7fc106f6ff0873eb2f140018ad90c1d235687a9cee30d218cdfe646d6112019_prof);

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
