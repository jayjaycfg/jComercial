<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_507e7ac52e5ba786ab6154f79f162c0947d032cb18d100ef67c3350c89afa941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507e7ac52e5ba786ab6154f79f162c0947d032cb18d100ef67c3350c89afa941->enter($__internal_507e7ac52e5ba786ab6154f79f162c0947d032cb18d100ef67c3350c89afa941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_51f479573f4e4441f00e14606e3f09e56f410337035f0c06d17d45767106fd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f479573f4e4441f00e14606e3f09e56f410337035f0c06d17d45767106fd7f->enter($__internal_51f479573f4e4441f00e14606e3f09e56f410337035f0c06d17d45767106fd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_507e7ac52e5ba786ab6154f79f162c0947d032cb18d100ef67c3350c89afa941->leave($__internal_507e7ac52e5ba786ab6154f79f162c0947d032cb18d100ef67c3350c89afa941_prof);

        
        $__internal_51f479573f4e4441f00e14606e3f09e56f410337035f0c06d17d45767106fd7f->leave($__internal_51f479573f4e4441f00e14606e3f09e56f410337035f0c06d17d45767106fd7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
