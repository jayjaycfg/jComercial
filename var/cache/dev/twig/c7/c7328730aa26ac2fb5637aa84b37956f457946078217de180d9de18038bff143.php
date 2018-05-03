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
        $__internal_39892f2597121e4dbddad56f5c14c2b1406b613761f0f8b6b0edcfda99b9cdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39892f2597121e4dbddad56f5c14c2b1406b613761f0f8b6b0edcfda99b9cdd4->enter($__internal_39892f2597121e4dbddad56f5c14c2b1406b613761f0f8b6b0edcfda99b9cdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_04e1f24751d8ee05049a9253c225d02ffe58a0432ec08b0034430bb24a5ce900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e1f24751d8ee05049a9253c225d02ffe58a0432ec08b0034430bb24a5ce900->enter($__internal_04e1f24751d8ee05049a9253c225d02ffe58a0432ec08b0034430bb24a5ce900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_39892f2597121e4dbddad56f5c14c2b1406b613761f0f8b6b0edcfda99b9cdd4->leave($__internal_39892f2597121e4dbddad56f5c14c2b1406b613761f0f8b6b0edcfda99b9cdd4_prof);

        
        $__internal_04e1f24751d8ee05049a9253c225d02ffe58a0432ec08b0034430bb24a5ce900->leave($__internal_04e1f24751d8ee05049a9253c225d02ffe58a0432ec08b0034430bb24a5ce900_prof);

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
