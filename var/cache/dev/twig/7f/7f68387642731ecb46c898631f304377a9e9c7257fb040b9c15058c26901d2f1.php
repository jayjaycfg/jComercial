<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e526a4760453f6c6676b5d80c638a6194d6338df4b7c9d318dd80806995a51e6 extends Twig_Template
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
        $__internal_33db17c74b73ceedd994c22b51b34b5fdc2a9314299a530b0fb8e65aeb4b02d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33db17c74b73ceedd994c22b51b34b5fdc2a9314299a530b0fb8e65aeb4b02d5->enter($__internal_33db17c74b73ceedd994c22b51b34b5fdc2a9314299a530b0fb8e65aeb4b02d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_94d41f699f4c7290228243a23e301f7da9824f9aa1ae4e9e25bf50d1d70279d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d41f699f4c7290228243a23e301f7da9824f9aa1ae4e9e25bf50d1d70279d2->enter($__internal_94d41f699f4c7290228243a23e301f7da9824f9aa1ae4e9e25bf50d1d70279d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_33db17c74b73ceedd994c22b51b34b5fdc2a9314299a530b0fb8e65aeb4b02d5->leave($__internal_33db17c74b73ceedd994c22b51b34b5fdc2a9314299a530b0fb8e65aeb4b02d5_prof);

        
        $__internal_94d41f699f4c7290228243a23e301f7da9824f9aa1ae4e9e25bf50d1d70279d2->leave($__internal_94d41f699f4c7290228243a23e301f7da9824f9aa1ae4e9e25bf50d1d70279d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
