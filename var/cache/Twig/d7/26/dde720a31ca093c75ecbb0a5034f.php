<?php

/* _js_loader.html */
class __TwigTemplate_d726dde720a31ca093c75ecbb0a5034f extends Twig_Template
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
        return array (  47 => 9,  31 => 6,  23 => 5,  10 => 3,  13 => 2,  7 => 1,  139 => 58,  133 => 52,  131 => 51,  127 => 49,  124 => 48,  119 => 51,  111 => 5,  105 => 68,  103 => 67,  93 => 59,  91 => 58,  86 => 55,  83 => 48,  81 => 47,  64 => 36,  37 => 7,  35 => 10,  27 => 5,  21 => 1,  49 => 11,  44 => 8,  41 => 7,  36 => 5,  30 => 3,  25 => 4,);
    }
}
