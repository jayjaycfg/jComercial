<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4599f3ba6c6fa4e8c3dc357717f7e76ac0261e000440ef63937334e17c46b88c extends Twig_Template
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
        $__internal_4cf5d2a57ee481bc9f00751eff93204af81fb365fe21e7f8be019b84222dabf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf5d2a57ee481bc9f00751eff93204af81fb365fe21e7f8be019b84222dabf3->enter($__internal_4cf5d2a57ee481bc9f00751eff93204af81fb365fe21e7f8be019b84222dabf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1bb623331103c8b879d4fc603397b25ed7903dc17b7dce9f3e041e9949db1b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb623331103c8b879d4fc603397b25ed7903dc17b7dce9f3e041e9949db1b71->enter($__internal_1bb623331103c8b879d4fc603397b25ed7903dc17b7dce9f3e041e9949db1b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4cf5d2a57ee481bc9f00751eff93204af81fb365fe21e7f8be019b84222dabf3->leave($__internal_4cf5d2a57ee481bc9f00751eff93204af81fb365fe21e7f8be019b84222dabf3_prof);

        
        $__internal_1bb623331103c8b879d4fc603397b25ed7903dc17b7dce9f3e041e9949db1b71->leave($__internal_1bb623331103c8b879d4fc603397b25ed7903dc17b7dce9f3e041e9949db1b71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
