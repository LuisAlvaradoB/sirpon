<?php include 'head.php';
include 'conexion.php';

$query = mysqli_query($con, "SELECT REGION_NOMBRE FROM region");
$query1 = mysqli_query($con, "SELECT PROVINCIA_NOMBRE FROM provincia");



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
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Modificar</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="icons.html#regular-icons" class="dash-nav-dropdown-item">Sectores</a>
                                <a href="icons.html#brand-icons" class="dash-nav-dropdown-item">Operador</a>
                            </div>
                        </div>
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Eliminar</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="icons.html#regular-icons" class="dash-nav-dropdown-item">Sectores</a>
                                <a href="icons.html#brand-icons" class="dash-nav-dropdown-item">Operadores</a>
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
                                <input type="text" class="form-control" placeholder="ejem 18.700.672-0" name="Rut">
                            </div>

                            <label>NOMBRES COMPPLETO</label>
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label>APELLIDO PATERNO</label>
                            <input type="text" class="form-control" placeholder="Apellido Paterno" name="ApellidoP">
                        </div>
                        <div class="form-group">
                            <label>APELLIDO MATERNO</label>
                            <input type="text" class="form-control" placeholder="Apellido Materno" name="ApellidoM">
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
                                <input type="text" class="form-control" placeholder="+569..." name="num_telefono_celular">
                            </div>
                            <div class="form-group col-md-3">
                                <label>TELEFONO RED FIJA</label>
                                <input type="text" class="form-control" placeholder="ejem,02 42 46..." name="Telefono_Fijo">
                            </div>
                            <div class="form-group col-md-3">
                                <label>CORREO ELECTRONICO</label>
                                <input type="email" class="form-control" placeholder="no olvidar @" name="correo">
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label>REGION</label>
                                <select class="form-control" name="region">
                                    <?php
                                    while ($datos = mysqli_fetch_array($query)) {

                                        ?>
                                        <option  value="0" selected=""><?php echo $datos['REGION_NOMBRE'] ?> </option>
                                    <?php
                                }
                                ?>

                                </select>
                            </div>


                            <div class="form-group col-md-4">
                                <label>PROVINCIA</label>
                                <select class="form-control" name="provincia">
                                <option>seleccione</option>
                                <?php
                                    while ($datos1 = mysqli_fetch_array($query1)) {

                                        ?>
                                        
                                        <option value="0" selected="1"><?php echo $datos1['PROVINCIA_NOMBRE'] ?> </option>
                                    <?php
                                }
                                ?>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label>COMUNA</label>
                                <select class="form-control" name="comuna">
                                    <option>La Herradura</option>
                                    <option>La Dehesa</option>

                                </select>
                            </div>
                        </div>
                        <button style="margin-right:20px" type="submit" class="btn btn-primary" name="enviar">REGISTRA DATOS</button>
                     
                        
                        <button style="margin-right:20px" type="submit" class="btn btn-primary" name="guardar">MODIFICAR</button>
                        <button style="margin-right:20px" type="submit" class="btn btn-primary" name="guardar">ELIMINAR</button>

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





                    </div><!-- div de class form-row de datos de delincuente como numero etc -->
                    <button type="submit" class="btn btn-primary" name="buscar"> BUSCAR </button>
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
                        <th scope="col">DOMICILIO PARTICULARN</th>>
                        <th scope="col">REGION</th>
                        <th scope="col">PROVINCIA</th>
                        <th scope="col">COMUNA</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    $sql="SELECT * from persona";
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
                        <th><?php echo $mostrar['PROVINCIA_ID']?></th>
                        <th><?php echo $mostrar['COMUNA_ID']?></th>
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
                <form action="" method="POST">
                    <div class="form-group">
                        <div class="form-group">
                            <label>RUT</label>
                            <input type="text" class="form-control" placeholder="ejem 18.700.672-0" name="Rut">
                        </div>

                        <label>NOMBRE DE USUARIO</label>
                        <input type="text" class="form-control" placeholder="Nombre Usuario" name="nombre">
                    </div>
                    <div class="form-group">
                        <label>CONTRASEÑA</label>
                        <input type="password" class="form-control" placeholder="Contraseña" name="ApellidoP">
                    </div>
                    <div class="form-group">
                        <label>FECHA DE CREACION USUARIO</label>
                        <input type="date" class="form-control" placeholder="Fecha" name="ApellidoM">
                    </div>


                    <div class="form-group">
                        <label>ASIGNACION</label>
                        <input type="text" class="form-control" placeholder="Asignacion" name="Direccion_Domicilio">
                    </div>
                    <div class="form-group">
                        <label>INSTITUCION</label>
                        <input type="text" class="form-control" placeholder="Institucion" name="Direccion_Domicilio">
                    </div>
                    <div class="form-row">

                        <button type="submit" class="btn btn-primary" name="guardar">REGISTRA DATOS</button>

                        <div class="container">

                        </div>
                    </div>

                </form>
            </div>
        </main>

    </div>


    <?php include 'footer.php'; ?>