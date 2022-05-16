
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
            <h1 class="subsubtitle">Estudiantes</h1>
            <h2 class="subtitle">Consulta tabla estudiante</h2>
            
            <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./est_nuevo.php'));" >Crear nuevo</button>
            
            <?php
            $v_usuario =  'postgres';
            $v_password = 123456;
            $v_tabla =    'estudiante';

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
                        <th class="label">Fecha nacimiento</th>
                        <th class="label">Semestre</th>
                        <th class="label">Género</th>
                        <th class="label">¿Trabaja?</th>
                        <th class="label">Facebook</th>
                        <th class="label">Id_carrera</th>
                        <th class="label">OPCIONES</th>
                    </tr>
                    <?php
            
                    echo "<BR>";
            
                /*Llamado e impresión de dtos*/
                    if ($v_tabla == "estudiante") {
                        $sql = "select * from $v_tabla";
                        $resultado_set = pg_query($conect, $sql);
                        while ($row = pg_fetch_array($resultado_set)) {
            
                /*Impresión row a row a partir del array pg_fetch_array*/
                    ?>
                            <tr>
                                <td class="subtitle"><?php echo $row["id_estudiante"]; ?></td>
                                <td class="subtitle"><?php echo $row["nombre_est"]; ?></td>
                                <td class="subtitle"><?php echo $row["fecha_nacimiento_est"]; ?></td>
                                <td class="subtitle"><?php echo $row["semestre_est"]; ?></td>
                                <td class="subtitle"><?php echo $row["genero_est"]; ?></td>
                                <td class="subtitle"><?php echo $row["trabaja_est"]; ?></td>
                                <td class="subtitle"><?php echo $row["facebook"]; ?></td>
                                <td class="subtitle"><?php echo $row["id_carrera"]; ?></td>
                                <td class="update">
                                <a href="est_editar.php?
                                    id_estudiante=<?php echo $row["id_estudiante"] ?> &
                                    nombre_estu=<?php echo $row["nombre_est"] ?> &
                                    fecha_nac_est=<?php echo $row["fecha_nacimiento_est"] ?> &
                                    semest_est=<?php echo $row["semestre_est"] ?> &
                                    gen_est=<?php echo $row["genero_est"]?>&
                                    tra_est=<?php echo $row["trabaja_est"] ?> &
                                    face_est=<?php echo $row["facebook"] ?> &
                                    id_carrera_est=<?php echo $row["id_carrera"] ?>
                                 ">Editar</a>
                                <a href="est_eliminar.php?
                                   id_estudiante=<?php echo $row["id_estudiante"] ?>
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
           
           
            <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./Login.php'));" >Regresar</button>
           
          
            

        </div>
    </section>
</body>
</html>