<?php

/* :cliente:FormLayout.html.twig */
class __TwigTemplate_f877551f2c49a625e74cfcb57922cdec5bdc82b1642f9dc0f70aa4a52211f960 extends Twig_Template
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
        $__internal_10ff4a2dc65748e985ef70c6d886985e9da4fa2539f793a244becde367b5f970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ff4a2dc65748e985ef70c6d886985e9da4fa2539f793a244becde367b5f970->enter($__internal_10ff4a2dc65748e985ef70c6d886985e9da4fa2539f793a244becde367b5f970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $__internal_40a0a4a18103ce88917b7851cadb36a32f5191d72f9660faf4c3d34572d1131a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a0a4a18103ce88917b7851cadb36a32f5191d72f9660faf4c3d34572d1131a->enter($__internal_40a0a4a18103ce88917b7851cadb36a32f5191d72f9660faf4c3d34572d1131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ff4a2dc65748e985ef70c6d886985e9da4fa2539f793a244becde367b5f970->leave($__internal_10ff4a2dc65748e985ef70c6d886985e9da4fa2539f793a244becde367b5f970_prof);

        
        $__internal_40a0a4a18103ce88917b7851cadb36a32f5191d72f9660faf4c3d34572d1131a->leave($__internal_40a0a4a18103ce88917b7851cadb36a32f5191d72f9660faf4c3d34572d1131a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75762b98361fa91cfd5050836c80fb688a803b54aa0d82165e59726eebdff713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75762b98361fa91cfd5050836c80fb688a803b54aa0d82165e59726eebdff713->enter($__internal_75762b98361fa91cfd5050836c80fb688a803b54aa0d82165e59726eebdff713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b56921555d84a494d8351d66b3e7f61a31ecf09020d29d51d8272e5a66f40311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56921555d84a494d8351d66b3e7f61a31ecf09020d29d51d8272e5a66f40311->enter($__internal_b56921555d84a494d8351d66b3e7f61a31ecf09020d29d51d8272e5a66f40311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
";
        
        $__internal_b56921555d84a494d8351d66b3e7f61a31ecf09020d29d51d8272e5a66f40311->leave($__internal_b56921555d84a494d8351d66b3e7f61a31ecf09020d29d51d8272e5a66f40311_prof);

        
        $__internal_75762b98361fa91cfd5050836c80fb688a803b54aa0d82165e59726eebdff713->leave($__internal_75762b98361fa91cfd5050836c80fb688a803b54aa0d82165e59726eebdff713_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59eaa14b675691ef54fc0c84b286a1bcfb2ded579dcebd7f54a569fb10d896be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59eaa14b675691ef54fc0c84b286a1bcfb2ded579dcebd7f54a569fb10d896be->enter($__internal_59eaa14b675691ef54fc0c84b286a1bcfb2ded579dcebd7f54a569fb10d896be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a64391346a15d5737ad29fe3e68f5f9634a7291e80d2e7d44dcc56630bbb8595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64391346a15d5737ad29fe3e68f5f9634a7291e80d2e7d44dcc56630bbb8595->enter($__internal_a64391346a15d5737ad29fe3e68f5f9634a7291e80d2e7d44dcc56630bbb8595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a64391346a15d5737ad29fe3e68f5f9634a7291e80d2e7d44dcc56630bbb8595->leave($__internal_a64391346a15d5737ad29fe3e68f5f9634a7291e80d2e7d44dcc56630bbb8595_prof);

        
        $__internal_59eaa14b675691ef54fc0c84b286a1bcfb2ded579dcebd7f54a569fb10d896be->leave($__internal_59eaa14b675691ef54fc0c84b286a1bcfb2ded579dcebd7f54a569fb10d896be_prof);

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
