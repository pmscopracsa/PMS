<?php

/* AutenticaBundle:Security:login.html.twig */
class __TwigTemplate_828267aae2a800739c000235685463f0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getContext($context, "error")) {
            // line 2
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"POST\">
  <label for=\"username\">Usuario:</label>
  <input id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
  <label for=\"password\">Password:</label>
  <input id=\"password\" type=\"password\" name=\"_password\" />
  <input type=\"submit\" name=\"login\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "AutenticaBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
