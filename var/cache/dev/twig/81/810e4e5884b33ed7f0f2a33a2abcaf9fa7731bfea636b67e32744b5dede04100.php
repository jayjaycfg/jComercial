<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_23d2a24170420de7d4c3e5aed4a2f763687bcaa704969614733b72bfc477a56d extends Twig_Template
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
        $__internal_cbdef9e8dc25319819dda5c88079581745fe8b0a80867a06ac43427d953e842a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdef9e8dc25319819dda5c88079581745fe8b0a80867a06ac43427d953e842a->enter($__internal_cbdef9e8dc25319819dda5c88079581745fe8b0a80867a06ac43427d953e842a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_96ca0a2cfda58ddaae590f05f8c0d87692b533749ff9a5899d7be7ba2b6fb338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ca0a2cfda58ddaae590f05f8c0d87692b533749ff9a5899d7be7ba2b6fb338->enter($__internal_96ca0a2cfda58ddaae590f05f8c0d87692b533749ff9a5899d7be7ba2b6fb338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cbdef9e8dc25319819dda5c88079581745fe8b0a80867a06ac43427d953e842a->leave($__internal_cbdef9e8dc25319819dda5c88079581745fe8b0a80867a06ac43427d953e842a_prof);

        
        $__internal_96ca0a2cfda58ddaae590f05f8c0d87692b533749ff9a5899d7be7ba2b6fb338->leave($__internal_96ca0a2cfda58ddaae590f05f8c0d87692b533749ff9a5899d7be7ba2b6fb338_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
