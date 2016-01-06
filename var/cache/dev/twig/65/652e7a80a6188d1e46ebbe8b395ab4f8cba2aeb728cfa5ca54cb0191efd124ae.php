<?php

/* book/new.html.twig */
class __TwigTemplate_5a0e44b610210e4919e8bf882a221a6b7e656f03f23a14d50243117ba0e349ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "book/new.html.twig", 1);
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
        $__internal_fe71ba01ad1d4684328aa2caf56f4061ba09df33f39243b78e4f4ff9cd16d1ae = $this->env->getExtension("native_profiler");
        $__internal_fe71ba01ad1d4684328aa2caf56f4061ba09df33f39243b78e4f4ff9cd16d1ae->enter($__internal_fe71ba01ad1d4684328aa2caf56f4061ba09df33f39243b78e4f4ff9cd16d1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "book/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe71ba01ad1d4684328aa2caf56f4061ba09df33f39243b78e4f4ff9cd16d1ae->leave($__internal_fe71ba01ad1d4684328aa2caf56f4061ba09df33f39243b78e4f4ff9cd16d1ae_prof);

    }

    // line 2
    public function block_javascripthead($context, array $blocks = array())
    {
        $__internal_1cecc43e0e5fca43f10929b1ab9decfb83ed97f5f4f9944f9f998392591b7498 = $this->env->getExtension("native_profiler");
        $__internal_1cecc43e0e5fca43f10929b1ab9decfb83ed97f5f4f9944f9f998392591b7498->enter($__internal_1cecc43e0e5fca43f10929b1ab9decfb83ed97f5f4f9944f9f998392591b7498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripthead"));

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
        
        $__internal_1cecc43e0e5fca43f10929b1ab9decfb83ed97f5f4f9944f9f998392591b7498->leave($__internal_1cecc43e0e5fca43f10929b1ab9decfb83ed97f5f4f9944f9f998392591b7498_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_067bd17843d5f046d06f89a5f40a1efed1cad57686878acc8bf00d3ecf5c4684 = $this->env->getExtension("native_profiler");
        $__internal_067bd17843d5f046d06f89a5f40a1efed1cad57686878acc8bf00d3ecf5c4684->enter($__internal_067bd17843d5f046d06f89a5f40a1efed1cad57686878acc8bf00d3ecf5c4684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h1>Create a Book</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "maxlength" => "250")));
        echo "<br>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Author", "maxlength" => "200")));
        echo "<br>
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Language", "maxlength" => "100")));
        echo "<br>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publisher", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Publisher", "maxlength" => "100")));
        echo "<br>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Summary")));
        echo "<br>
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Category")));
        echo "<br>
      
        <input type=\"submit\" value=\"Create\" />
    &nbsp;<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("book_index");
        echo "\">Back to the list</a>
    </div>
    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

   
    
";
        
        $__internal_067bd17843d5f046d06f89a5f40a1efed1cad57686878acc8bf00d3ecf5c4684->leave($__internal_067bd17843d5f046d06f89a5f40a1efed1cad57686878acc8bf00d3ecf5c4684_prof);

    }

    public function getTemplateName()
    {
        return "book/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  97 => 23,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  66 => 13,  62 => 11,  56 => 10,  41 => 3,  35 => 2,  11 => 1,);
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
/*     <h1>Create a Book</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     <div class="form-group">*/
/*         {{form_widget(form.name, {'attr': {'class':'form-control','placeholder': 'Name','maxlength':'250'}} ) }}<br>*/
/*         {{form_widget(form.author, {'attr': {'class':'form-control','placeholder': 'Author','maxlength':'200'}} ) }}<br>*/
/*         {{form_widget(form.language, {'attr': {'class':'form-control','placeholder': 'Language','maxlength':'100'}} ) }}<br>*/
/*         {{form_widget(form.publisher, {'attr': {'class':'form-control','placeholder': 'Publisher','maxlength':'100'}} ) }}<br>*/
/*         {{form_widget(form.summary, {'attr': {'class':'form-control','placeholder': 'Summary'}} ) }}<br>*/
/*         {{form_widget(form.category, {'attr': {'class':'form-control','placeholder': 'Category'}} ) }}<br>*/
/*       */
/*         <input type="submit" value="Create" />*/
/*     &nbsp;<a href="{{ path('book_index') }}">Back to the list</a>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* */
/*    */
/*     */
/* {% endblock %}*/
/* */
