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
        $__internal_524ac062803d8603d622c80ac5976e35f0d8717ef0b59fd9b3a1f4ad7a645866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524ac062803d8603d622c80ac5976e35f0d8717ef0b59fd9b3a1f4ad7a645866->enter($__internal_524ac062803d8603d622c80ac5976e35f0d8717ef0b59fd9b3a1f4ad7a645866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_21a00e11ce5a4c5633b8a7087cbd79e9419f127342c4c541c6bbb20a43b09829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a00e11ce5a4c5633b8a7087cbd79e9419f127342c4c541c6bbb20a43b09829->enter($__internal_21a00e11ce5a4c5633b8a7087cbd79e9419f127342c4c541c6bbb20a43b09829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_524ac062803d8603d622c80ac5976e35f0d8717ef0b59fd9b3a1f4ad7a645866->leave($__internal_524ac062803d8603d622c80ac5976e35f0d8717ef0b59fd9b3a1f4ad7a645866_prof);

        
        $__internal_21a00e11ce5a4c5633b8a7087cbd79e9419f127342c4c541c6bbb20a43b09829->leave($__internal_21a00e11ce5a4c5633b8a7087cbd79e9419f127342c4c541c6bbb20a43b09829_prof);

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
