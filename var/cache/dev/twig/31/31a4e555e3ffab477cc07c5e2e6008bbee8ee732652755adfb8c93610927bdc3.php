<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a40a6060e1adbd59aef8d786790e899ea0feb7bc866ea79c8b021c1d0e3332f3 extends Twig_Template
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
        $__internal_8a0ae62f4e777dfe68411ae780d5af8f84517d7c987c608db6c1144654eb9e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0ae62f4e777dfe68411ae780d5af8f84517d7c987c608db6c1144654eb9e61->enter($__internal_8a0ae62f4e777dfe68411ae780d5af8f84517d7c987c608db6c1144654eb9e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_754860539c4770c24476f8effa6cb3203579a974a6dc647c26838905834b4158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754860539c4770c24476f8effa6cb3203579a974a6dc647c26838905834b4158->enter($__internal_754860539c4770c24476f8effa6cb3203579a974a6dc647c26838905834b4158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8a0ae62f4e777dfe68411ae780d5af8f84517d7c987c608db6c1144654eb9e61->leave($__internal_8a0ae62f4e777dfe68411ae780d5af8f84517d7c987c608db6c1144654eb9e61_prof);

        
        $__internal_754860539c4770c24476f8effa6cb3203579a974a6dc647c26838905834b4158->leave($__internal_754860539c4770c24476f8effa6cb3203579a974a6dc647c26838905834b4158_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
