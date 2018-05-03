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
        $__internal_2308f14fcaa6ca005051025a433c2c09aa14544fe5584a81603deda2a77240c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2308f14fcaa6ca005051025a433c2c09aa14544fe5584a81603deda2a77240c3->enter($__internal_2308f14fcaa6ca005051025a433c2c09aa14544fe5584a81603deda2a77240c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_270301173f31742ef21f63cc052dfd881b65d68bbdb6e40fc8e677ef8c059c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270301173f31742ef21f63cc052dfd881b65d68bbdb6e40fc8e677ef8c059c41->enter($__internal_270301173f31742ef21f63cc052dfd881b65d68bbdb6e40fc8e677ef8c059c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2308f14fcaa6ca005051025a433c2c09aa14544fe5584a81603deda2a77240c3->leave($__internal_2308f14fcaa6ca005051025a433c2c09aa14544fe5584a81603deda2a77240c3_prof);

        
        $__internal_270301173f31742ef21f63cc052dfd881b65d68bbdb6e40fc8e677ef8c059c41->leave($__internal_270301173f31742ef21f63cc052dfd881b65d68bbdb6e40fc8e677ef8c059c41_prof);

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
