<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Docentes</title>
    <link  rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

</head>
<body>
<section class="Login">
        
  <?php
    $id_doc = $_GET['id_docente'];
    $nombre_doc = $_GET['nom_doc'];
    $fecha_doc = $_GET['fecha_nac_doc'];
    $dir_doc = $_GET['dir_est'];
    $tel_doc = $_GET['tel_doc'];
  ?>


    <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <h1 class="subsubtitle">Editar datos: Docentes</h1>
            <h2 class="subtitle">Modifique los campos necesarios</h2>
    
        <form class="form" action="doc_editar_registro.php" method="post">
            <table class="table" border = "1">
                <tr>
                    <th class="title" >Editar Datos:</th>
                </tr>
                <tr>
                    <td class="label" >ID</td>
                    <td><input type="text" name="id_doc" style="visibility:hidden" value="<?=$id_doc?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label" >Nombre:</td>
                    <td><input type="text" name="nom_doc"  value="<?=$nombre_doc?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label">Fecha de nacimiento:</td>
                    <td><input type="date" name="fecha_nacimiento_doc"  value="<?=$fecha_doc?>" id="email" class="input input-email" ></td>
                </tr>
                <tr>
                    <td class="label">Direccion:</td>
                    <td><input type="text" name="dir_doc"  value="<?=$dir_doc?>" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label">Teléfono:</td>
                    <td><input type="text" name="tel_doc"  value="<?=$tel_doc?>" id="email" class="input input-email"></td>
                </tr>
               
            </table>
            <input type="submit" value="Guardar" class="primary-button login-button" >
        </form>
        <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./doc_conexion_pg1.php'));" >Cancelar</button>
           
    </div>

    </section>
</body>
</html>