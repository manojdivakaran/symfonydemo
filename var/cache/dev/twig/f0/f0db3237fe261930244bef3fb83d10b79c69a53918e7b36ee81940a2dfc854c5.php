<?php

/* book/edit.html.twig */
class __TwigTemplate_4b6da0828a1ca0dc4490fac260e300a7d833469856522ab50df88340da6e617b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "book/edit.html.twig", 1);
        $this->blocks = array(
            'javascripthead' => array($this, 'block_javascripthead'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18e130e2e6ab5308206f77c4394864bf6a44edeedc2a9110aefd07f301b7a17b = $this->env->getExtension("native_profiler");
        $__internal_18e130e2e6ab5308206f77c4394864bf6a44edeedc2a9110aefd07f301b7a17b->enter($__internal_18e130e2e6ab5308206f77c4394864bf6a44edeedc2a9110aefd07f301b7a17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "book/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e130e2e6ab5308206f77c4394864bf6a44edeedc2a9110aefd07f301b7a17b->leave($__internal_18e130e2e6ab5308206f77c4394864bf6a44edeedc2a9110aefd07f301b7a17b_prof);

    }

    // line 2
    public function block_javascripthead($context, array $blocks = array())
    {
        $__internal_13632d71f5c23a04b9e0c5d011ba5c04ad0af19ab9d0dd8043c86b296d72fa77 = $this->env->getExtension("native_profiler");
        $__internal_13632d71f5c23a04b9e0c5d011ba5c04ad0af19ab9d0dd8043c86b296d72fa77->enter($__internal_13632d71f5c23a04b9e0c5d011ba5c04ad0af19ab9d0dd8043c86b296d72fa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripthead"));

        // line 3
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>   
<script type=\"text/javascript\">
    tinymce.init({
    selector: '#book_summary'
  });
  </script>
";
        
        $__internal_13632d71f5c23a04b9e0c5d011ba5c04ad0af19ab9d0dd8043c86b296d72fa77->leave($__internal_13632d71f5c23a04b9e0c5d011ba5c04ad0af19ab9d0dd8043c86b296d72fa77_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ea67c5ba7d4b6363ea6d6230dac84287707f26368ff289d028b9f9dd123f021 = $this->env->getExtension("native_profiler");
        $__internal_2ea67c5ba7d4b6363ea6d6230dac84287707f26368ff289d028b9f9dd123f021->enter($__internal_2ea67c5ba7d4b6363ea6d6230dac84287707f26368ff289d028b9f9dd123f021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h1>Book edit</h1>
<div class=\"form-group\">
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "maxlength" => "250")));
        echo "<br>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "author", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Author", "maxlength" => "200")));
        echo "<br>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "language", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Language", "maxlength" => "100")));
        echo "<br>
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "publisher", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Publisher", "maxlength" => "100")));
        echo "<br>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "summary", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Summary")));
        echo "<br>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Summary")));
        echo "<br>
        <input type=\"submit\" value=\"Edit\" />
       &nbsp;<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("book_index");
        echo "\">Back to the list</a>    
      
    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "     &nbsp; ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
            ";
            // line 27
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
      ";
        }
        // line 28
        echo "      
    </div>          
";
        
        $__internal_2ea67c5ba7d4b6363ea6d6230dac84287707f26368ff289d028b9f9dd123f021->leave($__internal_2ea67c5ba7d4b6363ea6d6230dac84287707f26368ff289d028b9f9dd123f021_prof);

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
        return array (  117 => 28,  112 => 27,  106 => 25,  104 => 24,  100 => 23,  95 => 21,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 11,  56 => 10,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block javascripthead %}*/
/*  <script src="{{ asset('bundles/tinymce/tinymce.min.js') }}"></script>   */
/* <script type="text/javascript">*/
/*     tinymce.init({*/
/*     selector: '#book_summary'*/
/*   });*/
/*   </script>*/
/* {% endblock %}*/
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
