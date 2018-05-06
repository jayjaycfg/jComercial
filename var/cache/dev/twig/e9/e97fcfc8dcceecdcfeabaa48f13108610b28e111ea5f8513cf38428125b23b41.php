<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e6342a1f73361c9ac04ec31f753d13a30e7133a91be4fe72e146dc47514a08b5 extends Twig_Template
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
        $__internal_419304578ef8fe21400f1d7abeb1a4312ec1f446a0a0f6613e83ced1f5fe65cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419304578ef8fe21400f1d7abeb1a4312ec1f446a0a0f6613e83ced1f5fe65cd->enter($__internal_419304578ef8fe21400f1d7abeb1a4312ec1f446a0a0f6613e83ced1f5fe65cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_878734ec88d67e136f58b8f5834446e0ffabd0b35c62d254366aa4af86721003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878734ec88d67e136f58b8f5834446e0ffabd0b35c62d254366aa4af86721003->enter($__internal_878734ec88d67e136f58b8f5834446e0ffabd0b35c62d254366aa4af86721003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_419304578ef8fe21400f1d7abeb1a4312ec1f446a0a0f6613e83ced1f5fe65cd->leave($__internal_419304578ef8fe21400f1d7abeb1a4312ec1f446a0a0f6613e83ced1f5fe65cd_prof);

        
        $__internal_878734ec88d67e136f58b8f5834446e0ffabd0b35c62d254366aa4af86721003->leave($__internal_878734ec88d67e136f58b8f5834446e0ffabd0b35c62d254366aa4af86721003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
