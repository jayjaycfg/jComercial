<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd261761b9df5032b9aa3cb8b0af94d0d155b6dd5a02f66fcea2fc15316666b1 extends Twig_Template
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
        $__internal_b34ea506f0e8f2b31a361ae8d2f1c8bc296cf549f3a1f7f4e3cf36a221e31ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34ea506f0e8f2b31a361ae8d2f1c8bc296cf549f3a1f7f4e3cf36a221e31ef5->enter($__internal_b34ea506f0e8f2b31a361ae8d2f1c8bc296cf549f3a1f7f4e3cf36a221e31ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6e9597861fece5b244bde067bcf1a9730b0b9009a20bdbfdda776b1d37d64f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9597861fece5b244bde067bcf1a9730b0b9009a20bdbfdda776b1d37d64f9f->enter($__internal_6e9597861fece5b244bde067bcf1a9730b0b9009a20bdbfdda776b1d37d64f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b34ea506f0e8f2b31a361ae8d2f1c8bc296cf549f3a1f7f4e3cf36a221e31ef5->leave($__internal_b34ea506f0e8f2b31a361ae8d2f1c8bc296cf549f3a1f7f4e3cf36a221e31ef5_prof);

        
        $__internal_6e9597861fece5b244bde067bcf1a9730b0b9009a20bdbfdda776b1d37d64f9f->leave($__internal_6e9597861fece5b244bde067bcf1a9730b0b9009a20bdbfdda776b1d37d64f9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
