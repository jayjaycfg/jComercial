<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20604180161d0c253980ff4ca6c65c93f43d676d7815de689377ff771ff1960e extends Twig_Template
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
        $__internal_f6caa8b390aa178063c445f48b88cdeac3bb0bb3e31c0bed5b61a225f9c8f4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6caa8b390aa178063c445f48b88cdeac3bb0bb3e31c0bed5b61a225f9c8f4cb->enter($__internal_f6caa8b390aa178063c445f48b88cdeac3bb0bb3e31c0bed5b61a225f9c8f4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_03b5af665d2f7338a3a724790c5ded4d15f2be9cf5554b9dcd1bc864b321293c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b5af665d2f7338a3a724790c5ded4d15f2be9cf5554b9dcd1bc864b321293c->enter($__internal_03b5af665d2f7338a3a724790c5ded4d15f2be9cf5554b9dcd1bc864b321293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f6caa8b390aa178063c445f48b88cdeac3bb0bb3e31c0bed5b61a225f9c8f4cb->leave($__internal_f6caa8b390aa178063c445f48b88cdeac3bb0bb3e31c0bed5b61a225f9c8f4cb_prof);

        
        $__internal_03b5af665d2f7338a3a724790c5ded4d15f2be9cf5554b9dcd1bc864b321293c->leave($__internal_03b5af665d2f7338a3a724790c5ded4d15f2be9cf5554b9dcd1bc864b321293c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
