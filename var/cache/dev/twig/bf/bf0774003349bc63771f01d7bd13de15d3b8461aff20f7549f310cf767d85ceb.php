<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_9baf6652e75a4ef24e9f8c2338472b36c8babe6dd71a1a1ca11070e138709ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9baf6652e75a4ef24e9f8c2338472b36c8babe6dd71a1a1ca11070e138709ad3->enter($__internal_9baf6652e75a4ef24e9f8c2338472b36c8babe6dd71a1a1ca11070e138709ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a82cd4e82776318beb829b95b991c14e7f111dd58dc0bd6297b23943c35f9225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82cd4e82776318beb829b95b991c14e7f111dd58dc0bd6297b23943c35f9225->enter($__internal_a82cd4e82776318beb829b95b991c14e7f111dd58dc0bd6297b23943c35f9225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9baf6652e75a4ef24e9f8c2338472b36c8babe6dd71a1a1ca11070e138709ad3->leave($__internal_9baf6652e75a4ef24e9f8c2338472b36c8babe6dd71a1a1ca11070e138709ad3_prof);

        
        $__internal_a82cd4e82776318beb829b95b991c14e7f111dd58dc0bd6297b23943c35f9225->leave($__internal_a82cd4e82776318beb829b95b991c14e7f111dd58dc0bd6297b23943c35f9225_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
