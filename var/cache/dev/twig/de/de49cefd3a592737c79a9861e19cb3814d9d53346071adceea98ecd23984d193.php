<?php

/* player/show.html.twig */
class __TwigTemplate_85eb735d46a2441bbdec4a119a3b166fb3feb87d5d3961e6a4697d7a391dee64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "player/show.html.twig", 1);
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
        $__internal_ab6643806cf96bc0ce3d12cdf1e14820afdf0636d71108e15ad8b398d41db089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6643806cf96bc0ce3d12cdf1e14820afdf0636d71108e15ad8b398d41db089->enter($__internal_ab6643806cf96bc0ce3d12cdf1e14820afdf0636d71108e15ad8b398d41db089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/show.html.twig"));

        $__internal_ef1a2d6733ee3dac25f0d62bb76d46fa3dae91ba4828aa42a6c814f8ec1a3b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1a2d6733ee3dac25f0d62bb76d46fa3dae91ba4828aa42a6c814f8ec1a3b91->enter($__internal_ef1a2d6733ee3dac25f0d62bb76d46fa3dae91ba4828aa42a6c814f8ec1a3b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6643806cf96bc0ce3d12cdf1e14820afdf0636d71108e15ad8b398d41db089->leave($__internal_ab6643806cf96bc0ce3d12cdf1e14820afdf0636d71108e15ad8b398d41db089_prof);

        
        $__internal_ef1a2d6733ee3dac25f0d62bb76d46fa3dae91ba4828aa42a6c814f8ec1a3b91->leave($__internal_ef1a2d6733ee3dac25f0d62bb76d46fa3dae91ba4828aa42a6c814f8ec1a3b91_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d45bbf791234694d4017b3aeb1896a0bdca93fd3936ae516308ba58f99b99700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45bbf791234694d4017b3aeb1896a0bdca93fd3936ae516308ba58f99b99700->enter($__internal_d45bbf791234694d4017b3aeb1896a0bdca93fd3936ae516308ba58f99b99700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74d32510b7fccbd460ad36852c204388008fedf8e470effcebdf75006f0cdd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d32510b7fccbd460ad36852c204388008fedf8e470effcebdf75006f0cdd80->enter($__internal_74d32510b7fccbd460ad36852c204388008fedf8e470effcebdf75006f0cdd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class=\"genus-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? $this->getContext($context, "player")), "class", array()), "html", null, true);
        echo "</h2>

\t<div class=\"sea-creature-container\">
\t\t<div class=\"genus-photo\"></div>
\t\t<div class=\"genus-details\">
\t\t\t<dl class=\"genus-details-list\">
\t\t\t\t<dt>Healt Point:</dt>
\t\t\t\t<dd>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? $this->getContext($context, "player")), "healtPoint", array()), "html", null, true);
        echo "</dd>
\t\t\t\t<dt>Mana Point:</dt>
\t\t\t\t<dd>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? $this->getContext($context, "player")), "manaPoint", array()), "html", null, true);
        echo "</dd>
\t\t\t\t<dt>Experience:</dt>
\t\t\t\t<dd>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? $this->getContext($context, "player")), "experience", array()), "html", null, true);
        echo "</dd>
\t\t\t</dl>
\t\t</div>
\t</div>

";
        
        $__internal_74d32510b7fccbd460ad36852c204388008fedf8e470effcebdf75006f0cdd80->leave($__internal_74d32510b7fccbd460ad36852c204388008fedf8e470effcebdf75006f0cdd80_prof);

        
        $__internal_d45bbf791234694d4017b3aeb1896a0bdca93fd3936ae516308ba58f99b99700->leave($__internal_d45bbf791234694d4017b3aeb1896a0bdca93fd3936ae516308ba58f99b99700_prof);

    }

    public function getTemplateName()
    {
        return "player/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  65 => 13,  60 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
\t<h2 class=\"genus-name\">{{ player.class }}</h2>

\t<div class=\"sea-creature-container\">
\t\t<div class=\"genus-photo\"></div>
\t\t<div class=\"genus-details\">
\t\t\t<dl class=\"genus-details-list\">
\t\t\t\t<dt>Healt Point:</dt>
\t\t\t\t<dd>{{ player.healtPoint }}</dd>
\t\t\t\t<dt>Mana Point:</dt>
\t\t\t\t<dd>{{ player.manaPoint }}</dd>
\t\t\t\t<dt>Experience:</dt>
\t\t\t\t<dd>{{ player.experience }}</dd>
\t\t\t</dl>
\t\t</div>
\t</div>

{% endblock %}", "player/show.html.twig", "/var/www/html/HeroQuest/app/Resources/views/player/show.html.twig");
    }
}
