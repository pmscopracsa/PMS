<?php

/* ContactoBundle:Contacto:regcompania.html.twig */
class __TwigTemplate_70c79b73cff74c9d26e056643c0b28bc extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
<title>REGISTRAR COMPANIAS</title>
</head>
<h1>REGISTRO DE COMPANIAS</h1>

<form action=\"\" method=\"POST\">

<label for=\"codigo\">C&oacute;digo:</label>
<input type=\"text\" name=\"codigo\" />

<label for=\"tipo_empresa\">Tipo de Empresa:</label>
<input type=\"text\"/><br />

<label for=\"ruc\">RUC</label>
<input type=\"text\" /><br />

<label for=\"nombre\">Nombre</label>
<input type=\"text\"/><br />

<label for=\"nombre_comercial>Nombre comercial</label>
<input type=\"text\"/><br />

<label for=\"giro\">Giro</label>
<input type=\"text\" /><br />

<label for=\"actividad_principal\">Actividad Principal</label>
<input type=\"text\" /><br />

<label for=\"telefono_fijo\">Telefonos Fijos</label>
<label for=\"telefono_movil\">Telefonos Moviles</label>

<label for=\"fax\">Fax</label>
<input type=\"text\" /><br />

<label for=\"especialidad\">Especialidad</label><br />

<input type=\"submit\" value=\"Procesar\" />

</form>

</html>
";
    }

    public function getTemplateName()
    {
        return "ContactoBundle:Contacto:regcompania.html.twig";
    }

}
