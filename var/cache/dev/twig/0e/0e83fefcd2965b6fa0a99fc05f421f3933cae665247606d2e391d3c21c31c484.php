<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_175b6ce867f5a90d57d065b2e25b22389265e3d6d895c4b5f249ac7ce76d5f66 extends Twig_Template
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
        $__internal_e58767d9dcdf3990dd50ebee2e843d3f2c86934c4cbab500fa708d05c66c1406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58767d9dcdf3990dd50ebee2e843d3f2c86934c4cbab500fa708d05c66c1406->enter($__internal_e58767d9dcdf3990dd50ebee2e843d3f2c86934c4cbab500fa708d05c66c1406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a16e6d8caee0f61dc520e18afc7eeab9e6ec00b9b697b002705bde9359c127e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16e6d8caee0f61dc520e18afc7eeab9e6ec00b9b697b002705bde9359c127e7->enter($__internal_a16e6d8caee0f61dc520e18afc7eeab9e6ec00b9b697b002705bde9359c127e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e58767d9dcdf3990dd50ebee2e843d3f2c86934c4cbab500fa708d05c66c1406->leave($__internal_e58767d9dcdf3990dd50ebee2e843d3f2c86934c4cbab500fa708d05c66c1406_prof);

        
        $__internal_a16e6d8caee0f61dc520e18afc7eeab9e6ec00b9b697b002705bde9359c127e7->leave($__internal_a16e6d8caee0f61dc520e18afc7eeab9e6ec00b9b697b002705bde9359c127e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
