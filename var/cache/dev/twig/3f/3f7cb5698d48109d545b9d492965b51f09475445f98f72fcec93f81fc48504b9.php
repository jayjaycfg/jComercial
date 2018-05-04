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
        $__internal_bebd492b1320fccbf131e6b8e20a4cdcb24229d99eccc0e2b0fd872f3792b2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebd492b1320fccbf131e6b8e20a4cdcb24229d99eccc0e2b0fd872f3792b2a3->enter($__internal_bebd492b1320fccbf131e6b8e20a4cdcb24229d99eccc0e2b0fd872f3792b2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9fe75317e05a9c4956bedd0e72542bf6743263be5765a040234e218d3de56d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe75317e05a9c4956bedd0e72542bf6743263be5765a040234e218d3de56d8b->enter($__internal_9fe75317e05a9c4956bedd0e72542bf6743263be5765a040234e218d3de56d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bebd492b1320fccbf131e6b8e20a4cdcb24229d99eccc0e2b0fd872f3792b2a3->leave($__internal_bebd492b1320fccbf131e6b8e20a4cdcb24229d99eccc0e2b0fd872f3792b2a3_prof);

        
        $__internal_9fe75317e05a9c4956bedd0e72542bf6743263be5765a040234e218d3de56d8b->leave($__internal_9fe75317e05a9c4956bedd0e72542bf6743263be5765a040234e218d3de56d8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a82ee02c1b8df5e7f8833bae67ffa5f8ce464831bfe95094a1b10dcdfdc14ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a82ee02c1b8df5e7f8833bae67ffa5f8ce464831bfe95094a1b10dcdfdc14ea->enter($__internal_1a82ee02c1b8df5e7f8833bae67ffa5f8ce464831bfe95094a1b10dcdfdc14ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9cc26fd378beae620f9ec3fb2f437a4dc343077844bcc042915f76406d7fa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cc26fd378beae620f9ec3fb2f437a4dc343077844bcc042915f76406d7fa1d->enter($__internal_e9cc26fd378beae620f9ec3fb2f437a4dc343077844bcc042915f76406d7fa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e9cc26fd378beae620f9ec3fb2f437a4dc343077844bcc042915f76406d7fa1d->leave($__internal_e9cc26fd378beae620f9ec3fb2f437a4dc343077844bcc042915f76406d7fa1d_prof);

        
        $__internal_1a82ee02c1b8df5e7f8833bae67ffa5f8ce464831bfe95094a1b10dcdfdc14ea->leave($__internal_1a82ee02c1b8df5e7f8833bae67ffa5f8ce464831bfe95094a1b10dcdfdc14ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c65403b0147a12e054927b0e4ad372e6b20a77130d8547b5624a7b770ce632a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c65403b0147a12e054927b0e4ad372e6b20a77130d8547b5624a7b770ce632a->enter($__internal_9c65403b0147a12e054927b0e4ad372e6b20a77130d8547b5624a7b770ce632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad870055bf74a1e3a397a8e35224193efc5992428827a419aba1da07a9b63bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad870055bf74a1e3a397a8e35224193efc5992428827a419aba1da07a9b63bab->enter($__internal_ad870055bf74a1e3a397a8e35224193efc5992428827a419aba1da07a9b63bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ad870055bf74a1e3a397a8e35224193efc5992428827a419aba1da07a9b63bab->leave($__internal_ad870055bf74a1e3a397a8e35224193efc5992428827a419aba1da07a9b63bab_prof);

        
        $__internal_9c65403b0147a12e054927b0e4ad372e6b20a77130d8547b5624a7b770ce632a->leave($__internal_9c65403b0147a12e054927b0e4ad372e6b20a77130d8547b5624a7b770ce632a_prof);

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
