<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_3942175adf79ec5665c4c422852cab33c4c4de1e802ad03d36ad71be24b1a32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3942175adf79ec5665c4c422852cab33c4c4de1e802ad03d36ad71be24b1a32b->enter($__internal_3942175adf79ec5665c4c422852cab33c4c4de1e802ad03d36ad71be24b1a32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6d45b18bd84e6259935d3fe092c9e505ac155a8d4a18d941ff7951405a9ac340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d45b18bd84e6259935d3fe092c9e505ac155a8d4a18d941ff7951405a9ac340->enter($__internal_6d45b18bd84e6259935d3fe092c9e505ac155a8d4a18d941ff7951405a9ac340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3942175adf79ec5665c4c422852cab33c4c4de1e802ad03d36ad71be24b1a32b->leave($__internal_3942175adf79ec5665c4c422852cab33c4c4de1e802ad03d36ad71be24b1a32b_prof);

        
        $__internal_6d45b18bd84e6259935d3fe092c9e505ac155a8d4a18d941ff7951405a9ac340->leave($__internal_6d45b18bd84e6259935d3fe092c9e505ac155a8d4a18d941ff7951405a9ac340_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
