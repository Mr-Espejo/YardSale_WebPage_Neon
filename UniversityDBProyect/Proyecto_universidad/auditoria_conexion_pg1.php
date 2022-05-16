
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
            <h1 class="subsubtitle">Auditoria</h1>
            <h2 class="subtitle"></h2>
            
            
            <?php
            $v_usuario =  'postgres';
            $v_password = 123456;
            $v_tabla =    'auditoria';

            /*Conexion con la base de datos*/

            $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
            ?>
             '<BR>'
             '<BR>'
            <form action="/" class="form">
                <table class="table" border="1" >
                    <tr>
                        <th class="label">Usuario</th>
                        <th class="label">Fecha</th>
                        <th class="label">Acción</th>
                        <th class="label">Tabla</th>
                    </tr>
                    <?php
            
                    echo "<BR>";
            
                /*Llamado e impresión de dtos*/
                    if ($v_tabla == "auditoria") {
                        $sql = "select * from $v_tabla";
                        $resultado_set = pg_query($conect, $sql);
                        while ($row = pg_fetch_array($resultado_set)) {
            
                /*Impresión row a row a partir del array pg_fetch_array*/
                    ?>
                            <tr>
                                <td class="subtitle"><?php echo $row["usuario"]; ?></td>
                                <td class="subtitle"><?php echo $row["fecha"]; ?></td>
                                <td class="subtitle"><?php echo $row["tipo_accion"]; ?></td>
                                <td class="subtitle"><?php echo $row["nombre_tabla"]; ?></td>
                                            
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