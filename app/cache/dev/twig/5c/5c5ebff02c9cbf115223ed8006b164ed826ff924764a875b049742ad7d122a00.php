<?php

/* UserUserBundle:Registration:register.html.twig */
class __TwigTemplate_1ff39b1a5ad7d2707c9bfe7f23af0f754a9a6047f9a004f6e66d36639cf289ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserUserBundle:User:AddUser.html.twig", "UserUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'register' => array($this, 'block_register'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserUserBundle:User:AddUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_register($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserUserBundle:Registration:register.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "UserUserBundle:Registration:register.html.twig";
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
/* {% extends "UserUserBundle:User:AddUser.html.twig" %}*/
/* */
/* {% block register %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock register %}*/
/* */
