<?php

/* UserUserBundle:User:trouver.html.twig */
class __TwigTemplate_c5214e2f27bc60b13b2d177a6df1062c0b5c99b3d04b9e6dc061c1d238047b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:User:Affichage.html.twig", "UserUserBundle:User:trouver.html.twig", 1);
        $this->blocks = array(
            'search' => array($this, 'block_search'),
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

    // line 4
    public function block_search($context, array $blocks = array())
    {
        echo " 
        <div>
             <div style=\"box-shadow:#000 ;font-family: 'Patua One',sans-serif;background-color: #ace600; text-align: left; color: #000;font-size: 17px;\"  id=\"map\">
                 <br>    <form method=\"post\">
                        Username <input id=\"usr\" type=\"text\" name=\"s\" style=\"border-radius: 25px\"/>
   ";
        // line 10
        echo "    <input id=\"setValue\" class=\"btn\" type=\"submit\" value=\"Search\" />
 

</form>
    
        <hr>


    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ms"]) ? $context["ms"] : $this->getContext($context, "ms")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 19
            echo "        <div style=\"color: #000;alignment-adjust: baseline\">
           
            User's ID  ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo " <br><br>
        
             Username  ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "username", array()), "html", null, true);
            echo " <br><br>
       
              The User's Email  ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "email", array()), "html", null, true);
            echo " <br>
           
         <input  style=\"display: none\" id=\"theValue\" type=\"text\" name=\"s\"  value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "email", array()), "html", null, true);
            echo "\"/>
        </div>
        <br>
    </div>
<!--
    <script>
 localStorage.clear();
    (function() {
   
  // Use an input to show the current value and let
  // the user set a new one
  
  var input = document.getElementById(\"theValue\");
    
  // Reading the value, which was store as \"theValue\"
  if (localStorage && 'theValue' in localStorage) {
    input.value = localStorage.theValue;
  }

  document.getElementById(\"setValue\").onclick = function () {
    // Writing the value
    localStorage && (localStorage.theValue = input.value); 
  };
  
    alert(\"Welcome again \" + input.value); 
    
   function foo() {
    // do something


    // call to static variable
  
}
var testObject = input.value ;

// Put the object into storage
localStorage.setItem('testObject', JSON.stringify(testObject));

// Retrieve the object from storage
var retrievedObject = localStorage.getItem('testObject');

console.log('retrievedObject: ', JSON.parse(retrievedObject));
 alert(\"INFOOO \" + retrievedObject); 
 
// initialize value of static variable
foo.staticVar = input.value;

foo(); // alert 'some value'
})();
</script>-->
  
          <a id=\"mail1\" class=\"btn\"  href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_mail_form", array("email" => $this->getAttribute($context["m"], "email", array()))), "html", null, true);
            echo "\"> Contact Him </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "      
    
      
    
            </div>
      ";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:User:trouver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 80,  124 => 78,  70 => 27,  65 => 25,  60 => 23,  55 => 21,  51 => 19,  47 => 18,  37 => 10,  28 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle:User:Affichage.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*      {% block search %} */
/*         <div>*/
/*              <div style="box-shadow:#000 ;font-family: 'Patua One',sans-serif;background-color: #ace600; text-align: left; color: #000;font-size: 17px;"  id="map">*/
/*                  <br>    <form method="post">*/
/*                         Username <input id="usr" type="text" name="s" style="border-radius: 25px"/>*/
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
/*             User's ID  {{ m.id }} <br><br>*/
/*         */
/*              Username  {{ m.username }} <br><br>*/
/*        */
/*               The User's Email  {{ m.email }} <br>*/
/*            */
/*          <input  style="display: none" id="theValue" type="text" name="s"  value="{{ m.email  }}"/>*/
/*         </div>*/
/*         <br>*/
/*     </div>*/
/* <!--*/
/*     <script>*/
/*  localStorage.clear();*/
/*     (function() {*/
/*    */
/*   // Use an input to show the current value and let*/
/*   // the user set a new one*/
/*   */
/*   var input = document.getElementById("theValue");*/
/*     */
/*   // Reading the value, which was store as "theValue"*/
/*   if (localStorage && 'theValue' in localStorage) {*/
/*     input.value = localStorage.theValue;*/
/*   }*/
/* */
/*   document.getElementById("setValue").onclick = function () {*/
/*     // Writing the value*/
/*     localStorage && (localStorage.theValue = input.value); */
/*   };*/
/*   */
/*     alert("Welcome again " + input.value); */
/*     */
/*    function foo() {*/
/*     // do something*/
/* */
/* */
/*     // call to static variable*/
/*   */
/* }*/
/* var testObject = input.value ;*/
/* */
/* // Put the object into storage*/
/* localStorage.setItem('testObject', JSON.stringify(testObject));*/
/* */
/* // Retrieve the object from storage*/
/* var retrievedObject = localStorage.getItem('testObject');*/
/* */
/* console.log('retrievedObject: ', JSON.parse(retrievedObject));*/
/*  alert("INFOOO " + retrievedObject); */
/*  */
/* // initialize value of static variable*/
/* foo.staticVar = input.value;*/
/* */
/* foo(); // alert 'some value'*/
/* })();*/
/* </script>-->*/
/*   */
/*           <a id="mail1" class="btn"  href="{{ path('my_app_mail_form', {'email': m.email } )}}"> Contact Him </a>*/
/*       {% endfor %}*/
/*       */
/*     */
/*       */
/*     */
/*             </div>*/
/*       {% endblock search %}      */
