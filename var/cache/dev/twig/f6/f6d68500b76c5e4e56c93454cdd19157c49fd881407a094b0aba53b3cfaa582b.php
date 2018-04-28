<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_93bcbd5ac05f6797bb022beebea0b7855bd4b3c81d3be4158dcb2fe9bbe6976e extends Twig_Template
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
        $__internal_d0746ced2fb71333e075a64393e6cc3261fd53c464a3bcc4bb25ed63cb1dd006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0746ced2fb71333e075a64393e6cc3261fd53c464a3bcc4bb25ed63cb1dd006->enter($__internal_d0746ced2fb71333e075a64393e6cc3261fd53c464a3bcc4bb25ed63cb1dd006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bfa0888a7516c642d555c060e1448ed5a7a076c2f8dba6bb58a12142c6dfa391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa0888a7516c642d555c060e1448ed5a7a076c2f8dba6bb58a12142c6dfa391->enter($__internal_bfa0888a7516c642d555c060e1448ed5a7a076c2f8dba6bb58a12142c6dfa391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d0746ced2fb71333e075a64393e6cc3261fd53c464a3bcc4bb25ed63cb1dd006->leave($__internal_d0746ced2fb71333e075a64393e6cc3261fd53c464a3bcc4bb25ed63cb1dd006_prof);

        
        $__internal_bfa0888a7516c642d555c060e1448ed5a7a076c2f8dba6bb58a12142c6dfa391->leave($__internal_bfa0888a7516c642d555c060e1448ed5a7a076c2f8dba6bb58a12142c6dfa391_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
