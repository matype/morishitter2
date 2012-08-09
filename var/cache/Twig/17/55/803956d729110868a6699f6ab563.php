<?php

/* _js_loader.html */
class __TwigTemplate_1755803956d729110868a6699f6ab563 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"";
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/js/jquery.min.js\"></script>
<script src=\"";
        // line 2
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "_js_loader.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  37 => 7,  31 => 6,  23 => 5,  10 => 3,  13 => 2,  7 => 1,  77 => 22,  74 => 21,  69 => 5,  63 => 25,  61 => 24,  58 => 23,  56 => 21,  51 => 18,  49 => 17,  46 => 16,  44 => 15,  33 => 10,  25 => 5,  19 => 1,  42 => 10,  38 => 7,  35 => 11,  30 => 4,  27 => 3,);
    }
}
