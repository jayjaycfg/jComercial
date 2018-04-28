<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_2e747cc8d937105e45c9b183b5df7c6847bdb3bdc9477a4f59e04041a5f1754c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e747cc8d937105e45c9b183b5df7c6847bdb3bdc9477a4f59e04041a5f1754c->enter($__internal_2e747cc8d937105e45c9b183b5df7c6847bdb3bdc9477a4f59e04041a5f1754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e4ae6940c0125771357db7a69fb3a83ddf0fc25ae90ba3ffc61d69337650d455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ae6940c0125771357db7a69fb3a83ddf0fc25ae90ba3ffc61d69337650d455->enter($__internal_e4ae6940c0125771357db7a69fb3a83ddf0fc25ae90ba3ffc61d69337650d455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2e747cc8d937105e45c9b183b5df7c6847bdb3bdc9477a4f59e04041a5f1754c->leave($__internal_2e747cc8d937105e45c9b183b5df7c6847bdb3bdc9477a4f59e04041a5f1754c_prof);

        
        $__internal_e4ae6940c0125771357db7a69fb3a83ddf0fc25ae90ba3ffc61d69337650d455->leave($__internal_e4ae6940c0125771357db7a69fb3a83ddf0fc25ae90ba3ffc61d69337650d455_prof);

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
", "@Framework/Form/email_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
