<?php
   $id_asig = $_POST['id_asig'];
   $nombre_asig = $_POST['nom_asig'];
   $num_creditos_asig = $_POST['num_creditos'];

   $v_usuario =  'postgres';
   $v_password = 123456;
   $v_tabla =    'asignatura';


   $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
   $sql = "UPDATE $v_tabla SET id_asignatura='$id_asig' , nombre_asignatura='$nombre_asig' , creditos_asignatura='$num_creditos_asig' WHERE id_asignatura = $id_asig";
   $resultado_set = pg_query($conect, $sql);

   if (!$resultado_set) {
       echo "No se actualizó";
   }else{
       header("Location: asig_conexion_pg1.php");
   }
?>