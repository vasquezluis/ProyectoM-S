<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$dept = $_POST["nombre"];
$consulta = "SELECT Departamento FROM datos_dept";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en" class="p-3 mb-2 bg-light text-dark">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cssPersonalizado.css">
    <title>Influencia de Muertes por Covid19</title>
  </head>

  <body class="p-3 mb-2 bg-light text-dark">
    <div class="p-4 mb-5 text-white rounded bg-dark shadow">
        <div class="">
          <h3 class="my-1 text-center ">Página encargada de mostrar la relación de diferentes variables con la cantidad de muertes que hay en diferentes departamentos de Guatemala acerca de Covid19</h3>
          <br/>
          <h6 class="my-1 text-center ">Analiza la cantidad de muertes de tus departamentos en relación a distintas variables</h6>
        </div>
      </div>

      <!-- LOGIN FORM -->
<div class="text-center" style="padding:10px 0">

  <form id="login-form" class="text-left" action="datos.php" method="POST">
    <div class="form-group text-center " style="">
      <label name="nombre" for="listaDepartamentos text-center">Selecciona el Departamento</label>
      <select class="form-control " style="width:250px; margin:auto; margin:2% auto;" id="listaDepartamentos" name="nombre">
      <?php
            foreach($data as $da){
              echo '<option>'.$da["Departamento"].'</option>';
            }
      ?>
      </select>
      <br><br>
      <button type="submit" class="btn btn-outline-secondary btn-lg" >Mostrar Información del Departamento</button>
    </div>
  </form>
 
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>

  </body>
</html>