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

<!-- inicio cambios -->
        <section id="page-content" style="background-color:#c4dadf;">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">
                                   <div class="card-body">
                                <form id="form1" class="form-validate">
                                    
                                    <h3>Alta y modificación de gastos</h3>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="address">Concepto</label>
                                            <input type="text" class="form-control" name="address" placeholder="Ingrese Concepto" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="address2">Solicitante</label>
                                            <input type="text" class="form-control" name="address2" placeholder="Ingrese solicitante" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="gender">Fecha</label>
                                                        <input class="form-control" type="date" name="dateofbirth" required>
                                                    </div>
                                        <div class="form-group col-md-6">
                                            <label>Costo:</label>
                                            <input type="number" class="form-control" name="zip" placeholder="Costo" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="state">Estado</label>
                                            <select name="state" class="form-select" required>
                                                <option value="">---</option>
                                                <option>Pagado</option>
                                                <option>Cancelado</option>
                                                <option>Devuelto</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                                   
                                    <button type="submit" class="btn m-t-30 mt-3">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</section>
<!-- fin cammbios -->

<!-- Services -->
        <section id="page-content" class="no-sidebar">
<div class="container">
                <div class="row">
                    <div class="content col-lg-9">
                        <h3>Filtro de busqueda</h3>
                        <form>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Solicitante</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="Ingresa nombre" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Concepto</label>
                                <div class="col-3">
                                    <input class="form-control" type="text" placeholder="Ingresa concepto" id="example-text-input">
                                </div>
                                <label for="example-text-input" class="col-3 col-form-label" style="text-align:right;">Estado</label>
                                <div class="col-4">
                                    <input class="form-control" type="text" placeholder="Ingresa estado" id="example-text-input">
                                </div>
                            </div>
                             <button type="submit" class="btn m-t-30 mt-3">Buscar</button>
                        </form>
                    </div>
                </div>
</div>
            <div class="container">
                <!-- DataTable -->

                <div class="row">
                    <div class="col-lg-12">
                        
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
<!-- Services -->

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