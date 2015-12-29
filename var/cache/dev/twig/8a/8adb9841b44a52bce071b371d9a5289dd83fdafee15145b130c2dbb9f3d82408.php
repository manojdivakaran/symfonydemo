<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_232a31679a11d0d2c9251ba442140137a6b708f070624fdae385fda5bbf8f56b extends Twig_Template
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
        $__internal_eb3fc351888b599a40d5aeedc45fa9d93e2ca8eb54d1ee4dfc11b9be2bedf779 = $this->env->getExtension("native_profiler");
        $__internal_eb3fc351888b599a40d5aeedc45fa9d93e2ca8eb54d1ee4dfc11b9be2bedf779->enter($__internal_eb3fc351888b599a40d5aeedc45fa9d93e2ca8eb54d1ee4dfc11b9be2bedf779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3fc351888b599a40d5aeedc45fa9d93e2ca8eb54d1ee4dfc11b9be2bedf779->leave($__internal_eb3fc351888b599a40d5aeedc45fa9d93e2ca8eb54d1ee4dfc11b9be2bedf779_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c81b8b4eb0f7bf82f08938d20fac594c9993575ade102e383e0781c62228740 = $this->env->getExtension("native_profiler");
        $__internal_3c81b8b4eb0f7bf82f08938d20fac594c9993575ade102e383e0781c62228740->enter($__internal_3c81b8b4eb0f7bf82f08938d20fac594c9993575ade102e383e0781c62228740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c81b8b4eb0f7bf82f08938d20fac594c9993575ade102e383e0781c62228740->leave($__internal_3c81b8b4eb0f7bf82f08938d20fac594c9993575ade102e383e0781c62228740_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cac684a0f55c8f3f8a86bec3b82ceda837212b35697c7db60c0b7ef592d1d4fd = $this->env->getExtension("native_profiler");
        $__internal_cac684a0f55c8f3f8a86bec3b82ceda837212b35697c7db60c0b7ef592d1d4fd->enter($__internal_cac684a0f55c8f3f8a86bec3b82ceda837212b35697c7db60c0b7ef592d1d4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cac684a0f55c8f3f8a86bec3b82ceda837212b35697c7db60c0b7ef592d1d4fd->leave($__internal_cac684a0f55c8f3f8a86bec3b82ceda837212b35697c7db60c0b7ef592d1d4fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0075e29ecde20834268998738ebcdb059870bdb7a08d93a4d4f3f63e289f5934 = $this->env->getExtension("native_profiler");
        $__internal_0075e29ecde20834268998738ebcdb059870bdb7a08d93a4d4f3f63e289f5934->enter($__internal_0075e29ecde20834268998738ebcdb059870bdb7a08d93a4d4f3f63e289f5934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0075e29ecde20834268998738ebcdb059870bdb7a08d93a4d4f3f63e289f5934->leave($__internal_0075e29ecde20834268998738ebcdb059870bdb7a08d93a4d4f3f63e289f5934_prof);

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
