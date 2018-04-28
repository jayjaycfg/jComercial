<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa3a378efa63daa82e750bbe166d9e2ce6fbfc6ac94cd6cee4bbf94d94d43f67 extends Twig_Template
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
        $__internal_4c1c8e57b665ced325bcd80b03eef822206aadb185ef76f9bf8f3ac186d4a6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1c8e57b665ced325bcd80b03eef822206aadb185ef76f9bf8f3ac186d4a6b4->enter($__internal_4c1c8e57b665ced325bcd80b03eef822206aadb185ef76f9bf8f3ac186d4a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_462c15879fa55e1b19967a777d4502279dbbe136e3d4422161fec13822565496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462c15879fa55e1b19967a777d4502279dbbe136e3d4422161fec13822565496->enter($__internal_462c15879fa55e1b19967a777d4502279dbbe136e3d4422161fec13822565496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4c1c8e57b665ced325bcd80b03eef822206aadb185ef76f9bf8f3ac186d4a6b4->leave($__internal_4c1c8e57b665ced325bcd80b03eef822206aadb185ef76f9bf8f3ac186d4a6b4_prof);

        
        $__internal_462c15879fa55e1b19967a777d4502279dbbe136e3d4422161fec13822565496->leave($__internal_462c15879fa55e1b19967a777d4502279dbbe136e3d4422161fec13822565496_prof);

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
", "@Framework/Form/form_rows.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
