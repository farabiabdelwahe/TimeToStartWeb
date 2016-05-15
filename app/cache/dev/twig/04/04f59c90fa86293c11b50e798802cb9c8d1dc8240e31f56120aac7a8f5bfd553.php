<?php

/* UserUserBundle:feedback:list.html.twig */
class __TwigTemplate_ba5da0e22bc670b20e4d5bcd2f1f3eff6d487a30ba9fb6b2b81792f648d9bd03 extends Twig_Template
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
        echo "   <div class='btn' style=\"box-shadow:#000 ;font-family: 'Patua One',sans-serif;background-color: #ace600; text-align: left; color: #000;font-size: 17px;\"  id=\"map\">
                    <form>
                    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ms"]) ? $context["ms"] : $this->getContext($context, "ms")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 4
            echo "      
           
        
     
               <u>  FeedBack's ID:</u> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idfeedback", array()), "html", null, true);
            echo "
             <br>
        
                   <u>  Project's Id  : </u>  ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idproject", array()), "html", null, true);
            echo "
             <br>
             Date       ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "Date", array()), "m/d/Y"), "html", null, true);
            echo "<br>
             <u>  Text  : </u>  ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Text", array()), "html", null, true);
            echo "
             <br>
                <u>   User's Id  :</u>   ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "iduser", array()), "html", null, true);
            echo "
              <br>
                <u>   Banned  :</u>   ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ban", array()), "html", null, true);
            echo "
              <br>
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("User_homepagingfeedup", array("id" => $this->getAttribute($context["m"], "idfeedback", array()))), "html", null, true);
            echo "\"> Modify </a>
        
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("User_homepagingfeeddel", array("id" => $this->getAttribute($context["m"], "idfeedback", array()))), "html", null, true);
            echo "\"> Delete </a>
           
            <br>

            <br>
      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </form>
   </div>";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:feedback:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  68 => 22,  63 => 20,  58 => 18,  53 => 16,  48 => 14,  44 => 13,  39 => 11,  33 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/*    <div class='btn' style="box-shadow:#000 ;font-family: 'Patua One',sans-serif;background-color: #ace600; text-align: left; color: #000;font-size: 17px;"  id="map">*/
/*                     <form>*/
/*                     {% for m in ms %}*/
/*       */
/*            */
/*         */
/*      */
/*                <u>  FeedBack's ID:</u> {{ m.idfeedback}}*/
/*              <br>*/
/*         */
/*                    <u>  Project's Id  : </u>  {{ m.idproject }}*/
/*              <br>*/
/*              Date       {{ m.Date|date("m/d/Y") }}<br>*/
/*              <u>  Text  : </u>  {{ m.Text }}*/
/*              <br>*/
/*                 <u>   User's Id  :</u>   {{ m.iduser }}*/
/*               <br>*/
/*                 <u>   Banned  :</u>   {{ m.ban }}*/
/*               <br>*/
/*             <a href="{{ path('User_homepagingfeedup', {'id': m.idfeedback } )}}"> Modify </a>*/
/*         */
/*             <a href="{{ path('User_homepagingfeeddel', {'id': m.idfeedback } )}}"> Delete </a>*/
/*            */
/*             <br>*/
/* */
/*             <br>*/
/*       */
/*       {% endfor %}*/
/*                     </form>*/
/*    </div>*/
