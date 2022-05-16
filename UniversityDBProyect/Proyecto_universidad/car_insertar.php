<?php
   $id_car = $_POST['id_car'];
   $nombre_car = $_POST['nom_car'];
   $semestres_car = $_POST['semestres_car'];

   $v_usuario =  'postgres';
   $v_password = 123456;
   $v_tabla =    'carrera';

   $conect = pg_connect("host=localhost port=5432 dbname=Universidad user=$v_usuario password=$v_password");
   $sql = "INSERT INTO $v_tabla(id_carrera
                               ,nombre_car
                               ,semestres_car) 
                               VALUES(
                                '$id_car'
                                ,'$nombre_car'
                                ,'$semestres_car')";
   $resultado_set = pg_query($conect, $sql);

   if (!$resultado_set) {
       echo "No se insertó";
   }else{
       header("Location: car_conexion_pg1.php");
   }
?>