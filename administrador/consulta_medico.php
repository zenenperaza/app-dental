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
        <section id="page-content" style="background-color:#c4dadf;">

            <div class="container">
                <div class="row">
                    <div class="content col-lg-9">
                        <h3>Alta y Modificación de Médico</h3>
                        <form>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="Ingresa nombre" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Cargo</label>
                                <div class="col-3">
                                    <input class="form-control" type="text" placeholder="Ingresa cargo" id="example-text-input">
                                </div>
                                <label for="example-text-input" class="col-3 col-form-label" style="text-align:right;">Sucursal</label>
                                <div class="col-4">
                                    <input class="form-control" type="text" placeholder="Ingresa sucursal" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Edad</label>
                                <div class="col-3">
                                    <input class="form-control" type="number" placeholder="00" id="example-number-input">
                                </div>
                                <label for="example-text-input" class="col-3 col-form-label" style="text-align:right;">Fecha de registro</label>
                                <div class="col-4">
                                    <input class="form-control" type="date" placeholder="2023-08-19" id="example-date-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Salario</label>
                                <div class="col-3">
                                    <input class="form-control" type="number" placeholder="$ 00.00 MXN" id="example-number-input">
                                </div>
                                <label for="example-text-input" class="col-3 col-form-label" style="text-align:right;">Salario</label>
                                <div class="col-3">
                                    <input class="form-control" type="number" placeholder="0000.00" id="example-number-input">
                                </div>
                             </div>
                             <button type="submit" class="btn m-t-30 mt-3">GUARDAR</button>

                          
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-content" class="no-sidebar">
            <!-- INICIO FILTRO DE BUSQUEDA -->
<div class="container">
                <div class="row">
                    <div class="content col-lg-9">
                        <h3>Filtro de busqueda</h3>
                        <form>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="Ingresa nombre" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Cargo</label>
                                <div class="col-3">
                                    <input class="form-control" type="text" placeholder="Ingresa cargo" id="example-text-input">
                                </div>
                                <label for="example-text-input" class="col-3 col-form-label" style="text-align:right;">Sucursal</label>
                                <div class="col-4">
                                    <input class="form-control" type="text" placeholder="Ingresa sucursal" id="example-text-input">
                                </div>
                            </div>
                             <button type="submit" class="btn m-t-30 mt-3">Buscar</button>
                        </form>
                    </div>
                </div>
</div>
            <!-- FIN FILTRO DE BUSQUEDA -->
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
                                    <td>Yolanda Barrientos</td>
                                    <td>Terapeuta</td>
                                    <td>Polanco</td>
                                    <td>45</td>
                                    <td>2020/04/25</td>
                                    <td>$15,400</td>
                                    <td><span class="badge badge-pill bg-warning">Warning</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Verónica Lucas</td>
                                    <td>Terapeuta</td>
                                    <td>Polanco</td>
                                    <td>30</td>
                                    <td>2020/04/25</td>
                                    <td>$10,800</td>
                                    <td><span class="badge badge-pill bg-success">Sucess</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jesús Vázquez</td>
                                    <td>Asistente</td>
                                    <td>Polanco</td>
                                    <td>27</td>
                                    <td>2020/04/25</td>
                                    <td>$14,800</td>
                                    <td><span class="badge badge-pill bg-primary">Primary</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gabriela Carreón</td>
                                    <td>Jurídico</td>
                                    <td>Polanco</td>
                                    <td>39</td>
                                    <td>2020/04/25</td>
                                    <td>$20,800</td>
                                    <td><span class="badge badge-pill bg-info">Info</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Andrea Árnica</td>
                                    <td>Terapeuta</td>
                                    <td>Polanco</td>
                                    <td>45</td>
                                    <td>2020/04/25</td>
                                    <td>$12,200</td>
                                    <td><span class="badge badge-pill bg-secondary">Secundary</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sergio Hernándes</td>
                                    <td>Recepcionista</td>
                                    <td>Polanco</td>
                                    <td>50</td>
                                    <td>2020/04/25</td>
                                    <td>$17,800</td>
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