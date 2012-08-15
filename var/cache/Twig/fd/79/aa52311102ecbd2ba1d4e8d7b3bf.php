<?php

/* profile.html */
class __TwigTemplate_fd79aa52311102ecbd2ba1d4e8d7b3bf extends Twig_Template
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
        // line 16
        if (isset($context["my_profile"])) { $_my_profile_ = $context["my_profile"]; } else { $_my_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_my_profile_, "user"), "description"), "html", null, true);
        echo "
";
        // line 17
        if (isset($context["my_profile"])) { $_my_profile_ = $context["my_profile"]; } else { $_my_profile_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_my_profile_);
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 18
            echo "

<IMG SRC=\"";
            // line 20
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "profile_image_url"), "html", null, true);
            echo "\" ALT=\"icon\" WIDTH=\"50\" HEIGHT=\"50\"> ";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
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
        return "profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  63 => 20,  59 => 18,  54 => 17,  49 => 16,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
