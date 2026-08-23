<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/mi_tienda/css/style.css">

    <title>FORMULARIO DE REGISTRO E INICIO SESIÓN</title>
</head>
<body>
    <div class="container-form register registrarse hide">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>
                <div class="icons">
                <img src="http://localhost/mi_tienda/img/logo.png">
                </div>
                <p>Sistema De Informacion E-commerce para una Papeleria</p>
                <form action="" class="form form-register" id="register-form" method="POST">
                    <div>
                        <label>
                        <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Nombre" name="nombre" id="nombre" autocomplete="off" required>
                        </label>
                    </div>
                    <div>
                        <label>
                        <i class='bx bxs-user-circle'></i>
                            <input type="text" placeholder="Nombre de Usuario" name="login" id="login" autocomplete="off" required>
                        </label>
                    </div>
                    <div>
                        <label >
                            <i class='bx bx-envelope' ></i>
                            <input type="email" placeholder="Correo Electronico" name="email" id="email" autocomplete="off" required>
                        </label>
                    </div>
                   <div class="Rol-1">
                        <label>
                        <i class='bx bxs-user-circle'></i>
                        <div class="Rol-1">
                        <select class="Rol" name="tipo_persona" id="tipo_persona" required>
                        <option class="option" value="Cliente">Cliente</option>
                        
                        </select>
                        </div>                                         
                        </label>
                   </div>
                   
                   <div class="input-box">
                   <label >
                   <i class='bx bxs-lock-alt'></i>
                            <input type="password" for="password" placeholder="Contraseña" name="password" id="password" class="password" autocomplete="off" required>
                        </label>
                   </div>
                   <div>
                        <label>
                        <i class='bx bxs-phone'></i>
                            <input type="tel" placeholder="Numero de Telefono" name="telefono" id="telefono" autocomplete="off" required>
                        </label>
                   </div>
                   <div class="contenedor-options">
                   <label>
                        <select name="tipo_documento" id="tipo_documento" required>
                        <option value="V">V</option>
                        <option value="E">E</option>
                        <option value="P">P</option>
                        </select>
        
                            <input type="text" placeholder="Numero de Documento" name="num_documento" id="num_documento" autocomplete="off" required>
                        </label>
                        
                   </div>
                   <div class="direction">
                   <label>
                   <i class='bx bxs-map'></i>
                            <input type="text" placeholder="Direccion" name="direccion" id="direccion" autocomplete="off" required>
                        </label>
                   </div>
                   <div>
                   <input class="form-control" type="file" name="imagen" id="imagen">
      <input type="hidden" name="imagenactual" id="imagenactual">
      <img src="" alt="" width="150px" height="120" id="imagenmuestra">
                   </div>
                    <input type="submit" value="Registrarse" id="registrarse" name="registrarse" onclick="fntRegistarUsuario(1)">               
                </form>
            </div>
        </div>
    </div>


    <div class="container-form login">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido nuevamente!!</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Registrarse" id="sign-up">
                <input type="button" value="Administrador" id="sign-admin">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <div class="icons">
                    <img src="http://localhost/mi_tienda/img/logo.png">
                </div>
                <p>Sistema De Informacion E-commerce para una Papeleria</p>
                <form class="form form-loginad" id="frmAccesoCliente" method="POST">
                <div class="user-details">    
                <div>
                        <label >
                            <i class='bx bxs-user-circle'></i>
                            <div class="input-box">
                            <input type="text" placeholder="Usuario" class="input-field" name="nombre_usuario" id="nombre_usuario" autocomplete="off" required>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <div class="input-box">
                            <input type="password" placeholder="Contraseña" class="input-field" name="password_usuario" id="password_usuario"  autocomplete="off" required>
                            </div>
                        </label>
                    </div>
                    <div class="row">
        <div class="col-xs-8">
                    <div class="col-xs-4">
                    <div class="button">
                    <input type="submit" value="Iniciar Sesión">
                    </div>
                    </div>
        </div>
                    </div>
                    </div>
                    
               
                </form>
            </div>
        </div>
    </div>

   <div class="container-form admin hide">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido Administrador!!</h2>
                <p>Por favor Inicia Sesión con tus datos para continuar...</p>
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Administrador</h2>
                <div class="icons">
                    <img src="http://localhost/mi_tienda/img/logo.png">
                </div>
                <p>Sistema De Informacion E-commerce para una Papeleria</p>
                <form class="form form-login" id="frmAcceso" method="POST">
                <div class="user-details">    
                <div>
                        <label >
                            <i class='bx bxs-user-circle'></i>
                            <div class="input-box">
                            <input type="text" placeholder="Usuario" class="input-field" name="usuario" id="logina" autocomplete="off" required>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <div class="input-box">
                            <input type="password" placeholder="Contraseña" class="input-field" name="password" id="clavea"  autocomplete="off" required>
                            </div>
                        </label>
                    </div>
                    <div class="row">
        <div class="col-xs-8">
                    <div class="col-xs-4">
                    <div class="button">
                    <input type="submit" value="Iniciar Sesión">
                    </div>
                    </div>
        </div>
                    </div>
                    </div>
                    
               
                </form>
            </div>
        </div>
    </div>
    <script src="http://localhost/mi_tienda/js/script.js"></script>
    <script src="http://localhost/mi_tienda/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
	<script src="http://localhost/mi_tienda/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="http://localhost/mi_tienda/public/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/mi_tienda/public/js/bootstrap.min.js"></script>
<script src="http://localhost/mi_tienda/public/js/bootbox.min.js"></script>
<script src="http://localhost/mi_tienda/vistas/scripts/login.js"></script>
<script src="http://localhost/mi_tienda/vistas/scripts/logincliente.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../vistas/scripts/sweetAlert.js"></script>
<script src="http://localhost/mi_tienda/js/registrar.js"></script>
   
</body>
</html>