<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_9bf0c21a1082eca13ee1fe8f194f2baecdf06e40776bfc6e24ef4b966ff84af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf0c21a1082eca13ee1fe8f194f2baecdf06e40776bfc6e24ef4b966ff84af4->enter($__internal_9bf0c21a1082eca13ee1fe8f194f2baecdf06e40776bfc6e24ef4b966ff84af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a371d3f8ce769714be32f8f0872c3a645a4707144e73a00bfb60fa5433d7ea7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a371d3f8ce769714be32f8f0872c3a645a4707144e73a00bfb60fa5433d7ea7b->enter($__internal_a371d3f8ce769714be32f8f0872c3a645a4707144e73a00bfb60fa5433d7ea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9bf0c21a1082eca13ee1fe8f194f2baecdf06e40776bfc6e24ef4b966ff84af4->leave($__internal_9bf0c21a1082eca13ee1fe8f194f2baecdf06e40776bfc6e24ef4b966ff84af4_prof);

        
        $__internal_a371d3f8ce769714be32f8f0872c3a645a4707144e73a00bfb60fa5433d7ea7b->leave($__internal_a371d3f8ce769714be32f8f0872c3a645a4707144e73a00bfb60fa5433d7ea7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
