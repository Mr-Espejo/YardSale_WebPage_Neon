<?php
   $id_doc = $_POST['id_doc'];
   $nombre_doc = $_POST['nom_doc'];
   $fecha_nacimiento_doc = $_POST['fecha_nac_doc'];
   $direccion_doc = $_POST['dir_doc'];
   $telefono_doc = $_POST['tel_doc'];

   $v_usuario =  'postgres';
   $v_password = 123456;
   $v_tabla =    'docente';

   $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
   $sql = "INSERT INTO $v_tabla(id_docente
                               ,nombre_doc
                               ,fecha_nacimiento_doc
                               ,direccion_doc
                               ,telefono_doc) 
                               VALUES(
                                '$id_doc'
                                ,'$nombre_doc'
                                ,'$fecha_nacimiento_doc'
                                ,'$direccion_doc'
                                ,'$telefono_doc'
                                )";
   $resultado_set = pg_query($conect, $sql);

   if (!$resultado_set) {
       echo "No se insertó";
   }else{
       header("Location: doc_conexion_pg1.php");
   }
?>