<?php

/* :main:homepage.html.twig */
class __TwigTemplate_72e285f8b242a1582fa7b6f3a308bd7b59c4c886a7a423d4e9bc7d68636849c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":main:homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f7a6fc98b39a296bd2bc87b8e185df0d070c35fc0cea5a2f2b022ca60a2546e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7a6fc98b39a296bd2bc87b8e185df0d070c35fc0cea5a2f2b022ca60a2546e->enter($__internal_4f7a6fc98b39a296bd2bc87b8e185df0d070c35fc0cea5a2f2b022ca60a2546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $__internal_e6bbdfa251ecf2dcac77c46c451bd790739303103153e9e70c4fb432a91e0150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bbdfa251ecf2dcac77c46c451bd790739303103153e9e70c4fb432a91e0150->enter($__internal_e6bbdfa251ecf2dcac77c46c451bd790739303103153e9e70c4fb432a91e0150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f7a6fc98b39a296bd2bc87b8e185df0d070c35fc0cea5a2f2b022ca60a2546e->leave($__internal_4f7a6fc98b39a296bd2bc87b8e185df0d070c35fc0cea5a2f2b022ca60a2546e_prof);

        
        $__internal_e6bbdfa251ecf2dcac77c46c451bd790739303103153e9e70c4fb432a91e0150->leave($__internal_e6bbdfa251ecf2dcac77c46c451bd790739303103153e9e70c4fb432a91e0150_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c35c2723e00635ccf533f9a3cebecfea48acf03803bb198a28360a25b3651145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35c2723e00635ccf533f9a3cebecfea48acf03803bb198a28360a25b3651145->enter($__internal_c35c2723e00635ccf533f9a3cebecfea48acf03803bb198a28360a25b3651145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_297e3ed98c76840bfe28c0ea96a899739aac2813b1f4d24ca5a0ca6f04efc100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297e3ed98c76840bfe28c0ea96a899739aac2813b1f4d24ca5a0ca6f04efc100->enter($__internal_297e3ed98c76840bfe28c0ea96a899739aac2813b1f4d24ca5a0ca6f04efc100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1 class=\"page-header text-center\">Bienvenido a jComercial</h1>
";
        
        $__internal_297e3ed98c76840bfe28c0ea96a899739aac2813b1f4d24ca5a0ca6f04efc100->leave($__internal_297e3ed98c76840bfe28c0ea96a899739aac2813b1f4d24ca5a0ca6f04efc100_prof);

        
        $__internal_c35c2723e00635ccf533f9a3cebecfea48acf03803bb198a28360a25b3651145->leave($__internal_c35c2723e00635ccf533f9a3cebecfea48acf03803bb198a28360a25b3651145_prof);

    }

    public function getTemplateName()
    {
        return ":main:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<h1 class=\"page-header text-center\">Bienvenido a jComercial</h1>
{% endblock %}", ":main:homepage.html.twig", "/var/www/html/jComercial/app/Resources/views/main/homepage.html.twig");
    }
}
