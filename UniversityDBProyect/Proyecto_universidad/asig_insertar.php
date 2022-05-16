<?php
   $id_asig = $_POST['id_asig'];
   $nombre_asig = $_POST['nom_asig'];
   $creditos_asig = $_POST['cred_asig'];

   $v_usuario =  'postgres';
   $v_password = 123456;
   $v_tabla =    'asignatura';

   $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
   $sql = "INSERT INTO $v_tabla(id_asignatura
                               ,nombre_asignatura
                               ,creditos_asignatura) 
                               VALUES(
                                '$id_asig'
                                ,'$nombre_asig'
                                ,'$creditos_asig')";
   $resultado_set = pg_query($conect, $sql);

   if (!$resultado_set) {
       echo "No se insertó";
   }else{
       header("Location: asig_conexion_pg1.php");
   }
?>