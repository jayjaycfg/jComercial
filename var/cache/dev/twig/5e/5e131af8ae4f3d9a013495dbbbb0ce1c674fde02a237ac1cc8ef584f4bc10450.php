<?php

/* :proveedor:new.html.twig */
class __TwigTemplate_25a3a0572fc6f2d72c4557f7de4722721a0aa2a4d6b23e8b3a957b207dc221a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":proveedor:new.html.twig", 1);
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
        $__internal_cfc4d3f7a5388b1bea808b4370615b5cc94fc401aea5505e51e30623a1e5273f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc4d3f7a5388b1bea808b4370615b5cc94fc401aea5505e51e30623a1e5273f->enter($__internal_cfc4d3f7a5388b1bea808b4370615b5cc94fc401aea5505e51e30623a1e5273f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:new.html.twig"));

        $__internal_d810d61400cc1ac84e7cb11ca4910c74656e40c97f3ee81874b22ddfe7423268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d810d61400cc1ac84e7cb11ca4910c74656e40c97f3ee81874b22ddfe7423268->enter($__internal_d810d61400cc1ac84e7cb11ca4910c74656e40c97f3ee81874b22ddfe7423268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc4d3f7a5388b1bea808b4370615b5cc94fc401aea5505e51e30623a1e5273f->leave($__internal_cfc4d3f7a5388b1bea808b4370615b5cc94fc401aea5505e51e30623a1e5273f_prof);

        
        $__internal_d810d61400cc1ac84e7cb11ca4910c74656e40c97f3ee81874b22ddfe7423268->leave($__internal_d810d61400cc1ac84e7cb11ca4910c74656e40c97f3ee81874b22ddfe7423268_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a9b120afacea6645e035f04d4181a5d95d17ee077e8fde467674ca48c05dcfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9b120afacea6645e035f04d4181a5d95d17ee077e8fde467674ca48c05dcfd->enter($__internal_9a9b120afacea6645e035f04d4181a5d95d17ee077e8fde467674ca48c05dcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45fc2fa588a22b61d79f9b32a5abbf2bc9744c3c8198d17943719739e460f4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fc2fa588a22b61d79f9b32a5abbf2bc9744c3c8198d17943719739e460f4ba->enter($__internal_45fc2fa588a22b61d79f9b32a5abbf2bc9744c3c8198d17943719739e460f4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con proveedor</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/proveedor:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_45fc2fa588a22b61d79f9b32a5abbf2bc9744c3c8198d17943719739e460f4ba->leave($__internal_45fc2fa588a22b61d79f9b32a5abbf2bc9744c3c8198d17943719739e460f4ba_prof);

        
        $__internal_9a9b120afacea6645e035f04d4181a5d95d17ee077e8fde467674ca48c05dcfd->leave($__internal_9a9b120afacea6645e035f04d4181a5d95d17ee077e8fde467674ca48c05dcfd_prof);

    }

    public function getTemplateName()
    {
        return ":proveedor:new.html.twig";
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
\t\t\t\t<h1>Nuevo Contrato con proveedor</h1>
\t\t\t\t{{ include(':/proveedor:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":proveedor:new.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/new.html.twig");
    }
}
