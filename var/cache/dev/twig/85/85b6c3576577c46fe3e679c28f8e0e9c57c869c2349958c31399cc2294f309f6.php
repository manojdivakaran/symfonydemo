<?php

/* base.html.twig */
class __TwigTemplate_5cbc80d65dc473716037358e7c56f668f9a6fad5c8179dca18a02b1ff5eb313c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae66ecfb28565bd8c83dc29104a0b641f94fc80d367673e625d108c2410337f6 = $this->env->getExtension("native_profiler");
        $__internal_ae66ecfb28565bd8c83dc29104a0b641f94fc80d367673e625d108c2410337f6->enter($__internal_ae66ecfb28565bd8c83dc29104a0b641f94fc80d367673e625d108c2410337f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
       ";
        // line 6
        $this->displayBlock('metatags', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
         <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Symfony Demo</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li>";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Sign Out</a>";
        } else {
            // line 30
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_route");
            echo "\">Sign In</a>";
        }
        echo "</li>
            ";
        // line 31
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_register");
            echo "\">Register</a></li>";
        }
        echo " 
            <li><a href=\"#\">Help</a></li>
          </ul>
          <form class=\"navbar-form navbar-right\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
          </form>
        </div>
      </div>
    </nav>
        <div class=\"container-fluid\">
            <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("book_index");
        echo "\">Home <span class=\"sr-only\">(current)</span></a></li>
            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("book_new");
        echo "\">Create</a></li>
            <li><a href=\"#\">Dummy1</a></li>
            <li><a href=\"#\">Dummy2</a></li>
          </ul>
          
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        </div>
    </div>
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>
";
        
        $__internal_ae66ecfb28565bd8c83dc29104a0b641f94fc80d367673e625d108c2410337f6->leave($__internal_ae66ecfb28565bd8c83dc29104a0b641f94fc80d367673e625d108c2410337f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_20eb85e3dd3d063021c70d4724c8ae265fd65edfc9277e41a12159c5e8ea7fe1 = $this->env->getExtension("native_profiler");
        $__internal_20eb85e3dd3d063021c70d4724c8ae265fd65edfc9277e41a12159c5e8ea7fe1->enter($__internal_20eb85e3dd3d063021c70d4724c8ae265fd65edfc9277e41a12159c5e8ea7fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_20eb85e3dd3d063021c70d4724c8ae265fd65edfc9277e41a12159c5e8ea7fe1->leave($__internal_20eb85e3dd3d063021c70d4724c8ae265fd65edfc9277e41a12159c5e8ea7fe1_prof);

    }

    // line 6
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_4c132b4837417e6ec1057dc1c121f2e15e0696812a228632ede38c33fecd7b18 = $this->env->getExtension("native_profiler");
        $__internal_4c132b4837417e6ec1057dc1c121f2e15e0696812a228632ede38c33fecd7b18->enter($__internal_4c132b4837417e6ec1057dc1c121f2e15e0696812a228632ede38c33fecd7b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 7
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        
        $__internal_4c132b4837417e6ec1057dc1c121f2e15e0696812a228632ede38c33fecd7b18->leave($__internal_4c132b4837417e6ec1057dc1c121f2e15e0696812a228632ede38c33fecd7b18_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93fe48a31b688b96135b094076c3d18a469137359a2335c089fb27f9c06cf86e = $this->env->getExtension("native_profiler");
        $__internal_93fe48a31b688b96135b094076c3d18a469137359a2335c089fb27f9c06cf86e->enter($__internal_93fe48a31b688b96135b094076c3d18a469137359a2335c089fb27f9c06cf86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/custombook/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/custombook/dashboard/dashboard.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
        ";
        
        $__internal_93fe48a31b688b96135b094076c3d18a469137359a2335c089fb27f9c06cf86e->leave($__internal_93fe48a31b688b96135b094076c3d18a469137359a2335c089fb27f9c06cf86e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_918fb94e7269747cc8e0b04acfa203cbc4e64adfff0be6dc2f7267e8342f19de = $this->env->getExtension("native_profiler");
        $__internal_918fb94e7269747cc8e0b04acfa203cbc4e64adfff0be6dc2f7267e8342f19de->enter($__internal_918fb94e7269747cc8e0b04acfa203cbc4e64adfff0be6dc2f7267e8342f19de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_918fb94e7269747cc8e0b04acfa203cbc4e64adfff0be6dc2f7267e8342f19de->leave($__internal_918fb94e7269747cc8e0b04acfa203cbc4e64adfff0be6dc2f7267e8342f19de_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b976325a5e0426a218f9bfc71f725bcc820ab2891b042e7189d465abaf25d383 = $this->env->getExtension("native_profiler");
        $__internal_b976325a5e0426a218f9bfc71f725bcc820ab2891b042e7189d465abaf25d383->enter($__internal_b976325a5e0426a218f9bfc71f725bcc820ab2891b042e7189d465abaf25d383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "            <script type=\"text/javascript\" src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js></script>
            <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/custombook/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b976325a5e0426a218f9bfc71f725bcc820ab2891b042e7189d465abaf25d383->leave($__internal_b976325a5e0426a218f9bfc71f725bcc820ab2891b042e7189d465abaf25d383_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 56,  188 => 55,  182 => 54,  171 => 51,  162 => 11,  157 => 10,  151 => 9,  143 => 7,  137 => 6,  125 => 5,  116 => 58,  114 => 54,  110 => 52,  108 => 51,  98 => 44,  94 => 43,  75 => 31,  68 => 30,  62 => 29,  42 => 13,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*        {% block metatags %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% endblock %}*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/custombook/bootstrap/css/bootstrap.min.css') }}" type='text/css' media='all' />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/custombook/dashboard/dashboard.css') }}" type='text/css' media='all' />*/
/*         {% endblock %}*/
/*             <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*          <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*       <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="#">Symfony Demo</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*           <ul class="nav navbar-nav navbar-right">*/
/*             <li>{% if is_granted('IS_AUTHENTICATED_REMEMBERED')%}<a href="{{path("logout")}}">Sign Out</a>{% else %}*/
/*             <a href="{{path("login_route")}}">Sign In</a>{% endif %}</li>*/
/*             {% if not is_granted('IS_AUTHENTICATED_REMEMBERED')%}<li><a href="{{path("user_register")}}">Register</a></li>{%endif%} */
/*             <li><a href="#">Help</a></li>*/
/*           </ul>*/
/*           <form class="navbar-form navbar-right">*/
/*             <input type="text" class="form-control" placeholder="Search...">*/
/*           </form>*/
/*         </div>*/
/*       </div>*/
/*     </nav>*/
/*         <div class="container-fluid">*/
/*             <div class="col-sm-3 col-md-2 sidebar">*/
/*           <ul class="nav nav-sidebar">*/
/*             <li class="active"><a href="{{ path('book_index') }}">Home <span class="sr-only">(current)</span></a></li>*/
/*             <li><a href="{{ path('book_new')}}">Create</a></li>*/
/*             <li><a href="#">Dummy1</a></li>*/
/*             <li><a href="#">Dummy2</a></li>*/
/*           </ul>*/
/*           */
/*         </div>*/
/*         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*         {% block body %}{% endblock %}*/
/*         </div>*/
/*     </div>*/
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js></script>*/
/*             <script type="text/javascript" src="{{ asset('bundles/custombook/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
