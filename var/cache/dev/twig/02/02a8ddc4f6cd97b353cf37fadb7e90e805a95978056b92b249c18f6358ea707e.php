<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8ef342efd341b9db32993075d5f34bd1be00e59b5df52a881af64cf6a9c6b9dd extends Twig_Template
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
        $__internal_c42a98f5aad63e69eea0932c43eaed651519fec0769cc5575028edeec725a3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42a98f5aad63e69eea0932c43eaed651519fec0769cc5575028edeec725a3a4->enter($__internal_c42a98f5aad63e69eea0932c43eaed651519fec0769cc5575028edeec725a3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d94da55634a6c0a36306ec508cc9cc50b5d7b0445110d76af12680c8648f289b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94da55634a6c0a36306ec508cc9cc50b5d7b0445110d76af12680c8648f289b->enter($__internal_d94da55634a6c0a36306ec508cc9cc50b5d7b0445110d76af12680c8648f289b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c42a98f5aad63e69eea0932c43eaed651519fec0769cc5575028edeec725a3a4->leave($__internal_c42a98f5aad63e69eea0932c43eaed651519fec0769cc5575028edeec725a3a4_prof);

        
        $__internal_d94da55634a6c0a36306ec508cc9cc50b5d7b0445110d76af12680c8648f289b->leave($__internal_d94da55634a6c0a36306ec508cc9cc50b5d7b0445110d76af12680c8648f289b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
