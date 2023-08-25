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





<section id="page-content" class="no-sidebar">
    <div class="container">

    
        <div class="row mb-4">
            <div class="content col-lg-12 center text-center">
                <h3>Orden # 1</h3>
            </div>
        </div>
    

        <div class="row">
            
                <div class="col-md-4 d-flex align-items-center">
                    <!-- Order Summary -->
                    <div class="card">
                        <div class="card-body p-4">
                            <img src="./images/img1.png" alt="">
                        
                        </div>
                    </div>
                    <!--  Order Summary -->
                </div>

                <div class="col-8 bg-secondary">
                <div class="row mt-2">
                        <div class="col-8 d-flex justify-content-around align-items-center">
                            <img src="./images/img2.png" alt="">
                            <h3>Taller Dental</h3>
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center">
                            <span>FECHA</span>
                            
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">

                        </div>

                </div>
                <div class="row bg-light m-4 b-1">
                <div class="content col-lg-12">
                    <form>

                    <div class="row p-1">
                        <div class="col-6">                        
                            <div class="input-group  ">
                            <div class="input-group-prepend">
                            <div class="input-group-text">DOCTOR</div>
                            </div>
                            <input type="text" class="form-control" id="" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group  ">
                            <div class="input-group-prepend">
                            <div class="input-group-text">CASO</div>
                            </div>
                            <input type="text" class="form-control" id="" >
                            </div>

                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-12">                        
                            <div class="input-group  ">
                            <div class="input-group-prepend">
                            <div class="input-group-text">DIRECCION</div>
                            </div>
                            <input type="text" class="form-control" id="" >
                            </div>
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-6">                        
                            <div class="input-group  ">
                            <div class="input-group-prepend">
                            <div class="input-group-text">PACIENTE</div>
                            </div>
                            <input type="text" class="form-control" id="" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group  ">
                            <div class="input-group-prepend">
                            <div class="input-group-text">TELÉFONO</div>
                            </div>
                            <input type="text" class="form-control" id="" >
                            </div>

                        </div>
                    </div>

                    <div class="card bg-light mb-3" >
                        <div class="card-header">INDICACIONES</div>
                        <label for=""></label>
                        <textarea class="form-control" id="" rows="12"></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">COLOR</label>
                                <select multiple="" class="form-select" id="exampleFormControlSelect2">
                                    <option>Gingival</option>
                                    <option>Medio</option>
                                    <option>Incisal</option>
                                </select>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">FECHA DE INGRESO</h5>
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            
                                </div>
                            </div>
                    
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">CONTROL DE TRABAJO</label>
                                <select multiple="" class="form-select" id="exampleFormControlSelect2">
                                    <option>Fotografías</option>
                                    <option>Impresión</option>
                                    <option>Antagonista</option>
                                    <option>Realación de mordida</option>
                                    <option>Modelo de estudio</option>
                                    <option>Modelo de trabajo</option>
                                    <option>Análogo</option>
                                    <option>Aditamentos</option>
                                    <option>Tornillos</option>
                                </select>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-6 mt-4">
                                    <img src="./images/qr.jpg" alt="" class="img-fluid img-thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>




                    </form>
                </div>
            </div>




        </div>
    </div>
</section>
       <!-- finaliza cuerpo -->
       <?php include("inclusion/footer.php");?>

        <!-- end: Footer -->
    <!-- No borrar aquí acaba el body inner -->
    </div>
</body>
    <!-- No borrar aquí acaba el body inner -->
        <?php include("inclusion/script.php");?>


</html>