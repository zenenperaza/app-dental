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
                <!-- inicia container -->
                 <div class="row">
                <br>
                <div class="breadcrumb">
                <!-- Menù citas -->
                   <?php include("inclusion/menu_citas.php");?>
                <!-- fin menù citas -->
                </div>
                <br>
                <form>
                    <!-- inicia formulario principal -->
                    <br>
                    <br>
                    
                           
                            <div class="form-group">
                                <h5 style="color:#8C8C8C; text-align: center;">SELECCIONE EL SERVICIO</h5>
                                <br>
                                <br>
                        <!-- inicio opciòn 1 -->                                
                        <form>
                            <div class="form-group">
                                <h5 style="color:#8C8C8C; text-align: left;">TECNOLOGÍA NEUROWELL</h5>
                                
                                <div class="input-group mb-3">
                                    <select class="form-select" id="type">
                                        <option value="line">Bloque 1, 2, 3</option>
                                        <option value="bar">Bloque 1</option>
                                        <option value="bar">Bloque 2</option>
                                        <option value="bar">Bloque 3</option>
                                    </select>
                                    <button class="btn btn-light" id="update"><a href="mis_citas.php">AGENDAR</a></button>
                                    
                                </div>
                                
                            </div>
                        </form>
                        <br>
                        <!-- fin opciòn 1 -->
                        <!-- inicio opciòn 2 -->                                
                        <form>
                            <div class="form-group">
                             <h5 style="color:#8C8C8C; text-align: left;">TERAPIA EMOCIONAL</h5>
                                
                                <div class="input-group mb-3">
                                    <select class="form-select" id="type">
                                        <option value="line">Dr. Victor Fregoso</option>
                                    </select>
                                <button class="btn btn-light" id="update"><a href="mis_citas.php">AGENDAR</a></button>
                                    
                                </div>
                                
                            </div>
                        </form>
                        <br>
                        <!-- fin opciòn 2 -->
                        <!-- inicio opciòn 3 -->                                
                        <form>
                            <div class="form-group">
                                <h5 style="color:#8C8C8C; text-align: left;">COACHING</h5>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="type">
                                        <option value="line">Dr. Victor Fregoso</option>
                                    </select>
                                <button class="btn btn-light" id="update"><a href="mis_citas.php">AGENDAR</a></button>
                                    
                                </div>
                            
                        </div>
                        </form>
                        <br>
                        <!-- fin opción 3 -->
                        <form>
                            <div class="form-group">
                                <h5 style="color:#8C8C8C; text-align: left;">ALERGIAS</h5>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="type">
                                        <option value="line">Dr. Victor Fregoso</option>
                                    </select>
                                <button class="btn btn-light" id="update"><a href="mis_citas.php">AGENDAR</a></button>
                                    
                                </div>
                            
                        </div>
                        </form>
                        <br>
                        
                        <!-- inicio opción 4 -->
                        <form>
                            <div class="form-group">
                                <h5 style="color:#8C8C8C; text-align: left;">NEURO SENSORIAL</h5>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="type">
                                        <option value="line">Dr. Victor Fregoso</option>
                                    </select>
                                <button class="btn btn-light" id="update"><a href="mis_citas.php">AGENDAR</a></button>
                                    
                                </div>
                            
                        </div>
                        </form>
                        <br>
                        
                        <!-- fin opción 4 -->

                                   
                    <!-- finaliza formulario principal -->
                </form>
                <!-- finaliza container -->
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