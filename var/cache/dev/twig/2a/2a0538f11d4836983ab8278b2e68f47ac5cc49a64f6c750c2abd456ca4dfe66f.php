<?php

/* register/register.html.twig */
class __TwigTemplate_66a880bdbed0b4ccf0a8283625b2f7af7cc35d32d0b087a7078009a6964218c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "register/register.html.twig", 1);
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
        $__internal_a7a9f1fcf8021a2ae13b791f7dbebddd28810012eff7e318f02a52f6a2dd0675 = $this->env->getExtension("native_profiler");
        $__internal_a7a9f1fcf8021a2ae13b791f7dbebddd28810012eff7e318f02a52f6a2dd0675->enter($__internal_a7a9f1fcf8021a2ae13b791f7dbebddd28810012eff7e318f02a52f6a2dd0675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7a9f1fcf8021a2ae13b791f7dbebddd28810012eff7e318f02a52f6a2dd0675->leave($__internal_a7a9f1fcf8021a2ae13b791f7dbebddd28810012eff7e318f02a52f6a2dd0675_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_35a7f8b85ddeac7b1717d57ffb921ec346284e2cc0224f98ccc7d625d8c3aef3 = $this->env->getExtension("native_profiler");
        $__internal_35a7f8b85ddeac7b1717d57ffb921ec346284e2cc0224f98ccc7d625d8c3aef3->enter($__internal_35a7f8b85ddeac7b1717d57ffb921ec346284e2cc0224f98ccc7d625d8c3aef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Register</h1>
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\" method=\"post\">
 ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-group\">
           ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("label" => "Email", "attr" => array("class" => "form-control", "placeholder" => "Email", "maxlength" => "250")));
        echo "<br>
    </div>
    <div class=\"form-group\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'row', array("label" => "Password", "attr" => array("class" => "form-control", "placeholder" => "Password", "maxlength" => "250")));
        echo "<br>
    </div>
    <div class=\"form-group\">
         ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'row', array("label" => "Retype Password", "attr" => array("class" => "form-control", "placeholder" => "Password", "maxlength" => "250")));
        echo "<br>

    </div>
    <button type=\"submit\" class=\"btn btn-default\">Register</button>
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
        
        $__internal_35a7f8b85ddeac7b1717d57ffb921ec346284e2cc0224f98ccc7d625d8c3aef3->leave($__internal_35a7f8b85ddeac7b1717d57ffb921ec346284e2cc0224f98ccc7d625d8c3aef3_prof);

    }

    public function getTemplateName()
    {
        return "register/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  64 => 13,  58 => 10,  52 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1>Register</h1>*/
/* <form action="{{ path('user_register') }}" method="post">*/
/*  {{ form_errors(form)}}*/
/*     <div class="form-group">*/
/*            {{form_row(form.username, {'label':'Email','attr': {'class':'form-control','placeholder': 'Email','maxlength':'250'}} ) }}<br>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row(form.password.first, {'label':'Password', 'attr': {'class':'form-control','placeholder': 'Password','maxlength':'250'}} ) }}<br>*/
/*     </div>*/
/*     <div class="form-group">*/
/*          {{form_row(form.password.second, {'label':'Retype Password','attr': {'class':'form-control','placeholder': 'Password','maxlength':'250'}} ) }}<br>*/
/* */
/*     </div>*/
/*     <button type="submit" class="btn btn-default">Register</button>*/
/*     {{ form_rest(form)}}*/
/* </form>*/
/* {% endblock %}*/
/* */
