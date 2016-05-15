<?php

/* UserUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_4b2d535ddc8d1334c503b43813ac12fb02666b8a0715cb9fd6b571353f216c8f extends Twig_Template
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
        // line 2
        echo "

    <div>
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
        return "UserUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  36 => 12,  30 => 11,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/*     <div>*/
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
/* */
