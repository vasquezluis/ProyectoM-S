<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$dept = $_POST["nombre"];
$consulta = "SELECT * FROM datos_dept WHERE Departamento = '$dept'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$datosDept = $data[0];
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
    <title>Planificación de Reuniones</title>
  </head>

  <body class="p-3 mb-2 bg-light text-dark">
    <div class="p-4 mb-5 text-white rounded bg-dark shadow">
        <div class="">
          <h3 class="my-1 text-center ">Influencia de muerte en el departamento de <?php echo $dept;?></h3>
          <br/>
          <h6 class="my-1 text-center ">Analiza la cantidad de muertes de tu departamento en relación a distintas variables</h6>
        </div>
      </div>

      <!-- LOGIN FORM -->
<div class="text-center" style="padding:10px 0">
    <div class="main-login-form" style="padding:15px 0" >
        <div class="">
            <div class="form-group login-form-1 login-group">
                <h5 for="PersonasInvitadas" class="text-center text-dark">La probabilidad de muerte de personas con relación a la cantidad de personas que habitan el municipio es de</h5>
                <h3><?php echo $datosDept['InfluenciaPoblacionFallecidos']."%";?></h3>
            </div>
        </div>
    </div>
    <div class="main-login-form" style="padding:15px 0" >
        <div class="">
            <div class="form-group login-form-1 login-group">
                <h5 for="PersonasInvitadas" class="text-center text-dark">La probabilidad de muerte de personas con relación a los sintomas que presenta es de</h5>
                <h3><?php echo $datosDept['InfluenciaSintomasFallecidos']."%";?></h3>
            </div>
        </div>
    </div>  
    <div class="main-login-form" style="padding:15px 0" >
        <div class="">
            <div class="form-group login-form-1 login-group">
                <h5 for="PersonasInvitadas" class="text-center text-dark">La probabilidad de muerte de personas con relación a las muestras tomadas es de </h5>
                <h3><?php echo $datosDept['InfluenciaMuestrasFallecidos']."%";?></h3>
            </div>
        </div>
    </div>
    <div class="main-login-form" style="padding:15px 0" >
        <div class="">
            <div class="form-group login-form-1 login-group">
                <h5 for="PersonasInvitadas" class="text-center text-dark">La probabilidad de muerte de personas con relación a la cantidad personas no vacunadas es de </h5>
                <h3><?php echo $datosDept['InfluenciaVacunadosFallecidos']."%";?></h3>
            </div>
        </div>
    </div>  

    <br><br>

    <form method="get" action="index.php">
        <button type="submit" class="btn btn-outline-dark btn-lg">Regresar
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>

  </body>
</html>