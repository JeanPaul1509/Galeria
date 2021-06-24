<?php encabezado() ?>
<!-- Begin Page Content -->
<div class="page-content bg-light">
    <div class="page-header bg-light">
        <div class="container-fluid">
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#nuevo_cliente"><i class="fas fa-plus-circle"></i>Nuevo</button>
            <a href="<?php echo base_url(); ?>/Configuracion/eliminados" class="btn btn-danger">Inactivos</a>
            <h2 class="text-primary"class="h5 no-margin-bottom">Datos de la Empresa</h2>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 ml-auto">
                        <?php if (isset($alert['mensaje'])) {
                            if ($alert['mensaje'] == "modificado") { ?>
                                <div class="alert alert-primary" role="alert">
                                    <strong>Datos Modificado</strong>
                                </div>
                            <?php } else { ?>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Error al Actualizar</strong>
                                </div>
                        <?php }
                        } ?>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header bg-info">
                            Datos de la Empresa
                        </div>
                        <div class="card-body ">
                            <form action="<?php echo base_url(); ?>/Configuracion/actualizar" method="post">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <strong class="text-primary" for="ruc">Ruc</strong>
                                            <input id="id" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                            <input id="ruc" class="form-control" type="text" name="ruc" value="<?php echo $data['ruc']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <strong class="text-primary" for="nombre">Nombre</strong>
                                            <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $data['nombre']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <strong class="text-primary" for="telefono">Teléfono</strong>
                                            <input id="telefono" class="form-control" type="text" name="telefono" value="<?php echo $data['telefono']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <strong class="text-primary" for="direccion">Dirección</strong>
                                            <input id="direccion" class="form-control" type="text" name="direccion" value="<?php echo $data['direccion']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <strong class="text-primary" for="razon">Razon Social</strong>
                                            <input id="razon" class="form-control" type="text" name="razon" value="<?php echo $data['razon']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="nuevo_configuracion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title text-primary" id="my-modal-title"><i class="fas fa-user-plus"></i>Nuevo Usuario</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?php echo base_url(); ?>Usuarios/insertar" autocomplete="off">
                <div class="modal-body bg-info">
                    <div class="form-group">
                        <strong class="text-dark" for="nombre">Nombre</strong>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong class="text-dark" for="usuario">Usuario</strong>
                                <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong class="text-dark" for="correo">Correo</strong>
                                <input id="correo" class="form-control" type="text" name="correo" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong class="text-dark" for="clave">Contraseña</strong>
                                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong class="text-dark" for="confirmar">Correo</strong>
                                <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar Contraseña">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <strong class="text-dark" for="rol">Rol</strong>
                            <select id="rol" class="form-control" name="rol">
                                <option value="Administrador">Administrador</option>
                                <option value="Vendedor">Vendedor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <button class="btn btn-primary" type="submit">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php pie() ?>