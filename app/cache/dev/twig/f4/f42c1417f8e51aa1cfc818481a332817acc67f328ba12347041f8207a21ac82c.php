<?php

/* TimeToStartProjectBundle:Project:Layout.html.twig */
class __TwigTemplate_96815342b96a03158e923253b2c97301883402434985baf09141482d78837914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ProjectSearch' => array($this, 'block_ProjectSearch'),
            'UserProjects' => array($this, 'block_UserProjects'),
            'CreateProject' => array($this, 'block_CreateProject'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from 188.226.241.135/funder/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 21:52:29 GMT -->
<head>
    <meta charset=\"utf-8\">
    <title>FUNDER - Bootstrap Crowdfunding Site</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"\">

    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,200,300' rel='stylesheet' type='text/css'>
    
   
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
  
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/resp.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link rel=\"shortcut icon\" href=\"favicon.html\" />
    <link rel=\"apple-touch-icon\" href=\"img/touch-icon.html\" />
    <link rel=\"image_src\" href=\"img/touch-icon.html\" />

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
            margin-bottom: 15px;
        }
        .zone {
            background-color: #727272;
            filter: alpha(Opacity=70);
        }
        .black {
            background-color: #727272;
            filter: alpha(Opacity=70);
        }
    </style>
    <![endif]-->

    <script src= \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script>
        /* <![CDATA[ */
        \$(window).scroll(function fade() {
            if (\$(window).scrollTop() > 400) {
                \$(\"#navtop\").css(\"display\", \"block\");
            }
            else {
                \$(\"#navtop\").css(\"display\", \"none\");
            }
        });
        /* ]]> */

    </script>

</head>

<body>
    
<div id=\"header\" class=\"header\">
    <a name=\"id_home\"></a>
        <div class=\"width titul\">
            <div class=\"reg inline\">
                </div>
               </div>
          <div>
             <div>
        
                 <div>
             
                     
                 </div>

                 <br>

       <div>

        </div>
        <div>
              
  
            <div class=\"social inline fright\">
                <ul id=\"social\">
                <li class=\"bleft inline\">
                    <ul style=\"margin-left: 10px\">
                        <li><a href=\"https://www.facebook.com/\" target=\"_blank\"  original-title=\"twitter\"><img src= \"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_face.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"https://plus.google.com/\" target=\"_blank\"  original-title=\"googleplus\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_g.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"https://twitter.com/\" title=\"facebook\" target=\"_blank\" ><img src= \"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_tw.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"http://www.linkedin.com/\" target=\"_blank\" original-title=\"linkedin\"><img src= \"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_in.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"johndoe%40domainname.html\" target=\"_self\" original-title=\"mail\"><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_p.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"johndoe%40domainname.html\" target=\"_self\" original-title=\"mail\"><img src= \"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_ball.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
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
                    
                </div>

                <div class=\"navigation inline\">
                    <ul class=\"nav inline menuleft\">
                        <li class=\"active\"><a class=\"bleft\" href=\"#\">HOME</a></li>
                        <li><a id=\"link_about\" class=\"bleft\" href=\"#\">ABOUT</a></li>
                        <li><a id=\"link\" class=\"bleft\" href=\"#\">PROJECTS</a></li>
                        <li><a id=\"link_reg\" class=\"bleft\" href=\"#\">Create Project</a></li>
                        <li><a id=\"link_contact\" class=\"bleft\" href=\"#\">CONTACTS</a></li>
                        <li><a id=\"link_partners\" class=\"bleft last\" href=\"#\">PARTNERS</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"clear\"></div>
            <div id=\"header_select\">
                <select id=\"dynamic_select\">
                    <option value=\"\" selected>Select A Page</option>
                    <option value=\"index-2.html#id_about\">About</option>
                    <option value=\"index-2.html#id3\">Projects</option>
                    <option value=\"index-2.html#id_reg\">Registration</option>
                    <option value=\"index-2.html#id_cont\">Contacts</option>
                    <option value=\"index-2.html#id_partn\">Partners</option>
                </select>
            </div>
        </div>
       

    </div>
<div id=\"navtop\" class=\"width navigate\" style=\"position: fixed;  display: none; top: 0px; left: 0px;right: 0px;z-index: 99999999999999999;\">
    <div class=\"navigation\">
        <ul class=\"nav inline menuleft\">
            <li class=\"active\"><a class=\"bleft\" id=\"link_home\" href=\"#\">HOME</a></li>
            <li><a id=\"link_about_b\" class=\"bleft\" href=\"#\">ABOUT</a></li>
            <li><a id=\"link_b\" class=\"bleft\" href=\"#\">PROJECTS</a></li>
            <li><a id=\"link_reg_b\" class=\"bleft\" href=\"#\">Create Project</a></li>
            <li><a id=\"link_contact_b\" class=\"bleft\" href=\"#\">CONTACTS</a></li>
            <li><a id=\"link_partners_b\" class=\"bleft last\" href=\"#\">PARTNERS</a></li>
        </ul>
    </div>
</div>

<div class=\"contentt\">
<div class=\"container-fluid line\">
 <div class=\"slides\">
         
      


    </div>
    <div class=\"slides\">
            <div class=\"search_top\">
                <div class=\"search\" id=\"searchh\">
                     <form method=\"post\" action=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">
                    <span class=\"white\"><strong>Find a project:</strong></span>
                    <input id=\"autocomplete\" title=\"\" type=\"text\" class=\"span7 search-query\" name=\"s\">
                    <input type=\"submit\" class=\"submit\" value=\"search\" name=\"submit\">
                    </form>
                </div>
            </div>
    </div>

    <div class=\"top_widgets black\">
        <section class=\"black\">
            <div class=\"search-wrapper clearfix\">
                <div class=\"zone clearfix\">
                <div class=\"searchr block\">
                <div id=\"default-search\" >

                </div>
                <div id=\"advanced-search\"  style=\"display: none;\">

                <div class=\"row-fluid projects font_p\" id=\"top_slide\">
                <div id=\"myCarousel\" class=\"carousel slide\">
                <div class=\"carousel-inner content\">
                <div class=\"item active\">
                    <div class=\"span4 bordered\">
                        <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj7\">Projects title goes here</a></h4></div>
                        <div class=\"proj_name\">
                            <div class=\"clear\"></div>
                            <span class=\"fleft author\">Author Name</span>
                            <table class=\"icons\">
                                <tbody>
                                <tr>
                                    <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href= \"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj1.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj7\"><img src= \"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                      </tr>
                                </tbody>
                            </table>
                            <div class=\"clear\"></div>
                        </div>
                        <div class=\"folder border\"><a href=\"projects.html#proj7\"><div class=\"author_proj proj_1\" ></div></a></div>
                        <div class=\"folder lorem lines\">
                            <div id=\"project7\" value=\"645\" class=\"slider\"></div>
                        </div>
                        <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                        <div class=\"folder price topbordered\">
                            <div class=\"span4\">
                                <strong class=\"green\"><span>\$</span> <span class=\"project_value\" href=\"#project7\">26</span></strong>
                                <p>pledged</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>80</strong>
                                <p>backers</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>25</strong>
                                <p>days to go</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"span4 bordered\">
                        <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj9\">Projects title goes here</a></h4></div>
                        <div class=\"proj_name\">
                            <div class=\"clear\"></div>
                            <span class=\"fleft author\">Author Name</span>
                            <table class=\"icons\">
                                <tbody>
                                <tr> 
                                    <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href= \"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj3.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj9\"><img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\"  alt=\"\"></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=\"clear\"></div>
                        </div>
                        <div class=\"folder border\"><a href=\"projects.html#proj9\"><div class=\"author_proj proj_3\"></div></a></div>
                        <div class=\"folder lorem lines\">
                            <div id=\"project9\" value=\"765\" class=\"slider\"></div>
                        </div>
                        <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                        <div class=\"folder price topbordered\">
                            <div class=\"span4\">
                                <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project9\">154</span></strong>
                                <p>pledged</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>80</strong>
                                <p>backers</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>25</strong>
                                <p>days to go</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"span4 bordered\">
                        <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj10\">Projects title goes here</a></h4></div>
                        <div class=\"proj_name\">
                            <div class=\"clear\"></div>
                            <span class=\"fleft author\">Author Name</span>
                            <table class=\"icons\">
                                <tbody>
                                <tr>
                                    <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href= \"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj4.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj10\"><img src= \"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=\"clear\"></div>
                        </div>
                        <div class=\"folder border\"><a href=\"projects.html#proj10\"><div class=\"author_proj proj_4\"></div></a></div>
                        <div class=\"folder lorem lines\">
                            <div id=\"project10\" value=\"125\" class=\"slider\"></div>
                        </div>
                        <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                        <div class=\"folder price topbordered\">
                            <div class=\"span4\">
                                <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project10\">98</span></strong>
                                <p>pledged</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>80</strong>
                                <p>backers</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>25</strong>
                                <p>days to go</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"span4 bordered\">
                        <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj11\">Projects title goes here</a></h4></div>
                        <div class=\"proj_name\">
                            <div class=\"clear\"></div>
                            <span class=\"fleft author\">Author Name</span>
                            <table class=\"icons\">
                                <tbody>
                                <tr>
                                    <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href= \"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj5.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj11\" ><img src= \"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=\"clear\"></div>
                        </div>
                        <div class=\"folder border\"><a href=\"projects.html#proj11\"><div class=\"author_proj proj_5\"></div></a></div>
                        <div class=\"folder lorem lines\">
                            <div id=\"project11\" value=\"876\" class=\"slider\"></div>
                        </div>
                        <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                        <div class=\"folder price topbordered\">
                            <div class=\"span4\">
                                <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project11\">76</span></strong>
                                <p>pledged</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>80</strong>
                                <p>backers</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>25</strong>
                                <p>days to go</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"span4 bordered\">
                        <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj12\">Projects title goes here</a></h4></div>
                        <div class=\"proj_name\">
                            <div class=\"clear\"></div>
                            <span class=\"fleft author\">Author Name</span>
                            <table class=\"icons\">
                                <tbody>
                                <tr>
                                    <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href=  \"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj6.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj12\"><img src= \"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=\"clear\"></div>
                        </div>
                        <div class=\"folder border\"><a href=\"projects.html#proj12\"><div class=\"author_proj proj_6\"></div></a></div>
                        <div class=\"folder lorem lines\">
                            <div id=\"project12\" value=\"875\" class=\"slider\"></div>
                        </div>
                        <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                        <div class=\"folder price topbordered\">
                            <div class=\"span4\">
                                <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project12\">200</span></strong>
                                <p>pledged</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>80</strong>
                                <p>backers</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>25</strong>
                                <p>days to go</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"></a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"></a>
                </div>

                </div>


                </div>
                <div class=\"advanced-search-control\">
                    <a id=\"advanced-search-button\" class=\"advanced-search-button fright adv_search latest expanded\"></a>
                </div>
                </div>

                </div><!-- end of .zone-search -->
            </div><!-- end of .search-wrapper -->

            <div class=\"map-wrapper\">

                <div id=\"map\" class=\"map\" style=\"position: relative; overflow: hidden; -webkit-transform: translateZ(0);height: 465px\">
                    <div id=\"home-page-featured\">
                        
                        ";
        // line 403
        $this->displayBlock('ProjectSearch', $context, $blocks);
        // line 462
        echo "                    </div>
                </div>
                            
            </div><!-- end of .map-wrapper -->
            
            <a name=\"id_about\"></a>
        </section>
    </div>
</div>

<div class=\"clear\"></div>

<div class=\"content\">
    <h1 class=\"decoration text-center about\"><span class=\"nobacgr\">About</span></h1>
    <div class=\"about_block\">
        <p class=\"about_cont\"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu mauris venenatis egestas. Phasellus bibendum placerat metus, sed molestie magna semper eget. Sed sit amet dui felis, tempus porttitor justo.</strong></p>
        <div class=\"row-fluid folders\">
            <div class=\"span4\">
                <div class=\"folder_bordered\">
                    <div class=\"folder\"><a href=\"#\"><img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder1.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                    <div class=\"folder\"><h3 class=\"nomarg text-center\">Step 1:</h3></div>
                    <div class=\"folder\"><p class=\"green text-center\"><strong>Choose a project</strong></p></div>
                </div>
                <div class=\"folder\"><img src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder_n.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            </div>
            <div class=\"span4\">
                <div class=\"folder_bordered\">
                    <div class=\"folder\"><a href=\"#\"><img src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder2.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                    <div class=\"folder\"><h3 class=\"nomarg text-center\">Step 2:</h3></div>
                    <div class=\"folder\"><p class=\"green text-center\"><strong>Back a project</strong></p></div>
                </div>
                <div class=\"folder\"><img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder_n.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            </div>
            <div class=\"span4\">
                <div class=\"folder_bordered\">
                    <div class=\"folder\"><a href=\"#\"><img src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder3.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                    <div class=\"folder\"><h3 class=\"nomarg text-center\">Step 3:</h3></div> <a name=\"id3\"></a>
                    <div class=\"folder\"><p class=\"green strong text-center\"><strong>Receive a gift</strong></p></div>

                </div>
                <div class=\"folder\"><img src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder_n.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            </div>

        </div>
    </div>

<h1 class=\"decoration text-center proj\"><span class=\"nobacgr\"> My Projects</span></h1>

    <section class=\"section content\" id=\"portfolio-list\">

        <div class=\"wrapper row-fluid projects font_p\" id=\"contentWrapper\">
            <div class=\"zone-content clearfix\">

                <div class=\"\">

           

                </div>

                <div class=\"portfolio-container\">

              ";
        // line 523
        $this->displayBlock('UserProjects', $context, $blocks);
        // line 525
        echo " 



                </div>



            </div><!-- end of .zone-content -->
        </div><!-- end of .content-wrapper -->

    </section>

<div class=\"btns\">
    <div class=\"btn-toolbar text-center\">
        <div class=\"decoration text-center proj\">
                    <div class=\"btn-group nobacgr\">
                        <button class=\"btn\"><span class=\"gray\">1</span></button>
                        <button class=\"btn mleft10\">2</button>
                        <button class=\"btn mleft10\">3</button>
                        <button class=\"btn mleft10\">4</button>
                        <button class=\"btn mleft10\">5</button>
                    </div>
                    <a name=\"id_reg\" id=\"registr\"></a>
        </div>

    </div>

</div>
<h1 class=\"decoration text-center proj\"><span class=\"nobacgr\">Create Your Project</span></h1>
<div class=\"create_projects\">
";
        // line 556
        $this->displayBlock('CreateProject', $context, $blocks);
        // line 558
        echo " 
</div>


<h1 class=\"decoration text-center conts\"><span class=\"nobacgr\">Contact Us</span></h1>

<div class=\"contacts\">
    <div class=\"bborder\">
        <p><strong>Send Us a <span class=\"green\">Message</span></strong></p>
    </div>
    <form id=\"contact-us-form\" class=\"row-fluid message\" data-ajax=\"true\">
        <div class=\"controls controls-row\">
            <input class=\"inputp search-query span4\" type=\"text\" name=\"name\" placeholder=\"Name*\">
            <input class=\"inputp search-query span4\" type=\"text\" name=\"email\" placeholder=\"Email*\">
            <input class=\"inputp search-query span4\" type=\"text\" name=\"website\" placeholder=\"Website*\">
            <div class=\"clear\"></div>
            <textarea id=\"redex\" name=\"message\" class=\"inputp search-query span12\"  rows=\"5\" placeholder=\"Project description\"></textarea>
            <div class=\"clear\"></div>
            <div class=\"tmargin20\">
                <button type=\"button\" class=\"btn\" name=\"submit\" value=\"submit\" id=\"contact_submit\"><strong>Send Message</strong></button>
            </div>
            <div id=\"error_placeholder\" class=\"form-message text-green\"></div>
        </div>
    </form>
</div>

<div class=\"decoration text-center line_decor\"></div>
<div class=\"row-fluid contacts_row\">
    <div class=\"span3\">
        <h4>Address Details:</h4>
        <div class=\"cont\">
            <div class=\"inline-table \"><img src= \"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_street.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"inline-table mleft10\">
                <span>1234 Street </span>
                <p>Lorem Ipsum, CA 91919</p>
            </div>
            <div class=\"clear clrbot\"></div>
            <div class=\"inline-table\"><img src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_phone.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"inline-table mleft10\">
                <span>Phone: +1 123 123-123-123</span>
                <p>Fax: +1 123-123-123</p>
            </div>
            <div class=\"clear clrbot\"></div>
            <div class=\"inline-table\"><img src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_email.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"inline-table mleft10\">
                <span>E-mail: <span class=\"green\">email@email.by</span></span>
                <p>Website: <span class=\"green\">www.example.com</span></p>
            </div>
        </div>
    </div>
    <div class=\"span3\">
        <h4>Opening Hours:</h4>
        <div class=\"cont contp\">
            <div class=\"inline\">
                <p><strong>Monday-Friday:</strong></p>
                <p><strong>Saturday:</strong></p>
                <p><strong>Sunday:</strong></p>
            </div>
            <div class=\"inline mleft10\">
                <p>9am - 5pm</p>
                <p>10am - 3pm</p>
                <p>Closed</p>
            </div>
        </div>
    </div>
    <div class=\"span6 clearr\">
        <div class=\"paddin_map\"><div class=\"map\">
                <iframe width=\"100%\" height=\"200\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=Ottawa,+ON,+Canada&amp;sll=45.421438,-75.693569&amp;sspn=0.017531,0.042272&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9E%D1%82%D1%82%D0%B0%D0%B2%D0%B0,+%D0%9E%D1%82%D1%82%D0%B0%D0%B2%D0%B0+%D0%94%D0%B8%D0%B2%D0%B8%D0%B6%D0%B5%D0%BD,+%D0%9E%D0%BD%D1%82%D0%B0%D1%80%D0%B8%D0%BE,+%D0%9A%D0%B0%D0%BD%D0%B0%D0%B4%D0%B0&amp;t=m&amp;ll=45.421528,-75.697603&amp;spn=0.012049,0.034332&amp;z=14&amp;output=embed\"></iframe><br />
        </div>
        </div>

    </div>

</div>


</div>
<a name=\"id_partn\"></a>
<div class=\"partner_bott\">
    <div class=\"partners\">
        <h5 class=\"decoration text-center\"><span class=\"nobacgr_whit\">OUR PARTNERS</span></h5>
        <div class=\"partn_pics\">
                    <a href=\"http://themeforest.net/\" class=\"partner\"><img src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://activeden.net/\" class=\"partner\"><img src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_2.png"), "html", null, true);
        echo "\" alt=\"\" ></a>
                    <a href=\"http://audiojungle.net/\" class=\"partner\"><img src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://graphicriver.net/\" class=\"partner\"><img src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_4.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://codecanyon.net/\" class=\"partner\"><img src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_5.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://3docean.net/\" class=\"partner\"><img src= \"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_6.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://videohive.net/\" class=\"partner\"><img src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_7.png"), "html", null, true);
        echo "\" alt=\"\"></a>
         </div>
        </div>
    </div>
</div>
</div>

<div id=\"footer\">
    <div class=\"footer\">
        <div class=\"row-fluid\">
            <div class=\"span3\">
                <h2>FUNDER</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu mauris venenapus</p>
            </div>
            <div class=\"span3 foot\">
                <h4>Recent Tweets</h4>
                <div class=\"tmargin20\">
                    <img class=\"fleft tw\" src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social_tweet.png"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"mleft40\">
                        <span>1234 Street </span>
                        <span>4r6yg 456hv  </span>
                        <span>Lorem ipus ex vixc ilflf nfnfoof wrfoo rcgetg  erger </span>
                        <br>
                        <a class=\"green\">http://www.envato.com</a>
                    </div>
                    <div class=\"clear foot\"></div>
                    <img class=\"fleft tw\" src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social_tweet.png"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\" mleft40\">
                        <span>1234 Street </span>
                        <span>4r6yg 456hv  </span>
                        <span>Lorem ipus ex vixc ilflf n </span>
                        <br>
                        <a class=\"green\">http://www.envato.com</a>
                    </div>
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
              <div class=\"fleft\">� All Rights Reserved. Design by UOU Design.</div>
              <div class=\"fright\">
                <ul id=\"social_b\" class=\"socialbott inline\">
                    <li><a href=\"https://twitter.com/\" target=\"_blank\" original-title=\"twitter\"><img src=\"";
        // line 721
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_face.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"https://plus.google.com/\" target=\"_blank\" original-title=\"googleplus\"><img src=\"";
        // line 722
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_g.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"https://www.facebook.com/\" title=\"facebook\" target=\"_blank\"><img src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_tw.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_blank\" original-title=\"linkedin\"><img src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_in.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_self\" original-title=\"mail\"><img src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_p.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_self\" original-title=\"mail\"><img src=\"";
        // line 726
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_ball.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                </ul>
              </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</div>

                       <script> 
        
        \$( document ).ready(function() {
                var rows = \$('table.someclass tr');
            
               rows.filter('.three').hide(1000);
             

               
  \$('Select').on('change', function() {

if (this.value===\"Technical\"){
    rows.filter('.one').show(1000);
              rows.filter('.two').hide(1000);
               rows.filter('.three').hide(1000);
}
if (this.value===\"Human Resources\"){
    rows.filter('.one').hide(1000);
              rows.filter('.two').hide(1000);
               rows.filter('.three').show(1000);
}
if (this.value===\"Financial\"){
    rows.filter('.one').hide(1000);
              rows.filter('.two').show(1000);
               rows.filter('.three').hide(1000);
}

});
});
</script>
    <script>
        /* <![CDATA[ */
        (function(\$) {
            \$(function() {

                \$('select').selectbox();

                \$('#add').click(function(e) {
                    \$(this).parents('div.section').append('<br /><br /><select><option>-- ???????? --</option><option>????? 1</option><option>????? 2</option><option>????? 3</option><option>????? 4</option><option>????? 5</option></select>');
                    \$('select').selectbox();
                    e.preventDefault();
                })

                \$('#add2').click(function(e) {
                    var options = '';
                    for (i = 1; i <= 5; i++) {
                        options += '<option>Option ' + i + '</option>';
                    }
                    \$(this).parents('div.section').find('select').each(function() {
                        \$(this).append(options);
                    })
                    \$('select').trigger('refresh');
                    e.preventDefault();
                })

                \$('#che').click(function(e) {
                    \$(this).parents('div.section').find('option:nth-child(5)').attr('selected', true);
                    \$('select').trigger('refresh');
                    e.preventDefault();
                })

            })
        })(jQuery)
        /* ]]> */

    </script>
    <script>
        /* <![CDATA[ */
        \$(document).ready(function(){
            \$(\"#toggl\").click(function(){
                \$(\"#panel\").slideToggle(\"slow\");
                \$(\"#home-page-featured\").slideToggle(\"slow\");
                \$(this).toggleClass('latest_top');
            });
        });
        /* ]]> */
        </script>
<script>
    /* <![CDATA[ */
    jQuery('#advanced-search').hide();
    jQuery('#advanced-search-button').click(function(event) {
        /* Preventing default link action */
        event.preventDefault();
        jQuery('#default-search').slideToggle('fast');
        jQuery('#advanced-search').slideToggle('fast');
        jQuery(this).toggleClass('expanded');
    });
    /* ]]> */

</script>
<script>
    /* <![CDATA[ */
    \$(function() {

        var availableTags = [
            \"ActionScript\",
            \"AppleScript\",
            \"Asp\",
            \"BASIC\",
            \"C\",
            \"C++\",
            \"Clojure\",
            \"COBOL\",
            \"ColdFusion\",
            \"Erlang\",
            \"Fortran\",
            \"Groovy\",
            \"Haskell\",
            \"Java\",
            \"JavaScript\",
            \"Lisp\",
            \"Perl\",
            \"PHP\",
            \"Python\",
            \"Ruby\",
            \"Scala\",
            \"Scheme\"
        ];
        \$( \"#autocomplete\" ).autocomplete({
            source: availableTags
        });

        // Hover states on the static widgets
        \$( \"#dialog-link, #icons li\" ).hover(
                function() {
                    \$( this ).addClass( \"ui-state-hover\" );
                },
                function() {
                    \$( this ).removeClass( \"ui-state-hover\" );
                }
        );
    });
    /* ]]> */

</script>
<script>
    /* <![CDATA[ */
    function scrollToAnchor(aid){
        var aTag = \$(\"a[name='\"+ aid +\"']\");
        \$('html,body').animate({scrollTop: aTag.offset().top},'slow');
    }
    \$(\"#link\").click(function() {
        scrollToAnchor('id3');
    });
    \$(\"#link_about\").click(function() {
        scrollToAnchor('id_about');
    });
    \$(\"#link_reg\").click(function() {
        scrollToAnchor('id_reg');
    });
    \$(\"#link_contact\").click(function() {
        scrollToAnchor('id_cont');
    });
    \$(\"#link_home\").click(function() {
        scrollToAnchor('id_home');
    });
    \$(\"#link_partners\").click(function() {
        scrollToAnchor('id_partn');
    });
    \$(\"#link_b\").click(function() {
        scrollToAnchor('id3');
    });
    \$(\"#link_about_b\").click(function() {
        scrollToAnchor('id_about');
    });
    \$(\"#link_reg_b\").click(function() {
        scrollToAnchor('id_reg');
    });
    \$(\"#link_contact_b\").click(function() {
        scrollToAnchor('id_cont');
    });
    \$(\"#link_partners_b\").click(function() {
        scrollToAnchor('id_partn');
    });
    /* ]]> */


</script>
<script>
    /* <![CDATA[ */
    function hexFromRGB(r, g, b) {
        var hex = [
            r.toString( 16 ),
            g.toString( 16 ),
            b.toString( 16 )
        ];
        \$.each( hex, function( nr, val ) {
            if ( val.length === 1 ) {
                hex[ nr ] = \"0\" + val;
            }
        });
        return hex.join( \"\" ).toUpperCase();
    }
    function refreshSwatch() {
        var red = \$( \"#project1\" ).slider( \"value\" ),
                green = \$( \"#project2\" ).slider( \"value\" ),
                blue = \$( \"#project3\" ).slider( \"value\" ),
                blues = \$( \"#project4\" ).slider( \"value\" ),
                hex = hexFromRGB( red, green, blue);
        \$( \"#swatch\" ).css( \"background-color\", \"#\" + hex );

    }
    \$(function() {
        \$( \"#project1, #project2, #project3, #project4, #project5, #project6, #project7, #project8, #project9, #project10, #project11, #project12\" ).slider({
            orientation: \"horizontal\",
            range: \"min\",
            disabled: true,
            max: 100,
            slide: refreshSwatch,
            change: refreshSwatch
        });

        \$.each(\$('.project_value'), function(k,v){
            var value = 100 * Number(\$(v).text())/Number(\$(\$(v).attr('href')).attr('value'));
            value = Math.floor(value);
            \$(\$(v).attr('href')).slider(\"value\", value);
            \$(\$(v).attr('href')).find(\".ui-slider-handle\").text(value+'%');
        });

    });
    /* ]]> */

</script>

<script src= \"";
        // line 958
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.selectbox.min.js"), "html", null, true);
        echo "\"></script>
<script src= \"";
        // line 959
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 960
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 961
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-uii.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 962
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 964
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 965
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 966
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 967
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

<!--[if IE 8]>
<script src=\"js/css3-mediaqueries.js\"></script>
<![endif]-->
<script>
    /* <![CDATA[ */
    \$(document).ready(function(){
        var slider = \$(\".slider\").slider({
            change: function () {
/*                var value = \$(this).slider(\"option\", \"value\");
                \$(this).find(\".ui-slider-handle\").text(value+'%');*/
            },
            slide: function () {
/*                var value = \$(this).slider(\"option\", \"value\");
                \$(this).find(\".ui-slider-handle\").text(value+\"%\");*/
            }
        });
/*        slider.each(function(index){
            var el = slider.get(index);
            var value = \$(el).slider(\"value\");
            \$(el).slider(\"value\", value);
        });*/
    });
    /* ]]> */
</script>
<script>
    /* <![CDATA[ */
    \$(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
        \$(\".group1\").colorbox({rel:'nofollow',scalePhotos:'false'});

    });
    /* ]]> */

</script>
<script>
    /* <![CDATA[ */
    \$(function() {
        \$('input, textarea').placeholder();
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


</body>

<!-- Mirrored from 188.226.241.135/funder/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 21:53:16 GMT -->
</html>



                    ";
    }

    // line 403
    public function block_ProjectSearch($context, array $blocks = array())
    {
        // line 404
        echo "                        
                        <div id=\"Textus\">
                        <div class=\"clear\">
                        <p>WELCOME TO FUNDER</p>
                        </div>
                        <div class=\"clear\">
                        <p>AMAZING CROWDFUNDING SITE</p>
                        </div>
                        </div>
                        <ul>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/01.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/02.jpg"), "html", null, true);
        echo "\"  class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/03.jpg"), "html", null, true);
        echo "\"  class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/04.jpg"), "html", null, true);
        echo "\"  class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/05.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/06.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/07.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/08.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/09.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/10.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/12.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/13.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/14.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                        </ul>
                        <ul>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/14.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/15.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/16.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/17.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/18.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/19.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/20.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/21.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/22.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/23.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/01.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/02.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/03.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>

                        </ul>
                        <ul>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/16.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/07.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/08.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/10.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/11.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/02.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/03.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/13.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/14.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/15.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/17.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/18.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/19.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>

                        </ul>
                        <!-- / container -->
                         ";
    }

    // line 523
    public function block_UserProjects($context, array $blocks = array())
    {
        // line 524
        echo "
";
    }

    // line 556
    public function block_CreateProject($context, array $blocks = array())
    {
        // line 557
        echo "
";
    }

    public function getTemplateName()
    {
        return "TimeToStartProjectBundle:Project:Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1382 => 557,  1379 => 556,  1374 => 524,  1371 => 523,  1362 => 457,  1358 => 456,  1354 => 455,  1350 => 454,  1346 => 453,  1342 => 452,  1338 => 451,  1334 => 450,  1330 => 449,  1326 => 448,  1322 => 447,  1318 => 446,  1314 => 445,  1307 => 441,  1303 => 440,  1299 => 439,  1295 => 438,  1291 => 437,  1287 => 436,  1283 => 435,  1279 => 434,  1275 => 433,  1271 => 432,  1267 => 431,  1263 => 430,  1259 => 429,  1253 => 426,  1249 => 425,  1245 => 424,  1241 => 423,  1237 => 422,  1233 => 421,  1229 => 420,  1225 => 419,  1221 => 418,  1217 => 417,  1213 => 416,  1209 => 415,  1205 => 414,  1193 => 404,  1190 => 403,  1118 => 967,  1114 => 966,  1110 => 965,  1106 => 964,  1102 => 963,  1098 => 962,  1094 => 961,  1090 => 960,  1086 => 959,  1082 => 958,  847 => 726,  843 => 725,  839 => 724,  835 => 723,  831 => 722,  827 => 721,  775 => 672,  763 => 663,  743 => 646,  739 => 645,  735 => 644,  731 => 643,  727 => 642,  723 => 641,  719 => 640,  677 => 601,  668 => 595,  659 => 589,  626 => 558,  624 => 556,  591 => 525,  589 => 523,  565 => 502,  557 => 497,  550 => 493,  543 => 489,  536 => 485,  529 => 481,  508 => 462,  506 => 403,  454 => 354,  448 => 353,  411 => 319,  405 => 318,  368 => 284,  362 => 283,  323 => 247,  317 => 246,  279 => 211,  272 => 209,  238 => 178,  166 => 109,  162 => 108,  158 => 107,  154 => 106,  150 => 105,  146 => 104,  98 => 59,  63 => 27,  59 => 26,  55 => 25,  50 => 23,  44 => 20,  25 => 3,  22 => 1,);
    }
}
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <!-- Mirrored from 188.226.241.135/funder/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 21:52:29 GMT -->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>FUNDER - Bootstrap Crowdfunding Site</title>*/
/*     <meta name="description" content="">*/
/*     <meta name="keywords" content="">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="author" content="">*/
/* */
/*     <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,200,300' rel='stylesheet' type='text/css'>*/
/*     */
/*    */
/*         <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">*/
/*     */
/*   */
/*     <link href="{{asset('css/style.css')}}" rel="stylesheet">*/
/*     */
/*     <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('css/resp.css')}}"  rel="stylesheet">*/
/*     <link href="{{asset('css/colorbox.css')}}" rel="stylesheet">*/
/* */
/*     <link rel="shortcut icon" href="favicon.html" />*/
/*     <link rel="apple-touch-icon" href="img/touch-icon.html" />*/
/*     <link rel="image_src" href="img/touch-icon.html" />*/
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
/*             margin-bottom: 15px;*/
/*         }*/
/*         .zone {*/
/*             background-color: #727272;*/
/*             filter: alpha(Opacity=70);*/
/*         }*/
/*         .black {*/
/*             background-color: #727272;*/
/*             filter: alpha(Opacity=70);*/
/*         }*/
/*     </style>*/
/*     <![endif]-->*/
/* */
/*     <script src= "{{asset('js/jquery.js')}}"></script>*/
/*     <script>*/
/*         /* <![CDATA[ *//* */
/*         $(window).scroll(function fade() {*/
/*             if ($(window).scrollTop() > 400) {*/
/*                 $("#navtop").css("display", "block");*/
/*             }*/
/*             else {*/
/*                 $("#navtop").css("display", "none");*/
/*             }*/
/*         });*/
/*         /* ]]> *//* */
/* */
/*     </script>*/
/* */
/* </head>*/
/* */
/* <body>*/
/*     */
/* <div id="header" class="header">*/
/*     <a name="id_home"></a>*/
/*         <div class="width titul">*/
/*             <div class="reg inline">*/
/*                 </div>*/
/*                </div>*/
/*           <div>*/
/*              <div>*/
/*         */
/*                  <div>*/
/*              */
/*                      */
/*                  </div>*/
/* */
/*                  <br>*/
/* */
/*        <div>*/
/* */
/*         </div>*/
/*         <div>*/
/*               */
/*   */
/*             <div class="social inline fright">*/
/*                 <ul id="social">*/
/*                 <li class="bleft inline">*/
/*                     <ul style="margin-left: 10px">*/
/*                         <li><a href="https://www.facebook.com/" target="_blank"  original-title="twitter"><img src= "{{asset('img/social/icon_header_face.png')}}" alt=""></a></li>*/
/*                         <li><a href="https://plus.google.com/" target="_blank"  original-title="googleplus"><img src="{{asset('img/social/icon_header_g.png')}}" alt=""></a></li>*/
/*                         <li><a href="https://twitter.com/" title="facebook" target="_blank" ><img src= "{{asset('img/social/icon_header_tw.png')}}" alt=""></a></li>*/
/*                         <li><a href="http://www.linkedin.com/" target="_blank" original-title="linkedin"><img src= "{{asset('img/social/icon_header_in.png')}}" alt=""></a></li>*/
/*                         <li><a href="johndoe%40domainname.html" target="_self" original-title="mail"><img src="{{asset('img/social/icon_header_p.png')}}" alt=""></a></li>*/
/*                         <li><a href="johndoe%40domainname.html" target="_self" original-title="mail"><img src= "{{asset('img/social/icon_header_ball.png')}}" alt=""></a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                     <li class="bleft first socialz"><a class="active" href="#">EN</a></li>*/
/*                     <li class="bleft socialz"><a href="#">FR</a></li>*/
/*                     <li class="bleft socialz"><a href="#">IT</a></li>*/
/*                     <li class="bleft last socialz"><a href="#">DE</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="clear"></div>*/
/*         */
/*         <div class="navigate">*/
/*             <div class="width">*/
/*                 <div class="logo inline">*/
/*                     */
/*                 </div>*/
/* */
/*                 <div class="navigation inline">*/
/*                     <ul class="nav inline menuleft">*/
/*                         <li class="active"><a class="bleft" href="#">HOME</a></li>*/
/*                         <li><a id="link_about" class="bleft" href="#">ABOUT</a></li>*/
/*                         <li><a id="link" class="bleft" href="#">PROJECTS</a></li>*/
/*                         <li><a id="link_reg" class="bleft" href="#">Create Project</a></li>*/
/*                         <li><a id="link_contact" class="bleft" href="#">CONTACTS</a></li>*/
/*                         <li><a id="link_partners" class="bleft last" href="#">PARTNERS</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*             <div id="header_select">*/
/*                 <select id="dynamic_select">*/
/*                     <option value="" selected>Select A Page</option>*/
/*                     <option value="index-2.html#id_about">About</option>*/
/*                     <option value="index-2.html#id3">Projects</option>*/
/*                     <option value="index-2.html#id_reg">Registration</option>*/
/*                     <option value="index-2.html#id_cont">Contacts</option>*/
/*                     <option value="index-2.html#id_partn">Partners</option>*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/*        */
/* */
/*     </div>*/
/* <div id="navtop" class="width navigate" style="position: fixed;  display: none; top: 0px; left: 0px;right: 0px;z-index: 99999999999999999;">*/
/*     <div class="navigation">*/
/*         <ul class="nav inline menuleft">*/
/*             <li class="active"><a class="bleft" id="link_home" href="#">HOME</a></li>*/
/*             <li><a id="link_about_b" class="bleft" href="#">ABOUT</a></li>*/
/*             <li><a id="link_b" class="bleft" href="#">PROJECTS</a></li>*/
/*             <li><a id="link_reg_b" class="bleft" href="#">Create Project</a></li>*/
/*             <li><a id="link_contact_b" class="bleft" href="#">CONTACTS</a></li>*/
/*             <li><a id="link_partners_b" class="bleft last" href="#">PARTNERS</a></li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="contentt">*/
/* <div class="container-fluid line">*/
/*  <div class="slides">*/
/*          */
/*       */
/* */
/* */
/*     </div>*/
/*     <div class="slides">*/
/*             <div class="search_top">*/
/*                 <div class="search" id="searchh">*/
/*                      <form method="post" action="{{ path('search') }}">*/
/*                     <span class="white"><strong>Find a project:</strong></span>*/
/*                     <input id="autocomplete" title="" type="text" class="span7 search-query" name="s">*/
/*                     <input type="submit" class="submit" value="search" name="submit">*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*     </div>*/
/* */
/*     <div class="top_widgets black">*/
/*         <section class="black">*/
/*             <div class="search-wrapper clearfix">*/
/*                 <div class="zone clearfix">*/
/*                 <div class="searchr block">*/
/*                 <div id="default-search" >*/
/* */
/*                 </div>*/
/*                 <div id="advanced-search"  style="display: none;">*/
/* */
/*                 <div class="row-fluid projects font_p" id="top_slide">*/
/*                 <div id="myCarousel" class="carousel slide">*/
/*                 <div class="carousel-inner content">*/
/*                 <div class="item active">*/
/*                     <div class="span4 bordered">*/
/*                         <div class="folder"><h4 class="text-center title"><a href="projects.html#proj7">Projects title goes here</a></h4></div>*/
/*                         <div class="proj_name">*/
/*                             <div class="clear"></div>*/
/*                             <span class="fleft author">Author Name</span>*/
/*                             <table class="icons">*/
/*                                 <tbody>*/
/*                                 <tr>*/
/*                                     <td class="icos_proj_sm bleft"><a class="group1" href= "{{asset('img/proj1.jpg')}}" title=""><img src= "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                     */
/*                                     <td class="icos_proj_sm bleft"><a href="projects.html#proj7"><img src= "{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                       </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                         <div class="folder border"><a href="projects.html#proj7"><div class="author_proj proj_1" ></div></a></div>*/
/*                         <div class="folder lorem lines">*/
/*                             <div id="project7" value="645" class="slider"></div>*/
/*                         </div>*/
/*                         <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                         <div class="folder price topbordered">*/
/*                             <div class="span4">*/
/*                                 <strong class="green"><span>$</span> <span class="project_value" href="#project7">26</span></strong>*/
/*                                 <p>pledged</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>80</strong>*/
/*                                 <p>backers</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>25</strong>*/
/*                                 <p>days to go</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                     <div class="span4 bordered">*/
/*                         <div class="folder"><h4 class="text-center title"><a href="projects.html#proj9">Projects title goes here</a></h4></div>*/
/*                         <div class="proj_name">*/
/*                             <div class="clear"></div>*/
/*                             <span class="fleft author">Author Name</span>*/
/*                             <table class="icons">*/
/*                                 <tbody>*/
/*                                 <tr> */
/*                                     <td class="icos_proj_sm bleft"><a class="group1" href= "{{asset('img/proj3.jpg')}}" title=""><img src= "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                     <td class="icos_proj_sm bleft"><a href="projects.html#proj9"><img src="{{asset('img/icon_lock.png')}}"  alt=""></a></td>*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                         <div class="folder border"><a href="projects.html#proj9"><div class="author_proj proj_3"></div></a></div>*/
/*                         <div class="folder lorem lines">*/
/*                             <div id="project9" value="765" class="slider"></div>*/
/*                         </div>*/
/*                         <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                         <div class="folder price topbordered">*/
/*                             <div class="span4">*/
/*                                 <strong class="green"><span>$</span><span class="project_value" href="#project9">154</span></strong>*/
/*                                 <p>pledged</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>80</strong>*/
/*                                 <p>backers</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>25</strong>*/
/*                                 <p>days to go</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="item">*/
/*                     <div class="span4 bordered">*/
/*                         <div class="folder"><h4 class="text-center title"><a href="projects.html#proj10">Projects title goes here</a></h4></div>*/
/*                         <div class="proj_name">*/
/*                             <div class="clear"></div>*/
/*                             <span class="fleft author">Author Name</span>*/
/*                             <table class="icons">*/
/*                                 <tbody>*/
/*                                 <tr>*/
/*                                     <td class="icos_proj_sm bleft"><a class="group1" href= "{{asset('img/proj4.jpg')}}" title=""><img src= "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                     <td class="icos_proj_sm bleft"><a href="projects.html#proj10"><img src= "{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                         <div class="folder border"><a href="projects.html#proj10"><div class="author_proj proj_4"></div></a></div>*/
/*                         <div class="folder lorem lines">*/
/*                             <div id="project10" value="125" class="slider"></div>*/
/*                         </div>*/
/*                         <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                         <div class="folder price topbordered">*/
/*                             <div class="span4">*/
/*                                 <strong class="green"><span>$</span><span class="project_value" href="#project10">98</span></strong>*/
/*                                 <p>pledged</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>80</strong>*/
/*                                 <p>backers</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>25</strong>*/
/*                                 <p>days to go</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="span4 bordered">*/
/*                         <div class="folder"><h4 class="text-center title"><a href="projects.html#proj11">Projects title goes here</a></h4></div>*/
/*                         <div class="proj_name">*/
/*                             <div class="clear"></div>*/
/*                             <span class="fleft author">Author Name</span>*/
/*                             <table class="icons">*/
/*                                 <tbody>*/
/*                                 <tr>*/
/*                                     <td class="icos_proj_sm bleft"><a class="group1" href= "{{asset('img/proj5.jpg')}}" title=""><img src= "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                     <td class="icos_proj_sm bleft"><a href="projects.html#proj11" ><img src= "{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                         <div class="folder border"><a href="projects.html#proj11"><div class="author_proj proj_5"></div></a></div>*/
/*                         <div class="folder lorem lines">*/
/*                             <div id="project11" value="876" class="slider"></div>*/
/*                         </div>*/
/*                         <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                         <div class="folder price topbordered">*/
/*                             <div class="span4">*/
/*                                 <strong class="green"><span>$</span><span class="project_value" href="#project11">76</span></strong>*/
/*                                 <p>pledged</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>80</strong>*/
/*                                 <p>backers</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>25</strong>*/
/*                                 <p>days to go</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="span4 bordered">*/
/*                         <div class="folder"><h4 class="text-center title"><a href="projects.html#proj12">Projects title goes here</a></h4></div>*/
/*                         <div class="proj_name">*/
/*                             <div class="clear"></div>*/
/*                             <span class="fleft author">Author Name</span>*/
/*                             <table class="icons">*/
/*                                 <tbody>*/
/*                                 <tr>*/
/*                                     <td class="icos_proj_sm bleft"><a class="group1" href=  "{{asset('img/proj6.jpg')}}" title=""><img src= "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                     <td class="icos_proj_sm bleft"><a href="projects.html#proj12"><img src= "{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                         <div class="folder border"><a href="projects.html#proj12"><div class="author_proj proj_6"></div></a></div>*/
/*                         <div class="folder lorem lines">*/
/*                             <div id="project12" value="875" class="slider"></div>*/
/*                         </div>*/
/*                         <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                         <div class="folder price topbordered">*/
/*                             <div class="span4">*/
/*                                 <strong class="green"><span>$</span><span class="project_value" href="#project12">200</span></strong>*/
/*                                 <p>pledged</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>80</strong>*/
/*                                 <p>backers</p>*/
/*                             </div>*/
/*                             <div class="span4 bleft">*/
/*                                 <strong>25</strong>*/
/*                                 <p>days to go</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 </div>*/
/*                 <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>*/
/*                 <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>*/
/*                 </div>*/
/* */
/*                 </div>*/
/* */
/* */
/*                 </div>*/
/*                 <div class="advanced-search-control">*/
/*                     <a id="advanced-search-button" class="advanced-search-button fright adv_search latest expanded"></a>*/
/*                 </div>*/
/*                 </div>*/
/* */
/*                 </div><!-- end of .zone-search -->*/
/*             </div><!-- end of .search-wrapper -->*/
/* */
/*             <div class="map-wrapper">*/
/* */
/*                 <div id="map" class="map" style="position: relative; overflow: hidden; -webkit-transform: translateZ(0);height: 465px">*/
/*                     <div id="home-page-featured">*/
/*                         */
/*                         {% block ProjectSearch %}*/
/*                         */
/*                         <div id="Textus">*/
/*                         <div class="clear">*/
/*                         <p>WELCOME TO FUNDER</p>*/
/*                         </div>*/
/*                         <div class="clear">*/
/*                         <p>AMAZING CROWDFUNDING SITE</p>*/
/*                         </div>*/
/*                         </div>*/
/*                         <ul>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/01.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/02.jpg')}}"  class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/03.jpg')}}"  class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/04.jpg')}}"  class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/05.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/06.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/07.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/08.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/09.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/10.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/12.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/13.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/14.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                         </ul>*/
/*                         <ul>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/14.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/15.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/16.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/17.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/18.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/19.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/20.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/21.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/22.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/23.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/01.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/02.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/03.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/* */
/*                         </ul>*/
/*                         <ul>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/16.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/07.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/08.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/10.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/11.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/02.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/03.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/13.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/14.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/15.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/17.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/18.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/*                             <li><a href="#"><img width="155" height="155" src="{{asset('img/slide/19.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt=""></a></li>*/
/* */
/*                         </ul>*/
/*                         <!-- / container -->*/
/*                          {%  endblock  %}*/
/*                     </div>*/
/*                 </div>*/
/*                             */
/*             </div><!-- end of .map-wrapper -->*/
/*             */
/*             <a name="id_about"></a>*/
/*         </section>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="clear"></div>*/
/* */
/* <div class="content">*/
/*     <h1 class="decoration text-center about"><span class="nobacgr">About</span></h1>*/
/*     <div class="about_block">*/
/*         <p class="about_cont"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu mauris venenatis egestas. Phasellus bibendum placerat metus, sed molestie magna semper eget. Sed sit amet dui felis, tempus porttitor justo.</strong></p>*/
/*         <div class="row-fluid folders">*/
/*             <div class="span4">*/
/*                 <div class="folder_bordered">*/
/*                     <div class="folder"><a href="#"><img src="{{asset('img/folder1.png')}}" alt=""></a></div>*/
/*                     <div class="folder"><h3 class="nomarg text-center">Step 1:</h3></div>*/
/*                     <div class="folder"><p class="green text-center"><strong>Choose a project</strong></p></div>*/
/*                 </div>*/
/*                 <div class="folder"><img src="{{asset('img/folder_n.png')}}" alt=""></div>*/
/*             </div>*/
/*             <div class="span4">*/
/*                 <div class="folder_bordered">*/
/*                     <div class="folder"><a href="#"><img src="{{asset('img/folder2.png')}}" alt=""></a></div>*/
/*                     <div class="folder"><h3 class="nomarg text-center">Step 2:</h3></div>*/
/*                     <div class="folder"><p class="green text-center"><strong>Back a project</strong></p></div>*/
/*                 </div>*/
/*                 <div class="folder"><img src="{{asset('img/folder_n.png')}}" alt=""></div>*/
/*             </div>*/
/*             <div class="span4">*/
/*                 <div class="folder_bordered">*/
/*                     <div class="folder"><a href="#"><img src="{{asset('img/folder3.png')}}" alt=""></a></div>*/
/*                     <div class="folder"><h3 class="nomarg text-center">Step 3:</h3></div> <a name="id3"></a>*/
/*                     <div class="folder"><p class="green strong text-center"><strong>Receive a gift</strong></p></div>*/
/* */
/*                 </div>*/
/*                 <div class="folder"><img src="{{asset('img/folder_n.png')}}" alt=""></div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* <h1 class="decoration text-center proj"><span class="nobacgr"> My Projects</span></h1>*/
/* */
/*     <section class="section content" id="portfolio-list">*/
/* */
/*         <div class="wrapper row-fluid projects font_p" id="contentWrapper">*/
/*             <div class="zone-content clearfix">*/
/* */
/*                 <div class="">*/
/* */
/*            */
/* */
/*                 </div>*/
/* */
/*                 <div class="portfolio-container">*/
/* */
/*               {% block UserProjects %}*/
/* */
/* {% endblock %} */
/* */
/* */
/* */
/*                 </div>*/
/* */
/* */
/* */
/*             </div><!-- end of .zone-content -->*/
/*         </div><!-- end of .content-wrapper -->*/
/* */
/*     </section>*/
/* */
/* <div class="btns">*/
/*     <div class="btn-toolbar text-center">*/
/*         <div class="decoration text-center proj">*/
/*                     <div class="btn-group nobacgr">*/
/*                         <button class="btn"><span class="gray">1</span></button>*/
/*                         <button class="btn mleft10">2</button>*/
/*                         <button class="btn mleft10">3</button>*/
/*                         <button class="btn mleft10">4</button>*/
/*                         <button class="btn mleft10">5</button>*/
/*                     </div>*/
/*                     <a name="id_reg" id="registr"></a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* <h1 class="decoration text-center proj"><span class="nobacgr">Create Your Project</span></h1>*/
/* <div class="create_projects">*/
/* {% block CreateProject %}*/
/* */
/* {% endblock %} */
/* </div>*/
/* */
/* */
/* <h1 class="decoration text-center conts"><span class="nobacgr">Contact Us</span></h1>*/
/* */
/* <div class="contacts">*/
/*     <div class="bborder">*/
/*         <p><strong>Send Us a <span class="green">Message</span></strong></p>*/
/*     </div>*/
/*     <form id="contact-us-form" class="row-fluid message" data-ajax="true">*/
/*         <div class="controls controls-row">*/
/*             <input class="inputp search-query span4" type="text" name="name" placeholder="Name*">*/
/*             <input class="inputp search-query span4" type="text" name="email" placeholder="Email*">*/
/*             <input class="inputp search-query span4" type="text" name="website" placeholder="Website*">*/
/*             <div class="clear"></div>*/
/*             <textarea id="redex" name="message" class="inputp search-query span12"  rows="5" placeholder="Project description"></textarea>*/
/*             <div class="clear"></div>*/
/*             <div class="tmargin20">*/
/*                 <button type="button" class="btn" name="submit" value="submit" id="contact_submit"><strong>Send Message</strong></button>*/
/*             </div>*/
/*             <div id="error_placeholder" class="form-message text-green"></div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */
/* <div class="decoration text-center line_decor"></div>*/
/* <div class="row-fluid contacts_row">*/
/*     <div class="span3">*/
/*         <h4>Address Details:</h4>*/
/*         <div class="cont">*/
/*             <div class="inline-table "><img src= "{{asset('img/icon_street.png')}}" alt=""></div>*/
/*             <div class="inline-table mleft10">*/
/*                 <span>1234 Street </span>*/
/*                 <p>Lorem Ipsum, CA 91919</p>*/
/*             </div>*/
/*             <div class="clear clrbot"></div>*/
/*             <div class="inline-table"><img src="{{asset('img/icon_phone.png')}}" alt=""></div>*/
/*             <div class="inline-table mleft10">*/
/*                 <span>Phone: +1 123 123-123-123</span>*/
/*                 <p>Fax: +1 123-123-123</p>*/
/*             </div>*/
/*             <div class="clear clrbot"></div>*/
/*             <div class="inline-table"><img src="{{asset('img/icon_email.png')}}" alt=""></div>*/
/*             <div class="inline-table mleft10">*/
/*                 <span>E-mail: <span class="green">email@email.by</span></span>*/
/*                 <p>Website: <span class="green">www.example.com</span></p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="span3">*/
/*         <h4>Opening Hours:</h4>*/
/*         <div class="cont contp">*/
/*             <div class="inline">*/
/*                 <p><strong>Monday-Friday:</strong></p>*/
/*                 <p><strong>Saturday:</strong></p>*/
/*                 <p><strong>Sunday:</strong></p>*/
/*             </div>*/
/*             <div class="inline mleft10">*/
/*                 <p>9am - 5pm</p>*/
/*                 <p>10am - 3pm</p>*/
/*                 <p>Closed</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="span6 clearr">*/
/*         <div class="paddin_map"><div class="map">*/
/*                 <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=Ottawa,+ON,+Canada&amp;sll=45.421438,-75.693569&amp;sspn=0.017531,0.042272&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9E%D1%82%D1%82%D0%B0%D0%B2%D0%B0,+%D0%9E%D1%82%D1%82%D0%B0%D0%B2%D0%B0+%D0%94%D0%B8%D0%B2%D0%B8%D0%B6%D0%B5%D0%BD,+%D0%9E%D0%BD%D1%82%D0%B0%D1%80%D0%B8%D0%BE,+%D0%9A%D0%B0%D0%BD%D0%B0%D0%B4%D0%B0&amp;t=m&amp;ll=45.421528,-75.697603&amp;spn=0.012049,0.034332&amp;z=14&amp;output=embed"></iframe><br />*/
/*         </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
/* </div>*/
/* <a name="id_partn"></a>*/
/* <div class="partner_bott">*/
/*     <div class="partners">*/
/*         <h5 class="decoration text-center"><span class="nobacgr_whit">OUR PARTNERS</span></h5>*/
/*         <div class="partn_pics">*/
/*                     <a href="http://themeforest.net/" class="partner"><img src="{{asset('img/partn_1.png')}}" alt=""></a>*/
/*                     <a href="http://activeden.net/" class="partner"><img src="{{asset('img/partn_2.png')}}" alt="" ></a>*/
/*                     <a href="http://audiojungle.net/" class="partner"><img src="{{asset('img/partn_3.png')}}" alt=""></a>*/
/*                     <a href="http://graphicriver.net/" class="partner"><img src="{{asset('img/partn_4.png')}}" alt=""></a>*/
/*                     <a href="http://codecanyon.net/" class="partner"><img src="{{asset('img/partn_5.png')}}" alt=""></a>*/
/*                     <a href="http://3docean.net/" class="partner"><img src= "{{asset('img/partn_6.png')}}" alt=""></a>*/
/*                     <a href="http://videohive.net/" class="partner"><img src="{{asset('img/partn_7.png')}}" alt=""></a>*/
/*          </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* */
/* <div id="footer">*/
/*     <div class="footer">*/
/*         <div class="row-fluid">*/
/*             <div class="span3">*/
/*                 <h2>FUNDER</h2>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu mauris venenapus</p>*/
/*             </div>*/
/*             <div class="span3 foot">*/
/*                 <h4>Recent Tweets</h4>*/
/*                 <div class="tmargin20">*/
/*                     <img class="fleft tw" src="{{asset('img/social_tweet.png')}}" alt="">*/
/*                     <div class="mleft40">*/
/*                         <span>1234 Street </span>*/
/*                         <span>4r6yg 456hv  </span>*/
/*                         <span>Lorem ipus ex vixc ilflf nfnfoof wrfoo rcgetg  erger </span>*/
/*                         <br>*/
/*                         <a class="green">http://www.envato.com</a>*/
/*                     </div>*/
/*                     <div class="clear foot"></div>*/
/*                     <img class="fleft tw" src="{{asset('img/social_tweet.png')}}" alt="">*/
/*                     <div class=" mleft40">*/
/*                         <span>1234 Street </span>*/
/*                         <span>4r6yg 456hv  </span>*/
/*                         <span>Lorem ipus ex vixc ilflf n </span>*/
/*                         <br>*/
/*                         <a class="green">http://www.envato.com</a>*/
/*                     </div>*/
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
/*               <div class="fleft">� All Rights Reserved. Design by UOU Design.</div>*/
/*               <div class="fright">*/
/*                 <ul id="social_b" class="socialbott inline">*/
/*                     <li><a href="https://twitter.com/" target="_blank" original-title="twitter"><img src="{{asset('img/social/icon_footer_face.png')}}" alt=""></a></li>*/
/*                     <li><a href="https://plus.google.com/" target="_blank" original-title="googleplus"><img src="{{asset('img/social/icon_footer_g.png')}}" alt=""></a></li>*/
/*                     <li><a href="https://www.facebook.com/" title="facebook" target="_blank"><img src="{{asset('img/social/icon_footer_tw.png')}}" alt=""></a></li>*/
/*                     <li><a href="http://www.linkedin.com/" target="_blank" original-title="linkedin"><img src="{{asset('img/social/icon_footer_in.png')}}" alt=""></a></li>*/
/*                     <li><a href="http://www.linkedin.com/" target="_self" original-title="mail"><img src="{{asset('img/social/icon_footer_p.png')}}" alt=""></a></li>*/
/*                     <li><a href="http://www.linkedin.com/" target="_self" original-title="mail"><img src="{{asset('img/social/icon_footer_ball.png')}}" alt=""></a></li>*/
/*                 </ul>*/
/*               </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*                        <script> */
/*         */
/*         $( document ).ready(function() {*/
/*                 var rows = $('table.someclass tr');*/
/*             */
/*                rows.filter('.three').hide(1000);*/
/*              */
/* */
/*                */
/*   $('Select').on('change', function() {*/
/* */
/* if (this.value==="Technical"){*/
/*     rows.filter('.one').show(1000);*/
/*               rows.filter('.two').hide(1000);*/
/*                rows.filter('.three').hide(1000);*/
/* }*/
/* if (this.value==="Human Resources"){*/
/*     rows.filter('.one').hide(1000);*/
/*               rows.filter('.two').hide(1000);*/
/*                rows.filter('.three').show(1000);*/
/* }*/
/* if (this.value==="Financial"){*/
/*     rows.filter('.one').hide(1000);*/
/*               rows.filter('.two').show(1000);*/
/*                rows.filter('.three').hide(1000);*/
/* }*/
/* */
/* });*/
/* });*/
/* </script>*/
/*     <script>*/
/*         /* <![CDATA[ *//* */
/*         (function($) {*/
/*             $(function() {*/
/* */
/*                 $('select').selectbox();*/
/* */
/*                 $('#add').click(function(e) {*/
/*                     $(this).parents('div.section').append('<br /><br /><select><option>-- ???????? --</option><option>????? 1</option><option>????? 2</option><option>????? 3</option><option>????? 4</option><option>????? 5</option></select>');*/
/*                     $('select').selectbox();*/
/*                     e.preventDefault();*/
/*                 })*/
/* */
/*                 $('#add2').click(function(e) {*/
/*                     var options = '';*/
/*                     for (i = 1; i <= 5; i++) {*/
/*                         options += '<option>Option ' + i + '</option>';*/
/*                     }*/
/*                     $(this).parents('div.section').find('select').each(function() {*/
/*                         $(this).append(options);*/
/*                     })*/
/*                     $('select').trigger('refresh');*/
/*                     e.preventDefault();*/
/*                 })*/
/* */
/*                 $('#che').click(function(e) {*/
/*                     $(this).parents('div.section').find('option:nth-child(5)').attr('selected', true);*/
/*                     $('select').trigger('refresh');*/
/*                     e.preventDefault();*/
/*                 })*/
/* */
/*             })*/
/*         })(jQuery)*/
/*         /* ]]> *//* */
/* */
/*     </script>*/
/*     <script>*/
/*         /* <![CDATA[ *//* */
/*         $(document).ready(function(){*/
/*             $("#toggl").click(function(){*/
/*                 $("#panel").slideToggle("slow");*/
/*                 $("#home-page-featured").slideToggle("slow");*/
/*                 $(this).toggleClass('latest_top');*/
/*             });*/
/*         });*/
/*         /* ]]> *//* */
/*         </script>*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     jQuery('#advanced-search').hide();*/
/*     jQuery('#advanced-search-button').click(function(event) {*/
/*         /* Preventing default link action *//* */
/*         event.preventDefault();*/
/*         jQuery('#default-search').slideToggle('fast');*/
/*         jQuery('#advanced-search').slideToggle('fast');*/
/*         jQuery(this).toggleClass('expanded');*/
/*     });*/
/*     /* ]]> *//* */
/* */
/* </script>*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     $(function() {*/
/* */
/*         var availableTags = [*/
/*             "ActionScript",*/
/*             "AppleScript",*/
/*             "Asp",*/
/*             "BASIC",*/
/*             "C",*/
/*             "C++",*/
/*             "Clojure",*/
/*             "COBOL",*/
/*             "ColdFusion",*/
/*             "Erlang",*/
/*             "Fortran",*/
/*             "Groovy",*/
/*             "Haskell",*/
/*             "Java",*/
/*             "JavaScript",*/
/*             "Lisp",*/
/*             "Perl",*/
/*             "PHP",*/
/*             "Python",*/
/*             "Ruby",*/
/*             "Scala",*/
/*             "Scheme"*/
/*         ];*/
/*         $( "#autocomplete" ).autocomplete({*/
/*             source: availableTags*/
/*         });*/
/* */
/*         // Hover states on the static widgets*/
/*         $( "#dialog-link, #icons li" ).hover(*/
/*                 function() {*/
/*                     $( this ).addClass( "ui-state-hover" );*/
/*                 },*/
/*                 function() {*/
/*                     $( this ).removeClass( "ui-state-hover" );*/
/*                 }*/
/*         );*/
/*     });*/
/*     /* ]]> *//* */
/* */
/* </script>*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     function scrollToAnchor(aid){*/
/*         var aTag = $("a[name='"+ aid +"']");*/
/*         $('html,body').animate({scrollTop: aTag.offset().top},'slow');*/
/*     }*/
/*     $("#link").click(function() {*/
/*         scrollToAnchor('id3');*/
/*     });*/
/*     $("#link_about").click(function() {*/
/*         scrollToAnchor('id_about');*/
/*     });*/
/*     $("#link_reg").click(function() {*/
/*         scrollToAnchor('id_reg');*/
/*     });*/
/*     $("#link_contact").click(function() {*/
/*         scrollToAnchor('id_cont');*/
/*     });*/
/*     $("#link_home").click(function() {*/
/*         scrollToAnchor('id_home');*/
/*     });*/
/*     $("#link_partners").click(function() {*/
/*         scrollToAnchor('id_partn');*/
/*     });*/
/*     $("#link_b").click(function() {*/
/*         scrollToAnchor('id3');*/
/*     });*/
/*     $("#link_about_b").click(function() {*/
/*         scrollToAnchor('id_about');*/
/*     });*/
/*     $("#link_reg_b").click(function() {*/
/*         scrollToAnchor('id_reg');*/
/*     });*/
/*     $("#link_contact_b").click(function() {*/
/*         scrollToAnchor('id_cont');*/
/*     });*/
/*     $("#link_partners_b").click(function() {*/
/*         scrollToAnchor('id_partn');*/
/*     });*/
/*     /* ]]> *//* */
/* */
/* */
/* </script>*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     function hexFromRGB(r, g, b) {*/
/*         var hex = [*/
/*             r.toString( 16 ),*/
/*             g.toString( 16 ),*/
/*             b.toString( 16 )*/
/*         ];*/
/*         $.each( hex, function( nr, val ) {*/
/*             if ( val.length === 1 ) {*/
/*                 hex[ nr ] = "0" + val;*/
/*             }*/
/*         });*/
/*         return hex.join( "" ).toUpperCase();*/
/*     }*/
/*     function refreshSwatch() {*/
/*         var red = $( "#project1" ).slider( "value" ),*/
/*                 green = $( "#project2" ).slider( "value" ),*/
/*                 blue = $( "#project3" ).slider( "value" ),*/
/*                 blues = $( "#project4" ).slider( "value" ),*/
/*                 hex = hexFromRGB( red, green, blue);*/
/*         $( "#swatch" ).css( "background-color", "#" + hex );*/
/* */
/*     }*/
/*     $(function() {*/
/*         $( "#project1, #project2, #project3, #project4, #project5, #project6, #project7, #project8, #project9, #project10, #project11, #project12" ).slider({*/
/*             orientation: "horizontal",*/
/*             range: "min",*/
/*             disabled: true,*/
/*             max: 100,*/
/*             slide: refreshSwatch,*/
/*             change: refreshSwatch*/
/*         });*/
/* */
/*         $.each($('.project_value'), function(k,v){*/
/*             var value = 100 * Number($(v).text())/Number($($(v).attr('href')).attr('value'));*/
/*             value = Math.floor(value);*/
/*             $($(v).attr('href')).slider("value", value);*/
/*             $($(v).attr('href')).find(".ui-slider-handle").text(value+'%');*/
/*         });*/
/* */
/*     });*/
/*     /* ]]> *//* */
/* */
/* </script>*/
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
/* */
/* <!--[if IE 8]>*/
/* <script src="js/css3-mediaqueries.js"></script>*/
/* <![endif]-->*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     $(document).ready(function(){*/
/*         var slider = $(".slider").slider({*/
/*             change: function () {*/
/* /*                var value = $(this).slider("option", "value");*/
/*                 $(this).find(".ui-slider-handle").text(value+'%');*//* */
/*             },*/
/*             slide: function () {*/
/* /*                var value = $(this).slider("option", "value");*/
/*                 $(this).find(".ui-slider-handle").text(value+"%");*//* */
/*             }*/
/*         });*/
/* /*        slider.each(function(index){*/
/*             var el = slider.get(index);*/
/*             var value = $(el).slider("value");*/
/*             $(el).slider("value", value);*/
/*         });*//* */
/*     });*/
/*     /* ]]> *//* */
/* </script>*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     $(document).ready(function(){*/
/*         //Examples of how to assign the Colorbox event to elements*/
/*         $(".group1").colorbox({rel:'nofollow',scalePhotos:'false'});*/
/* */
/*     });*/
/*     /* ]]> *//* */
/* */
/* </script>*/
/* <script>*/
/*     /* <![CDATA[ *//* */
/*     $(function() {*/
/*         $('input, textarea').placeholder();*/
/*     });*/
/*     /* ]]> *//* */
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
/* </script>*/
/* */
/* */
/* </body>*/
/* */
/* <!-- Mirrored from 188.226.241.135/funder/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 21:53:16 GMT -->*/
/* </html>*/
/* */
/* */
/* */
/*                     */
