<?php
   $id_est = $_POST['id_est'];
   $nombre_est = $_POST['nom_est'];
   $fecha_est = $_POST['fecha_nacimiento_est'];
   $semestre_est = $_POST['semestre_est'];
   $genero_est = $_POST['genero_est'];     
   $trabaja_est = $_POST['trabaja_est'];
   $facebook_est = $_POST['facebook_est'];
   $id_carrera_est = $_POST['id_carrera_est'];

   $v_usuario =  'postgres';
   $v_password = 123456;
   $v_tabla =    'estudiante';


   $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
   $sql = "UPDATE $v_tabla SET id_estudiante='$id_est' , nombre_est='$nombre_est' , fecha_nacimiento_est='$fecha_est' , semestre_est='$semestre_est' , genero_est='$genero_est' , trabaja_est='$trabaja_est' , facebook='$facebook_est' ,id_carrera='$id_carrera_est' WHERE id_estudiante=$id_est";
   $resultado_set = pg_query($conect, $sql);

   if (!$resultado_set) {
       echo "No se actualizó";
   }else{
       header("Location: est_conexion_pg1.php");
   }
?>