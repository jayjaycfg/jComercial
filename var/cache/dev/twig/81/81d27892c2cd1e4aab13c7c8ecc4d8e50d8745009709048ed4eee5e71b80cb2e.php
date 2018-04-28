<?php

/* player/list.html.twig */
class __TwigTemplate_8417dc48d26b736ee7996f6ac9dfafbeed8e6d982350bb667dd0032e4568211e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "player/list.html.twig", 1);
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
        $__internal_bdb350614dde42ac12d2a11ba8603cdd5746bd7547c86df25e47f100cf67f2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb350614dde42ac12d2a11ba8603cdd5746bd7547c86df25e47f100cf67f2e9->enter($__internal_bdb350614dde42ac12d2a11ba8603cdd5746bd7547c86df25e47f100cf67f2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/list.html.twig"));

        $__internal_9bef81c635d49682d829b24a6b9b1d38bb05073acf39d124dc12fd08bdcac946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bef81c635d49682d829b24a6b9b1d38bb05073acf39d124dc12fd08bdcac946->enter($__internal_9bef81c635d49682d829b24a6b9b1d38bb05073acf39d124dc12fd08bdcac946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdb350614dde42ac12d2a11ba8603cdd5746bd7547c86df25e47f100cf67f2e9->leave($__internal_bdb350614dde42ac12d2a11ba8603cdd5746bd7547c86df25e47f100cf67f2e9_prof);

        
        $__internal_9bef81c635d49682d829b24a6b9b1d38bb05073acf39d124dc12fd08bdcac946->leave($__internal_9bef81c635d49682d829b24a6b9b1d38bb05073acf39d124dc12fd08bdcac946_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08b18ad2e606c85d2f3e6253a7305a9b5bb496f74eb609cb9a053810a3eaba19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b18ad2e606c85d2f3e6253a7305a9b5bb496f74eb609cb9a053810a3eaba19->enter($__internal_08b18ad2e606c85d2f3e6253a7305a9b5bb496f74eb609cb9a053810a3eaba19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceb71a5b008d39f228652de267bd19d0661b7a38a34ac305a440074e26274dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb71a5b008d39f228652de267bd19d0661b7a38a34ac305a440074e26274dc2->enter($__internal_ceb71a5b008d39f228652de267bd19d0661b7a38a34ac305a440074e26274dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<ul>
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? $this->getContext($context, "players")));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 7
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("player_show", array("id" => $this->getAttribute(            // line 8
$context["player"], "id", array()))), "html", null, true);
            // line 9
            echo "\">
\t\t\t<li> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "class", array()), "html", null, true);
            echo "</li>
\t\t\t</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</ul>
\t</div>
";
        
        $__internal_ceb71a5b008d39f228652de267bd19d0661b7a38a34ac305a440074e26274dc2->leave($__internal_ceb71a5b008d39f228652de267bd19d0661b7a38a34ac305a440074e26274dc2_prof);

        
        $__internal_08b18ad2e606c85d2f3e6253a7305a9b5bb496f74eb609cb9a053810a3eaba19->leave($__internal_08b18ad2e606c85d2f3e6253a7305a9b5bb496f74eb609cb9a053810a3eaba19_prof);

    }

    public function getTemplateName()
    {
        return "player/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  64 => 10,  61 => 9,  59 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
\t<div class=\"container\">
\t\t<ul>
\t\t\t{% for player in players %}
\t\t\t<a href=\"{{ path('player_show',{
\t\t\t'id' : player.id
\t\t\t}) }}\">
\t\t\t<li> {{ player.class }}</li>
\t\t\t</a>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>
{% endblock %}

", "player/list.html.twig", "/var/www/html/HeroQuest/app/Resources/views/player/list.html.twig");
    }
}
