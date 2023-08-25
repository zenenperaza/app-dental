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
                <!-- Menù citas -->
                   <?php include("inclusion/menu_citas.php");?>
                <!-- fin menù citas -->
                    
                    
                </div>
                <br>
                    

            <form>
                    <br>
                    <br>
                    
                           
                            <div class="form-group">
                                <h5 style="color:#8C8C8C; text-align: center;">SELECCIONE LA CLÍNICA</h5>
                                <br>
                                <br>
<!-- inicio opciòn 1 -->                                
                        <form>
                            <div class="form-group">
                                <h5 style="color:#8C8C8C; text-align: left;">POLANCO</h5>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="type">
                                        <option value="line">CLÍNICA POLANCO</option>
                                        
                                    </select>
                                    <button class="btn btn-light" id="update"><a href="reservar.php">Reservar</a></button>
                                </div>
                                
                            </div>
                        </form>
<!-- fin opciòn 1 -->
<!-- inicio opciòn 2 -->                                
                        <form>
                            <div class="form-group">
                                <h5 style="color:#8C8C8C; text-align: left;">SUR</h5>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="type">
                                        <option value="line">CLINICA SUR</option>
                                        
                                    </select>
                                    <button class="btn btn-light" id="update"><a href="reservar.php">Reservar</a></button>
                                </div>
                                
                            </div>
                        </form>
<!-- fin opciòn 2 -->

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