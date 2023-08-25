<!DOCTYPE html>
<html lang="en">

<?php include("inclusion/head.php");?>

<body>
    <div class="body-inner">
        <?php include("inclusion/menu.php");?>
<!-- inicio -->
<!-- Services -->
        <section class="text-center">

            <div class="container text-center">
                <div class="row">
                <br>
                <div class="breadcrumb">
                    <ul>
                        <li><button type="submit" class="btn m-t-40 btn-lg" style="background-color:#1E98D7"> HACER UNA CITA  </button></li>
                        <li><button type="submit" class="btn m-t-40 btn-lg" style="background-color:#1E98D7"><a href="mis_citas.php" style="color:#fff"> MIS CITAS</a> </button></li>
                        
                    </ul>
                    
                    
                </div>
                
                    

            <form>
                <br>
                <br>
                <br>
                <div class="form-group">
                                <div class="input-group mb-3">
                                    <select class="form-select" id="type">
                                        <option value="line">TRATAMIENTO COMPLETO</option>
                                        <option value="bar">BLOQUE 1</option>
                                        <option value="bar">BLOQUE 2</option>
                                        <option value="bar">BLOQUE 3</option>
                                    </select>
                                    <button class="btn btn-light" id="update" style="background-color:#1E98D7">
                                        <a href="mis_citas.php" style="color:#fff">RESERVAR</a></button>
                                </div>
                                <h5 style="color:#8C8C8C; text-align: left;">POLANCO</h5>
                                <br>
                                 <div class="input-group mb-3">
                                    <select class="form-select" id="type">
                                        <option value="line">TRATAMIENTO COMPLETO</option>
                                        <option value="bar">BLOQUE 1</option>
                                        <option value="bar">BLOQUE 2</option>
                                        <option value="bar">BLOQUE 3</option>
                                    </select>
                                    <button class="btn btn-light" id="update" style="background-color:#1E98D7">
                                        <a href="mis_citas.php" style="color:#fff">RESERVAR</a></button>
                                </div>
                                <h5 style="color:#8C8C8C; text-align: left;">SUR</h5>

                               
                                    
                </div>
                            
                            
                            

            </form>

            </div>
        </section>
        <!-- end: Services -->
<!-- fin -->
<!-- fin Body inner -->        
    </div>
    <!-- end: Body Inner -->
<?php include("inclusion/script.php");?>
</body>

</html>