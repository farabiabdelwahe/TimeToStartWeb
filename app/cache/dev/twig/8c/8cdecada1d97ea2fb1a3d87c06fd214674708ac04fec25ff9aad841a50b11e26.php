<?php

/* UserUserBundle:reporting:updatem.html.twig */
class __TwigTemplate_2e5b0311d7e50cc743ff1177c0f418943463328cec8751000b881489787ee140 extends Twig_Template
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
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:reporting:updatem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ form(f) }}*/
/* */
