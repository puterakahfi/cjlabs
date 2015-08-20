<?php

/* ::base.html.twig */
class __TwigTemplate_151f590cdff7e0a3d269d98d81b530cd177475977aee6d62cdff3751e0c453f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>AdminLTE | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
          <![endif]-->
      </head>
      <body class=\"skin-blue\">
        <!-- header logo: style can be found in header.less -->
        <header class=\"header\">
            <a href=\"index.html\" class=\"logo\">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                CJLABS<sup>alpha</sup>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <div class=\"navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class=\"dropdown messages-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-envelope\"></i>
                                <span class=\"label label-success\">4</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- start message -->
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"img/avatar3.png\" class=\"img-circle\" alt=\"User Image\"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"img/avatar2.png\" class=\"img-circle\" alt=\"user image\"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"img/avatar.png\" class=\"img-circle\" alt=\"user image\"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"img/avatar2.png\" class=\"img-circle\" alt=\"user image\"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"img/avatar.png\" class=\"img-circle\" alt=\"user image\"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class=\"dropdown notifications-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-warning\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"ion ion-ios7-people info\"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-warning danger\"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users warning\"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href=\"#\">
                                                <i class=\"ion ion-ios7-cart success\"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"ion ion-ios7-person danger\"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class=\"dropdown tasks-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-tasks\"></i>
                                <span class=\"label label-danger\">9</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Design some buttons
                                                    <small class=\"pull-right\">20%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Create a nice theme
                                                    <small class=\"pull-right\">40%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Some task I need to do
                                                    <small class=\"pull-right\">60%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class=\"pull-right\">80%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class=\"footer\">
                                    <a href=\"#\">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"glyphicon glyphicon-user\"></i>
                                <span>Jane Doe <i class=\"caret\"></i></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header bg-light-blue\">
                                    <img src=\"img/avatar3.png\" class=\"img-circle\" alt=\"User Image\" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class=\"user-body\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"";
        // line 266
        echo $this->env->getExtension('routing')->getPath("cms_auth_login");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class=\"wrapper row-offcanvas row-offcanvas-left\">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"left-side sidebar-offcanvas\">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel -->
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=\"img/avatar3.png\" class=\"img-circle\" alt=\"User Image\" />
                        </div>
                        <div class=\"pull-left info\">
                            <p>Hello, Jane</p>

                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                            <span class=\"input-group-btn\">
                                <button type='submit' name='seach' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"active\">
                            <a href=\"index.html\">
                                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"pages/widgets.html\">
                                <i class=\"fa fa-th\"></i> <span>Widgets</span> <small class=\"badge pull-right bg-green\">new</small>
                            </a>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-bar-chart-o\"></i>
                                <span>Charts</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-angle-double-right\"></i> Morris</a></li>
                                <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-angle-double-right\"></i> Flot</a></li>
                                <li><a href=\"pages/charts/inline.html\"><i class=\"fa fa-angle-double-right\"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-laptop\"></i>
                                <span>UI Elements</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-angle-double-right\"></i> General</a></li>
                                <li><a href=\"pages/UI/icons.html\"><i class=\"fa fa-angle-double-right\"></i> Icons</a></li>
                                <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-angle-double-right\"></i> Buttons</a></li>
                                <li><a href=\"pages/UI/sliders.html\"><i class=\"fa fa-angle-double-right\"></i> Sliders</a></li>
                                <li><a href=\"pages/UI/timeline.html\"><i class=\"fa fa-angle-double-right\"></i> Timeline</a></li>
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-edit\"></i> <span>Forms</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-angle-double-right\"></i> General Elements</a></li>
                                <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-angle-double-right\"></i> Advanced Elements</a></li>
                                <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-angle-double-right\"></i> Editors</a></li>                                
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-table\"></i> <span>Tables</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-angle-double-right\"></i> Simple tables</a></li>
                                <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-angle-double-right\"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"pages/calendar.html\">
                                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                                <small class=\"badge pull-right bg-red\">3</small>
                            </a>
                        </li>
                        <li>
                            <a href=\"pages/mailbox.html\">
                                <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                                <small class=\"badge pull-right bg-yellow\">12</small>
                            </a>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-folder\"></i> <span>Examples</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-angle-double-right\"></i> Invoice</a></li>
                                <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-angle-double-right\"></i> Login</a></li>
                                <li><a href=\"pages/examples/register.html\"><i class=\"fa fa-angle-double-right\"></i> Register</a></li>
                                <li><a href=\"pages/examples/lockscreen.html\"><i class=\"fa fa-angle-double-right\"></i> Lockscreen</a></li>
                                <li><a href=\"pages/examples/404.html\"><i class=\"fa fa-angle-double-right\"></i> 404 Error</a></li>
                                <li><a href=\"pages/examples/500.html\"><i class=\"fa fa-angle-double-right\"></i> 500 Error</a></li>                                
                                <li><a href=\"pages/examples/blank.html\"><i class=\"fa fa-angle-double-right\"></i> Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class=\"right-side\">                
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        Blank page
                        <small>Control panel</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                        <li class=\"active\">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class=\"content\">

                 ";
        // line 409
        $this->displayBlock('body', $context, $blocks);
        // line 410
        echo "             </section><!-- /.content -->
         </aside><!-- /.right-side -->
     </div><!-- ./wrapper -->



     ";
        // line 416
        $this->displayBlock('javascripts', $context, $blocks);
        // line 425
        echo "
 </body>
 </html>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- font Awesome -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    ";
    }

    // line 409
    public function block_body($context, array $blocks = array())
    {
    }

    // line 416
    public function block_javascripts($context, array $blocks = array())
    {
        // line 417
        echo "
     <!-- jQuery 2.0.2 -->
     <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
     <!-- Bootstrap -->
     <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
     <!-- AdminLTE App -->
     <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
     ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 423,  482 => 417,  479 => 416,  474 => 409,  467 => 16,  462 => 14,  457 => 12,  451 => 10,  448 => 9,  439 => 416,  431 => 410,  283 => 266,  99 => 35,  73 => 14,  68 => 12,  54 => 14,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 421,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 425,  437 => 120,  434 => 119,  429 => 409,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  110 => 20,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 19,  55 => 15,  38 => 6,  26 => 6,  24 => 4,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 28,  77 => 12,  67 => 15,  47 => 29,  28 => 2,  25 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  100 => 27,  75 => 24,  53 => 19,  60 => 21,  57 => 9,  43 => 7,  50 => 30,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 16,  46 => 12,  44 => 8,  40 => 6,  36 => 6,  32 => 9,  27 => 2,  22 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 37,  97 => 24,  93 => 31,  90 => 30,  81 => 14,  70 => 23,  66 => 13,  62 => 10,  59 => 9,  56 => 12,  52 => 39,  49 => 11,  45 => 28,  41 => 9,  37 => 6,  33 => 4,  30 => 3,);
    }
}
