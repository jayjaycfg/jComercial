<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84497e8a69ff7fbb165cc284cedb74d7ede2775e45353184c450a0469bda60db extends Twig_Template
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
        $__internal_0d839a295b6ba44f45a4cc6e994e6699da5bbdd18f8a4856c20f2ca193f11438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d839a295b6ba44f45a4cc6e994e6699da5bbdd18f8a4856c20f2ca193f11438->enter($__internal_0d839a295b6ba44f45a4cc6e994e6699da5bbdd18f8a4856c20f2ca193f11438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e9b5b58d1b5eb5d2e27640d70d4b91b0b747e25ddc3d2f9962f1cf21af3d4484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b5b58d1b5eb5d2e27640d70d4b91b0b747e25ddc3d2f9962f1cf21af3d4484->enter($__internal_e9b5b58d1b5eb5d2e27640d70d4b91b0b747e25ddc3d2f9962f1cf21af3d4484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0d839a295b6ba44f45a4cc6e994e6699da5bbdd18f8a4856c20f2ca193f11438->leave($__internal_0d839a295b6ba44f45a4cc6e994e6699da5bbdd18f8a4856c20f2ca193f11438_prof);

        
        $__internal_e9b5b58d1b5eb5d2e27640d70d4b91b0b747e25ddc3d2f9962f1cf21af3d4484->leave($__internal_e9b5b58d1b5eb5d2e27640d70d4b91b0b747e25ddc3d2f9962f1cf21af3d4484_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
