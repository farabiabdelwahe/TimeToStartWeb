<?php

/* UserUserBundle:Profile:show.html.twig */
class __TwigTemplate_0eb7cf6a581a8dbb4067dfd0a25ac11f362b1a4a84d1f182668fe02d91651cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:User:Affichage.html.twig", "UserUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:User:Affichage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_show($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserUserBundle:Profile:show.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "UserUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle:User:Affichage.html.twig" %}*/
/* */
/* {% block show %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock show %}*/
/* */
