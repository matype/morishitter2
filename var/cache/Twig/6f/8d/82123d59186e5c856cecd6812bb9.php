<?php

/* _base.html */
class __TwigTemplate_6f8d82123d59186e5c856cecd6812bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'TITLE' => array($this, 'block_TITLE'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ja\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('TITLE', $context, $blocks);
        echo " - SoShall We</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    ";
        // line 10
        $this->env->loadTemplate("_css_loader.html")->display($context);
        // line 11
        echo "    <link rel=\"shortcut icon\" href=\"";
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/ico/favicon.ico\">
  </head>

  <body>
    ";
        // line 15
        $this->env->loadTemplate("_static_nav.html")->display($context);
        // line 16
        echo "    <div class=\"container\">
      ";
        // line 17
        $this->env->loadTemplate("_message.html")->display($context);
        // line 18
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "    </div>
    ";
        // line 21
        $this->env->loadTemplate("_js_loader.html")->display($context);
        // line 22
        echo "  </body>
</html>
";
    }

    // line 5
    public function block_TITLE($context, array $blocks = array())
    {
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "      ";
    }

    public function getTemplateName()
    {
        return "_base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  70 => 18,  65 => 5,  59 => 22,  57 => 21,  54 => 20,  51 => 18,  49 => 17,  46 => 16,  44 => 15,  35 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }
}
