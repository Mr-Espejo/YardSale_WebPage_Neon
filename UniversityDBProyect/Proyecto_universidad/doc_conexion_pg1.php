
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
            <h1 class="subsubtitle">Docentes</h1>
            <h2 class="subtitle">Consulta tabla docentes</h2>
            
            <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./doc_nuevo.php'));" >Crear nuevo</button>
            
            <?php
            $v_usuario =  'postgres';
            $v_password = 123456;
            $v_tabla =    'docente';

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
                        <th class="label">Dirección</th>
                        <th class="label">Teléfono</th>
                        <th class="label">OPCIONES</th>
                    </tr>
                    <?php
            
                    echo "<BR>";
            
                /*Llamado e impresión de dtos*/
                    if ($v_tabla == "docente") {
                        $sql = "select * from $v_tabla";
                        $resultado_set = pg_query($conect, $sql);
                        while ($row = pg_fetch_array($resultado_set)) {
            
                /*Impresión row a row a partir del array pg_fetch_array*/
                    ?>
                            <tr>
                                <td class="subtitle"><?php echo $row["id_docente"]; ?></td>
                                <td class="subtitle"><?php echo $row["nombre_doc"]; ?></td>
                                <td class="subtitle"><?php echo $row["fecha_nacimiento_doc"]; ?></td>
                                <td class="subtitle"><?php echo $row["direccion_doc"]; ?></td>
                                <td class="subtitle"><?php echo $row["telefono_doc"]; ?></td>
                                <td class="update">
                                <a href="doc_editar.php?
                                    id_docente=<?php echo $row["id_docente"] ?> &
                                    nom_doc=<?php echo $row["nombre_doc"] ?> &
                                    fecha_nac_doc=<?php echo $row["fecha_nacimiento_doc"] ?> &
                                    dir_est=<?php echo $row["direccion_doc"] ?> &
                                    tel_doc=<?php echo $row["telefono_doc"]?>
                                 ">Editar</a>
                                <a href="doc_eliminar .php?
                                   id_docente=<?php echo $row["id_docente"] ?>
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