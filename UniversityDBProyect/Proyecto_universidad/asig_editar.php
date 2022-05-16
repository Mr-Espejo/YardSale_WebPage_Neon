<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Estudiantes</title>
    <link  rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

</head>
<body>
<section class="Login">
        
  <?php
    $id_asig = $_GET['id_asig'];
    $nombre_asig = $_GET['nombre_asig'];
    $creditos_asignatura = $_GET['creditos_asig'];
  ?>


    <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <h1 class="subsubtitle">Editar datos: Asignatura</h1>
            <h2 class="subtitle">Modifique los campos necesarios</h2>
    
        <form class="form" action="asig_editar_registro.php" method="post">
            <table class="table" border = "1">
                <tr>
                    <th class="title" >Editar Datos:</th>
                </tr>
                <tr>
                    <td class="label" >ID</td>
                    <td><input type="text" name="id_asig" style="visibility:hidden" value="<?=$id_asig?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label" >Nombre:</td>
                    <td><input type="text" name="nom_asig"  value="<?=$nombre_asig?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label">Número de créditos:</td>
                    <td><input type="number" name="num_creditos"  value="<?=$creditos_asignatura?>" id="email" class="input input-email" ></td>
                </tr>
              
            </table>
            <input type="submit" value="Guardar" class="primary-button login-button" >
        </form>
        <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./est_conexion_pg1.php'));" >Cancelar</button>
           
    </div>

    </section>
</body>
</html>