<?php

/* book/edit.html.twig */
class __TwigTemplate_bb205fb0b775621d9ca2d03fb524419b6db0e9c9ee3a2b7bfcfb47823a6be32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "book/edit.html.twig", 1);
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
        $__internal_3720457cedfd315dbf964a4aaad28caabc1e87ace54954761eafac91d276ca0e = $this->env->getExtension("native_profiler");
        $__internal_3720457cedfd315dbf964a4aaad28caabc1e87ace54954761eafac91d276ca0e->enter($__internal_3720457cedfd315dbf964a4aaad28caabc1e87ace54954761eafac91d276ca0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "book/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3720457cedfd315dbf964a4aaad28caabc1e87ace54954761eafac91d276ca0e->leave($__internal_3720457cedfd315dbf964a4aaad28caabc1e87ace54954761eafac91d276ca0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47841bcac95f19542cbc5069292f878cf6d2b2acfba73d9b93f8b3093dc13385 = $this->env->getExtension("native_profiler");
        $__internal_47841bcac95f19542cbc5069292f878cf6d2b2acfba73d9b93f8b3093dc13385->enter($__internal_47841bcac95f19542cbc5069292f878cf6d2b2acfba73d9b93f8b3093dc13385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Book edit</h1>
<div class=\"form-group\">
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "maxlength" => "250")));
        echo "<br>
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "author", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Author", "maxlength" => "200")));
        echo "<br>
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "language", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Language", "maxlength" => "100")));
        echo "<br>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "publisher", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Publisher", "maxlength" => "100")));
        echo "<br>
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "summary", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Summary")));
        echo "<br>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Summary")));
        echo "<br>
        <input type=\"submit\" value=\"Edit\" />
       &nbsp;<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("book_index");
        echo "\">Back to the list</a>    
      
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "     &nbsp; ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
            ";
            // line 20
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
      ";
        }
        // line 21
        echo "      
    </div>          
";
        
        $__internal_47841bcac95f19542cbc5069292f878cf6d2b2acfba73d9b93f8b3093dc13385->leave($__internal_47841bcac95f19542cbc5069292f878cf6d2b2acfba73d9b93f8b3093dc13385_prof);

    }

    public function getTemplateName()
    {
        return "book/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  90 => 20,  84 => 18,  82 => 17,  78 => 16,  73 => 14,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Book edit</h1>*/
/* <div class="form-group">*/
/*     {{ form_start(edit_form) }}*/
/*     {{form_widget(edit_form.name, {'attr': {'class':'form-control','placeholder': 'Name','maxlength':'250'}} ) }}<br>*/
/*         {{form_widget(edit_form.author, {'attr': {'class':'form-control','placeholder': 'Author','maxlength':'200'}} ) }}<br>*/
/*         {{form_widget(edit_form.language, {'attr': {'class':'form-control','placeholder': 'Language','maxlength':'100'}} ) }}<br>*/
/*         {{form_widget(edit_form.publisher, {'attr': {'class':'form-control','placeholder': 'Publisher','maxlength':'100'}} ) }}<br>*/
/*         {{form_widget(edit_form.summary, {'attr': {'class':'form-control','placeholder': 'Summary'}} ) }}<br>*/
/*         {{form_widget(edit_form.category, {'attr': {'class':'form-control','placeholder': 'Summary'}} ) }}<br>*/
/*         <input type="submit" value="Edit" />*/
/*        &nbsp;<a href="{{ path('book_index') }}">Back to the list</a>    */
/*       */
/*     {{ form_end(edit_form) }}*/
/*     {%if is_granted('ROLE_ADMIN')%}*/
/*      &nbsp; {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*       {% endif%}      */
/*     </div>          */
/* {% endblock %}*/
/* */
