<?php encabezado() ?>
<!-- Begin Page Content -->
<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#nuevo_cliente"><i class="fas fa-plus-circle"></i>Nuevo</button>
                            <a href="<?php echo base_url(); ?>/Usuarios/eliminados" class="btn btn-danger">Inactivos</a>
                        </div>
                        <div class="col-lg-6">
                            <?php if (isset($_GET['msg'])) {
                                $alert = $_GET['msg'];
                                if ($alert == "existe") { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>El usuario ya existe</strong>
                                    </div>
                                <?php } else if ($alert == "error") { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Error al registrar</strong>
                                    </div>
                                <?php } else if ($alert == "registrado") { ?>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Usuario Registrado</strong>
                                    </div>
                                <?php } else if ($alert == "modificado") { ?>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Usuario Modificado</strong>
                                    </div>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Las Contraseña no coinciden</strong>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="Table">
                            <thead class="bg-info">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>usuario</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $us) { ?>
                                    <tr>
                                        <td><?php echo $us['id']; ?></td>
                                        <td><?php echo $us['nombre']; ?></td>
                                        <td><?php echo $us['usuario']; ?></td>
                                        <td><?php echo $us['correo']; ?></td>
                                        <td><?php echo $us['rol']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>Usuarios/editar?id=<?php echo $us['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <form action="<?php echo base_url() ?>Usuarios/eliminar?id=<?php echo $us['id']; ?>" method="post" class="d-inline elim">
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="nuevo_cliente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
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