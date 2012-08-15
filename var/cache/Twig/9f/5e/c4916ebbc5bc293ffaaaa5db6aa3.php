<?php

/* _js_loader.html */
class __TwigTemplate_9f5ec4916ebbc5bc293ffaaaa5db6aa3 extends Twig_Template
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
        return array (  47 => 9,  37 => 7,  31 => 6,  23 => 5,  10 => 3,  13 => 2,  7 => 1,  76 => 23,  73 => 22,  68 => 5,  62 => 26,  60 => 25,  57 => 24,  55 => 22,  50 => 19,  48 => 18,  45 => 17,  43 => 16,  33 => 10,  25 => 5,  19 => 1,  42 => 10,  38 => 13,  35 => 11,  30 => 4,  27 => 3,);
    }
}
