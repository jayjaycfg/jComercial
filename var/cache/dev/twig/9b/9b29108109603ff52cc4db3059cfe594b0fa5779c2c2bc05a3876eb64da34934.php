<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1e6aaf77aebfe4058cd961cb942d68cc7bc7dac5f169b4a5b0e811f401faf3ee extends Twig_Template
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
        $__internal_a15d309512fc227fd1dce3bb6b8ec760a6e0542dc7a8de84e3029de64336c684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15d309512fc227fd1dce3bb6b8ec760a6e0542dc7a8de84e3029de64336c684->enter($__internal_a15d309512fc227fd1dce3bb6b8ec760a6e0542dc7a8de84e3029de64336c684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_0d6326d5963eca61a8bc28f0ba74bc17367f394d394a3c598a7b46c28c2d973b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6326d5963eca61a8bc28f0ba74bc17367f394d394a3c598a7b46c28c2d973b->enter($__internal_0d6326d5963eca61a8bc28f0ba74bc17367f394d394a3c598a7b46c28c2d973b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a15d309512fc227fd1dce3bb6b8ec760a6e0542dc7a8de84e3029de64336c684->leave($__internal_a15d309512fc227fd1dce3bb6b8ec760a6e0542dc7a8de84e3029de64336c684_prof);

        
        $__internal_0d6326d5963eca61a8bc28f0ba74bc17367f394d394a3c598a7b46c28c2d973b->leave($__internal_0d6326d5963eca61a8bc28f0ba74bc17367f394d394a3c598a7b46c28c2d973b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
