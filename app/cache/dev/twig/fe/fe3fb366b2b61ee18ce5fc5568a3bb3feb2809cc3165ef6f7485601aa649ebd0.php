<?php

/* UserUserBundle:User:profile.html.twig */
class __TwigTemplate_380ccdd643a9b7f09500821aeeaa42ce6af51f42d080cbb5f97f582ef19db1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
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
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
  
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/resp.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
    <link href=\"";
        // line 25
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
        // line 57
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
               <hr>
             <div>
         <div>
                     
                     <H1 style=\"text-align: center\">LOGGED IN</H1>
                     
                 </div>
    
                 <br>
                 <a  class='btn' style=\"font-size: x-large; color:#468847 \" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("user_user_searching");
        echo "\">    Find Users </a> 
                 <a class='btn'  style=\"font-size: x-large; color:#468847 \" href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">  Edit Profile</a>
       <a class='btn' style=\"font-size: x-large; color:#468847 \" href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("user_user_profile");
        echo "\">   Show Profile</a>
        <div style=\"text-align: center ;background-color:#959595  ; border-radius: 10px; text-align: left; color: red;font-size: 17px;\"  id=\"map\">

    <h6> <strong style=\"color: #000;font-size: x-large\"> Show Profile</strong> </h6>
<hr>
<div>
    
";
        // line 101
        $this->displayBlock('show', $context, $blocks);
        // line 105
        echo "</div></div>

        </div>
              <div></div>
            <div class=\"social inline fright\">
                <ul id=\"social\">
                <li class=\"bleft inline\">
                    <ul style=\"margin-left: 10px\">
                        <li><a href=\"https://www.facebook.com/\" target=\"_blank\"  original-title=\"twitter\"><img src= \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_face.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"https://plus.google.com/\" target=\"_blank\"  original-title=\"googleplus\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_g.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"https://twitter.com/\" title=\"facebook\" target=\"_blank\" ><img src= \"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_tw.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"http://www.linkedin.com/\" target=\"_blank\" original-title=\"linkedin\"><img src= \"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_in.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"johndoe%40domainname.html\" target=\"_self\" original-title=\"mail\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_header_p.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"johndoe%40domainname.html\" target=\"_self\" original-title=\"mail\"><img src= \"";
        // line 118
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
                        <li class=\"active\"><a class=\"bleft\" href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("Admin_homepaging");
        echo "\">HOME</a></li>
                        <li><a  class=\"bleft\" href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit Profile</a></li>
                        <li><a  class=\"bleft\" href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change Password</a></li>
                        <li><a  class=\"bleft\" href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Show¨Profile</a></li>
                        <li><a id=\"link_contact\" class=\"bleft\" href=\"#\">CONTACTS</a></li>
                        <li><a  class=\"bleft last\" href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("admin_user_searching");
        echo "\">Search For Users</a></li>
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
            <li><a id=\"link_reg_b\" class=\"bleft\" href=\"#\">REGISTER</a></li>
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
                    <span class=\"white\"><strong>Find a project:</strong></span>
                    <input id=\"autocomplete\" title=\"\" type=\"text\" class=\"span7 search-query\">
                    <input type=\"submit\" class=\"submit\" value=\"search\" name=\"submit\">
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
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj1.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj7\"><img src= \"";
        // line 215
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
                        <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj8\">Projects title goes here</a></h4></div>
                        <div class=\"proj_name\">
                            <div class=\"clear\"></div>
                            <span class=\"fleft author\">Author Name</span>
                            <table class=\"icons\">
                                <tbody>
                                <tr>
                                    <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href= \"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj2.jpg"), "html", null, true);
        echo "\" title=\"\"><img src=  \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj8\"><img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\"  alt=\"\"></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=\"clear\"></div>
                        </div>
                        <div class=\"folder border\"><a href=\"projects.html#proj8\"><div class=\"author_proj proj_2\"></div></a></div>
                        <div class=\"folder lorem lines\">
                            <div id=\"project8\" value=\"132\" class=\"slider\"></div>
                        </div>
                        <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                        <div class=\"folder price topbordered\">
                            <div class=\"span4\">
                                <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project8\">123</span></strong>
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
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj3.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj9\"><img src=\"";
        // line 285
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
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj4.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj10\"><img src= \"";
        // line 322
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
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj5.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj11\" ><img src= \"";
        // line 357
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
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj6.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj12\"><img src= \"";
        // line 392
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
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/01.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/02.jpg"), "html", null, true);
        echo "\"  class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/03.jpg"), "html", null, true);
        echo "\"  class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/04.jpg"), "html", null, true);
        echo "\"  class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/05.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/06.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/07.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/08.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/09.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/10.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/12.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/13.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/14.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                        </ul>
                        <ul>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/14.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/15.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/16.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/17.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/18.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/19.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/20.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/21.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/22.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/23.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/01.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/02.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/03.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>

                        </ul>
                        <ul>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/16.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/07.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/08.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/10.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/11.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/02.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/03.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/13.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/14.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/15.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/17.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/18.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img width=\"155\" height=\"155\" src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide/19.jpg"), "html", null, true);
        echo "\" class=\"attachment-post-thumbnail wp-post-image\" alt=\"\"></a></li>

                        </ul>
                        <!-- / container -->
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
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder1.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                    <div class=\"folder\"><h3 class=\"nomarg text-center\">Step 1:</h3></div>
                    <div class=\"folder\"><p class=\"green text-center\"><strong>Choose a project</strong></p></div>
                </div>
                <div class=\"folder\"><img src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder_n.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            </div>
            <div class=\"span4\">
                <div class=\"folder_bordered\">
                    <div class=\"folder\"><a href=\"#\"><img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder2.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                    <div class=\"folder\"><h3 class=\"nomarg text-center\">Step 2:</h3></div>
                    <div class=\"folder\"><p class=\"green text-center\"><strong>Back a project</strong></p></div>
                </div>
                <div class=\"folder\"><img src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder_n.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            </div>
            <div class=\"span4\">
                <div class=\"folder_bordered\">
                    <div class=\"folder\"><a href=\"#\"><img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder3.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                    <div class=\"folder\"><h3 class=\"nomarg text-center\">Step 3:</h3></div> <a name=\"id3\"></a>
                    <div class=\"folder\"><p class=\"green strong text-center\"><strong>Receive a gift</strong></p></div>

                </div>
                <div class=\"folder\"><img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/folder_n.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            </div>

        </div>
    </div>

<h1 class=\"decoration text-center proj\"><span class=\"nobacgr\">Projects</span></h1>

    <section class=\"section content\" id=\"portfolio-list\">

        <div class=\"wrapper row-fluid projects font_p\" id=\"contentWrapper\">
            <div class=\"zone-content clearfix\">

                <div class=\"\">

                    <div class=\"portfolio-selection block\">
                        <div class=\"decoration text-center\" data-toggle=\"buttons-radio\">
                            <div class=\"inline nobacgr\">
                                <div class=\"text-center tags\">
                                    <ul id=\"portfolio-filter\">
                                        <li><input class=\"btn\" id=\"all\" type=\"button\" value=\"All\" class=\"button-2-green current\" title=\"\"> </li>
                                        <li><input class=\"btn\" id=\"creative\" type=\"button\" value=\"Creative\" class=\"button-2-green\" title=\"\"> </li>
                                        <li><input class=\"btn\" id=\"developments\" type=\"button\" value=\"Developments\" class=\"button-2-green\" title=\"\"> </li>
                                        <li><input class=\"btn\" id=\"fashion\" type=\"button\" value=\"Fashion\" class=\"button-2-green\" title=\"\">  </li>
                                        <li><input class=\"btn\" id=\"identity\" type=\"button\" value=\"Identity\" class=\"button-2-green\" title=\"\">  </li>
                                        <li><input class=\"btn\" id=\"movies\" type=\"button\" value=\"Movies\" class=\"button-2-green\" title=\"\">  </li>
                                        <li><input class=\"btn\" id=\"other\" type=\"button\" value=\"Other\" class=\"button-2-green\" title=\"\">   </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"portfolio-container\">

                    <div class=\"portfolio-listing creative development block\" style=\"display: block;\">
                        <div class=\"span4 bordered\">
                            <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj1\">Projects title goes here</a></h4></div>
                            <div class=\"proj_name\">
                                <div class=\"clear\"></div>
                                <span class=\"fleft author\">Author Name</span>
                                <table class=\"icons\">
                                    <tbody>
                                    <tr>
                                        <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href= \"";
        // line 580
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj1.jpg"), "html", null, true);
        echo "\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                        <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj1\"><img src= \"";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    </tr>
                                    </tbody>
                                 </table>
                                <div class=\"clear\"></div>
                           </div>
                            <div class=\"folder border\"><a href=\"projects.html#proj1\"><div class=\"author_proj proj_1\" ></div></a></div>
                            <div class=\"folder lorem lines\">
                                <div id=\"project1\" value=\"456\" class=\"slider\"></div>
                            </div>
                            <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                            <div class=\"folder price topbordered\">
                                <div class=\"span4\">
                                    <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project1\">198</span></strong>
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

                    <div class=\"portfolio-listing creative fashion identity other block\" style=\"display: block;\">
                        <div class=\"span4 bordered\">
                            <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj2\">Projects title goes here</a></h4></div>
                            <div class=\"proj_name\">
                                <div class=\"clear\"></div>
                                <span class=\"fleft author\">Author Name</span>
                                <table class=\"icons\">
                                    <tbody>
                                    <tr>
                                        <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href= \"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj2.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                        <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj2\"><img src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class=\"clear\"></div>
                            </div>
                            <div class=\"folder border\"><a href=\"projects.html#proj2\"><div class=\"author_proj proj_2\"></div></a></div>
                            <div class=\"folder lorem lines\">
                                <div id=\"project2\" value=\"325\" class= \"slider\"></div>
                            </div>
                            <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                            <div class=\"folder price topbordered\">
                                <div class=\"span4\">
                                    <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project2\">144</span></strong>
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

                    <div class=\"portfolio-listing development other developments identity block\" style=\"display: block;\">
                        <div class=\"span4 bordered\">
                            <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj3\">Projects title goes here</a></h4></div>
                            <div class=\"proj_name\">
                                <div class=\"clear\"></div>
                                <span class=\"fleft author\">Author Name</span>
                                <table class=\"icons\">
                                    <tbody>
                                    <tr>
                                        <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj3.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                        <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj3\"><img src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class=\"clear\"></div>
                            </div>
                            <div class=\"folder border\"><a href=\"projects.html#proj3\"><div class=\"author_proj proj_3\"></div></a></div>
                            <div class=\"folder lorem lines\">
                                <div id=\"project3\" value=\"555\" class=\"slider\"></div>
                            </div>
                            <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                            <div class=\"folder price topbordered\">
                                <div class=\"span4\">
                                    <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project3\">76</span></strong>
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

                <div class=\"portfolio-container\">

                    <div class=\"portfolio-listing development other movies block\" style=\"display: block;\">
                        <div class=\"span4 bordered\">
                            <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj4\">Projects title goes here</a></h4></div>
                            <div class=\"proj_name\">
                                <div class=\"clear\"></div>
                                <span class=\"fleft author\">Author Name</span>
                                <table class=\"icons\">
                                    <tbody>
                                    <tr>
                                        <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj4.jpg"), "html", null, true);
        echo "\" title=\"\"><img src=  \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                        <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj4\"><img src= \"";
        // line 699
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class=\"clear\"></div>
                            </div>
                            <div class=\"folder border\"><a href=\"projects.html#proj4\"><div class=\"author_proj proj_4\"></div></a></div>
                            <div class=\"folder lorem lines\">
                                <div id=\"project4\" value=\"234\" class=\"slider\"></div>
                            </div>
                            <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                            <div class=\"folder price topbordered\">
                                <div class=\"span4\">
                                    <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project4\">190</span></strong>
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

                    <div class=\"portfolio-listing creative development movies block\" style=\"display: block;\">
                        <div class=\"span4 bordered\">
                            <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj5\">Projects title goes here</a></h4></div>
                            <div class=\"proj_name\">
                                <div class=\"clear\"></div>
                                <span class=\"fleft author\">Author Name</span>
                                <table class=\"icons\">
                                    <tbody>
                                    <tr>
                                        <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj5.jpg"), "html", null, true);
        echo "\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                        <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj5\"><img src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class=\"clear\"></div>
                            </div>
                            <div class=\"folder border\"><a href=\"projects.html#proj5\"><div class=\"author_proj proj_5\"></div></a></div>
                            <div class=\"folder lorem lines\">
                                <div id=\"project5\" value=\"777\" class=\"slider\"></div>
                            </div>
                            <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                            <div class=\"folder price topbordered\">
                                <div class=\"span4\">
                                    <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project5\">66</span></strong>
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

                    <div class=\"portfolio-listing creative fashion other block\" style=\"display: block;\">
                        <div class=\"span4 bordered\">
                            <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"projects.html#proj6\">Projects title goes here</a></h4></div>
                            <div class=\"proj_name\">
                                <div class=\"clear\"></div>
                                <span class=\"fleft author\">Author Name</span>
                                <table class=\"icons\">
                                    <tbody>
                                    <tr>
                                        <td class=\"icos_proj_sm bleft\"><a class=\"group1\" href= \"";
        // line 774
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proj6.jpg"), "html", null, true);
        echo "\" title=\"\"><img src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_search.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                        <td class=\"icos_proj_sm bleft\"><a href=\"projects.html#proj6\"><img src= \"";
        // line 775
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
        echo "\" alt=\"\"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class=\"clear\"></div>
                            </div>
                            <div class=\"folder border\"><a href=\"projects.html#proj6\"><div class=\"author_proj proj_6\"></div></a></div>
                            <div class=\"folder lorem lines\">
                                <div id=\"project6\" value=\"145\" class=\"slider\"></div>
                            </div>
                            <p class=\"descr\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>
                            <div class=\"folder price topbordered\">
                                <div class=\"span4\">
                                    <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project6\">88</span></strong>
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
    <div class=\"row-fluid\">
        <div class=\"span3\">
            <h4 class=\"text-center\">Step 1: <span class=\"green\">Registration</span></h4>
        </div>
        <div class=\"span3 bleft\">
            <h4 class=\"text-center\">Step 2: <span class=\"green\">Project Summary</span></h4>
        </div>
        <div class=\"span3 bleft\">
            <h4 class=\"text-center\">Step 3: <span class=\"green\">Project page</span></h4>
        </div>
        <div class=\"span3 bleft\">
            <h4 class=\"text-center\">Step 4: <span class=\"green\">Project page</span></h4>
        </div>
    </div>
    <div class=\"row-fluid border_proj duration\">
        <div class=\"span3 \">
            <div class=\"column_project\">
                <h4 class=\"text-center\">Personal Info:</h4>
                <form class=\"form-search\" >
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Name\">
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Surname\">
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Email\">
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Username\">
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Password\">
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Repeat Password\">
                    <select class=\"\">
                        <option>Location</option>
                        <option>Belarus</option>
                        <option>Armenia</option>
                        <option>England</option>
                        <option>China</option>
                    </select>
                    <input type=\"text\" class=\"inputp search-query span12 face\" style=\"padding-left: 30px;\" placeholder=\"Account Name\">
                    <input type=\"text\" class=\"inputp search-query span12 tweet\" style=\"padding-left: 30px;\" placeholder=\"Account Name\">
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Payment Gateway\">
                </form>
            </div>
        </div>
        <div class=\"span3\">
            <div class=\"bleft column_project\">
                <h4 class=\"text-center\">Project Description:</h4>
                <form class=\"form-search\">
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Project Name\">
                    <select class=\"\">
                        <option>Category</option>
                        <option>Armenia</option>
                        <option>England</option>
                        <option>China</option>
                    </select>
                    <select class=\"\">
                        <option>Location</option>
                        <option>Armenia</option>
                        <option>England</option>
                        <option>China</option>
                    </select>
                    <div class=\"upload_img inline\">
                        <input type=\"file\" name=\"upload\"/>
                    </div>
                    <textarea id=\"redex2\" class=\"inputp search-query span12\" rows=\"9\" placeholder=\"Short description\"></textarea>
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Payment Gateway\">
                </form>
            </div>
        </div>
        <div class=\"span3\">
            <div class=\"bleft column_project\">
                <h4 class=\"text-center\">Project Details:</h4>
                <form class=\"form-search\">
                    <input type=\"text\" class=\"inputp search-query span12\" placeholder=\"Video URL\">
                    <div class=\"upload_pic1 inline\">
                        <input type=\"file\" name=\"upload\"/>
                    </div>
                    <div class=\"upload_pic2 inline\">
                        <input type=\"file\" name=\"upload\"/>
                    </div>
                    <div class=\"upload_pic3 inline\">
                        <input type=\"file\" name=\"upload\"/>
                    </div>
                    <input type=\"text\" class=\"inputp search-query span12 face\" style=\"padding-left: 30px;\" placeholder=\"Account Name\">
                    <input type=\"text\" class=\"inputp search-query span12 tweet\" style=\"padding-left: 30px;\" placeholder=\"Account Name\"> <textarea id=\"redex3\" class=\"inputp search-query span12\"  rows=\"5\" placeholder=\"Project description\"></textarea>
                    <div class=\"upload_html inline\">
                        <input type=\"file\" name=\"upload\"/>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"span3\">
            <div class=\"bleft column_project\" >
                <h4 class=\"text-center \">Project Duration:</h4>
                <ul>
                    <li>
                        <input id=\"rfirst\" type=\"radio\" name=\"radio\" checked hidden />
                        <label for=\"rfirst\">30 Days (\$15)</label>
                    </li>
                    <li>
                        <input id=\"rsecond\" type=\"radio\" name=\"radio\" hidden />
                        <label for=\"rsecond\">45 Days (\$20)</label>
                    </li>
                    <li>
                        <input id=\"re\" type=\"radio\" name=\"radio\" hidden />
                        <label for=\"re\">60 Days (\$25)</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class=\"decoration text-center create_butt\"><span class=\"nobacgr_whit\"><button class=\"btn btn-large search-query\" type=\"button\"> <span class=\"butt_small\"><strong>CREATE</strong></span></button></span><a name=\"id_cont\"></a></div>

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
        // line 969
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_street.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"inline-table mleft10\">
                <span>1234 Street </span>
                <p>Lorem Ipsum, CA 91919</p>
            </div>
            <div class=\"clear clrbot\"></div>
            <div class=\"inline-table\"><img src=\"";
        // line 975
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_phone.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"inline-table mleft10\">
                <span>Phone: +1 123 123-123-123</span>
                <p>Fax: +1 123-123-123</p>
            </div>
            <div class=\"clear clrbot\"></div>
            <div class=\"inline-table\"><img src=\"";
        // line 981
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
        // line 1020
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://activeden.net/\" class=\"partner\"><img src=\"";
        // line 1021
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_2.png"), "html", null, true);
        echo "\" alt=\"\" ></a>
                    <a href=\"http://audiojungle.net/\" class=\"partner\"><img src=\"";
        // line 1022
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://graphicriver.net/\" class=\"partner\"><img src=\"";
        // line 1023
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_4.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://codecanyon.net/\" class=\"partner\"><img src=\"";
        // line 1024
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_5.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://3docean.net/\" class=\"partner\"><img src= \"";
        // line 1025
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_6.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://videohive.net/\" class=\"partner\"><img src=\"";
        // line 1026
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
        // line 1043
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
        // line 1052
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
              <div class=\"fleft\">© All Rights Reserved. Design by UOU Design.</div>
              <div class=\"fright\">
                <ul id=\"social_b\" class=\"socialbott inline\">
                    <li><a href=\"https://twitter.com/\" target=\"_blank\" original-title=\"twitter\"><img src=\"";
        // line 1101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_face.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"https://plus.google.com/\" target=\"_blank\" original-title=\"googleplus\"><img src=\"";
        // line 1102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_g.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"https://www.facebook.com/\" title=\"facebook\" target=\"_blank\"><img src=\"";
        // line 1103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_tw.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_blank\" original-title=\"linkedin\"><img src=\"";
        // line 1104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_in.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_self\" original-title=\"mail\"><img src=\"";
        // line 1105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_p.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_self\" original-title=\"mail\"><img src=\"";
        // line 1106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_ball.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                </ul>
              </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</div>

    <script>
        /* <![CDATA[ */
        (function(\$) {
            \$(function() {

                \$('select').selectbox();

                \$('#add').click(function(e) {
                    \$(this).parents('div.section').append('<br /><br /><select><option>-- Выберите --</option><option>Пункт 1</option><option>Пункт 2</option><option>Пункт 3</option><option>Пункт 4</option><option>Пункт 5</option></select>');
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
        // line 1308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.selectbox.min.js"), "html", null, true);
        echo "\"></script>
<script src= \"";
        // line 1309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-uii.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1317
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

    // line 101
    public function block_show($context, array $blocks = array())
    {
        // line 102
        echo "
bbbbbb
";
    }

    public function getTemplateName()
    {
        return "UserUserBundle:User:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1781 => 102,  1778 => 101,  1710 => 1317,  1706 => 1316,  1702 => 1315,  1698 => 1314,  1694 => 1313,  1690 => 1312,  1686 => 1311,  1682 => 1310,  1678 => 1309,  1674 => 1308,  1469 => 1106,  1465 => 1105,  1461 => 1104,  1457 => 1103,  1453 => 1102,  1449 => 1101,  1397 => 1052,  1385 => 1043,  1365 => 1026,  1361 => 1025,  1357 => 1024,  1353 => 1023,  1349 => 1022,  1345 => 1021,  1341 => 1020,  1299 => 981,  1290 => 975,  1281 => 969,  1084 => 775,  1078 => 774,  1038 => 737,  1032 => 736,  992 => 699,  986 => 698,  942 => 657,  936 => 656,  896 => 619,  890 => 618,  850 => 581,  844 => 580,  795 => 534,  787 => 529,  780 => 525,  773 => 521,  766 => 517,  759 => 513,  735 => 492,  731 => 491,  727 => 490,  723 => 489,  719 => 488,  715 => 487,  711 => 486,  707 => 485,  703 => 484,  699 => 483,  695 => 482,  691 => 481,  687 => 480,  680 => 476,  676 => 475,  672 => 474,  668 => 473,  664 => 472,  660 => 471,  656 => 470,  652 => 469,  648 => 468,  644 => 467,  640 => 466,  636 => 465,  632 => 464,  626 => 461,  622 => 460,  618 => 459,  614 => 458,  610 => 457,  606 => 456,  602 => 455,  598 => 454,  594 => 453,  590 => 452,  586 => 451,  582 => 450,  578 => 449,  518 => 392,  512 => 391,  475 => 357,  469 => 356,  432 => 322,  426 => 321,  387 => 285,  381 => 284,  344 => 250,  338 => 249,  301 => 215,  294 => 213,  222 => 144,  217 => 142,  213 => 141,  209 => 140,  205 => 139,  181 => 118,  177 => 117,  173 => 116,  169 => 115,  165 => 114,  161 => 113,  151 => 105,  149 => 101,  139 => 94,  135 => 93,  131 => 92,  93 => 57,  58 => 25,  54 => 24,  50 => 23,  45 => 21,  39 => 18,  20 => 1,);
    }
}
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
/*                <hr>*/
/*              <div>*/
/*          <div>*/
/*                      */
/*                      <H1 style="text-align: center">LOGGED IN</H1>*/
/*                      */
/*                  </div>*/
/*     */
/*                  <br>*/
/*                  <a  class='btn' style="font-size: x-large; color:#468847 " href="{{ path('user_user_searching')}}">    Find Users </a> */
/*                  <a class='btn'  style="font-size: x-large; color:#468847 " href="{{ path('fos_user_profile_edit')}}">  Edit Profile</a>*/
/*        <a class='btn' style="font-size: x-large; color:#468847 " href="{{ path('user_user_profile')}}">   Show Profile</a>*/
/*         <div style="text-align: center ;background-color:#959595  ; border-radius: 10px; text-align: left; color: red;font-size: 17px;"  id="map">*/
/* */
/*     <h6> <strong style="color: #000;font-size: x-large"> Show Profile</strong> </h6>*/
/* <hr>*/
/* <div>*/
/*     */
/* {% block show %}*/
/* */
/* bbbbbb*/
/* {% endblock show %}*/
/* </div></div>*/
/* */
/*         </div>*/
/*               <div></div>*/
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
/*   <div class="width">*/
/*                 <div class="logo inline">*/
/*                     */
/*                 </div>*/
/* */
/*                 <div class="navigation inline">*/
/*                     <ul class="nav inline menuleft">*/
/*                         <li class="active"><a class="bleft" href="{{ path('Admin_homepaging')}}">HOME</a></li>*/
/*                         <li><a  class="bleft" href="{{ path('fos_user_profile_edit') }}">Edit Profile</a></li>*/
/*                         <li><a  class="bleft" href="{{ path('fos_user_change_password') }}">Change Password</a></li>*/
/*                         <li><a  class="bleft" href="{{ path('fos_user_profile_show') }}">Show¨Profile</a></li>*/
/*                         <li><a id="link_contact" class="bleft" href="#">CONTACTS</a></li>*/
/*                         <li><a  class="bleft last" href="{{ path('admin_user_searching')}}">Search For Users</a></li>*/
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
/*             <li><a id="link_reg_b" class="bleft" href="#">REGISTER</a></li>*/
/*             <li><a id="link_contact_b" class="bleft" href="#">CONTACTS</a></li>*/
/*             <li><a id="link_partners_b" class="bleft last" href="#">PARTNERS</a></li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="contentt">*/
/* <div class="container-fluid line">*/
/*  <div class="slides">*/
/*             */
/*     </div>*/
/*     <div class="slides">*/
/*             <div class="search_top">*/
/*                 <div class="search" id="searchh">*/
/*                     <span class="white"><strong>Find a project:</strong></span>*/
/*                     <input id="autocomplete" title="" type="text" class="span7 search-query">*/
/*                     <input type="submit" class="submit" value="search" name="submit">*/
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
/*                     <div class="span4 bordered">*/
/*                         <div class="folder"><h4 class="text-center title"><a href="projects.html#proj8">Projects title goes here</a></h4></div>*/
/*                         <div class="proj_name">*/
/*                             <div class="clear"></div>*/
/*                             <span class="fleft author">Author Name</span>*/
/*                             <table class="icons">*/
/*                                 <tbody>*/
/*                                 <tr>*/
/*                                     <td class="icos_proj_sm bleft"><a class="group1" href= "{{asset('img/proj2.jpg')}}" title=""><img src=  "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                     <td class="icos_proj_sm bleft"><a href="projects.html#proj8"><img src="{{asset('img/icon_lock.png')}}"  alt=""></a></td>*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                         <div class="folder border"><a href="projects.html#proj8"><div class="author_proj proj_2"></div></a></div>*/
/*                         <div class="folder lorem lines">*/
/*                             <div id="project8" value="132" class="slider"></div>*/
/*                         </div>*/
/*                         <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                         <div class="folder price topbordered">*/
/*                             <div class="span4">*/
/*                                 <strong class="green"><span>$</span><span class="project_value" href="#project8">123</span></strong>*/
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
/*                     </div>*/
/*                 */
/*             </div><!-- end of .map-wrapper -->*/
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
/* <h1 class="decoration text-center proj"><span class="nobacgr">Projects</span></h1>*/
/* */
/*     <section class="section content" id="portfolio-list">*/
/* */
/*         <div class="wrapper row-fluid projects font_p" id="contentWrapper">*/
/*             <div class="zone-content clearfix">*/
/* */
/*                 <div class="">*/
/* */
/*                     <div class="portfolio-selection block">*/
/*                         <div class="decoration text-center" data-toggle="buttons-radio">*/
/*                             <div class="inline nobacgr">*/
/*                                 <div class="text-center tags">*/
/*                                     <ul id="portfolio-filter">*/
/*                                         <li><input class="btn" id="all" type="button" value="All" class="button-2-green current" title=""> </li>*/
/*                                         <li><input class="btn" id="creative" type="button" value="Creative" class="button-2-green" title=""> </li>*/
/*                                         <li><input class="btn" id="developments" type="button" value="Developments" class="button-2-green" title=""> </li>*/
/*                                         <li><input class="btn" id="fashion" type="button" value="Fashion" class="button-2-green" title="">  </li>*/
/*                                         <li><input class="btn" id="identity" type="button" value="Identity" class="button-2-green" title="">  </li>*/
/*                                         <li><input class="btn" id="movies" type="button" value="Movies" class="button-2-green" title="">  </li>*/
/*                                         <li><input class="btn" id="other" type="button" value="Other" class="button-2-green" title="">   </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="portfolio-container">*/
/* */
/*                     <div class="portfolio-listing creative development block" style="display: block;">*/
/*                         <div class="span4 bordered">*/
/*                             <div class="folder"><h4 class="text-center title"><a href="projects.html#proj1">Projects title goes here</a></h4></div>*/
/*                             <div class="proj_name">*/
/*                                 <div class="clear"></div>*/
/*                                 <span class="fleft author">Author Name</span>*/
/*                                 <table class="icons">*/
/*                                     <tbody>*/
/*                                     <tr>*/
/*                                         <td class="icos_proj_sm bleft"><a class="group1" href= "{{asset('img/proj1.jpg')}}" title=""><img src="{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                         <td class="icos_proj_sm bleft"><a href="projects.html#proj1"><img src= "{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                  </table>*/
/*                                 <div class="clear"></div>*/
/*                            </div>*/
/*                             <div class="folder border"><a href="projects.html#proj1"><div class="author_proj proj_1" ></div></a></div>*/
/*                             <div class="folder lorem lines">*/
/*                                 <div id="project1" value="456" class="slider"></div>*/
/*                             </div>*/
/*                             <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                             <div class="folder price topbordered">*/
/*                                 <div class="span4">*/
/*                                     <strong class="green"><span>$</span><span class="project_value" href="#project1">198</span></strong>*/
/*                                     <p>pledged</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>80</strong>*/
/*                                     <p>backers</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>25</strong>*/
/*                                     <p>days to go</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-listing creative fashion identity other block" style="display: block;">*/
/*                         <div class="span4 bordered">*/
/*                             <div class="folder"><h4 class="text-center title"><a href="projects.html#proj2">Projects title goes here</a></h4></div>*/
/*                             <div class="proj_name">*/
/*                                 <div class="clear"></div>*/
/*                                 <span class="fleft author">Author Name</span>*/
/*                                 <table class="icons">*/
/*                                     <tbody>*/
/*                                     <tr>*/
/*                                         <td class="icos_proj_sm bleft"><a class="group1" href= "{{asset('img/proj2.jpg')}}" title=""><img src= "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                         <td class="icos_proj_sm bleft"><a href="projects.html#proj2"><img src="{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                             <div class="folder border"><a href="projects.html#proj2"><div class="author_proj proj_2"></div></a></div>*/
/*                             <div class="folder lorem lines">*/
/*                                 <div id="project2" value="325" class= "slider"></div>*/
/*                             </div>*/
/*                             <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                             <div class="folder price topbordered">*/
/*                                 <div class="span4">*/
/*                                     <strong class="green"><span>$</span><span class="project_value" href="#project2">144</span></strong>*/
/*                                     <p>pledged</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>80</strong>*/
/*                                     <p>backers</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>25</strong>*/
/*                                     <p>days to go</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-listing development other developments identity block" style="display: block;">*/
/*                         <div class="span4 bordered">*/
/*                             <div class="folder"><h4 class="text-center title"><a href="projects.html#proj3">Projects title goes here</a></h4></div>*/
/*                             <div class="proj_name">*/
/*                                 <div class="clear"></div>*/
/*                                 <span class="fleft author">Author Name</span>*/
/*                                 <table class="icons">*/
/*                                     <tbody>*/
/*                                     <tr>*/
/*                                         <td class="icos_proj_sm bleft"><a class="group1" href="{{asset('img/proj3.jpg')}}" title=""><img src= "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                         <td class="icos_proj_sm bleft"><a href="projects.html#proj3"><img src="{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                             <div class="folder border"><a href="projects.html#proj3"><div class="author_proj proj_3"></div></a></div>*/
/*                             <div class="folder lorem lines">*/
/*                                 <div id="project3" value="555" class="slider"></div>*/
/*                             </div>*/
/*                             <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                             <div class="folder price topbordered">*/
/*                                 <div class="span4">*/
/*                                     <strong class="green"><span>$</span><span class="project_value" href="#project3">76</span></strong>*/
/*                                     <p>pledged</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>80</strong>*/
/*                                     <p>backers</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>25</strong>*/
/*                                     <p>days to go</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="portfolio-container">*/
/* */
/*                     <div class="portfolio-listing development other movies block" style="display: block;">*/
/*                         <div class="span4 bordered">*/
/*                             <div class="folder"><h4 class="text-center title"><a href="projects.html#proj4">Projects title goes here</a></h4></div>*/
/*                             <div class="proj_name">*/
/*                                 <div class="clear"></div>*/
/*                                 <span class="fleft author">Author Name</span>*/
/*                                 <table class="icons">*/
/*                                     <tbody>*/
/*                                     <tr>*/
/*                                         <td class="icos_proj_sm bleft"><a class="group1" href="{{asset('img/proj4.jpg')}}" title=""><img src=  "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                         <td class="icos_proj_sm bleft"><a href="projects.html#proj4"><img src= "{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                             <div class="folder border"><a href="projects.html#proj4"><div class="author_proj proj_4"></div></a></div>*/
/*                             <div class="folder lorem lines">*/
/*                                 <div id="project4" value="234" class="slider"></div>*/
/*                             </div>*/
/*                             <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                             <div class="folder price topbordered">*/
/*                                 <div class="span4">*/
/*                                     <strong class="green"><span>$</span><span class="project_value" href="#project4">190</span></strong>*/
/*                                     <p>pledged</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>80</strong>*/
/*                                     <p>backers</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>25</strong>*/
/*                                     <p>days to go</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-listing creative development movies block" style="display: block;">*/
/*                         <div class="span4 bordered">*/
/*                             <div class="folder"><h4 class="text-center title"><a href="projects.html#proj5">Projects title goes here</a></h4></div>*/
/*                             <div class="proj_name">*/
/*                                 <div class="clear"></div>*/
/*                                 <span class="fleft author">Author Name</span>*/
/*                                 <table class="icons">*/
/*                                     <tbody>*/
/*                                     <tr>*/
/*                                         <td class="icos_proj_sm bleft"><a class="group1" href="{{asset('img/proj5.jpg')}}" title=""><img src="{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                         <td class="icos_proj_sm bleft"><a href="projects.html#proj5"><img src="{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                             <div class="folder border"><a href="projects.html#proj5"><div class="author_proj proj_5"></div></a></div>*/
/*                             <div class="folder lorem lines">*/
/*                                 <div id="project5" value="777" class="slider"></div>*/
/*                             </div>*/
/*                             <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                             <div class="folder price topbordered">*/
/*                                 <div class="span4">*/
/*                                     <strong class="green"><span>$</span><span class="project_value" href="#project5">66</span></strong>*/
/*                                     <p>pledged</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>80</strong>*/
/*                                     <p>backers</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>25</strong>*/
/*                                     <p>days to go</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-listing creative fashion other block" style="display: block;">*/
/*                         <div class="span4 bordered">*/
/*                             <div class="folder"><h4 class="text-center title"><a href="projects.html#proj6">Projects title goes here</a></h4></div>*/
/*                             <div class="proj_name">*/
/*                                 <div class="clear"></div>*/
/*                                 <span class="fleft author">Author Name</span>*/
/*                                 <table class="icons">*/
/*                                     <tbody>*/
/*                                     <tr>*/
/*                                         <td class="icos_proj_sm bleft"><a class="group1" href= "{{asset('img/proj6.jpg')}}" title=""><img src= "{{asset('img/icon_search.png')}}" alt=""></a></td>*/
/*                                         <td class="icos_proj_sm bleft"><a href="projects.html#proj6"><img src= "{{asset('img/icon_lock.png')}}" alt=""></a></td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                             <div class="folder border"><a href="projects.html#proj6"><div class="author_proj proj_6"></div></a></div>*/
/*                             <div class="folder lorem lines">*/
/*                                 <div id="project6" value="145" class="slider"></div>*/
/*                             </div>*/
/*                             <p class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate egestas sem, eu cursus ligula ullamcorper non. Curabitur tristique velit eu</p>*/
/*                             <div class="folder price topbordered">*/
/*                                 <div class="span4">*/
/*                                     <strong class="green"><span>$</span><span class="project_value" href="#project6">88</span></strong>*/
/*                                     <p>pledged</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>80</strong>*/
/*                                     <p>backers</p>*/
/*                                 </div>*/
/*                                 <div class="span4 bleft">*/
/*                                     <strong>25</strong>*/
/*                                     <p>days to go</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
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
/*     <div class="row-fluid">*/
/*         <div class="span3">*/
/*             <h4 class="text-center">Step 1: <span class="green">Registration</span></h4>*/
/*         </div>*/
/*         <div class="span3 bleft">*/
/*             <h4 class="text-center">Step 2: <span class="green">Project Summary</span></h4>*/
/*         </div>*/
/*         <div class="span3 bleft">*/
/*             <h4 class="text-center">Step 3: <span class="green">Project page</span></h4>*/
/*         </div>*/
/*         <div class="span3 bleft">*/
/*             <h4 class="text-center">Step 4: <span class="green">Project page</span></h4>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row-fluid border_proj duration">*/
/*         <div class="span3 ">*/
/*             <div class="column_project">*/
/*                 <h4 class="text-center">Personal Info:</h4>*/
/*                 <form class="form-search" >*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Name">*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Surname">*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Email">*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Username">*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Password">*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Repeat Password">*/
/*                     <select class="">*/
/*                         <option>Location</option>*/
/*                         <option>Belarus</option>*/
/*                         <option>Armenia</option>*/
/*                         <option>England</option>*/
/*                         <option>China</option>*/
/*                     </select>*/
/*                     <input type="text" class="inputp search-query span12 face" style="padding-left: 30px;" placeholder="Account Name">*/
/*                     <input type="text" class="inputp search-query span12 tweet" style="padding-left: 30px;" placeholder="Account Name">*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Payment Gateway">*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         <div class="span3">*/
/*             <div class="bleft column_project">*/
/*                 <h4 class="text-center">Project Description:</h4>*/
/*                 <form class="form-search">*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Project Name">*/
/*                     <select class="">*/
/*                         <option>Category</option>*/
/*                         <option>Armenia</option>*/
/*                         <option>England</option>*/
/*                         <option>China</option>*/
/*                     </select>*/
/*                     <select class="">*/
/*                         <option>Location</option>*/
/*                         <option>Armenia</option>*/
/*                         <option>England</option>*/
/*                         <option>China</option>*/
/*                     </select>*/
/*                     <div class="upload_img inline">*/
/*                         <input type="file" name="upload"/>*/
/*                     </div>*/
/*                     <textarea id="redex2" class="inputp search-query span12" rows="9" placeholder="Short description"></textarea>*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Payment Gateway">*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         <div class="span3">*/
/*             <div class="bleft column_project">*/
/*                 <h4 class="text-center">Project Details:</h4>*/
/*                 <form class="form-search">*/
/*                     <input type="text" class="inputp search-query span12" placeholder="Video URL">*/
/*                     <div class="upload_pic1 inline">*/
/*                         <input type="file" name="upload"/>*/
/*                     </div>*/
/*                     <div class="upload_pic2 inline">*/
/*                         <input type="file" name="upload"/>*/
/*                     </div>*/
/*                     <div class="upload_pic3 inline">*/
/*                         <input type="file" name="upload"/>*/
/*                     </div>*/
/*                     <input type="text" class="inputp search-query span12 face" style="padding-left: 30px;" placeholder="Account Name">*/
/*                     <input type="text" class="inputp search-query span12 tweet" style="padding-left: 30px;" placeholder="Account Name"> <textarea id="redex3" class="inputp search-query span12"  rows="5" placeholder="Project description"></textarea>*/
/*                     <div class="upload_html inline">*/
/*                         <input type="file" name="upload"/>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         <div class="span3">*/
/*             <div class="bleft column_project" >*/
/*                 <h4 class="text-center ">Project Duration:</h4>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <input id="rfirst" type="radio" name="radio" checked hidden />*/
/*                         <label for="rfirst">30 Days ($15)</label>*/
/*                     </li>*/
/*                     <li>*/
/*                         <input id="rsecond" type="radio" name="radio" hidden />*/
/*                         <label for="rsecond">45 Days ($20)</label>*/
/*                     </li>*/
/*                     <li>*/
/*                         <input id="re" type="radio" name="radio" hidden />*/
/*                         <label for="re">60 Days ($25)</label>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="decoration text-center create_butt"><span class="nobacgr_whit"><button class="btn btn-large search-query" type="button"> <span class="butt_small"><strong>CREATE</strong></span></button></span><a name="id_cont"></a></div>*/
/* */
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
/*               <div class="fleft">© All Rights Reserved. Design by UOU Design.</div>*/
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
/*     <script>*/
/*         /* <![CDATA[ *//* */
/*         (function($) {*/
/*             $(function() {*/
/* */
/*                 $('select').selectbox();*/
/* */
/*                 $('#add').click(function(e) {*/
/*                     $(this).parents('div.section').append('<br /><br /><select><option>-- Выберите --</option><option>Пункт 1</option><option>Пункт 2</option><option>Пункт 3</option><option>Пункт 4</option><option>Пункт 5</option></select>');*/
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
/* </body>*/
/* */
/* <!-- Mirrored from 188.226.241.135/funder/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 21:53:16 GMT -->*/
/* </html>*/
/* */
