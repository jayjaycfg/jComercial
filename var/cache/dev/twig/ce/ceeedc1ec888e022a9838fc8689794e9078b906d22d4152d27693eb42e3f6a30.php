<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d594441b1dcb60682f1726b7c2e883c4096dab329026bdda73fa109f8de9463f extends Twig_Template
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
        $__internal_f73c8950a78f3c18d796bf072c378520606a228b6e6fc6d6ed01d93bd2b9cd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73c8950a78f3c18d796bf072c378520606a228b6e6fc6d6ed01d93bd2b9cd5b->enter($__internal_f73c8950a78f3c18d796bf072c378520606a228b6e6fc6d6ed01d93bd2b9cd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5146a1b1553fcdf739c1b88a4c211cfc2dafd5c3450fc2d5dfce0a8717108edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5146a1b1553fcdf739c1b88a4c211cfc2dafd5c3450fc2d5dfce0a8717108edc->enter($__internal_5146a1b1553fcdf739c1b88a4c211cfc2dafd5c3450fc2d5dfce0a8717108edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f73c8950a78f3c18d796bf072c378520606a228b6e6fc6d6ed01d93bd2b9cd5b->leave($__internal_f73c8950a78f3c18d796bf072c378520606a228b6e6fc6d6ed01d93bd2b9cd5b_prof);

        
        $__internal_5146a1b1553fcdf739c1b88a4c211cfc2dafd5c3450fc2d5dfce0a8717108edc->leave($__internal_5146a1b1553fcdf739c1b88a4c211cfc2dafd5c3450fc2d5dfce0a8717108edc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
