<?php
   $id_car = $_POST['id_car'];
   $nombre_car = $_POST['nom_car'];
   $semestre_car = $_POST['semestre_car'];

   $v_usuario =  'postgres';
   $v_password = 123456;
   $v_tabla =    'carrera';


   $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
   $sql = "UPDATE $v_tabla SET id_carrera='$id_car' , nombre_car='$nombre_car' , semestres_car='$semestre_car' WHERE id_carrera=$id_car";
   $resultado_set = pg_query($conect, $sql);

   if (!$resultado_set) {
       echo "No se actualizó";
   }else{
       header("Location: car_conexion_pg1.php");
   }
?>