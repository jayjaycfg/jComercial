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
        $__internal_78c40b4f9b21f72b8b92522b974654a8eff1d075cac31e5bb2353dd9de54bd19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c40b4f9b21f72b8b92522b974654a8eff1d075cac31e5bb2353dd9de54bd19->enter($__internal_78c40b4f9b21f72b8b92522b974654a8eff1d075cac31e5bb2353dd9de54bd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_329d7372f14876642c0845d68c1e9515a18e5b448eab5327ed69b4e7662c7457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329d7372f14876642c0845d68c1e9515a18e5b448eab5327ed69b4e7662c7457->enter($__internal_329d7372f14876642c0845d68c1e9515a18e5b448eab5327ed69b4e7662c7457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c40b4f9b21f72b8b92522b974654a8eff1d075cac31e5bb2353dd9de54bd19->leave($__internal_78c40b4f9b21f72b8b92522b974654a8eff1d075cac31e5bb2353dd9de54bd19_prof);

        
        $__internal_329d7372f14876642c0845d68c1e9515a18e5b448eab5327ed69b4e7662c7457->leave($__internal_329d7372f14876642c0845d68c1e9515a18e5b448eab5327ed69b4e7662c7457_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d78ad858370ff7cf57b72733bd5a0a5c34ddaad173dc78441e4d59cb7f21218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d78ad858370ff7cf57b72733bd5a0a5c34ddaad173dc78441e4d59cb7f21218->enter($__internal_1d78ad858370ff7cf57b72733bd5a0a5c34ddaad173dc78441e4d59cb7f21218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9329d4f0b6d399c189cba824593feec4aab701b6f8d0aaed9c8a9bec1233c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9329d4f0b6d399c189cba824593feec4aab701b6f8d0aaed9c8a9bec1233c46->enter($__internal_d9329d4f0b6d399c189cba824593feec4aab701b6f8d0aaed9c8a9bec1233c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d9329d4f0b6d399c189cba824593feec4aab701b6f8d0aaed9c8a9bec1233c46->leave($__internal_d9329d4f0b6d399c189cba824593feec4aab701b6f8d0aaed9c8a9bec1233c46_prof);

        
        $__internal_1d78ad858370ff7cf57b72733bd5a0a5c34ddaad173dc78441e4d59cb7f21218->leave($__internal_1d78ad858370ff7cf57b72733bd5a0a5c34ddaad173dc78441e4d59cb7f21218_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_87dfb45a7994985be1c3d817d586e023a7a420ddd0aacf2065fb273f64693cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87dfb45a7994985be1c3d817d586e023a7a420ddd0aacf2065fb273f64693cb4->enter($__internal_87dfb45a7994985be1c3d817d586e023a7a420ddd0aacf2065fb273f64693cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60d8ca16bb10e821e9da63b78de1ea4f2bca3679a60b99cea2c1af83bd78814d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d8ca16bb10e821e9da63b78de1ea4f2bca3679a60b99cea2c1af83bd78814d->enter($__internal_60d8ca16bb10e821e9da63b78de1ea4f2bca3679a60b99cea2c1af83bd78814d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60d8ca16bb10e821e9da63b78de1ea4f2bca3679a60b99cea2c1af83bd78814d->leave($__internal_60d8ca16bb10e821e9da63b78de1ea4f2bca3679a60b99cea2c1af83bd78814d_prof);

        
        $__internal_87dfb45a7994985be1c3d817d586e023a7a420ddd0aacf2065fb273f64693cb4->leave($__internal_87dfb45a7994985be1c3d817d586e023a7a420ddd0aacf2065fb273f64693cb4_prof);

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
