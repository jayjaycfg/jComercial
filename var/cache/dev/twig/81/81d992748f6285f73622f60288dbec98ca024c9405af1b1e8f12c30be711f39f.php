<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_4d1649092071115299e0a994b628e76d8e5808d480402e38c4af3bdc55bef2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1649092071115299e0a994b628e76d8e5808d480402e38c4af3bdc55bef2a0->enter($__internal_4d1649092071115299e0a994b628e76d8e5808d480402e38c4af3bdc55bef2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_eeb87a4f4cc944ffe05643e4f83815354f27c45c068a4fdb9f7241425dab8a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb87a4f4cc944ffe05643e4f83815354f27c45c068a4fdb9f7241425dab8a13->enter($__internal_eeb87a4f4cc944ffe05643e4f83815354f27c45c068a4fdb9f7241425dab8a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_4d1649092071115299e0a994b628e76d8e5808d480402e38c4af3bdc55bef2a0->leave($__internal_4d1649092071115299e0a994b628e76d8e5808d480402e38c4af3bdc55bef2a0_prof);

        
        $__internal_eeb87a4f4cc944ffe05643e4f83815354f27c45c068a4fdb9f7241425dab8a13->leave($__internal_eeb87a4f4cc944ffe05643e4f83815354f27c45c068a4fdb9f7241425dab8a13_prof);

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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
