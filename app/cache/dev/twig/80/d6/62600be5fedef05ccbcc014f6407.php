<?php

/* ContactoBundle:Default:index.html.twig */
class __TwigTemplate_80d662600be5fedef05ccbcc014f6407 extends Twig_Template
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
        return "ContactoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
