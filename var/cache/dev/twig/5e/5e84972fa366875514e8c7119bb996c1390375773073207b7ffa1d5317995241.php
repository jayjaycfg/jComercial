<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a862fb6d30ff5910b1b3bef696c4f28b770c900dd3f91037dd793d5bcc44567 extends Twig_Template
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
        $__internal_9d43544d4e5910b62e9abc974c997ca74316d2c619c120f19ba6f48eb3c4d692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d43544d4e5910b62e9abc974c997ca74316d2c619c120f19ba6f48eb3c4d692->enter($__internal_9d43544d4e5910b62e9abc974c997ca74316d2c619c120f19ba6f48eb3c4d692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8c1d187369893370d5deab723eab614c146d60195a557b3afb558fe9b0c6b01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1d187369893370d5deab723eab614c146d60195a557b3afb558fe9b0c6b01a->enter($__internal_8c1d187369893370d5deab723eab614c146d60195a557b3afb558fe9b0c6b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9d43544d4e5910b62e9abc974c997ca74316d2c619c120f19ba6f48eb3c4d692->leave($__internal_9d43544d4e5910b62e9abc974c997ca74316d2c619c120f19ba6f48eb3c4d692_prof);

        
        $__internal_8c1d187369893370d5deab723eab614c146d60195a557b3afb558fe9b0c6b01a->leave($__internal_8c1d187369893370d5deab723eab614c146d60195a557b3afb558fe9b0c6b01a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
