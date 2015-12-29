<?php

/* book/new.html.twig */
class __TwigTemplate_aecd1e4718c1fb35c2e359e98e8a2bcb5b5e9f4edd0ded942e23476828a5a9fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "book/new.html.twig", 1);
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
        $__internal_b330b815ebc28e41166a7f4a1a44d84558e258236de237165cce5a3f5f72c1b2 = $this->env->getExtension("native_profiler");
        $__internal_b330b815ebc28e41166a7f4a1a44d84558e258236de237165cce5a3f5f72c1b2->enter($__internal_b330b815ebc28e41166a7f4a1a44d84558e258236de237165cce5a3f5f72c1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "book/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b330b815ebc28e41166a7f4a1a44d84558e258236de237165cce5a3f5f72c1b2->leave($__internal_b330b815ebc28e41166a7f4a1a44d84558e258236de237165cce5a3f5f72c1b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5edf5141aaa4b0ebaa0fe648a19194483d9bdddda15a506f08a9ff2a176b9be4 = $this->env->getExtension("native_profiler");
        $__internal_5edf5141aaa4b0ebaa0fe648a19194483d9bdddda15a506f08a9ff2a176b9be4->enter($__internal_5edf5141aaa4b0ebaa0fe648a19194483d9bdddda15a506f08a9ff2a176b9be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Create a Book</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "maxlength" => "250")));
        echo "<br>
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Author", "maxlength" => "200")));
        echo "<br>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Language", "maxlength" => "100")));
        echo "<br>
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publisher", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Publisher", "maxlength" => "100")));
        echo "<br>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Summary")));
        echo "<br>
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Category")));
        echo "<br>
      
        <input type=\"submit\" value=\"Create\" />
    &nbsp;<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("book_index");
        echo "\">Back to the list</a>
    </div>
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

   
    
";
        
        $__internal_5edf5141aaa4b0ebaa0fe648a19194483d9bdddda15a506f08a9ff2a176b9be4->leave($__internal_5edf5141aaa4b0ebaa0fe648a19194483d9bdddda15a506f08a9ff2a176b9be4_prof);

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
        return array (  80 => 18,  75 => 16,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
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
