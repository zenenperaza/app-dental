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
                                    <th>Doctor</th>
                                    <th>Paciente</th>
                                    <th>Fecha ingreso</th>
                                    <th>Estado</th>
                                    <th>Mesa de trabajo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. Vázquez</td>
                                    <td>Luis Vázquez</td>
                                    <td>24/05/2023</td>
                                    <td>                            
                                        <div class="form-group">
                                            <select class="form-select" id="">
                                                <option>Revisión</option>
                                                <option>Pagado</option>
                                                <option>Enviado</option>
                                                <option>Entregado</option>
                                                <option>Cancelado</option>
                                                <option>Devolución</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td><span class="">Jose Perez</span></td>
                                    <td> 
                                    <div class="form-group" >
                                        <label for="exampleFormControlSelect1"></label>
                                        <select data-select-name class="form-select" >
                                            <option value="">Ver</option>
                                            <option value="orden1.php">Orden 1</option>
                                            <option value="orden2.php">Orden 2</option>
                                        </select>
            <script type="text/javascript">
                document.addEventListener('DOMContentLoaded',function() {
                    document.querySelector('select[data-select-name]').onchange=changeEventHandler;
                },false);

                function changeEventHandler(event) {
                    window.location.href = this.options[this.selectedIndex].value;
                }
            </script>
                                    </div>
                                     </td>
                                </tr>
                               
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>Doctor</th>
                                    <th>Paciente</th>
                                    <th>Fecha ingreso</th>
                                    <th>Estado</th>
                                    <th>Mesa de trabajo</th>
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