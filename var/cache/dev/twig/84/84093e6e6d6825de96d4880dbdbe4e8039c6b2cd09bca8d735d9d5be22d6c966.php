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
        $__internal_1deb074ddbc17f780ecbcc6cd18fa908176884e6e605099a36dad04618c31b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1deb074ddbc17f780ecbcc6cd18fa908176884e6e605099a36dad04618c31b48->enter($__internal_1deb074ddbc17f780ecbcc6cd18fa908176884e6e605099a36dad04618c31b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7df0134636c6aa2b2d4d932f47ea314d140b0ef7af5253b22054e775c3256c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df0134636c6aa2b2d4d932f47ea314d140b0ef7af5253b22054e775c3256c43->enter($__internal_7df0134636c6aa2b2d4d932f47ea314d140b0ef7af5253b22054e775c3256c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1deb074ddbc17f780ecbcc6cd18fa908176884e6e605099a36dad04618c31b48->leave($__internal_1deb074ddbc17f780ecbcc6cd18fa908176884e6e605099a36dad04618c31b48_prof);

        
        $__internal_7df0134636c6aa2b2d4d932f47ea314d140b0ef7af5253b22054e775c3256c43->leave($__internal_7df0134636c6aa2b2d4d932f47ea314d140b0ef7af5253b22054e775c3256c43_prof);

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
