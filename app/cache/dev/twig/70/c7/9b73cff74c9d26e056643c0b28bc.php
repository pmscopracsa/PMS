<?php

/* ContactoBundle:Contacto:regcompania.html.twig */
class __TwigTemplate_70c79b73cff74c9d26e056643c0b28bc extends Twig_Template
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
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/contacto/js/jquery1.4.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/contacto/js/tfijo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/contacto/js/tnextel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/contacto/js/tmovil.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/contacto/js/direccion.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        echo " registro de compania ";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "


<form action=\"\" method=\"post\">
    <div class=\"\">
        <table>
            <tr>
                <td><label for=\"codigo\">C&oacute;digo:</label></td>
                <td><input type=\"text\" size=\"30\" placeholder=\"\" name=\"codigo\"  /></td>
            </tr>
            <tr>
                <td><label for=\"tipocompania\">Tipo de Compania:</label></td>
                <td>
                    <select id=\"tipocompaniaseleccionada\">
                    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tipocompanias"));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocompania"]) {
            // line 36
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tipocompania"), "nombrecorto"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tipocompania"), "nombre"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocompania'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "                    </select>       
                </td>
            </tr>
            <tr>
                <td><label for=\"ruc\">RUC</label></td>
                <td><input type=\"text\" size=\"30\" placeholder=\"\" name=\"ruc\" /></td>
            </tr>
            <tr>
                <td><label for=\"nombre\">Nombre</label></td>
                <td><input type=\"text\" size=\"30\" placeholder=\"\" name=\"nombre\" /></td>
            </tr>
            <tr>
                <td><label for=\"nombre_comercial\">Nombre comercial</label></td>
                <td><input type=\"text\" size=\"30\" placeholder=\"\" name=\"nombrecomercial\" /></td>
            </tr>
            <tr>
                <td><label for=\"partida_registral\">Partida Registral:</label></td>
                <td><input type=\"text\" size=\"30\" placeholder=\"\" name=\"partidaregistral\" /></td>
            </tr>
            <tr>
                <td><label for=\"giro\">Giro:</label></td>
                <td><input type=\"text\" size=\"30\" placeholder=\"\" name=\"giro\" /></td>
           </tr>
           <tr>
                <td><label for=\"actividad_principal\">Activida Principal:</label></td>
                <td><input type=\"text\" size=\"30\" placeholder=\"\" name=\"actividadprincipal\" /></td>
           </tr>
           <tr>
               <td><label for=\"telefono_fijo\"></label></td>
               <td>
                   <table>
                       <tr>
                           <th>Tel&eacute;fono Fijo</th>
                           <th colspan=\"2\">Acci&oacute;n</th>
                       </tr>
                       <tr>
                           <td><input type=\"text\" size=\"15\" name=\"telefonofijo\" /></td>
                           <td><input type=\"button\" class=\"addRow\" value=\"Agregar\" /></td>
                           <td><input type=\"button\" class=\"delRow\" value=\"Quitar\" /></td>
                       </tr>
                       <input type=\"hidden\" class=\"rowCount\" name=\"filastf\" />
                   </table>
                   <script type=\"text/javascript\">
                    (function(\$){
                        \$(document).ready(function(){
                            \$(\".addRow\").btnAddRow({displayRowCountTo:\"rowCount\"});
                            \$(\".delRow\").btnDelRow();
                        });
                    })(jQuery);
                    </script>
               </td>
           </tr>
           <tr>
               <td><label for=\"telefono_movil\"></label></td>
               <td>
                   <table>
                       <tr>
                           <th>Tel&eacute;fono M&oacute;vil</th>
                           <th colspan=\"2\">Acci&oacute;n</th>
                       </tr>
                       <tr>
                           <td><input type=\"text\" size=\"15\" name=\"telefonomovil\" /></td>
                           <td><input type=\"button\" class=\"addRowTMovil\" value=\"Agregar\" /></td>
                           <td><input type=\"button\" class=\"delRowTMovil\" value=\"Quitar\" /></td>
                       </tr>
                       <input type=\"hidden\" class=\"rowCountTM\" name=\"filastm\" />
                   </table>
                   <script type=\"text/javascript\">
                    (function(\$){
                        \$(document).ready(function(){
                            \$(\".addRowTMovil\").btnAddRowtm({displayRowCountToTM:\"rowCountTM\"});
                            \$(\".delRowTMovil\").btnDelRowtm();
                        });
                    })(jQuery);
                    </script>    
               </td>
           </tr>
           <tr>
               <td><label for=\"telefono_nextel\"></label></td>
               <td>
                   <table>
                       <tr>
                           <th>Tel&eacute;fono Nextel</th>
                           <th colspan=\"2\">Acci&oacute;n</th>
                       </tr>
                       <tr>
                           <td><input type=\"text\" size=\"15\" name=\"telefononextel\" /></td>
                           <td><input type=\"button\" class=\"addRow\" value=\"Agregar\" /></td>
                           <td><input type=\"button\" class=\"delRow\" value=\"Quitar\" /></td>
                       </tr>
                       <input type=\"hidden\" class=\"rowCountTN\" name=\"filastn\" />
                   </table>
               </td>
           </tr>
           <tr>
               <td><label for=\"direccion\"></label></td>
               <td>
                        <table>
                            <tr>
                                <th>Tipo de Direcci&oacute;n</th>
                                <th>Direcci&oacute;n</th>
                                <th>Departamento</th>
                                <th>Provincia</th>
                                <th>Distrito</th>
                                <th colspan=\"2\">Acci&oacute;n</th>
                            </tr>
                            <tr>
                                <td>
                                    <select id=\"tipodireccionseleccionada\">
                                    ";
        // line 147
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tipodirecciones"));
        foreach ($context['_seq'] as $context["_key"] => $context["tipodireccion"]) {
            // line 148
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tipodireccion"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tipodireccion"), "descripcion"), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipodireccion'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 150
        echo "                                    </select>
                                </td>
                                <td><input type=\"text\" size=\"15\" name=\"direccion\" /></td>
                                <td>
                                    <select id=\"departamentoseleccionado\">
                                    ";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "departamentos"));
        foreach ($context['_seq'] as $context["_key"] => $context["departamento"]) {
            // line 156
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "departamento"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "departamento"), "descripcion"), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departamento'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 158
        echo "                                    </select>
                                </td>
                                <td><input type=\"text\" size=\"15\" name=\"provincia\" /></td>
                                <td><input type=\"text\" size=\"15\" name=\"distrito\" /></td>
                                <td><input type=\"button\" class=\"addRow\" value=\"Agregar\" /></td>
                                <td><input type=\"button\" class=\"delRow\" value=\"Quitar\" /></td>
                            </tr>
                            <input type=\"hidden\" class=\"rowCount\" name=\"filasd\" />
                        </table>
               </td>
           </tr>
           <tr>
               <td><label for=\"especialidad\"></label></td>
               <td>
                   <table>
                       <tr>
                           <th>Especialidad</th>
                           <th colspan=\"2\">Acci&oacute;n</th>
                       </tr>
                       <tr>
                           <td><input type=\"text\" size=\"15\" name=\"especialidad\" /></td>
                           <td><input type=\"button\" class=\"addRow\" value=\"Agregar\" /></td>
                           <td><input type=\"button\" class=\"delRow\" value=\"Quitar\" /></td>
                       </tr>
                       <input type=\"hidden\" class=\"rowCount\" name=\"especialidades\" />
                   </table>
               </td>
           </tr>
           <tr>
               <td><label for=\"observacion\">Observaci&oacute;n</label></td>
               <td><input type=\"text\" size=\"15\" name=\"observacion\" /></td>
           </tr>
           <tr>
               <td><label for=\"email\">Email:</label></td>
               <td><input type=\"text\" size=\"30\" placeholder=\"\" name=\"email\" /></td>
           </tr>
           <tr>
               <td><label for=\"web\">Web:</label></td>
               <td><input type=\"text\" size=\"30\" placeholder=\"\" name=\"web\" /></td>
           </tr>
           <tr>
               <td><label for=\"via_envio\">V&iacute;a de Env&iacute;o:</label></td>
               <td>
                <select id=\"viaenvioseleccionada\">
                ";
        // line 202
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tipoenvios"));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoenvio"]) {
            // line 203
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tipoenvio"), "nombre"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tipoenvio"), "nombre"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoenvio'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 205
        echo "                </select>
               </td>
           </tr>
        </table>
    </div>
    <input type=\"submit\" value=\"Procesar\" />
    
</form>

";
    }

    public function getTemplateName()
    {
        return "ContactoBundle:Contacto:regcompania.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
