<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4d66944aea51659b6b00039ae5048a9ac015d831b9ceab291319131e0ef243d extends Twig_Template
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
        $__internal_027741f31122b329418fcf3980c416f8cf388720a69ea59cbf70833d6adb0046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027741f31122b329418fcf3980c416f8cf388720a69ea59cbf70833d6adb0046->enter($__internal_027741f31122b329418fcf3980c416f8cf388720a69ea59cbf70833d6adb0046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_96708b3cfd45f055bb7af548e55aba13b3a6529a48841772157107bbd40e1294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96708b3cfd45f055bb7af548e55aba13b3a6529a48841772157107bbd40e1294->enter($__internal_96708b3cfd45f055bb7af548e55aba13b3a6529a48841772157107bbd40e1294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_027741f31122b329418fcf3980c416f8cf388720a69ea59cbf70833d6adb0046->leave($__internal_027741f31122b329418fcf3980c416f8cf388720a69ea59cbf70833d6adb0046_prof);

        
        $__internal_96708b3cfd45f055bb7af548e55aba13b3a6529a48841772157107bbd40e1294->leave($__internal_96708b3cfd45f055bb7af548e55aba13b3a6529a48841772157107bbd40e1294_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
