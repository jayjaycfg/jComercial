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
        $__internal_b1559a857375d644fa30b16cae8c00e3d7251621b9f85fbb06bb675e208c4f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1559a857375d644fa30b16cae8c00e3d7251621b9f85fbb06bb675e208c4f56->enter($__internal_b1559a857375d644fa30b16cae8c00e3d7251621b9f85fbb06bb675e208c4f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_38650a89fee972462df94e1b4cc0e46af7d1c1b4c6d0b7ce1486e9bc891048da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38650a89fee972462df94e1b4cc0e46af7d1c1b4c6d0b7ce1486e9bc891048da->enter($__internal_38650a89fee972462df94e1b4cc0e46af7d1c1b4c6d0b7ce1486e9bc891048da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1559a857375d644fa30b16cae8c00e3d7251621b9f85fbb06bb675e208c4f56->leave($__internal_b1559a857375d644fa30b16cae8c00e3d7251621b9f85fbb06bb675e208c4f56_prof);

        
        $__internal_38650a89fee972462df94e1b4cc0e46af7d1c1b4c6d0b7ce1486e9bc891048da->leave($__internal_38650a89fee972462df94e1b4cc0e46af7d1c1b4c6d0b7ce1486e9bc891048da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08731f35729d77a73f37384b8b4b0ab47838593a5019900dd80f22ac97851102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08731f35729d77a73f37384b8b4b0ab47838593a5019900dd80f22ac97851102->enter($__internal_08731f35729d77a73f37384b8b4b0ab47838593a5019900dd80f22ac97851102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f7b3bdea6cf2222d4d8d9711060063e7bb301a34ce50643ea57ffffbfdf3f8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b3bdea6cf2222d4d8d9711060063e7bb301a34ce50643ea57ffffbfdf3f8a5->enter($__internal_f7b3bdea6cf2222d4d8d9711060063e7bb301a34ce50643ea57ffffbfdf3f8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7b3bdea6cf2222d4d8d9711060063e7bb301a34ce50643ea57ffffbfdf3f8a5->leave($__internal_f7b3bdea6cf2222d4d8d9711060063e7bb301a34ce50643ea57ffffbfdf3f8a5_prof);

        
        $__internal_08731f35729d77a73f37384b8b4b0ab47838593a5019900dd80f22ac97851102->leave($__internal_08731f35729d77a73f37384b8b4b0ab47838593a5019900dd80f22ac97851102_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fb605ef9d0458e1e547c7f8fe48c8c80db55f48e22add9e63cbd5d9937fc7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb605ef9d0458e1e547c7f8fe48c8c80db55f48e22add9e63cbd5d9937fc7ae->enter($__internal_5fb605ef9d0458e1e547c7f8fe48c8c80db55f48e22add9e63cbd5d9937fc7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_87a2a55cb02df0d24280275f15498ee1dc594e81837bc9d77dd8f6d7db76b36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a2a55cb02df0d24280275f15498ee1dc594e81837bc9d77dd8f6d7db76b36d->enter($__internal_87a2a55cb02df0d24280275f15498ee1dc594e81837bc9d77dd8f6d7db76b36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87a2a55cb02df0d24280275f15498ee1dc594e81837bc9d77dd8f6d7db76b36d->leave($__internal_87a2a55cb02df0d24280275f15498ee1dc594e81837bc9d77dd8f6d7db76b36d_prof);

        
        $__internal_5fb605ef9d0458e1e547c7f8fe48c8c80db55f48e22add9e63cbd5d9937fc7ae->leave($__internal_5fb605ef9d0458e1e547c7f8fe48c8c80db55f48e22add9e63cbd5d9937fc7ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66032a43c758286570a058cbc4f80357c8e97470992259b66fd52e43d14d67db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66032a43c758286570a058cbc4f80357c8e97470992259b66fd52e43d14d67db->enter($__internal_66032a43c758286570a058cbc4f80357c8e97470992259b66fd52e43d14d67db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3bacb576c61f4952d0d36f457f2c53ae34dec8d2237450f60d221cd109ebaedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bacb576c61f4952d0d36f457f2c53ae34dec8d2237450f60d221cd109ebaedf->enter($__internal_3bacb576c61f4952d0d36f457f2c53ae34dec8d2237450f60d221cd109ebaedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3bacb576c61f4952d0d36f457f2c53ae34dec8d2237450f60d221cd109ebaedf->leave($__internal_3bacb576c61f4952d0d36f457f2c53ae34dec8d2237450f60d221cd109ebaedf_prof);

        
        $__internal_66032a43c758286570a058cbc4f80357c8e97470992259b66fd52e43d14d67db->leave($__internal_66032a43c758286570a058cbc4f80357c8e97470992259b66fd52e43d14d67db_prof);

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
