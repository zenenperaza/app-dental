<!DOCTYPE html>
<html lang="en">

<?php include("inclusion/head.php");?>

<body>
    <div class="body-inner">
<!-- inicio -->
<!-- Services -->
        <!-- Page Content -->
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <!-- DataTable -->

                <div class="row">
                    <div class="col-lg-12">
                        <form id="datatables_searchform">
                            <div class="row mb-2">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Concepto</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-select" id="position" name="position">
                                            <option value="">Pagado</option>
                                            <option>Cancelado</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Rango de fecha</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control datetimepicker-input" id="datetimepicker7" placeholder="Desde" name="start" data-toggle="datetimepicker" data-target="#datetimepicker7" />
                                            <span class="input-group-text"><i class="icon-more-horizontal"></i></span>
                                            <input type="text" class="form-control datetimepicker-input" id="datetimepicker8" placeholder="Hasta" name="end" data-toggle="datetimepicker" data-target="#datetimepicker8" />
                                        </div>
                                    </div>
                                    <div id="export_buttons" class="mt-2"></div>
                                </div>
                                
                            </div>
                            <div class="row mb-5">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" id="filter">Buscar</button>
                                    <button id="clearFilter" class="btn btn-primary">Limpiar búsqueda</button>
                                </div>
                            </div>

                        </form>
                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Cencepto</th>
                                    <th>Solicitante</th>
                                    <th>Fecha</th>
                                    <th>Costo</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gasas</td>
                                    <td>Dr. Vázquez</td>
                                    <td>24/05/2023</td>
                                    <td>$320,800</td>
                                    <td><span class="badge badge-pill bg-primary">Pagado</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gasas</td>
                                    <td>Dr. Vázquez</td>
                                    <td>24/05/2023</td>
                                    <td>$320,800</td>
                                    <td><span class="badge badge-pill bg-danger">Cancelado</span></td>
                                    <td> <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ms-2 text-reset" href="#" data-bs-toggle="tooltip" data-bs-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                               
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Cencepto</th>
                                    <th>Solicitante</th>
                                    <th>Fecha</th>
                                    <th>Costo</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- end: DataTable -->
            </div>
        </section>
        <!-- end: Page Content -->        
<!-- end: Services -->
<!-- fin -->
<!-- fin Body inner -->        
    </div>
    <!-- end: Body Inner -->
<?php include("inclusion/script.php");?>
</body>

</html>