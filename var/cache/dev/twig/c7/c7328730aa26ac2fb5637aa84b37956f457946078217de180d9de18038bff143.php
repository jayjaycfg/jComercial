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
        $__internal_fbdcfc6e182914f45807172bee1ed7d6898882e249d9cbf5de17da9afcc7caca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbdcfc6e182914f45807172bee1ed7d6898882e249d9cbf5de17da9afcc7caca->enter($__internal_fbdcfc6e182914f45807172bee1ed7d6898882e249d9cbf5de17da9afcc7caca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_99deb7aa60165aac2a0dcc3594239cb5ab8276a3e36840b1df3622b3e3161cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99deb7aa60165aac2a0dcc3594239cb5ab8276a3e36840b1df3622b3e3161cb1->enter($__internal_99deb7aa60165aac2a0dcc3594239cb5ab8276a3e36840b1df3622b3e3161cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fbdcfc6e182914f45807172bee1ed7d6898882e249d9cbf5de17da9afcc7caca->leave($__internal_fbdcfc6e182914f45807172bee1ed7d6898882e249d9cbf5de17da9afcc7caca_prof);

        
        $__internal_99deb7aa60165aac2a0dcc3594239cb5ab8276a3e36840b1df3622b3e3161cb1->leave($__internal_99deb7aa60165aac2a0dcc3594239cb5ab8276a3e36840b1df3622b3e3161cb1_prof);

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
