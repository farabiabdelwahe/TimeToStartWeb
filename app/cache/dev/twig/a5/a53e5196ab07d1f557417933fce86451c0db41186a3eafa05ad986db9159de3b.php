<?php

/* TimeToStartProjectBundle:Project:Project.html.twig */
class __TwigTemplate_373f4baef2f22f12e0d96cce512c6f5cfb3df7884f7dff52b58e954c3fc14f93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TimeToStartProjectBundle:Project:Layout.html.twig", "TimeToStartProjectBundle:Project:Project.html.twig", 2);
        $this->blocks = array(
            'CreateProject' => array($this, 'block_CreateProject'),
            'UserProjects' => array($this, 'block_UserProjects'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TimeToStartProjectBundle:Project:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_CreateProject($context, array $blocks = array())
    {
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
<table class=\"someclass\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" summary=\"bla bla bla\">
<tr>
    <td>
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "type", array()), 'label');
        echo "
        
    </td>
    
    <td>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "type", array()), 'widget');
        echo "
        
    </td>
    
</tr>

<tr>
    <td>
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "name", array()), 'label');
        echo "
        
    </td>
    
    <td>
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "name", array()), 'widget', array("class" => "inputp search-query span12"));
        echo "
        
    </td>
    
</tr>

<tr>
    <td>
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'label');
        echo "
        
    </td>
    
    <td>
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget');
        echo "
        
    </td>
    
</tr>
<tr>
    <td>
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "helptype", array()), 'label');
        echo "
        
    </td>
    

    <td>
      ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "helptype", array()), 'widget', array("id" => "helptype"));
        echo "
        
    </td>
    
</tr>

<tr>
    <td>
        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "filelink", array()), 'label');
        echo "
        
    </td>
    
    <td>
          <div class=\"upload_html inline\">
                    
      ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "filelink", array()), 'widget');
        echo "
                    </div>

        
    </td>
    
    <tr>
    <td>
        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "imagelink", array()), 'label');
        echo "
        
    </td>
    
    <td>
          <div class=\"upload_img inline\">
                    
      ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "imagelink", array()), 'widget');
        echo "
                    </div>

        
    </td>
    
</tr>
    
</tr>


<tr class=\"one\">
    <td>
        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tdiscription", array()), 'label');
        echo "
        
    </td>
    
    <td>
        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tdiscription", array()), 'widget');
        echo "
        
    </td>
    
</tr>

<tr class=\"two\">
    
 
    <td >
        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "target", array()), 'label');
        echo "
        
    </td>
    
    <td>
        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "target", array()), 'widget');
        echo "
        
    </td>
</tr>
    
    <tr class=\"two\">
    <td >
        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prize", array()), 'label');
        echo "
        
    </td>
    
    <td>
        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prize", array()), 'widget');
        echo "
        
    </td>
        </tr>
        <tr class=\"three\">
    <td>
        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "htask", array()), 'label');
        echo "
        
    </td>
    
    <td>
        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "htask", array()), 'widget');
        echo "
        
    </td>
    
</tr>
    <tr class=\"three\">
    <td >
        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "taskdate", array()), 'label');
        echo "
        
    </td>
    
    <td>
        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "taskdate", array()), 'widget');
        echo "
        
    </td>
    
</tr>

    
    <tr>
    <td>
        ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "valider", array()), 'label');
        echo "
        
    </td>
   
    <td>
         <span class=\"nobacgr_whit\"> 
             <span class=\"butt_small\">
        ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "valider", array()), 'widget', array("class" => "btn btn-large search-query"));
        echo "
  </span>
         </span>
    </td>
    
</tr>
    
</table>
               ";
        // line 175
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
     

        
               <style>
 button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;\t
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

button:hover {background-color: #3e8e41}

button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

                   </style>
            

 
     
     ";
    }

    // line 211
    public function block_UserProjects($context, array $blocks = array())
    {
        // line 212
        echo "         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 213
            echo "         
    <div class=\"portfolio-listing creative development block\" style=\"display: block;\">
         
         <div class=\"span4 bordered\" style=\"display: block; border-style: solid;
    border-width: 5px; border-color: #aaff00\"  >
             <div class=\"folder\"><u><h2 class=\"text-center title\"><a href=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index", array("id" => $this->getAttribute($context["m"], "idproject", array()))), "html", null, true);
            echo "\">   ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
            echo " </a></h2></u></div>
                        <div class=\"proj_name\">
                            <div class=\"clear\"></div>
                            <span class=\"fleft author\">Author Name</span>
                            <table class=\"icons\">
                                <tbody>
                                <tr>
                                    
                                    <td class=\"\"><a class=\"\" href= \" ";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update", array("id" => $this->getAttribute($context["m"], "idproject", array()))), "html", null, true);
            echo "\" title=\"\"><img src=  \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit-icon-1901.png"), "html", null, true);
            echo "\" alt=\"\"></a></td>
                                    <td class=\"\"><a href=\"\"><img src=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
            echo "\"  alt=\"\"></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=\"clear\"></div>
                        </div>
                        <div class=\"folder border\"><a href=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index", array("id" => $this->getAttribute($context["m"], "idproject", array()))), "html", null, true);
            echo "\"><div class=\"author_proj proj_3\" style=\"  background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagelink", array()), "html", null, true);
            echo ");background-size: contain\"></div></a></div>
                        <div class=\"folder lorem lines\">
                            <div id=\"project\" value=\"132\" class=\"slider\"></div>
                        </div>
                        <p class=\"descr\">  ";
            // line 237
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["m"], "description", array())) > 20)) ? ((twig_slice($this->env, $this->getAttribute($context["m"], "description", array()), 0, 20) . "...")) : ($this->getAttribute($context["m"], "description", array()))), "html", null, true);
            echo "</p>
                        <div class=\"folder price topbordered\">
                            <div class=\"span4\">
                                <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project8\">";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "target", array()), "html", null, true);
            echo "</span></strong>
                                <p> Traget</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "HelpType", array()), "html", null, true);
            echo "</strong>
                                <p>Help Type</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>";
            // line 248
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "datecreation", array()), "Y-m-d"), "html", null, true);
            echo "</strong>
                                <p>CreationDate</p>
                            </div>
                        </div>
                    </div>
    </div>
                                
                                                                          <script> 
        
        \$( document ).ready(function() {
         
                var rows = \$('table.someclass tr');
                             if ( \$('#helptype').val()===\"Human Resources\"){
  rows.filter('.one').hide(1000);
              rows.filter('.two').hide(1000);
               rows.filter('.three').show(1000);
}

  
 else if ( \$('#helptype').val()===\"Technical\"){
            rows.filter('.one').show(1000);
              rows.filter('.two').hide(1000);
               rows.filter('.three').hide(1000);

}
 else if ( \$('#helptype').val()===\"Financial\"){

 rows.filter('.one').hide(1000);
         rows.filter('.two').show(1000);
           rows.filter('.three').hide(1000);
}
             

               
               \$('#helptype').bind(\"DOMSubtreeModified\",function(){
                   
                   if (this.value===\"Human Resources\"){
  rows.filter('.one').hide(1000);
              rows.filter('.two').hide(1000);
               rows.filter('.three').show(1000);
}

  
 else if (this.value===\"Technical\"){
            rows.filter('.one').show(1000);
              rows.filter('.two').hide(1000);
               rows.filter('.three').hide(1000);

}
 else if (this.value===\"Financial\"){

 rows.filter('.one').hide(1000);
         rows.filter('.two').show(1000);
           rows.filter('.three').hide(1000);
}
});


});
</script>
                                
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "         
         
              ";
    }

    public function getTemplateName()
    {
        return "TimeToStartProjectBundle:Project:Project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 310,  387 => 248,  380 => 244,  373 => 240,  367 => 237,  358 => 233,  349 => 227,  343 => 226,  330 => 218,  323 => 213,  318 => 212,  315 => 211,  277 => 175,  266 => 167,  256 => 160,  244 => 151,  236 => 146,  226 => 139,  218 => 134,  209 => 128,  201 => 123,  191 => 116,  183 => 111,  170 => 101,  162 => 96,  146 => 83,  136 => 76,  125 => 68,  115 => 61,  104 => 53,  95 => 47,  85 => 40,  77 => 35,  66 => 27,  58 => 22,  47 => 14,  39 => 9,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "TimeToStartProjectBundle:Project:Layout.html.twig" %}*/
/* */
/* {% block CreateProject %}*/
/* {{ form_start(f) }}*/
/* <table class="someclass" border="0" cellpadding="0" cellspacing="0" summary="bla bla bla">*/
/* <tr>*/
/*     <td>*/
/*         {{ form_label (f.type) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*         {{ form_widget(f.type) }}*/
/*         */
/*     </td>*/
/*     */
/* </tr>*/
/* */
/* <tr>*/
/*     <td>*/
/*         {{ form_label (f.name) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*         {{ form_widget(f.name ,      { 'class': 'inputp search-query span12' }) }}*/
/*         */
/*     </td>*/
/*     */
/* </tr>*/
/* */
/* <tr>*/
/*     <td>*/
/*         {{ form_label (f.description) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*         {{ form_widget(f.description) }}*/
/*         */
/*     </td>*/
/*     */
/* </tr>*/
/* <tr>*/
/*     <td>*/
/*         {{ form_label (f.helptype) }}*/
/*         */
/*     </td>*/
/*     */
/* */
/*     <td>*/
/*       {{ form_widget(f.helptype, { 'id': 'helptype' } ) }}*/
/*         */
/*     </td>*/
/*     */
/* </tr>*/
/* */
/* <tr>*/
/*     <td>*/
/*         {{ form_label (f.filelink) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*           <div class="upload_html inline">*/
/*                     */
/*       {{ form_widget(f.filelink) }}*/
/*                     </div>*/
/* */
/*         */
/*     </td>*/
/*     */
/*     <tr>*/
/*     <td>*/
/*         {{ form_label (f.imagelink) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*           <div class="upload_img inline">*/
/*                     */
/*       {{ form_widget(f.imagelink) }}*/
/*                     </div>*/
/* */
/*         */
/*     </td>*/
/*     */
/* </tr>*/
/*     */
/* </tr>*/
/* */
/* */
/* <tr class="one">*/
/*     <td>*/
/*         {{ form_label (f.tdiscription) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*         {{ form_widget(f.tdiscription) }}*/
/*         */
/*     </td>*/
/*     */
/* </tr>*/
/* */
/* <tr class="two">*/
/*     */
/*  */
/*     <td >*/
/*         {{ form_label (f.target) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*         {{ form_widget(f.target) }}*/
/*         */
/*     </td>*/
/* </tr>*/
/*     */
/*     <tr class="two">*/
/*     <td >*/
/*         {{ form_label (f.prize) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*         {{ form_widget(f.prize) }}*/
/*         */
/*     </td>*/
/*         </tr>*/
/*         <tr class="three">*/
/*     <td>*/
/*         {{ form_label (f.htask) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*         {{ form_widget(f.htask) }}*/
/*         */
/*     </td>*/
/*     */
/* </tr>*/
/*     <tr class="three">*/
/*     <td >*/
/*         {{ form_label (f.taskdate) }}*/
/*         */
/*     </td>*/
/*     */
/*     <td>*/
/*         {{ form_widget(f.taskdate) }}*/
/*         */
/*     </td>*/
/*     */
/* </tr>*/
/* */
/*     */
/*     <tr>*/
/*     <td>*/
/*         {{ form_label (f.valider) }}*/
/*         */
/*     </td>*/
/*    */
/*     <td>*/
/*          <span class="nobacgr_whit"> */
/*              <span class="butt_small">*/
/*         {{ form_widget(f.valider ,      { 'class': 'btn btn-large search-query' }) }}*/
/*   </span>*/
/*          </span>*/
/*     </td>*/
/*     */
/* </tr>*/
/*     */
/* </table>*/
/*                {{ form_end(f) }}*/
/*      */
/* */
/*         */
/*                <style>*/
/*  button {*/
/*   display: inline-block;*/
/*   padding: 15px 25px;*/
/*   font-size: 24px;*/
/*   cursor: pointer;*/
/*   text-align: center;	*/
/*   text-decoration: none;*/
/*   outline: none;*/
/*   color: #fff;*/
/*   background-color: #4CAF50;*/
/*   border: none;*/
/*   border-radius: 15px;*/
/*   box-shadow: 0 9px #999;*/
/* }*/
/* */
/* button:hover {background-color: #3e8e41}*/
/* */
/* button:active {*/
/*   background-color: #3e8e41;*/
/*   box-shadow: 0 5px #666;*/
/*   transform: translateY(4px);*/
/* }*/
/* */
/*                    </style>*/
/*             */
/* */
/*  */
/*      */
/*      {% endblock %}*/
/*      */
/*      */
/*      {% block UserProjects %}*/
/*          {% for m in v %}*/
/*          */
/*     <div class="portfolio-listing creative development block" style="display: block;">*/
/*          */
/*          <div class="span4 bordered" style="display: block; border-style: solid;*/
/*     border-width: 5px; border-color: #aaff00"  >*/
/*              <div class="folder"><u><h2 class="text-center title"><a href="{{ path('index', {'id': m.idproject}) }}">   {{ m.name}} </a></h2></u></div>*/
/*                         <div class="proj_name">*/
/*                             <div class="clear"></div>*/
/*                             <span class="fleft author">Author Name</span>*/
/*                             <table class="icons">*/
/*                                 <tbody>*/
/*                                 <tr>*/
/*                                     */
/*                                     <td class=""><a class="" href= " {{ path('update', {'id': m.idproject}) }}" title=""><img src=  "{{asset('img/edit-icon-1901.png')}}" alt=""></a></td>*/
/*                                     <td class=""><a href=""><img src="{{asset('img/icon_lock.png')}}"  alt=""></a></td>*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                         <div class="folder border"><a href="{{ path('index', {'id': m.idproject}) }}"><div class="author_proj proj_3" style="  background-image: url({{ m.imagelink }});background-size: contain"></div></a></div>*/
/*                         <div class="folder lorem lines">*/
/*                             <div id="project" value="132" class="slider"></div>*/
/*                         </div>*/
/*                         <p class="descr">  {{ m.description|length > 20 ? m.description|slice(0, 20) ~ '...' : m.description}}</p>*/
/*                         <div class="folder price topbordered">*/
/*                             <div class="span4">*/
/*                                 <strong class="green"><span>$</span><span class="project_value" href="#project8">{{ m.target}}</span></strong>*/
/*                                 <p> Traget</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>{{ m.HelpType}}</strong>*/
/*                                 <p>Help Type</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>{{ m.datecreation|date('Y-m-d')}}</strong>*/
/*                                 <p>CreationDate</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*     </div>*/
/*                                 */
/*                                                                           <script> */
/*         */
/*         $( document ).ready(function() {*/
/*          */
/*                 var rows = $('table.someclass tr');*/
/*                              if ( $('#helptype').val()==="Human Resources"){*/
/*   rows.filter('.one').hide(1000);*/
/*               rows.filter('.two').hide(1000);*/
/*                rows.filter('.three').show(1000);*/
/* }*/
/* */
/*   */
/*  else if ( $('#helptype').val()==="Technical"){*/
/*             rows.filter('.one').show(1000);*/
/*               rows.filter('.two').hide(1000);*/
/*                rows.filter('.three').hide(1000);*/
/* */
/* }*/
/*  else if ( $('#helptype').val()==="Financial"){*/
/* */
/*  rows.filter('.one').hide(1000);*/
/*          rows.filter('.two').show(1000);*/
/*            rows.filter('.three').hide(1000);*/
/* }*/
/*              */
/* */
/*                */
/*                $('#helptype').bind("DOMSubtreeModified",function(){*/
/*                    */
/*                    if (this.value==="Human Resources"){*/
/*   rows.filter('.one').hide(1000);*/
/*               rows.filter('.two').hide(1000);*/
/*                rows.filter('.three').show(1000);*/
/* }*/
/* */
/*   */
/*  else if (this.value==="Technical"){*/
/*             rows.filter('.one').show(1000);*/
/*               rows.filter('.two').hide(1000);*/
/*                rows.filter('.three').hide(1000);*/
/* */
/* }*/
/*  else if (this.value==="Financial"){*/
/* */
/*  rows.filter('.one').hide(1000);*/
/*          rows.filter('.two').show(1000);*/
/*            rows.filter('.three').hide(1000);*/
/* }*/
/* });*/
/* */
/* */
/* });*/
/* </script>*/
/*                                 */
/*                                    {% endfor %}*/
/*          */
/*          */
/*               {% endblock %}*/
/*               */
/*               */
/*      */
/*      */
/*      */
/*          */
/* */
