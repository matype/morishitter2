<?php

/* _css_loader.html */
class __TwigTemplate_b902de91a30d60a0ab9e3b1b9358e954 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link href=\"";
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"";
        // line 2
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
";
    }

    public function getTemplateName()
    {
        return "_css_loader.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  13 => 2,  7 => 1,  76 => 23,  73 => 22,  68 => 5,  62 => 26,  60 => 25,  57 => 24,  55 => 22,  50 => 19,  48 => 18,  45 => 17,  43 => 16,  33 => 10,  25 => 5,  19 => 1,  42 => 10,  38 => 13,  35 => 11,  30 => 4,  27 => 3,);
    }
}
