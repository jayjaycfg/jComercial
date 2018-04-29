<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0c33a369ff4379e84e79ca047a9bd0f8d25a0a2094943a9e180983137ce969ad extends Twig_Template
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
        $__internal_a498f3d008a05d0e4a2e669afca3463cbcea69df2fbcfa1dda8e45ae66684f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a498f3d008a05d0e4a2e669afca3463cbcea69df2fbcfa1dda8e45ae66684f50->enter($__internal_a498f3d008a05d0e4a2e669afca3463cbcea69df2fbcfa1dda8e45ae66684f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b8d415742de02431c5698744ff36976aceae45b4a10fca4e62fc19e8ba74e0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d415742de02431c5698744ff36976aceae45b4a10fca4e62fc19e8ba74e0f8->enter($__internal_b8d415742de02431c5698744ff36976aceae45b4a10fca4e62fc19e8ba74e0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a498f3d008a05d0e4a2e669afca3463cbcea69df2fbcfa1dda8e45ae66684f50->leave($__internal_a498f3d008a05d0e4a2e669afca3463cbcea69df2fbcfa1dda8e45ae66684f50_prof);

        
        $__internal_b8d415742de02431c5698744ff36976aceae45b4a10fca4e62fc19e8ba74e0f8->leave($__internal_b8d415742de02431c5698744ff36976aceae45b4a10fca4e62fc19e8ba74e0f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f46c0c71b288910bfc6d84137689d9309b8ad3ab4e7d8facf0cf3abf68e1cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f46c0c71b288910bfc6d84137689d9309b8ad3ab4e7d8facf0cf3abf68e1cd1->enter($__internal_6f46c0c71b288910bfc6d84137689d9309b8ad3ab4e7d8facf0cf3abf68e1cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0bcc92700b3cb2a8b525b717413157f44302a9b12e22acb79aa7039a9c648bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcc92700b3cb2a8b525b717413157f44302a9b12e22acb79aa7039a9c648bfa->enter($__internal_0bcc92700b3cb2a8b525b717413157f44302a9b12e22acb79aa7039a9c648bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0bcc92700b3cb2a8b525b717413157f44302a9b12e22acb79aa7039a9c648bfa->leave($__internal_0bcc92700b3cb2a8b525b717413157f44302a9b12e22acb79aa7039a9c648bfa_prof);

        
        $__internal_6f46c0c71b288910bfc6d84137689d9309b8ad3ab4e7d8facf0cf3abf68e1cd1->leave($__internal_6f46c0c71b288910bfc6d84137689d9309b8ad3ab4e7d8facf0cf3abf68e1cd1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8180308f3303b8d1541b43db7ef2850ca29124f008330052659907535131f152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8180308f3303b8d1541b43db7ef2850ca29124f008330052659907535131f152->enter($__internal_8180308f3303b8d1541b43db7ef2850ca29124f008330052659907535131f152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d549c81bc2836eae19f959a92fa8099150fbb4ab8d7ce8140c9be4d7b603893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d549c81bc2836eae19f959a92fa8099150fbb4ab8d7ce8140c9be4d7b603893->enter($__internal_6d549c81bc2836eae19f959a92fa8099150fbb4ab8d7ce8140c9be4d7b603893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d549c81bc2836eae19f959a92fa8099150fbb4ab8d7ce8140c9be4d7b603893->leave($__internal_6d549c81bc2836eae19f959a92fa8099150fbb4ab8d7ce8140c9be4d7b603893_prof);

        
        $__internal_8180308f3303b8d1541b43db7ef2850ca29124f008330052659907535131f152->leave($__internal_8180308f3303b8d1541b43db7ef2850ca29124f008330052659907535131f152_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
