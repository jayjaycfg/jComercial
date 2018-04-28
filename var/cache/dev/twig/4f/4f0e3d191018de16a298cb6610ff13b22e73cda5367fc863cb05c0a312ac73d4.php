<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb61be3a97bd92192da8f72bacbd4cb4ef8d627da80cf0e8e6e739928c1be5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb61be3a97bd92192da8f72bacbd4cb4ef8d627da80cf0e8e6e739928c1be5c2->enter($__internal_bb61be3a97bd92192da8f72bacbd4cb4ef8d627da80cf0e8e6e739928c1be5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1d303ab10a9015e56f18e9dabe3adb27e283302d541be99f9dc7a616f579778a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d303ab10a9015e56f18e9dabe3adb27e283302d541be99f9dc7a616f579778a->enter($__internal_1d303ab10a9015e56f18e9dabe3adb27e283302d541be99f9dc7a616f579778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb61be3a97bd92192da8f72bacbd4cb4ef8d627da80cf0e8e6e739928c1be5c2->leave($__internal_bb61be3a97bd92192da8f72bacbd4cb4ef8d627da80cf0e8e6e739928c1be5c2_prof);

        
        $__internal_1d303ab10a9015e56f18e9dabe3adb27e283302d541be99f9dc7a616f579778a->leave($__internal_1d303ab10a9015e56f18e9dabe3adb27e283302d541be99f9dc7a616f579778a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a99af40d5b6e7703f6de59a06e7209e74c89519c195fd01a25a62847922f0c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99af40d5b6e7703f6de59a06e7209e74c89519c195fd01a25a62847922f0c59->enter($__internal_a99af40d5b6e7703f6de59a06e7209e74c89519c195fd01a25a62847922f0c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20d6b6bc9f287e7abf46fee0aaaf55124085c86d50d50f0f10618b4b854ff586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d6b6bc9f287e7abf46fee0aaaf55124085c86d50d50f0f10618b4b854ff586->enter($__internal_20d6b6bc9f287e7abf46fee0aaaf55124085c86d50d50f0f10618b4b854ff586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_20d6b6bc9f287e7abf46fee0aaaf55124085c86d50d50f0f10618b4b854ff586->leave($__internal_20d6b6bc9f287e7abf46fee0aaaf55124085c86d50d50f0f10618b4b854ff586_prof);

        
        $__internal_a99af40d5b6e7703f6de59a06e7209e74c89519c195fd01a25a62847922f0c59->leave($__internal_a99af40d5b6e7703f6de59a06e7209e74c89519c195fd01a25a62847922f0c59_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11d1f4b0aef394164c48b6cbebcda818339c4cb5c845334b44957901bfd4eddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d1f4b0aef394164c48b6cbebcda818339c4cb5c845334b44957901bfd4eddb->enter($__internal_11d1f4b0aef394164c48b6cbebcda818339c4cb5c845334b44957901bfd4eddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45230f25e022a5f56dc74b648bbeceee4fc28df4f08cce930ec500f7e296637d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45230f25e022a5f56dc74b648bbeceee4fc28df4f08cce930ec500f7e296637d->enter($__internal_45230f25e022a5f56dc74b648bbeceee4fc28df4f08cce930ec500f7e296637d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_45230f25e022a5f56dc74b648bbeceee4fc28df4f08cce930ec500f7e296637d->leave($__internal_45230f25e022a5f56dc74b648bbeceee4fc28df4f08cce930ec500f7e296637d_prof);

        
        $__internal_11d1f4b0aef394164c48b6cbebcda818339c4cb5c845334b44957901bfd4eddb->leave($__internal_11d1f4b0aef394164c48b6cbebcda818339c4cb5c845334b44957901bfd4eddb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
