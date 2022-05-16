<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Estudiantes</title>
    <link  rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

</head>
<body>
<section class="Login">
<?php
   $id_est = $_GET['id_estudiante'];

   $v_usuario =  'postgres';
   $v_password = 123456;
   $v_tabla =    'estudiante';


   $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
   $sql = "DELETE FROM $v_tabla WHERE id_estudiante=$id_est";
   $resultado_set = pg_query($conect, $sql);

   if (!$resultado_set) {
       echo "No se eliminó";
   }
?>

        <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <h1 class="subsubtitle">Se ha eliminado correctamenta el registro seleccionado</h1>
            </div>
            <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./Consultas.php'));" >Regresar</button>
</body>
</html>