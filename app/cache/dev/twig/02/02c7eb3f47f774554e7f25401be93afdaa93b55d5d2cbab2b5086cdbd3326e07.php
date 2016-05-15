<?php

/* UserUserBundle:Security:login.html.twig */
class __TwigTemplate_8cd1b1316f5b51b00feeab00259ade8d3b91da6c698cc19a92f22784e1bb5595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:User:try.html.twig", "UserUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:User:try.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        // line 4
        echo "

    
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<div style=\" background-color: #b8db0a  ; border-radius: 10px; text-align: left; color: red;font-size: 17px;\"  id=\"map\">
    <br>
    <fieldset style=\"\">
        <a id=\"link_reg\" style=\"font-size: xx-large;margin-left: 1200px\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"> <u>Sign Up</u> </a>
        <form  style=\"margin-left: 20px\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-search\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input style=\"margin-left: 70px\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label style=\"margin-left: 70px\" for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input  class=\"btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    <div>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"><u>Forgot Your Passoword </u> </a> <br>
                </div>
                <br>
</form>
</fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  84 => 27,  79 => 25,  72 => 21,  67 => 19,  63 => 18,  58 => 16,  54 => 15,  50 => 14,  44 => 10,  38 => 8,  36 => 7,  31 => 4,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle:User:try.html.twig" %}*/
/* {% block form %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/*     */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <div style=" background-color: #b8db0a  ; border-radius: 10px; text-align: left; color: red;font-size: 17px;"  id="map">*/
/*     <br>*/
/*     <fieldset style="">*/
/*         <a id="link_reg" style="font-size: xx-large;margin-left: 1200px" href="{{ path('fos_user_registration_register')}}"> <u>Sign Up</u> </a>*/
/*         <form  style="margin-left: 20px" action="{{ path("fos_user_security_check") }}" method="post" class="form-search">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'Username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'Password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input style="margin-left: 70px" type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label style="margin-left: 70px" for="remember_me">{{ 'remember_me'|trans }}</label>*/
/* */
/*     <input  class="btn" type="submit" id="_submit" name="_submit" value="{{ 'Login'|trans }}" />*/
/*     <div>*/
/*         <a href="{{ path('fos_user_resetting_request') }}"><u>Forgot Your Passoword </u> </a> <br>*/
/*                 </div>*/
/*                 <br>*/
/* </form>*/
/* </fieldset>*/
/* </div>*/
/* {% endblock form %}*/
/* */
