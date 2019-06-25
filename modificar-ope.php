<?php include 'head.php';
include 'conexion.php';
$query = mysqli_query($con, "SELECT * FROM region ");
$query1 = mysqli_query($con, "SELECT * FROM provincia");
$query2= mysqli_query($con, "SELECT  * FROM comuna");
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
                <?php
                    $Rut=$_REQUEST['RUT'];
                    $sql="SELECT * FROM persona WHERE RUT='$Rut'";
                    $result=mysqli_query($con,$sql);
                    
                    $mostrar=$result ->fetch_assoc();
                    ?>
                    <form action="mod-proceso.php" method="POST">
                   
                        <div class="form-group">
                            <div class="form-group">
                                <label>RUT</label>
                                <input  REQUIRED minlength="10" maxlength="10" required
                                                        oninput="checkRut(this)" required type="text" class="form-control" REQUIRED placeholder="ejem 18.700.672-0" name="Rut" value="<?php echo $mostrar['RUT'];?>">
                            </div>

                            <label>NOMBRES COMPLETO</label>
                            <input type="text" class="form-control" REQUIRED placeholder="Nombre" name="nombre" value="<?php echo $mostrar['NOMBRE'];?>">
                        </div>
                        <div class="form-group">
                            <label>APELLIDO PATERNO</label>
                            <input type="text" class="form-control"REQUIRED  placeholder="Apellido Paterno" name="ApellidoP" value="<?php echo $mostrar['APELLIDO_PA'];?>">
                        </div>
                        <div class="form-group">
                            <label>APELLIDO MATERNO</label>
                            <input type="text" class="form-control"  REQUIRED placeholder="Apellido Materno" name="ApellidoM" value="<?php echo $mostrar['APELLIDO_MA'];?>">
                        </div>


                        <div class="form-group">
                            <label>DIRECCIÓN DE DOMICILIO PARTICULAR</label>
                            <input type="text" class="form-control" REQUIRED placeholder="DIRECCIÓN DE DOMICILIO" name="Direccion_Domicilio" value="<?php echo $mostrar['DOMICILIO_PARTICULAR'];?>">
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label>FECHA DE NACIMIENTO</label>
                                <input type="date" class="form-control" REQUIRED placeholder="Nombre" name="fechaNacimiento" value="<?php echo $mostrar['FECHA_NACIMIENTO'];?>">
                            </div>

                            <div class="form-group col-md-3">
                                <label>TELEFONO CELULAR</label>
                                <input type="text" class="form-control" REQUIRED placeholder="+569..." name="num_telefono_celular" value="<?php echo $mostrar['TELEFONO'];?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label>TELEFONO RED FIJA</label>
                                <input type="text" class="form-control" REQUIRED placeholder="ejem,02 42 46..." name="Telefono_Fijo" value="<?php echo $mostrar['TELEFONO_RED_FIJA'];?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label>CORREO ELECTRONICO</label>
                                <input type="email" class="form-control" REQUIRED placeholder="no olvidar @" name="correo" value="<?php echo $mostrar['CORREO_ELECTRONICO'];?>">
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
                                        <option  value="<?php echo $datos['REGION_ID'] ?>" selected=""><?php echo $datos['REGION_NOMBRE']; ?> </option>
                                    <?php
                                }
                                ?>

                                </select>
                            </div>


                            <div class="form-group col-md-4">
                                <label>PROVINCIA</label>
                                <select class="form-control" id="provincia" name="provincia">
                                <option>seleccione</option>
                                <?php
                                    while ($datos1 = mysqli_fetch_array($query1)) {
                                        ?>
                                        
                                        <option value="<?php echo $datos1['PROVINCIA_ID'] ?>" selected="1"><?php echo $datos1['PROVINCIA_NOMBRE']; ?> </option>
                                    <?php
                                }
                                ?>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label>COMUNA</label>
                                <select class="form-control" id="region" name="comuna">
                                <option>seleccione</option>
                                <?php
                                    while ($datos2 = mysqli_fetch_array($query2)) {
                                        ?>
                                        
                                        <option value="<?php echo $datos2['COMUNA_ID'] ?>" selected="1"><?php echo $datos2['COMUNA_NOMBRE']; ?> </option>
                                    <?php
                                }
                                ?>

                                </select>
                            </div>
                        </div>
                        <button style="margin-right:20px" type="submit" class="btn btn-primary" name="modificar">REGISTRA DATOS</button>


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

<script>
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
</script> 
                        <?php include 'footer.php'; ?>