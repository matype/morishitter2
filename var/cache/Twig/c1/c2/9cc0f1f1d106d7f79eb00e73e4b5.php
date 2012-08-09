<?php

/* index.html */
class __TwigTemplate_c1c29cc0f1f1d106d7f79eb00e73e4b5 extends Twig_Template
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
        echo "イカサマ掲示板
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        if (isset($context["hoge"])) { $_hoge_ = $context["hoge"]; } else { $_hoge_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_hoge_);
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 9
            echo "
";
            // line 13
            echo "

<table class=\"table\" border=\"1\" cellpadding=\"5\">
  <tr>
    <th>";
            // line 17
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "title"), "html", null, true);
            echo "</th>
    <td>";
            // line 18
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "name"), "html", null, true);
            echo "</td>
  </tr>
  <tr>
    <td>";
            // line 21
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "created"), "html", null, true);
            echo "</td>
    <td>";
            // line 22
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "updated"), "html", null, true);
            echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\">";
            // line 25
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "content"), "html", null, true);
            echo "</td>
  </tr>
</table>

";
            // line 29
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "password"), "html", null, true);
            echo "

<form class=\"form-horizontal\" method=\"POST\" action=\"index.php\">
  ";
            // line 33
            echo "  <div class=\"form-actions\">
    <a href=\"edit.php?id=";
            // line 34
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id"), "html", null, true);
            echo "\">Edit</a>
    <a href=\"delete.php?id2=";
            // line 35
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id"), "html", null, true);
            echo "\">Delete</a>    
    ";
            // line 37
            echo "  </div>
</form>
<br><br><br>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "

<form class=\"form-horizontal\" method=\"POST\" action=\"index.php\">
  <fieldset>
    <div class=\"control-group\">
      <label class=\"control-label\" for=\"input01\">Title input</label>
      <div class=\"controls\">
        <input type=\"text\" class=\"input-xlarge\" id=\"input01\" name=\"title\">
        <p class=\"help-block\">In addition to freeform text, any HTML5 text-based input appears like so.</p>
      </div>
    </div>


    <div class=\"control-group\">
      <label class=\"control-label\" for=\"textarea\">Contents</label>
      <div class=\"controls\">
        <textarea class=\"input-xlarge\" id=\"textarea\" rows=\"10\" name=\"contents\"></textarea>
      </div>
    </div>

    <div class=\"control-group\">
      <label class=\"control-label\" for=\"input01\">Name</label>
      <div class=\"controls\">
        <input type=\"text\" class=\"input-xlarge\" id=\"input01\" name=\"name\">
        <p class=\"help-block\">In addition to freeform text, any HTML5 text-based input appears like so.</p>
      </div>
    </div>


    <div class=\"control-group\">
      <label class=\"control-label\" for=\"input01\">Password</label>
      <div class=\"controls\">
        <input type=\"password\" class=\"input-xlarge\" id=\"input01\" name=\"password\" value=\"\">
        <p class=\"help-block\">In addition to freeform text, any HTML5 text-based input appears like so.</p>
      </div>
    </div>



    <div class=\"form-actions\">
      <button type=\"submit\" class=\"btn btn-primary\">Create</button>
    </div>
  </fieldset>
</form>



<form class=\"form-horizontal\" method=\"POST\" action=\"index.php\">
  <fieldset>
    <div class=\"control-group\">
      <label class=\"control-label\" for=\"input01\">Delete title input</label>
      <div class=\"controls\">
        <input type=\"text\" class=\"input-xlarge\" id=\"input01\" name=\"deleteTitle\">
        <p class=\"help-block\">In addition to freeform text, any HTML5 text-based input appears like so.</p>
      </div>
    </div>
    <div class=\"form-actions\">
      <button type=\"submit\" class=\"btn btn-primary\">Delete</button>
    </fieldset>
  </form>



  ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  107 => 37,  102 => 35,  97 => 34,  94 => 33,  87 => 29,  79 => 25,  72 => 22,  67 => 21,  60 => 18,  55 => 17,  49 => 13,  46 => 9,  41 => 8,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
