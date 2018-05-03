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
        $__internal_2f1ebca9a9b8f03f0cce1af033bee6d3fb22a35b989b71f921a12a025523df2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1ebca9a9b8f03f0cce1af033bee6d3fb22a35b989b71f921a12a025523df2b->enter($__internal_2f1ebca9a9b8f03f0cce1af033bee6d3fb22a35b989b71f921a12a025523df2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $__internal_a28677d7164349a953396114f3c9c452c924ee62848bd42483cd0af9d120a828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28677d7164349a953396114f3c9c452c924ee62848bd42483cd0af9d120a828->enter($__internal_a28677d7164349a953396114f3c9c452c924ee62848bd42483cd0af9d120a828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f1ebca9a9b8f03f0cce1af033bee6d3fb22a35b989b71f921a12a025523df2b->leave($__internal_2f1ebca9a9b8f03f0cce1af033bee6d3fb22a35b989b71f921a12a025523df2b_prof);

        
        $__internal_a28677d7164349a953396114f3c9c452c924ee62848bd42483cd0af9d120a828->leave($__internal_a28677d7164349a953396114f3c9c452c924ee62848bd42483cd0af9d120a828_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_925ddaf7a90aae59e20e3da17c3d0a47636eab98c736be35eb45016d6ea643ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925ddaf7a90aae59e20e3da17c3d0a47636eab98c736be35eb45016d6ea643ce->enter($__internal_925ddaf7a90aae59e20e3da17c3d0a47636eab98c736be35eb45016d6ea643ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b83f0032223b74ae1134088c167e9ea31ca3745fe9c7d403ba401774ac520e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83f0032223b74ae1134088c167e9ea31ca3745fe9c7d403ba401774ac520e62->enter($__internal_b83f0032223b74ae1134088c167e9ea31ca3745fe9c7d403ba401774ac520e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
";
        
        $__internal_b83f0032223b74ae1134088c167e9ea31ca3745fe9c7d403ba401774ac520e62->leave($__internal_b83f0032223b74ae1134088c167e9ea31ca3745fe9c7d403ba401774ac520e62_prof);

        
        $__internal_925ddaf7a90aae59e20e3da17c3d0a47636eab98c736be35eb45016d6ea643ce->leave($__internal_925ddaf7a90aae59e20e3da17c3d0a47636eab98c736be35eb45016d6ea643ce_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac6283f303fe8542d8ebf1e249c1f8e18db088314d9226c225f615269b4873bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6283f303fe8542d8ebf1e249c1f8e18db088314d9226c225f615269b4873bf->enter($__internal_ac6283f303fe8542d8ebf1e249c1f8e18db088314d9226c225f615269b4873bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52828d130d885cc5f3b6b12d9670ae818319baf1c9293aa0836557749f48dd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52828d130d885cc5f3b6b12d9670ae818319baf1c9293aa0836557749f48dd14->enter($__internal_52828d130d885cc5f3b6b12d9670ae818319baf1c9293aa0836557749f48dd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_52828d130d885cc5f3b6b12d9670ae818319baf1c9293aa0836557749f48dd14->leave($__internal_52828d130d885cc5f3b6b12d9670ae818319baf1c9293aa0836557749f48dd14_prof);

        
        $__internal_ac6283f303fe8542d8ebf1e249c1f8e18db088314d9226c225f615269b4873bf->leave($__internal_ac6283f303fe8542d8ebf1e249c1f8e18db088314d9226c225f615269b4873bf_prof);

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
