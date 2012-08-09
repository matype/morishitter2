<?php

/* _base.html */
class __TwigTemplate_800810870ff0129d6449f4fd95109619 extends Twig_Template
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
        echo "    <link rel=\"shortcut icon\" href=\"../../htdocs/image/ikasama.ico\">
    ";
        // line 13
        echo "  </head>

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
        // line 24
        echo "    </div>
    ";
        // line 25
        $this->env->loadTemplate("_js_loader.html")->display($context);
        // line 26
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
        return array (  76 => 23,  73 => 22,  68 => 5,  62 => 26,  60 => 25,  57 => 24,  55 => 22,  50 => 19,  48 => 18,  45 => 17,  43 => 16,  33 => 10,  25 => 5,  19 => 1,  38 => 13,  35 => 11,  30 => 4,  27 => 3,);
    }
}
