<?php

/* default/index.html.twig */
class __TwigTemplate_7062b94ae5342f1faf77948987da6555ef40b6469f2d0d46bee7b314c9062285 extends Twig_Template
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
<script src= \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
\$(document).ready( function Redirect() {
               window.location=\"http://localhost/User/web/app_dev.php/login\";
            })
</script>

";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* */
/* <script src= "{{asset('js/jquery.js')}}"></script>*/
/* */
/*     <script type="text/javascript">*/
/* $(document).ready( function Redirect() {*/
/*                window.location="http://localhost/User/web/app_dev.php/login";*/
/*             })*/
/* </script>*/
/* */
/* */
