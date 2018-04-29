<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3caf6e65f122c85d80570a97d8460867e5eab2af60bd6b4a0da35d6c33fadfda extends Twig_Template
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
        $__internal_d47b65b2766599a810b10c452feba7bdc27ef1a89684a87205254dac4858be45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47b65b2766599a810b10c452feba7bdc27ef1a89684a87205254dac4858be45->enter($__internal_d47b65b2766599a810b10c452feba7bdc27ef1a89684a87205254dac4858be45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_bf3a955e5310693783b4cd9e2d4a9ecd86df949e8719458fe0fc3880b2dc3fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3a955e5310693783b4cd9e2d4a9ecd86df949e8719458fe0fc3880b2dc3fd6->enter($__internal_bf3a955e5310693783b4cd9e2d4a9ecd86df949e8719458fe0fc3880b2dc3fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d47b65b2766599a810b10c452feba7bdc27ef1a89684a87205254dac4858be45->leave($__internal_d47b65b2766599a810b10c452feba7bdc27ef1a89684a87205254dac4858be45_prof);

        
        $__internal_bf3a955e5310693783b4cd9e2d4a9ecd86df949e8719458fe0fc3880b2dc3fd6->leave($__internal_bf3a955e5310693783b4cd9e2d4a9ecd86df949e8719458fe0fc3880b2dc3fd6_prof);

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
", "@Framework/Form/radio_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
