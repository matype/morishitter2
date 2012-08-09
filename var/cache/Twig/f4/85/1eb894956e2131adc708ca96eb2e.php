<?php

/* delete.html */
class __TwigTemplate_f4851eb894956e2131adc708ca96eb2e extends Twig_Template
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
        echo "Delete?
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<form class=\"form-horizontal\" method=\"POST\" action=\"index.php\">
  <div class=\"control-group\">
    <label class=\"control-label\" for=\"input01\">Password</label>
    <div class=\"controls\">
      <input type=\"password\" class=\"input-xlarge\" id=\"input01\" name=\"deletePassword\" value=\"\">
      <input type=\"hidden\" name=\"id2\" value=\"";
        // line 15
        if (isset($context["hogehoge"])) { $_hogehoge_ = $context["hogehoge"]; } else { $_hogehoge_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_hogehoge_, "id"), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"correctPasswordD\" value=\"";
        // line 16
        if (isset($context["hogehoge"])) { $_hogehoge_ = $context["hogehoge"]; } else { $_hogehoge_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_hogehoge_, "password"), "html", null, true);
        echo "\" />
      <p class=\"help-block\">In addition to freeform text, any HTML5 text-based input appears like so.</p>
    </div>
  </div>

  <div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
  </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "delete.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  46 => 15,  38 => 9,  35 => 8,  30 => 4,  27 => 3,);
    }
}
