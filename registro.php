<?php include 'head.php';
include 'conexion.php';

$query = mysqli_query($con, "SELECT * FROM region ");
$query1 = mysqli_query($con, "SELECT * FROM provincia");
$query2= mysqli_query($con, "SELECT  * FROM comuna");
$query3= mysqli_query($con, "SELECT  * FROM persona");
$query4= mysqli_query($con, "SELECT  * FROM institución");



?>





<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <!-- Logo -->
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="" class="spur-logo"><i class="far fa-eye"></i><span>SIRPON</span></a>
            </header>
            <!-- Sidebar de Navegacion -->
            <nav class="dash-nav-list">
                <a href="page-jefezona.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> home </a>
                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="far fa-edit"></i> Registros </a>
                    <div class="dash-nav-dropdown-menu">
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Registrar</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="form-sector.php" class="dash-nav-dropdown-item">Sectores</a>
                                <a href="registro.php" class="dash-nav-dropdown-item">Operadores</a>

                            </div>
                        </div>
                       
                       
                    </div>
                </div>
                <div class="dash-nav-dropdown show">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-user"></i>Reportes</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="blank.html" class="dash-nav-dropdown-item">Delincuentes</a>
                        <a href="content.html" class="dash-nav-dropdown-item">Zona de Riesgos</a>
                        <a href="login.html" class="dash-nav-dropdown-item">Delitos</a>
                    </div>
                </div>

            </nav>
            <!-- fin navbar -->
        </div>

        <div class="dash-app">

            <main class="dash-content">
                <div class="container-fluid ">
                    <h1 class="dash-title">Formulario de Registro Operador</h1>
                    <!-- put your rows / columns here -->
                    <div class="spur-card-title">Operador </div>
                </div>
                <div class="card-body ">
                    <form action="registroperadorbd.php" method="POST">
                        <div class="form-group">
                            <div class="form-group">
                                <label>RUT</label>
                                <input minlength="10" maxlength="10" type="text" class="form-control" placeholder="ejem 18.700.672-0" name="Rut" required
                                                        oninput="checkRut(this)" required>
                            </div>

                            <label>NOMBRES COMPLETO</label>
                            <input type="text" class="form-control"  maxlength="30" pattern="[a-zA-Z]+" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label>APELLIDO PATERNO</label>
                            <input type="text" class="form-control"  maxlength="30" pattern="[a-zA-Z]+" placeholder="Apellido Paterno" name="ApellidoP">
                        </div>
                        <div class="form-group">
                            <label>APELLIDO MATERNO</label>
                            <input type="text" class="form-control"  maxlength="30" pattern="[a-zA-Z]+" placeholder="Apellido Materno" name="ApellidoM">
                        </div>


                        <div class="form-group">
                            <label>DIRECCIÓN DE DOMICILIO PARTICULAR</label>
                            <input type="text" class="form-control" placeholder="DIRECCIÓN DE DOMICILIO" name="Direccion_Domicilio">
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label>FECHA DE NACIMIENTO</label>
                                <input type="date" class="form-control" placeholder="Nombre" name="fechaNacimiento">
                            </div>

                            <div class="form-group col-md-3">
                                <label>TELEFONO CELULAR</label>
                                <input type="text" onkeypress="return numeros(event)"  maxlength="9" pattern="[0-9]{9}" class="form-control" placeholder="5345345." name="num_telefono_celular">
                            </div>
                            <div class="form-group col-md-3">
                                <label>TELEFONO RED FIJA</label>
                                <input type="text" onkeypress="return numeros(event)"  maxlength="9" pattern="[0-9]{9}" class="form-control" placeholder="ejem,02 42 46..." name="Telefono_Fijo">
                            </div>
                            <div class="form-group col-md-3">
                                <label>CORREO ELECTRONICO</label>
                                <input type="email" class="form-control" placeholder="no olvidar @" name="correo">
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label>REGION</label>
                                <select class="form-control" id="region" name="region">
                                <option>seleccione</option>
                                    <?php
                                    while ($datos = mysqli_fetch_array($query)) {

                                        ?>
                                        <option  value="<?php echo $datos['REGION_ID'] ?>" selected=""><?php echo $datos['REGION_NOMBRE'] ?> </option>
                                    <?php
                                }
                                ?>

                                </select>
                            </div>


                            <div class="form-group col-md-4">
                                <label>PROVINCIA</label>
                                <select class="form-control" id="provincia" name="provincia">
                                <option selected>seleccione</option>
                                <?php
                                    while ($datos1 = mysqli_fetch_array($query1)) {

                                        ?>
                                        
                                        <option value="<?php echo $datos1['PROVINCIA_ID'] ?>" ><?php echo $datos1['PROVINCIA_NOMBRE'] ?> </option>
                                    <?php
                                }
                                ?>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label>COMUNA</label>
                                <select class="form-control" id="comuna" name="comuna">
                                <option>seleccione</option>
                                <?php
                                    while ($datos2 = mysqli_fetch_array($query2)) {

                                        ?>
                                        
                                        <option value="<?php echo $datos2['COMUNA_ID'] ?>" selected="1"><?php echo $datos2['COMUNA_NOMBRE'] ?> </option>
                                    <?php
                                }
                                ?>

                                </select>
                            </div>
                        </div>
                        <button style="margin-right:20px" type="submit" class="btn btn-primary" name="enviar">REGISTRA DATOS</button>
                     
                        
                       
                        <div class="container">

                        </div>
                    </form>
                </div>

        </div>


    </div>


    <div class="dash-app">

        <main class="dash-content">
            <div class="container-fluid ">

                <!-- put your rows / columns here -->
                <div class="spur-card-title"> BUSCAR OPERADOR </div>
            </div>
            <div class="card-body ">
                <form action="registro-ficha.php" method="POST">


                    <div class="form-row">

                        <div class="form-group col-xs-5 ">
                            <label>RUT</label>
                            <input type="text" class="form-control" placeholder="Rut" name="fechaNacimiento">
                        </div>





                    </div><!-- DIV QUE CONTENDRA UNA TABLA CON LOS DATOS DE OPERADOR -->
                    <button type="submit" class="btn btn-primary" class="searchbox-input"name="buscar"> BUSCAR </button>
            </div>

            </form>
            <br>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col-xs-5">RUT</th>
                        <th scope="col">FECHA NACIMIENTO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO PATERNO</th>
                        <th scope="col">APELLIDO MATERNO</th>
                        <th scope="col">TELEFONO FIJO</th>
                        <th scope="col">TELEFONO MOVIL</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">DOMICILIO PARTICULARN</th>
                        <th scope="col">REGION</th>
                        <th scope="col">PROVINCIA</th>
                        <th scope="col">COMUNA</th>
                    


                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    $sql="SELECT PER.RUT, PER.NOMBRE,PER.FECHA_NACIMIENTO,PER.APELLIDO_PA, PER.APELLIDO_MA, PER.TELEFONO_RED_FIJA,PER.TELEFONO,PER.CORREO_ELECTRONICO,PER.DOMICILIO_PARTICULAR, rg.REGION_NOMBRE, rg.REGION_ID,pr.PROVINCIA_NOMBRE, cm.COMUNA_NOMBRE FROM persona PER INNER JOIN region rg INNER JOIN provincia pr INNER JOIN comuna cm WHERE PER.REGION_ID=rg.REGION_ID AND rg.REGION_ID=PER.REGION_ID and PER.PROVINCIA_ID=pr.PROVINCIA_ID and pr.PROVINCIA_ID=PER.PROVINCIA_ID AND cm.COMUNA_ID = PER.COMUNA_ID";
                    $result=mysqli_query($con,$sql);
                    
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $mostrar['RUT']?></td>
                        <td><?php echo $mostrar['FECHA_NACIMIENTO']?></td>
                        <td><?php echo $mostrar['NOMBRE']?></td>
                        <td><?php echo $mostrar['APELLIDO_PA']?></td>
                        <td><?php echo $mostrar['APELLIDO_MA']?></td>
                        <td><?php echo $mostrar['TELEFONO_RED_FIJA']?></td>
                        <td><?php echo $mostrar['TELEFONO']?></td>
                        <td><?php echo $mostrar['CORREO_ELECTRONICO']?></td>
                        <td><?php echo $mostrar['DOMICILIO_PARTICULAR']?></td>
                        <th><?php echo $mostrar['REGION_ID']?></th>
                        <th><?php echo $mostrar['PROVINCIA_NOMBRE']?></th>
                        <th><?php echo $mostrar['COMUNA_NOMBRE']?></th>
                        <th><a href="modificar-ope.php?RUT=<?php echo $mostrar['RUT']?>">MODIFICAR</a></th>
                        <th><a href="eliminar-operador.php?RUT=<?php echo $mostrar['RUT']?>">ELIMINAR</a></th>
                        <!--boton para eliminar-->
                    </tr>
                    <?php
                    }
                    ?>
                    

                </tbody>
                
            </table>
        </main>

    </div>



    <div class="dash-app">

        <main class="dash-content">
            <div class="container-fluid ">
                <h1 class="dash-title">Formulario Registro Usuario</h1>

                <div class="spur-card-title">Operador </div>
            </div>
            <div class="card-body ">
                <form action="registro-usuario.php" method="POST">
                    <div class="form-group">
                    <div class="form-group col-md-4">
                                <label>RUT</label>
                                <select class="form-control" name="rut">
                                <option>seleccione</option>
                                    <?php
                                    while ($datos3 = mysqli_fetch_array($query3)) {

                                        ?>
                                        <option  value="<?php echo $datos3['RUT'] ?>" selected=""><?php echo $datos3['RUT'] ?> </option>
                                    <?php
                                }
                                ?>

                                </select>
                            </div>

                        <label>NOMBRE DE USUARIO</label>
                        <input type="text" class="form-control" placeholder="Nombre Usuario" name="nombreuser">
                    </div>
                    <div class="form-group">
                        <label>CONTRASEÑA</label>
                        <input type="password" class="form-control" placeholder="Contraseña" name="contra">
                        <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" onclick="mostrarContraseña()"
                                                                class="custom-control-input" id="mostrar_contraseña">
                                                            <label class="custom-control-label"
                                                                for="mostrar_contraseña">Mostrar Contraseña</label>
                                                        </div>
                                                    </div>
                    </div>
                    <div class="form-group">
                        <label>FECHA DE CREACION USUARIO</label>
                        <input type="date" class="form-control" placeholder="Fecha" name="fechacr">
                    </div>


                    <div class="form-group">
                        <label>ASIGNACION</label>
                        <input type="text" class="form-control" placeholder="Asignacion" name="asignacion">
                    </div>
                    <div class="form-group col-md-4">
                                <label>INSTITUCION</label>
                                <select class="form-control" name="institucion">
                                <option>seleccione</option>
                                    <?php
                                    while ($datos4 = mysqli_fetch_array($query4)) {

                                        ?>
                                        <option  value="<?php echo $datos4['INSTITUCION_ID'] ?>" selected=""><?php echo $datos4['NOMBRE_INSTITUCION'] ?> </option>
                                    <?php
                                }
                                ?>

                                </select>
                            </div>

                        <button type="submit" class="btn btn-primary" name="guardarus">REGISTRA DATOS</button>

                        <div class="container">

                        </div>
                    </div>

                </form>
            </div>
        </main>

    </div>
<script>
function numeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
    especiales = [8,37,39,46];
 
    tecla_especial = false
    for(var i in especiales){
 if(key == especiales[i]){
     tecla_especial = true;
     break;
        } 
    }
 
    if(letras.indexOf(tecla)==-1 && !tecla_especial)
        return false;
}

</script>


<!-- <script>
function checkRut(Rut) {
    // Despejar Puntos
    var valor = Rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    Rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { Rut.setCustomValidity("Rut Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { Rut.setCustomValidity("Rut Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    Rut.setCustomValidity('');
}
</script> -->

<script type="text/javascript">
$(document).ready(function() {
    $('#region').on('change', function() {
        var regionID = $('#region').val();
        if (regionID) {
            $.ajax({
                type: 'POST',
                url: 'ajaxDatos.php',
                data: 'regionID=' + regionID,
                success: function(html) {
                    $('#provincia').html(html);
                    $('#comuna').html(
                        '<option value="">Selecciona Provincia primero</option>');
                }
            });
        } else {
            $('#provincia').html('<option value="">2</option>');
            $('#comuna').html('<option value="">3</option>');
        }
    });

    $('#provincia').on('change', function() {
        var provinciaID = $('#provincia').val();
        if (provinciaID) {
            $.ajax({
                type: 'POST',
                url: 'ajaxDatos.php',
                data: 'provinciaID=' + provinciaID,
                success: function(html) {
                    $('#comuna').html(html);
                }
            });
        } else {
            $('#comuna').html('<option value="">Selecciona provincia</option>');
        }
    });
});
</script>

<!-- Funcion para mostrar la contraseña -->

    <?php include 'footer.php'; ?>