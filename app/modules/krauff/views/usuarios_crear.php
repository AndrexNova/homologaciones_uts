<?php
//Inclusiones obligatorias, primero el FrameWork y segundo el identificador de seguridad
require("../../../config/config.inc.php");
$DOM["SECURITY_ID"] = array("KRAUFF");

//Carga el sistema de seguridad
require("viewmanager/security.inc.php");

//Gestor de parámetros
$Params = new Moon2_Params_Parameters();
$Params->verify("GET",false);
$msg = $Params->get_parameter("msg", "");
$Formulario = new Moon2_Forms_Form();

//Gestor de la página
$Face = new Moon2_ViewManager_Controller();
$componente = $userFunc->getComponent("Usuarios");
$Face->set_name("Crear Usuario");
$Face->set_component($componente);
$Face->add_javascript("../js/usuarios_flotantes.js");
$Face->set_type("INSIDE");
$Face->set_sysmenu(true);
$Face->add_navigation("Inicio", "../../main/views/index.php");
$Face->add_navigation("Listado", "usuarios_admin.php");
$Face->add_navigation("Creacion", "#");
   

//armando el combo de perfiles
$FacadePerfiles = new Modules_Krauff_Model_PerfilesFacade();
$arr_perfiles = $FacadePerfiles->comboperfiles();

//Despliegue de la página en xhtml
echo $Face->open();
require($Face->getView());
echo $Face->close();
?>