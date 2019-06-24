<?php include 'head.php';
include 'conexion.php';

$query = mysqli_query($con, "SELECT * FROM region ");
$query1 = mysqli_query($con, "SELECT * FROM provincia");
$query2 = mysqli_query($con, "SELECT  * FROM comuna");
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
                    <h1 class="dash-title">Formulario de Registro de sectores</h1>
                    <!-- put your rows / columns here -->
                    <div class="spur-card-title">Sectores</div>
                </div>
                <div class="card-body ">
                    <form action="registrosectorbd.php" method="POST">
                        <div class="form-group">
                            <div class="form-group">
                                <label>NOMBRE SECTOR</label>
                                <input type="text" class="form-control" placeholder="ej: la herradura" name="nombre">
                            </div>


                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label>REGION</label>
                                    <select class="form-control" name="region">
                                        <?php
                                        while ($datos = mysqli_fetch_array($query)) {

                                            ?>

                                            <option value="<?php echo $datos['REGION_ID'] ?>" selected="1"><?php echo $datos['REGION_NOMBRE'] ?> </option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>PROVINCIA</label>
                                    <select class="form-control" name="provincia">
                                        <<?php
                                            while ($datos1 = mysqli_fetch_array($query1)) {

                                                ?> <option value="<?php echo $datos1['PROVINCIA_ID'] ?>" selected="1"><?php echo $datos1['PROVINCIA_NOMBRE'] ?> </option>
                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>COMUNA</label>
                                    <select class="form-control" name="comuna">
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
                            <button type="submit" class="btn btn-primary" name="enviar">REGISTRA DATOS</button>
                    </form>
                </div>
        </div>

        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col-xs-5">ID</th>
                        <th scope="col-xs-5">NOMBRE SECTOR</th>
                        <th scope="col">REGION</th>
                        <th scope="col">PROVINCIA</th>
                        <th scope="col">COMUNA</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    $sql="SELECT SE.SECTOR_ID, SE.NOMBRE_SECTOR, rg.REGION_NOMBRE, rg.REGION_ID,pr.PROVINCIA_NOMBRE, cm.COMUNA_NOMBRE FROM sector SE INNER JOIN region rg INNER JOIN provincia pr INNER JOIN comuna cm WHERE SE.REGION_ID=rg.REGION_ID AND rg.REGION_ID=SE.REGION_ID and SE.PROVINCIA_ID=pr.PROVINCIA_ID and pr.PROVINCIA_ID=SE.PROVINCIA_ID AND cm.COMUNA_ID = SE.COMUNA_ID";
                    $result=mysqli_query($con,$sql);
                    
                    while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <th scope="row"></th>
                        <td><?php echo $row['SECTOR_ID']?></td>
                        <td><?php echo $row['NOMBRE_SECTOR']?></td>
                        <td><?php echo $row['REGION_ID']?></td>
                        <td><?php echo $row['PROVINCIA_NOMBRE']?></td>
                        <td><?php echo $row['COMUNA_NOMBRE']?></td>
                        <th><a href="modificar-sector.php?SECTOR_ID=<?php echo $row['SECTOR_ID']?>">MODIFICAR</a></th>
                        <th><a href="eliminar-sector.php?ID=<?php echo $row['SECTOR_ID']?>">ELIMINAR</a></th>
                     
                        <!--boton para eliminar-->
                    </tr>
                    <?php
                    }
                    ?>
                    

                </tbody>
                
            </table>
        </main>


    </div>
    </div>

    <?php include 'footer.php'; ?>