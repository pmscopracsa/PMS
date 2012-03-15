<?php

/* ProcuraBundle:Default:index.html.twig */
class __TwigTemplate_0b64451bc3b99527673e223d994112a0 extends Twig_Template
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
        return "ProcuraBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
