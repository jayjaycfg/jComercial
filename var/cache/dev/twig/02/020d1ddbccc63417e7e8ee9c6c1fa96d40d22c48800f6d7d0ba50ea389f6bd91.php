<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_682a6f2685a1f9a57c3913a162d4f951d6bb029b0554f223078fa00bc8307222 extends Twig_Template
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
        $__internal_e5e3d62f10def798c65e0027835e10378b185759699337959d9ebe8690029edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e3d62f10def798c65e0027835e10378b185759699337959d9ebe8690029edf->enter($__internal_e5e3d62f10def798c65e0027835e10378b185759699337959d9ebe8690029edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_cfdde842b0da5a76fca80efa057461887bf87c81cb140c7409f67a36e93420b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdde842b0da5a76fca80efa057461887bf87c81cb140c7409f67a36e93420b7->enter($__internal_cfdde842b0da5a76fca80efa057461887bf87c81cb140c7409f67a36e93420b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e5e3d62f10def798c65e0027835e10378b185759699337959d9ebe8690029edf->leave($__internal_e5e3d62f10def798c65e0027835e10378b185759699337959d9ebe8690029edf_prof);

        
        $__internal_cfdde842b0da5a76fca80efa057461887bf87c81cb140c7409f67a36e93420b7->leave($__internal_cfdde842b0da5a76fca80efa057461887bf87c81cb140c7409f67a36e93420b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
