<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_35e96e158336e6a78ff19b5c9f2433bca20b361ded91f61849f977431f2cef8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e96e158336e6a78ff19b5c9f2433bca20b361ded91f61849f977431f2cef8f->enter($__internal_35e96e158336e6a78ff19b5c9f2433bca20b361ded91f61849f977431f2cef8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0bd4f1d0956bb61a8393efd43a2549beb9ccad9bd5f3c9a5f314000acce21bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd4f1d0956bb61a8393efd43a2549beb9ccad9bd5f3c9a5f314000acce21bfd->enter($__internal_0bd4f1d0956bb61a8393efd43a2549beb9ccad9bd5f3c9a5f314000acce21bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_35e96e158336e6a78ff19b5c9f2433bca20b361ded91f61849f977431f2cef8f->leave($__internal_35e96e158336e6a78ff19b5c9f2433bca20b361ded91f61849f977431f2cef8f_prof);

        
        $__internal_0bd4f1d0956bb61a8393efd43a2549beb9ccad9bd5f3c9a5f314000acce21bfd->leave($__internal_0bd4f1d0956bb61a8393efd43a2549beb9ccad9bd5f3c9a5f314000acce21bfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
