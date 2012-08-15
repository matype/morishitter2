<?php

/* _base.html */
class __TwigTemplate_ac5684906fd1a9338ae5d206826d8944 extends Twig_Template
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
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    
    ";
        // line 10
        $this->env->loadTemplate("_css_loader.html")->display($context);
        // line 11
        echo "    ";
        // line 12
        echo "    <link rel=\"shortcut icon\" href=\"";
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/ico/ikasama.ico\"> 
  </head>

  <body>
    ";
        // line 16
        $this->env->loadTemplate("_static_nav.html")->display($context);
        // line 17
        echo "    <div class=\"container\">
      ";
        // line 18
        $this->env->loadTemplate("_message.html")->display($context);
        // line 19
        echo "


      ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "    </div>
    ";
        // line 28
        $this->env->loadTemplate("_js_loader.html")->display($context);
        // line 29
        echo "  </body>
</html>
";
    }

    // line 5
    public function block_TITLE($context, array $blocks = array())
    {
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "


      ";
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
        return array (  79 => 23,  76 => 22,  71 => 5,  65 => 29,  63 => 28,  60 => 27,  58 => 22,  53 => 19,  51 => 18,  48 => 17,  46 => 16,  37 => 12,  35 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }
}
