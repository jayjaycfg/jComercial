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
        $__internal_5918d91e88ac65a735450fd4729f9ccf38ba6532bc98b5abf0654f1532e8f126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5918d91e88ac65a735450fd4729f9ccf38ba6532bc98b5abf0654f1532e8f126->enter($__internal_5918d91e88ac65a735450fd4729f9ccf38ba6532bc98b5abf0654f1532e8f126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_584bfbe921701e91abdeabc78ba036e019f2cb167a609813e9530aa6ac114787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584bfbe921701e91abdeabc78ba036e019f2cb167a609813e9530aa6ac114787->enter($__internal_584bfbe921701e91abdeabc78ba036e019f2cb167a609813e9530aa6ac114787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_5918d91e88ac65a735450fd4729f9ccf38ba6532bc98b5abf0654f1532e8f126->leave($__internal_5918d91e88ac65a735450fd4729f9ccf38ba6532bc98b5abf0654f1532e8f126_prof);

        
        $__internal_584bfbe921701e91abdeabc78ba036e019f2cb167a609813e9530aa6ac114787->leave($__internal_584bfbe921701e91abdeabc78ba036e019f2cb167a609813e9530aa6ac114787_prof);

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
