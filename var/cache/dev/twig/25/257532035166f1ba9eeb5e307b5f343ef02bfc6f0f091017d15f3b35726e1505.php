<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2911652c367fa8c463fb5e758f16f977e427495afe595ef7f817423d0a9174a9 extends Twig_Template
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
        $__internal_53104eb4acef39e68e662f2a1dd28e06078c21293bebb6602b1f4ea5cb01036b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53104eb4acef39e68e662f2a1dd28e06078c21293bebb6602b1f4ea5cb01036b->enter($__internal_53104eb4acef39e68e662f2a1dd28e06078c21293bebb6602b1f4ea5cb01036b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_57da33465f1af179f2dfed057b1de7702575372a924c915036a01d074719f41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57da33465f1af179f2dfed057b1de7702575372a924c915036a01d074719f41e->enter($__internal_57da33465f1af179f2dfed057b1de7702575372a924c915036a01d074719f41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_53104eb4acef39e68e662f2a1dd28e06078c21293bebb6602b1f4ea5cb01036b->leave($__internal_53104eb4acef39e68e662f2a1dd28e06078c21293bebb6602b1f4ea5cb01036b_prof);

        
        $__internal_57da33465f1af179f2dfed057b1de7702575372a924c915036a01d074719f41e->leave($__internal_57da33465f1af179f2dfed057b1de7702575372a924c915036a01d074719f41e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
