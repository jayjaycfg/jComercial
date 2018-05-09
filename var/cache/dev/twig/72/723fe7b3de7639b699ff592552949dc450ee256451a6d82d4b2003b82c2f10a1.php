<?php

/* :cliente:FormLayout.html.twig */
class __TwigTemplate_761e5708e23e08c5d0956d2668abcfca78910f594c0e7d0ac3faddbe56b696db extends Twig_Template
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
        $__internal_5faee4a20fedc78998e38f8a5665e1717b5f656e29d68ca1784dc28537942e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faee4a20fedc78998e38f8a5665e1717b5f656e29d68ca1784dc28537942e15->enter($__internal_5faee4a20fedc78998e38f8a5665e1717b5f656e29d68ca1784dc28537942e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $__internal_1e322ca975af6777481aaf5caeeca3677bfc63a4220b5f7247b40036480173b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e322ca975af6777481aaf5caeeca3677bfc63a4220b5f7247b40036480173b9->enter($__internal_1e322ca975af6777481aaf5caeeca3677bfc63a4220b5f7247b40036480173b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5faee4a20fedc78998e38f8a5665e1717b5f656e29d68ca1784dc28537942e15->leave($__internal_5faee4a20fedc78998e38f8a5665e1717b5f656e29d68ca1784dc28537942e15_prof);

        
        $__internal_1e322ca975af6777481aaf5caeeca3677bfc63a4220b5f7247b40036480173b9->leave($__internal_1e322ca975af6777481aaf5caeeca3677bfc63a4220b5f7247b40036480173b9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f38f7c767fb2d79c3de6a2f255c7637615483788e2a14939db85182a200cd8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38f7c767fb2d79c3de6a2f255c7637615483788e2a14939db85182a200cd8d3->enter($__internal_f38f7c767fb2d79c3de6a2f255c7637615483788e2a14939db85182a200cd8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f8bcb57afbeca876ae3e0ed84dac938d207191e85337464d9d62d1cb51325b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bcb57afbeca876ae3e0ed84dac938d207191e85337464d9d62d1cb51325b8e->enter($__internal_f8bcb57afbeca876ae3e0ed84dac938d207191e85337464d9d62d1cb51325b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
";
        
        $__internal_f8bcb57afbeca876ae3e0ed84dac938d207191e85337464d9d62d1cb51325b8e->leave($__internal_f8bcb57afbeca876ae3e0ed84dac938d207191e85337464d9d62d1cb51325b8e_prof);

        
        $__internal_f38f7c767fb2d79c3de6a2f255c7637615483788e2a14939db85182a200cd8d3->leave($__internal_f38f7c767fb2d79c3de6a2f255c7637615483788e2a14939db85182a200cd8d3_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_166d138890d10fdefc96f8fc0c4afabebb7c6cde0efd5b6e6702398c767618aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166d138890d10fdefc96f8fc0c4afabebb7c6cde0efd5b6e6702398c767618aa->enter($__internal_166d138890d10fdefc96f8fc0c4afabebb7c6cde0efd5b6e6702398c767618aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3d4be09534dce6f41fbd8c6fed745a7c83295fb5095676eb8bb9e530548a1123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4be09534dce6f41fbd8c6fed745a7c83295fb5095676eb8bb9e530548a1123->enter($__internal_3d4be09534dce6f41fbd8c6fed745a7c83295fb5095676eb8bb9e530548a1123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3d4be09534dce6f41fbd8c6fed745a7c83295fb5095676eb8bb9e530548a1123->leave($__internal_3d4be09534dce6f41fbd8c6fed745a7c83295fb5095676eb8bb9e530548a1123_prof);

        
        $__internal_166d138890d10fdefc96f8fc0c4afabebb7c6cde0efd5b6e6702398c767618aa->leave($__internal_166d138890d10fdefc96f8fc0c4afabebb7c6cde0efd5b6e6702398c767618aa_prof);

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
