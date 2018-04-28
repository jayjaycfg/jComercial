<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9dbd3650e5810d07e7a0ab64e3ec70f30bbb18239e8009425860cf6d178bd99 extends Twig_Template
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
        $__internal_c7df9d95a50160458b66531909ac3f0370e1901f7ed07b72cc7dd8ffb17a0dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7df9d95a50160458b66531909ac3f0370e1901f7ed07b72cc7dd8ffb17a0dcf->enter($__internal_c7df9d95a50160458b66531909ac3f0370e1901f7ed07b72cc7dd8ffb17a0dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b56b5178392abfe6a9ee916d56bcf6a041ecfd67d05d514c6f9ebc0f08ee877a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56b5178392abfe6a9ee916d56bcf6a041ecfd67d05d514c6f9ebc0f08ee877a->enter($__internal_b56b5178392abfe6a9ee916d56bcf6a041ecfd67d05d514c6f9ebc0f08ee877a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c7df9d95a50160458b66531909ac3f0370e1901f7ed07b72cc7dd8ffb17a0dcf->leave($__internal_c7df9d95a50160458b66531909ac3f0370e1901f7ed07b72cc7dd8ffb17a0dcf_prof);

        
        $__internal_b56b5178392abfe6a9ee916d56bcf6a041ecfd67d05d514c6f9ebc0f08ee877a->leave($__internal_b56b5178392abfe6a9ee916d56bcf6a041ecfd67d05d514c6f9ebc0f08ee877a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
