<?php

/* :factura:edit.html.twig */
class __TwigTemplate_8febbbdf4aaa591eeb057e460117a01555ed8054e9b91e80ee5c5cead1ee8585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":factura:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":cliente:FormLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71fa32989c08d364f175292ea30eaac25e520ea0082d211bb8780b61df2ee426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fa32989c08d364f175292ea30eaac25e520ea0082d211bb8780b61df2ee426->enter($__internal_71fa32989c08d364f175292ea30eaac25e520ea0082d211bb8780b61df2ee426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:edit.html.twig"));

        $__internal_894ad740b9707cefecdc1b0e1c7d99f3c31e0e4e3edc5a5b3d6b14ed86275670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894ad740b9707cefecdc1b0e1c7d99f3c31e0e4e3edc5a5b3d6b14ed86275670->enter($__internal_894ad740b9707cefecdc1b0e1c7d99f3c31e0e4e3edc5a5b3d6b14ed86275670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71fa32989c08d364f175292ea30eaac25e520ea0082d211bb8780b61df2ee426->leave($__internal_71fa32989c08d364f175292ea30eaac25e520ea0082d211bb8780b61df2ee426_prof);

        
        $__internal_894ad740b9707cefecdc1b0e1c7d99f3c31e0e4e3edc5a5b3d6b14ed86275670->leave($__internal_894ad740b9707cefecdc1b0e1c7d99f3c31e0e4e3edc5a5b3d6b14ed86275670_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aad2d2ca2d07cc485722a914564e586670f0ec3a1712ec361e1842468ec6c196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad2d2ca2d07cc485722a914564e586670f0ec3a1712ec361e1842468ec6c196->enter($__internal_aad2d2ca2d07cc485722a914564e586670f0ec3a1712ec361e1842468ec6c196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53ec114d0f0505d40636df7fb763f2a79b59812ef1f32f39cc9ba01b4a49cf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ec114d0f0505d40636df7fb763f2a79b59812ef1f32f39cc9ba01b4a49cf8b->enter($__internal_53ec114d0f0505d40636df7fb763f2a79b59812ef1f32f39cc9ba01b4a49cf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Factura</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/factura:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_53ec114d0f0505d40636df7fb763f2a79b59812ef1f32f39cc9ba01b4a49cf8b->leave($__internal_53ec114d0f0505d40636df7fb763f2a79b59812ef1f32f39cc9ba01b4a49cf8b_prof);

        
        $__internal_aad2d2ca2d07cc485722a914564e586670f0ec3a1712ec361e1842468ec6c196->leave($__internal_aad2d2ca2d07cc485722a914564e586670f0ec3a1712ec361e1842468ec6c196_prof);

    }

    public function getTemplateName()
    {
        return ":factura:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ':cliente:FormLayout.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Factura</h1>
\t\t\t\t{{ include(':/factura:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", ":factura:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/edit.html.twig");
    }
}
