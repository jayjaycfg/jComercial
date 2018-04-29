<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_987071cac1a3480617fe74ed1457d3fd1e7afee49d5680fa18fca0152d66d92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987071cac1a3480617fe74ed1457d3fd1e7afee49d5680fa18fca0152d66d92b->enter($__internal_987071cac1a3480617fe74ed1457d3fd1e7afee49d5680fa18fca0152d66d92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f911c04993e80fbf22661fcc16b80aadf9fed00aa24221699ee2699852682e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f911c04993e80fbf22661fcc16b80aadf9fed00aa24221699ee2699852682e47->enter($__internal_f911c04993e80fbf22661fcc16b80aadf9fed00aa24221699ee2699852682e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_987071cac1a3480617fe74ed1457d3fd1e7afee49d5680fa18fca0152d66d92b->leave($__internal_987071cac1a3480617fe74ed1457d3fd1e7afee49d5680fa18fca0152d66d92b_prof);

        
        $__internal_f911c04993e80fbf22661fcc16b80aadf9fed00aa24221699ee2699852682e47->leave($__internal_f911c04993e80fbf22661fcc16b80aadf9fed00aa24221699ee2699852682e47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
