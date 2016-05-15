<?php

/* UserUserBundle:User:list.html.twig */
class __TwigTemplate_0971074456daa77b8e438abce6dd0c6a67e0c579d7fc3665a605a5625c651879 extends Twig_Template
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
        echo "<table border=\"2\">
    <tr>
        <th>
            IdUser
        </th>
        
         <th>
            Username
        </th>
        
         <th>
            Email
        </th>
        
       
        
          
         <th>
            modifier
        </th>
        
    </tr>
    
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ms"]) ? $context["ms"] : $this->getContext($context, "ms")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 25
            echo "        
      <tr>
         <td>
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "
         </td>
         
         <td>
            ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "username", array()), "html", null, true);
            echo "
         </td>
         
          <td>
            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "email", array()), "html", null, true);
            echo "
         </td>
         
        
             <td>
            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_user_update", array("iduser" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> modifier </a>
         </td>
        
         
      </tr>
      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      
      </table>
";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:User:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 48,  75 => 41,  67 => 36,  60 => 32,  53 => 28,  48 => 25,  44 => 24,  19 => 1,);
    }
}
/* <table border="2">*/
/*     <tr>*/
/*         <th>*/
/*             IdUser*/
/*         </th>*/
/*         */
/*          <th>*/
/*             Username*/
/*         </th>*/
/*         */
/*          <th>*/
/*             Email*/
/*         </th>*/
/*         */
/*        */
/*         */
/*           */
/*          <th>*/
/*             modifier*/
/*         </th>*/
/*         */
/*     </tr>*/
/*     */
/*     {% for m in ms %}*/
/*         */
/*       <tr>*/
/*          <td>*/
/*             {{ m.id }}*/
/*          </td>*/
/*          */
/*          <td>*/
/*             {{ m.username }}*/
/*          </td>*/
/*          */
/*           <td>*/
/*             {{ m.email }}*/
/*          </td>*/
/*          */
/*         */
/*              <td>*/
/*             <a href="{{ path('user_user_update', {'iduser': m.id } )}}"> modifier </a>*/
/*          </td>*/
/*         */
/*          */
/*       </tr>*/
/*       */
/*       {% endfor %}*/
/*       */
/*       </table>*/
/* */
