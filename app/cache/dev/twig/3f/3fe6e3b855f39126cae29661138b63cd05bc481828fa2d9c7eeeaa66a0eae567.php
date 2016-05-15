<?php

/* UserUserBundle:User:updatem.html.twig */
class __TwigTemplate_5db50f61e5ebe9074108d067ddd9b14d761d5862d34e3b7bd3cb654720686048 extends Twig_Template
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
        return "UserUserBundle:User:updatem.html.twig";
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
