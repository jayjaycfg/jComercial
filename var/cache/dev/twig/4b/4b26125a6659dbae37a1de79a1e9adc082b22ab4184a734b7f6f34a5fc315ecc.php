<?php

/* :cliente:FormLayout.html.twig */
class __TwigTemplate_0385286ddb1ccc3d2fdd8f8fb429177d02f27fd0e86be546424f2c6a95c8c7dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:FormLayout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_474077809bba7f042d93580b2373249f12488dd99228d8ac38428c1969773de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474077809bba7f042d93580b2373249f12488dd99228d8ac38428c1969773de2->enter($__internal_474077809bba7f042d93580b2373249f12488dd99228d8ac38428c1969773de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $__internal_12e7f89653751bed64247f001093a0709f98c3e6c9c4edf72d67f70072d84a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e7f89653751bed64247f001093a0709f98c3e6c9c4edf72d67f70072d84a3c->enter($__internal_12e7f89653751bed64247f001093a0709f98c3e6c9c4edf72d67f70072d84a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_474077809bba7f042d93580b2373249f12488dd99228d8ac38428c1969773de2->leave($__internal_474077809bba7f042d93580b2373249f12488dd99228d8ac38428c1969773de2_prof);

        
        $__internal_12e7f89653751bed64247f001093a0709f98c3e6c9c4edf72d67f70072d84a3c->leave($__internal_12e7f89653751bed64247f001093a0709f98c3e6c9c4edf72d67f70072d84a3c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e361cb60320651b34731a72448571fc1283f2bf59ff2a440ab48c4150c81084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e361cb60320651b34731a72448571fc1283f2bf59ff2a440ab48c4150c81084->enter($__internal_2e361cb60320651b34731a72448571fc1283f2bf59ff2a440ab48c4150c81084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3dfe96070899c71fdbae2366f9c311fb6586487b0b2bd2311071978b2462d793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfe96070899c71fdbae2366f9c311fb6586487b0b2bd2311071978b2462d793->enter($__internal_3dfe96070899c71fdbae2366f9c311fb6586487b0b2bd2311071978b2462d793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
";
        
        $__internal_3dfe96070899c71fdbae2366f9c311fb6586487b0b2bd2311071978b2462d793->leave($__internal_3dfe96070899c71fdbae2366f9c311fb6586487b0b2bd2311071978b2462d793_prof);

        
        $__internal_2e361cb60320651b34731a72448571fc1283f2bf59ff2a440ab48c4150c81084->leave($__internal_2e361cb60320651b34731a72448571fc1283f2bf59ff2a440ab48c4150c81084_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_398c8dd42b1eb87fe298119024fb2756b2f80ebd76119ebbd1c63c647bba8cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398c8dd42b1eb87fe298119024fb2756b2f80ebd76119ebbd1c63c647bba8cd1->enter($__internal_398c8dd42b1eb87fe298119024fb2756b2f80ebd76119ebbd1c63c647bba8cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_944d5887d658509c8b286d5d8e8c78d525da491c73ab3e9e85cf093b1ff7db07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944d5887d658509c8b286d5d8e8c78d525da491c73ab3e9e85cf093b1ff7db07->enter($__internal_944d5887d658509c8b286d5d8e8c78d525da491c73ab3e9e85cf093b1ff7db07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
        \$(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        })
\t</script>
";
        
        $__internal_944d5887d658509c8b286d5d8e8c78d525da491c73ab3e9e85cf093b1ff7db07->leave($__internal_944d5887d658509c8b286d5d8e8c78d525da491c73ab3e9e85cf093b1ff7db07_prof);

        
        $__internal_398c8dd42b1eb87fe298119024fb2756b2f80ebd76119ebbd1c63c647bba8cd1->leave($__internal_398c8dd42b1eb87fe298119024fb2756b2f80ebd76119ebbd1c63c647bba8cd1_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:FormLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 10,  76 => 9,  67 => 8,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datepicker.css') }}\">
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t<script src=\"{{ asset('js/bootstrap-datepicker.min.js') }}\"></script>
\t<script>
        \$(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        })
\t</script>
{% endblock %}", ":cliente:FormLayout.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/FormLayout.html.twig");
    }
}
