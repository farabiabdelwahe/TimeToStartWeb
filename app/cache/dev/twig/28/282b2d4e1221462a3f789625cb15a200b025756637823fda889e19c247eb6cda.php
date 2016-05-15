<?php

/* UserUserBundle:feedback:add.html.twig */
class __TwigTemplate_f5bbefca3ef7b9834f1831952ca3b9121d5e5acf794e2a33a88429c509c058b6 extends Twig_Template
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
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
<table>
  
         
           <tr>
          <td>
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Text", array()), 'label');
        echo "
         </td>
          <td>
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Text", array()), 'widget');
        echo "
         </td>
          </tr>
          
           <tr>
         
         <td>
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "idproject", array()), 'label');
        echo "
         </td>
         
          <td>
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "idproject", array()), 'widget');
        echo "
         </td>
          </tr>
          
          
         
          <tr style=\"display: none\">
         
         <td>
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Date", array()), 'label');
        echo "
         </td>
         <td>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Date", array()), 'widget');
        echo "
         </td>
          </tr>
          <tr>
          <td>
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "valider", array()), 'widget');
        echo "
         </td>
         
         </tr>
         
</table>  
     ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "    
         
        
</div>
         
         
         
";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:feedback:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  82 => 42,  74 => 37,  68 => 34,  56 => 25,  49 => 21,  39 => 14,  33 => 11,  24 => 5,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* <div>*/
/* {{ form_start(f) }}*/
/* <table>*/
/*   */
/*          */
/*            <tr>*/
/*           <td>*/
/*             {{ form_label (f.Text) }}*/
/*          </td>*/
/*           <td>*/
/*             {{ form_widget (f.Text) }}*/
/*          </td>*/
/*           </tr>*/
/*           */
/*            <tr>*/
/*          */
/*          <td>*/
/*             {{ form_label (f.idproject) }}*/
/*          </td>*/
/*          */
/*           <td>*/
/*             {{ form_widget (f.idproject) }}*/
/*          </td>*/
/*           </tr>*/
/*           */
/*           */
/*          */
/*           <tr style="display: none">*/
/*          */
/*          <td>*/
/*             {{ form_label (f.Date) }}*/
/*          </td>*/
/*          <td>*/
/*             {{ form_widget (f.Date) }}*/
/*          </td>*/
/*           </tr>*/
/*           <tr>*/
/*           <td>*/
/*             {{ form_widget (f.valider) }}*/
/*          </td>*/
/*          */
/*          </tr>*/
/*          */
/* </table>  */
/*      {{ form_end(f) }}    */
/*          */
/*         */
/* </div>*/
/*          */
/*          */
/*          */
/* */
