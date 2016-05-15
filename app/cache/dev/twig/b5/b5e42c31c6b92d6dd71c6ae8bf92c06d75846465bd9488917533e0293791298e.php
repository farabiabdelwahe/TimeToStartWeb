<?php

/* TimeToStartProjectBundle:Project:ProjectLayout.html.twig */
class __TwigTemplate_e20ca058ab8bfb9f8ae8890440feb625c8ec9576c83587352a70523843f4d89f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from 188.226.241.135/funder/html/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 21:53:49 GMT -->
<head>
    <meta charset=\"utf-8\">
    <title>FUNDER - Bootstrap Crowdfunding Site</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,200,300' rel='stylesheet' type='text/css'>
      <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
  
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/resp.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">

    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!--[if IE 8]>
    <style type=\"text/css\">
        input[type=\"checkbox\"], input[type=\"radio\"] {
            display: inline;
        }
        input[type=\"checkbox\"] + label, input[type=\"radio\"] + label{
            display: inline;
            background: none;
        }
    </style>
    <![endif]-->

    <script type=\"text/javascript\" src=\"../../../a.vimeocdn.com/js/froogaloop2.min.js\"></script>

    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../assets/ico/apple-touch-icon-144-precomposed.html\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.html\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.html\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.html\">
    <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.html\">

</head>

<body>

<div id=\"header\" class=\"header\">
    <div class=\"width titul\">
        <div class=\"reg inline\">
            <div class=\"bleft inline login\"><a href=\"#\" id=\"login-link\" class=\"login-link\">Login</a></div>
            <div class=\"bleft bright inline login\"><a href=\"#\" id=\"reg-link\" class=\"login-link\">Register</a></div>
        </div>

        <div class=\"social inline fright\">
            <ul id=\"social\">
                <li class=\"bleft inline\">
                    <ul>
                        <li><a href=\"https://www.facebook.com/\" target=\"_blank\"  original-title=\"twitter\"><img src=\"img/social/icon_header_face.png\" alt=\"\"></a></li>
                        <li><a href=\"https://plus.google.com/\" target=\"_blank\"  original-title=\"googleplus\"><img src=\"img/social/icon_header_g.png\" alt=\"\"></a></li>
                        <li><a href=\"https://twitter.com/\" title=\"facebook\" target=\"_blank\" ><img src=\"img/social/icon_header_tw.png\" alt=\"\"></a></li>
                        <li><a href=\"http://www.linkedin.com/\" target=\"_blank\" original-title=\"linkedin\"><img src=\"img/social/icon_header_in.png\" alt=\"\"></a></li>
                        <li><a href=\"johndoe%40domainname.html\" target=\"_self\" original-title=\"mail\"><img src=\"img/social/icon_header_p.png\" alt=\"\"></a></li>
                        <li><a href=\"johndoe%40domainname.html\" target=\"_self\" original-title=\"mail\"><img src=\"img/social/icon_header_ball.png\" alt=\"\"></a></li>
                    </ul>
                </li>

                <li class=\"bleft first socialz\"><a class=\"active\" href=\"#\">EN</a></li>
                <li class=\"bleft socialz\"><a href=\"#\">FR</a></li>
                <li class=\"bleft socialz\"><a href=\"#\">IT</a></li>
                <li class=\"bleft last socialz\"><a href=\"#\">DE</a></li>
            </ul>
        </div>
    </div>

    <div class=\"clear\"></div>
    <div class=\"navigate\">
        <div class=\"width\">
            <div class=\"logo inline\">
                <h1 class=\"inline fleft\">FUNDER</h1>
            </div>

            <div class=\"navigation inline fright\">
                <ul class=\"nav inline menuleft\">
                    <li><a class=\"bleft\" href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\">HOME</a></li>
                    <li><a class=\"bleft\" href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#id_about\">ABOUT</a></li>
                    <li class=\"active\"><a class=\"bleft\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#id3\">PROJECTS</a></li>
                    <li><a class=\"bleft\" href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#registr\">Create Project</a></li>
                    <li><a class=\"bleft\" href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#id_cont\">CONTACTS</a></li>
                    <li><a class=\"bleft last\" href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#id_partn\">PARTNERS</a></li>
                </ul>
            </div>
        </div>
        <div class=\"clear\"></div>
        <div id=\"header_select\">
            <select id=\"dynamic_select\">
                <option value=\"\" selected>Select A Page</option>
                <option value=\"index.html#id_about\">About</option>
                <option value=\"index.html#id3\">Projects</option>
                <option value=\"index.html#id_reg\">Registration</option>
                <option value=\"index.html#id_cont\">Contacts</option>
                <option value=\"index.html#id_partn\">Partners</option>
            </select>
        </div>
    </div>
</div>

<div class=\"container-fluid line contentt description_page\">

<div class=\"clear\"></div>
<div class=\"content description\">
<div class=\"row-fluid cols\">
<div class=\"left_content_descr span8\">
<h1 class=\"decoration text-center\"><span class=\"nobacgr\">";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "name", array()), "html", null, true);
        echo "</span></h1>
<div class=\"video\">
    <div id=\"myCarousel\" class=\"carousel slide\">
        <div class=\"carousel-inner content\" style=\"width: 100%\">
            <div class=\"item\">
                    </div>
            <div class=\"item active\">
                <div>
                    <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "imagelink", array()), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>
        <div id=\"visiblepanel\" class=\"visiblepanel\">
            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\" id=\"slide_left\"></a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\" id=\"slide_rigth\"></a>
        </div>
    </div>
</div>

<div class=\"tabbable\" style=\"margin-bottom: 18px;\">
    <div id=\"tabs_pages\">
        <ul class=\" tabs_pages_ul row-fluid\">
            <li class=\"active span4\"><a href=\"#tab1\" data-toggle=\"tab\">DESCRIPTION</a></li>
            <li class=\"span4\"><a href=\"#tab2\" data-toggle=\"tab\">BACKERS</a></li>
            <li class=\"span4\"><a href=\"#tab3\" data-toggle=\"tab\">UPDATES</a></li>
        </ul>
    </div>
    <div class=\"tab-content\" style=\"padding-bottom: 9px;\">
        <div class=\"tab-pane active\" id=\"tab1\">
            <div id=\"description_content\">
                <div class=\"title_description_content\">
                    ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "description", array()), "html", null, true);
        echo "
                                     <form action=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "filelink", array()), "html", null, true);
        echo "\">
                            <div class=\"back_this_project_button\">
        <button class=\"btn btn-large back_project\" type=\"submit\">
            <small>Download Project File</small>
       
                </div>
                            
                            
                </div>
                                 </form>


                
 </div>
        </div>
        <div class=\"tab-pane\" id=\"tab2\">
            <div id=\"backers_content\">
                <div class=\"row-fluid\">
                    <div class=\" span6\">
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"span6\">
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                        <div class=\"backers_block_text\">
                            <div class=\"image_face_backers_content\"><div class=\"face_backers_content\"></div></div>
                            <div class=\"text_backers_content\">
                                <div class=\"backer_name\">Backer</div>
                                <div class=\"backer_date\">April 2, 2013 at 8:45 pm</div>
                                <div class=\"number_project\">Backed 5 project</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span12\">
                        <div class=\"btn-toolbar text-center\">
                            <div class=\"decoration text-center proj\">
                                <div class=\"btn-group nobacgr\">
                                    <button class=\"btn\"><span class=\"gray\">1</span></button>
                                    <button class=\"btn mleft10\">2</button>
                                    <button class=\"btn mleft10\">3</button>
                                    <button class=\"btn mleft10\">4</button>
                                    <button class=\"btn mleft10\">5</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"tab-pane\" id=\"tab3\">
            <div id=\"updates_content\">
                <div class=\"row-fluid\">
                    <div class=\"span12\">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"social_uncategorized\">
    <div class=\"left_social_uncategorized\"><span>";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "type", array()), "html", null, true);
        echo "</span></div>
    <div class=\"social inline fright\">
                                    <ul class=\"rating\">
\t<li><a href=\"#\" title=\"1 Star\">1</a></li>
    <li><a href=\"#\" title=\"2 Stars\">2</a></li>
    <li><a href=\"#\" title=\"3 Stars\">3</a></li>
    <li><a href=\"#\" title=\"4 Stars\">4</a></li>
    <li><a href=\"#\" title=\"5 Stars\">5</a></li>
</ul>
        

    </div>
</div>
<div class=\"clear\"></div>
<div id=\"author_review\">
    <h3 class=\"decoration text-center\"><span class=\"nobacgr\">Author</span></h3>
    <div id=\"face_social_text\">
    
        <div class=\"right_face_social_text span8\">
            <div class=\"name_surname\">";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : $this->getContext($context, "V")), "html", null, true);
        echo "</div>
          

        </div>
    </div>
</div>
<div class=\"clear\">
    
</div>

 <div class=\"social inline fright\"> ";
        // line 349
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div>
 
 <br>
 <br>
<h4 class=\"decoration text-center\"><span class=\"nobacgr\">Feedbacks</span></h4>
<div id=\"asc_a_question\">
    <div class=\"fb-comments\" data-href=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\"> </div>
</div>


<div id=\"asc_a_question\">
         ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")));
        foreach ($context['_seq'] as $context["_key"] => $context["fi"]) {
            // line 361
            echo "
    <div class=\"reply_user main_reply\">
        <div class=\"row-fluid\">
             ";
            // line 364
            if (($this->getAttribute($context["fi"], "iduser", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 365
                echo "            <div class=\"span10\">
          
   <div class=\"name_and_date\">";
                // line 367
                echo twig_escape_filter($this->env, $this->getAttribute($context["fi"], "text", array()), "html", null, true);
                echo "<span class=\"user_name\">  User: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fi"], "owner", array()), "html", null, true);
                echo " </span> - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fi"], "date", array()), "Y-m-d"), "html", null, true);
                echo " - <a href=\"#\">Edit</a></div>
               

 ";
            } else {
                // line 371
                echo "        <div class=\"name_and_date\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fi"], "text", array()), "html", null, true);
                echo "<span class=\"user_name\">  User: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fi"], "owner", array()), "html", null, true);
                echo " </span> - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fi"], "date", array()), "Y-m-d"), "html", null, true);
                echo "

 
";
            }
            // line 375
            echo "
             

            </div>
        </div>
    </div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "</div>
<form action =";
        // line 384
        echo $this->env->getExtension('routing')->getPath("User_homepagingfeedadd");
        echo " method=\"POST\">
<div id=\"asc_a_question_form\">
    <h3 class=\"text-center asc_question_form_name\">Post <span class=\"h3_quest\">A Feedback </span></h3>
 
    <div class=\"form_question\">
        <div class=\"row-fluid\">
            <div class=\"controls controls-row message\">

                <div class=\"clear\"></div>
                <textarea id=\"redex\" class=\"inputp search-query span12\"  rows=\"5\" placeholder=\"Project description\" name=\"text\"></textarea>
                 <input type=\"hidden\" name=\"idproject\" value=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "idproject", array()), "html", null, true);
        echo "\">
    
                
                <div class=\"clear\"></div>
                <div class=\"tmargin20\">
                    <button type=\"submit\" class=\"btn\"><strong>Post</strong></button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</div>
<div class=\"sidebar_descr span4\">
    <div id=\"back_this_project_block\">
        <div class=\"backers_days_blocks first\">
            <div class=\"row-fluid\">
                <div class=\"span1\" style=\"margin-right: 10px\"><div class=\"image_first\"></div></div>
                <div class=\"text_backers_days_blocks span10\">
                    <div class=\"top_text_backers_days_blocks\">480</div>
                    <div class=\"bottom_text_backers_days_blocks\">Backers</div>
                </div>
            </div>
        </div>
        <div class=\"backers_days_blocks\">
            <div class=\"row-fluid\">
                <div class=\"span1\" style=\"margin-right: 10px\"><div class=\"image_second\"></div></div>
                <div class=\"text_backers_days_blocks span10\">
                    <div class=\"top_text_backers_days_blocks\">";
        // line 422
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "target", array()), "html", null, true);
        echo "</div>
                    <div class=\"bottom_text_backers_days_blocks\">Project Target</div>
                </div>
            </div>
        </div>
        <div class=\"backers_days_blocks\">
            <div class=\"row-fluid\">
                <div class=\"span1\" style=\"margin-right: 10px\"><div class=\"image_third\"></div></div>
                <div class=\"text_backers_days_blocks span10\">
                    <div class=\"top_text_backers_days_blocks\">";
        // line 431
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "datecreation", array()), "Y-m-d"), "html", null, true);
        echo "</div>
                    <div class=\"bottom_text_backers_days_blocks\">Creation Date</div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"back_this_project_button\">
        <button class=\"btn btn-large back_project\" type=\"button\">
            <small>BACK THIS PROJECT</small>
        </button>
    </div>
    <div id=\"pledges_block\">
        <h3 class=\"decoration text-center\"><span class=\"nobacgr_desc\">Pledges</span></h3>
        <div class=\"pledges_block_info\">
            <div class=\"pledges_block_info_link\"><a id=\"link_pledges_block_info_link_1\">Pledge \$5 or more</a></div>
            <div id=\"pledges_block_info_1\">
                <div class=\"pledges_block_info_backers\">10 backers</div>
                <div class=\"pledges_block_info_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class=\"pledges_block_info_estimate_delivery\">Estimate delivery: Jan 2013</div>
            </div>
        </div>
        <div class=\"pledges_block_info\">
            <div class=\"pledges_block_info_link\"><a id=\"link_pledges_block_info_link_2\">Pledge \$10 or more</a></div>
            <div id=\"pledges_block_info_2\">
                <div class=\"pledges_block_info_backers\">15 backers</div>
                <div class=\"pledges_block_info_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class=\"pledges_block_info_estimate_delivery\">Estimate delivery: Feb 2013</div>
            </div>
        </div>
        <div class=\"pledges_block_info\">
            <div class=\"pledges_block_info_link\"><a id=\"link_pledges_block_info_link_3\">Pledge \$15 or more</a></div>
            <div id=\"pledges_block_info_3\">
                <div class=\"pledges_block_info_backers\">20 backers</div>
                <div class=\"pledges_block_info_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class=\"pledges_block_info_estimate_delivery\">Estimate delivery: Mar 2013</div>
            </div>
        </div>
        <div class=\"pledges_block_info\">
            <div class=\"pledges_block_info_link\"><a id=\"link_pledges_block_info_link_4\">Pledge \$20 or more</a></div>
            <div id=\"pledges_block_info_4\">
                <div class=\"pledges_block_info_backers\">5 backers</div>
                <div class=\"pledges_block_info_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class=\"pledges_block_info_estimate_delivery\">Estimate delivery: Jan 2013</div>
            </div>
        </div>
        <div class=\"pledges_block_info\">
            <div class=\"pledges_block_info_link\"><a id=\"link_pledges_block_info_link_5\">Pledge \$25 or more</a></div>
            <div id=\"pledges_block_info_5\">
                <div class=\"pledges_block_info_backers\">20 backers</div>
                <div class=\"pledges_block_info_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class=\"pledges_block_info_estimate_delivery\">Estimate delivery: Feb 2013</div>
            </div>
        </div>
        <div class=\"pledges_block_info\">
            <div class=\"pledges_block_info_link\"><a id=\"link_pledges_block_info_link_6\">Pledge \$30 or more</a></div>
            <div id=\"pledges_block_info_6\">
                <div class=\"pledges_block_info_backers\">30 backers</div>
                <div class=\"pledges_block_info_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class=\"pledges_block_info_estimate_delivery\">Estimate delivery: Mar 2013</div>
            </div>
        </div>
        <div class=\"pledges_block_info\">
            <div class=\"pledges_block_info_link\"><a id=\"link_pledges_block_info_link_7\">Pledge \$35 or more</a></div>
            <div id=\"pledges_block_info_7\">
                <div class=\"pledges_block_info_backers\">20 backers</div>
                <div class=\"pledges_block_info_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                <div class=\"pledges_block_info_estimate_delivery\">Estimate delivery: Jan 2013</div>
            </div>
        </div>
    </div>
    <div id=\"payment_getaway\">
        <!--<h3 class=\"text-center payment_getaway_name\"><span class=\"title_h3 left_t\"></span>Payment Getaway<span class=\"title_h3 right_t\"></span></h3>-->
        <h3 class=\"decoration text-center\"><span class=\"nobacgr_desc\">Payment Getaway</span></h3>
        <div class=\"payment_getaway_block\">
            <div class=\"payment_cost\">\$15</div>
            <div class=\"your_card\">
                <h3>Choose Your Card:</h3>

                <ul class=\"choose\">
                    <li>
                        <input id=\"rfirst\" type=\"radio\" name=\"radio\" checked hidden />
                        <label for=\"rfirst\">Visa</label>
                    </li>
                    <li>
                        <input id=\"rsecond\" type=\"radio\" name=\"radio\" hidden />
                        <label for=\"rsecond\">MasterCard</label>
                    </li>
                    <li>
                        <input id=\"re\" type=\"radio\" name=\"radio\" hidden />
                        <label for=\"re\">American Express</label>
                    </li>
                </ul>
            </div>
            <div class=\"payment_getaway_button\">
                <button class=\"btn btn-large make_payment\" type=\"button\">
                    <small>Make Payment</small>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div id=\"footer\">
    <div class=\"footer\">
        <div class=\"row-fluid\">
            <div class=\"span3\">
                <h3>FUNDER</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu mauris venenapus</p>
            </div>
            <div class=\"span3 foot\">
                <h4>Recent Tweets</h4>
                <div class=\"tmargin20\">
                    <img class=\"fleft tw\" src=\"img/social_tweet.png\" alt=\"\">
                    <div class=\"mleft40\">
                        <span>1234 Street </span>
                        <span>4r6yg 456hv  </span>
                        <span>Lorem ipus ex vixc ilflf nfnfoof wrfoo rcgetg  erger </span>
                        <br>
                        <a class=\"green\">http://www.envato.com</a>
                    </div>
                    <div class=\"clear foot\"></div>
                    <img class=\"fleft tw\" src=\"img/social_tweet.png\" alt=\"\">
                    <div class=\" mleft40\">
                        <span>1234 Street </span>
                        <span>4r6yg 456hv  </span>
                        <span>Lorem ipus ex vixc ilflf n </span>
                        <br>
                        <a class=\"green\">http://www.envato.com</a>
                    </div>
                        <p>
   
                </div>
            </div>
            <div class=\"span3 foot\">
                <h4>Recent Posts</h4>
                <div class=\"tmargin20\">
                    <div class=\"recents\">
                        <p class=\"green\"><a href=\"#\">Lorem ipsus dolor sit amet</a></p>
                        <p class=\"green\"><a href=\"#\">Proin nibh aufu suscript</a></p>
                        <p class=\"green\"><a href=\"#\">Lorem ipsus dolor sit amet</a></p>
                    </div>
                    <p class=\"green recents\"><a href=\"#\">LQuri wfcw ertvc</a></p>
                </div>
            </div>
            <div class=\"span3 foot\">
                <h4>Flickr Feed</h4>
                <div class=\"flckr\">
                    <div>
                        <div class=\"flickr\"></div>
                        <div class=\"flickr\"></div>
                        <div class=\"flickr\"></div>
                        <div class=\"flickrl\"></div>

                        <div class=\"flickr\"></div>
                        <div class=\"flickr\"></div>
                        <div class=\"flickr\"></div>
                        <div class=\"flickrl\"></div>

                        <div class=\"flickr\"></div>
                        <div class=\"flickr\"></div>
                        <div class=\"flickr\"></div>
                        <div class=\"flickrl\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer_bot\">
        <div class=\"footer_bott\">
            <div class=\"fleft\">© All Rights Reserved. Design by UOU Design.</div>
            <div class=\"fright\">
                <ul id=\"social_b\" class=\"socialbott inline\">
                    <li><a href=\"https://twitter.com/\" target=\"_blank\" original-title=\"twitter\"><img src=\"img/social/icon_footer_face.png\" alt=\"\"></a></li>
                    <li><a href=\"https://plus.google.com/\" target=\"_blank\" original-title=\"googleplus\"><img src=\"img/social/icon_footer_g.png\" alt=\"\"></a></li>
                    <li><a href=\"https://www.facebook.com/\" title=\"facebook\" target=\"_blank\"><img src=\"img/social/icon_footer_tw.png\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_blank\" original-title=\"linkedin\"><img src=\"img/social/icon_footer_in.png\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_self\" original-title=\"mail\"><img src=\"img/social/icon_footer_p.png\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_self\" original-title=\"mail\"><img src=\"img/social/icon_footer_ball.png\" alt=\"\"></a></li>
                </ul>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</div>

<script src= \"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.selectbox.min.js"), "html", null, true);
        echo "\"></script>
<script src= \"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-uii.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
<script>
    /* <![CDATA[ */
    \$(\"#link_pledges_block_info_link_1\").click(function() {
        if (\$('#pledges_block_info_1').is(':visible'))
        {
            \$('#link_pledges_block_info_link_1').addClass('not_active');
            \$(\"#pledges_block_info_1\").toggle();
        }
        else
        {
            \$('#link_pledges_block_info_link_1').removeClass('not_active');
            \$(\"#pledges_block_info_1\").toggle();
        }
    });

    \$(\"#link_pledges_block_info_link_2\").click(function() {
        if (\$('#pledges_block_info_2').is(':visible'))
        {
            \$('#link_pledges_block_info_link_2').addClass('not_active');
            \$(\"#pledges_block_info_2\").toggle();
        }
        else
        {
            \$('#link_pledges_block_info_link_2').removeClass('not_active');
            \$(\"#pledges_block_info_2\").toggle();
        }
    });

    \$(\"#link_pledges_block_info_link_3\").click(function() {
        if (\$('#pledges_block_info_3').is(':visible'))
        {
            \$('#link_pledges_block_info_link_3').addClass('not_active');
            \$(\"#pledges_block_info_3\").toggle();
        }
        else
        {
            \$('#link_pledges_block_info_link_3').removeClass('not_active');
            \$(\"#pledges_block_info_3\").toggle();
        }
    });

    \$(\"#link_pledges_block_info_link_4\").click(function() {
        if (\$('#pledges_block_info_4').is(':visible'))
        {
            \$('#link_pledges_block_info_link_4').addClass('not_active');
            \$(\"#pledges_block_info_4\").toggle();
        }
        else
        {
            \$('#link_pledges_block_info_link_4').removeClass('not_active');
            \$(\"#pledges_block_info_4\").toggle();
        }
    });

    \$(\"#link_pledges_block_info_link_5\").click(function() {
        if (\$('#pledges_block_info_5').is(':visible'))
        {
            \$('#link_pledges_block_info_link_5').addClass('not_active');
            \$(\"#pledges_block_info_5\").toggle();
        }
        else
        {
            \$('#link_pledges_block_info_link_5').removeClass('not_active');
            \$(\"#pledges_block_info_5\").toggle();
        }
    });

    \$(\"#link_pledges_block_info_link_6\").click(function() {
        if (\$('#pledges_block_info_6').is(':visible'))
        {
            \$('#link_pledges_block_info_link_6').addClass('not_active');
            \$(\"#pledges_block_info_6\").toggle();
        }
        else
        {
            \$('#link_pledges_block_info_link_6').removeClass('not_active');
            \$(\"#pledges_block_info_6\").toggle();
        }
    });

    \$(\"#link_pledges_block_info_link_7\").click(function() {
        if (\$('#pledges_block_info_7').is(':visible'))
        {
            \$('#link_pledges_block_info_link_7').addClass('not_active');
            \$(\"#pledges_block_info_7\").toggle();
        }
        else
        {
            \$('#link_pledges_block_info_link_7').removeClass('not_active');
            \$(\"#pledges_block_info_7\").toggle();
        }
    });

    \$(function(){
        var iframe = \$('#player1')[0];
        var player = \$f(iframe);
        var \$myCarousel = \$('#myCarousel');

        player.addEvent('ready', function() {
            // player.addEvent('pause', onPause);
            player.addEvent('play', onPlay);
            //player.addEvent('playProgress', onPlayProgress);
        });


        \$('#myCarousel').bind('slide', function(){
            player.api('pause');
            \$('#myCarousel').carousel({
                interval: 6000
            })
        });


        function onPlay(id) {
            \$myCarousel.carousel('pause');
        }


    });

    /* ]]> */


</script>
<script>
    /* <![CDATA[ */
    var a = \$('.left_content_descr').height();
    \$('.sidebar_descr').height(a - 70);
    /* ]]> */

</script>

<script>
    /* <![CDATA[ */
    \$('#myCarousel').hover(function() {
        \$('#visiblepanel').toggle();
    });
    /* ]]> */


</script>
<script>
    /* <![CDATA[ */
    \$(function(){
        // bind change event to select
        \$('#dynamic_select').bind('change', function () {
            var url = \$(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
    /* ]]> */

</script>

<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<!-- Mirrored from 188.226.241.135/funder/html/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 21:53:52 GMT -->
</html>
";
    }

    public function getTemplateName()
    {
        return "TimeToStartProjectBundle:Project:ProjectLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 627,  768 => 626,  764 => 625,  760 => 624,  756 => 623,  752 => 622,  748 => 621,  744 => 620,  740 => 619,  736 => 618,  546 => 431,  534 => 422,  503 => 394,  490 => 384,  487 => 383,  474 => 375,  462 => 371,  451 => 367,  447 => 365,  445 => 364,  440 => 361,  436 => 360,  428 => 355,  419 => 349,  406 => 339,  384 => 320,  216 => 155,  212 => 154,  186 => 131,  175 => 123,  148 => 99,  144 => 98,  140 => 97,  136 => 96,  132 => 95,  128 => 94,  54 => 23,  50 => 22,  46 => 21,  41 => 19,  35 => 16,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <!-- Mirrored from 188.226.241.135/funder/html/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 21:53:49 GMT -->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>FUNDER - Bootstrap Crowdfunding Site</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,200,300' rel='stylesheet' type='text/css'>*/
/*       <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">*/
/*     */
/*   */
/*     <link href="{{asset('css/style.css')}}" rel="stylesheet">*/
/*     */
/*     <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('css/resp.css')}}"  rel="stylesheet">*/
/*     <link href="{{asset('css/colorbox.css')}}" rel="stylesheet">*/
/*     <style type="text/css">*/
/* */
/*     </style>*/
/* */
/*     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <!--[if IE 8]>*/
/*     <style type="text/css">*/
/*         input[type="checkbox"], input[type="radio"] {*/
/*             display: inline;*/
/*         }*/
/*         input[type="checkbox"] + label, input[type="radio"] + label{*/
/*             display: inline;*/
/*             background: none;*/
/*         }*/
/*     </style>*/
/*     <![endif]-->*/
/* */
/*     <script type="text/javascript" src="../../../a.vimeocdn.com/js/froogaloop2.min.js"></script>*/
/* */
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.html">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.html">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.html">*/
/*     <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.html">*/
/*     <link rel="shortcut icon" href="../assets/ico/favicon.html">*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* <div id="header" class="header">*/
/*     <div class="width titul">*/
/*         <div class="reg inline">*/
/*             <div class="bleft inline login"><a href="#" id="login-link" class="login-link">Login</a></div>*/
/*             <div class="bleft bright inline login"><a href="#" id="reg-link" class="login-link">Register</a></div>*/
/*         </div>*/
/* */
/*         <div class="social inline fright">*/
/*             <ul id="social">*/
/*                 <li class="bleft inline">*/
/*                     <ul>*/
/*                         <li><a href="https://www.facebook.com/" target="_blank"  original-title="twitter"><img src="img/social/icon_header_face.png" alt=""></a></li>*/
/*                         <li><a href="https://plus.google.com/" target="_blank"  original-title="googleplus"><img src="img/social/icon_header_g.png" alt=""></a></li>*/
/*                         <li><a href="https://twitter.com/" title="facebook" target="_blank" ><img src="img/social/icon_header_tw.png" alt=""></a></li>*/
/*                         <li><a href="http://www.linkedin.com/" target="_blank" original-title="linkedin"><img src="img/social/icon_header_in.png" alt=""></a></li>*/
/*                         <li><a href="johndoe%40domainname.html" target="_self" original-title="mail"><img src="img/social/icon_header_p.png" alt=""></a></li>*/
/*                         <li><a href="johndoe%40domainname.html" target="_self" original-title="mail"><img src="img/social/icon_header_ball.png" alt=""></a></li>*/
/*                     </ul>*/
/*                 </li>*/
/* */
/*                 <li class="bleft first socialz"><a class="active" href="#">EN</a></li>*/
/*                 <li class="bleft socialz"><a href="#">FR</a></li>*/
/*                 <li class="bleft socialz"><a href="#">IT</a></li>*/
/*                 <li class="bleft last socialz"><a href="#">DE</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="clear"></div>*/
/*     <div class="navigate">*/
/*         <div class="width">*/
/*             <div class="logo inline">*/
/*                 <h1 class="inline fleft">FUNDER</h1>*/
/*             </div>*/
/* */
/*             <div class="navigation inline fright">*/
/*                 <ul class="nav inline menuleft">*/
/*                     <li><a class="bleft" href="{{ path('add') }}">HOME</a></li>*/
/*                     <li><a class="bleft" href="{{ path('add') }}#id_about">ABOUT</a></li>*/
/*                     <li class="active"><a class="bleft" href="{{ path('add') }}#id3">PROJECTS</a></li>*/
/*                     <li><a class="bleft" href="{{ path('add') }}#registr">Create Project</a></li>*/
/*                     <li><a class="bleft" href="{{ path('add') }}#id_cont">CONTACTS</a></li>*/
/*                     <li><a class="bleft last" href="{{ path('add') }}#id_partn">PARTNERS</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="clear"></div>*/
/*         <div id="header_select">*/
/*             <select id="dynamic_select">*/
/*                 <option value="" selected>Select A Page</option>*/
/*                 <option value="index.html#id_about">About</option>*/
/*                 <option value="index.html#id3">Projects</option>*/
/*                 <option value="index.html#id_reg">Registration</option>*/
/*                 <option value="index.html#id_cont">Contacts</option>*/
/*                 <option value="index.html#id_partn">Partners</option>*/
/*             </select>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container-fluid line contentt description_page">*/
/* */
/* <div class="clear"></div>*/
/* <div class="content description">*/
/* <div class="row-fluid cols">*/
/* <div class="left_content_descr span8">*/
/* <h1 class="decoration text-center"><span class="nobacgr">{{ m.name}}</span></h1>*/
/* <div class="video">*/
/*     <div id="myCarousel" class="carousel slide">*/
/*         <div class="carousel-inner content" style="width: 100%">*/
/*             <div class="item">*/
/*                     </div>*/
/*             <div class="item active">*/
/*                 <div>*/
/*                     <img src="{{ m.imagelink}}">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="visiblepanel" class="visiblepanel">*/
/*             <a class="left carousel-control" href="#myCarousel" data-slide="prev" id="slide_left"></a>*/
/*             <a class="right carousel-control" href="#myCarousel" data-slide="next" id="slide_rigth"></a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="tabbable" style="margin-bottom: 18px;">*/
/*     <div id="tabs_pages">*/
/*         <ul class=" tabs_pages_ul row-fluid">*/
/*             <li class="active span4"><a href="#tab1" data-toggle="tab">DESCRIPTION</a></li>*/
/*             <li class="span4"><a href="#tab2" data-toggle="tab">BACKERS</a></li>*/
/*             <li class="span4"><a href="#tab3" data-toggle="tab">UPDATES</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <div class="tab-content" style="padding-bottom: 9px;">*/
/*         <div class="tab-pane active" id="tab1">*/
/*             <div id="description_content">*/
/*                 <div class="title_description_content">*/
/*                     {{ m.description }}*/
/*                                      <form action="{{ m.filelink }}">*/
/*                             <div class="back_this_project_button">*/
/*         <button class="btn btn-large back_project" type="submit">*/
/*             <small>Download Project File</small>*/
/*        */
/*                 </div>*/
/*                             */
/*                             */
/*                 </div>*/
/*                                  </form>*/
/* */
/* */
/*                 */
/*  </div>*/
/*         </div>*/
/*         <div class="tab-pane" id="tab2">*/
/*             <div id="backers_content">*/
/*                 <div class="row-fluid">*/
/*                     <div class=" span6">*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="span6">*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="backers_block_text">*/
/*                             <div class="image_face_backers_content"><div class="face_backers_content"></div></div>*/
/*                             <div class="text_backers_content">*/
/*                                 <div class="backer_name">Backer</div>*/
/*                                 <div class="backer_date">April 2, 2013 at 8:45 pm</div>*/
/*                                 <div class="number_project">Backed 5 project</div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row-fluid">*/
/*                     <div class="span12">*/
/*                         <div class="btn-toolbar text-center">*/
/*                             <div class="decoration text-center proj">*/
/*                                 <div class="btn-group nobacgr">*/
/*                                     <button class="btn"><span class="gray">1</span></button>*/
/*                                     <button class="btn mleft10">2</button>*/
/*                                     <button class="btn mleft10">3</button>*/
/*                                     <button class="btn mleft10">4</button>*/
/*                                     <button class="btn mleft10">5</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="tab-pane" id="tab3">*/
/*             <div id="updates_content">*/
/*                 <div class="row-fluid">*/
/*                     <div class="span12">*/
/*                     */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="social_uncategorized">*/
/*     <div class="left_social_uncategorized"><span>{{ m.type}}</span></div>*/
/*     <div class="social inline fright">*/
/*                                     <ul class="rating">*/
/* 	<li><a href="#" title="1 Star">1</a></li>*/
/*     <li><a href="#" title="2 Stars">2</a></li>*/
/*     <li><a href="#" title="3 Stars">3</a></li>*/
/*     <li><a href="#" title="4 Stars">4</a></li>*/
/*     <li><a href="#" title="5 Stars">5</a></li>*/
/* </ul>*/
/*         */
/* */
/*     </div>*/
/* </div>*/
/* <div class="clear"></div>*/
/* <div id="author_review">*/
/*     <h3 class="decoration text-center"><span class="nobacgr">Author</span></h3>*/
/*     <div id="face_social_text">*/
/*     */
/*         <div class="right_face_social_text span8">*/
/*             <div class="name_surname">{{ V }}</div>*/
/*           */
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="clear">*/
/*     */
/* </div>*/
/* */
/*  <div class="social inline fright"> {{ socialButtons() }}</div>*/
/*  */
/*  <br>*/
/*  <br>*/
/* <h4 class="decoration text-center"><span class="nobacgr">Feedbacks</span></h4>*/
/* <div id="asc_a_question">*/
/*     <div class="fb-comments" data-href="{{app.request.uri}}"> </div>*/
/* </div>*/
/* */
/* */
/* <div id="asc_a_question">*/
/*          {% for fi in f %}*/
/* */
/*     <div class="reply_user main_reply">*/
/*         <div class="row-fluid">*/
/*              {% if  fi.iduser == app.user.id %}*/
/*             <div class="span10">*/
/*           */
/*    <div class="name_and_date">{{ fi.text }}<span class="user_name">  User: {{ fi.owner }} </span> - {{ fi.date|date('Y-m-d') }} - <a href="#">Edit</a></div>*/
/*                */
/* */
/*  {% else %}*/
/*         <div class="name_and_date">{{ fi.text }}<span class="user_name">  User: {{ fi.owner }} </span> - {{ fi.date|date('Y-m-d') }}*/
/* */
/*  */
/* {% endif %}*/
/* */
/*              */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*  {% endfor %}*/
/* </div>*/
/* <form action ={{ path('User_homepagingfeedadd') }} method="POST">*/
/* <div id="asc_a_question_form">*/
/*     <h3 class="text-center asc_question_form_name">Post <span class="h3_quest">A Feedback </span></h3>*/
/*  */
/*     <div class="form_question">*/
/*         <div class="row-fluid">*/
/*             <div class="controls controls-row message">*/
/* */
/*                 <div class="clear"></div>*/
/*                 <textarea id="redex" class="inputp search-query span12"  rows="5" placeholder="Project description" name="text"></textarea>*/
/*                  <input type="hidden" name="idproject" value="{{ m.idproject }}">*/
/*     */
/*                 */
/*                 <div class="clear"></div>*/
/*                 <div class="tmargin20">*/
/*                     <button type="submit" class="btn"><strong>Post</strong></button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </form>*/
/* </div>*/
/* <div class="sidebar_descr span4">*/
/*     <div id="back_this_project_block">*/
/*         <div class="backers_days_blocks first">*/
/*             <div class="row-fluid">*/
/*                 <div class="span1" style="margin-right: 10px"><div class="image_first"></div></div>*/
/*                 <div class="text_backers_days_blocks span10">*/
/*                     <div class="top_text_backers_days_blocks">480</div>*/
/*                     <div class="bottom_text_backers_days_blocks">Backers</div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="backers_days_blocks">*/
/*             <div class="row-fluid">*/
/*                 <div class="span1" style="margin-right: 10px"><div class="image_second"></div></div>*/
/*                 <div class="text_backers_days_blocks span10">*/
/*                     <div class="top_text_backers_days_blocks">{{ m.target}}</div>*/
/*                     <div class="bottom_text_backers_days_blocks">Project Target</div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="backers_days_blocks">*/
/*             <div class="row-fluid">*/
/*                 <div class="span1" style="margin-right: 10px"><div class="image_third"></div></div>*/
/*                 <div class="text_backers_days_blocks span10">*/
/*                     <div class="top_text_backers_days_blocks">{{ m.datecreation|date('Y-m-d')}}</div>*/
/*                     <div class="bottom_text_backers_days_blocks">Creation Date</div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="back_this_project_button">*/
/*         <button class="btn btn-large back_project" type="button">*/
/*             <small>BACK THIS PROJECT</small>*/
/*         </button>*/
/*     </div>*/
/*     <div id="pledges_block">*/
/*         <h3 class="decoration text-center"><span class="nobacgr_desc">Pledges</span></h3>*/
/*         <div class="pledges_block_info">*/
/*             <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_1">Pledge $5 or more</a></div>*/
/*             <div id="pledges_block_info_1">*/
/*                 <div class="pledges_block_info_backers">10 backers</div>*/
/*                 <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>*/
/*                 <div class="pledges_block_info_estimate_delivery">Estimate delivery: Jan 2013</div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="pledges_block_info">*/
/*             <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_2">Pledge $10 or more</a></div>*/
/*             <div id="pledges_block_info_2">*/
/*                 <div class="pledges_block_info_backers">15 backers</div>*/
/*                 <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>*/
/*                 <div class="pledges_block_info_estimate_delivery">Estimate delivery: Feb 2013</div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="pledges_block_info">*/
/*             <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_3">Pledge $15 or more</a></div>*/
/*             <div id="pledges_block_info_3">*/
/*                 <div class="pledges_block_info_backers">20 backers</div>*/
/*                 <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>*/
/*                 <div class="pledges_block_info_estimate_delivery">Estimate delivery: Mar 2013</div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="pledges_block_info">*/
/*             <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_4">Pledge $20 or more</a></div>*/
/*             <div id="pledges_block_info_4">*/
/*                 <div class="pledges_block_info_backers">5 backers</div>*/
/*                 <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>*/
/*                 <div class="pledges_block_info_estimate_delivery">Estimate delivery: Jan 2013</div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="pledges_block_info">*/
/*             <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_5">Pledge $25 or more</a></div>*/
/*             <div id="pledges_block_info_5">*/
/*                 <div class="pledges_block_info_backers">20 backers</div>*/
/*                 <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>*/
/*                 <div class="pledges_block_info_estimate_delivery">Estimate delivery: Feb 2013</div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="pledges_block_info">*/
/*             <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_6">Pledge $30 or more</a></div>*/
/*             <div id="pledges_block_info_6">*/
/*                 <div class="pledges_block_info_backers">30 backers</div>*/
/*                 <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>*/
/*                 <div class="pledges_block_info_estimate_delivery">Estimate delivery: Mar 2013</div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="pledges_block_info">*/
/*             <div class="pledges_block_info_link"><a id="link_pledges_block_info_link_7">Pledge $35 or more</a></div>*/
/*             <div id="pledges_block_info_7">*/
/*                 <div class="pledges_block_info_backers">20 backers</div>*/
/*                 <div class="pledges_block_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>*/
/*                 <div class="pledges_block_info_estimate_delivery">Estimate delivery: Jan 2013</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div id="payment_getaway">*/
/*         <!--<h3 class="text-center payment_getaway_name"><span class="title_h3 left_t"></span>Payment Getaway<span class="title_h3 right_t"></span></h3>-->*/
/*         <h3 class="decoration text-center"><span class="nobacgr_desc">Payment Getaway</span></h3>*/
/*         <div class="payment_getaway_block">*/
/*             <div class="payment_cost">$15</div>*/
/*             <div class="your_card">*/
/*                 <h3>Choose Your Card:</h3>*/
/* */
/*                 <ul class="choose">*/
/*                     <li>*/
/*                         <input id="rfirst" type="radio" name="radio" checked hidden />*/
/*                         <label for="rfirst">Visa</label>*/
/*                     </li>*/
/*                     <li>*/
/*                         <input id="rsecond" type="radio" name="radio" hidden />*/
/*                         <label for="rsecond">MasterCard</label>*/
/*                     </li>*/
/*                     <li>*/
/*                         <input id="re" type="radio" name="radio" hidden />*/
/*                         <label for="re">American Express</label>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="payment_getaway_button">*/
/*                 <button class="btn btn-large make_payment" type="button">*/
/*                     <small>Make Payment</small>*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div id="footer">*/
/*     <div class="footer">*/
/*         <div class="row-fluid">*/
/*             <div class="span3">*/
/*                 <h3>FUNDER</h3>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu mauris venenapus</p>*/
/*             </div>*/
/*             <div class="span3 foot">*/
/*                 <h4>Recent Tweets</h4>*/
/*                 <div class="tmargin20">*/
/*                     <img class="fleft tw" src="img/social_tweet.png" alt="">*/
/*                     <div class="mleft40">*/
/*                         <span>1234 Street </span>*/
/*                         <span>4r6yg 456hv  </span>*/
/*                         <span>Lorem ipus ex vixc ilflf nfnfoof wrfoo rcgetg  erger </span>*/
/*                         <br>*/
/*                         <a class="green">http://www.envato.com</a>*/
/*                     </div>*/
/*                     <div class="clear foot"></div>*/
/*                     <img class="fleft tw" src="img/social_tweet.png" alt="">*/
/*                     <div class=" mleft40">*/
/*                         <span>1234 Street </span>*/
/*                         <span>4r6yg 456hv  </span>*/
/*                         <span>Lorem ipus ex vixc ilflf n </span>*/
/*                         <br>*/
/*                         <a class="green">http://www.envato.com</a>*/
/*                     </div>*/
/*                         <p>*/
/*    */
/*                 </div>*/
/*             </div>*/
/*             <div class="span3 foot">*/
/*                 <h4>Recent Posts</h4>*/
/*                 <div class="tmargin20">*/
/*                     <div class="recents">*/
/*                         <p class="green"><a href="#">Lorem ipsus dolor sit amet</a></p>*/
/*                         <p class="green"><a href="#">Proin nibh aufu suscript</a></p>*/
/*                         <p class="green"><a href="#">Lorem ipsus dolor sit amet</a></p>*/
/*                     </div>*/
/*                     <p class="green recents"><a href="#">LQuri wfcw ertvc</a></p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="span3 foot">*/
/*                 <h4>Flickr Feed</h4>*/
/*                 <div class="flckr">*/
/*                     <div>*/
/*                         <div class="flickr"></div>*/
/*                         <div class="flickr"></div>*/
/*                         <div class="flickr"></div>*/
/*                         <div class="flickrl"></div>*/
/* */
/*                         <div class="flickr"></div>*/
/*                         <div class="flickr"></div>*/
/*                         <div class="flickr"></div>*/
/*                         <div class="flickrl"></div>*/
/* */
/*                         <div class="flickr"></div>*/
/*                         <div class="flickr"></div>*/
/*                         <div class="flickr"></div>*/
/*                         <div class="flickrl"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="footer_bot">*/
/*         <div class="footer_bott">*/
/*             <div class="fleft">© All Rights Reserved. Design by UOU Design.</div>*/
/*             <div class="fright">*/
/*                 <ul id="social_b" class="socialbott inline">*/
/*                     <li><a href="https://twitter.com/" target="_blank" original-title="twitter"><img src="img/social/icon_footer_face.png" alt=""></a></li>*/
/*                     <li><a href="https://plus.google.com/" target="_blank" original-title="googleplus"><img src="img/social/icon_footer_g.png" alt=""></a></li>*/
/*                     <li><a href="https://www.facebook.com/" title="facebook" target="_blank"><img src="img/social/icon_footer_tw.png" alt=""></a></li>*/
/*                     <li><a href="http://www.linkedin.com/" target="_blank" original-title="linkedin"><img src="img/social/icon_footer_in.png" alt=""></a></li>*/
/*                     <li><a href="http://www.linkedin.com/" target="_self" original-title="mail"><img src="img/social/icon_footer_p.png" alt=""></a></li>*/
/*                     <li><a href="http://www.linkedin.com/" target="_self" original-title="mail"><img src="img/social/icon_footer_ball.png" alt=""></a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script src= "{{asset('js/jquery.selectbox.min.js')}}"></script>*/
/* <script src= "{{asset('js/jquery.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap.js')}}"></script>*/
/* <script src="{{asset('js/jquery-uii.js')}}"></script>*/
/* <script src="{{asset('js/contact.js')}}"></script>*/
/* <script src="{{asset('js/jquery.colorbox.js')}}"></script>*/
/* <script src="{{asset('js/jquery.placeholder.js')}}"></script>*/
/* <script src="{{asset('js/jquery.tweet.js')}}"></script>*/
/* <script src="{{asset('js/jflickrfeed.min.js')}}"></script>*/
/* <script src="{{asset('js/scripts.js')}}"></script>*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     $("#link_pledges_block_info_link_1").click(function() {*/
/*         if ($('#pledges_block_info_1').is(':visible'))*/
/*         {*/
/*             $('#link_pledges_block_info_link_1').addClass('not_active');*/
/*             $("#pledges_block_info_1").toggle();*/
/*         }*/
/*         else*/
/*         {*/
/*             $('#link_pledges_block_info_link_1').removeClass('not_active');*/
/*             $("#pledges_block_info_1").toggle();*/
/*         }*/
/*     });*/
/* */
/*     $("#link_pledges_block_info_link_2").click(function() {*/
/*         if ($('#pledges_block_info_2').is(':visible'))*/
/*         {*/
/*             $('#link_pledges_block_info_link_2').addClass('not_active');*/
/*             $("#pledges_block_info_2").toggle();*/
/*         }*/
/*         else*/
/*         {*/
/*             $('#link_pledges_block_info_link_2').removeClass('not_active');*/
/*             $("#pledges_block_info_2").toggle();*/
/*         }*/
/*     });*/
/* */
/*     $("#link_pledges_block_info_link_3").click(function() {*/
/*         if ($('#pledges_block_info_3').is(':visible'))*/
/*         {*/
/*             $('#link_pledges_block_info_link_3').addClass('not_active');*/
/*             $("#pledges_block_info_3").toggle();*/
/*         }*/
/*         else*/
/*         {*/
/*             $('#link_pledges_block_info_link_3').removeClass('not_active');*/
/*             $("#pledges_block_info_3").toggle();*/
/*         }*/
/*     });*/
/* */
/*     $("#link_pledges_block_info_link_4").click(function() {*/
/*         if ($('#pledges_block_info_4').is(':visible'))*/
/*         {*/
/*             $('#link_pledges_block_info_link_4').addClass('not_active');*/
/*             $("#pledges_block_info_4").toggle();*/
/*         }*/
/*         else*/
/*         {*/
/*             $('#link_pledges_block_info_link_4').removeClass('not_active');*/
/*             $("#pledges_block_info_4").toggle();*/
/*         }*/
/*     });*/
/* */
/*     $("#link_pledges_block_info_link_5").click(function() {*/
/*         if ($('#pledges_block_info_5').is(':visible'))*/
/*         {*/
/*             $('#link_pledges_block_info_link_5').addClass('not_active');*/
/*             $("#pledges_block_info_5").toggle();*/
/*         }*/
/*         else*/
/*         {*/
/*             $('#link_pledges_block_info_link_5').removeClass('not_active');*/
/*             $("#pledges_block_info_5").toggle();*/
/*         }*/
/*     });*/
/* */
/*     $("#link_pledges_block_info_link_6").click(function() {*/
/*         if ($('#pledges_block_info_6').is(':visible'))*/
/*         {*/
/*             $('#link_pledges_block_info_link_6').addClass('not_active');*/
/*             $("#pledges_block_info_6").toggle();*/
/*         }*/
/*         else*/
/*         {*/
/*             $('#link_pledges_block_info_link_6').removeClass('not_active');*/
/*             $("#pledges_block_info_6").toggle();*/
/*         }*/
/*     });*/
/* */
/*     $("#link_pledges_block_info_link_7").click(function() {*/
/*         if ($('#pledges_block_info_7').is(':visible'))*/
/*         {*/
/*             $('#link_pledges_block_info_link_7').addClass('not_active');*/
/*             $("#pledges_block_info_7").toggle();*/
/*         }*/
/*         else*/
/*         {*/
/*             $('#link_pledges_block_info_link_7').removeClass('not_active');*/
/*             $("#pledges_block_info_7").toggle();*/
/*         }*/
/*     });*/
/* */
/*     $(function(){*/
/*         var iframe = $('#player1')[0];*/
/*         var player = $f(iframe);*/
/*         var $myCarousel = $('#myCarousel');*/
/* */
/*         player.addEvent('ready', function() {*/
/*             // player.addEvent('pause', onPause);*/
/*             player.addEvent('play', onPlay);*/
/*             //player.addEvent('playProgress', onPlayProgress);*/
/*         });*/
/* */
/* */
/*         $('#myCarousel').bind('slide', function(){*/
/*             player.api('pause');*/
/*             $('#myCarousel').carousel({*/
/*                 interval: 6000*/
/*             })*/
/*         });*/
/* */
/* */
/*         function onPlay(id) {*/
/*             $myCarousel.carousel('pause');*/
/*         }*/
/* */
/* */
/*     });*/
/* */
/*     /* ]]> *//* */
/* */
/* */
/* </script>*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     var a = $('.left_content_descr').height();*/
/*     $('.sidebar_descr').height(a - 70);*/
/*     /* ]]> *//* */
/* */
/* </script>*/
/* */
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     $('#myCarousel').hover(function() {*/
/*         $('#visiblepanel').toggle();*/
/*     });*/
/*     /* ]]> *//* */
/* */
/* */
/* </script>*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     $(function(){*/
/*         // bind change event to select*/
/*         $('#dynamic_select').bind('change', function () {*/
/*             var url = $(this).val(); // get selected value*/
/*             if (url) { // require a URL*/
/*                 window.location = url; // redirect*/
/*             }*/
/*             return false;*/
/*         });*/
/*     });*/
/*     /* ]]> *//* */
/* */
/* </script>*/
/* */
/* <div id="fb-root"></div>*/
/* <script>(function(d, s, id) {*/
/*   var js, fjs = d.getElementsByTagName(s)[0];*/
/*   if (d.getElementById(id)) return;*/
/*   js = d.createElement(s); js.id = id;*/
/*   js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";*/
/*   fjs.parentNode.insertBefore(js, fjs);*/
/* }(document, 'script', 'facebook-jssdk'));</script>*/
/* */
/* */
/* */
/* <!-- Mirrored from 188.226.241.135/funder/html/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 21:53:52 GMT -->*/
/* </html>*/
/* */
