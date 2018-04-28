<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_877508cad7d200fcf78773b6eb6f491100e7815a9640bc823c2181189114503d extends Twig_Template
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
        $__internal_cb394391c71a749df44322929b761a6bb46e07fc3d9e4a0ad596c1a03364a49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb394391c71a749df44322929b761a6bb46e07fc3d9e4a0ad596c1a03364a49d->enter($__internal_cb394391c71a749df44322929b761a6bb46e07fc3d9e4a0ad596c1a03364a49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d2d6d68a8679e4c0395a145a1c464644a9109c862133cbf6b2890f0e18f5de9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d6d68a8679e4c0395a145a1c464644a9109c862133cbf6b2890f0e18f5de9c->enter($__internal_d2d6d68a8679e4c0395a145a1c464644a9109c862133cbf6b2890f0e18f5de9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cb394391c71a749df44322929b761a6bb46e07fc3d9e4a0ad596c1a03364a49d->leave($__internal_cb394391c71a749df44322929b761a6bb46e07fc3d9e4a0ad596c1a03364a49d_prof);

        
        $__internal_d2d6d68a8679e4c0395a145a1c464644a9109c862133cbf6b2890f0e18f5de9c->leave($__internal_d2d6d68a8679e4c0395a145a1c464644a9109c862133cbf6b2890f0e18f5de9c_prof);

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
", "TwigBundle:Exception:error.json.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
