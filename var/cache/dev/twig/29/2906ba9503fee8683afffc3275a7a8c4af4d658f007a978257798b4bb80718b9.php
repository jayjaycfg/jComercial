<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98d7dda513a28e40954cf0fe4f994038abd57bf1c7e44dd11bb7e023e5e1e0 extends Twig_Template
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
        $__internal_b33d8bd7e6064e4c9e92a2bee32e03a753a1fa3005f2dd961b4381a2566a65b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33d8bd7e6064e4c9e92a2bee32e03a753a1fa3005f2dd961b4381a2566a65b3->enter($__internal_b33d8bd7e6064e4c9e92a2bee32e03a753a1fa3005f2dd961b4381a2566a65b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_fc1c3d155ff46a945391c5dd523ad4bdf06f7cae71320946960bf6d32701b20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1c3d155ff46a945391c5dd523ad4bdf06f7cae71320946960bf6d32701b20e->enter($__internal_fc1c3d155ff46a945391c5dd523ad4bdf06f7cae71320946960bf6d32701b20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b33d8bd7e6064e4c9e92a2bee32e03a753a1fa3005f2dd961b4381a2566a65b3->leave($__internal_b33d8bd7e6064e4c9e92a2bee32e03a753a1fa3005f2dd961b4381a2566a65b3_prof);

        
        $__internal_fc1c3d155ff46a945391c5dd523ad4bdf06f7cae71320946960bf6d32701b20e->leave($__internal_fc1c3d155ff46a945391c5dd523ad4bdf06f7cae71320946960bf6d32701b20e_prof);

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
", "@Framework/Form/choice_options.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
