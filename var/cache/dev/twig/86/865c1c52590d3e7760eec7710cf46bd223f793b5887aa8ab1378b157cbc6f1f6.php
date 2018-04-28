<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aec2911de45943d9b0d8e4d2470b10c95cdb905f92825b4ace8aaf70fc1d58b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec2911de45943d9b0d8e4d2470b10c95cdb905f92825b4ace8aaf70fc1d58b5->enter($__internal_aec2911de45943d9b0d8e4d2470b10c95cdb905f92825b4ace8aaf70fc1d58b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6b4e819eed67b2083537651f021cb5f3250b67a8e1281779aff81041a795b45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4e819eed67b2083537651f021cb5f3250b67a8e1281779aff81041a795b45b->enter($__internal_6b4e819eed67b2083537651f021cb5f3250b67a8e1281779aff81041a795b45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec2911de45943d9b0d8e4d2470b10c95cdb905f92825b4ace8aaf70fc1d58b5->leave($__internal_aec2911de45943d9b0d8e4d2470b10c95cdb905f92825b4ace8aaf70fc1d58b5_prof);

        
        $__internal_6b4e819eed67b2083537651f021cb5f3250b67a8e1281779aff81041a795b45b->leave($__internal_6b4e819eed67b2083537651f021cb5f3250b67a8e1281779aff81041a795b45b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e70ea88aa894038add47a578dd2f03da8a417c3993d201000aab8108b1360a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70ea88aa894038add47a578dd2f03da8a417c3993d201000aab8108b1360a79->enter($__internal_e70ea88aa894038add47a578dd2f03da8a417c3993d201000aab8108b1360a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fda21ae6dfd6feb8624df5b2259a66fd88b01f69240fdd732f0b67b56ca52ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda21ae6dfd6feb8624df5b2259a66fd88b01f69240fdd732f0b67b56ca52ea1->enter($__internal_fda21ae6dfd6feb8624df5b2259a66fd88b01f69240fdd732f0b67b56ca52ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fda21ae6dfd6feb8624df5b2259a66fd88b01f69240fdd732f0b67b56ca52ea1->leave($__internal_fda21ae6dfd6feb8624df5b2259a66fd88b01f69240fdd732f0b67b56ca52ea1_prof);

        
        $__internal_e70ea88aa894038add47a578dd2f03da8a417c3993d201000aab8108b1360a79->leave($__internal_e70ea88aa894038add47a578dd2f03da8a417c3993d201000aab8108b1360a79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd048aafeb26e8485be801061fdc36e1e46ccacd1f147dbaa58e501ed44f65a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd048aafeb26e8485be801061fdc36e1e46ccacd1f147dbaa58e501ed44f65a3->enter($__internal_dd048aafeb26e8485be801061fdc36e1e46ccacd1f147dbaa58e501ed44f65a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54b5226a872c662f9e181d40edd16214af2841266688177c9ecbac613374fdab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b5226a872c662f9e181d40edd16214af2841266688177c9ecbac613374fdab->enter($__internal_54b5226a872c662f9e181d40edd16214af2841266688177c9ecbac613374fdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_54b5226a872c662f9e181d40edd16214af2841266688177c9ecbac613374fdab->leave($__internal_54b5226a872c662f9e181d40edd16214af2841266688177c9ecbac613374fdab_prof);

        
        $__internal_dd048aafeb26e8485be801061fdc36e1e46ccacd1f147dbaa58e501ed44f65a3->leave($__internal_dd048aafeb26e8485be801061fdc36e1e46ccacd1f147dbaa58e501ed44f65a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_116ac0b62afa4945eb108f419d9c3e25975ee430ca59520449e570e4f861760c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116ac0b62afa4945eb108f419d9c3e25975ee430ca59520449e570e4f861760c->enter($__internal_116ac0b62afa4945eb108f419d9c3e25975ee430ca59520449e570e4f861760c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c61ee86733969895a5b6e7d83984b45838d78960d11fe26c4df4fffed0f9b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c61ee86733969895a5b6e7d83984b45838d78960d11fe26c4df4fffed0f9b81->enter($__internal_5c61ee86733969895a5b6e7d83984b45838d78960d11fe26c4df4fffed0f9b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c61ee86733969895a5b6e7d83984b45838d78960d11fe26c4df4fffed0f9b81->leave($__internal_5c61ee86733969895a5b6e7d83984b45838d78960d11fe26c4df4fffed0f9b81_prof);

        
        $__internal_116ac0b62afa4945eb108f419d9c3e25975ee430ca59520449e570e4f861760c->leave($__internal_116ac0b62afa4945eb108f419d9c3e25975ee430ca59520449e570e4f861760c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
