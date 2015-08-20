<?php

/* CmsAuthBundle:Auth:login.html.twig */
class __TwigTemplate_edbc4e65d9b330d06be658242246775f07599123409816876f4af8edceb951a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.login.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
   ";
        // line 5
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 6
            echo "        <div class=\"error\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
 <div class=\"form-box\" id=\"login-box\" >
            <div class=\"header\">Sign In</div>
            <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("cms_auth_login_check");
        echo "\" method=\"post\">
                <div class=\"body bg-gray\">
                    <div class=\"form-group\">
                        <input type=\"hidden\" name=\"_target_path\" value=\"/dashboard\" />
                        <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"User ID\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>
                    </div>          
                    <div class=\"form-group\">
                        <input type=\"checkbox\" name=\"remember_me\"/> Remember me
                    </div>
                </div>
                <div class=\"footer\">                                                               
                    <button type=\"submit\" class=\"btn bg-olive btn-block\">Sign me in</button>  
                    
                    <p><a href=\"#\">I forgot my password</a></p>
                    
                    <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
                </div>
            </form>

            <div class=\"margin text-center\">
                <span>Sign in using social networks</span>
                <br/>
                <button class=\"btn bg-light-blue btn-circle\"><i class=\"fa fa-facebook\"></i></button>
                <button class=\"btn bg-aqua btn-circle\"><i class=\"fa fa-twitter\"></i></button>
                <button class=\"btn bg-red btn-circle\"><i class=\"fa fa-google-plus\"></i></button>

            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "CmsAuthBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  110 => 20,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  55 => 15,  38 => 6,  26 => 6,  24 => 4,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 15,  47 => 6,  28 => 3,  25 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  100 => 27,  75 => 24,  53 => 19,  60 => 21,  57 => 9,  43 => 7,  50 => 7,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 8,  40 => 6,  36 => 6,  32 => 4,  27 => 2,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 11,  45 => 6,  41 => 9,  37 => 6,  33 => 4,  30 => 3,);
    }
}
