<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac4d899aa45c8e04f11a0a37f3a572a06d5eda37db28656b55197b0a03d66249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9afe20482f36e6233aed3586327badfea3628a9fff3d9847cdd48da068bc9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9afe20482f36e6233aed3586327badfea3628a9fff3d9847cdd48da068bc9cc->enter($__internal_a9afe20482f36e6233aed3586327badfea3628a9fff3d9847cdd48da068bc9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7430190c3a4da765ea12851b7609a4e0891f8887614c621ec1ab773af4b46f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7430190c3a4da765ea12851b7609a4e0891f8887614c621ec1ab773af4b46f21->enter($__internal_7430190c3a4da765ea12851b7609a4e0891f8887614c621ec1ab773af4b46f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a9afe20482f36e6233aed3586327badfea3628a9fff3d9847cdd48da068bc9cc->leave($__internal_a9afe20482f36e6233aed3586327badfea3628a9fff3d9847cdd48da068bc9cc_prof);

        
        $__internal_7430190c3a4da765ea12851b7609a4e0891f8887614c621ec1ab773af4b46f21->leave($__internal_7430190c3a4da765ea12851b7609a4e0891f8887614c621ec1ab773af4b46f21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
