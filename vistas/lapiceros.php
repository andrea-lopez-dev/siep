<?php
ob_start();
if (strlen(session_id())<1) 
session_start();
$sesion_nombre = $_SESSION['nombre'];
if (!isset($_SESSION['nombre'])) { 
  $sesion_nombre = $_SESSION['nombre'];
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
  <?php
require "../config/Conexion.php";
if (isset($_GET['categoria'])){
    $categoria=$_GET['categoria'];
    $query=$conexion->query("SELECT * FROM articulo WHERE idcategoria=$categoria");
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
          <i class="bx bx-search"></i>
          <input type="text" id="search" placeholder="Search..." />
          <span class="tooltip">Busca tu producto</span>
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
            <a href="#">
                <i class='bx bx-cart'></i>
                <span class="links_name">Ver carrito</span>
              </a>
              <span class="tooltip">Ver carrito</span>
            </li>
     
        <li class="profile">
          <div class="profile-details">
            <img src="../img/foto.jpeg" alt="profileImg">
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
 if (isset($_GET['articulo'])){
     $articulo=$_GET['categoria'];
     $query=$conexion->query("SELECT * FROM articulo WHERE idcategoria=$articulo");
  }
     ?>
  <?php
                while($lista = $query->fetch_array()){
                    ?>
            <div class="card">
        <img src="../files/articulos/<?php echo ($lista['imagen'])?>">
        <div class="shoe-details">
          <span class="shoe_name"><?php echo ($lista['nombre']);?></span>
          <p><?php echo ($lista['descripcion']);?></p>
          </div>
          
          <div class="price">
          <span class="price_num"><?php echo ($lista['precio']);?> Bs</span>
          <span class="price_letter"> Disponibles: <?php echo ($lista['stock']);?></span>
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
      
      <script src="../vistas/scripts/script.js"></script>
    <script src="../vistas/scripts/scriptscliente.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
