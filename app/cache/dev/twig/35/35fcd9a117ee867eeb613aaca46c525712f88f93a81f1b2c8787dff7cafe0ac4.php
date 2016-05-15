<?php

/* UserUserBundle:feedback:updatem.html.twig */
class __TwigTemplate_ad2004cde2b674f0def189207e78a91a8af1290f29a8b388416175029eca0be7 extends Twig_Template
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
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
   </div>";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:feedback:updatem.html.twig";
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
/*    <div class='btn' style="box-shadow:#000 ;font-family: 'Patua One',sans-serif;background-color: #ace600; text-align: left; color: #000;font-size: 17px;"  id="map">*/
/* {{ form(f) }}*/
/*    </div>*/
