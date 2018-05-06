<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b790b556d58827420fdcc2bef1b5d2eca9c8fb56c50a3e391e0f0475be3dd7f4 extends Twig_Template
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
        $__internal_424d46a89826315ef7c75b4fb8635bd6b0673a064ce5c38e07cb1fb701adb2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424d46a89826315ef7c75b4fb8635bd6b0673a064ce5c38e07cb1fb701adb2da->enter($__internal_424d46a89826315ef7c75b4fb8635bd6b0673a064ce5c38e07cb1fb701adb2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_df55b614df0a23cd82e42ee83e5768ab562e2a6b9237943404ccf8a3bee2d2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df55b614df0a23cd82e42ee83e5768ab562e2a6b9237943404ccf8a3bee2d2b3->enter($__internal_df55b614df0a23cd82e42ee83e5768ab562e2a6b9237943404ccf8a3bee2d2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_424d46a89826315ef7c75b4fb8635bd6b0673a064ce5c38e07cb1fb701adb2da->leave($__internal_424d46a89826315ef7c75b4fb8635bd6b0673a064ce5c38e07cb1fb701adb2da_prof);

        
        $__internal_df55b614df0a23cd82e42ee83e5768ab562e2a6b9237943404ccf8a3bee2d2b3->leave($__internal_df55b614df0a23cd82e42ee83e5768ab562e2a6b9237943404ccf8a3bee2d2b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
