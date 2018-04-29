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
        $__internal_f6238754f2012bd04da83c49db53e6c91b6637d2792d8385eb1c77458719365c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6238754f2012bd04da83c49db53e6c91b6637d2792d8385eb1c77458719365c->enter($__internal_f6238754f2012bd04da83c49db53e6c91b6637d2792d8385eb1c77458719365c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1005290cb57537a7df2a240ead717547b8e47f74881a28c244565f4704e9f0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1005290cb57537a7df2a240ead717547b8e47f74881a28c244565f4704e9f0cf->enter($__internal_1005290cb57537a7df2a240ead717547b8e47f74881a28c244565f4704e9f0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6238754f2012bd04da83c49db53e6c91b6637d2792d8385eb1c77458719365c->leave($__internal_f6238754f2012bd04da83c49db53e6c91b6637d2792d8385eb1c77458719365c_prof);

        
        $__internal_1005290cb57537a7df2a240ead717547b8e47f74881a28c244565f4704e9f0cf->leave($__internal_1005290cb57537a7df2a240ead717547b8e47f74881a28c244565f4704e9f0cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a1eae1e73539aad2effc4f35c873edd1ac1dbe4daec3bbea2a1f1ff53650a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1eae1e73539aad2effc4f35c873edd1ac1dbe4daec3bbea2a1f1ff53650a44->enter($__internal_4a1eae1e73539aad2effc4f35c873edd1ac1dbe4daec3bbea2a1f1ff53650a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a6615647ca727317accde164cec24352d4a4454de8420ddd9332221bde22727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6615647ca727317accde164cec24352d4a4454de8420ddd9332221bde22727->enter($__internal_2a6615647ca727317accde164cec24352d4a4454de8420ddd9332221bde22727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2a6615647ca727317accde164cec24352d4a4454de8420ddd9332221bde22727->leave($__internal_2a6615647ca727317accde164cec24352d4a4454de8420ddd9332221bde22727_prof);

        
        $__internal_4a1eae1e73539aad2effc4f35c873edd1ac1dbe4daec3bbea2a1f1ff53650a44->leave($__internal_4a1eae1e73539aad2effc4f35c873edd1ac1dbe4daec3bbea2a1f1ff53650a44_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b8974cae9e266328f823180760315035eed4b72e2d3ab40ad340da9feb6a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b8974cae9e266328f823180760315035eed4b72e2d3ab40ad340da9feb6a85->enter($__internal_37b8974cae9e266328f823180760315035eed4b72e2d3ab40ad340da9feb6a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c147af1f8e1370ecaee5630fedc839a9296f07043c1da14bc878b21ebecf9c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c147af1f8e1370ecaee5630fedc839a9296f07043c1da14bc878b21ebecf9c0b->enter($__internal_c147af1f8e1370ecaee5630fedc839a9296f07043c1da14bc878b21ebecf9c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c147af1f8e1370ecaee5630fedc839a9296f07043c1da14bc878b21ebecf9c0b->leave($__internal_c147af1f8e1370ecaee5630fedc839a9296f07043c1da14bc878b21ebecf9c0b_prof);

        
        $__internal_37b8974cae9e266328f823180760315035eed4b72e2d3ab40ad340da9feb6a85->leave($__internal_37b8974cae9e266328f823180760315035eed4b72e2d3ab40ad340da9feb6a85_prof);

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
