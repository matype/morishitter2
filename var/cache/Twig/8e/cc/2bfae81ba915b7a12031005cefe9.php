<?php

/* DM.html */
class __TwigTemplate_8ecc2bfae81ba915b7a12031005cefe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_base.html");

        $this->blocks = array(
            'TITLE' => array($this, 'block_TITLE'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_TITLE($context, array $blocks = array())
    {
        // line 4
        echo "morishitter
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<br><br>

<a class=\"btn\" href=\"tweet.php\">Home</a>
<a class=\"btn\" href=\"mention.php\">Mention</a>
<a class=\"btn\" href=\"fav.php\">Favorites</a>
<a class=\"btn\" href=\"profile.php\">Profile</a>

<br><br><br><br>

";
        // line 17
        if (isset($context["DM"])) { $_DM_ = $context["DM"]; } else { $_DM_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_DM_);
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 18
            echo "

<IMG SRC=\"";
            // line 20
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "sender"), "profile_image_url"), "html", null, true);
            echo "\" ALT=\"icon\" WIDTH=\"50\" HEIGHT=\"50\"> ";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "sender"), "screen_name"), "html", null, true);
            echo " : ";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "text"), "html", null, true);
            echo "<br>
<br>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "
<br><br><br>

";
    }

    public function getTemplateName()
    {
        return "DM.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  59 => 20,  55 => 18,  50 => 17,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
