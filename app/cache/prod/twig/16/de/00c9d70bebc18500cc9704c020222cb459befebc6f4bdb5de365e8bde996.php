<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_16de00c9d70bebc18500cc9704c020222cb459befebc6f4bdb5de365e8bde996 extends Twig_Template
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
        if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
        if ($this->getAttribute($_trace_, "function")) {
            // line 2
            echo "    at ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_trace_, "class") . $this->getAttribute($_trace_, "type")) . $this->getAttribute($_trace_, "function")), "html", null, true);
            echo "(";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($_trace_, "args")), "html", null, true);
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
        if (($this->getAttribute($_trace_, "file", array(), "any", true, true) && $this->getAttribute($_trace_, "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_trace_, "file"), "html", null, true);
            echo " line ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_trace_, "line"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  110 => 20,  89 => 16,  65 => 14,  63 => 13,  58 => 12,  34 => 5,  55 => 15,  38 => 13,  26 => 4,  24 => 4,  114 => 22,  109 => 21,  106 => 20,  101 => 19,  85 => 16,  77 => 12,  67 => 9,  47 => 7,  28 => 4,  25 => 5,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  100 => 19,  75 => 24,  53 => 19,  60 => 21,  57 => 11,  43 => 14,  50 => 7,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 25,  46 => 9,  44 => 9,  40 => 7,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 16,  59 => 8,  56 => 20,  52 => 11,  49 => 10,  45 => 6,  41 => 8,  37 => 5,  33 => 10,  30 => 4,);
    }
}
