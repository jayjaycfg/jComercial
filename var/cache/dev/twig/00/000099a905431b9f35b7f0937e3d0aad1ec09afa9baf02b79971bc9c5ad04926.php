<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2bec3815133dbdfb9c8ea78f45a953f0df37b976cb9668c04d9908bab093f9af extends Twig_Template
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
        $__internal_0702eee44855682a4b24c0ea0af925bcaa7ae75d91b20e57b9da75c798f71436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0702eee44855682a4b24c0ea0af925bcaa7ae75d91b20e57b9da75c798f71436->enter($__internal_0702eee44855682a4b24c0ea0af925bcaa7ae75d91b20e57b9da75c798f71436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_233fdb538e5313b7730bf334610c2855efcac44d97e1f8e0be7b198c7cb54518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233fdb538e5313b7730bf334610c2855efcac44d97e1f8e0be7b198c7cb54518->enter($__internal_233fdb538e5313b7730bf334610c2855efcac44d97e1f8e0be7b198c7cb54518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0702eee44855682a4b24c0ea0af925bcaa7ae75d91b20e57b9da75c798f71436->leave($__internal_0702eee44855682a4b24c0ea0af925bcaa7ae75d91b20e57b9da75c798f71436_prof);

        
        $__internal_233fdb538e5313b7730bf334610c2855efcac44d97e1f8e0be7b198c7cb54518->leave($__internal_233fdb538e5313b7730bf334610c2855efcac44d97e1f8e0be7b198c7cb54518_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
