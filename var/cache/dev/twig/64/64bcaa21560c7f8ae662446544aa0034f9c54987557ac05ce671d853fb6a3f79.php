<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b033fdbbbb4dab97b1aa6b45ce8db198a6e04fcc0fcd7d7cdcea29c33ae4d1ac extends Twig_Template
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
        $__internal_4d902f17665d52337e4be9ff1985c071286d89ea401bfd119abacb88156a18d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d902f17665d52337e4be9ff1985c071286d89ea401bfd119abacb88156a18d4->enter($__internal_4d902f17665d52337e4be9ff1985c071286d89ea401bfd119abacb88156a18d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_92e2dba273f5eee1f14b69c87a68a00016c5020064416f75be1ed4d6fcf8f4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e2dba273f5eee1f14b69c87a68a00016c5020064416f75be1ed4d6fcf8f4eb->enter($__internal_92e2dba273f5eee1f14b69c87a68a00016c5020064416f75be1ed4d6fcf8f4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4d902f17665d52337e4be9ff1985c071286d89ea401bfd119abacb88156a18d4->leave($__internal_4d902f17665d52337e4be9ff1985c071286d89ea401bfd119abacb88156a18d4_prof);

        
        $__internal_92e2dba273f5eee1f14b69c87a68a00016c5020064416f75be1ed4d6fcf8f4eb->leave($__internal_92e2dba273f5eee1f14b69c87a68a00016c5020064416f75be1ed4d6fcf8f4eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
