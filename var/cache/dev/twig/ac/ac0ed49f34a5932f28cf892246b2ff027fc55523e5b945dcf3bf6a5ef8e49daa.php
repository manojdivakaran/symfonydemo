<?php

/* security/login.html.twig */
class __TwigTemplate_7ab510b50e5cccad223c6a8ce2c9672002b4df7bcba5e8ee83ca0824923a3e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
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
        $__internal_70e00c0098c19655be1cec11063a0efb97305595baa8b3086ecb11582643798c = $this->env->getExtension("native_profiler");
        $__internal_70e00c0098c19655be1cec11063a0efb97305595baa8b3086ecb11582643798c->enter($__internal_70e00c0098c19655be1cec11063a0efb97305595baa8b3086ecb11582643798c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70e00c0098c19655be1cec11063a0efb97305595baa8b3086ecb11582643798c->leave($__internal_70e00c0098c19655be1cec11063a0efb97305595baa8b3086ecb11582643798c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa2fbbff0c7d048e8a362dc6a739bad3e1c3443efbe93da8119c1f9721d18145 = $this->env->getExtension("native_profiler");
        $__internal_fa2fbbff0c7d048e8a362dc6a739bad3e1c3443efbe93da8119c1f9721d18145->enter($__internal_fa2fbbff0c7d048e8a362dc6a739bad3e1c3443efbe93da8119c1f9721d18145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <div class=\"form-group\">
       <label  for=\"username\">Email Address:</label> 
       <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Email\"/>    
    </div>
    <div class=\"form-group\">
        <label  for=\"password\">Password:</label>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\"/>
      </div>
    <div class=\"checkbox\">
        <label>
          <input type=\"checkbox\"> Remember me
        </label>
    </div>
  <button type=\"submit\" class=\"btn btn-default\">Sign In</button>
       ";
        // line 29
        echo "
    
</form>";
        
        $__internal_fa2fbbff0c7d048e8a362dc6a739bad3e1c3443efbe93da8119c1f9721d18145->leave($__internal_fa2fbbff0c7d048e8a362dc6a739bad3e1c3443efbe93da8119c1f9721d18145_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  57 => 12,  51 => 9,  48 => 8,  42 => 6,  40 => 5,  34 => 4,  11 => 3,);
    }
}
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/*     <div class="form-group">*/
/*        <label  for="username">Email Address:</label> */
/*        <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" placeholder="Email"/>    */
/*     </div>*/
/*     <div class="form-group">*/
/*         <label  for="password">Password:</label>*/
/*         <input type="password" class="form-control" id="password" name="_password" placeholder="Password"/>*/
/*       </div>*/
/*     <div class="checkbox">*/
/*         <label>*/
/*           <input type="checkbox"> Remember me*/
/*         </label>*/
/*     </div>*/
/*   <button type="submit" class="btn btn-default">Sign In</button>*/
/*        {#*/
/*         If you want to control the URL the user*/
/*         is redirected to on success (more details below)*/
/*         <input type="hidden" name="_target_path" value="/account" />*/
/*     #}*/
/* */
/*     */
/* </form>{# empty Twig template #}*/
/* {% endblock %}*/
/* */
