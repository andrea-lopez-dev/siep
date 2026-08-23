<?php 
if (strlen(session_id())<1) 
session_start();
  $sesion_nombre = $_SESSION['nombre'];
  ?>
<script>
Swal.fire({
    title: "¡Bienvenido!",
    text: "Inicio De Sesion Correcto!"<?echo  $sesion_nombre?>,
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
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Sidebar Menu HTML CSS | CodingNepal</title>
    <link rel="stylesheet" href="../css/estyles.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


