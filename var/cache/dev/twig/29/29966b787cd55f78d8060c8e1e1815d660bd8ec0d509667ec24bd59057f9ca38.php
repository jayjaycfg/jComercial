<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_a6fd5c46838ab1558ddd5f0d81cb236feae0f2435e8009a5f0691a63cb20e9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fd5c46838ab1558ddd5f0d81cb236feae0f2435e8009a5f0691a63cb20e9fa->enter($__internal_a6fd5c46838ab1558ddd5f0d81cb236feae0f2435e8009a5f0691a63cb20e9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_10473570a3774027e6c60771e54542c19c78ab96d37704746b58238b55f8510b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10473570a3774027e6c60771e54542c19c78ab96d37704746b58238b55f8510b->enter($__internal_10473570a3774027e6c60771e54542c19c78ab96d37704746b58238b55f8510b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a6fd5c46838ab1558ddd5f0d81cb236feae0f2435e8009a5f0691a63cb20e9fa->leave($__internal_a6fd5c46838ab1558ddd5f0d81cb236feae0f2435e8009a5f0691a63cb20e9fa_prof);

        
        $__internal_10473570a3774027e6c60771e54542c19c78ab96d37704746b58238b55f8510b->leave($__internal_10473570a3774027e6c60771e54542c19c78ab96d37704746b58238b55f8510b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
