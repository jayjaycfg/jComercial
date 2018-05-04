<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_102b9f0600ae7dffa1e6cfef2661902e0f33827312a7b37369632ebb95f503d5 extends Twig_Template
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
        $__internal_0e5f331237cd1fe5f5430ead78af758e8a4675bdbd25b977f2ff8ff14694b8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5f331237cd1fe5f5430ead78af758e8a4675bdbd25b977f2ff8ff14694b8d1->enter($__internal_0e5f331237cd1fe5f5430ead78af758e8a4675bdbd25b977f2ff8ff14694b8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fc2186a7baec66001e3b463d937fab8bbba3ec2328850952e7de42ec5e73bf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2186a7baec66001e3b463d937fab8bbba3ec2328850952e7de42ec5e73bf05->enter($__internal_fc2186a7baec66001e3b463d937fab8bbba3ec2328850952e7de42ec5e73bf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0e5f331237cd1fe5f5430ead78af758e8a4675bdbd25b977f2ff8ff14694b8d1->leave($__internal_0e5f331237cd1fe5f5430ead78af758e8a4675bdbd25b977f2ff8ff14694b8d1_prof);

        
        $__internal_fc2186a7baec66001e3b463d937fab8bbba3ec2328850952e7de42ec5e73bf05->leave($__internal_fc2186a7baec66001e3b463d937fab8bbba3ec2328850952e7de42ec5e73bf05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
