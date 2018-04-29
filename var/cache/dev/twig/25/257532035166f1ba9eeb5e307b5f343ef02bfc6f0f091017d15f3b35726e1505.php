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
        $__internal_7e75556b623621e5925d17554b58d46fbc815ae969c4c7d6876b5a6ad6184cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e75556b623621e5925d17554b58d46fbc815ae969c4c7d6876b5a6ad6184cd4->enter($__internal_7e75556b623621e5925d17554b58d46fbc815ae969c4c7d6876b5a6ad6184cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5e3cf3e5d6029409bd3613966f59144d97e034d1dbc79040af64b8c03698114e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3cf3e5d6029409bd3613966f59144d97e034d1dbc79040af64b8c03698114e->enter($__internal_5e3cf3e5d6029409bd3613966f59144d97e034d1dbc79040af64b8c03698114e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_7e75556b623621e5925d17554b58d46fbc815ae969c4c7d6876b5a6ad6184cd4->leave($__internal_7e75556b623621e5925d17554b58d46fbc815ae969c4c7d6876b5a6ad6184cd4_prof);

        
        $__internal_5e3cf3e5d6029409bd3613966f59144d97e034d1dbc79040af64b8c03698114e->leave($__internal_5e3cf3e5d6029409bd3613966f59144d97e034d1dbc79040af64b8c03698114e_prof);

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
