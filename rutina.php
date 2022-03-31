<?php
  $conexion = new PDO("sqlsrv:server = dbusmp2022.database.windows.net,1433; Database = DBUSMP", "omarquez14", "Ingeniero123");
?>
<?php
  $cantidad=0;
  $query="SELECT E.idEst,E.nombreEst,E.apePatEst,E.apeMatEst,C.tiempo,C.distancia,ES.fechaCarr
    FROM [dbo].[estudiante] E,[DBO].[resultado_carrera] C,[DBO].[est_resul] ES
    WHERE E.idEst=ES.idEst
    AND C.idResul=ES.idResul";
  $stmt=$conexion->query($query) ;
  $registros =$stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHATBOT_USMP</title>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!--FONT OSWALD-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
            <nav class="nav-main">
            <img src="img/brand.png" alt="CHATBOT_USMP LOGO" class="nav-brand">
            <ul class="nav-menu">
                <li>
                    <a href="quienes_somos.html">Quienes somos?</a>
                </li>
                <li>
                    <a href="#">Seguimiento Personalizado</a>
                </li>
                <li>
                    <a href="Rutina.php">Rutina</a>
                </li>
                <li>
                    <a href="#">Nutrición</a>
                </li>
                <li>
                    <a href="#">Mi cuenta</a>
                </li>

            </ul>  
            <ul class="nav-menu-right"> 
                <li>    
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </li>

            </ul>  
        </nav>
        <hr>
        <!--SHOWCASE -->
        <header class="showcase">
            <h2>Rutina de ejercicios</h2>
            <p>Tenemos más mejores rutinas y seguimiento personalizado.
            </p>
            <a href="#" class="btn"> Informate más<i class="fas fa-angle-double-right"></i>
            </a>
        </header>
    
    <div class="Carreras">
        <h1>Carreras</h1>
    <table>
        <tr>
           <th>
             Nombre
           </th>
           <th>
             Apellido Paterno
           </th>
           <th>
             Apellido Materno
           </th>
           <th>
             Tiempo
           </th>
           <th>
             Distancia
           </th>
           <th>
             Fecha Carrera
           </th>
       </tr>
       <?php foreach($registros as $fila) : ?>
            <?php $cantidad =$cantidad+1 ?>
       <tr>
            <td><?php  echo $fila->nombreEst; ?></td>
            <td><?php  echo $fila->apePatEst; ?></td>
            <td><?php  echo $fila->apeMatEst; ?></td>
            <td><?php  echo $fila->tiempo; ?></td>
            <td><?php  echo $fila->distancia; ?></td>
            <td><?php  echo $fila->fechaCarr; ?></td>
       </tr>

        <?php endforeach; ?>


</table>
        </div>
    
       
    
    </div>    
    
</body>
</html>