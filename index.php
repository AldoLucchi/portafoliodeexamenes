<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php

if(trim($_POST["usuario"]) != "" and trim($_POST["clave"]) != ""){
$conexionb=mysqli_connect("localhost","iapty_portafolio","PF15312446","iapty_portafolio") or die(mysqli_error());
//$conexionb=mysqli_connect("localhost","iapty_user","70X;r~pA2V&a","iapty_bd") or die(mysqli_error());
$conexionbd = $conexionb; 	

$sql_login = mysqli_query($conexionbd, "select * from  login where usuario = '".$_POST["usuario"]."' and clave = md5('".$_POST["clave"]."')");
while ($infologin=mysqli_fetch_array($sql_login))
	{
	$_SESSION["idusuario"] = $infologin["idusuario"];	
	}
}


if(trim($_POST["registro"]) != ""){
$conexionb=mysqli_connect("localhost","iapty_portafolio","PF15312446","iapty_portafolio") or die(mysqli_error());
//$conexionb=mysqli_connect("localhost","iapty_user","70X;r~pA2V&a","iapty_bd") or die(mysqli_error());
$conexionbd = $conexionb; 	
$sql_infousuario = mysqli_query($conexionbd, "insert into examenes (nombre, descripcion, codcups , tecnica, tipomuestra, temperatura, condicion_especial, estabilidad_tipomuestra, estabilidad_ambiente, estabilidad_refrigerada, estabilidad_congelada, procesamiento, oportunidad_entrega, observaciones, importancia_clinica, componentes, sede) values ('".$_POST["nombre"]."', '".$_POST["descripcion"]."','".$_POST["codcups"]."','".$_POST["tecnica"]."','".$_POST["tipomuestra"]."','".$_POST["temperatura"]."','".$_POST["condicion_especial"]."','".$_POST["estabilidad_tipomuestra"]."','".$_POST["estabilidad_ambiente"]."','".$_POST["estabilidad_refrigerada"]."','".$_POST["estabilidad_congelada"]."','".$_POST["procesamiento"]."','".$_POST["oportunidad_entrega"]."','".$_POST["observaciones"]."','".$_POST["importancia_clinica"]."','".$_POST["componentes"]."','".$_POST["sede"]."')");
}

?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Unilab | Portafolio</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cheatsheet/">
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        a.page-link:focus {
        color: #74AC24FF;
        border-color: #74AC24FF;
        }
        header.bd-header.bg-gray.py-3.d-flex.align-items-stretch {
        padding-bottom: 0 !important;
        }
        .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #000080 !important;
        border-color: #000080 !important;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      
      ul.pagination.pagination-lg.flex-wrap {
        justify-content: center;
      }

        a.page-link {
        color: #d41c14
        }
      
      .btn-primary:hover {
        color: #fff;
        background-color: #f44336 !important;
        border-color: #f44336 !important;
    }
    
        footer.d-flex.w-100.align-center.justify-content-around {
        position: fixed;
        bottom: 0;
        }
    
    .bd-cheatsheet.container-fluid.bg-body {
    padding: 0;
    }
    
    .modal-body {
    width: 80%;
    max-height: 100vh;
    margin: 0 auto;
    }
    
    a.button-anchor {
    background-color: #74AC24FF;
    text-decoration: none;
    color: white;
    font-weight: 700;
    padding: 0.25rem;
    border-radius: 5px;
    }
    
    ul.pagination.pagination-lg.flex-wrap {
        margin-bottom: 3rem;
    }
    
    .button-container-box {
    margin-top: -140px;
    margin: 0 auto;
    margin-top: -13%;
    margin-left: 45%;
}

button.btn.btn-primary.class-button-edit {
    background-color: #74AC24FF;
    border-color: #74AC24FF;
}
    
    @media (min-width: 768px) {
        td.element-table-title {
            font-size: 12px;
        }
      }
    

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cheatsheet.css" rel="stylesheet">
  </head>
  <body class="bg-light principal-body">
    
<header class="bd-header bg-gray py-3 d-flex align-items-stretch" style="background-color: gray !imporant; position: relative !important;">
  <div class="container-fluid d-flex align-items-center">
     <a href="https://unilab.com.co/new%202023/"> <img src="assets/brand/logo.png" alt="logo"> </a>
    <a href="https://unilab.com.co/new%202023/" class="ms-auto link-secondary h5" hreflang="ar" style="color:#74AC24FF; text-decoration:none; margin-bottom: 0">Volver
    <img src="assets/brand/arrow.png" alt="volver">
    </a>
  </div>
</header>
<!--<aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">-->
<!--  <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">On this page</h2>-->
<!--  <nav class="small" id="toc">-->
<!--    <ul class="list-unstyled">-->
<!--      <li class="my-2">-->
<!--        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">Contents</button>-->
<!--        <ul class="list-unstyled ps-3 collapse" id="contents-collapse">-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#typography">Typography</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#images">Images</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#tables">Tables</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#figures">Figures</a></li>-->
<!--        </ul>-->
<!--      </li>-->
<!--      <li class="my-2">-->
<!--        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse">Forms</button>-->
<!--        <ul class="list-unstyled ps-3 collapse" id="forms-collapse">-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#overview">Overview</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#disabled-forms">Disabled forms</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#sizing">Sizing</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#input-group">Input group</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#floating-labels">Floating labels</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#validation">Validation</a></li>-->
<!--        </ul>-->
<!--      </li>-->
<!--      <li class="my-2">-->
<!--        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse" aria-controls="components-collapse">Components</button>-->
<!--        <ul class="list-unstyled ps-3 collapse" id="components-collapse">-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#accordion">Accordion</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#alerts">Alerts</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#badge">Badge</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#breadcrumb">Breadcrumb</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#buttons">Buttons</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#button-group">Button group</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#card">Card</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#carousel">Carousel</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#dropdowns">Dropdowns</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#list-group">List group</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#modal">Modal</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#navs">Navs</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#navbar">Navbar</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#pagination">Pagination</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#popovers">Popovers</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#progress">Progress</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#scrollspy">Scrollspy</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#spinners">Spinners</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#toasts">Toasts</a></li>-->
<!--          <li><a class="d-inline-flex align-items-center rounded" href="#tooltips">Tooltips</a></li>-->
<!--        </ul>-->
<!--      </li>-->
<!--    </ul>-->
<!--  </nav>-->
<!--</aside>-->
<div class="bd-cheatsheet container-fluid bg-body">
  
<?php 

if($_GET["t"] == "examenes"){ 
include("exameneslis.php");
}
if($_GET["t"] == ""){ 
include("exameneslis.php");
}
if($_GET["t"] == "inicio" or $_GET["t"] == ""){ 
include("inicio.php");
}

if($_GET["exaedit"] > 0){ 
?>
 
        <div class="button-container-box">
		  <button type="button" class="btn btn-primary class-button-edit" data-bs-toggle="modal" data-bs-target="#staticBackdropLivedetallesedit">
            Editar Examen
          </button>
        </div>
<?php } ?>
</div>

<div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleAlfabetico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Orden Alfabético</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <a href="?letra=a"><button style="margin:5px;" type="button" class="btn btn-primary">A</button></a>
        <a href="?letra=b"><button style="margin:5px;" type="button" class="btn btn-primary">B</button></a>
		<a href="?letra=c"><button style="margin:5px;" type="button" class="btn btn-primary">C</button></a>
		<a href="?letra=d"><button style="margin:5px;" type="button" class="btn btn-primary">D</button></a>
		<a href="?letra=e"><button style="margin:5px;" type="button" class="btn btn-primary">E</button></a>
		<a href="?letra=f"><button style="margin:5px;" type="button" class="btn btn-primary">F</button></a>
		<a href="?letra=g"><button style="margin:5px;" type="button" class="btn btn-primary">G</button></a>
		<a href="?letra=h"><button style="margin:5px;" type="button" class="btn btn-primary">H</button></a>
		<a href="?letra=i"><button style="margin:5px;" type="button" class="btn btn-primary">I</button></a>
		<a href="?letra=j"><button style="margin:5px;" type="button" class="btn btn-primary">J</button></a>
		<a href="?letra=k"><button style="margin:5px;" type="button" class="btn btn-primary">K</button></a>
		<a href="?letra=l"><button style="margin:5px;" type="button" class="btn btn-primary">L</button></a>
		<a href="?letra=m"><button style="margin:5px;" type="button" class="btn btn-primary">M</button></a>
		<a href="?letra=n"><button style="margin:5px;" type="button" class="btn btn-primary">N</button></a>
		<a href="?letra=ñ"><button style="margin:5px;" type="button" class="btn btn-primary">Ñ</button></a>
		<a href="?letra=o"><button style="margin:5px;" type="button" class="btn btn-primary">O</button></a>
		<a href="?letra=p"><button style="margin:5px;" type="button" class="btn btn-primary">P</button></a>
		<a href="?letra=q"><button style="margin:5px;" type="button" class="btn btn-primary">Q</button></a>
		<a href="?letra=r"><button style="margin:5px;" type="button" class="btn btn-primary">R</button></a>
		<a href="?letra=s"><button style="margin:5px;" type="button" class="btn btn-primary">S</button></a>
		<a href="?letra=t"><button style="margin:5px;" type="button" class="btn btn-primary">T</button></a>
		<a href="?letra=u"><button style="margin:5px;" type="button" class="btn btn-primary">U</button></a>
		<a href="?letra=v"><button style="margin:5px;" type="button" class="btn btn-primary">V</button></a>
		<a href="?letra=w"><button style="margin:5px;" type="button" class="btn btn-primary">W</button></a>
		<a href="?letra=x"><button style="margin:5px;" type="button" class="btn btn-primary">X</button></a>
		<a href="?letra=y"><button style="margin:5px;" type="button" class="btn btn-primary">Y</button></a>
		<a href="?letra=z"><button style="margin:5px;" type="button" class="btn btn-primary">Z</button></a>
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button style="display:none;" type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="" method="GET" name="formulario1">
    <div class="modal-content">
	
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">Consulta por código</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p><div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="cod" type="text" class="form-control" placeholder="Código" aria-label="Código" aria-describedby="basic-addon1">
        </div></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button onclick="javascript: document.formulario1.submit(); " type="button" class="btn btn-primary">Buscar</button>
      </div>
	
    </div>
	</form>
  </div>
</div>


<div class="modal fade" id="staticBackdropLivenombre" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="" method="GET" name="formulario2">
    <div class="modal-content">
	
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">Consulta por nombre</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">?</span>
          <input name="nom" type="text" class="form-control" placeholder="Nombre de Examen" aria-label="Código" aria-describedby="basic-addon1">
        </div></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button onclick="javascript: document.formulario2.submit(); " type="button" class="btn btn-primary">Buscar</button>
      </div>
	
    </div>
	</form>
  </div>
</div>





<div class="modal fade" id="staticBackdropLivecups" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="" method="GET" name="formulario3">
    <div class="modal-content">
	
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">Consulta por código CUPS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="cups" type="text" class="form-control" placeholder="Código CUPS" aria-label="Código" aria-describedby="basic-addon1">
        </div></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button onclick="javascript: document.formulario3.submit(); " type="button" class="btn btn-primary">Buscar</button>
      </div>
	
    </div>
	</form>
  </div>
</div>






<div class="modal fade" id="staticBackdropLivedetalles" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="" method="POST" name="formularioreg">
    <div class="modal-content">
	
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">Consulta por código CUPS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="nombre" type="text" class="form-control" placeholder="Nombre" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="descripcion" type="text" class="form-control" placeholder="Descripción" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="codcups" type="text" class="form-control" placeholder="Código CUPS" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="tecnica" type="text" class="form-control" placeholder="Técnica" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="tipomuestra" type="text" class="form-control" placeholder="Tipo de Muestra" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="temperatura" type="text" class="form-control" placeholder="Temperatura" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="condicion_especial" type="text" class="form-control" placeholder="Condición Especial" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="estabilidad_tipomuestra" type="text" class="form-control" placeholder="Tipo de Muestra" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="estabilidad_ambiente" type="text" class="form-control" placeholder="Ambiente" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="estabilidad_refrigerada" type="text" class="form-control" placeholder="Refrigerada" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="estabilidad_congelada" type="text" class="form-control" placeholder="Congelada" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="procesamiento" type="text" class="form-control" placeholder="Procesamiento" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="oportunidad_entrega" type="text" class="form-control" placeholder="Oportunidad de Entrega" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="observaciones" type="text" class="form-control" placeholder="Observaciones" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="importancia_clinica" type="text" class="form-control" placeholder="Importancia Clínica" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="componentes" type="text" class="form-control" placeholder="Componentes" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="sede" type="text" class="form-control" placeholder="Sede" aria-label="Código" aria-describedby="basic-addon1">
		  
		   
        </div>
		<input name="registro" type="hidden" value="1">
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button onclick="javascript: document.formularioreg.submit(); " type="button" class="btn btn-primary">Registrar</button>
      </div>
	
    </div>
	</form>
  </div>
</div>




<div class="modal fade" id="staticBackdropLivedetallesedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
<?php



if(trim($_POST["edicion"]) != ""){
$conexionb=mysqli_connect("localhost","iapty_portafolio","PF15312446","iapty_portafolio") or die(mysqli_error());
//$conexionb=mysqli_connect("localhost","iapty_user","70X;r~pA2V&a","iapty_bd") or die(mysqli_error());
$conexionbd = $conexionb; 	
$sql_infousuario = mysqli_query($conexionbd, "update examenes set nombre = '".$_POST["nombre"]."', descripcion = '".$_POST["descripcion"]."', codcups = '".$_POST["codcups"]."' , tecnica = '".$_POST["tecnica"]."', tipomuestra = '".$_POST["tipomuestra"]."', temperatura = '".$_POST["temperatura"]."', condicion_especial = '".$_POST["condicion_especial"]."', estabilidad_tipomuestra = '".$_POST["estabilidad_tipomuestra"]."', estabilidad_ambiente = '".$_POST["estabilidad_ambiente"]."', estabilidad_refrigerada = '".$_POST["estabilidad_refrigerada"]."', estabilidad_congelada = '".$_POST["estabilidad_congelada"]."', procesamiento = '".$_POST["procesamiento"]."', oportunidad_entrega = '".$_POST["oportunidad_entrega"]."', observaciones = '".$_POST["observaciones"]."', importancia_clinica = '".$_POST["importancia_clinica"]."', componentes = '".$_POST["componentes"]."', sede = '".$_POST["sede"]."' where codigo = '".$_POST["codigo"]."'");
}

if(trim($_GET["exaedit"]) > 0){
	
	$conexionb=mysqli_connect("localhost","iapty_portafolio","PF15312446","iapty_portafolio") or die(mysqli_error());
//$conexionb=mysqli_connect("localhost","iapty_user","70X;r~pA2V&a","iapty_bd") or die(mysqli_error());
$conexionbd = $conexionb; 	

$sql_infousuario = mysqli_query($conexionbd, "select * from  examenes where codigo = '".$_GET["exaedit"]."'");
while ($info_estatususuario=mysqli_fetch_array($sql_infousuario))
	{
		


?>


  <div class="modal-dialog">
  <form action="" method="POST" name="formularioedit">
    <div class="modal-content">
	
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">Consulta por código CUPS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="nombre" value="<?php echo $info_estatususuario["nombre"]; ?>" type="text" class="form-control" placeholder="Nombre" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="descripcion" value="<?php echo $info_estatususuario["descripcion"]; ?>" type="text" class="form-control" placeholder="Descripción" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="codcups" value="<?php echo $info_estatususuario["codcups"]; ?>" type="text" class="form-control" placeholder="Código CUPS" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="tecnica" value="<?php echo $info_estatususuario["tecnica"]; ?>" type="text" class="form-control" placeholder="Técnica" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="tipomuestra" value="<?php echo $info_estatususuario["tipomuestra"]; ?>" type="text" class="form-control" placeholder="Tipo de Muestra" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="temperatura" value="<?php echo $info_estatususuario["temperatura"]; ?>" type="text" class="form-control" placeholder="Temperatura" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="condicion_especial" value="<?php echo $info_estatususuario["condicion_especial"]; ?>" type="text" class="form-control" placeholder="Condición Especial" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="estabilidad_tipomuestra" value="<?php echo $info_estatususuario["estabilidad_tipomuestra"]; ?>" type="text" class="form-control" placeholder="Tipo de Muestra" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="estabilidad_ambiente" value="<?php echo $info_estatususuario["estabilidad_ambiente"]; ?>" type="text" class="form-control" placeholder="Ambiente" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="estabilidad_refrigerada" value="<?php echo $info_estatususuario["estabilidad_refrigerada"]; ?>" type="text" class="form-control" placeholder="Refrigerada" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="estabilidad_congelada" value="<?php echo $info_estatususuario["estabilidad_congelada"]; ?>" type="text" class="form-control" placeholder="Congelada" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="procesamiento" value="<?php echo $info_estatususuario["procesamiento"]; ?>" type="text" class="form-control" placeholder="Procesamiento" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="oportunidad_entrega" value="<?php echo $info_estatususuario["oportunidad_entrega"]; ?>" type="text" class="form-control" placeholder="Oportunidad de Entrega" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="observaciones" value="<?php echo $info_estatususuario["observaciones"]; ?>" type="text" class="form-control" placeholder="Observaciones" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="importancia_clinica" value="<?php echo $info_estatususuario["importancia_clinica"]; ?>" type="text" class="form-control" placeholder="Importancia Clínica" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="componentes" value="<?php echo $info_estatususuario["componentes"]; ?>" type="text" class="form-control" placeholder="Componentes" aria-label="Código" aria-describedby="basic-addon1">
        </div>
		
		<div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">#</span>
          <input name="sede" value="<?php echo $info_estatususuario["sede"]; ?>" type="text" class="form-control" placeholder="Sede" aria-label="Código" aria-describedby="basic-addon1">
		  
		   
        </div>
		<input name="edicion" type="hidden" value="1">
		<input name="codigo" type="hidden" value="<?php echo $_GET["exaedit"];?>">
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button onclick="javascript: document.formularioedit.submit(); " type="button" class="btn btn-primary">Editar</button>
      </div>
	
    </div>
	</form>
  </div>
  
  <?php
}}
  ?>
  
</div>


<div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the prefedined max-height of modal, content will be cropped and scrollable within the modal.</p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <p>This content should appear at the bottom after you scroll.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Detalles del exámen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <iframe src="https://iapty.com/portafolio" id="detallesinfo" name="detallesinfo" width="100%" height="100%"> </iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="cheatsheet.js"></script>
</body>
</html>
