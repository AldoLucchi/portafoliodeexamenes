<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cheatsheet · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cheatsheet/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
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
  <body class="bg-light">
    
<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
  <div class="container-fluid d-flex align-items-center">
    <h1 class="d-flex align-items-center fs-4 text-white mb-0">
      <img src="assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="me-3" alt="Bootstrap">
      Cheatsheet
    </h1>
    <!--<a href="../examples/cheatsheet-rtl/" class="ms-auto link-light" hreflang="ar">RTL cheatsheet</a>-->
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
  

  <section id="components">
    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Components</h2>
	
	 <article class="my-3" id="breadcrumb">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
         </div>

      <div>
        <div class="bd-example container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
        </div>
      </div>
    </article>

    <article class="my-3" id="accordion">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        </div>

      <div>
        <div class="bd-example">
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

// Consulta SQL con LIMIT para obtener solo los resultados de la página actual
$sql_infousuario = mysqli_query($conexionbd, "SELECT * FROM examenes ORDER BY nombre ASC LIMIT $inicio, $resultados_por_pagina");

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
            </div>
        </div>
    </div>
<?php } ?>

<!-- Agregar controles de paginación -->
<div class="pagination">
    <?php
    // Calcular el número total de páginas
    $sql_total = mysqli_query($conexionbd, "SELECT COUNT(*) as total FROM examenes");
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
              <a class="page-link" href="<?php echo "?pagina=".($_GET["pagina"]-1);?>" tabindex="-1" aria-disabled="true">Anterior</a>
            </li>
         <?php } ?>
			
			<?php
			for ($i = 1; $i <= $total_paginas; $i++) {
				?>
				<li class="page-item <?php if($_GET["pagina"] == $i){ ?>active<?php } ?> " aria-current="page">
              <a class="page-link" href="<?php echo "?pagina=$i";?>"><?php echo $i;?></a>
            </li>
				<?php
       // echo "<a href=''>$i</a> ";
    }
			?>
 <?php if($_GET["pagina"] < $total_paginas){ ?>
            <li class="page-item">
              <a class="page-link" href="<?php echo "?pagina=".($_GET["pagina"]+1);?>">Siguiente</a>
            </li>
			 <?php } ?>
          </ul>
        </nav>
        </div>
      </div>
    </article>
   
  </section>
</div>

<div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>I will not close if you click outside me. Don't even try to press escape key.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="cheatsheet.js"></script>
  </body>
</html>
