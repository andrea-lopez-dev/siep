<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.php");
} 
?>
<script>
Swal.fire({
    title: "¡Bienvenido!",
    text: "Inicio De Sesion Correcto!",
    allowEscapeKey:false,
    allowOutsideClick:false,
    allowEnterKey:true,
    showConfirmButton:false,
    stopKeydownPropagation:true,
    imageUrl: "http://localhost/mi_tienda/img/logo.png",
  imageHeight: 100,
  imageAlt: "fondo",
  timer:2000,
  width: 600,
  padding: "3em",
  color: "#716add",
  background: "#ffff url(../img/fondo.jpeg)",
  backdrop: `
    rgba(0,0,123,0.4)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
  });
 </script>

 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIEP</title>
    <link rel="stylesheet" href="../css/style1.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../fonts/icomoon/style.css">


    <link rel="stylesheet" href="http://localhost/mi_tienda/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">
    
</head>

<body>

<?php
require "../config/Conexion.php";
if (isset($_GET['categoria'])){
    $categoria=$_GET['categoria'];
    $query=$conexion->query("SELECT * FROM articulo WHERE idcategoria=$categoria");
}
 $catego=$conexion->query("SELECT * FROM categoria");
    ?>

    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="cloud" name="receipt-outline"></ion-icon>
                <span>SIEP</span>
            </div>
          
          

        </div>

        <nav class="navegacion">
            <ul>
                <li>
                <?php
                while($row = $catego->fetch_array()){
                    ?>
                <li>
                
                    <a href="../vistas/lapiceros.php?categoria=<?php echo ($row[0]);?>">
                    <ion-icon name="pencil-outline"></ion-icon>
                        <span><?php echo ($row[1]);?></span>
                    </a>
                  
                </li>
                <?php
                    break;}
                     ?>
                <?php
                while($row = $catego->fetch_array()){
                    ?>
                <li>
                
                    <a href="../vistas/borradores.php?categoria=<?php echo ($row[0]);?>">
                        <ion-icon name="watch-outline"></ion-icon>
                        <span><?php echo ($row[1]);?></span>
                    </a>
                  
                </li>
                <?php
                    break;}
                     ?>

                     <?php
                while($row = $catego->fetch_array()){
                    ?>
              <li>
                
                <a href="../vistas/sacapuntas.php?categoria=<?php echo ($row[0]);?>">
                <ion-icon name="stopwatch-outline"></ion-icon>
                    <span><?php echo ($row[1]);?></span>
                </a>
              
            </li>
            <?php
            break;}
                     ?>   
                      
                      <?php
                while($row = $catego->fetch_array()){
                    ?>
              <li>
                
                <a href="../vistas/sacapuntas.php?categoria=<?php echo ($row[0]);?>">
                <ion-icon name="book-outline"></ion-icon>
                    <span><?php echo ($row[1]);?></span>
                </a>
              
            </li>
            <?php
            break;}
                     ?>   
              
              <?php
                while($row = $catego->fetch_array()){
                    ?>
              <li>
                
                <a href="../vistas/sacapuntas.php?categoria=<?php echo ($row[0]);?>">
                <ion-icon name="reader-outline"></ion-icon>
                    <span><?php echo ($row[1]);?></span>
                </a>
              
            </li>
            <?php
            break;}
                     ?> 
                
                
                      
                      
                <div class="button">                  
                <li>
                    <a>
                        <ion-icon name="cart-outline"></ion-icon>
                        Ver Carrito
                    </a>
                </li>
                </div>
                        
             


                <div class="button">  
                <li>
                    <a href="../ajax/usuariocliente.php?op=salir">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        Cerrar Sesión
                    </a>
                </li>
                </div>
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Modo Oscuro</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">
                            
                        </div>
                    </div>
                </div>
            </div>
    
          
                </div>
            </div>
        </div>

    </div>
  <h1>Contenido</h1>
    <div class="container">
        
        <?php
 require "../config/Conexion.php";
 $query = "SELECT * FROM articulo";
 $resultado = $conexion->query($query);

 while($lista = $resultado->fetch_assoc()){
    ?>
       <form id="formulario" name="formulario" method="post" action="Carrito.php">
        <div class="card">
            <div class="logo-cart">
        <img src="../files/articulos/<?php echo ($lista['imagen'])?>">
        </div>
          <h2><?php echo ($lista['nombre']);?></h2>
          <p><?php echo ($lista['descripcion']);?></p>
          <p> Disponibles <?php echo ($lista['stock']);?></p>
          <p><?php echo ($lista['precio']);?> Bs</p>
          <a href="">Comprar</a>
          <a href="">Añadir al carrito</a>
          </div>
          </form>
    <?php
 }
     ?>        
        </div>
        



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../vistas/scripts/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
 require 'cabezal.php';
 ?>
    
</body>
</html>
<div class="Imagen_Cliente">
     
    </div>

    <script>
Swal.fire({
    title: "¡Bienvenido!",
    text: "¡Ha iniciado sesion correctamente!<?php echo $sesion_nombre; ?>",
    allowEscapeKey:false,
    allowOutsideClick:false,
    allowEnterKey:true,
    showConfirmButton:false,
    stopKeydownPropagation:true,
    imageUrl: "http://localhost/mi_tienda/img/logo.png",
  imageHeight: 100,
  imageAlt: "fondo",
  timer:2000,
  width: 600,
  padding: "3em",
  color: "0000",
  background: "#ffff url(../img/fondo.jpeg)",
  backdrop: `
    rgba(0,0,0,0.4)
    left top
    no-repeat
  `
  });
 </script>