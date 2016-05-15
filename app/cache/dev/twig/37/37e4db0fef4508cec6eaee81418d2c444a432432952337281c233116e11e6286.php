<?php

/* UserUserBundle:reporting:mailing.html.twig */
class __TwigTemplate_23431d13f75511ef84f269879a66fd194d60b900ec8aa72e2f6d4cfe6825eb45 extends Twig_Template
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
        echo "
                        
                            <div style=\"text-align: center ;background-color:#959595  ; border-radius: 10px; text-align: left; color: red;font-size: 17px;\"  id=\"map\">

<a  class='btn' style=\"font-size: x-large; color:#468847 \">   Send Email </a> 
<hr>
<p>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
<hr>
<form  class='btn' style=\"text-align: center;margin-left: 550px\" role=\"form\" id=\"fr\" method=\"POST\" action='";
        // line 9
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendpage");
        echo "' > 
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<script>
alert(\"INFOOO2\" + localStorage.getItem('testObject')); 
</script>
</form>
        </div>";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:reporting:mailing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  32 => 9,  27 => 7,  19 => 1,);
    }
}
/* */
/*                         */
/*                             <div style="text-align: center ;background-color:#959595  ; border-radius: 10px; text-align: left; color: red;font-size: 17px;"  id="map">*/
/* */
/* <a  class='btn' style="font-size: x-large; color:#468847 ">   Send Email </a> */
/* <hr>*/
/* <p>{{form_errors(form)}}</p>*/
/* <hr>*/
/* <form  class='btn' style="text-align: center;margin-left: 550px" role="form" id="fr" method="POST" action='{{path('my_app_mail_sendpage')}}' > */
/*     {{form_widget(form) }}*/
/* <script>*/
/* alert("INFOOO2" + localStorage.getItem('testObject')); */
/* </script>*/
/* </form>*/
/*         </div>*/
