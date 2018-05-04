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
        $__internal_1b99f5f473050fe8c9ef8da7eb51e90d0145f97c60026e4aab8890e3812749cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b99f5f473050fe8c9ef8da7eb51e90d0145f97c60026e4aab8890e3812749cc->enter($__internal_1b99f5f473050fe8c9ef8da7eb51e90d0145f97c60026e4aab8890e3812749cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $__internal_c311725d6dfdee91eaec3a02e9baf1268a1f5e1a2e4def0b22e3d6524fb861c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c311725d6dfdee91eaec3a02e9baf1268a1f5e1a2e4def0b22e3d6524fb861c7->enter($__internal_c311725d6dfdee91eaec3a02e9baf1268a1f5e1a2e4def0b22e3d6524fb861c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:FormLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b99f5f473050fe8c9ef8da7eb51e90d0145f97c60026e4aab8890e3812749cc->leave($__internal_1b99f5f473050fe8c9ef8da7eb51e90d0145f97c60026e4aab8890e3812749cc_prof);

        
        $__internal_c311725d6dfdee91eaec3a02e9baf1268a1f5e1a2e4def0b22e3d6524fb861c7->leave($__internal_c311725d6dfdee91eaec3a02e9baf1268a1f5e1a2e4def0b22e3d6524fb861c7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6149a4bb8119abf94ceb0fbdd703dcc1f8beb1b17a43f67e6005c035e6c1eea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6149a4bb8119abf94ceb0fbdd703dcc1f8beb1b17a43f67e6005c035e6c1eea2->enter($__internal_6149a4bb8119abf94ceb0fbdd703dcc1f8beb1b17a43f67e6005c035e6c1eea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3df2ad2f9296ff4e2a86bdd5fab2be9ebce3881a3fbea643217b3a3a21f30c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df2ad2f9296ff4e2a86bdd5fab2be9ebce3881a3fbea643217b3a3a21f30c27->enter($__internal_3df2ad2f9296ff4e2a86bdd5fab2be9ebce3881a3fbea643217b3a3a21f30c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
";
        
        $__internal_3df2ad2f9296ff4e2a86bdd5fab2be9ebce3881a3fbea643217b3a3a21f30c27->leave($__internal_3df2ad2f9296ff4e2a86bdd5fab2be9ebce3881a3fbea643217b3a3a21f30c27_prof);

        
        $__internal_6149a4bb8119abf94ceb0fbdd703dcc1f8beb1b17a43f67e6005c035e6c1eea2->leave($__internal_6149a4bb8119abf94ceb0fbdd703dcc1f8beb1b17a43f67e6005c035e6c1eea2_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2acc583efa35b58fac6e6d5e980fcfeac09f5f390fd0034e9763adf3cb9281b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acc583efa35b58fac6e6d5e980fcfeac09f5f390fd0034e9763adf3cb9281b9->enter($__internal_2acc583efa35b58fac6e6d5e980fcfeac09f5f390fd0034e9763adf3cb9281b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b133b6201b1c6ecfa0a90cb19dd6398dd2d3d2319ab666ca1144bf39b1251f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b133b6201b1c6ecfa0a90cb19dd6398dd2d3d2319ab666ca1144bf39b1251f3f->enter($__internal_b133b6201b1c6ecfa0a90cb19dd6398dd2d3d2319ab666ca1144bf39b1251f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b133b6201b1c6ecfa0a90cb19dd6398dd2d3d2319ab666ca1144bf39b1251f3f->leave($__internal_b133b6201b1c6ecfa0a90cb19dd6398dd2d3d2319ab666ca1144bf39b1251f3f_prof);

        
        $__internal_2acc583efa35b58fac6e6d5e980fcfeac09f5f390fd0034e9763adf3cb9281b9->leave($__internal_2acc583efa35b58fac6e6d5e980fcfeac09f5f390fd0034e9763adf3cb9281b9_prof);

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
