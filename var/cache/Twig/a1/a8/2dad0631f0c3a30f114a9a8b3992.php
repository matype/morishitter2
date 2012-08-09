<?php

/* _js_loader.html */
class __TwigTemplate_a1a82dad0631f0c3a30f114a9a8b3992 extends Twig_Template
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
        return array (  47 => 9,  37 => 7,  31 => 6,  23 => 5,  10 => 3,  13 => 2,  7 => 1,  73 => 19,  70 => 18,  65 => 5,  59 => 22,  57 => 21,  54 => 20,  51 => 18,  49 => 17,  44 => 15,  33 => 10,  25 => 5,  19 => 1,  55 => 11,  46 => 16,  41 => 8,  38 => 7,  35 => 11,  30 => 4,  27 => 3,);
    }
}
