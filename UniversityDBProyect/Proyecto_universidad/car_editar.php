<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Carreras</title>
    <link  rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

</head>
<body>
<section class="Login">
        
  <?php
    $id_car = $_GET['id_carrera'];
    $nombre_car = $_GET['nom_car'];
    $semestre_car = $_GET['sem_car'];

  ?>
    <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <h1 class="subsubtitle">Editar datos: Carreras</h1>
            <h2 class="subtitle">Modifique los campos necesarios</h2>
    
        <form class="form" action="car_editar_registro.php" method="post">
            <table class="table" border = "1">
                <tr>
                    <th class="title" >Editar Datos:</th>
                </tr>
                <tr>
                    <td class="label" >ID</td>
                    <td><input type="text" name="id_car" style="visibility:hidden" value="<?=$id_car?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label" >Nombre:</td>
                    <td><input type="text" name="nom_car"  value="<?=$nombre_car?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label">Número de semestres:</td>
                    <td><input type="text" name="semestre_car"  value="<?=$semestre_car?>" id="email" class="input input-email" ></td>
                </tr>
   
            </table>
            <input type="submit" value="Guardar" class="primary-button login-button" >
        </form>
        <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./car_conexion_pg1.php'));" >Cancelar</button>
           
    </div>

    </section>
</body>
</html>