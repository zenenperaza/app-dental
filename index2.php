<!DOCTYPE html>
<html lang="en">

<?php include("inclusion/head.php");?>

<body>
    <div class="body-inner">
<!-- inicio -->
<!-- Services -->
        <section class="text-center">

            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="imagenes/logo/1.png" alt="">
                        <h3 class="m-b-10">BIENVENIDO</h3>
                        
                    </div>

            <form>
                            <div class="form-group">
                                <label for="example-text-input" class="col-2 col-form-label" style="color:#8C8C8C">Usuario</label>
                                <div class="col-12">
                                    <input class="form-control" type="text"  id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="col-2 col-form-label" style="color:#8C8C8C">Contraseña</label>
                                <div class="col-12">
                                    <input class="form-control" type="text"  id="example-text-input">
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <h5 class="text-end" style="color:#2DB6F3"><a href="olvide_contrasena.php">¿Olvidó su contraseña?</a></h5>
                            </div>
                            <div class="col-12">
                               <button type="submit" class="btn m-t-40 btn-lg" style="background-color:#1E98D7"><a href="index3.php" style="color:#fff">Ingresar</a></button>
                            </div>
                            <div class="col-12">
                               <button type="submit" class="btn m-t-40 btn-lg" style="background-color:#0000FF">
                                <a href="registro.php" style="color:#fff">Abrir una cuenta</a></button>
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