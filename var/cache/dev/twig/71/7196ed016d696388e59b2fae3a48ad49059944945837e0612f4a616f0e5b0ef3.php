<?php

/* book/show.html.twig */
class __TwigTemplate_82c9ca7bf502b42cab4cff66dec8357d53f0072c00ef74eaf565a4f3d731c0ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "book/show.html.twig", 1);
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
        $__internal_2de0f2dc8cafaeec9d66d7abad188c1b4c6efd5ed90c6da39a9f0bec5d7c1144 = $this->env->getExtension("native_profiler");
        $__internal_2de0f2dc8cafaeec9d66d7abad188c1b4c6efd5ed90c6da39a9f0bec5d7c1144->enter($__internal_2de0f2dc8cafaeec9d66d7abad188c1b4c6efd5ed90c6da39a9f0bec5d7c1144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "book/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de0f2dc8cafaeec9d66d7abad188c1b4c6efd5ed90c6da39a9f0bec5d7c1144->leave($__internal_2de0f2dc8cafaeec9d66d7abad188c1b4c6efd5ed90c6da39a9f0bec5d7c1144_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dc635c3213756aa2051b30c2c6ade54b87b6ec14f19c6081d73e53f9ce2d413 = $this->env->getExtension("native_profiler");
        $__internal_7dc635c3213756aa2051b30c2c6ade54b87b6ec14f19c6081d73e53f9ce2d413->enter($__internal_7dc635c3213756aa2051b30c2c6ade54b87b6ec14f19c6081d73e53f9ce2d413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Book</h1>
    <div class=\"table-responsive\"> 
        <table class=\"table table-bordered table-striped\"> 
           <tbody> 
                <tr> <th scope=\"row\" class=\"text-nowrap\">ID</th> 
                    <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()), "html", null, true);
        echo "</td> 
                </tr> 
                <tr> <th scope=\"row\" class=\"text-nowrap\">Name</th> 
                    <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "name", array()), "html", null, true);
        echo "</td> 
                </tr> 
                <tr> <th scope=\"row\" class=\"text-nowrap\">Author</th> 
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "html", null, true);
        echo "</td> 
                </tr> 
                <tr> <th scope=\"row\" class=\"text-nowrap\">Language</th> 
                    <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "language", array()), "html", null, true);
        echo "</td> 
                </tr> 
                <tr> <th scope=\"row\" class=\"text-nowrap\">Publisher</th> 
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "publisher", array()), "html", null, true);
        echo "</td> 
                </tr> 
                <tr> <th scope=\"row\" class=\"text-nowrap\">Summary</th> 
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "summary", array()), "html", null, true);
        echo "</td> 
                </tr> 
            </tbody> 
        </table> 
    </div>
     
    <div>
            ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "            &nbsp;<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_edit", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
            <br/>
            ";
            // line 34
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
             ";
            // line 36
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo " <br/>
             ";
        }
        // line 37
        echo " 
             <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("book_index");
        echo "\">Back to the list</a>
     </div>   
        
     ";
        
        $__internal_7dc635c3213756aa2051b30c2c6ade54b87b6ec14f19c6081d73e53f9ce2d413->leave($__internal_7dc635c3213756aa2051b30c2c6ade54b87b6ec14f19c6081d73e53f9ce2d413_prof);

    }

    public function getTemplateName()
    {
        return "book/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  105 => 37,  100 => 36,  95 => 34,  89 => 32,  87 => 31,  77 => 24,  71 => 21,  65 => 18,  59 => 15,  53 => 12,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Book</h1>*/
/*     <div class="table-responsive"> */
/*         <table class="table table-bordered table-striped"> */
/*            <tbody> */
/*                 <tr> <th scope="row" class="text-nowrap">ID</th> */
/*                     <td>{{ book.id }}</td> */
/*                 </tr> */
/*                 <tr> <th scope="row" class="text-nowrap">Name</th> */
/*                     <td>{{ book.name }}</td> */
/*                 </tr> */
/*                 <tr> <th scope="row" class="text-nowrap">Author</th> */
/*                     <td>{{ book.author }}</td> */
/*                 </tr> */
/*                 <tr> <th scope="row" class="text-nowrap">Language</th> */
/*                     <td>{{ book.language }}</td> */
/*                 </tr> */
/*                 <tr> <th scope="row" class="text-nowrap">Publisher</th> */
/*                     <td>{{ book.publisher }}</td> */
/*                 </tr> */
/*                 <tr> <th scope="row" class="text-nowrap">Summary</th> */
/*                     <td>{{ book.summary }}</td> */
/*                 </tr> */
/*             </tbody> */
/*         </table> */
/*     </div>*/
/*      */
/*     <div>*/
/*             {%if is_granted('ROLE_ADMIN')%}*/
/*             &nbsp;<a href="{{ path('book_edit', { 'id': book.id }) }}">Edit</a>*/
/*             <br/>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*              {{ form_end(delete_form) }} <br/>*/
/*              {% endif %} */
/*              <a href="{{ path('book_index') }}">Back to the list</a>*/
/*      </div>   */
/*         */
/*      {% endblock %}*/
/* */
