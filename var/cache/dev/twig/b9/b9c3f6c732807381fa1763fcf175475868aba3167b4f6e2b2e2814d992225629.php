<?php

/* book/index.html.twig */
class __TwigTemplate_deff9ac0854facae799e5aac52029b304137204ceaf6c62639848d79b3bc2bab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "book/index.html.twig", 1);
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
        $__internal_509e263a4f61c6e14ac8cb9cfc77f87494dbd66a615947a4ef6b1323d64cfff7 = $this->env->getExtension("native_profiler");
        $__internal_509e263a4f61c6e14ac8cb9cfc77f87494dbd66a615947a4ef6b1323d64cfff7->enter($__internal_509e263a4f61c6e14ac8cb9cfc77f87494dbd66a615947a4ef6b1323d64cfff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509e263a4f61c6e14ac8cb9cfc77f87494dbd66a615947a4ef6b1323d64cfff7->leave($__internal_509e263a4f61c6e14ac8cb9cfc77f87494dbd66a615947a4ef6b1323d64cfff7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3658b0c19d6c431a80859c7b0f19f74777ac051ab2a2cd0c99c0b07ff1366ad0 = $this->env->getExtension("native_profiler");
        $__internal_3658b0c19d6c431a80859c7b0f19f74777ac051ab2a2cd0c99c0b07ff1366ad0->enter($__internal_3658b0c19d6c431a80859c7b0f19f74777ac051ab2a2cd0c99c0b07ff1366ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Book list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Author</th>
                <th>Language</th>
                <th>Publisher</th>
                <th>Summary</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_show", array("id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "language", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "publisher", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo $this->getAttribute($context["book"], "summary", array());
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "category", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_show", array("id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        ";
            // line 34
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 35
                echo "                        <li>
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_edit", array("id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_delete_by_id", array("id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
                echo "\">delete</a>
                        </li>
                        ";
            }
            // line 42
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
   
";
        
        $__internal_3658b0c19d6c431a80859c7b0f19f74777ac051ab2a2cd0c99c0b07ff1366ad0->leave($__internal_3658b0c19d6c431a80859c7b0f19f74777ac051ab2a2cd0c99c0b07ff1366ad0_prof);

    }

    public function getTemplateName()
    {
        return "book/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  120 => 42,  114 => 39,  108 => 36,  105 => 35,  103 => 34,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Book list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Author</th>*/
/*                 <th>Language</th>*/
/*                 <th>Publisher</th>*/
/*                 <th>Summary</th>*/
/*                 <th>Category</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for book in books %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('book_show', { 'id': book.id }) }}">{{ book.id }}</a></td>*/
/*                 <td>{{ book.name }}</td>*/
/*                 <td>{{ book.author }}</td>*/
/*                 <td>{{ book.language }}</td>*/
/*                 <td>{{ book.publisher }}</td>*/
/*                 <td>{{ book.summary | raw}}</td>*/
/*                 <td>{{ book.category }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('book_show', { 'id': book.id }) }}">show</a>*/
/*                         </li>*/
/*                         {%if is_granted('ROLE_ADMIN')%}*/
/*                         <li>*/
/*                             <a href="{{ path('book_edit', { 'id': book.id }) }}">edit</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('book_delete_by_id', { 'id': book.id }) }}">delete</a>*/
/*                         </li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*    */
/* {% endblock %}*/
/* */
