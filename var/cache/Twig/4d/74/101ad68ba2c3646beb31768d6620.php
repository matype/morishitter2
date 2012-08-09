<?php

/* _message.html */
class __TwigTemplate_4d74101ad68ba2c3646beb31768d6620 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if (isset($context["MESSAGE_ALERT"])) { $_MESSAGE_ALERT_ = $context["MESSAGE_ALERT"]; } else { $_MESSAGE_ALERT_ = null; }
        if ($_MESSAGE_ALERT_) {
            // line 3
            echo "  <div class=\"alert ";
            if (isset($context["MESSAGE_ALERT"])) { $_MESSAGE_ALERT_ = $context["MESSAGE_ALERT"]; } else { $_MESSAGE_ALERT_ = null; }
            if ($this->getAttribute($_MESSAGE_ALERT_, "type")) {
                echo "alert-";
                if (isset($context["MESSAGE_ALERT"])) { $_MESSAGE_ALERT_ = $context["MESSAGE_ALERT"]; } else { $_MESSAGE_ALERT_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_MESSAGE_ALERT_, "type"), "html", null, true);
            } else {
                echo "alert";
            }
            echo " alert-block\">
    <a class=\"close\" data-dismiss=\"alert\">×</a>
    ";
            // line 5
            if (isset($context["MESSAGE_ALERT"])) { $_MESSAGE_ALERT_ = $context["MESSAGE_ALERT"]; } else { $_MESSAGE_ALERT_ = null; }
            if ($this->getAttribute($_MESSAGE_ALERT_, "heading")) {
                echo "<h4 class=\"alert-heading\">";
                if (isset($context["MESSAGE_ALERT"])) { $_MESSAGE_ALERT_ = $context["MESSAGE_ALERT"]; } else { $_MESSAGE_ALERT_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_MESSAGE_ALERT_, "heading"), "html", null, true);
                echo "</h4>";
            }
            // line 6
            echo "    ";
            if (isset($context["MESSAGE_ALERT"])) { $_MESSAGE_ALERT_ = $context["MESSAGE_ALERT"]; } else { $_MESSAGE_ALERT_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_MESSAGE_ALERT_, "content"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "      ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $_message_, "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 9
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "_message.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  31 => 6,  23 => 5,  10 => 3,  13 => 2,  7 => 2,  139 => 58,  133 => 52,  131 => 51,  127 => 49,  124 => 48,  119 => 51,  111 => 5,  105 => 68,  103 => 67,  93 => 59,  91 => 58,  86 => 55,  83 => 48,  81 => 47,  64 => 36,  37 => 7,  35 => 10,  27 => 5,  21 => 1,  49 => 11,  44 => 8,  41 => 7,  36 => 5,  30 => 3,  25 => 4,);
    }
}
