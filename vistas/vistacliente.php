<?php
ob_start();
if (strlen(session_id())<1) 
session_start();
$sesion_nombre = $_SESSION['nombre'];
$sesion_imagen = $_SESSION['imagen']; 

if (!isset($_SESSION['nombre'], $_SESSION['imagen'])) { 
  $sesion_nombre = $_SESSION['nombre'];
  $sesion_imagen = $_SESSION['imagen']; 
}
?>

<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Sidebar Menu HTML CSS | CodingNepal</title>
    <link rel="stylesheet" href="http://localhost/mi_tienda/css/estyles.css" />
    <link rel="stylesheet" href="http://localhost/mi_tienda/css/aos.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  </head>
  <body>
    <header class="hero">
    </header>
    

    <section class="modal">
      <div class="modal_container">
      <label class="modal_title" for="">Editar perfil</label>
      <input class="control">
      <input class="modal_control">
      <button class="btn btn-primary" type="submit" id="Guardar"><i class="fa fa-save"></i>Guardar</button> 
    </div>
     
    </section>
    <?php
        include("../config/Conexion.php");
        $where="";

        if(isset($_GET['enviar'])){
          $busqueda = $_GET['busqueda'];

           if (isset($_GET['busqueda'])){
            $where="WHERE persona.login LIKE'%".$busqueda."%' OR nombre LIKE'%".$busqueda."%'
            OR categoria LIKE'%".$busqueda."%'";
           }

        }
        ?>
  <?php
require "../config/Conexion.php";
if (isset($_GET['categoria'])){
    $categoria=$_GET['categoria'];
    $query=$conexion->query("SELECT * FROM articulo WHERE idcategoria=$categoria $where");
}
 $catego=$conexion->query("SELECT * FROM categoria");
    ?>
    

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-stripe icon'></i>
          <div class="logo_name">SIEP</div>
          <i class="bx bx-menu" id="btn"></i>
        </div>
      <ul class="nav-list">
        <li>
          <form action="" method="GET">
          <i class="bx bx-search"></i>
          <input type="search" id="search" name="busqueda" placeholder="Search..." />
          <button class="tooltip" type="submit" name="enviar">Busca tu producto</button>
          </form>
        </li>
        <li>
          <a href="../vistas/vistacliente.php">
            <i class='bx bxs-home'></i>
            <span class="links_name">Inicio</span>
          </a>
          <span class="tooltip">Inicio</span>
        </li>
        <li>
        <?php
                while($row = $catego->fetch_array()){
                    ?>
          <a href="../vistas/lapiceros.php?categoria=<?php echo ($row[0]);?>">
            <i class='bx bxs-edit-alt'></i>
            <span class="links_name"><?php echo ($row[1]);?></span>
          </a>
          <span class="tooltip">Lapiceros</span>
        </li>
        <?php
                    break;}
                     ?>
        <li>
        <?php
                while($row = $catego->fetch_array()){
                    ?>
          <a href="../vistas/borradores.php?categoria=<?php echo ($row[0]);?>">
            <i class='bx bx-eraser'></i>
            <span class="links_name"><?php echo ($row[1]);?></span>
          </a>
          <span class="tooltip">Borradores</span>
        </li>
        <?php
                    break;}
                     ?>
        <li>
        <?php
                while($row = $catego->fetch_array()){
                    ?>
          <a href="../vistas/sacapuntas.php?categoria=<?php echo ($row[0]);?>">
            <i class='bx bx-food-tag'></i>
            <span class="links_name"><?php echo ($row[1]);?></span>
          </a>
          <span class="tooltip">Sacapuntas</span>
        </li>
        <?php
            break;}
                     ?> 
        <li>
        <?php
                while($row = $catego->fetch_array()){
                    ?>
          <a href="../vistas/libretas.php?categoria=<?php echo ($row[0]);?>">
          <i class='bx bxs-book-heart'></i>
            <span class="links_name"><?php echo ($row[1]);?></span>
          </a>
          <span class="tooltip">Libretas</span>
        </li>
        <?php
            break;}
                     ?> 
        <li>
        <?php
                while($row = $catego->fetch_array()){
                    ?>
          <a href="../vistas/carpetas.php?categoria=<?php echo ($row[0]);?>">
            <i class='bx bx-clipboard'></i>
            <span class="links_name"> <span><?php echo ($row[1]);?></span></span>
          </a>
          <span class="tooltip">Carpetas</span>
        </li>
        <?php
            break;}
                     ?>  
        <li>
            <a class="carrito">
                <i class='bx bx-cart'></i>
                <span class="links_name">Ver carrito</span>
              </a>
              <span class="tooltip">Ver carrito</span>
            </li>
     
        <li class="profile">
          <div class="profile-details">
            <img src="../files/clientes/<?php echo $sesion_imagen; ?>" alt="Client Image">
            <div class="name_user">
              <div class="name"><?php echo $sesion_nombre; ?></div>
              <div class="job">Usuario</div>
            </div>
          </div>
          <a href="../ajax/usuariocliente.php?op=salir">
          <i class="bx bx-log-out" id="log_out"></i>
          </a>
        </li>
      </ul>
    </div>
        <div class="container"> 
        <?php
 require "../config/Conexion.php";
 $query = "SELECT * FROM articulo";
 $resultado = $conexion->query($query);

 while($lista = $resultado->fetch_assoc()){
    ?>
       
        <div class="card">
        <img src="../files/articulos/<?php echo ($lista['imagen'])?>">
        <div class="shoe-details">
          <span class="shoe_name"><?php echo ($lista['nombre']);?></span>
          <p><?php echo ($lista['descripcion']);?></p>
          </div>
          
          <div class="price">
          <span class="price_num"><?php echo ($lista['precio']);?> Bs</span>
          <span class="price_letter"> Disponibles <?php echo ($lista['stock']);?></span>
          </div>
          
          <div class="button">
          <div class="button-layer">
          <button><i class='bx bxs-cart-download'></i>  Añadir al carrito</button>
          </div>
          </div>
          </div>
      
    <?php
 }
     ?>        
        </div>
    

    <script src="../vistas/scripts/scriptscliente.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="http://localhost/mi_tienda/public/js/jquery.min.js"></script>
 <script src="../vistas/scripts/modal.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
         crossorigin="anonymous">
        </script>
         <script src="../vistas/scripts/script.js"></script>
 <script src="http://localhost/mi_tienda/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  </body>
</html>
