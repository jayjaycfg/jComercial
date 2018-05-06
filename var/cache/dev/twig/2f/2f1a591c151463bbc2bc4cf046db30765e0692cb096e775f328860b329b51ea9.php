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
        $__internal_f943a4dfe9d82c2f2e18c69328ebb22dd142b806871f5a5e7d1f92e6a38cad9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f943a4dfe9d82c2f2e18c69328ebb22dd142b806871f5a5e7d1f92e6a38cad9a->enter($__internal_f943a4dfe9d82c2f2e18c69328ebb22dd142b806871f5a5e7d1f92e6a38cad9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_69787e6acc383a159dbc9fc299294925803f4d564359b3efc32b3c0c7a51e95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69787e6acc383a159dbc9fc299294925803f4d564359b3efc32b3c0c7a51e95f->enter($__internal_69787e6acc383a159dbc9fc299294925803f4d564359b3efc32b3c0c7a51e95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f943a4dfe9d82c2f2e18c69328ebb22dd142b806871f5a5e7d1f92e6a38cad9a->leave($__internal_f943a4dfe9d82c2f2e18c69328ebb22dd142b806871f5a5e7d1f92e6a38cad9a_prof);

        
        $__internal_69787e6acc383a159dbc9fc299294925803f4d564359b3efc32b3c0c7a51e95f->leave($__internal_69787e6acc383a159dbc9fc299294925803f4d564359b3efc32b3c0c7a51e95f_prof);

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
