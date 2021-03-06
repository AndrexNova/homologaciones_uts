<?php
if (!isset($DOM["SECURITY_ID"])) {
    echo "<h1>MOON2 Message:<br />Can not call view, requires the view controller</h1>";
    exit();
}
?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                </div>
                <div class="ibox-content">
                    <form id="frm_usuarios" method="post" action="moon2.php" onSubmit="javascript:return managedProccess(this);">
                        <input type="hidden" id="action" name="action" value="crear" />
                        <input type="hidden" id="controller" name="controller" value="krauff/usuarioscontroller" />

                        <div class="table-responsive">
                            <table class="table table-striped table-condensed" border="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td><label class="col-sm-12 control-label">Perfil</label></td>
                                        <td><label class="col-sm-12 control-label">Nombres</label></td>
                                        <td><label class="col-sm-12 control-label">Primer Apellido</label></td>
                                        <td><label class="col-sm-12 control-label">Segundo Apellido</label></td>
                                        <td><label class="col-sm-12 control-label">Tipo Documento</label></td>
                                    </tr>
                                    <tr>
                                        <td><div class="col-sm-12 m-b-xs"><?php echo $Formulario->addObject("MenuList", "codperfil", $arr_perfiles, "1", "class='form-control'  tabindex='1' style='cursor:pointer;'"); ?></div></td>
                                        <td><div class="col-sm-12"><input type="text" class="form-control" id="nombres" name="nombres" tabindex="2" required/></div></td>
                                        <td><div class="col-sm-12"><input type="text" class="form-control" id="primerapellido" name="primerapellido" tabindex="3" required/></div></td>
                                        <td><div class="col-sm-12"><input type="text" class="form-control" id="segundopellido" name="segundoapellido" tabindex="4" required/></div></td>
                                        <td><div class="col-sm-12 m-b-xs"><?php echo $Formulario->addObject("MenuList", "tipodoc", $DOM["TIPODOC"], "1", "class='form-control' tabindex='5' style='cursor:pointer;'"); ?></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-condensed" border="0" width="100%">
                                <tbody>                        
                                    <tr>
                                        <td><label class="col-sm-12 control-label">Documento</label></td>
                                        <td><label class="col-sm-12 control-label">Genero</label></td>
                                        <td><label class="col-sm-12 control-label">Dirección</label></td>
                                        <td><label class="col-sm-12 control-label">telefono</label></td>
                                    </tr>
                                    <tr>
                                        <td><div class="col-sm-12"><input type="text" class="form-control" id="documento" name="documento" tabindex="6" required/></div></td>
                                        <td><div class="col-sm-12 m-b-xs"><?php echo $Formulario->addObject("MenuList", "genero", $DOM["GENERO"], "1", "class='form-control' tabindex='7' style='cursor:pointer;'"); ?></div></td>
                                        <td><div class="col-sm-12"><input type="text" class="form-control" id="direccion" name="direccion" tabindex="8" required/></div></td>
                                        <td><div class="col-sm-12"><input type="text" class="form-control" id="telefono" name="telefono" tabindex="9" required/></div></td>
                                    </tr>
                                </tbody>   
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-condensed" border="0" width="100%">
                                <tbody>          
                                    <tr>
                                        <td><label class="col-sm-12 control-label">Email</label></td>
                                        <td><label class="col-sm-12 control-label">Nombre Usuario</label></td>
                                        <td><label class="col-sm-12 control-label">Contraseña</label></td>
                                        <td><label class="col-sm-12 control-label">Confirmar Contraseña</label></td>
                                    </tr>
                                    <tr>
                                        <td><div class="col-sm-12"><input type="email" class="form-control" id="correo" name="correo" tabindex="10" required/></div></td>
                                        <td><div class="col-sm-12"><input type="email" class="form-control" id="nombreusuario" name="nombreusuario" tabindex="11" required/></div></td>
                                        <td><div class="col-sm-12"><input type="password" id="clave" name="clave" class="form-control" tabindex="12" required/></div></td>
                                        <td><div class="col-sm-12"><input type="password" id="confirmarclave" name="confirmarclave" class="form-control" tabindex="13" required/></div></td>                                                
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

