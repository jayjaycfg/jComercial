<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_19dfb68d851ddd05e5bd3f446c5cecc8ca30befd0bb86cee9a5c57f648f371d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a86e716746adcf2c3ee64fdb7480a928cac23a4fcd1470a5cc2b24c76202d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a86e716746adcf2c3ee64fdb7480a928cac23a4fcd1470a5cc2b24c76202d17->enter($__internal_6a86e716746adcf2c3ee64fdb7480a928cac23a4fcd1470a5cc2b24c76202d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_88166cfb8d110a3c63b6cd45ae173c2dd588f093d6039416beb57161f5b43763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88166cfb8d110a3c63b6cd45ae173c2dd588f093d6039416beb57161f5b43763->enter($__internal_88166cfb8d110a3c63b6cd45ae173c2dd588f093d6039416beb57161f5b43763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a86e716746adcf2c3ee64fdb7480a928cac23a4fcd1470a5cc2b24c76202d17->leave($__internal_6a86e716746adcf2c3ee64fdb7480a928cac23a4fcd1470a5cc2b24c76202d17_prof);

        
        $__internal_88166cfb8d110a3c63b6cd45ae173c2dd588f093d6039416beb57161f5b43763->leave($__internal_88166cfb8d110a3c63b6cd45ae173c2dd588f093d6039416beb57161f5b43763_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8159c404333641ef58e1bb1f8900a1d65f4c1082982c05c2522f0c86251a24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8159c404333641ef58e1bb1f8900a1d65f4c1082982c05c2522f0c86251a24a->enter($__internal_f8159c404333641ef58e1bb1f8900a1d65f4c1082982c05c2522f0c86251a24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_95db86a13b6e5c6f0ff3d96b0a464ed465040a31859e890926caeb18045c85cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95db86a13b6e5c6f0ff3d96b0a464ed465040a31859e890926caeb18045c85cf->enter($__internal_95db86a13b6e5c6f0ff3d96b0a464ed465040a31859e890926caeb18045c85cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_95db86a13b6e5c6f0ff3d96b0a464ed465040a31859e890926caeb18045c85cf->leave($__internal_95db86a13b6e5c6f0ff3d96b0a464ed465040a31859e890926caeb18045c85cf_prof);

        
        $__internal_f8159c404333641ef58e1bb1f8900a1d65f4c1082982c05c2522f0c86251a24a->leave($__internal_f8159c404333641ef58e1bb1f8900a1d65f4c1082982c05c2522f0c86251a24a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5a8a1fec9d4b88f3709c7010cc69f56be1a28d7fd7b3f26cda6fb1de40b431b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a8a1fec9d4b88f3709c7010cc69f56be1a28d7fd7b3f26cda6fb1de40b431b->enter($__internal_f5a8a1fec9d4b88f3709c7010cc69f56be1a28d7fd7b3f26cda6fb1de40b431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_520e6998400ff3b105309ecfdea4c5089ee0eb2b8f39f680572a4e2203e7869c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520e6998400ff3b105309ecfdea4c5089ee0eb2b8f39f680572a4e2203e7869c->enter($__internal_520e6998400ff3b105309ecfdea4c5089ee0eb2b8f39f680572a4e2203e7869c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_520e6998400ff3b105309ecfdea4c5089ee0eb2b8f39f680572a4e2203e7869c->leave($__internal_520e6998400ff3b105309ecfdea4c5089ee0eb2b8f39f680572a4e2203e7869c_prof);

        
        $__internal_f5a8a1fec9d4b88f3709c7010cc69f56be1a28d7fd7b3f26cda6fb1de40b431b->leave($__internal_f5a8a1fec9d4b88f3709c7010cc69f56be1a28d7fd7b3f26cda6fb1de40b431b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
