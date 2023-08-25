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
<div class="container">
                <div class="row">
                    <div class="content col-lg-9">
                        <h3>Mesas de Trabajo</h3>

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
                                    <th>Mesa de trabajo</th>
                                    <th>Doctor</th>
                                    <th>Paciente</th>
                                    <th>Fecha ingreso</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dr. Vázquez</td>
                                    <td>Luis Vázquez</td>
                                    <td>24/05/2023</td>
                                    <td>                            
                                        <div class="form-group">
                                            <select class="form-select" id="">
                                                <option>Estado 1</option>
                                                <option>Estado 2</option>
                                                <option>Estado 3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td> 
                                    <div class="form-group" >
                                        <label for="exampleFormControlSelect1">Detalle</label>
                                 
    
                                    </div>
                                     </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Vázquez</td>
                                    <td>Luis Vázquez</td>
                                    <td>24/05/2023</td>
                                    <td>                            
                                        <div class="form-group">
                                            <select class="form-select" id="">
                                                <option>Estado 1</option>
                                                <option>Estado 2</option>
                                                <option>Estado 3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td> 
                                    <div class="form-group" >
                                        <label for="exampleFormControlSelect1">Detalle</label>
                                 
    
                                    </div>
                                     </td>
                                </tr>
                               
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Mesa de trabajo</th>
                                    <th>Doctor</th>
                                    <th>Paciente</th>
                                    <th>Fecha ingreso</th>
                                    <th>Estado</th>
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