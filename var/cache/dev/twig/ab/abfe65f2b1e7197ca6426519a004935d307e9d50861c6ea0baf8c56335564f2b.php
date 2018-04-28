<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_4aba93da230295e5b8739db8e60880a62dc9d4cfe9d339bc842e652d7c44950a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aba93da230295e5b8739db8e60880a62dc9d4cfe9d339bc842e652d7c44950a->enter($__internal_4aba93da230295e5b8739db8e60880a62dc9d4cfe9d339bc842e652d7c44950a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_82cb756edc979c26654a00b809828238d7f69150e84f5b8f00aa06673b26f3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cb756edc979c26654a00b809828238d7f69150e84f5b8f00aa06673b26f3b6->enter($__internal_82cb756edc979c26654a00b809828238d7f69150e84f5b8f00aa06673b26f3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4aba93da230295e5b8739db8e60880a62dc9d4cfe9d339bc842e652d7c44950a->leave($__internal_4aba93da230295e5b8739db8e60880a62dc9d4cfe9d339bc842e652d7c44950a_prof);

        
        $__internal_82cb756edc979c26654a00b809828238d7f69150e84f5b8f00aa06673b26f3b6->leave($__internal_82cb756edc979c26654a00b809828238d7f69150e84f5b8f00aa06673b26f3b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
