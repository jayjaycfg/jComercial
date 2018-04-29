<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_9db64264e0c0eca5378701295471aa9dbc357564fea63767d29e7fdd1b9e58bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db64264e0c0eca5378701295471aa9dbc357564fea63767d29e7fdd1b9e58bf->enter($__internal_9db64264e0c0eca5378701295471aa9dbc357564fea63767d29e7fdd1b9e58bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_af2cc977fe6ddc9b34a075dea11f4f1f48c9fc0e1a420be415e46e58a8cc3f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2cc977fe6ddc9b34a075dea11f4f1f48c9fc0e1a420be415e46e58a8cc3f35->enter($__internal_af2cc977fe6ddc9b34a075dea11f4f1f48c9fc0e1a420be415e46e58a8cc3f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9db64264e0c0eca5378701295471aa9dbc357564fea63767d29e7fdd1b9e58bf->leave($__internal_9db64264e0c0eca5378701295471aa9dbc357564fea63767d29e7fdd1b9e58bf_prof);

        
        $__internal_af2cc977fe6ddc9b34a075dea11f4f1f48c9fc0e1a420be415e46e58a8cc3f35->leave($__internal_af2cc977fe6ddc9b34a075dea11f4f1f48c9fc0e1a420be415e46e58a8cc3f35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
