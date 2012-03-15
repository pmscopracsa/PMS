<?php

/* ConfiguraObraBundle:Default:index.html.twig */
class __TwigTemplate_706d3eea70da7c621497195327eb0114 extends Twig_Template
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
        return "ConfiguraObraBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
