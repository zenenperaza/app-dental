<!DOCTYPE html>
<html lang="en">
<!-- inicio head -->
           <?php include("inclusion/head.php");?>
<!-- fin head -->
<body class="side-panel side-panel-static">

           <?php include("inclusion/menu.php");?>

    <!-- Body Inner -->
    <div class="body-inner">

        <!-- Header -->
       <?php include("inclusion/header.php");?>
        <!-- end: Header -->

        <!-- Inspiro Cuerpo -->
<!-- Services -->
        <section id="page-content" style="background-color:#c4dadf;">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-9">
                        <h3>Alta y Modificación de usuarios administrativos</h3>
                        <form>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="Ingresa nombre" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Puesto</label>
                                <div class="col-3">
                                    <input class="form-control" type="text" placeholder="Ingresa cargo" id="example-text-input">
                                </div>
                                <label for="example-text-input" class="col-2 col-form-label" style="text-align:right;">Perfil</label>
                                <div class="col-4">
                                    <input class="form-control" type="text" placeholder="Ingresa sucursal" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Correo electrónico</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="Ingresa nombre" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Roles</label>
                            <div class="col-10">
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="">Seleccione una opción</option>
                                    <option>Administrador</option>
                                    <option>Supervisor</option>
                                    <option>Mesa de trabajo</option>
                                </select>
                            </div>
                            </div>
                            
                             <button type="submit" class="btn m-t-30 mt-3">Guardar</button>

                          
                        </form>
                    </div>
                </div>
            </div>
        </section>
               <!-- SERVICES -->
        <section>
            <div class="container table-responsive">
                <div class="heading-text heading-section">
                    <h2>CONTROL DE USUARIOS</h2>
                    <span class="lead">Crea, elimina y modifica a usuarios administrativos</span>
                </div>

                <div class="row">
      <div class="content col-lg-12" >
       <br>
       <br>
        
        <br>
        <br>
                    
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><strong>NOMBRE</strong></th>
                        <th scope="col"><strong>PUESTO</strong></th>
                        <th scope="col"><strong>PÉRFIL</strong></th>
                        <th scope="col"><strong>CORREO DE REGÍSTRO</strong></th>
                        <th scope="col"><strong>.</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Jesús</th>
                        <td>Director</td>
                        <td>Administrador</td>
                        <td>prueba@prueba.com.mx</td>
                        <td>
                           <button class="btn btn-slide btn-light" data-width="150" href="#">
                                    <i class="fa fa-pencil-alt"></i>
                                    <span>Editar</span>
                           </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Jesús</th>
                        <td>Administrador</td>
                        <td>Administrador</td>
                        <td>prueba@prueba.com.mx</td>
                        <td>
                           <button class="btn btn-slide btn-light" data-width="150" href="#">
                                    <i class="fa fa-pencil-alt"></i>
                                    <span>Editar</span>
                           </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Jesús</th>
                        <td>Trabajador</td>
                        <td>Administrador</td>
                        <td>prueba@prueba.com.mx</td>
                        <td>
                           <button class="btn btn-slide btn-light" data-width="150" href="#">
                                    <i class="fa fa-pencil-alt"></i>
                                    <span>Editar</span>
                           </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Jesús</th>
                        <td>Supervisor</td>
                        <td>Administrador</td>
                        <td>prueba@prueba.com.mx</td>
                        <td>
                           <button class="btn btn-slide btn-light" data-width="150" href="#">
                                    <i class="fa fa-pencil-alt"></i>
                                    <span>Editar</span>
                           </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="line"></div>
            <br>
           
            
        </div>
                </div>
            </div>

        </section>
        <!-- end: SERVICES -->



        <!-- fin cuerpo -->







 
   


<?php include("inclusion/footer.php");?>

        <!-- end: Footer -->

    </div>
    <!-- end: Body Inner -->


    





     </body>
    
    <!-- end: Body Inner -->
          <?php include("inclusion/script.php");?>


</html>