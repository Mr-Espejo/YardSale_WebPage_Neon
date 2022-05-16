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
    $id_est = $_GET['id_estudiante'];
    $nombre_est = $_GET['nombre_estu'];
    $fecha_est = $_GET['fecha_nac_est'];
    $semestre_est = $_GET['semest_est'];
    $genero_est = $_GET['gen_est'];     
    $trabaja_est = $_GET['tra_est'];
    $facebook_est = $_GET['face_est'];
    $id_carrera_est = $_GET['id_carrera_est'];
  ?>


    <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <h1 class="subsubtitle">Editar datos: Estudiante</h1>
            <h2 class="subtitle">Modifique los campos necesarios</h2>
    
        <form class="form" action="est_editar_registro.php" method="post">
            <table class="table" border = "1">
                <tr>
                    <th class="title" >Editar Datos:</th>
                </tr>
                <tr>
                    <td class="label" >ID</td>
                    <td><input type="text" name="id_est" style="visibility:hidden" value="<?=$id_est?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label" >Nombres:</td>
                    <td><input type="text" name="nom_est"  value="<?=$nombre_est?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label">Fecha de nacimiento:</td>
                    <td><input type="text" name="fecha_nacimiento_est"  value="<?=$fecha_est?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label">Semestre:</td>
                    <td><input type="text" name="semestre_est"  value="<?=$semestre_est?>" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label">Género:</td>
                    <td><input type="text" name="genero_est"  value="<?=$genero_est?>" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label" >¿Trabaja?:</td>
                    <td><input type="text" name="trabaja_est"  value="<?=$trabaja_est?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label">Facebook:</td>
                    <td><input type="text" name="facebook_est"  value="<?=$facebook_est?>" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label">ID_carrera:</td>
                    <td><input type="text" name="id_carrera_est"  style="visibility:hidden" value="<?=$id_carrera_est?>" id="email" class="input input-email"></td>
                </tr>
                
            </table>
            <input type="submit" value="Guardar" class="primary-button login-button" >
        </form>
        <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./est_conexion_pg1.php'));" >Cancelar</button>
           
    </div>

    </section>
</body>
</html>