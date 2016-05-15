<?php

/* UserUserBundle:reporting:show_content.html.twig */
class __TwigTemplate_ab37930fcf638a37feac3b38545de19792fa66045e39375fcc4b045ce7b04ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('show', $context, $blocks);
    }

    public function block_show($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"span9\">
        <div style=\"font-size: x-large\">  <u> <h1>Account Information : </h1></u></div>
        
        <div style=\"alignment-adjust: left\" id=\"collapseOne\" class=\"accordion-body collapse in\">
          
            <div class=\"accordion-inner\">
                <div class=\"well\">
                    <p style=\"color: black;font-size: xx-large\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                    <p style=\"color: black;font-size: xx-large\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                    <br><a   style=\"color: #313131\" class=\"btn\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">CAHNGE PASSWORD</a>
                </div>
            </div>
        </div>
      
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:reporting:show_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  44 => 12,  38 => 11,  29 => 4,  23 => 3,  20 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block show %}*/
/*     <div class="span9">*/
/*         <div style="font-size: x-large">  <u> <h1>Account Information : </h1></u></div>*/
/*         */
/*         <div style="alignment-adjust: left" id="collapseOne" class="accordion-body collapse in">*/
/*           */
/*             <div class="accordion-inner">*/
/*                 <div class="well">*/
/*                     <p style="color: black;font-size: xx-large">{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*                     <p style="color: black;font-size: xx-large">{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/*                     <br><a   style="color: #313131" class="btn" href="{{ path('fos_user_change_password') }}">CAHNGE PASSWORD</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*       */
/*     </div>*/
/* {% endblock show %}*/
