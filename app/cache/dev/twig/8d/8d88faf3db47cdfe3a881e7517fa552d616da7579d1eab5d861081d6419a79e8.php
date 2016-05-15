<?php

/* UserUserBundle:Default:new.html.twig */
class __TwigTemplate_91d4f442d6a5225d62488c1fa12e56e1346bee6502d32687450cfaa746b4f13d extends Twig_Template
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
        echo "<body> 
<h2> <strong> Formulaire De Contact</strong> </h2>
<hr>
<h3> Contacter nous</h3>
<p>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
<hr>
<form role=\"form\" id=\"fr\" method=\"POST\" action='";
        // line 7
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendpage");
        echo "' > 
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
</body>";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <body> */
/* <h2> <strong> Formulaire De Contact</strong> </h2>*/
/* <hr>*/
/* <h3> Contacter nous</h3>*/
/* <p>{{form_errors(form)}}</p>*/
/* <hr>*/
/* <form role="form" id="fr" method="POST" action='{{path('my_app_mail_sendpage')}}' > */
/* {{form_widget(form)}}*/
/* </form>*/
/* </body>*/
