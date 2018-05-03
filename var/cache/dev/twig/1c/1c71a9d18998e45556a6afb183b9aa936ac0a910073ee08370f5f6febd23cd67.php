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
        $__internal_fc037dea545aac6d33fe1e8dcd36853a5eeffb2f2b440dbb5000dfc859bf70ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc037dea545aac6d33fe1e8dcd36853a5eeffb2f2b440dbb5000dfc859bf70ba->enter($__internal_fc037dea545aac6d33fe1e8dcd36853a5eeffb2f2b440dbb5000dfc859bf70ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_703b9958b65efea1f11896a263e138996034ad4e99160c88ff14ad2c3be05aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703b9958b65efea1f11896a263e138996034ad4e99160c88ff14ad2c3be05aab->enter($__internal_703b9958b65efea1f11896a263e138996034ad4e99160c88ff14ad2c3be05aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fc037dea545aac6d33fe1e8dcd36853a5eeffb2f2b440dbb5000dfc859bf70ba->leave($__internal_fc037dea545aac6d33fe1e8dcd36853a5eeffb2f2b440dbb5000dfc859bf70ba_prof);

        
        $__internal_703b9958b65efea1f11896a263e138996034ad4e99160c88ff14ad2c3be05aab->leave($__internal_703b9958b65efea1f11896a263e138996034ad4e99160c88ff14ad2c3be05aab_prof);

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
