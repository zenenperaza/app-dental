<!DOCTYPE html>
<html lang="en">

<?php include("inclusion/head.php");?>

<body>
    <div class="body-inner">
        <?php include("inclusion/menu.php");?>
<!-- inicio -->

                <!-- Page Content -->
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <!-- Calendar -->
                <div class="row mb-5">
                    <div class="col-lg-6 text-center">
                        <h6>AGENDAR CITA<strong>"SUCURSAL"</strong></h6>
                        <h6>PRIMER BLOQUE</h6>
                        <h6>SELECCIONE LOS DÍAS</h6>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="calendar"></div>
                    </div>
                </div>
                <!-- end: Calendar -->
                <br>
                <button class="btn btn-light" id="update"><a href="confirmacion.php">CONTINUAR</a></button>
            </div>
        </section>
<!-- fin -->
<!-- fin Body inner -->        
    </div>
    <!-- end: Body Inner -->
<?php include("inclusion/script.php");?>
</body>

</html>