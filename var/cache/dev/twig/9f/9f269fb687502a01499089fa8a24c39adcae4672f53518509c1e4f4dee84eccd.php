<?php

/* :admin/user:edit.html.twig */
class __TwigTemplate_9010cb5255cd36da8a1c34366e90d820c853ce5bd3c361736c0f2eac10151cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/user:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22c10cd6497d7e97f732d22653aaa64151089dafc7a6ea15d92ca0664ab19a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c10cd6497d7e97f732d22653aaa64151089dafc7a6ea15d92ca0664ab19a76->enter($__internal_22c10cd6497d7e97f732d22653aaa64151089dafc7a6ea15d92ca0664ab19a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:edit.html.twig"));

        $__internal_65f0766b625c4a2406a0b238296fd573d67bd45a24e8d124413b8c96473f2b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f0766b625c4a2406a0b238296fd573d67bd45a24e8d124413b8c96473f2b3c->enter($__internal_65f0766b625c4a2406a0b238296fd573d67bd45a24e8d124413b8c96473f2b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c10cd6497d7e97f732d22653aaa64151089dafc7a6ea15d92ca0664ab19a76->leave($__internal_22c10cd6497d7e97f732d22653aaa64151089dafc7a6ea15d92ca0664ab19a76_prof);

        
        $__internal_65f0766b625c4a2406a0b238296fd573d67bd45a24e8d124413b8c96473f2b3c->leave($__internal_65f0766b625c4a2406a0b238296fd573d67bd45a24e8d124413b8c96473f2b3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ae13f649ec5bbfcbe673124f7df428b97799ea0eb418ea15557214976c3571e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae13f649ec5bbfcbe673124f7df428b97799ea0eb418ea15557214976c3571e->enter($__internal_2ae13f649ec5bbfcbe673124f7df428b97799ea0eb418ea15557214976c3571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39d8e4ffa3a28bf36dd88b4c06afed58b894238516bb89679f9919e09559c3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d8e4ffa3a28bf36dd88b4c06afed58b894238516bb89679f9919e09559c3bd->enter($__internal_39d8e4ffa3a28bf36dd88b4c06afed58b894238516bb89679f9919e09559c3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                <h1>Editar usuario</h1>

                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_start');
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'errors');
        echo "

                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "name", array()), 'row');
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "lastName", array()), 'row');
        echo "
\t\t\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "plainPassword", array()), 'row');
        echo "
\t\t\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "roles", array()), 'row');
        echo "

                    <button type=\"submit\" class=\"btn btn-primary\">Editar</button>
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_39d8e4ffa3a28bf36dd88b4c06afed58b894238516bb89679f9919e09559c3bd->leave($__internal_39d8e4ffa3a28bf36dd88b4c06afed58b894238516bb89679f9919e09559c3bd_prof);

        
        $__internal_2ae13f649ec5bbfcbe673124f7df428b97799ea0eb418ea15557214976c3571e->leave($__internal_2ae13f649ec5bbfcbe673124f7df428b97799ea0eb418ea15557214976c3571e_prof);

    }

    public function getTemplateName()
    {
        return ":admin/user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                <h1>Editar usuario</h1>

                {{ form_start(userForm) }}
                    {{ form_errors(userForm) }}

                    {{ form_row(userForm.name) }}
                    {{ form_row(userForm.lastName) }}
\t\t\t\t    {{ form_row(userForm.plainPassword) }}
\t\t\t\t    {{ form_row(userForm.roles) }}

                    <button type=\"submit\" class=\"btn btn-primary\">Editar</button>
                {{ form_end(userForm) }}
            </div>
        </div>
    </div>
{% endblock %}
", ":admin/user:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/edit.html.twig");
    }
}
