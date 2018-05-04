<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_42c2d72bbd734b582b3b64ecd5fe8ba889ec8845c3c70bd605f68e03ed8a4238 extends Twig_Template
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
        $__internal_8b64038b4c3617aa4abc0d26a72b3e315b2148f685efbe6bb3e285e6516190a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b64038b4c3617aa4abc0d26a72b3e315b2148f685efbe6bb3e285e6516190a7->enter($__internal_8b64038b4c3617aa4abc0d26a72b3e315b2148f685efbe6bb3e285e6516190a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b7a959c9d5903bd2042217e5523abe633d8181ed7e3a01fdd8a64b7b1f8adfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a959c9d5903bd2042217e5523abe633d8181ed7e3a01fdd8a64b7b1f8adfef->enter($__internal_b7a959c9d5903bd2042217e5523abe633d8181ed7e3a01fdd8a64b7b1f8adfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8b64038b4c3617aa4abc0d26a72b3e315b2148f685efbe6bb3e285e6516190a7->leave($__internal_8b64038b4c3617aa4abc0d26a72b3e315b2148f685efbe6bb3e285e6516190a7_prof);

        
        $__internal_b7a959c9d5903bd2042217e5523abe633d8181ed7e3a01fdd8a64b7b1f8adfef->leave($__internal_b7a959c9d5903bd2042217e5523abe633d8181ed7e3a01fdd8a64b7b1f8adfef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
