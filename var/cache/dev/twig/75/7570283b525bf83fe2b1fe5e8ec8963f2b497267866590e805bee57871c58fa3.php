<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_39452b50f6ce2f90ce7e24558ebe75bdd1004890a919d234276f6f358c845606 extends Twig_Template
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
        $__internal_c16abf222d688cb84c140213de9c2667401b43bc020179a60842628e53479e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16abf222d688cb84c140213de9c2667401b43bc020179a60842628e53479e44->enter($__internal_c16abf222d688cb84c140213de9c2667401b43bc020179a60842628e53479e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0406079124fdda8b331779ab38dd1df5d0510d25e23fd7231e1244bceacf8b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0406079124fdda8b331779ab38dd1df5d0510d25e23fd7231e1244bceacf8b91->enter($__internal_0406079124fdda8b331779ab38dd1df5d0510d25e23fd7231e1244bceacf8b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c16abf222d688cb84c140213de9c2667401b43bc020179a60842628e53479e44->leave($__internal_c16abf222d688cb84c140213de9c2667401b43bc020179a60842628e53479e44_prof);

        
        $__internal_0406079124fdda8b331779ab38dd1df5d0510d25e23fd7231e1244bceacf8b91->leave($__internal_0406079124fdda8b331779ab38dd1df5d0510d25e23fd7231e1244bceacf8b91_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
