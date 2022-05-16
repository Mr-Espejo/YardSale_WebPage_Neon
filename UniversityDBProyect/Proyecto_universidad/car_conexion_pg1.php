
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
    <link  rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <section class="Login">
        <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <h1 class="subsubtitle">Carreras</h1>
            <h2 class="subtitle">Consulta tabla carrera</h2>
            
            <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./car_nuevo.php'));" >Crear nuevo</button>
            
            <?php
            $v_usuario =  'postgres';
            $v_password = 123456;
            $v_tabla =    'carrera';

            /*Conexion con la base de datos*/

            $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
            ?>
             '<BR>'
             '<BR>'
            <form action="/" class="form">
                <table class="table" border="1" >
                    <tr>
                        <th class="label">ID</th>
                        <th class="label">Nombre</th>
                        <th class="label">Semestres</th>
                        <th class="label">OPCIONES</th>
                    </tr>
                    <?php
            
                    echo "<BR>";
            
                /*Llamado e impresión de dtos*/
                    if ($v_tabla == "carrera") {
                        $sql = "select * from $v_tabla";
                        $resultado_set = pg_query($conect, $sql);
                        while ($row = pg_fetch_array($resultado_set)) {
            
                /*Impresión row a row a partir del array pg_fetch_array*/
                    ?>
                            <tr>
                                <td class="subtitle"><?php echo $row["id_carrera"]; ?></td>
                                <td class="subtitle"><?php echo $row["nombre_car"]; ?></td>
                                <td class="subtitle"><?php echo $row["semestres_car"]; ?></td>
                                <td class="update">
                                <a href="car_editar.php?
                                    id_carrera=<?php echo $row["id_carrera"] ?> &
                                    nom_car=<?php echo $row["nombre_car"] ?> &
                                    sem_car=<?php echo $row["semestres_car"] ?> 
                                 ">Editar</a>
                                <a href="car_eliminar.php?
                                   id_carrera=<?php echo $row["id_carrera"] ?>
                                ">Eliminar</a>
                                </td>
                            </tr>
                    <?php
                        }
                    };
            
                    pg_close($conect);
                    ?>
            
            
            
            
                </table>
            </form>
           
           
            <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./Login.html'));" >Regresar</button>
           
          
            

        </div>
    </section>
</body>
</html>