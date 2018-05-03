<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_47253a0760319c2c9cf444bba706c07dc8eabaf3256444a8438258b724cc385c extends Twig_Template
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
        $__internal_29d2013f512e2f64a8d269a4a0938a87cb7ad6d90f3f2178fb70f2bbe0f7b198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d2013f512e2f64a8d269a4a0938a87cb7ad6d90f3f2178fb70f2bbe0f7b198->enter($__internal_29d2013f512e2f64a8d269a4a0938a87cb7ad6d90f3f2178fb70f2bbe0f7b198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_778e8b249829c58c57ec71f8dce9948abbe601bafdd128ef760320081618f19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778e8b249829c58c57ec71f8dce9948abbe601bafdd128ef760320081618f19f->enter($__internal_778e8b249829c58c57ec71f8dce9948abbe601bafdd128ef760320081618f19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_29d2013f512e2f64a8d269a4a0938a87cb7ad6d90f3f2178fb70f2bbe0f7b198->leave($__internal_29d2013f512e2f64a8d269a4a0938a87cb7ad6d90f3f2178fb70f2bbe0f7b198_prof);

        
        $__internal_778e8b249829c58c57ec71f8dce9948abbe601bafdd128ef760320081618f19f->leave($__internal_778e8b249829c58c57ec71f8dce9948abbe601bafdd128ef760320081618f19f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
