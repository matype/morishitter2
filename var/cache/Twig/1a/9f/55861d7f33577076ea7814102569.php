<?php

/* tweet.html */
class __TwigTemplate_1a9f55861d7f33577076ea7814102569 extends Twig_Template
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
        echo "<br><br>

<a class=\"btn\" href=\"tweet.php\">Home</a>
<a class=\"btn\" href=\"mention.php\">Mention</a>
<a class=\"btn\" href=\"fav.php\">Favorites</a>
<a class=\"btn\" href=\"profile.php\">Profile</a>
<a class=\"btn\" href=\"DM.php\">DM</a>

<br><br><br><br>

<form class=\"form-horizontal\" method=\"POST\" action=\"tweet.php\">
  <fieldset>
    <div class=\"control-group\">
      <label class=\"control-label\" for=\"textarea\">Tweet here</label>
      <div class=\"controls\">
        <textarea class=\"input-xlarge\" id=\"textarea\" rows=\"10\" cols=\"10\" name=\"tweet\">";
        // line 22
        if (isset($context["reply"])) { $_reply_ = $context["reply"]; } else { $_reply_ = null; }
        if ($_reply_) {
            echo "@";
            if (isset($context["reply"])) { $_reply_ = $context["reply"]; } else { $_reply_ = null; }
            echo twig_escape_filter($this->env, $_reply_, "html", null, true);
            echo " ";
        }
        echo "</textarea>
      </div>
    </div>
    <div class=\"form-actions\">
      <button type=\"submit\" class=\"btn btn-primary\"> Tweet </button>
    </div>
  </fieldset>
</form>
<br><br>
";
        // line 31
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 32
            echo "<IMG SRC=\"";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "profile_image_url"), "html", null, true);
            echo "\" ALT=\"icon\" WIDTH=\"50\" HEIGHT=\"50\"> ";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo " : ";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "text"), "html", null, true);
            echo "<br>

<form class=\"form-horizontal\" method=\"POST\" action=\"tweet.php\">
  <div class=\"form-actions\">
    <button class=\"btn\" name=\"reply\" value=\"";
            // line 36
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\">Reply</button>
    <button class=\"btn btn-warning\" name=\"fav\" value=\"";
            // line 37
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">★ </button>
    <button class=\"btn btn-info\" name=\"RT\" value=\"";
            // line 38
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">RT</button>
  </div>
</form>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "<br><br><br>
<form class=\"form-horizontal\" method=\"POST\" action=\"tweet.php\">
  <div class=\"form-actions\">
    <button class=\"btn btn-success\">Reload</button>
  </div>
</form>
<br><br><br><br><br><br><br><br>
";
    }

    public function getTemplateName()
    {
        return "tweet.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  103 => 38,  98 => 37,  93 => 36,  78 => 32,  73 => 31,  55 => 22,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
