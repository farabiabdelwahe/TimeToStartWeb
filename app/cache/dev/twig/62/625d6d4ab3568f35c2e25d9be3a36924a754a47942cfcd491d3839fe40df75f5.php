<?php

/* TimeToStartProjectBundle:Project:Search.html.twig */
class __TwigTemplate_7ff5a161ed5510dff6bfe37046c39156a013601bae1bfa8c560662d9cc31c65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
                        <li class=\"active\"><a class=\"bleft\" href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\">HOME</a></li>
                        <li><a id=\"link_about\" class=\"bleft\" href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#id_about\">ABOUT</a></li>
                        <li><a id=\"link\" class=\"bleft\" href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#id3\">PROJECTS</a></li>
                        <li><a id=\"link_reg\" class=\"bleft\" href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#registr\">Create Project</a></li>
                        <li><a id=\"link_contact\" class=\"bleft\" href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#id_cont\">CONTACTS</a></li>
                        <li><a id=\"link_partners\" class=\"bleft last\" href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("add");
        echo "#id_partn\">PARTNERS</a></li>
                    </ul>
                </div>
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
          </div>

<div class=\"contentt\">
<div class=\"container-fluid line\">
 <div class=\"slides\">
         
      


    </div>
    <div class=\"slides\">
            <div class=\"search_top\">
                <div class=\"search\" id=\"searchh\">
                     <form method=\"post\" action=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">
                    <span class=\"white\"><strong>Find a project:</strong></span>
                    <input id=\"autocomplete\" title=\"\" type=\"text\" class=\"span7 search-query\" name=\"s\">
                    <input type=\"submit\" class=\"submit\" value=\"search\" name=\"submit\">
                    </form>
                </div>
            </div>
    </div>

    
<h1 class=\"decoration text-center proj\"><span class=\"nobacgr\">Projects</span></h1>

    <section class=\"section content\" id=\"portfolio-list\">

        <div class=\"wrapper row-fluid projects font_p\" id=\"contentWrapper\">
            <div class=\"zone-content clearfix\">

                <div class=\"\">

           

                </div>

                <div class=\"portfolio-container\">

";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 206
            echo "         
    <div class=\"portfolio-listing creative development block\" style=\"display: block;\">
         
         <div class=\"span4 bordered\">
                        <div class=\"folder\"><h4 class=\"text-center title\"><a href=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index", array("id" => $this->getAttribute($context["m"], "idproject", array()))), "html", null, true);
            echo "\">   ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
            echo " </a></h4></div>
                        <div class=\"proj_name\">
                            <div class=\"clear\"></div>
                            <span class=\"fleft author\">Author Name</span>
                            <table class=\"icons\">
                                <tbody>
                                <tr>
                                    
                             
                                    <td class=\"\"><a href=\"\"><img src=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_lock.png"), "html", null, true);
            echo "\"  alt=\"\"></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=\"clear\"></div>
                        </div>
                                
                             <div class=\"folder border\"><a href=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index", array("id" => $this->getAttribute($context["m"], "idproject", array()))), "html", null, true);
            echo "\"><div class=\"author_proj proj_3\" style=\"  background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagelink", array()), "html", null, true);
            echo ");background-size: contain\"></div></a></div>
                        <div class=\"folder lorem lines\">
                            <div id=\"project\" value=\"132\" class=\"slider\"></div>
                        </div>
                        <p class=\"descr\">  ";
            // line 230
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["m"], "description", array())) > 200)) ? ((twig_slice($this->env, $this->getAttribute($context["m"], "description", array()), 0, 200) . "...")) : ($this->getAttribute($context["m"], "description", array()))), "html", null, true);
            echo "</p>
                        <div class=\"folder price topbordered\">
                            <div class=\"span4\">
                                <strong class=\"green\"><span>\$</span><span class=\"project_value\" href=\"#project8\">";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "target", array()), "html", null, true);
            echo "</span></strong>
                                <p> Traget</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "HelpType", array()), "html", null, true);
            echo "</strong>
                                <p>Help Type</p>
                            </div>
                            <div class=\"span4 bleft\">
                                <strong>";
            // line 241
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "datecreation", array()), "Y-m-d"), "html", null, true);
            echo "</strong>
                                <p>Creation Date</p>
                            </div>
                        </div>
                    </div>
    </div>
                                
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
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
        // line 279
        $this->displayBlock('CreateProject', $context, $blocks);
        // line 281
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
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_street.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"inline-table mleft10\">
                <span>1234 Street </span>
                <p>Lorem Ipsum, CA 91919</p>
            </div>
            <div class=\"clear clrbot\"></div>
            <div class=\"inline-table\"><img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_phone.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"inline-table mleft10\">
                <span>Phone: +1 123 123-123-123</span>
                <p>Fax: +1 123-123-123</p>
            </div>
            <div class=\"clear clrbot\"></div>
            <div class=\"inline-table\"><img src=\"";
        // line 324
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
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://activeden.net/\" class=\"partner\"><img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_2.png"), "html", null, true);
        echo "\" alt=\"\" ></a>
                    <a href=\"http://audiojungle.net/\" class=\"partner\"><img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://graphicriver.net/\" class=\"partner\"><img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_4.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://codecanyon.net/\" class=\"partner\"><img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_5.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://3docean.net/\" class=\"partner\"><img src= \"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/partn_6.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"http://videohive.net/\" class=\"partner\"><img src=\"";
        // line 369
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
        // line 386
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
        // line 395
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
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_face.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"https://plus.google.com/\" target=\"_blank\" original-title=\"googleplus\"><img src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_g.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"https://www.facebook.com/\" title=\"facebook\" target=\"_blank\"><img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_tw.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_blank\" original-title=\"linkedin\"><img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_in.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_self\" original-title=\"mail\"><img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/social/icon_footer_p.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"http://www.linkedin.com/\" target=\"_self\" original-title=\"mail\"><img src=\"";
        // line 449
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
             rows.filter('.one').show(1000);
              rows.filter('.two').hide(1000);
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
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.selectbox.min.js"), "html", null, true);
        echo "\"></script>
<script src= \"";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-uii.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 691
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

    // line 279
    public function block_CreateProject($context, array $blocks = array())
    {
        // line 280
        echo "
";
    }

    public function getTemplateName()
    {
        return "TimeToStartProjectBundle:Project:Search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  963 => 280,  960 => 279,  888 => 691,  884 => 690,  880 => 689,  876 => 688,  872 => 687,  868 => 686,  864 => 685,  860 => 684,  856 => 683,  852 => 682,  616 => 449,  612 => 448,  608 => 447,  604 => 446,  600 => 445,  596 => 444,  544 => 395,  532 => 386,  512 => 369,  508 => 368,  504 => 367,  500 => 366,  496 => 365,  492 => 364,  488 => 363,  446 => 324,  437 => 318,  428 => 312,  395 => 281,  393 => 279,  361 => 249,  347 => 241,  340 => 237,  333 => 233,  327 => 230,  318 => 226,  308 => 219,  294 => 210,  288 => 206,  284 => 205,  256 => 180,  208 => 135,  204 => 134,  200 => 133,  196 => 132,  192 => 131,  188 => 130,  164 => 109,  160 => 108,  156 => 107,  152 => 106,  148 => 105,  144 => 104,  96 => 59,  61 => 27,  57 => 26,  53 => 25,  48 => 23,  42 => 20,  23 => 3,  20 => 1,);
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
/*                         <li class="active"><a class="bleft" href="{{ path('add') }}">HOME</a></li>*/
/*                         <li><a id="link_about" class="bleft" href="{{ path('add') }}#id_about">ABOUT</a></li>*/
/*                         <li><a id="link" class="bleft" href="{{ path('add') }}#id3">PROJECTS</a></li>*/
/*                         <li><a id="link_reg" class="bleft" href="{{ path('add') }}#registr">Create Project</a></li>*/
/*                         <li><a id="link_contact" class="bleft" href="{{ path('add') }}#id_cont">CONTACTS</a></li>*/
/*                         <li><a id="link_partners" class="bleft last" href="{{ path('add') }}#id_partn">PARTNERS</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*                     </div>*/
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
/*           </div>*/
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
/*     */
/* <h1 class="decoration text-center proj"><span class="nobacgr">Projects</span></h1>*/
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
/* {% for m in v %}*/
/*          */
/*     <div class="portfolio-listing creative development block" style="display: block;">*/
/*          */
/*          <div class="span4 bordered">*/
/*                         <div class="folder"><h4 class="text-center title"><a href="{{ path('index', {'id': m.idproject})}}">   {{ m.name}} </a></h4></div>*/
/*                         <div class="proj_name">*/
/*                             <div class="clear"></div>*/
/*                             <span class="fleft author">Author Name</span>*/
/*                             <table class="icons">*/
/*                                 <tbody>*/
/*                                 <tr>*/
/*                                     */
/*                              */
/*                                     <td class=""><a href=""><img src="{{asset('img/icon_lock.png')}}"  alt=""></a></td>*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                                 */
/*                              <div class="folder border"><a href="{{ path('index', {'id': m.idproject}) }}"><div class="author_proj proj_3" style="  background-image: url({{ m.imagelink }});background-size: contain"></div></a></div>*/
/*                         <div class="folder lorem lines">*/
/*                             <div id="project" value="132" class="slider"></div>*/
/*                         </div>*/
/*                         <p class="descr">  {{ m.description|length > 200 ? m.description|slice(0, 200) ~ '...' : m.description}}</p>*/
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
/*                                 <p>Creation Date</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*     </div>*/
/*                                 */
/*                                    {% endfor %}*/
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
/*              rows.filter('.one').show(1000);*/
/*               rows.filter('.two').hide(1000);*/
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
