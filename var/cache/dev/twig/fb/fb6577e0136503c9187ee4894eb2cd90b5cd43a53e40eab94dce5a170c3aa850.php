<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dc877f7ddd8612200a865db254dea07957d021e8dc53252cc566674c569806b6 extends Twig_Template
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
        $__internal_120e4683ecc9ba7d0b94b3a4ae91bd91e535bea58ca9062e42cabc6aa7e574f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120e4683ecc9ba7d0b94b3a4ae91bd91e535bea58ca9062e42cabc6aa7e574f5->enter($__internal_120e4683ecc9ba7d0b94b3a4ae91bd91e535bea58ca9062e42cabc6aa7e574f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c637cbb4a6e40bfd3a637ff9d833a75c09bf38771b5077e08940797ccd974a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c637cbb4a6e40bfd3a637ff9d833a75c09bf38771b5077e08940797ccd974a2b->enter($__internal_c637cbb4a6e40bfd3a637ff9d833a75c09bf38771b5077e08940797ccd974a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_120e4683ecc9ba7d0b94b3a4ae91bd91e535bea58ca9062e42cabc6aa7e574f5->leave($__internal_120e4683ecc9ba7d0b94b3a4ae91bd91e535bea58ca9062e42cabc6aa7e574f5_prof);

        
        $__internal_c637cbb4a6e40bfd3a637ff9d833a75c09bf38771b5077e08940797ccd974a2b->leave($__internal_c637cbb4a6e40bfd3a637ff9d833a75c09bf38771b5077e08940797ccd974a2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
