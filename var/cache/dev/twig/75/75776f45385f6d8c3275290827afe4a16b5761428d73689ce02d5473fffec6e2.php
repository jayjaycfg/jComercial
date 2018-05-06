<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c23ca9f22ed00e48e7dc54bb4272e9abad87680fc001638199a83a6562b06463 extends Twig_Template
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
        $__internal_4da2fc76b7483b330e2e76e2fff4b51f5874a87428e05cbab960e4e3712b5939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da2fc76b7483b330e2e76e2fff4b51f5874a87428e05cbab960e4e3712b5939->enter($__internal_4da2fc76b7483b330e2e76e2fff4b51f5874a87428e05cbab960e4e3712b5939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_70b6a191dff98236021ed14af3efdfcc241b853769d260354ee35eec15afaae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b6a191dff98236021ed14af3efdfcc241b853769d260354ee35eec15afaae6->enter($__internal_70b6a191dff98236021ed14af3efdfcc241b853769d260354ee35eec15afaae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4da2fc76b7483b330e2e76e2fff4b51f5874a87428e05cbab960e4e3712b5939->leave($__internal_4da2fc76b7483b330e2e76e2fff4b51f5874a87428e05cbab960e4e3712b5939_prof);

        
        $__internal_70b6a191dff98236021ed14af3efdfcc241b853769d260354ee35eec15afaae6->leave($__internal_70b6a191dff98236021ed14af3efdfcc241b853769d260354ee35eec15afaae6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
