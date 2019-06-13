<?php include 'head.php'; ?>

<body>
    <div class="form-screen">
        <a href="#" class="spur-logo"><i class="far fa-eye"></i> <span>SIRPON</span></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white"> Iniciar Sesión </div>
            <div class="card-body">
                <form action="verificacion-login.php" method="POST">
                    <div class="form-group">
                        <div class="combobox-container">
                            <input type="hidden" name="normal" value="">
                            <!-- <div class="input-group">
                                <input type="text" autocomplete="off" id="NaN" placeholder="Select a State"
                                    class="combobox input-large form-control">
                                <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> 
                                    <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span>
                            </div> -->
                            <select class="combobox input-large form-control" style="display: none;">
                                <option value="" selected="selected">Selecciona Institución</option>
                                <option value="AL">Carabineros de Chile</option>
                                <option value="AK">Grupo Security</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Ingrese Correo Electrónico">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Ingresa Contraseña">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Recuérdame</label>
                        </div>
                    </div>
                    <div class="account-dialog-actions">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                        <!-- <a class="account-dialog-link" href="signup.html">Create a new account</a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>