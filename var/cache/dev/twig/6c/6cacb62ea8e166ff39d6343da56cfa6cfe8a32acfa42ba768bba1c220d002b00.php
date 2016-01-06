<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bc60110a81659fd61d7e95f110148a24ce355f4bc9eb6b6bf1c4c2eb9e1c6002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0e29de5fc3310d2a6d649c6edc362194f60a704e300cab943dd3794f21a7627a = $this->env->getExtension("native_profiler");
        $__internal_0e29de5fc3310d2a6d649c6edc362194f60a704e300cab943dd3794f21a7627a->enter($__internal_0e29de5fc3310d2a6d649c6edc362194f60a704e300cab943dd3794f21a7627a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e29de5fc3310d2a6d649c6edc362194f60a704e300cab943dd3794f21a7627a->leave($__internal_0e29de5fc3310d2a6d649c6edc362194f60a704e300cab943dd3794f21a7627a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c35b37f0b6de1cb9ff3fa0ceaff644c64daae38425253f7dffce1140e2b67cb = $this->env->getExtension("native_profiler");
        $__internal_2c35b37f0b6de1cb9ff3fa0ceaff644c64daae38425253f7dffce1140e2b67cb->enter($__internal_2c35b37f0b6de1cb9ff3fa0ceaff644c64daae38425253f7dffce1140e2b67cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c35b37f0b6de1cb9ff3fa0ceaff644c64daae38425253f7dffce1140e2b67cb->leave($__internal_2c35b37f0b6de1cb9ff3fa0ceaff644c64daae38425253f7dffce1140e2b67cb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f0fbad84690e39a4ce3ae17e82745a7b04a683821b674b60926a3c581c208f8 = $this->env->getExtension("native_profiler");
        $__internal_7f0fbad84690e39a4ce3ae17e82745a7b04a683821b674b60926a3c581c208f8->enter($__internal_7f0fbad84690e39a4ce3ae17e82745a7b04a683821b674b60926a3c581c208f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f0fbad84690e39a4ce3ae17e82745a7b04a683821b674b60926a3c581c208f8->leave($__internal_7f0fbad84690e39a4ce3ae17e82745a7b04a683821b674b60926a3c581c208f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f219f3b615e3955ad6c52b03d0ab2ffc740651e4a85d1e1bcaf25b5e6108bf5c = $this->env->getExtension("native_profiler");
        $__internal_f219f3b615e3955ad6c52b03d0ab2ffc740651e4a85d1e1bcaf25b5e6108bf5c->enter($__internal_f219f3b615e3955ad6c52b03d0ab2ffc740651e4a85d1e1bcaf25b5e6108bf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f219f3b615e3955ad6c52b03d0ab2ffc740651e4a85d1e1bcaf25b5e6108bf5c->leave($__internal_f219f3b615e3955ad6c52b03d0ab2ffc740651e4a85d1e1bcaf25b5e6108bf5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
