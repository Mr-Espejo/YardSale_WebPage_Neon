<?php
   $id_doc = $_POST['id_doc'];
   $nombre_doc = $_POST['nom_doc'];
   $fecha_doc = $_POST['fecha_nacimiento_doc'];
   $dir_doc = $_POST['dir_doc'];
   $tel_doc = $_POST['tel_doc'];     


   $v_usuario =  'postgres';
   $v_password = 123456;
   $v_tabla =    'docente';


   $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
   $sql = "UPDATE $v_tabla SET id_docente='$id_doc' , nombre_doc='$nombre_doc' , fecha_nacimiento_doc='$fecha_doc' , direccion_doc='$dir_doc' , telefono_doc='$tel_doc' WHERE id_docente=$id_doc";
   $resultado_set = pg_query($conect, $sql);

   if (!$resultado_set) {
       echo "No se actualizó";
   }else{
       header("Location: doc_conexion_pg1.php");
   }
?>