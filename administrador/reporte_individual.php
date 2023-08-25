<!DOCTYPE html>
<html lang="en">
<!-- inicio head -->
           <?php include("inclusion/head.php");?>
<!-- fin head -->
<body class="side-panel side-panel-static">

           <?php include("inclusion/menu.php");?>

    <!-- No borrar aquí acaba el body inner -->
    <div class="body-inner">
    <!-- No borrar aquí acaba el body inner -->

        <!-- Header -->
       <?php include("inclusion/header.php");?>
        <!-- end: Header -->

       <!-- inicia cuerpo -->

<!-- Services -->
        <section id="page-content" class="no-sidebar">
            <div class="container table-responsive">
                <!-- DataTable -->
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h4>Control Salarios</h4>
                        <!--<p>Add advanced interaction controls to your HTML tables</p>-->
                    </div>
                    
                    <div class="col-lg-6 text-end">
                        
                        <div id="export_buttons" class="mt-2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cargo</th>
                                    <th>Sucursal</th>
                                    <th>Edad</th>
                                    <th>Fecha de registro</th>
                                    <th>Salario</th>
                                    <th>Estado</th>
                                    <th class="noExport">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Edgar Vázquez</td>
                                    <td>Asistente</td>
                                    <td>Polanco</td>
                                    <td>35</td>
                                    <td>2020/04/25</td>
                                    <td>$10,800</td>
                                    <td><span class="badge badge-pill bg-warning">Warning</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Edgar Vázquez</td>
                                    <td>Asistente</td>
                                    <td>Polanco</td>
                                    <td>35</td>
                                    <td>2020/04/25</td>
                                    <td>$10,800</td>
                                    <td><span class="badge badge-pill bg-success">Sucess</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Edgar Vázquez</td>
                                    <td>Asistente</td>
                                    <td>Polanco</td>
                                    <td>35</td>
                                    <td>2020/04/25</td>
                                    <td>$10,800</td>
                                    <td><span class="badge badge-pill bg-primary">Primary</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Edgar Vázquez</td>
                                    <td>Asistente</td>
                                    <td>Polanco</td>
                                    <td>35</td>
                                    <td>2020/04/25</td>
                                    <td>$10,800</td>
                                    <td><span class="badge badge-pill bg-info">Info</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Edgar Vázquez</td>
                                    <td>Asistente</td>
                                    <td>Polanco</td>
                                    <td>35</td>
                                    <td>2020/04/25</td>
                                    <td>$10,800</td>
                                    <td><span class="badge badge-pill bg-secondary">Secundary</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Edgar Vázquez</td>
                                    <td>Asistente</td>
                                    <td>Polanco</td>
                                    <td>35</td>
                                    <td>2020/04/25</td>
                                    <td>$10,800</td>
                                    <td><span class="badge badge-pill bg-danger">Danger</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                        
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cargo</th>
                                    <th>Sucursal</th>
                                    <th>Edad</th>
                                    <th>Fecha de registro</th>
                                    <th>Salario</th>
                                    <th>Estado</th>
                                    <th class="noExport">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- end: DataTable -->
            </div>
        </section>
        <!-- end: Page Content -->





       <!-- finaliza cuerpo -->
       <?php include("inclusion/footer.php");?>

        <!-- end: Footer -->
    <!-- No borrar aquí acaba el body inner -->
    </div>
</body>
    <!-- No borrar aquí acaba el body inner -->
        <?php include("inclusion/script.php");?>


</html>