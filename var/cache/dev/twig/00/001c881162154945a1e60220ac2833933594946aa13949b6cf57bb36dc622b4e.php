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
        $__internal_7c2763658402bb1c661e81219f8a1adc794524a746e5b2ea33a7803a51e07a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2763658402bb1c661e81219f8a1adc794524a746e5b2ea33a7803a51e07a06->enter($__internal_7c2763658402bb1c661e81219f8a1adc794524a746e5b2ea33a7803a51e07a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_28ceec199a3da364ef00b4d7e363e822532f1fb8f0cf6af43af9d76cba6e6699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ceec199a3da364ef00b4d7e363e822532f1fb8f0cf6af43af9d76cba6e6699->enter($__internal_28ceec199a3da364ef00b4d7e363e822532f1fb8f0cf6af43af9d76cba6e6699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7c2763658402bb1c661e81219f8a1adc794524a746e5b2ea33a7803a51e07a06->leave($__internal_7c2763658402bb1c661e81219f8a1adc794524a746e5b2ea33a7803a51e07a06_prof);

        
        $__internal_28ceec199a3da364ef00b4d7e363e822532f1fb8f0cf6af43af9d76cba6e6699->leave($__internal_28ceec199a3da364ef00b4d7e363e822532f1fb8f0cf6af43af9d76cba6e6699_prof);

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
