<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f64a4724956a2caf00c03cb76209f1b2b2d3a075757fb12e13f10d9667d15295 extends Twig_Template
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
        $__internal_cb6a3fd799b3e13f58381e712bf00f13b4e56036eb7460f71b3d5133428a6547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6a3fd799b3e13f58381e712bf00f13b4e56036eb7460f71b3d5133428a6547->enter($__internal_cb6a3fd799b3e13f58381e712bf00f13b4e56036eb7460f71b3d5133428a6547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_99f1de5912fbf7de3b0a24ac770704d5b36af5501868aa01eb5fd0c4246e23b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f1de5912fbf7de3b0a24ac770704d5b36af5501868aa01eb5fd0c4246e23b6->enter($__internal_99f1de5912fbf7de3b0a24ac770704d5b36af5501868aa01eb5fd0c4246e23b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cb6a3fd799b3e13f58381e712bf00f13b4e56036eb7460f71b3d5133428a6547->leave($__internal_cb6a3fd799b3e13f58381e712bf00f13b4e56036eb7460f71b3d5133428a6547_prof);

        
        $__internal_99f1de5912fbf7de3b0a24ac770704d5b36af5501868aa01eb5fd0c4246e23b6->leave($__internal_99f1de5912fbf7de3b0a24ac770704d5b36af5501868aa01eb5fd0c4246e23b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
