<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_682a6f2685a1f9a57c3913a162d4f951d6bb029b0554f223078fa00bc8307222 extends Twig_Template
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
        $__internal_bf52557c021712be2bb25c58d34f63cf54a9943257408f61b735b55170cb9d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf52557c021712be2bb25c58d34f63cf54a9943257408f61b735b55170cb9d3d->enter($__internal_bf52557c021712be2bb25c58d34f63cf54a9943257408f61b735b55170cb9d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0a09c0a9a0368e2d3a2151477d81eff7cb0a32bf785c2042d3e6dfdd6f9377a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a09c0a9a0368e2d3a2151477d81eff7cb0a32bf785c2042d3e6dfdd6f9377a4->enter($__internal_0a09c0a9a0368e2d3a2151477d81eff7cb0a32bf785c2042d3e6dfdd6f9377a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bf52557c021712be2bb25c58d34f63cf54a9943257408f61b735b55170cb9d3d->leave($__internal_bf52557c021712be2bb25c58d34f63cf54a9943257408f61b735b55170cb9d3d_prof);

        
        $__internal_0a09c0a9a0368e2d3a2151477d81eff7cb0a32bf785c2042d3e6dfdd6f9377a4->leave($__internal_0a09c0a9a0368e2d3a2151477d81eff7cb0a32bf785c2042d3e6dfdd6f9377a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
