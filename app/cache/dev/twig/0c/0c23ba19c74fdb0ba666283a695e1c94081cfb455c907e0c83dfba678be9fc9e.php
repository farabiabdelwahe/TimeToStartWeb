<?php

/* UserUserBundle:feedback:finding.html.twig */
class __TwigTemplate_59ce8c686bc7d33f0b510f2570ffab0a272384ede4eff1172a4a109ab6199003 extends Twig_Template
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
        echo "        <div>
             <div style=\"box-shadow:#000 ;font-family: 'Patua One',sans-serif;background-color: #ace600; text-align: left; color: #000;font-size: 17px;\"  id=\"map\">
                 <br>    <form method=\"POST\">
                       IdProjet <input id=\"usr\" type=\"text\" name=\"s\" style=\"border-radius: 25px\"/>
   ";
        // line 6
        echo "    <input id=\"setValue\" class=\"btn\" type=\"submit\" value=\"Search\" />
 

</form>
    
        <hr>


    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ms"]) ? $context["ms"] : $this->getContext($context, "ms")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 15
            echo "        <div style=\"color: #000;alignment-adjust: baseline\">
           
           Id Feedback  ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idfeedback", array()), "html", null, true);
            echo " <br><br>
         Id Project  ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idproject", array()), "html", null, true);
            echo " <br><br>
             User  ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "iduser", array()), "html", null, true);
            echo " <br><br>
       
            Text  ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Text", array()), "html", null, true);
            echo " <br>
           
        
        </div>
        <br>
    </div>
      <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("User_homepagingfeedup", array("id" => $this->getAttribute($context["m"], "idfeedback", array()))), "html", null, true);
            echo "\"> Modify </a>
        
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("User_homepagingfeeddel", array("id" => $this->getAttribute($context["m"], "idfeedback", array()))), "html", null, true);
            echo "\"> Delete </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        
      
      
    
            </div>
   ";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:feedback:finding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  70 => 29,  65 => 27,  56 => 21,  51 => 19,  47 => 18,  43 => 17,  39 => 15,  35 => 14,  25 => 6,  19 => 1,);
    }
}
/*         <div>*/
/*              <div style="box-shadow:#000 ;font-family: 'Patua One',sans-serif;background-color: #ace600; text-align: left; color: #000;font-size: 17px;"  id="map">*/
/*                  <br>    <form method="POST">*/
/*                        IdProjet <input id="usr" type="text" name="s" style="border-radius: 25px"/>*/
/*    {#password <input type="text" name="m" />#}*/
/*     <input id="setValue" class="btn" type="submit" value="Search" />*/
/*  */
/* */
/* </form>*/
/*     */
/*         <hr>*/
/* */
/* */
/*     {% for m in ms %}*/
/*         <div style="color: #000;alignment-adjust: baseline">*/
/*            */
/*            Id Feedback  {{ m.idfeedback }} <br><br>*/
/*          Id Project  {{ m.idproject}} <br><br>*/
/*              User  {{ m.iduser }} <br><br>*/
/*        */
/*             Text  {{ m.Text }} <br>*/
/*            */
/*         */
/*         </div>*/
/*         <br>*/
/*     </div>*/
/*       <a href="{{ path('User_homepagingfeedup', {'id': m.idfeedback } )}}"> Modify </a>*/
/*         */
/*             <a href="{{ path('User_homepagingfeeddel', {'id': m.idfeedback } )}}"> Delete </a>*/
/*       {% endfor %}*/
/*         */
/*       */
/*       */
/*     */
/*             </div>*/
/*    */
