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
        $__internal_5c84395039344d08fef11e3c2d1f10100e753b8b40596b4c6b720111727e33fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c84395039344d08fef11e3c2d1f10100e753b8b40596b4c6b720111727e33fc->enter($__internal_5c84395039344d08fef11e3c2d1f10100e753b8b40596b4c6b720111727e33fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2a58dd60da3493569a1a8e63b8e0c7d44b64e7018a89043b3c4ec8239c8e7eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a58dd60da3493569a1a8e63b8e0c7d44b64e7018a89043b3c4ec8239c8e7eb8->enter($__internal_2a58dd60da3493569a1a8e63b8e0c7d44b64e7018a89043b3c4ec8239c8e7eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5c84395039344d08fef11e3c2d1f10100e753b8b40596b4c6b720111727e33fc->leave($__internal_5c84395039344d08fef11e3c2d1f10100e753b8b40596b4c6b720111727e33fc_prof);

        
        $__internal_2a58dd60da3493569a1a8e63b8e0c7d44b64e7018a89043b3c4ec8239c8e7eb8->leave($__internal_2a58dd60da3493569a1a8e63b8e0c7d44b64e7018a89043b3c4ec8239c8e7eb8_prof);

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
