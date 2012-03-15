<?php

/* AutenticaBundle:Default:index.html.twig */
class __TwigTemplate_7996eca5a5f1a643a610efdf3f535075 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "AutenticaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
