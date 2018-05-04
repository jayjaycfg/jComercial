<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_440052636673501027f2ccee8006eb2f949d3bfff4de277fc05e94b3b877842d extends Twig_Template
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
        $__internal_a28666f8f1a118020b68ac47fd3354be40ed0e1ff3e399dc782d828a5bec9de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28666f8f1a118020b68ac47fd3354be40ed0e1ff3e399dc782d828a5bec9de0->enter($__internal_a28666f8f1a118020b68ac47fd3354be40ed0e1ff3e399dc782d828a5bec9de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_688f2669d255a54d85ce1d9fa1f8cc800b17421138e786e192fb756764186630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688f2669d255a54d85ce1d9fa1f8cc800b17421138e786e192fb756764186630->enter($__internal_688f2669d255a54d85ce1d9fa1f8cc800b17421138e786e192fb756764186630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a28666f8f1a118020b68ac47fd3354be40ed0e1ff3e399dc782d828a5bec9de0->leave($__internal_a28666f8f1a118020b68ac47fd3354be40ed0e1ff3e399dc782d828a5bec9de0_prof);

        
        $__internal_688f2669d255a54d85ce1d9fa1f8cc800b17421138e786e192fb756764186630->leave($__internal_688f2669d255a54d85ce1d9fa1f8cc800b17421138e786e192fb756764186630_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
