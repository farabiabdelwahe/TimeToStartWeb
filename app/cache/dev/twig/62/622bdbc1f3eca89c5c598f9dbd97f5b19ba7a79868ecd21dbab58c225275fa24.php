<?php

/* UserUserBundle:Profile:edit.html.twig */
class __TwigTemplate_72bc05ca5e5d13cd05b6d32ddcd6b4ebc209152c37ce55a048281ceb99d1aa52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:User:Affichage.html.twig", "UserUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'editpro' => array($this, 'block_editpro'),
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
    public function block_editpro($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserUserBundle:Profile:edit.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "UserUserBundle:Profile:edit.html.twig";
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
/* {% block editpro %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock editpro %}*/
/* */
