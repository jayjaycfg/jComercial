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
        $__internal_f1e839e7725461c6568b4d83465c1ccefd3bf22f56c5c024cf7380876a91dd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e839e7725461c6568b4d83465c1ccefd3bf22f56c5c024cf7380876a91dd32->enter($__internal_f1e839e7725461c6568b4d83465c1ccefd3bf22f56c5c024cf7380876a91dd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cc443fde22d09caf6ee226dc642d6d3eb5515a2b61ab0d542487cce2bbae664e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc443fde22d09caf6ee226dc642d6d3eb5515a2b61ab0d542487cce2bbae664e->enter($__internal_cc443fde22d09caf6ee226dc642d6d3eb5515a2b61ab0d542487cce2bbae664e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f1e839e7725461c6568b4d83465c1ccefd3bf22f56c5c024cf7380876a91dd32->leave($__internal_f1e839e7725461c6568b4d83465c1ccefd3bf22f56c5c024cf7380876a91dd32_prof);

        
        $__internal_cc443fde22d09caf6ee226dc642d6d3eb5515a2b61ab0d542487cce2bbae664e->leave($__internal_cc443fde22d09caf6ee226dc642d6d3eb5515a2b61ab0d542487cce2bbae664e_prof);

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
