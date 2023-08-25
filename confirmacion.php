<!DOCTYPE html>
<html lang="en">

<?php include("inclusion/head.php");?>

<body>
    <div class="body-inner">
        <?php include("inclusion/menu.php");?>
<!-- inicio -->
<section id="page-content">
            <div class="container text-center">
                <div class="row">
                    <div class="content col-lg-9">
                        <h4>CONFIRMACIÓN</h4>

                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>DOM</th>
                                        <th>LUN</th>
                                        <th>MAR</th>
                                        <th>MIÉR</th>
                                        <th>JUE</th>
                                        <th>VIE</th>
                                        <th>SÁB</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td>31</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <div class="content col-lg-3">
                        <div class="p-cb mb-3">
                            <div class="cb-content">
                                <p>SELECCIONE HORA DE SU CITA: <strong style="color:#1E98D7"> 24/03/23</strong></p>
                            </div>
                        </div>
            </div>
            
            <br>
            
                        <div class="row text-center">
                            <div class="col-lg-6">
                            
                            <button type="button" class="btn btn-info">08:00 AM</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-success">08:30 AM</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-info">09:00 AM</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-info">09:30 AM</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-info">10:00 AM</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-info">10:30 AM</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-info">11:00 AM</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-info">12:00 AM</button>
                            <br>
                            <br>
                        </div>
                            <br>
                        </div>
            <div class="content col-lg-3">
                        <div class="p-cb mb-3">
                            <div class="cb-content">
                                <p>SELECCIONE HORA DE SU CITA: <strong style="color:#1E98D7"> 24/03/23</strong></p>
                            </div>
                        </div>
                        <div class="p-cb mb-3">
                            <div class="cb-content">
                                <p>SELECCIONE HORA DE SU CITA: <strong style="color:#1E98D7"> 24/03/23</strong></p>
                            </div>
                        </div>
                        <div class="p-cb mb-3">
                            <div class="cb-content">
                                <p>SELECCIONE HORA DE SU CITA: <strong style="color:#1E98D7"> 24/03/23</strong></p>
                            </div>
                        </div>

                        <!-- inicia formulario -->
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                
                                <form id="form1" class="form-validate">
                                
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="username">Nombre</label>
                                            <input type="text" class="form-control" name="username" placeholder="INGRESA NOMBRE" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="username">Apellido</label>
                                            <input type="text" class="form-control" name="username" placeholder="INGRESA APELLIDO" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="gender">Fecha de nacimiento</label>
                                            <input class="form-control" type="date" name="dateofbirth" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="gender">Sexo</label>
                                            <select class="form-select" name="gender" required>
                                                <option value="">Seleccione...</option>
                                                <option>Mujer</option>
                                                <option>Hombre</option>
                                                <option>No binario</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="gender">Padecimiento a tratarse</label>
                                            <select class="form-select" name="gender" required>
                                                <option value="">Seleccione...</option>
                                                <option>Ansiedad</option>
                                                <option>Depresión</option>
                                                <option>Insomnio</option>
                                                <option>TDA</option>
                                                <option>Autismo</option>
                                                <option>Otros</option>
                                            </select>
                                    </div>
                                </form>
                            <strong style="color:#1E98D7"> Para modificaciones o cancelaciones por favor<abbr title="Contacto WhatsApp"> <a href="https://api.whatsapp.com/send/?phone=5215576516861">contáctanos</a></strong>
                            </div>
                        </div>                            

                        <!-- fin formulario -->
            </div>

            </div>


        </section>
      
        
<!-- fin -->
<!-- fin Body inner -->        
    </div>
    <!-- end: Body Inner -->
<?php include("inclusion/script.php");?>
</body>

</html>