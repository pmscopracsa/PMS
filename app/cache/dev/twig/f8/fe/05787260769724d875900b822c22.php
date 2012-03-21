<?php

/* ContactoBundle:Contacto:sidebar_contacto.html.twig */
class __TwigTemplate_f8fe05787260769724d875900b822c22 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div id=\"side_bar\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compania_nuevo"), "html", null, true);
        // line 7
        echo "\">
    </a>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_nuevo"), "html", null, true);
        // line 13
        echo "\">
    </a>
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lista_distribucion_nuevo"), "html", null, true);
        // line 19
        echo "\">
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "ContactoBundle:Contacto:sidebar_contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
