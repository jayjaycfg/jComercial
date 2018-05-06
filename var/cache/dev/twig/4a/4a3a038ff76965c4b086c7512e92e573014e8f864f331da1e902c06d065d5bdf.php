<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b02dfd81140eb2a24a8fb18cd6332cff44805b1d92cb2302754604add0b319f9 extends Twig_Template
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
        $__internal_6768e0a99af5fdcfd0ac9cba27771b5463247ab0e1e386ab2620a66592d3e287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6768e0a99af5fdcfd0ac9cba27771b5463247ab0e1e386ab2620a66592d3e287->enter($__internal_6768e0a99af5fdcfd0ac9cba27771b5463247ab0e1e386ab2620a66592d3e287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b900b1fbe2d6199f577f235d782d78b027303070657e21d457153449b74a72b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b900b1fbe2d6199f577f235d782d78b027303070657e21d457153449b74a72b6->enter($__internal_b900b1fbe2d6199f577f235d782d78b027303070657e21d457153449b74a72b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6768e0a99af5fdcfd0ac9cba27771b5463247ab0e1e386ab2620a66592d3e287->leave($__internal_6768e0a99af5fdcfd0ac9cba27771b5463247ab0e1e386ab2620a66592d3e287_prof);

        
        $__internal_b900b1fbe2d6199f577f235d782d78b027303070657e21d457153449b74a72b6->leave($__internal_b900b1fbe2d6199f577f235d782d78b027303070657e21d457153449b74a72b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
