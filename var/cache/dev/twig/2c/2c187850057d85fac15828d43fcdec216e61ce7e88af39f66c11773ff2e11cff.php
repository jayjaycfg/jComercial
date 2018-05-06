<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8948eab21f13e8d1a5944c9aa6a68b35a475a21ebdbde87d9199569f7b41d48 extends Twig_Template
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
        $__internal_d687a30d81d1ad567480d2f8c9e21fee278ce31c3fe32d504efa3c9c9b869923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d687a30d81d1ad567480d2f8c9e21fee278ce31c3fe32d504efa3c9c9b869923->enter($__internal_d687a30d81d1ad567480d2f8c9e21fee278ce31c3fe32d504efa3c9c9b869923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5392c715b3eafdb1bb376b3e3d765ca29594db70c5689f17dba435d67c99eed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5392c715b3eafdb1bb376b3e3d765ca29594db70c5689f17dba435d67c99eed9->enter($__internal_5392c715b3eafdb1bb376b3e3d765ca29594db70c5689f17dba435d67c99eed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d687a30d81d1ad567480d2f8c9e21fee278ce31c3fe32d504efa3c9c9b869923->leave($__internal_d687a30d81d1ad567480d2f8c9e21fee278ce31c3fe32d504efa3c9c9b869923_prof);

        
        $__internal_5392c715b3eafdb1bb376b3e3d765ca29594db70c5689f17dba435d67c99eed9->leave($__internal_5392c715b3eafdb1bb376b3e3d765ca29594db70c5689f17dba435d67c99eed9_prof);

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
", "@Framework/Form/hidden_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
