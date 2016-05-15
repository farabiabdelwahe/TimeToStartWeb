<?php

/* UserUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_ebf9733464b6dc5c3a25a8b18da60164010b2c1c1e4374c6dcdb9ad129d5f12f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:User:Affichage.html.twig", "UserUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'chpass' => array($this, 'block_chpass'),
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
    public function block_chpass($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "UserUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% block chpass %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock chpass %}*/
/* */
