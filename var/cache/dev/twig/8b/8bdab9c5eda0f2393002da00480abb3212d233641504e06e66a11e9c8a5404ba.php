<?php

/* base.html.twig */
class __TwigTemplate_6984b28223c4c2c8bba21827d40f26844d18964aa5eb57c1baea8e4e94668265 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripthead' => array($this, 'block_javascripthead'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17c444425791e168c8d817497b91e053b9a242276bfa27267c483559c4e4f315 = $this->env->getExtension("native_profiler");
        $__internal_17c444425791e168c8d817497b91e053b9a242276bfa27267c483559c4e4f315->enter($__internal_17c444425791e168c8d817497b91e053b9a242276bfa27267c483559c4e4f315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        ";
        $this->displayBlock('javascripthead', $context, $blocks);
        // line 15
        echo "    
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
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
        // line 32
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Sign Out</a>";
        } else {
            // line 33
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_route");
            echo "\">Sign In</a>";
        }
        echo "</li>
            ";
        // line 34
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
        // line 46
        echo $this->env->getExtension('routing')->getPath("book_index");
        echo "\">Home <span class=\"sr-only\">(current)</span></a></li>
            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("book_new");
        echo "\">Create</a></li>
            <li><a href=\"#\">Dummy1</a></li>
            <li><a href=\"#\">Dummy2</a></li>
          </ul>
          
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "        </div>
    </div>
        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
        
        $__internal_17c444425791e168c8d817497b91e053b9a242276bfa27267c483559c4e4f315->leave($__internal_17c444425791e168c8d817497b91e053b9a242276bfa27267c483559c4e4f315_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2d330b830eecd22ca1c965bb15b4471902f4f12e5e0f70db640ab0493dbebd9 = $this->env->getExtension("native_profiler");
        $__internal_f2d330b830eecd22ca1c965bb15b4471902f4f12e5e0f70db640ab0493dbebd9->enter($__internal_f2d330b830eecd22ca1c965bb15b4471902f4f12e5e0f70db640ab0493dbebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2d330b830eecd22ca1c965bb15b4471902f4f12e5e0f70db640ab0493dbebd9->leave($__internal_f2d330b830eecd22ca1c965bb15b4471902f4f12e5e0f70db640ab0493dbebd9_prof);

    }

    // line 6
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_b1cd1adacdf6f56a891eb42b264438b58b7fc6b2917c8d8aa2a8aa554b7b2e11 = $this->env->getExtension("native_profiler");
        $__internal_b1cd1adacdf6f56a891eb42b264438b58b7fc6b2917c8d8aa2a8aa554b7b2e11->enter($__internal_b1cd1adacdf6f56a891eb42b264438b58b7fc6b2917c8d8aa2a8aa554b7b2e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 7
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        
        $__internal_b1cd1adacdf6f56a891eb42b264438b58b7fc6b2917c8d8aa2a8aa554b7b2e11->leave($__internal_b1cd1adacdf6f56a891eb42b264438b58b7fc6b2917c8d8aa2a8aa554b7b2e11_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7279a70fc78bbb42127a3948e635204c14536494a2a528c4fe44e978ae5ae1c6 = $this->env->getExtension("native_profiler");
        $__internal_7279a70fc78bbb42127a3948e635204c14536494a2a528c4fe44e978ae5ae1c6->enter($__internal_7279a70fc78bbb42127a3948e635204c14536494a2a528c4fe44e978ae5ae1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/custombook/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/custombook/dashboard/dashboard.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
        ";
        
        $__internal_7279a70fc78bbb42127a3948e635204c14536494a2a528c4fe44e978ae5ae1c6->leave($__internal_7279a70fc78bbb42127a3948e635204c14536494a2a528c4fe44e978ae5ae1c6_prof);

    }

    // line 13
    public function block_javascripthead($context, array $blocks = array())
    {
        $__internal_a1c20b7ce58be990dedb618fc5e93bdfb82d34c1b039947a0d37648a5ffddaa4 = $this->env->getExtension("native_profiler");
        $__internal_a1c20b7ce58be990dedb618fc5e93bdfb82d34c1b039947a0d37648a5ffddaa4->enter($__internal_a1c20b7ce58be990dedb618fc5e93bdfb82d34c1b039947a0d37648a5ffddaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripthead"));

        // line 14
        echo "            
         ";
        
        $__internal_a1c20b7ce58be990dedb618fc5e93bdfb82d34c1b039947a0d37648a5ffddaa4->leave($__internal_a1c20b7ce58be990dedb618fc5e93bdfb82d34c1b039947a0d37648a5ffddaa4_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a6358521534f725c6f477ed5efd85ab008fb48990516215fc2e2c601c20a646 = $this->env->getExtension("native_profiler");
        $__internal_2a6358521534f725c6f477ed5efd85ab008fb48990516215fc2e2c601c20a646->enter($__internal_2a6358521534f725c6f477ed5efd85ab008fb48990516215fc2e2c601c20a646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a6358521534f725c6f477ed5efd85ab008fb48990516215fc2e2c601c20a646->leave($__internal_2a6358521534f725c6f477ed5efd85ab008fb48990516215fc2e2c601c20a646_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f697548d6da69d9262dd108b98db76820ddd3ebb58e1993465c7a1878955942 = $this->env->getExtension("native_profiler");
        $__internal_9f697548d6da69d9262dd108b98db76820ddd3ebb58e1993465c7a1878955942->enter($__internal_9f697548d6da69d9262dd108b98db76820ddd3ebb58e1993465c7a1878955942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "            <script type=\"text/javascript\" src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js></script>
            <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/custombook/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9f697548d6da69d9262dd108b98db76820ddd3ebb58e1993465c7a1878955942->leave($__internal_9f697548d6da69d9262dd108b98db76820ddd3ebb58e1993465c7a1878955942_prof);

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
        return array (  211 => 59,  208 => 58,  202 => 57,  191 => 54,  183 => 14,  177 => 13,  168 => 11,  163 => 10,  157 => 9,  149 => 7,  143 => 6,  131 => 5,  122 => 61,  120 => 57,  116 => 55,  114 => 54,  104 => 47,  100 => 46,  81 => 34,  74 => 33,  68 => 32,  49 => 16,  46 => 15,  43 => 13,  40 => 9,  38 => 6,  34 => 5,  28 => 1,);
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
/*         {% block javascripthead %}*/
/*             */
/*          {% endblock %}    */
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
