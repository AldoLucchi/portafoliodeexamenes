 <style>
     .margin-alert {
         margin-right: 5rem;
         margin-left: 5rem;
     }
     button.btn.btn-primary {
        background: #000080;
        border-color: #000080;
    }
    .text-center.alert.alert-info.alert-dismissible.fade.show.margin-alert.h4 {
        background-color: gray;
        color: white;
        border: none;
    }
    button.accordion-button {
    background-color: #000080 !important;
    color: white !important;
    font-size: 22px;
    }
 </style>
 <section class="px-3 pt-4 text-center" style="border-bottom: 1px solid gray">
     <h1 style="color:#041C52FF">
         Portafolio de Exámenes Médicos
     </h1>
     <p>
         El variado conjunto de servicios de análisis y procesamiento de <span style="font-weight:bold;color:#041C52FF">Laboratorio Clínico UNILAB</span> se presenta como una herramienta esencial para la gestión de exámenes médicos, abarcando desde análisis de rutina hasta pruebas especializadas de alta complejidad. <span style="font-weight:bold;color:#041C52FF">Nuestro portafolio ofrece una completa guía de referencia que detalla aspectos cruciales </span> como la toma de muestras, la estabilidad de las mismas, las técnicas empleadas, la puntualidad en los resultados y su relevancia en el contexto clínico.
     </p>
 </section>
 <section id="components">
    <!--<h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3" style="text-transform:uppercase;">Portafolio Web</h2>-->
	
	 <article class="my-3" id="breadcrumb">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
         </div>

     <div class=container-fluid>
        <div class="bd-example">
		<div class="text-center alert alert-info alert-dismissible fade show margin-alert h4" role="alert">
          Seleccione un filtro para comenzar
          <button type="button" class="btn-close btn-cerrar" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
		
        <div class="d-flex justify-content-center flex-wrap" style="gap: 2rem; padding-top: 2rem">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleAlfabetico">
            Orden Alfabético
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
            Consulta por Código
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLivenombre">
            Consulta por nombre
          </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLivecups">
            Consulta por Código CUPS
          </button>
		  
		  <?php if($_SESSION["idusuario"] > 0){ ?>
		  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLivedetalles">
            Nuevo Examen
          </button>
		  <?php } ?>
		  
		  
		  
        </div>
        </div>
      </div>
    </article>

    <article class="my-3" id="accordion">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        </div>

      <div>
        <div class="bd-example container-fluid">
        <div class="accordion" id="accordionExample">
		
		
		  
		<?php
		
	$conexionb=mysqli_connect("localhost","iapty_portafolio","PF15312446","iapty_portafolio") or die(mysqli_error());
//$conexionb=mysqli_connect("localhost","iapty_user","70X;r~pA2V&a","iapty_bd") or die(mysqli_error());
$conexionbd = $conexionb; 	
// Número de resultados por página
$resultados_por_pagina = 5;

// Página actual
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el inicio del conjunto de resultados basado en la página actual
$inicio = ($pagina - 1) * $resultados_por_pagina;

if(trim($_GET["letra"]) != ""){
// Consulta SQL con LIMIT para obtener solo los resultados de la página actual
$sql_infousuario = mysqli_query($conexionbd, "SELECT * FROM examenes where nombre like '".$_GET["letra"]."%' ORDER BY nombre ASC LIMIT $inicio, $resultados_por_pagina");
}

if(trim($_GET["nom"]) != ""){
// Consulta SQL con LIMIT para obtener solo los resultados de la página actual
$sql_infousuario = mysqli_query($conexionbd, "SELECT * FROM examenes where nombre like '%".$_GET["nom"]."%' ORDER BY nombre ASC LIMIT $inicio, $resultados_por_pagina");
}

if(trim($_GET["cod"]) != ""){
// Consulta SQL con LIMIT para obtener solo los resultados de la página actual
$sql_infousuario = mysqli_query($conexionbd, "SELECT * FROM examenes where  codigo =  '".$_GET["cod"]."' ORDER BY nombre ASC LIMIT $inicio, $resultados_por_pagina");
}

if(trim($_GET["cups"]) != ""){
// Consulta SQL con LIMIT para obtener solo los resultados de la página actual
$sql_infousuario = mysqli_query($conexionbd, "SELECT * FROM examenes where codcups = '".$_GET["cups"]."' ORDER BY nombre ASC LIMIT $inicio, $resultados_por_pagina");
}

$cont = 0;
while ($info_infousuario = mysqli_fetch_array($sql_infousuario)) {
    $cont = $cont + 1;

    ?>
    <div class="accordion-item">
        <h4 class="accordion-header" id="headingOne<?php echo $cont; ?>">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $cont; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $cont; ?>">
                <?php echo $info_infousuario["nombre"]; ?>
            </button>
        </h4>
        <div id="collapseOne<?php echo $cont; ?>" class="accordion-collapse collapse <?php if ($cont == 1) { ?> show <?php } ?>" aria-labelledby="headingOne<?php echo $cont; ?>" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <?php echo $info_infousuario["descripcion"]; ?>
				
				
				<br><br>
				<button onclick="javascript: window.open('https://iapty.com/portafolio/detalles.php?id=<?php echo $info_infousuario["codigo"]; ?>', 'detallesinfo');" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
            Consultar Ficha Técnica
          </button>
				<?php if($_SESSION["idusuario"] > 0){ ?>
				<br><br>
				<a class="button-anchor" href="?exaedit=<?php echo $info_infousuario["codigo"]; ?>">[Editar]</a>
				<?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Agregar controles de paginación -->
<div class="pagination">
    <?php
    // Calcular el número total de páginas
    
	if($_GET["letra"] != ""){
	$sql_total = mysqli_query($conexionbd, "SELECT COUNT(*) as total FROM examenes where nombre like '".$_GET["letra"]."%'");
    }
	
	if($_GET["nom"] != ""){
	$sql_total = mysqli_query($conexionbd, "SELECT COUNT(*) as total FROM examenes where nombre like '%".$_GET["nom"]."%'");
    }
	
	if($_GET["cod"] != ""){
	$sql_total = mysqli_query($conexionbd, "SELECT COUNT(*) as total FROM examenes where codigo = '".$_GET["cod"]."'");
    }
	
	if($_GET["cups"] != ""){
	$sql_total = mysqli_query($conexionbd, "SELECT COUNT(*) as total FROM examenes where codcups = '".$_GET["cups"]."'");
    }
	
	
	$fila_total = mysqli_fetch_assoc($sql_total);
    $total_paginas = ceil($fila_total['total'] / $resultados_por_pagina);

    // Mostrar enlaces de páginas
    
    ?>
</div>
		
		  
        

        </div>
        </div>
      </div>
    </article>
   
   
    
   
   
    <article class="my-3" id="pagination">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
         </div>

      <div>
        

        <div class="bd-example">
        <nav aria-label="Another pagination example">
          <ul class="pagination pagination-lg flex-wrap">
		  
		  
		  <?php if( $_GET["pagina"] > 1 ){ ?>
            <li class="page-item ">
              <a class="page-link" href="<?php echo "?pagina=".($_GET["pagina"]-1)."&letra=".$_GET["letra"]."&cod=".$_GET["cod"]."&cups=".$_GET["cups"]."&nom=".$_GET["nom"];?>" tabindex="-1" aria-disabled="true">Anterior</a>
            </li>
         <?php } ?>
			
			<?php
			for ($i = 1; $i <= $total_paginas; $i++) {
				?>
				<li class="page-item <?php if($_GET["pagina"] == $i){ ?>active<?php } ?> " aria-current="page">
              <a class="page-link" href="<?php echo "?pagina=$i"."&letra=".$_GET["letra"]."&cod=".$_GET["cod"]."&cups=".$_GET["cups"]."&nom=".$_GET["nom"];?>"><?php echo $i;?></a>
            </li>
				<?php
       // echo "<a href=''>$i</a> ";
    }
			?>
 <?php if($_GET["pagina"] < $total_paginas){ ?>
            <li class="page-item">
              <a class="page-link" href="<?php echo "?pagina=".($_GET["pagina"]+1)."&letra=".$_GET["letra"]."&cod=".$_GET["cod"]."&cups=".$_GET["cups"]."&nom=".$_GET["nom"];?>">Siguiente</a>
            </li>
			 <?php } ?>
          </ul>
        </nav>
        </div>
      </div>
    </article>
    <footer class="d-flex w-100 align-center justify-content-around" style="background-color: #161616; border-top-color: #272727">
        <div class="d-flex px-1" style="gap: 4rem">
        <div>
            <p  class="p-2" style="color:#99a9b5; margin-bottom: 0 !important">2023 Sistemas  <span style="color:#74AC24FF">Unilab SAS ©</span></p>
        </div>
    </div>
</footer>
  </section>