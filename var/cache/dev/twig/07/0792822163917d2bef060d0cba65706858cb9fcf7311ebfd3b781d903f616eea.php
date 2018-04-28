<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_85127efcc34e55b5d1228c438e32efeef7fe8dc819117ce108ad6f8b014bc1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85127efcc34e55b5d1228c438e32efeef7fe8dc819117ce108ad6f8b014bc1c4->enter($__internal_85127efcc34e55b5d1228c438e32efeef7fe8dc819117ce108ad6f8b014bc1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b1a77273f4f8e3636a001c87605b0c569f568f072b730a19aae63650a32449a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a77273f4f8e3636a001c87605b0c569f568f072b730a19aae63650a32449a0->enter($__internal_b1a77273f4f8e3636a001c87605b0c569f568f072b730a19aae63650a32449a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_85127efcc34e55b5d1228c438e32efeef7fe8dc819117ce108ad6f8b014bc1c4->leave($__internal_85127efcc34e55b5d1228c438e32efeef7fe8dc819117ce108ad6f8b014bc1c4_prof);

        
        $__internal_b1a77273f4f8e3636a001c87605b0c569f568f072b730a19aae63650a32449a0->leave($__internal_b1a77273f4f8e3636a001c87605b0c569f568f072b730a19aae63650a32449a0_prof);

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
", "@Framework/Form/password_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
