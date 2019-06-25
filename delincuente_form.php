<?php include 'head.php';
include'conexion.php';
$query = mysqli_query($con, "SELECT * FROM region");
$query1 = mysqli_query($con, "SELECT * FROM provincia");
$query2 = mysqli_query($con, "SELECT*  FROM comuna");


?>

<!DOCTYPE html>
<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <!-- Logo -->
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="page-operador.php" class="spur-logo"><i class="far fa-eye"></i><span>SIRPON</span></a>
            </header>
            <!-- Sidebar de Navegacion -->
            <nav class="dash-nav-list">
                <a href="page-operador.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Inicio </a>
                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="far fa-edit"></i> Ingresar </a>
                    <div class="dash-nav-dropdown-menu">
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">registro</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="delincuente_form.php" class="dash-nav-dropdown-item">crear ficha</a>
                                <a href="antecedentes.php" class="dash-nav-dropdown-item">crear nuevo antecedente</a>
                                <a href="" class="dash-nav-dropdown-item">Buscar Antecedentes</a>
                            </div>
                        </div>
                        
                   
                    </div>
                </div>
                <div class="dash-nav-dropdown show">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-database"></i>Cerrar Sesión </a>
                   
                    </div>
                </div>
                <div class="dash-app">
            
            <main class="dash-content">
                <div class="container-fluid ">
                    <h1 class="dash-title">Bienvenido - Sistema Integrado de Registro para la Prevención Online</h1>
                    <!-- put your rows / columns here -->
                    <div class="spur-card-title"> Ficha de Delincuente </div>
                                </div>
                                <div class="card-body ">
                                    <form action="registro-ficha.php" method="POST" >
                                        <div class="form-group">
                                        <div class="form-group">
                                            <label >Rut</label>
                                            <input minlength="10" maxlength="10" type="text"  class="form-control" placeholder="ejem 18.700.672-0" name="Rut" required
                                                        oninput="checkRut(this)" required>
                                        </div>
                                            <label >NOMBRES COMPELTO</label>
                                            <input type="text" class="form-control" required placeholder="Nombre" name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label >APELLIDO PATERNO</label>
                                            <input type="text" class="form-control" required  placeholder="Apellido Paterno" name="ApellidoP">
                                        </div>
                                        <div class="form-group">
                                            <label >APELLIDO MATERNO</label>
                                            <input type="text" class="form-control" required  placeholder="Apellido Materno" name="ApellidoM">
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label >DIRECCIÓN DE DOMICILIO PARTICULAR</label>
                                            <input type="text" class="form-control" required placeholder="DIRECCIÓN DE DOMICILIO" name="Direccion_Domicilio">
                                        </div>
                                        <div class="form-row">

                                                <div class="form-group col-md-3">
                                                     <label >FECHA DE NACIMIENTO</label>
                                                     <input type="date" class="form-control" required placeholder="Nombre" name="fechaNacimiento">
                                                </div>
                                     
                                                <div class="form-group col-md-3">
                                                      <label >TELEFONO MOVIL</label>
                                                      <input type="tel" class="form-control"required minlength="9" pattern="[0-9]{9}"  placeholder="9 6130 0066" name="num_telefono_celular">
                                                </div>
                                                <div class="form-group col-md-3">
                                                      <label >TELEFONO RED FIJA</label>
                                                      <input type="tel" class="form-control" required placeholder="9 6130 0066" minlength="9" pattern="[0-9]{9}" name="Telefono_Fijo">
                                                </div>
                                                <div class="form-group col-md-3">
                                                      <label >CORREO ELECTRONICO</label>
                                                      <input type="email" class="form-control"  required placeholder="no olvidar @" name="correo">
                                                </div>
                                        </div><!-- div de class form-row de datos de delincuente como numero etc -->
                                        <div class="form-row">
                                                 <div class="form-group col-md-3">
                                                      <label >APODO DEL DELINCUENTE</label>
                                                      <input type="text" class="form-control"  required  placeholder="APODO " name="Apodo_delincuente">
                                                 </div>
                                                <div class="form-group col-md-3">
                                                     <label >ESTADO PENAL</label>
                                                     <input type="text" class="form-control"  required  placeholder="Estado Penal" name="Estado_penal">
                                                </div>
                                                <div class="form-group col-md-3">
                                                     <label >CANTIDAD DE DELITOS</label>
                                                     <input type="text" class="form-control"   required placeholder="Estado Penal" name="CANTIDAD">
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label >ULTIMO LUGAR VISTO</label>
                                                      <input type="text" class="form-control"  required  placeholder="ejem, direccion de la calle" name="Direc_Ultima_Vista">
                                                </div>
                                        </div><!-- div de class form-row de delincuente -->
                                     
                                        <div class="form-row">
     
                                      
                                            <div class="form-group col-md-4">
                                             
                                            <label>REGION</label>
                                                    <select class="form-control" id="region" name="region">
                                                    
                                                    <?php
                                                        while ($datos = mysqli_fetch_array($query)) {
                                                               
                                                        ?>
                                                    
                                                        <option  value="<?php echo $datos['REGION_ID']?>" selected="" n><?php echo $datos['REGION_NOMBRE'] ?> </option>
                                                      
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                                                                                            
                                               
                                            </div>
                                           
                                          <div class="form-group col-md-4">
                                          <label>PROVINCIA</label>
                                <select class="form-control" id="provincia" name="provincia">
                                                                 <?php
                                    while ($datos = mysqli_fetch_array($query1)) {

                                    ?>
                                    <option  value="<?php echo $datos['PROVINCIA_ID']?>" selected=""><?php echo $datos['PROVINCIA_NOMBRE'] ?> </option>
                                <?php
                                 }
                                ?>

                            </select>  
                                            </div>   
                                        <div class="form-group col-md-4">
                                <label>COMUNA</label>
                                <select class="form-control" id="comuna" name="comuna">
                    
                                   <?php
                                    while ($datos = mysqli_fetch_array($query2)) {

                                    ?>
                                     
                                    <option  value="<?php echo $datos['COMUNA_ID']?>" selected=""><?php echo $datos['COMUNA_NOMBRE'] ?> </option>

                                <?php
                                 }
                                ?>

                            </select>
                        </div> 
                       
</div>
<br>
                                        <button type="submit" style="margin-right:80px" class="btn btn-primary" name="enviar">REGISTRA DATOS</button>
                                        <a  href="antecedentes.php" class="btn btn-primary" role="button" aria-pressed="true">CREAR ANTECEDENTES</a>
                                       
                                    </form>
                                    
                                   
                                </div>
                </div>
            </main>
 
         
        </div>
    </div>

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
      <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?PHP include'autocomplete.php' ?> 
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    