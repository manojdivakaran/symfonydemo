<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7188eb9db58fe043c5e6943ed0a1bd447832c5d3bc58325ca99d787bbecf1b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53ad5d0588219541f0fc827268eae3a736d7f68638aeac3fe54deb219a1648ed = $this->env->getExtension("native_profiler");
        $__internal_53ad5d0588219541f0fc827268eae3a736d7f68638aeac3fe54deb219a1648ed->enter($__internal_53ad5d0588219541f0fc827268eae3a736d7f68638aeac3fe54deb219a1648ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ad5d0588219541f0fc827268eae3a736d7f68638aeac3fe54deb219a1648ed->leave($__internal_53ad5d0588219541f0fc827268eae3a736d7f68638aeac3fe54deb219a1648ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07a60a943d46159beb1768af1a8f15958e390186eaa3dd295d7b4729c361847f = $this->env->getExtension("native_profiler");
        $__internal_07a60a943d46159beb1768af1a8f15958e390186eaa3dd295d7b4729c361847f->enter($__internal_07a60a943d46159beb1768af1a8f15958e390186eaa3dd295d7b4729c361847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07a60a943d46159beb1768af1a8f15958e390186eaa3dd295d7b4729c361847f->leave($__internal_07a60a943d46159beb1768af1a8f15958e390186eaa3dd295d7b4729c361847f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6813868b6bf4cc7c03407a282d7ee0872380b60c620b9030c98c06f9c06ca608 = $this->env->getExtension("native_profiler");
        $__internal_6813868b6bf4cc7c03407a282d7ee0872380b60c620b9030c98c06f9c06ca608->enter($__internal_6813868b6bf4cc7c03407a282d7ee0872380b60c620b9030c98c06f9c06ca608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6813868b6bf4cc7c03407a282d7ee0872380b60c620b9030c98c06f9c06ca608->leave($__internal_6813868b6bf4cc7c03407a282d7ee0872380b60c620b9030c98c06f9c06ca608_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_edcc1c8f5a5c1c63ece9c0351a3a709ef83a83018eb80c04d5277856d5af2b5c = $this->env->getExtension("native_profiler");
        $__internal_edcc1c8f5a5c1c63ece9c0351a3a709ef83a83018eb80c04d5277856d5af2b5c->enter($__internal_edcc1c8f5a5c1c63ece9c0351a3a709ef83a83018eb80c04d5277856d5af2b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_edcc1c8f5a5c1c63ece9c0351a3a709ef83a83018eb80c04d5277856d5af2b5c->leave($__internal_edcc1c8f5a5c1c63ece9c0351a3a709ef83a83018eb80c04d5277856d5af2b5c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
