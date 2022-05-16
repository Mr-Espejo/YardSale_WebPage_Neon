<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Estudiantes</title>
    <link  rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

</head>
<body>
<section class="Login">
        <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <h1 class="subsubtitle">Ingresar datos: Estudiante</h1>
            <h2 class="subtitle">Ingrese los registros correspondientes  </h2>
    <div>
        <form class="form" action="est_insertar.php" method="post">
            <table class="table" border = "1">
                <tr>
                    <th class="title">Ingresar Datos:</th>
                </tr>
                <tr>
                    <td class="label">ID</td>
                    <td class="subtitle" ><input type="number" name="id_est" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label" >Nombres:</td>
                    <td><input type="text" name="nom_est" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label" >Fecha de nacimiento:</td>
                    <td class="subtitle"><input type="date" name="fecha_nacimiento_est" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label" >Semestre:</td>
                    <td class="subtitle"><input type="text" name="semestre_est" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label" >Género:</td>
                    <td><input type="text" name="genero_est" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label" >¿Trabaja?:</td>
                    <td><input type="text" name="trabaja_est" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label" >Facebook:</td>
                    <td class="input input-email "><input type="text" name="facebook_est" id="email" class="input input-email"></td>
                </tr>
                <tr>
                    <td class="label" >ID_carrera:</td>
                    <td ><input type="number" name="id_carrera_est" id="email"  class="input input-email"></td>
                </tr>
                
                
            
              
            </table>
            <input type="submit" value="Guardar" class="primary-button login-button" >
        </form>
    </div>
</body>
</html>