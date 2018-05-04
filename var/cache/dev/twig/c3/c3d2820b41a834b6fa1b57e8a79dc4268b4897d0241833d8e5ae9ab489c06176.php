<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5c060836cae49a47269375db264f99d66a38d16e07ebf891f345d4cc2de7bff2 extends Twig_Template
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
        $__internal_31c27883a1875b70282d62eb688dd74a7577d46e80c98e1a20c64171e4c4f6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c27883a1875b70282d62eb688dd74a7577d46e80c98e1a20c64171e4c4f6e2->enter($__internal_31c27883a1875b70282d62eb688dd74a7577d46e80c98e1a20c64171e4c4f6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f244bf80c71f01b8ec6ddb9647331a2080a5f3ca52ad92de1915338da354365f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f244bf80c71f01b8ec6ddb9647331a2080a5f3ca52ad92de1915338da354365f->enter($__internal_f244bf80c71f01b8ec6ddb9647331a2080a5f3ca52ad92de1915338da354365f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_31c27883a1875b70282d62eb688dd74a7577d46e80c98e1a20c64171e4c4f6e2->leave($__internal_31c27883a1875b70282d62eb688dd74a7577d46e80c98e1a20c64171e4c4f6e2_prof);

        
        $__internal_f244bf80c71f01b8ec6ddb9647331a2080a5f3ca52ad92de1915338da354365f->leave($__internal_f244bf80c71f01b8ec6ddb9647331a2080a5f3ca52ad92de1915338da354365f_prof);

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
", "@Framework/Form/choice_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
