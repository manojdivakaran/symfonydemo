<?php

/* book/index.html.twig */
class __TwigTemplate_d1f10b013fc9f1d0bde44fd1d4ca0acb82d1b9abecc6cdc87d615825080861fa extends Twig_Template
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
        $__internal_777ac97a5ea2eb8ec0e3cbf2bf76b4284e73a3dbeed61c588fb4bb35a2a0cae2 = $this->env->getExtension("native_profiler");
        $__internal_777ac97a5ea2eb8ec0e3cbf2bf76b4284e73a3dbeed61c588fb4bb35a2a0cae2->enter($__internal_777ac97a5ea2eb8ec0e3cbf2bf76b4284e73a3dbeed61c588fb4bb35a2a0cae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777ac97a5ea2eb8ec0e3cbf2bf76b4284e73a3dbeed61c588fb4bb35a2a0cae2->leave($__internal_777ac97a5ea2eb8ec0e3cbf2bf76b4284e73a3dbeed61c588fb4bb35a2a0cae2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b0313a43ea349fe73e44c7e131e68cbd0022b0d6e912c2172dd338a88a6650e = $this->env->getExtension("native_profiler");
        $__internal_3b0313a43ea349fe73e44c7e131e68cbd0022b0d6e912c2172dd338a88a6650e->enter($__internal_3b0313a43ea349fe73e44c7e131e68cbd0022b0d6e912c2172dd338a88a6650e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "summary", array()), "html", null, true);
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
        
        $__internal_3b0313a43ea349fe73e44c7e131e68cbd0022b0d6e912c2172dd338a88a6650e->leave($__internal_3b0313a43ea349fe73e44c7e131e68cbd0022b0d6e912c2172dd338a88a6650e_prof);

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
/*                 <td>{{ book.summary }}</td>*/
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
