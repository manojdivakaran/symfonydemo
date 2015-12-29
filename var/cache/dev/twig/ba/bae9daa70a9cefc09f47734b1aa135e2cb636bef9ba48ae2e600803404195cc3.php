<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a0261de35a05b7a3f369878bed08ada2c74ab897a295309191cc043b84dd7bb extends Twig_Template
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
        $__internal_19a8db71a04e64d4d741feedd3ce0fcde62e6dbbba741576c0f9f0d4021d1260 = $this->env->getExtension("native_profiler");
        $__internal_19a8db71a04e64d4d741feedd3ce0fcde62e6dbbba741576c0f9f0d4021d1260->enter($__internal_19a8db71a04e64d4d741feedd3ce0fcde62e6dbbba741576c0f9f0d4021d1260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19a8db71a04e64d4d741feedd3ce0fcde62e6dbbba741576c0f9f0d4021d1260->leave($__internal_19a8db71a04e64d4d741feedd3ce0fcde62e6dbbba741576c0f9f0d4021d1260_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8f44a955efc760fe18ea1cad942b62f53c1af1a5d7dce1466c4897f4627f681 = $this->env->getExtension("native_profiler");
        $__internal_c8f44a955efc760fe18ea1cad942b62f53c1af1a5d7dce1466c4897f4627f681->enter($__internal_c8f44a955efc760fe18ea1cad942b62f53c1af1a5d7dce1466c4897f4627f681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8f44a955efc760fe18ea1cad942b62f53c1af1a5d7dce1466c4897f4627f681->leave($__internal_c8f44a955efc760fe18ea1cad942b62f53c1af1a5d7dce1466c4897f4627f681_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61294a615799cac4f72e52359330d126060e01aedc69f666a469c1f2547e1fb7 = $this->env->getExtension("native_profiler");
        $__internal_61294a615799cac4f72e52359330d126060e01aedc69f666a469c1f2547e1fb7->enter($__internal_61294a615799cac4f72e52359330d126060e01aedc69f666a469c1f2547e1fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61294a615799cac4f72e52359330d126060e01aedc69f666a469c1f2547e1fb7->leave($__internal_61294a615799cac4f72e52359330d126060e01aedc69f666a469c1f2547e1fb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4696857a3b446d1e1555e04aa71f44d85a035589050e2dfa8fb1672d86c7d1b9 = $this->env->getExtension("native_profiler");
        $__internal_4696857a3b446d1e1555e04aa71f44d85a035589050e2dfa8fb1672d86c7d1b9->enter($__internal_4696857a3b446d1e1555e04aa71f44d85a035589050e2dfa8fb1672d86c7d1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4696857a3b446d1e1555e04aa71f44d85a035589050e2dfa8fb1672d86c7d1b9->leave($__internal_4696857a3b446d1e1555e04aa71f44d85a035589050e2dfa8fb1672d86c7d1b9_prof);

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
