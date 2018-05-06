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
        $__internal_8afa6ed4ec2eb98736830c2fe687173dd4fd0087208fb6995069766344ecf472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afa6ed4ec2eb98736830c2fe687173dd4fd0087208fb6995069766344ecf472->enter($__internal_8afa6ed4ec2eb98736830c2fe687173dd4fd0087208fb6995069766344ecf472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_85ffd4fa1550181a22a50456062b7f1afbcb797f532ae60ff210778e2471575c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ffd4fa1550181a22a50456062b7f1afbcb797f532ae60ff210778e2471575c->enter($__internal_85ffd4fa1550181a22a50456062b7f1afbcb797f532ae60ff210778e2471575c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8afa6ed4ec2eb98736830c2fe687173dd4fd0087208fb6995069766344ecf472->leave($__internal_8afa6ed4ec2eb98736830c2fe687173dd4fd0087208fb6995069766344ecf472_prof);

        
        $__internal_85ffd4fa1550181a22a50456062b7f1afbcb797f532ae60ff210778e2471575c->leave($__internal_85ffd4fa1550181a22a50456062b7f1afbcb797f532ae60ff210778e2471575c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c803f92ae32b802396de4956892f2241ac265781a92a2d1e31cd28c69b320ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c803f92ae32b802396de4956892f2241ac265781a92a2d1e31cd28c69b320ff8->enter($__internal_c803f92ae32b802396de4956892f2241ac265781a92a2d1e31cd28c69b320ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b52e98733360bad8d8e91e37ce0da8427223d887c46484a8336f6f109059560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b52e98733360bad8d8e91e37ce0da8427223d887c46484a8336f6f109059560->enter($__internal_2b52e98733360bad8d8e91e37ce0da8427223d887c46484a8336f6f109059560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2b52e98733360bad8d8e91e37ce0da8427223d887c46484a8336f6f109059560->leave($__internal_2b52e98733360bad8d8e91e37ce0da8427223d887c46484a8336f6f109059560_prof);

        
        $__internal_c803f92ae32b802396de4956892f2241ac265781a92a2d1e31cd28c69b320ff8->leave($__internal_c803f92ae32b802396de4956892f2241ac265781a92a2d1e31cd28c69b320ff8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_774eb71d414afc78fdfc1834690b57c375f83806c482b05f43a30c5049e054ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774eb71d414afc78fdfc1834690b57c375f83806c482b05f43a30c5049e054ae->enter($__internal_774eb71d414afc78fdfc1834690b57c375f83806c482b05f43a30c5049e054ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46a9d88d135cf8cc8c05de74aa5141e552ce4849b4ed8e55ca15a37357dd211b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a9d88d135cf8cc8c05de74aa5141e552ce4849b4ed8e55ca15a37357dd211b->enter($__internal_46a9d88d135cf8cc8c05de74aa5141e552ce4849b4ed8e55ca15a37357dd211b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_46a9d88d135cf8cc8c05de74aa5141e552ce4849b4ed8e55ca15a37357dd211b->leave($__internal_46a9d88d135cf8cc8c05de74aa5141e552ce4849b4ed8e55ca15a37357dd211b_prof);

        
        $__internal_774eb71d414afc78fdfc1834690b57c375f83806c482b05f43a30c5049e054ae->leave($__internal_774eb71d414afc78fdfc1834690b57c375f83806c482b05f43a30c5049e054ae_prof);

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
