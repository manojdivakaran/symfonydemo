<?php

/* EventBundle:Default:index.html.twig */
class __TwigTemplate_3e92632709d6f85734064c2fa748f6f2fda11ae4b6b19e8734fd3bb8ba0755a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d6baf8085ba607f409ab2c1cf83d9b35befac3c5db27317b63244fabb06ab63 = $this->env->getExtension("native_profiler");
        $__internal_5d6baf8085ba607f409ab2c1cf83d9b35befac3c5db27317b63244fabb06ab63->enter($__internal_5d6baf8085ba607f409ab2c1cf83d9b35befac3c5db27317b63244fabb06ab63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Default:index.html.twig"));

        // line 1
        if ( !(null === (isset($context["param1"]) ? $context["param1"] : $this->getContext($context, "param1")))) {
            echo " 
Test ";
            // line 2
            echo twig_escape_filter($this->env, (isset($context["param1"]) ? $context["param1"] : $this->getContext($context, "param1")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "Test No Parameters
";
        }
        
        $__internal_5d6baf8085ba607f409ab2c1cf83d9b35befac3c5db27317b63244fabb06ab63->leave($__internal_5d6baf8085ba607f409ab2c1cf83d9b35befac3c5db27317b63244fabb06ab63_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 2,  22 => 1,);
    }
}
/* {% if param1 is not null %} */
/* Test {{param1}}*/
/* {% else %}*/
/* Test No Parameters*/
/* {% endif %}*/
/* */
