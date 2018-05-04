<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_6e9a89f64d15398d206a79d68150eb5d931a6f6b16e6fd3f6e9538d8d64faab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9a89f64d15398d206a79d68150eb5d931a6f6b16e6fd3f6e9538d8d64faab2->enter($__internal_6e9a89f64d15398d206a79d68150eb5d931a6f6b16e6fd3f6e9538d8d64faab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ee76b89a2f5014e0df6dfba130b2a0245eb02683f884e5d4e3d5b3c6ecbbc341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee76b89a2f5014e0df6dfba130b2a0245eb02683f884e5d4e3d5b3c6ecbbc341->enter($__internal_ee76b89a2f5014e0df6dfba130b2a0245eb02683f884e5d4e3d5b3c6ecbbc341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6e9a89f64d15398d206a79d68150eb5d931a6f6b16e6fd3f6e9538d8d64faab2->leave($__internal_6e9a89f64d15398d206a79d68150eb5d931a6f6b16e6fd3f6e9538d8d64faab2_prof);

        
        $__internal_ee76b89a2f5014e0df6dfba130b2a0245eb02683f884e5d4e3d5b3c6ecbbc341->leave($__internal_ee76b89a2f5014e0df6dfba130b2a0245eb02683f884e5d4e3d5b3c6ecbbc341_prof);

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
", "@Framework/Form/button_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
