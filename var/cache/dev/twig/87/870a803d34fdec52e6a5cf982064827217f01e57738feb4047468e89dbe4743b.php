<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_41da3a8b8ee71d5e4daa7d25ff15e0a6f4dd20c4b5d4f115ad681e3aef35cec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1553f88b561115b9477e8743f28a6fd6792d35f28d04ce6c6ec0c483c1d215b = $this->env->getExtension("native_profiler");
        $__internal_c1553f88b561115b9477e8743f28a6fd6792d35f28d04ce6c6ec0c483c1d215b->enter($__internal_c1553f88b561115b9477e8743f28a6fd6792d35f28d04ce6c6ec0c483c1d215b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1553f88b561115b9477e8743f28a6fd6792d35f28d04ce6c6ec0c483c1d215b->leave($__internal_c1553f88b561115b9477e8743f28a6fd6792d35f28d04ce6c6ec0c483c1d215b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5d1589bc6c55e4c67d974dfd44fad21849bcb860d8d5da0fd579263fac56786 = $this->env->getExtension("native_profiler");
        $__internal_f5d1589bc6c55e4c67d974dfd44fad21849bcb860d8d5da0fd579263fac56786->enter($__internal_f5d1589bc6c55e4c67d974dfd44fad21849bcb860d8d5da0fd579263fac56786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f5d1589bc6c55e4c67d974dfd44fad21849bcb860d8d5da0fd579263fac56786->leave($__internal_f5d1589bc6c55e4c67d974dfd44fad21849bcb860d8d5da0fd579263fac56786_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd1a108c68e9d89a341b944642ef485aa19d6ee66da6db1425f1317783b50258 = $this->env->getExtension("native_profiler");
        $__internal_dd1a108c68e9d89a341b944642ef485aa19d6ee66da6db1425f1317783b50258->enter($__internal_dd1a108c68e9d89a341b944642ef485aa19d6ee66da6db1425f1317783b50258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dd1a108c68e9d89a341b944642ef485aa19d6ee66da6db1425f1317783b50258->leave($__internal_dd1a108c68e9d89a341b944642ef485aa19d6ee66da6db1425f1317783b50258_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c3528a342531dabd107495938003853fd5eff100e6ce2f299a60fa9f9851b94 = $this->env->getExtension("native_profiler");
        $__internal_2c3528a342531dabd107495938003853fd5eff100e6ce2f299a60fa9f9851b94->enter($__internal_2c3528a342531dabd107495938003853fd5eff100e6ce2f299a60fa9f9851b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2c3528a342531dabd107495938003853fd5eff100e6ce2f299a60fa9f9851b94->leave($__internal_2c3528a342531dabd107495938003853fd5eff100e6ce2f299a60fa9f9851b94_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
