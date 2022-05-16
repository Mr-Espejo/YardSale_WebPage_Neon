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
   $sql = "INSERT INTO $v_tabla(id_estudiante
                               ,nombre_est
                               ,fecha_nacimiento_est
                               ,semestre_est
                               ,genero_est
                               ,trabaja_est
                               ,facebook
                               ,id_carrera) 
                               VALUES(
                                '$id_est'
                                ,'$nombre_est'
                                ,'$fecha_est'
                                ,'$semestre_est'
                                ,'$genero_est'
                                ,'$trabaja_est'
                                ,'$facebook_est'
                                ,'$id_carrera_est')";
   $resultado_set = pg_query($conect, $sql);

   if (!$resultado_set) {
       echo "No se insertó";
   }else{
       header("Location: est_conexion_pg1.php");
   }
?>