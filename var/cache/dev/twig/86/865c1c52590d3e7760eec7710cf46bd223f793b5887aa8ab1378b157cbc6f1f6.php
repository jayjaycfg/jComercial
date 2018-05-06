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
        $__internal_c9b0cf6b797da69aeb79e4d16106c49c6485bb0898c8d6f6546f550b57dcad55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b0cf6b797da69aeb79e4d16106c49c6485bb0898c8d6f6546f550b57dcad55->enter($__internal_c9b0cf6b797da69aeb79e4d16106c49c6485bb0898c8d6f6546f550b57dcad55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_86e3adf8235faad9495709cd7abaeaa5f64756892069d807d8cda60bd97e6c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e3adf8235faad9495709cd7abaeaa5f64756892069d807d8cda60bd97e6c0d->enter($__internal_86e3adf8235faad9495709cd7abaeaa5f64756892069d807d8cda60bd97e6c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b0cf6b797da69aeb79e4d16106c49c6485bb0898c8d6f6546f550b57dcad55->leave($__internal_c9b0cf6b797da69aeb79e4d16106c49c6485bb0898c8d6f6546f550b57dcad55_prof);

        
        $__internal_86e3adf8235faad9495709cd7abaeaa5f64756892069d807d8cda60bd97e6c0d->leave($__internal_86e3adf8235faad9495709cd7abaeaa5f64756892069d807d8cda60bd97e6c0d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d6b623f78ae38cfa0de64b9a03ff75e96d382b5ea36c4c1321890dbbc741561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6b623f78ae38cfa0de64b9a03ff75e96d382b5ea36c4c1321890dbbc741561->enter($__internal_4d6b623f78ae38cfa0de64b9a03ff75e96d382b5ea36c4c1321890dbbc741561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6af0cfaab7828a71521a966ef4a2704942f23ab730f1ed76363c682f15bde43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af0cfaab7828a71521a966ef4a2704942f23ab730f1ed76363c682f15bde43d->enter($__internal_6af0cfaab7828a71521a966ef4a2704942f23ab730f1ed76363c682f15bde43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6af0cfaab7828a71521a966ef4a2704942f23ab730f1ed76363c682f15bde43d->leave($__internal_6af0cfaab7828a71521a966ef4a2704942f23ab730f1ed76363c682f15bde43d_prof);

        
        $__internal_4d6b623f78ae38cfa0de64b9a03ff75e96d382b5ea36c4c1321890dbbc741561->leave($__internal_4d6b623f78ae38cfa0de64b9a03ff75e96d382b5ea36c4c1321890dbbc741561_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5b3e349380a88958b523dd44b91aafd67afbce37d4acd761717b5ce556567bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b3e349380a88958b523dd44b91aafd67afbce37d4acd761717b5ce556567bd->enter($__internal_d5b3e349380a88958b523dd44b91aafd67afbce37d4acd761717b5ce556567bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_40bab63616cb7befcc774c83d3a42e896fcd26f43f2c0bac7db25c69b36d4778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bab63616cb7befcc774c83d3a42e896fcd26f43f2c0bac7db25c69b36d4778->enter($__internal_40bab63616cb7befcc774c83d3a42e896fcd26f43f2c0bac7db25c69b36d4778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_40bab63616cb7befcc774c83d3a42e896fcd26f43f2c0bac7db25c69b36d4778->leave($__internal_40bab63616cb7befcc774c83d3a42e896fcd26f43f2c0bac7db25c69b36d4778_prof);

        
        $__internal_d5b3e349380a88958b523dd44b91aafd67afbce37d4acd761717b5ce556567bd->leave($__internal_d5b3e349380a88958b523dd44b91aafd67afbce37d4acd761717b5ce556567bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fa3f42bdb6f5ab55bb059c2b02a28b71e20f2782dfdf535a8ec7c047dae32c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa3f42bdb6f5ab55bb059c2b02a28b71e20f2782dfdf535a8ec7c047dae32c4->enter($__internal_0fa3f42bdb6f5ab55bb059c2b02a28b71e20f2782dfdf535a8ec7c047dae32c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3820b1a215643f36e948c3e041ed0085b061f47246b5c79725dfc74d4659e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3820b1a215643f36e948c3e041ed0085b061f47246b5c79725dfc74d4659e1f->enter($__internal_a3820b1a215643f36e948c3e041ed0085b061f47246b5c79725dfc74d4659e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a3820b1a215643f36e948c3e041ed0085b061f47246b5c79725dfc74d4659e1f->leave($__internal_a3820b1a215643f36e948c3e041ed0085b061f47246b5c79725dfc74d4659e1f_prof);

        
        $__internal_0fa3f42bdb6f5ab55bb059c2b02a28b71e20f2782dfdf535a8ec7c047dae32c4->leave($__internal_0fa3f42bdb6f5ab55bb059c2b02a28b71e20f2782dfdf535a8ec7c047dae32c4_prof);

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
