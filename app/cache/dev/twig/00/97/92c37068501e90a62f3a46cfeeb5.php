<?php

/* ContactoBundle:Contacto:regpersona.html.twig */
class __TwigTemplate_009792c37068501e90a62f3a46cfeeb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/contacto/css/normalizar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo " 
REGISTRO DE PERSONA
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
<form action=\"\" method=\"post\">
    
    <table>
        <tr>
            <td><label for=\"dni\">D.N.I</label></td>
            <td><input type=\"text\" size=\"15\" name=\"dni\" /></td>
        </tr>
        <tr>
            <td><label for=\"nombre\">Nombre:</label></td>
            <td><input type=\"text\" size=\"15\" name=\"nombre\" /></td>
        </tr>
        <tr>
            <td><label for=\"direccion\">Direccion:</label></td>
            <td><input type=\"text\" size=\"15\" name=\"direccion\" /></td>
        </tr>
        <tr>
            <td><label for=\"compania\">Compania</label></td>
            <td><input type=\"text\" size=\"15\" name=\"compania\" /></td>
        </tr>
        <tr>
            <td><label for=\"cargo\">Cargo</label></td>
            <td><input type=\"text\" size=\"15\" name=\"cargo\" /></td>
        </tr>
        <tr>
            <td><label for=\"tfijo\">Telefono Fijo</label></td>
            <td><input type=\"text\" size=\"15\" name=\"tfijo\" /></td>
        </tr>
        <tr>
            <td><label for=\"tmovil\">Telefono Movil</label></td>
            <td><input type=\"text\" size=\"15\" name=\"tmovil\" /></td>
        </tr>
        <tr>
            <td><label for=\"nextel\">Nextel</label></td>
            <td><input type=\"text\" size=\"15\" name=\"nextel\" /></td>
        </tr>
        <tr>
            <td><label for=\"especialidad\">Especialidad</label></td>
            <td><input type=\"text\" size=\"15\" name=\"especialidad\" /></td>
        </tr>
        <tr>
            <td><label for=\"observacion\">Observacion:</label></td>
            <td><input type=\"text\" size=\"15\" name=\"observacion\" /></td>
        </tr>
        <tr>
            <td><label for=\"email\">Email</label></td>
            <td><input type=\"text\" size=\"15\" name=\"email\" /></td>
        </tr>
        <tr>
            <td><label for=\"web\">Direccion Web</label></td>
            <td><input type=\"text\" size=\"15\" name=\"web\" /></td>
        </tr>
        <tr>
            <td><label for=\"viaenvio\">Via Envio</label></td>
            <td><input type=\"text\" size=\"15\" name=\"viaenvio\" /></td>
        </tr>
    </table>
</form>

";
    }

    public function getTemplateName()
    {
        return "ContactoBundle:Contacto:regpersona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
