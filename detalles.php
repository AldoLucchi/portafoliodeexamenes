<!doctype html>
<html lang="en">
<?php

	$conexionb=mysqli_connect("localhost","iapty_portafolio","PF15312446","iapty_portafolio") or die(mysqli_error());
//$conexionb=mysqli_connect("localhost","iapty_user","70X;r~pA2V&a","iapty_bd") or die(mysqli_error());
$conexionbd = $conexionb; 	

$sql_infousuario = mysqli_query($conexionbd, "select * from  examenes where codigo = '".$_GET["id"]."'");
while ($info_estatususuario=mysqli_fetch_array($sql_infousuario))
	{
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Unilab | Portafolio</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
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
      
     .element-table-title {
    width: 30%;
    text-align: center;
    border-radius: 100px;
    background-color: #000080;
    color: white;
}

.element-table-box p {
    background-color: #000080;
    border-color: #000080;
    color: white;
    border-radius: 10px;
    padding: 4px;
}

td.element-table-info {
    text-align: center;
}

th {
    text-align: center;
}

td {
    text-align: center;
    width: 15%;
}

.element-table-box p {
    background-color: #000080;
    border-color: #000080;
    color: white;
    border-radius: 10px;
} 

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    


<div class="container-fluid details-box">
  <div class="row">
    

    <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $info_estatususuario["nombre"]; ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
         
         
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                  <div class="element-table-box">
                  <p> Codigo: </p>
                  </div>
              </td>
              <td><?php echo $info_estatususuario["codigo"]; ?></td>
			  <td></td>
              <td>
                  <div class="element-table-box">
                  <p> Codigo CUPS: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["codcups"]; ?></td>
              
            </tr>
            <tr class="element-table-box">
              <td>
                  <div class="element-table-box">
                  <p> Descripción: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["descripcion"]; ?></td>
              <td></td>
              <td>
                  <div class="element-table-box">
                  <p> Tecnica: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["tecnica"]; ?></td>
            </tr>
            <tr class="element-table-box">
              <td>
                  <div class="element-table-box">
                  <p> Tipo de Muestra: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["tipomuestra"]; ?></td>
              <td></td>
              <td>
                  <div class="element-table-box">
                  <p> Temperatura: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["temperatura"]; ?></td>
            </tr>
            <tr class="element-table-box">
              <td>
                  <div class="element-table-box">
                  <p> Condicion Especial: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["condicion_especial"]; ?></td>
              <td></td>
              <td>
                  <div class="element-table-box">
                  <p> Estabilidad de Muestra: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["estabilidad_tipomuestra"]; ?></td>
            </tr>
            <tr>
              <td>
                  <div class="element-table-box">
                  <p> Estabilidad del Ambiente: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["estabilidad_ambiente"]; ?></td>
              <td></td>
              <td>
                  <div class="element-table-box">
                  <p> Estabilidad Refrigerada </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["estabilidad_refrigerada"]; ?></td>
            </tr>
            <tr class="element-table-box">
              <td>
                  <div class="element-table-box">
                  <p> Estabilidad Congelada: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["estabilidad_congelada"]; ?></td>
              <td></td>
              <td>
                  <div class="element-table-box">
                  <p> Procesamiento: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["procesamiento"]; ?></td>
            </tr>
            <tr class="element-table-box">
                <td>
                  <div class="element-table-box">
                  <p> Oportunidad de Entrega: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["oportunidad_entrega"]; ?></td>
              <td></td>
              <td>
                  <div class="element-table-box">
                  <p> Observaciones: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["observaciones"]; ?></td>
            </tr>
            <tr class="element-table-box">
              <td>
                  <div class="element-table-box">
                  <p> Importancia Clinica: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["importancia_clinica"]; ?></td>
              <td></td>
              <td>
                  <div class="element-table-box">
                  <p> Componentes: </p>
                  </div>
              </td>
              <td class="element-table-info"><?php echo $info_estatususuario["componentes"]; ?></td>
            </tr>
            <div class="element-table-sede-box" style="margin: 0 auto">
            <tr class="element-table-box w-100">
              <td>
                  <div class="element-table-box">
                  <p> Sede: </p>
                  </div>
              </td>
              <td class="element-table-info sede-box-02"><?php echo $info_estatususuario["sede"]; ?></td>
            </tr>
            </div>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
	<?php } ?>
</html>
