<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2ec95887635f7f9e31f0aed95da2f95113b36e08e59ea8c0977b6c95cb537bd6 extends Twig_Template
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
        $__internal_1932752b283b39de1d49394b061913220d54018cb190e60eac5da657e4bab3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1932752b283b39de1d49394b061913220d54018cb190e60eac5da657e4bab3a2->enter($__internal_1932752b283b39de1d49394b061913220d54018cb190e60eac5da657e4bab3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1a62a8d57cba13d65e929da8c5382f351a2c9ba1776c6c884d07dd16b71a4f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a62a8d57cba13d65e929da8c5382f351a2c9ba1776c6c884d07dd16b71a4f5f->enter($__internal_1a62a8d57cba13d65e929da8c5382f351a2c9ba1776c6c884d07dd16b71a4f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1932752b283b39de1d49394b061913220d54018cb190e60eac5da657e4bab3a2->leave($__internal_1932752b283b39de1d49394b061913220d54018cb190e60eac5da657e4bab3a2_prof);

        
        $__internal_1a62a8d57cba13d65e929da8c5382f351a2c9ba1776c6c884d07dd16b71a4f5f->leave($__internal_1a62a8d57cba13d65e929da8c5382f351a2c9ba1776c6c884d07dd16b71a4f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
