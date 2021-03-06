<?php
//Inclusiones obligatorias, primero el FrameWork y segundo el identificador de seguridad
require("../../../config/config.inc.php");
$DOM["SECURITY_ID"] = "*";

//Carga el sistema de seguridad
require("viewmanager/security.inc.php");

//Gestor de parámetros
$Params = new Moon2_Params_Parameters();
$Params->verify("GET",false);
$msg = $Params->get_parameter("msg", "");
$Formulario = new Moon2_Forms_Form();

//Gestor de la página
$Face = new Moon2_ViewManager_Controller();
$componente = $userFunc->getComponent("Mantenimiento Tablas");
$Face->set_name("Crear Programas");
$Face->set_component($componente);
$Face->add_javascript("../js/programas.js");
$Face->set_type("INSIDE");
$Face->set_sysmenu(TRUE);

//$Face->add_navigation("Programas", "#");
//$Face->add_navigation("Listado", "programas_admin.php");
//$Face->add_navigation("Creacion de Programas", "#");

//Despliegue de la página en xhtml
echo $Face->open();
require($Face->getView());
echo $Face->close();
?>