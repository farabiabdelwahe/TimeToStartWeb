<?php

/* UserUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_f5bcfa223c11aa22ab1e549902cbf54a751513736bd4cab0adbd7a3e1e6bdfcd extends Twig_Template
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
<div style=\"background-color: #ace600 \" class=\"row\">
    <div class=\"span3\">
       
    </div>
   <div style=\"margin-right: 250px\" class=\"span9\">
       <div style=\"font-size: x-large\">  <u> <h1> Account Information : </h1></u></div>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br />
                        <input class=\"btn\" type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            ";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  37 => 13,  31 => 12,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div style="background-color: #ace600 " class="row">*/
/*     <div class="span3">*/
/*        */
/*     </div>*/
/*    <div style="margin-right: 250px" class="span9">*/
/*        <div style="font-size: x-large">  <u> <h1> Account Information : </h1></u></div>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST">*/
/*                         {{ form_widget(form) }}*/
/*                         <br />*/
/*                         <input class="btn" type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*             */
